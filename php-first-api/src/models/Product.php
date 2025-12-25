<?php
    require_once __DIR__ . "/../config/database.php";
    
    class Product {
        private static $table = "product";

        private function databaseConnection()
        {
            $db = Database::getInstance();
            return $db->getConnection();
        }

        private static function validateData($data)
        {
            if (empty($data['nome'])) {
                throw new Exception("O campo 'nome' é obrigatório");
            }
            if (empty($data['valor']) || !is_numeric($data['valor'])) {
                throw new Exception("O campo 'valor' é obrigatório e deve ser um número");
            }
        }
        
        public static function all()
        {
            try {
                $conn = self::databaseConnection();
                
                $stmt = $conn->query("SELECT id, nome, descricao, valor FROM " . self::$table . " ORDER BY id DESC");
                $products = $stmt->fetchAll();
                
                return $products;
            } catch (PDOException $e) {
                throw new Exception("Erro ao buscar produtos: " . $e->getMessage());
            }
        }
        
        public static function find($id)
        {
            try {
                $conn = self::databaseConnection();
                
                $stmt = $conn->prepare("SELECT id, nome, descricao, valor FROM " . self::$table . " WHERE id = :id");
                $stmt->execute(['id' => $id]);
                $product = $stmt->fetch();
                
                return $product ? $product : null;
            } catch (PDOException $e) {
                throw new Exception("Erro ao buscar produto: " . $e->getMessage());
            }
        }
        
        public static function create($data)
        {
            try {
                $conn = self::databaseConnection();
                
                self::validateData($data);
                
                $stmt = $conn->prepare(
                    "INSERT INTO " . self::$table . " (nome, descricao, valor) 
                     VALUES (:nome, :descricao, :valor)"
                );
                
                $stmt->execute([
                    'nome' => $data['nome'],
                    'descricao' => $data['descricao'] ?? null,
                    'valor' => $data['valor']
                ]);
                
                $id = $conn->lastInsertId();
                return self::find($id);
            } catch (PDOException $e) {
                throw new Exception("Erro ao criar produto: " . $e->getMessage());
            }
        }
        
        public static function update($id, $data)
        {
            try {
                $conn = self::databaseConnection();
                
                $product = self::find($id);
                if (!$product) {
                    throw new Exception("Produto não encontrado");
                }
                
                self::validateData($data);
                
                $fields = [];
                $params = ['id' => $id];
                
                if (isset($data['nome'])) {
                    $fields[] = "nome = :nome";
                    $params['nome'] = $data['nome'];
                }
                if (isset($data['descricao'])) {
                    $fields[] = "descricao = :descricao";
                    $params['descricao'] = $data['descricao'] ?: null;
                }
                if (isset($data['valor'])) {
                    $fields[] = "valor = :valor";
                    $params['valor'] = $data['valor'];
                }
                
                if (empty($fields)) {
                    throw new Exception("Nenhum campo para atualizar");
                }
                
                $sql = "UPDATE " . self::$table . " SET " . implode(", ", $fields) . " WHERE id = :id";
                $stmt = $conn->prepare($sql);
                $stmt->execute($params);
                
                return self::find($id);
            } catch (PDOException $e) {
                throw new Exception("Erro ao atualizar produto: " . $e->getMessage());
            }
        }
        
        public static function delete($id)
        {
            try {
                $conn = self::databaseConnection();
                
                $product = self::find($id);
                if (!$product) {
                    throw new Exception("Produto não encontrado");
                }
                
                $stmt = $conn->prepare("DELETE FROM " . self::$table . " WHERE id = :id");
                $stmt->execute(['id' => $id]);
                
                return true;
            } catch (PDOException $e) {
                throw new Exception("Erro ao deletar produto: " . $e->getMessage());
            }
        }
    }
?>