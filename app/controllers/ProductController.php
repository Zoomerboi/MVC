<?php
require_once '../app/config/Database.php';
require_once '../app/models/Product.php';

class ProductController
{
    private $db;
    private $product;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->product = new Product($this->db);
    }

    public function index()
    {
        $stmt = $this->product->readAll();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $content = '../app/views/home.php';
        include '../app/views/layout.php';
    }

    public function create()
    {
        $content = '../app/views/product/create.php';
        include '../app/views/layout.php';
    }

    public function store()
    {
        if ($_POST) {
            $this->product->create($_POST['name'], $_POST['price'], $_POST['description']);
            header("Location: index.php");
        }
    }

    public function edit($id)
    {
        $row = $this->product->getOne($id);
        $content = '../app/views/product/edit.php';
        include '../app/views/layout.php';
    }

    public function update($id)
    {
        if ($_POST) {
            $this->product->update($id, $_POST['name'], $_POST['price'], $_POST['description']);
            header("Location: index.php");
        }
    }

    public function delete($id)
    {
        $this->product->delete($id);
        header("Location: index.php");
    }
}
?>