<?php require_once __DIR__ . '/header.php'; ?>
<div class="dashboard-container">
    <h1>Dashboard</h1>
    
    <!-- Stats Grid -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-info">
                <h3>Total Avocats</h3>
                <div class="number"><?= htmlspecialchars($totalAvocats) ?></div>
            </div>
            <div class="stat-icon">
                ⚖️
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-info">
                <h3>Total Huissiers</h3>
                <div class="number"><?= htmlspecialchars($totalHuissiers) ?></div>
            </div>
            <div class="stat-icon">
                📄
            </div>
        </div>
    </div>
    
    <!-- Répartition par ville (Graphique) -->
    <section>
        <h2>Répartition des professionnels par ville</h2>
        <div style="position: relative; height:400px; width:100%">
            <canvas id="cityChart"></canvas>
        </div>
    </section>
    
    <!-- Top 3 avocats -->
    <section>
        <h2>Top 3 des avocats par années d'expérience</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Années d'expérience</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($topAvocats as $avocat): ?>
                    <tr>
                        <td><?= htmlspecialchars($avocat['name']) ?></td>
                        <td><?= htmlspecialchars($avocat['years_of_experiences']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>


<?php require_once __DIR__ . '/footer.php'; ?>