<?php
  require_once("./data.php");
  require_once("./header.php");
  require_once("./connect.php");
  require_once("./footer.php"); 
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacts</title>
  <link href="./css/style.css" rel="stylesheet">
</head>

<body>

  <div class="allContact">
    <div class="contactBoard">
    <table>
    <caption class="caption-top">Liste des contacts</caption>  
    <thead>
        <tr>
            <th>Nom</th>
            <th>Téléphone</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php afficherContact($conn); ?>
    </tbody>
</table>
    </div>
  </body>
</div>

</html>