<!DOCTYPE html>
<html lang="en">
<?php include("../head.php") ?>
<body>
    <div class="wrapper">
        <?php include("../header.php"); ?>
        <div class="container">
            <div class="bouton">
                <!--button id="add"><strong>+</strong></button-->
                <a href="../page_add/add_soutenance.php">add</a>
            </div>
            <div class="tableau">
                <table>
                    <?php
                        include('../fonction_read/fct_read_soutenance.php');
                        $matricule=$idorg=$annee_univ=$note=$president=$examinateur=$rapp_int=$rapp_ext=[];
                        readSoutenance($matricule,$idorg,$annee_univ,$note,$president,$examinateur,$rapp_int,$rapp_ext);
                        afficheSoutenance($matricule,$idorg,$annee_univ,$note,$president,$examinateur,$rapp_int,$rapp_ext);
                    ?>
                </table>
                <a href="../liste_entre_deux_date/etudiant_entre2date.php" class="plus">+ Afficher la liste des notes des étudiants entre deux date</a>
                <a href="../liste_pas_soutenance/etudiant_passout.php" class="plus">+ Afficher la liste des étudiants qui n'ont pas encore effectué de soutenance</a>
            </div>
        </div>
        <?php include("../footer.php"); ?>
    </div>
    <script src="../script_js/script.js"></script>
</body>
</html>