<?php 
    class Router {
        private array $routes = [];

        private function removeBasePath(string $uri): string
        {
            $basePath = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
            $uri = $basePath ? str_replace($basePath, '', $uri) : $uri;
            return '/' . ltrim($uri, '/');
        }

        public function get(string $path, array $action)
        {
            $this->routes['GET'][$path] = $action;
        }

        public function post(string $path, array $action)
        {
            $this->routes['POST'][$path] = $action;
        }

        public function put(string $path, array $action)
        {
            $this->routes['PUT'][$path] = $action;
        }

        public function delete(string $path, array $action)
        {
            $this->routes['DELETE'][$path] = $action;
        }

        private function matchRoute(string $pattern, string $uri): ?array
        {
            $pattern = preg_replace('/:(\w+)/', '([^/]+)', $pattern);
            $pattern = '#^' . $pattern . '$#';

            if (preg_match($pattern, $uri, $matches)) {
                array_shift($matches);
                return $matches;
            }

            return null;
        }

        public function run()
        {
            $method = $_SERVER['REQUEST_METHOD'];
            $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            
            $uri = $this->removeBasePath($uri);
        
            if (isset($this->routes[$method][$uri])) {
                [$controller, $methodAction] = $this->routes[$method][$uri];
                call_user_func([new $controller(), $methodAction]);
                return;
            }
        
            foreach ($this->routes[$method] ?? [] as $pattern => $action) {
                $params = $this->matchRoute($pattern, $uri);
                if ($params !== null) {
                    [$controller, $methodAction] = $action;
                    call_user_func_array([new $controller(), $methodAction],    $params);
                    return;
                }
            }
        
            http_response_code(404);
            echo json_encode(['error' => 'Route not found']);
        }
    }
?>