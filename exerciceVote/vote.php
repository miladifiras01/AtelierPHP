<!DOCTYPE html>

<html lang="en">
<?php
$cookie_name = "voted";
$cookie_value = "Oui";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <?php if (!isset($_COOKIE[$cookie_name])) { ?>
        <form action="" method="get">
            Votre choix:
            <div>
                <input type="radio" id="mauvais" name="Vote" value="mauvais">
                <label for="mauvais">mauvais</label>
            </div>

            <div>
                <input type="radio" id="Moy" name="Vote" value="Moyen">
                <label for="Moy">Moyen</label>
            </div>

            <div>
                <input type="radio" id="Bon" name="Vote" value="Bon">
                <label for="Bon">Bon</label>
            </div>

            <input type="submit" value="submit" name="submit">
            <?php
            if (isset($_GET['submit'])) {
                setcookie($cookie_name, $cookie_value);
                setcookie("reponse", $_GET["Vote"]);
            }
            ?>

        </form>
        <script>
            const bod = document.querySelector("body");
            setTimeout(() => {
                bod.innerText = "tu as excédé 2 minutes";
            }, 1000 * 60 * 2)
        </script>
    <?php } else {
    ?>
        <p>vous avez deja voté pour <?php if (isset($_COOKIE["reponse"])) {
                                        echo $_COOKIE["reponse"];
                                    } ?> </p>
    <?php } ?>
</body>

</html>