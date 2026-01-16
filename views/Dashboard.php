<!DOCTYPE html>
<html lang="en">

   <?php require_once '../views/header.php'; ?>
<!-- DASHBOARD -->
<div id="dashboard" class="page">
  <div class="dashboard">
    <div class="sidebar">
      <h2>ISTICHARA</h2>
      <a onclick="showPage('dashboard')">Dashboard</a>
      <a onclick="showPage('consultation')">Nouvelle consultation</a>
      <a onclick="logout()">Déconnexion</a>
    </div>

    <div class="content">
      <h1>Bienvenue Safaa 👋</h1>

      <div class="card">
        <h3>Mes consultations</h3>
        <p>#102 - Droit civil - En attente</p>
        <p>#101 - Droit famille - Répondu</p>
      </div>
    </div>
  </div>
</div>

<?php require_once '../views/footer.php'; ?>