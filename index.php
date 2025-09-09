<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gedung Bersejarah Indonesia</title>
</head>
<body>
    <?php include __DIR__ . "/view/utils/navbar.utils.php"; ?>

    <?php 
    include __DIR__ . "/controller/gedung.controller.php";
    include __DIR__ . "/view/gedung/gedung.view.php";

    $gedungs = new GedungView();
    $gedungs->find(); 
    ?>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>LOKASI</th>
            <th>DESKRIPSI</th>
        </tr>
        <?php $gedungs->show(); ?>
    </table>
</body>
</html>
