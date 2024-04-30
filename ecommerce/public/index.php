<?php
// Include Composer autoload
require_once __DIR__ . '/../vendor/autoload.php';

// Include Controller
use App\Controller;

// Routes
if(isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}

$controller = new Controller();

switch($action) {
    case 'products':
        $controller->showProducts();
        break;
    case 'categories':
        $controller->showCategories();
        break;
    case 'suppliers':
        $controller->showSuppliers();
        break;
    case 'transactions':
        $controller->showTransactions();
        break;
    default:
        echo '404 Not Found';
}

?>
