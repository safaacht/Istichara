<!DOCTYPE html>
<html lang="en">

   <?php require_once '../views/header.php'; ?>


    <div id="login" class="page">
      <div class="form-box">
        <h2>Connexion ISTICHARA</h2>
        <input id="email" type="email" placeholder="Email">
        <input id="pass" type="password" placeholder="Mot de passe">
        <button class="btn" onclick="login()">Se connecter</button>
      </div>
    </div>
    <?php require_once '../views/footer.php'; ?>
