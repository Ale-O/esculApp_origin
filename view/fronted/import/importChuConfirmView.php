<?php ob_start(); ?>


    <?php echo '


    <br>
    <hr>
    <h3>Succès!</h3>
    <br>
    <h5>Visualiser les données importées ci-dessous ou réaliser un nouvel import</h5>
    <hr>
    <br>


    '; ?>


    <?php require("view/fronted/import/importChuForm.php"); ?>


    <?php 


       echo '

       <br>
       <hr>
       <table class="table table-bordered table-striped table-condensed">
        <h4>Données de la liste du personnel médical CHU importées</h4>
       <br>
       <thead>
          <tr>              

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






        $Reader->ChangeSheet(2);            

        $j = 0;

        $listIdentifiantChu = array();


            /* For Loop for all sheets */

            foreach ($Reader as $Column)

            {

                $j ++;

                if ($j > 1) 

                {


                    $NoEncodecolomn1 = isset($Column[0]) ? $Column[0] : '';

                    $colomn1 = utf8_encode($NoEncodecolomn1);

                    $NoEncodecolomn2 = isset($Column[1]) ? $Column[1] : '';

                    $colomn2 = utf8_encode($NoEncodecolomn2);

                    $NoEncodecolomn3 = isset($Column[2]) ? $Column[2] : '';

                    $colomn3 = utf8_encode($NoEncodecolomn3);

                    $NoEncodecolomn4 = isset($Column[3]) ? $Column[3] : '';

                    $colomn4 = utf8_encode($NoEncodecolomn4);

                    $NoEncodecolomn5 = isset($Column[4]) ? $Column[4] : '';

                    $colomn5 = utf8_encode($NoEncodecolomn5);

                    $NoEncodecolomn6 = isset($Column[5]) ? $Column[5] : '';

                    $colomn6 = utf8_encode($NoEncodecolomn6);

                    $NoEncodecolomn7 = isset($Column[6]) ? $Column[6] : '';

                    $colomn7 = utf8_encode($NoEncodecolomn7);

                    $NoEncodecolomn8 = isset($Column[7]) ? $Column[7] : '';

                    $colomn8 = utf8_encode($NoEncodecolomn8);

                    $NoEncodecolomn9 = isset($Column[8]) ? $Column[8] : '';

                    $colomn9 = utf8_encode($NoEncodecolomn9);

                    $NoEncodecolomn10 = isset($Column[9]) ? $Column[9] : '';

                    $colomn10 = utf8_encode($NoEncodecolomn10);

                    $NoEncodecolomn11 = isset($Column[10]) ? $Column[10] : '';

                    $colomn11 = utf8_encode($NoEncodecolomn11);

                    $NoEncodecolomn12 = isset($Column[11]) ? $Column[11] : '';

                    $colomn12 = utf8_encode($NoEncodecolomn12);

                    $NoEncodecolomn13 = isset($Column[12]) ? $Column[12] : '';

                    $colomn13 = utf8_encode($NoEncodecolomn13);


                    $colomn14 = strtoupper($colomn7) ."". $colomn8;



                    echo '<tr>

                    <td>'.$colomn1.'</td>
                    <td>'.$colomn2.'</td>
                    <td>'.$colomn3.'</td>
                    <td>'.$colomn4.'</td>
                    <td>'.$colomn5.'</td>
                    <td>'.$colomn6.'</td>
                    <td>'.$colomn7.'</td>
                    <td>'.$colomn8.'</td>
                    <td>'.$colomn9.'</td>
                    <td>'.$colomn10.'</td>
                    <td>'.$colomn11.'</td>
                    <td>'.$colomn12.'</td>
                    <td>'.$colomn13.'</td>


                    </tr>';


                    if (in_array($colomn14, $listIdentifiantChu))

                    {





                    }


                    else

                    {



                        if (in_array($colomn14, $listIdentifiant))
                            {


                                $req2 = $NomChuManager->modifNomChu($colomn14,$colomn1,$colomn2,$colomn3,$colomn4,$colomn5,$colomn6,$colomn7,$colomn8,$colomn9,$colomn10,$colomn11,$colomn12,$colomn13);

                            }

                        else
                            {

                                $req1 = $NomChuManager->createNomChu($colomn14,$colomn1,$colomn2,$colomn3,$colomn4,$colomn5,$colomn6,$colomn7,$colomn8,$colomn9,$colomn10,$colomn11,$colomn12,$colomn13);

                            }


                        array_push($listIdentifiantChu, $colomn14);



                    }
                    
                }

            }



    echo '</tbody></table>';


    ?>

                        

<?php $content = ob_get_clean(); ?>
<?php require('view/fronted/template/template.php'); ?>