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
    <?php if (!isset($_GET["modifier"])) { ?>

        <form action="keep.php" method="get">
            <input type="text" name="titre" placeholder="Titre" class="form-control"> <br>
            <textarea name="text" cols="30" rows="10" class="form-control" placeholder="text"></textarea> <br>
            <button type="submit" name="submit" class="btn btn-primary">submit</button>
        </form>
    <?php } else {
    ?>
        <form action="keep.php" method="get">
            <input type="text" name="titre" placeholder="Titre" class="form-control" value="<?php echo $_GET["titre"]; ?>"> <br>
            <textarea name="text" cols="30" rows="10" class="form-control" placeholder="text"><?php echo $_GET["text"];  ?></textarea> <br>
            <button type="submit" name="submit" class="btn btn-primary">submit</button>

        </form>
    <?php } ?>


</body>

</html>