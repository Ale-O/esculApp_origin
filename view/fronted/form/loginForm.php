<?php

    require_once 'model/LoginManager.php';
    $LoginManager = new LoginManager();
    $req = $LoginManager->getAllLogin();
    $users = $req->fetchAll();
    $req->closeCursor();

// Validation du formulaire

if (isset($_POST['email']) && isset($_POST['password'])) {
    foreach ($users as $user) {
        if (
            $user['email'] === $_POST['email'] &&
            $user['password'] === $_POST['password']
        ) {
            $_SESSION['loggedUser'] = $user['identifiant'];
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['prenom'] = $user['prenom'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['password'] = $user['password'];
        }
    }
}
?>

<!--
   Si utilisateur/trice est non identifié(e), on affiche le formulaire
-->

<?php if (!isset($_SESSION['loggedUser'])): ?>

<main class="form-signin">
<form action="index.php?" method="post">


    <!-- si message d'erreur on l'affiche -->

    <?php if (isset($errorMessage)) : ?>

        <div class="alert alert-danger" role="alert">
            <?php echo $errorMessage; ?>
        </div>

    <?php endif; ?>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" placeholder="you@exemple.com">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>

    <button type="submit" class="btn btn-primary">Connexion</button>

</form>
</main>

<!-- 
    Si utilisateur/trice bien connectée on affiche un message de succès
-->

<?php else: ?>

<?php
  header('Location: index.php');
  exit();
?>

<?php endif; ?>