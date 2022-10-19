<?php ob_start(); ?>




    <div class="row" style="margin-top: 100px; margin-bottom: 100px;">
       
        <div class="col-2 themed-grid-col"></div> 

        <div class="col-8 themed-grid-col">
            


    <div class="row">
       
        <div class="col-1 themed-grid-col"></div> 

        <div class="col-10 themed-grid-col">
            
            <img class="mb-4" src="assets/image/logoTitre.png" alt="" width="600" height="200">

        </div>

        <div class="col-1 themed-grid-col"></div>

    </div>





    <div class="row">

      <div class="col-4 themed-grid-col"></div>

      <div class="col-4 themed-grid-col">



          

    <!-- Inclusion du formulaire de connexion -->
    <?php require 'view/fronted/form/loginForm.php'; ?>



      </div>

      <div class="col-4 themed-grid-col"></div>
    </div>



        <div class="col-2 themed-grid-col"></div>

    </div>








<?php $content = ob_get_clean(); ?>
<?php require 'view/fronted/template/templateLogin.php'; ?>