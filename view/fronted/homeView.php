<?php ob_start(); ?>




    <div class="row">

    		<?php require('view/fronted/widget/carrousel.php'); ?>

    </div>


<hr>

    <div class="row" style="margin-left: 10px; margin-right: 10px;">


    <div class="col-3 themed-grid-col">



    
        <?php



        require_once ('model/champsManager.php');

        require_once ('model/TeacherManager.php');
        $TeacherManager = new TeacherManager();
        $req = $TeacherManager->countTeacher();

        echo '


            <h4 class="h4" style="text-align: center;">Enseignants actifs</h4>


               <table class="table table-bordered table-striped table-condensed">
                
               <thead>
                  <tr>
                        <th>Emplois</th>
                        <th>Nombre</th>          
                  </tr>
               </thead>
               <tbody>';

                    while ($data = $req->fetch())
                        {  

                            $champsManager = new champsManager();
                            $req1 = $champsManager->itemById('emploi',$data['emploi']);
                            $items = $req1->fetchAll();
                            $item = $items[0]; 
                            $emploi = $item[0];


                            echo '<tr>
                        
                        <td>' . $emploi . '</td>
                        <td>' . $data['count(*)'] . '</td>

                            </tr>';
                                        }
                echo '</tbody></table>';


                $req->closeCursor();


        ?>



    </div>


    <div class="col-1 themed-grid-col"></div>


    <div class="col-8 themed-grid-col">
          
            <?php require('view/fronted/widget/graphique.php'); ?>


    </div>




    </div>





<?php $content = ob_get_clean(); ?>
<?php require('view/fronted/template/template.php'); ?>