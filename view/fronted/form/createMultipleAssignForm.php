<form action="index.php?action=newMultipleAssign&listSupport=<?php echo $listSupport ?>" method="post">


<?php 

echo '

 <fieldset>
       <legend>Général</legend>


        <div class="row">


                <div class="col-3 themed-grid-col">      

                    <br>
                    <dt>Enseignant</dt><dd>

                    <a href="index.php?action=teacher&identifiant=' . $dataAssign['identifiant_enseignant'] . '">' . $dataAssign['nom_enseignant'] . '</a>

                    </dd>


                </div>


                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Date de début</dt><dd>'. $dataAssign['debut']. ' </dd>


                </div>

                    

                <div class="col-3 themed-grid-col">
                    
                    <br>      
                    <dt>Date de fin</dt><dd>'. $dataAssign['fin']. ' </dd>
                      
                </div>


        </div>


   </fieldset>


<br>
<hr>
<br>



   <fieldset>
       <legend>Emploi</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                        
                    <br>  
                    <dt>Emploi</dt><dd>'. $dataAssign['emploi_enseignant']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">      

                    <br>
                    <dt>Sous-emploi</dt><dd>'. $dataAssign['sous_emploi_enseignant']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">
                         


                </div>


                <div class="col-3 themed-grid-col">
                          

                      
                </div>


        </div>


   </fieldset>


<br>
<hr>
<br>


'
;
 

    for ($i = 1; $i < count($arrayData); $i++) 


    {

    require_once ('model/SupportManager.php');
    $SupportManagerById = new SupportManager();
    $reqSupportById = $SupportManagerById->getSupportsById($arrayData[$i]);
    $dataSupportById = $reqSupportById->fetch();


    echo '


       <fieldset>
           <legend>' . $dataSupportById['numero_formate'] . '</legend>

            <div class="row">


                    <div class="col-3 themed-grid-col">
                              
                        <div class="form-group">

                            <label for="debut' . $i . '" class="form-label">Date de début</label>
                            <input type="date" name="debut' . $i . '" class="form-control" required/>

                        </div>

                    </div>


                    <div class="col-3 themed-grid-col">
                              
                        <div class="form-group">

                            <label for="fin' . $i . '" class="form-label">Date de fin</label>
                            <input type="date" name="fin' . $i . '" class="form-control" required/>

                        </div>
                          
                    </div>


                    <div class="col-3 themed-grid-col">
                              
                        <div class="form-group">



                        </div>

                    </div>


            </div>

       </fieldset>

    <br>
    <br>
    <hr>
    <br>


    ';


    }

    echo '



    <br>
    <hr>
    <br>






    <p>
        <button class="btn btn-primary">Créer</button>
    </p>



        <div class="form-group">

            <label for="enseignant"></label>
            <input type="hidden" name="enseignant" value="' . $identifiant . '" />

        </div>


        <div class="form-group">

            <label for="emploi"></label>
            <input type="hidden" name="emploi" value="' . $identifiant_emploi . '" />

        </div>

        <div class="form-group">

            <label for="sous_emploi"></label>
            <input type="hidden" name="sous_emploi" value="' . $identifiant_sous_emploi . '" />

        </div>
        





    </form>


    '
    ;


?>
