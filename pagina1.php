<?php
/**
 * Created by PhpStorm.
 * User: pablo
 * Date: 3/1/17
 * Time: 17:20
 */
define(TITLE, "Pagina 1");
?>
<html>
<?php include "header.php"; ?>
<body>
<?php include "top_menu.php"; ?>
<div class="container">
    <div class="jumbotron">

        <h2>Pagina 1</h2>
        <form class="navbar-form" action="pagina2.php" method="post">
            <hr />
            <div class="form-group">
                <input class="form-control" placeholder="Nom client" type="text" name="nom"/>
                <br/><br/>
                <input class="form-control" placeholder="Cognoms" type="text" name="cognoms"/>
                <br/><br/>
                <input class="form-control" placeholder="Codi client" type="text" name="codi"/>
            </div>
            <p>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Introduccio de dades</button>
            </div>
            </p>
        </form>

    </div>
    <?php include "footer.php"; ?>
</div>
</body>
</html>