<?php
    include('../lien_php_sql.php');
    function readOrganisme(&$idorg,&$design,&$lieu){
        $Bdd=lienPhpSql();
        $or=$Bdd->query('select * from Organisme');
        $idorg=$design=$lieu=[];
        while($ORGANISME=$or->fetch()){
            array_push($idorg, $ORGANISME['IDORG']);
            array_push($design, $ORGANISME['DESIGN']);
            array_push($lieu, $ORGANISME['LIEU']);
        }
    }
?>

<?php
    function afficheOrganisme(&$idorg,&$design,&$lieu){
?>
        <tr>
            <th>idorg</th>
            <th>design</th>
            <th>lieu</th>
            <th colspan="2">action</th>
        </tr>
<?php
        for($i=0;$i<count($idorg);$i++){
?>
            <tr <?php if($i%2){echo 'class="impaire"';  }?>>
                <td><?php echo $idorg[$i]; ?></td>
                <td><?php echo $design[$i]; ?></td>
                <td><?php echo $lieu[$i]; ?></td>
                <td><a href="../page_edit/edit_organisme.php?idorg=<?php echo $idorg[$i]; ?>"><i class="fas fa-edit" style="color:var(--green_color);"></i></a></td>
                <td><a href="../fonction_delete/fct_delete_organisme.php?idorg=<?php echo $idorg[$i]; ?>"><i class="fas fa-trash-alt" style="color:var(--red_color);"></i></a></td>
            </tr>
<?php
        }
    }
?>
