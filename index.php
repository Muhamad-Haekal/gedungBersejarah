<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gedung Bersejarah Indonesia</title>
</head>
<body>
    <?php include __DIR__ . "/utils/navbar.utils.php"; ?>

    <?php 
  
    include __DIR__ . "/../controller/gedung.controller.php";
    include __DIR__ . "/gedung/gedung.view.php";

    $products = new ProductView();
    ?>

    <?php $products->find(); ?> 
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>LOKASI</th>
            <th>DESKRIPSI</th>
        </tr>
        <?php $products->show() ?>
    </table>
</body>
</html>