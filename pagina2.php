<?php
/**
 * Created by PhpStorm.
 * User: pablo
 * Date: 3/1/17
 * Time: 17:25
 */
define(TITLE, "Pagina 2");

include_once "clClient.php";

$client = new clClient();

$client->setNom($_POST["nom"]);
$client->setCognoms($_POST["cognoms"]);
$client->setCodi($_POST["codi"]);

?>
<html>
<?php include "header.php"; ?>
<body>
<?php include "top_menu.php"; ?>
<div class="container">
    <div class="jumbotron">

        <h2>Pagina 2</h2>
        <br/>
        <div>
            <h4>Nom client</h4>
            <p><?php echo $client->getNom();?></p>
            <h4>Cognoms</h4>
            <p><?php echo $client->getCognoms();?></p>
            <h4>Codi client</h4>
            <p><?php echo $client->getCodi();?></p>
        </div>
    </div>
    <?php include "footer.php"; ?>
</div>
</body>
</html>