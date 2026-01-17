<!DOCTYPE html>
<html lang="en">

   <?php require_once '../views/header.php'; ?>


    <div id="login" class="page active">
    <div class="form-box">

        <h2 class="form-title">Connexion</h2>
        <p class="form-subtitle">Accédez à votre espace ISTICHARA</p>

        <form onsubmit="login(); return false;">
            <label>Email</label>
            <input id="email" type="email" placeholder="exemple@email.com" required>

            <label>Mot de passe</label>
            <input id="pass" type="password" placeholder="********" required>

            <button class="btn full">Se connecter</button>
        </form>

    </div>
</div>

    <?php require_once '../views/footer.php'; ?>
