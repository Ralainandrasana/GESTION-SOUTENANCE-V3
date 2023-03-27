<!DOCTYPE html>
<html lang="en">
<?php include("../head.php") ?>
<body>
    <div class="wrapper">
        <?php include("../header.php"); ?>
        <div class="container">
            <div class="bouton">
                <button id="add"><strong>+</strong></button>
            </div>
            <div class="tableau">
                <table>
                    <?php
                        include('../fonction_read/fct_read_professeur.php');
                        $idprof=$nom=$prenom=$civilite=$grade=[];
                        readProfesseur($idprof,$nom,$prenom,$civilite,$grade);
                        afficheProfesseur($idprof,$nom,$prenom,$civilite,$grade);
                    ?>
                </table>
            </div>
        </div>
        <?php include("../footer.php"); ?>
    </div>
</body>
</html>