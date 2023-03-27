<?php
    include('../lien_php_sql.php');
    include('fct_read_entre2date.php');
    include('fct_read_effectif.php');


    $annee_univ=$matricule=$note=$effectif=[];
    readNoteEntre2date($matricule,$note);
    readEtudiantEff($annee_univ,$effectif);
?>
<thead>
    <tr>
        <th>annee_univ</th>
        <th>matricule</th>
        <th>note</th>
    </tr>
</thead>
<tbody>
<?php
    $init=0;
    for($i=0; $i<count($annee_univ); $i++){
        for($j=0; $j<$effectif[$i]; $j++){
?>
            <tr <?php if($i%2){echo 'class="impaire"';  }?>>
                <?php if(!$j){echo '<td rowspan="'.($effectif[$i]).'">'.$annee_univ[$i]."</td>";} ?>
                <td><?php echo $matricule[$j+$init]; ?></td>
                <td><?php echo $note[$j+$init]; ?></td>
            </tr>
<?php            
        }
        $init+=$effectif[$i];
?>
<?php 
    }
?>
</tbody>

