<?php require_once('data.php') ?>
<?php require_once("./header.php") ?>
<?php require_once("./footer.php") ?>
<?php require_once("./connect.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="./css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2-CLEMENT</title>
</head>

<body>

    <div class="fullForm">
        <form method="POST" action="data.php" class="form">
            <div class="allInput">
                <h1>Formulaire</h1>
                <div class="name">
                    <label for="name">
                        Nom
                    </label>
                    <input
                        name="name"
                        class="inputName"
                        id="name"
                        type="text"
                        placeholder="Nom">
                </div>

                <div class="telephone">
                    <label for="telephone">
                        Téléphone
                    </label>
                    <input
                        name="telephone"
                        class="inputTelephone"
                        id="telephone"
                        type="tel"
                        placeholder="Téléphone">
                </div>
                <div class="email">
                    <label class="" for="email">
                        Email
                    </label>
                    <input
                        name="email"
                        class="inputMail"
                        id="email"
                        type="email"
                        placeholder="Email">
                </div>
            
            <button type="submit" class="btnAddContact">
                Ajouter un Contact
            </button>
            </div>
        </form>
    </div>


</body>


</html>