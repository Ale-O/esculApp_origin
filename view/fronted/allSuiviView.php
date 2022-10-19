<?php ob_start(); ?>



    <?php require 'view/fronted/form/searchSuiviForm.php'; ?>

    <?php

    require_once 'model/champsManager.php';

       echo '

       <hr>
       <table class="table table-bordered table-striped table-condensed">
        <h4>Le suivi des modifications</h4>
       <thead>
          <tr>              
                <th>Utilisateur</th>
                <th>Quand</th>
                <th>Table</th>
                <th>Enregistrement</th>
                <th>ID Enregistrement</th>
                <th>Champs</th>
                <th>Avant</th>
                <th>Après</th>
          </tr>
       </thead>
       <tbody>';

            while ($data = $req->fetch()) {
                $champsManager = new champsManager();
                $req1 = $champsManager->itemById($data['champsEnregistrement'], $data['ancienneValeur']);

                if ($req1 == 'nonChamps') {
                    $ancienneValeur = $data['ancienneValeur'];
                } else {
                    $items = $req1->fetchAll();
                    $item = $items[0];
                    $ancienneValeur = $item[0];
                }

                $champsManager = new champsManager();
                $req2 = $champsManager->itemById($data['champsEnregistrement'], $data['nouvelleValeur']);

                if ($req2 == 'nonChamps') {
                    $nouvelleValeur = $data['nouvelleValeur'];
                } else {
                    $items1 = $req2->fetchAll();
                    $item1 = $items1[0];
                    $nouvelleValeur = $item1[0];
                }

                echo '<tr>
                

                        <td>'.$data['qui'].'</td>
                        <td>'.$data['quand'].'</td>
                        <td>'.$data['quoiTable'].'</td>
                        <td>'.$data['nomEnregistrement'].'</td>
                        <td>'.$data['idEnregistrement'].'</td>
                        <td>'.$data['champsEnregistrement'].'</td>
                        
                        <td>'.$ancienneValeur.'</td>

                        <td>'.$nouvelleValeur.'</td>


                    </tr>';
            }
        echo '</tbody></table>';

        $req->closeCursor();
    ?>
                        

<?php $content = ob_get_clean(); ?>
<?php require 'view/fronted/template/template.php'; ?>