<?php
namespace App;

class Product {
    private $id;
    private $name;
    private $category;
    private $price;

    public function __construct($id, $name, $category, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
    }

    // Getter methods
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getPrice() {
        return $this->price;
    }
}

class Category {
    private $id;
    private $name;

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    // Getter methods
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }
}

class Supplier {
    private $id;
    private $name;

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    // Getter methods
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }
}

class Transaction {
    private $id;
    private $productId;
    private $quantity;
    private $total;

    public function __construct($id, $productId, $quantity, $total) {
        $this->id = $id;
        $this->productId = $productId;
        $this->quantity = $quantity;
        $this->total = $total;
    }

    // Getter methods
    public function getId() {
        return $this->id;
    }

    public function getProductId() {
        return $this->productId;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getTotal() {
        return $this->total;
    }
}
?>
