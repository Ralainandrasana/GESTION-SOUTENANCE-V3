<?php
    include('../lien_php_sql.php');
    include('fct_read_passout.php');

    $matricule=$nom=$prenom=[];
    readEtudiantPassout($matricule,$nom,$prenom);
?>
<thead>
    <tr>
        <th>matricule</th>
        <th>nom</th>
        <th>prenom</th>
    </tr>
</thead>
<tbody>
<?php
    for($i=0; $i<count($matricule); $i++){
?>
            <tr <?php if($i%2){echo 'class="impaire"';  }?>>
                <td><?php echo $matricule[$i]; ?></td>
                <td><?php echo $nom[$i]; ?></td>
                <td><?php echo $prenom[$i]; ?></td>
            </tr>
<?php            
    }
?>
</tbody>
