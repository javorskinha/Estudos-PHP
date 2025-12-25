<?php 
    class Router {
        private array $routes = [];

        public function get(string $path, array $action)
        {
            $this->routes['GET'][$path] = $action;
        }

        public function post(string $path, array $action)
        {
            $this->routes['POST'][$path] = $action;
        }

        public function run()
        {
            $method = $_SERVER['REQUEST_METHOD'];
            $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

            if (!isset($this->routes[$method][$uri])) {
                http_response_code(404);
                echo json_encode(['error' => 'Route not found']);
                return;
            }

            [$controller, $methodAction] = $this->routes[$method][$uri];
            call_user_func([new $controller(), $methodAction]);
        }
    }
?>