<?php
    include('../lien_php_sql.php');
    include('fct_read_parniv.php');
    include('fct_read_effectif.php');

    $niveau=$matricule=$nom=$prenom=$effectif=[];
    readEtudiantParniv($matricule,$nom,$prenom);
    readEtudiantEff($niveau,$effectif);
?>
<thead>
    <tr>
        <th>niveau</th>
        <th>matricule</th>
        <th>nom</th>
        <th>prenom</th>
        <th>effectif</th>
    </tr>
</thead>
<tbody>
<?php
    $init=0;
    $total=0;
    for($i=0; $i<count($niveau); $i++){
        for($j=0; $j<$effectif[$i]; $j++){
?>
            <tr <?php if($i%2){echo 'class="impaire"';  }?>>
                <?php if(!$j){echo '<td rowspan="'.($effectif[$i]).'">'.$niveau[$i]."</td>";} ?>
                <td><?php echo $matricule[$j+$init]; ?></td>
                <td><?php echo $nom[$j+$init]; ?></td>
                <td><?php echo $prenom[$j+$init]; ?></td>
                <?php if(!$j){echo '<td rowspan="'.($effectif[$i]).'">'.$effectif[$i]."</td>";} ?>
            </tr>
<?php            
        }
        $init+=$effectif[$i];
?>
<?php 
    }
?>
</tbody>
<?php 
    foreach($effectif as $value){
        $total+=$value;
    }
?>
<tfoot>
    <tr>
        <td class="hidden"></td>
        <td class="hidden"></td>
        <td class="hidden"></td>   
        <td class="hidden"></td>
        <td class="total">TOTAL=<?php echo $total?></td>
    </tr>
</tfoot>