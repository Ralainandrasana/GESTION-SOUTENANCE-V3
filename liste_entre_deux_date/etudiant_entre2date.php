<!DOCTYPE html>
<html lang="en">
<?php include("../head.php") ?>
<body>
    <div class="wrapper">
        <div class="header">
            <h3 class="titre">GESTION DES SOUTENANCES</h3>
            <nav class="navig">
                <ul>
                    <li><a href="../page_read/etudiant.php" class="nav">Etudiant</a></li>
                    <li><a href="../page_read/professeur.php" class="nav">Professeur</a></li>
                    <li><a href="../page_read/soutenance.php" class="nav">Soutenance</a></li>
                    <li><a href="../page_read/organisme.php" class="nav">Organisme</a></li>
                </ul>
            </nav>
        </div>
        <div class="container">
            <div class="retour">
                <a href="../page_read/soutenance.php"><i class="fas fa-arrow-left"></i></a>
            </div>
            <div class="ttl">
                <h4 class="ttl1">LISTE NOTE ENTRE DEUX DATE</h4>
            </div>
            <div class="tableau">
                <table>
                    <?php
                        include('fct_affiche.php');
                        readEtudiant();
                    ?>
                </table>
            </div>
        </div>
        <?php include("../footer.php"); ?>
    </div>
</body>
</html>