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
                        include('../fonction_read/fct_read_organisme.php');
                        $idorg=$design=$lieu=[];
                        readOrganisme($idorg,$design,$lieu);
                        afficheOrganisme($idorg,$design,$lieu);
                    ?>
                </table>
            </div>
        </div>
        <?php include("../footer.php"); ?>
    </div>
</body>
</html>