    <?php
    // $dir = 'C:\xampp\htdocs\AtelierPHP\c';
    // $uploadfile = $dir . basename($_FILES['fichier']['name']);
    $uploadfile = tempnam('C:\xampp\htdocs\AtelierPHP\cin', 'img');
    $_POST['nom'] = strip_tags($_POST['nom']);
    echo 'commande pour Mr/Mme ', $_POST['nom'], ':', $_POST['nombre'], '    type :',  $_POST['type'], ' ingredient:';
    if (isset($_POST['ingredient'])) {
        foreach ($_POST['ingredient'] as $key => $value) {
            echo $value, ' ';
        }
    }

    ?>
    <br>
    <?php

    if ($_POST["nombre"] < 10) {
        echo 'prix', floatval($_POST['nombre']) * 4;
    } else {
        echo 'prix', floatval($_POST['nombre']) * 3.6;
    }
    move_uploaded_file($_FILES['fichier']['tmp_name'], $uploadfile);
    ?>