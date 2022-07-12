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


    <?php require("view/fronted/import/importMangueForm.php"); ?>


    <?php 


       echo '

       <br>
       <hr>
       <table class="table table-bordered table-striped table-condensed">
        <h4>Données mangue importées</h4>
       <br>
       <thead>
          <tr>              

            <th>sexe</th>
            <th>civilite</th>
            <th>nom</th>
            <th>prenom</th>
            <th>nom_de_famille</th>
            <th>date_de_naissance</th>
            <th>lieu_de_naissance</th>
            <th>departement_de_naissance</th>
            <th>pays_de_naissance</th>
            <th>pays_national</th>
            <th>no_insee</th>
            <th>no_individu</th>
            <th>pers_id</th>
            <th>date_debut</th>
            <th>date_fin</th>
            <th>corps</th>
            <th>grade</th>
            <th>echelon</th>
            <th>position</th>
            <th>quotite</th>
            <th>indice</th>
            <th>statut</th>
            <th>type_contrat</th>
            <th>reliquat_annee</th>
            <th>reliquat_mois</th>
            <th>reliquat_jours</th>
            <th>conserv_annees</th>
            <th>conserv_mois</th>
            <th>Conserv_jours</th>
            <th>debut_aff</th>
            <th>fin_aff</th>
            <th>aff_niv1</th>
            <th>aff_niv2</th>
            <th>aff_globale</th>
            <th>quot_aff</th>
            <th>anc_gen</th>
            <th>anc_svc</th>
            <th>debut_occ</th>
            <th>fin_occ</th>
            <th>quot_occ</th>
            <th>quot_fin</th>
            <th>emploi</th>
            <th>implantation</th>
            <th>chapitre</th>
            <th>adresse</th>
            <th>code_postal</th>
            <th>ville</th>
            <th>code_spec</th>
            <th>specialisation</th>

          </tr>
       </thead>
       <tbody>';







        $Reader->ChangeSheet(0);            

        $j = 0;

        $listIdentifiantMangue = array();


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

                    $NoEncodecolomn14 = isset($Column[13]) ? $Column[13] : ''; 

                    $colomn14 = utf8_encode($NoEncodecolomn14);
                    
                    $NoEncodecolomn15 = isset($Column[14]) ? $Column[14] : '';

                    $colomn15 = utf8_encode($NoEncodecolomn15);

                    $NoEncodecolomn16 = isset($Column[15]) ? $Column[15] : '';

                    $colomn16 = utf8_encode($NoEncodecolomn16);

                    $NoEncodecolomn17 = isset($Column[16]) ? $Column[16] : '';

                    $colomn17 = utf8_encode($NoEncodecolomn17);

                    $NoEncodecolomn18 = isset($Column[17]) ? $Column[17] : '';

                    $colomn18 = utf8_encode($NoEncodecolomn18);

                    $NoEncodecolomn19 = isset($Column[18]) ? $Column[18] : '';

                    $colomn19 = utf8_encode($NoEncodecolomn19);

                    $NoEncodecolomn20 = isset($Column[19]) ? $Column[19] : '';

                    $colomn20 = utf8_encode($NoEncodecolomn20);

                    $NoEncodecolomn21 = isset($Column[20]) ? $Column[20] : '';

                    $colomn21 = utf8_encode($NoEncodecolomn21);

                    $NoEncodecolomn22 = isset($Column[21]) ? $Column[21] : '';

                    $colomn22 = utf8_encode($NoEncodecolomn22);

                    $NoEncodecolomn23 = isset($Column[22]) ? $Column[22] : '';

                    $colomn23 = utf8_encode($NoEncodecolomn23);

                    $NoEncodecolomn24 = isset($Column[23]) ? $Column[23] : '';

                    $colomn24 = utf8_encode($NoEncodecolomn24);

                    $NoEncodecolomn25 = isset($Column[24]) ? $Column[24] : '';

                    $colomn25 = utf8_encode($NoEncodecolomn25);

                    $NoEncodecolomn26 = isset($Column[25]) ? $Column[25] : '';

                    $colomn26 = utf8_encode($NoEncodecolomn26);

                    $NoEncodecolomn27 = isset($Column[26]) ? $Column[26] : '';

                    $colomn27 = utf8_encode($NoEncodecolomn27);

                    $NoEncodecolomn28 = isset($Column[27]) ? $Column[27] : '';  

                    $colomn28 = utf8_encode($NoEncodecolomn28);

                    $NoEncodecolomn29 = isset($Column[28]) ? $Column[28] : '';

                    $colomn29 = utf8_encode($NoEncodecolomn29);

                    $NoEncodecolomn30 = isset($Column[29]) ? $Column[29] : '';

                    $colomn30 = utf8_encode($NoEncodecolomn30);

                    $NoEncodecolomn31 = isset($Column[30]) ? $Column[30] : '';

                    $colomn31 = utf8_encode($NoEncodecolomn31);

                    $NoEncodecolomn32 = isset($Column[31]) ? $Column[31] : '';

                    $colomn32 = utf8_encode($NoEncodecolomn32);

                    $NoEncodecolomn33 = isset($Column[32]) ? $Column[32] : '';

                    $colomn33 = utf8_encode($NoEncodecolomn33);

                    $NoEncodecolomn34 = isset($Column[33]) ? $Column[33] : '';

                    $colomn34 = utf8_encode($NoEncodecolomn34);

                    $NoEncodecolomn35 = isset($Column[34]) ? $Column[34] : '';

                    $colomn35 = utf8_encode($NoEncodecolomn35);

                    $NoEncodecolomn36 = isset($Column[35]) ? $Column[35] : '';

                    $colomn36 = utf8_encode($NoEncodecolomn36);

                    $NoEncodecolomn37 = isset($Column[36]) ? $Column[36] : '';

                    $colomn37 = utf8_encode($NoEncodecolomn37);

                    $NoEncodecolomn38 = isset($Column[37]) ? $Column[37] : '';

                    $colomn38 = utf8_encode($NoEncodecolomn38);

                    $NoEncodecolomn39 = isset($Column[38]) ? $Column[38] : '';

                    $colomn39 = utf8_encode($NoEncodecolomn39);

                    $NoEncodecolomn40 = isset($Column[39]) ? $Column[39] : '';

                    $colomn40 = utf8_encode($NoEncodecolomn40);

                    $NoEncodecolomn41 = isset($Column[40]) ? $Column[40] : '';

                    $colomn41 = utf8_encode($NoEncodecolomn41);

                    $NoEncodecolomn42 = isset($Column[41]) ? $Column[41] : '';

                    $colomn42 = utf8_encode($NoEncodecolomn42);

                    $NoEncodecolomn43 = isset($Column[42]) ? $Column[42] : '';

                    $colomn43 = utf8_encode($NoEncodecolomn43);

                    $NoEncodecolomn44 = isset($Column[43]) ? $Column[43] : '';

                    $colomn44 = utf8_encode($NoEncodecolomn44);

                    $NoEncodecolomn45 = isset($Column[44]) ? $Column[44] : '';

                    $colomn45 = utf8_encode($NoEncodecolomn45);

                    $NoEncodecolomn46 = isset($Column[45]) ? $Column[45] : '';

                    $colomn46 = utf8_encode($NoEncodecolomn46);

                    $NoEncodecolomn47 = isset($Column[46]) ? $Column[46] : '';

                    $colomn47 = utf8_encode($NoEncodecolomn47);

                    $NoEncodecolomn48 = isset($Column[47]) ? $Column[47] : '';

                    $colomn48 = utf8_encode($NoEncodecolomn48);

                    $NoEncodecolomn49 = isset($Column[48]) ? $Column[48] : '';   

                    $colomn49 = utf8_encode($NoEncodecolomn49);


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
                    <td>'.$colomn14.'</td>
                    <td>'.$colomn15.'</td>
                    <td>'.$colomn16.'</td>
                    <td>'.$colomn17.'</td>
                    <td>'.$colomn18.'</td>
                    <td>'.$colomn19.'</td>
                    <td>'.$colomn20.'</td>
                    <td>'.$colomn21.'</td>
                    <td>'.$colomn22.'</td>
                    <td>'.$colomn23.'</td>
                    <td>'.$colomn24.'</td>
                    <td>'.$colomn25.'</td>
                    <td>'.$colomn26.'</td>
                    <td>'.$colomn27.'</td>
                    <td>'.$colomn28.'</td>
                    <td>'.$colomn29.'</td>
                    <td>'.$colomn30.'</td>
                    <td>'.$colomn31.'</td>
                    <td>'.$colomn32.'</td>
                    <td>'.$colomn33.'</td>
                    <td>'.$colomn34.'</td>
                    <td>'.$colomn35.'</td>
                    <td>'.$colomn36.'</td>
                    <td>'.$colomn37.'</td>
                    <td>'.$colomn38.'</td>
                    <td>'.$colomn39.'</td>
                    <td>'.$colomn40.'</td>
                    <td>'.$colomn41.'</td>
                    <td>'.$colomn42.'</td>
                    <td>'.$colomn43.'</td>
                    <td>'.$colomn44.'</td>
                    <td>'.$colomn45.'</td>
                    <td>'.$colomn46.'</td>
                    <td>'.$colomn47.'</td>
                    <td>'.$colomn48.'</td>
                    <td>'.$colomn49.'</td>

                    </tr>';




                    if (in_array($colomn12, $listIdentifiantMangue))

                    {




                    }


                    else

                    {


                        if (in_array($colomn12, $listIdentifiant))
                            {


                                $req2 = $IdMangueManager->modifIdMangue($colomn12,$colomn1,$colomn2,$colomn3,$colomn4,$colomn5,$colomn6,$colomn7,$colomn8,$colomn9,$colomn10,$colomn11,$colomn13,$colomn14,$colomn15,$colomn16,$colomn17,$colomn18,$colomn19,$colomn20,$colomn21,$colomn22,$colomn23,$colomn24,$colomn25,$colomn26,$colomn27,$colomn28,$colomn29,$colomn30,$colomn31,$colomn32,$colomn33,$colomn34,$colomn35,$colomn36,$colomn37,$colomn38,$colomn39,$colomn40,$colomn41,$colomn42,$colomn43,$colomn44,$colomn45,$colomn46,$colomn47,$colomn48,$colomn49);




                            }

                        else
                            {

                                $req1 = $IdMangueManager->createIdMangue($colomn12,$colomn1,$colomn2,$colomn3,$colomn4,$colomn5,$colomn6,$colomn7,$colomn8,$colomn9,$colomn10,$colomn11,$colomn13,$colomn14,$colomn15,$colomn16,$colomn17,$colomn18,$colomn19,$colomn20,$colomn21,$colomn22,$colomn23,$colomn24,$colomn25,$colomn26,$colomn27,$colomn28,$colomn29,$colomn30,$colomn31,$colomn32,$colomn33,$colomn34,$colomn35,$colomn36,$colomn37,$colomn38,$colomn39,$colomn40,$colomn41,$colomn42,$colomn43,$colomn44,$colomn45,$colomn46,$colomn47,$colomn48,$colomn49);

                            }



                        array_push($listIdentifiantMangue, $colomn12);



                    }
                    
                }

            }



    echo '</tbody></table>';


    ?>

                        

<?php $content = ob_get_clean(); ?>
<?php require('view/fronted/template/template.php'); ?>