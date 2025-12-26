<?php
    require_once __DIR__ . "/../models/Product.php";

    class ProductController {
        public function index()
        {
            try {
                header('Content-Type: application/json');
                $products = Product::all();
                
                echo json_encode([
                    'success' => true,
                    'data' => $products,
                ]);
            } catch (Exception $e) {
                http_response_code(500);
                echo json_encode([
                    'success' => false,
                    'message' => $e->getMessage(),
                ]);
            }
        }

        public function store()
        {
            try {
                header('Content-Type: application/json');
                $data = json_decode(file_get_contents('php://input'), true);
                
                if (!$data) {
                    throw new Exception("Dados inválidos");
                }
                
                $product = Product::create($data);
                
                http_response_code(201);
                echo json_encode([
                    'success' => true,
                    'message' => 'Produto criado com sucesso',
                    'data' => $product,
                ]);
            } catch (Exception $e) {
                http_response_code(400);
                echo json_encode([
                    'success' => false,
                    'message' => $e->getMessage(),
                ]);
            }
        }

        public function update($id)
        {
            try {
                header('Content-Type: application/json');
                $data = json_decode(file_get_contents('php://input'), true);
                
                $product = Product::update($id, $data);

                http_response_code(200);
                echo json_encode([
                    'success' => true,
                    'message' => 'Produto atualizado com sucesso',
                    'data' => $product,
                ]);
            } catch (Exception $e) {
                http_response_code(500);
                echo json_encode([
                    'success' => false,
                    'message' => $e->getMessage(),
                ]);
            }
        }

        public function delete($id)
        {
            try {
                header('Content-Type: application/json');
                Product::delete($id);

                http_response_code(200);
                echo json_encode([
                    'success' => true,
                    'message' => 'Produto deletado com sucesso',
                ]);
            } catch (Exception $e) {
                http_response_code(500);
                echo json_encode([
                    'success' => false,
                    'message' => $e->getMessage(),
                ]);
            }
        }
    }
?>