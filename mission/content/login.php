<?php
    if(isset($_POST['login_submit'])){
        extract($_POST,EXTR_OVERWRITE);
        $adm = new AdminDAO($cnx);
        $nom_admin = $adm->getAdmin($login, $password);
        print "<br>Nom de l'admin : ".$nom_admin;
        $_SESSION['admin'] = $nom_admin;
        header('Location: admin/index_.php?page=accueil_admin.php');
    }
?>


<form action="<?php print $_SERVER['PHP_SELF'];?>" method="post">
    <div class="mb-3">
        <label for="login" class="form-label">Login</label>
        <input type="text" class="form-control" id="login" name="login">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="text" class="form-control" id="password" name="password">
    </div>

    <button type="submit" class="btn btn-primary" name="login_submit">Connexion</button>
</form>
