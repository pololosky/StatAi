<x-layouts.app.navBar :title="$title ?? 'Tableau de Bord'">
<div class="dashboard-page">
    <div class="container">
        
        <header class="header">
            <div class="welcome-text">
                <h1>Bonjour, Jean Dupont 👋</h1>
                <p>Voici un aperçu de vos performances et de votre progression actuelle.</p>
            </div>
            <div class="current-date">
                <span class="badge-date">Janvier 2026</span>
            </div>
        </header>

        <section class="stats-grid">
            <div class="stat-card">
                <small>Moyenne Générale</small>
                <div class="stat-value">15.5<span>/20</span></div>
                <div class="stat-change positive">↑ 1.2 vs mois dernier</div>
            </div>
            <div class="stat-card">
                <small>Assiduité</small>
                <div class="stat-value">94%</div>
                <div class="stat-change positive">Excellent</div>
            </div>
            <div class="stat-card">
                <small>Cours suivis</small>
                <div class="stat-value">12</div>
                <div class="stat-change">Semestre 1</div>
            </div>
            <div class="stat-card">
                <small>Rang classe</small>
                <div class="stat-value">3ème</div>
                <div class="stat-change">sur 45 élèves</div>
            </div>
        </section>

        <div class="main-content-grid">
            
            <div class="card chart-section">
                <h3>Évolution des résultats</h3>
                <div class="placeholder-chart">
                    <div class="bar" style="height: 60%"><span>Oct</span></div>
                    <div class="bar" style="height: 75%"><span>Nov</span></div>
                    <div class="bar" style="height: 70%"><span>Dec</span></div>
                    <div class="bar-active" style="height: 85%"><span>Jan</span></div>
                </div>
            </div>

            <div class="card tasks-section">
                <h3>Prochains examens</h3>
                <ul class="task-list">
                    <li>
                        <div class="task-info">
                            <strong>Mathématiques</strong>
                            <p>Algèbre linéaire</p>
                        </div>
                        <div class="task-date">Demain</div>
                    </li>
                    <li>
                        <div class="task-info">
                            <strong>Anglais</strong>
                            <p>Test d'expression orale</p>
                        </div>
                        <div class="task-date">24 Jan.</div>
                    </li>
                    <li>
                        <div class="task-info">
                            <strong>Physique</strong>
                            <p>Thermodynamique</p>
                        </div>
                        <div class="task-date">02 Fév.</div>
                    </li>
                </ul>
                <a href="#" class="btn btn-outline">Voir tout le calendrier</a>
            </div>
        </div>

        <section class="analysis-section">
            <div class="card">
                <h3>Analyse de profil</h3>
                <div class="analysis-grid">
                    <div class="analysis-box">
                        <span class="check">✓</span>
                        <strong>Forces</strong>
                        <p>Logique mathématique, Capacité de synthèse, Assiduité.</p>
                    </div>
                    <div class="analysis-box warn">
                        <span class="warn-icon">!</span>
                        <strong>À améliorer</strong>
                        <p>Participation orale, Gestion du temps en examen.</p>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>

<style>
    /* --- DASHBOARD STYLE --- */
    .dashboard-page {
        font-family: 'Inter', sans-serif;
        background-color: #f9fafb;
        color: #1f2937;
        padding: 40px 20px;
    }

    .container {
        max-width: 1100px;
        margin: 0 auto;
    }

    /* Header */
    .header { 
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 40px; 
    }
    .header h1 { font-size: 1.8rem; margin-bottom: 8px; font-weight: 700; }
    .header p { color: #6b7280; font-size: 1rem; }
    .badge-date { background: #fff; border: 1px solid #e5e7eb; padding: 8px 16px; border-radius: 8px; font-weight: 600; font-size: 0.9rem;}

    /* Stats Grid */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }
    .stat-card {
        background: white;
        padding: 20px;
        border-radius: 12px;
        border: 1px solid #e5e7eb;
    }
    .stat-card small { color: #6b7280; font-weight: 500; text-transform: uppercase; font-size: 0.75rem; }
    .stat-value { font-size: 1.5rem; font-weight: 700; margin: 10px 0; color: #2563eb; }
    .stat-value span { font-size: 0.9rem; color: #9ca3af; }
    .stat-change { font-size: 0.8rem; font-weight: 500; color: #6b7280; }
    .positive { color: #10b981; }

    /* Main Content */
    .main-content-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 20px;
        margin-bottom: 30px;
    }

    .card {
        background: white;
        padding: 25px;
        border-radius: 16px;
        border: 1px solid #e5e7eb;
    }
    .card h3 { font-size: 1.1rem; margin-bottom: 20px; font-weight: 600; }

    /* Chart Placeholder */
    .placeholder-chart {
        height: 200px;
        display: flex;
        align-items: flex-end;
        justify-content: space-around;
        padding-top: 20px;
        border-bottom: 1px solid #e5e7eb;
    }
    .bar, .bar-active {
        width: 40px;
        background: #e5e7eb;
        border-radius: 4px 4px 0 0;
        position: relative;
    }
    .bar-active { background: #2563eb; }
    .bar span, .bar-active span {
        position: absolute;
        bottom: -25px;
        left: 50%;
        transform: translateX(-50%);
        font-size: 0.75rem;
        color: #6b7280;
    }

    /* Task List */
    .task-list { list-style: none; padding: 0; margin-bottom: 20px; }
    .task-list li {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px 0;
        border-bottom: 1px solid #f3f4f6;
    }
    .task-info strong { display: block; font-size: 0.9rem; }
    .task-info p { font-size: 0.8rem; color: #6b7280; margin: 0; }
    .task-date { font-size: 0.8rem; font-weight: 600; color: #2563eb; background: #eff6ff; padding: 4px 8px; border-radius: 4px; }

    .btn-outline {
        display: block;
        text-align: center;
        padding: 10px;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        text-decoration: none;
        color: #374151;
        font-size: 0.85rem;
        font-weight: 600;
        transition: background 0.2s;
    }
    .btn-outline:hover { background: #f9fafb; }

    /* Analysis */
    .analysis-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }
    .analysis-box {
        background: #f0fdf4;
        padding: 15px;
        border-radius: 12px;
        border: 1px solid #dcfce7;
    }
    .analysis-box.warn { background: #fffbeb; border-color: #fef3c7; }
    .check { color: #10b981; font-weight: bold; margin-right: 5px; }
    .warn-icon { color: #f59e0b; font-weight: bold; margin-right: 5px; }
    .analysis-box strong { font-size: 0.9rem; display: inline-block; margin-bottom: 5px; }
    .analysis-box p { font-size: 0.85rem; color: #4b5563; margin: 0; }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .main-content-grid { grid-template-columns: 1fr; }
        .header { flex-direction: column; align-items: flex-start; gap: 15px; }
        .analysis-grid { grid-template-columns: 1fr; }
    }
</style>
</x-layouts.app.navBar>