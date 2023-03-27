<!DOCTYPE html>
<html lang="en">
<?php include("../head.php") ?>
<body>
    <div class="wrapper">
        <?php include("../header.php"); ?>
        <div class="container">
            <div class="boutonEtudiant bouton">
                <button id="add"><strong>+</strong></button>
                <form action="etudiant.php" methode="get">
                    <input type="text" id="input_search" name="search" placeholder="Matricule ou Nom">
                    <button type="submit" id="search"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="tableau">
                <table>
                    <?php
                        include('../lien_php_sql.php');
                        include('../fonction_read/fct_read_etudiant.php');
                        include('../recherche_etudiant/fct_read_search.php');
                        $matricule=$nom=$prenom=$parcours=$niveau=$adr_mail=[];
                        if(isset($_GET['search'])){
                            readSearch($matricule,$nom,$prenom,$parcours,$niveau,$adr_mail);
                        }
                        else{
                            readEtudiant($matricule,$nom,$prenom,$parcours,$niveau,$adr_mail);
                        }
                        afficheEtudiant($matricule,$nom,$prenom,$parcours,$niveau,$adr_mail);
                    ?>
                </table>
                <a href="../liste_par_niveau/etudiant_parniv.php" class="plus">+ Afficher la liste des étudiants inscrits par niveau avec l'effectif total</a>
            </div>
        </div>
        <?php include("../footer.php"); ?>
    </div>
    <?php include('../page_add/add_etudiant.php'); ?>
    <script src="../script_js/script.js"></script>
</body>
</html>