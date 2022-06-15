<?php ob_start(); ?>



    <p>
    <a href="index.php?action=majAllEnseignantByMangue" class="btn btn-info">Mise à jour des enseignants sur la base de Mangue</a>
    </p>
    <br>


    <?php 




       echo '

       <hr>
       <table class="table table-bordered table-striped table-condensed">
        <h4>Dernière importation de mangue</h4>
       <thead>
          <tr>

            <th>no_individu</th>
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

            while ($data = $req->fetch())
                {

                   
                    echo '<tr>
                

                        <td>' . $data[0] . '</td>
                        <td>' . $data[1] . '</td>
                        <td>' . $data[2] . '</td>
                        <td>' . $data[3] . '</td>
                        <td>' . $data[4] . '</td>
                        <td>' . $data[5] . '</td>
                        <td>' . $data[6] . '</td>
                        <td>' . $data[7] . '</td>
                        <td>' . $data[8] . '</td>
                        <td>' . $data[9] . '</td>
                        <td>' . $data[10] . '</td>
                        <td>' . $data[11] . '</td>
                        <td>' . $data[12] . '</td>
                        <td>' . $data[13] . '</td>
                        <td>' . $data[14] . '</td>
                        <td>' . $data[15] . '</td>
                        <td>' . $data[16] . '</td>
                        <td>' . $data[17] . '</td>
                        <td>' . $data[18] . '</td>
                        <td>' . $data[19] . '</td>
                        <td>' . $data[20] . '</td>
                        <td>' . $data[21] . '</td>
                        <td>' . $data[22] . '</td>
                        <td>' . $data[23] . '</td>
                        <td>' . $data[24] . '</td>
                        <td>' . $data[25] . '</td>
                        <td>' . $data[26] . '</td>
                        <td>' . $data[27] . '</td>
                        <td>' . $data[28] . '</td>
                        <td>' . $data[29] . '</td>
                        <td>' . $data[30] . '</td>
                        <td>' . $data[31] . '</td>
                        <td>' . $data[32] . '</td>
                        <td>' . $data[33] . '</td>
                        <td>' . $data[34] . '</td>
                        <td>' . $data[35] . '</td>
                        <td>' . $data[36] . '</td>
                        <td>' . $data[37] . '</td>
                        <td>' . $data[38] . '</td>
                        <td>' . $data[39] . '</td>
                        <td>' . $data[40] . '</td>
                        <td>' . $data[41] . '</td>
                        <td>' . $data[42] . '</td>
                        <td>' . $data[43] . '</td>
                        <td>' . $data[44] . '</td>
                        <td>' . $data[45] . '</td>
                        <td>' . $data[46] . '</td>
                        <td>' . $data[47] . '</td>
                        <td>' . $data[48] . '</td>





                    </tr>';
                                }
        echo '</tbody></table>';


        $req->closeCursor();
    ?>
                        

<?php $content = ob_get_clean(); ?>
<?php require('view/fronted/template/template.php'); ?>