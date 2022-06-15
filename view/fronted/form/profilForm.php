<form action="index.php?action=changeProfil" method="post">

<p>
    <label for="identifiant"></label>
    <input type="hidden" name="identifiant" value="<?php echo $_SESSION['loggedUser'] ?>" />
</p>


<p>
    <label for="password" class="form-label">Mot de passe actuel</label>
    <input type="password" name="password" class="form-control" required/>
</p>


<p>
    <label for="newPassword" class="form-label">Nouveau mot de passe</label>
    <input type="password" name="newPassword" class="form-control" required/>
</p>


<p>
    <input type="submit" value="Modifier" />
</p>

</form>