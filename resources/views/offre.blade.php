<x-layouts.app.navBar :title="$title ?? null">
<div class="pricing-page">
    <div class="container">
        
        <header class="header text-center">
            <h1>Tarifs simples et transparents</h1>
            <p>Choisissez la formule adaptée à vos besoins. Aucun engagement, résiliable à tout moment.</p>
        </header>

        <section class="pricing-grid">
            <div class="card">
                <h3>Étudiant Gratuit</h3>
                <div class="price">0F CFA <span>/mois</span></div>
                <a href="#" class="btn btn-blue">Accès gratuit</a>
                <ul class="features">
                    <li><span class="check">✓</span> Consultation illimitée du profil</li>
                    <li><span class="check">✓</span> Forces et faiblesses</li>
                    <li><span class="check">✓</span> Graphiques d'évolution</li>
                    <li><span class="check">✓</span> Appréciations enseignants</li>
                </ul>
            </div>

            <div class="card card-popular">
                <div class="badge">★ Populaire</div>
                <h3>Accompagnement</h3>
                <div class="price">25.000F CFA<span>/mois</span></div>
                <a href="#" class="btn btn-blue">Commencer l'essai</a>
                <ul class="features">
                    <li><span class="check-blue">✓</span> Plans d'action personnalisés</li>
                    <li><span class="check-blue">✓</span> Suivi hebdomadaire</li>
                    <li><span class="check-blue">✓</span> Conseils adaptés</li>
                    <li><span class="check-blue">✓</span> Support prioritaire</li>
                </ul>
            </div>

            <div class="card">
                <h3>Établissement</h3>
                <div class="price">Sur mesure</div>
                <a href="#" class="btn btn-blue">Nous contacter</a>
                <ul class="features">
                    <li><span class="check">✓</span> Gestion illimitée</li>
                    <li><span class="check">✓</span> Analyses prédictives</li>
                    <li><span class="check">✓</span> Export de données</li>
                    <li><span class="check">✓</span> Support dédié</li>
                </ul>
            </div>
        </section>

        <section class="institution-details">
            <h3>Tarification établissement</h3>
            <div class="inst-grid">
                <div class="inst-box">
                    <strong>Petit</strong>
                    <div style="color:#2563eb; font-weight:bold;">149€/mois</div>
                    <small>Max 100 profils</small>
                </div>
                <div class="inst-box">
                    <strong>Moyen</strong>
                    <div style="color:#2563eb; font-weight:bold;">299€/mois</div>
                    <small>Max 500 profils</small>
                </div>
                <div class="inst-box">
                    <strong>Grand</strong>
                    <div style="color:#2563eb; font-weight:bold;">Sur devis</div>
                    <small>+500 profils</small>
                </div>
            </div>
        </section>

        <section class="faq-container text-center">
            <h2>Questions fréquentes</h2>
            <div class="faq-item">
                <h4>Comment fonctionne l'essai gratuit ?</h4>
                <p>Les établissements bénéficient de 30 jours d'essai gratuit avec accès complet. Aucune carte bancaire requise.</p>
            </div>
            <div class="faq-item">
                <h4>Puis-je résilier à tout moment ?</h4>
                <p>Oui, tous nos abonnements sont sans engagement. La résiliation est possible en un clic.</p>
            </div>
            <div class="faq-item">
                <h4>Les données sont-elles sécurisées ?</h4>
                <p>Absolument. Les données sont chiffrées et conformes au RGPD pour protéger la vie privée des étudiants.</p>
            </div>
        </section>

    </div>
</div>


<style>
    /* --- CSS SIMPLE & PRO --- */
    .pricing-page {
        font-family: 'Inter', sans-serif;
        background-color: #f9fafb;
        color: #1f2937;
        padding: 60px 20px;
    }

    .container {
        max-width: 1100px;
        margin: 0 auto;
    }

    .text-center { text-align: center; }

    /* Header */
    .header { margin-bottom: 50px; }
    .header h1 { font-size: 2.5rem; margin-bottom: 15px; font-weight: 700; }
    .header p { color: #6b7280; font-size: 1.1rem; max-width: 600px; margin: 0 auto; }

    /* Grille de prix */
    .pricing-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-bottom: 60px;
    }

    /* Cartes */
    .card {
        background: white;
        padding: 35px;
        border-radius: 16px;
        border: 1px solid #e5e7eb;
        display: flex;
        flex-direction: column;
        transition: transform 0.3s ease;
    }

    .card-popular {
        border: 2px solid #2563eb;
        position: relative;
        transform: scale(1.05);
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
    }

    .badge {
        position: absolute;
        top: -15px;
        left: 50%;
        transform: translateX(-50%);
        background: #2563eb;
        color: white;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: bold;
        text-transform: uppercase;
    }

    /* Éléments de prix */
    .card h3 { margin-bottom: 5px; font-size: 1.25rem; }
    .price { font-size: 1.5rem; font-weight: 600; color: #2563eb; margin-bottom: 25px; }
    .price span { font-size: 1rem; color: #9ca3af; font-weight: 400; }

    /* Boutons */
    .btn {
        display: block;
        width: 100%;
        padding: 12px;
        border-radius: 8px;
        font-weight: 600;
        text-align: center;
        text-decoration: none;
        margin-bottom: 25px;
        border: none;
        cursor: pointer;
    }
    .btn-blue { background: #2563eb; color: white; }
    .btn-gray { background: #f3f4f6; color: #374151; }
    .btn:hover { opacity: 0.9; }

    /* Liste des fonctionnalités */
    .features { list-style: none; padding: 0; margin: 0; flex-grow: 1; }
    .features li { font-size: 0.9rem; margin-bottom: 12px; display: flex; align-items: flex-start; }
    .check { color: #10b981; margin-right: 10px; font-weight: bold; }
    .check-blue { color: #2563eb; margin-right: 10px; font-weight: bold; }

    /* Section Institution */
    .institution-details {
        background: white;
        padding: 40px;
        border-radius: 16px;
        border: 1px solid #e5e7eb;
        margin-bottom: 60px;
    }
    .inst-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-top: 20px;
    }
    .inst-box {
        background: #f9fafb;
        padding: 20px;
        border-radius: 12px;
        text-align: center;
    }

    /* FAQ */
    .faq-container { max-width: 800px; margin: 0 auto 60px; }
    .faq-item { border-bottom: 1px solid #e5e7eb; padding: 20px 0; text-align: left; }
    .faq-item h4 { margin-bottom: 10px; font-size: 1rem; }
    .faq-item p { color: #6b7280; font-size: 0.9rem; line-height: 1.5; }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .card-popular { transform: scale(1); margin: 20px 0; }
    }
</style>
</x-layouts.app.navBar>