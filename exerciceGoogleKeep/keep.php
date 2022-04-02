<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
</head>

<body>
    <?php if (isset($_GET["submit"])) {
        $_SESSION["titres"][$_GET["titre"]] = $_GET["text"];

    ?>

        <?php foreach ($_SESSION['titres'] as $key => $value) {
        ?>
            <form action="form.php" method="get">
                <input type="text" value="<?php echo $key; ?>" name="titre" readonly>
                <input type="hidden" name="text" value="<?php echo $value; ?>">
                <input type="submit" value="voir note" name="modifier">
            </form>
    <?php }
    }; ?>
    <a href="form.php"><button class="btn btn-primary">ajouter une note</button></a>

</body>

</html>