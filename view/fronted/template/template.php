

<!DOCTYPE html>
<html lang="fr">
    <?php require 'head.php'; ?>
    <body>
        <div>
            
            <?php require 'header.php'; ?>
            
            <div class="container-fluid">
                <div class="row">

                    <?php require 'nav.php'; ?>

                    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                            <div>

                                    <div>



<p id="top"></p>

<p>
<a href="#down" class="btn btn-secondary">

<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-square" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.5 2.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
</svg>

Bas de page</a>
</p>


                                        <br>
                                        <?= $content; ?>     
                                        <br>

 <p id="down"></p>

<p>
<a href="#top" class="btn btn-secondary">

<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-square" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.5 9.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
</svg>

Haut de page</a>
</p>    

                                    </div>

                            </div>
                    </main>

                </div>
            </div>
            
        </div>

        <script src="assets\dist\js\bootstrap.bundle.min.js"></script>
        <script src="assets\dist\js\feather.min.js"></script>
        <script src="assets\dist\js\chart.min.js"></script>
        <script src="assets\dist\js\dashboard.js"></script>

    </body>


