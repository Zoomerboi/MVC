<?php
require_once '../app/controllers/ProductController.php';
require_once '../app/controllers/PageController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

$productController = new ProductController();
$pageController = new PageController();

switch ($action) {
    case 'create':
        $productController->create();
        break;
    case 'store':
        $productController->store();
        break;
    case 'edit':
        $productController->edit($id);
        break;
    case 'update':
        $productController->update($id);
        break;
    case 'delete':
        $productController->delete($id);
        break;
    case 'about':
        $pageController->about();
        break;
    default:
        $productController->index();
        break;
}