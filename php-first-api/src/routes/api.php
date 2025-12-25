<?php
    require_once __DIR__ . "/../core/Router.php";
    require_once __DIR__ . "/../controllers/ProductController.php";

    $router = new Router();

    $router->get("/products", [ProductController::class, "index"]);
    $router->post("/products", [ProductController::class, "store"]);

    $router->run();
?>