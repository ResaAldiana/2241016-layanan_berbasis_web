<?php
namespace App;

require_once('Model.php');

class Controller {
    public function showProducts() {
        // Logic to retrieve products from database
        $products = []; // Assume this is fetched from database
        include 'View/ViewProducts.php';
    }

    public function showCategories() {
        // Logic to retrieve categories from database
        $categories = []; // Assume this is fetched from database
        include 'View/ViewCategories.php';
    }

    public function showSuppliers() {
        // Logic to retrieve suppliers from database
        $suppliers = []; // Assume this is fetched from database
        include 'View/ViewSuppliers.php';
    }

    public function showTransactions() {
        // Logic to retrieve transactions from database
        $transactions = []; // Assume this is fetched from database
        include 'View/ViewTransactions.php';
    }
}
?>