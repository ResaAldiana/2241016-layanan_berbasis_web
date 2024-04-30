<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
</head>
<body>
    <h1>Transactions</h1>
    <ul>
        <?php foreach($transactions as $transaction): ?>
            <li><?php echo $transaction->getId(); ?> - <?php echo $transaction->getTotal(); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
