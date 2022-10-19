<?php ob_start(); ?>





    <?php

       echo '

       <hr>
       <table class="table table-bordered table-striped table-condensed">
        <h4>Dernière importation de la liste du personnel médical</h4>
       <thead>
          <tr>
            <th>identifiant</th>              
            <th>discipline</th>
            <th>specialite</th>
            <th>pole</th>
            <th>site</th>
            <th>service</th>
            <th>titre</th>
            <th>nom</th>
            <th>prenom</th>
            <th>num_ordre</th>
            <th>fonction</th>
            <th>statut</th>
            <th>temps_partiel</th>
            <th>affectation</th>
          </tr>
       </thead>
       <tbody>';

            while ($data = $req->fetch()) {
                echo '<tr>
                

                        <td>'.$data[0].'</td>
                        <td>'.$data[1].'</td>
                        <td>'.$data[2].'</td>
                        <td>'.$data[3].'</td>
                        <td>'.$data[4].'</td>
                        <td>'.$data[5].'</td>
                        <td>'.$data[6].'</td>
                        <td>'.$data[7].'</td>
                        <td>'.$data[8].'</td>
                        <td>'.$data[9].'</td>
                        <td>'.$data[10].'</td>
                        <td>'.$data[11].'</td>
                        <td>'.$data[12].'</td>
                        <td>'.$data[13].'</td>



                    </tr>';
            }
        echo '</tbody></table>';

        $req->closeCursor();
    ?>
                        

<?php $content = ob_get_clean(); ?>
<?php require 'view/fronted/template/template.php'; ?>