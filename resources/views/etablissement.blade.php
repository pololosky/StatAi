<x-layouts.app.navBar :title="$title ?? null">
    <div class="Etablissement">
        <div class="container">

            <section class="header">
                <div class="texte">
                    <h2>Gestion des profils étudiants</h2>
                    <p>Tableau de bord établissement</p>
                </div>

                <div class="barre-recherche">
                    <p>+ Ajouter un étudiant</p>
                </div>
            </section>
            <section class="div3">
                <div class="div0">
                    <p>Etudiants inscrit <br> 6 <br> profil actif</p>
                    <div class="icon">
                        <img src="{{ asset('images/icons/supervisor.svg') }}" >
                    </div>
                    
                </div>

                <div class="div1">
                    <p>Moyenne générale <br>14.0 / 20 <br> Établissement</p>
                    <div class="icon">
                        <img src="{{ asset('images/icons/moving1.svg') }}" >
                    </div>

                </div>

                <div class="div2">
                    <p>Alertes actives <br>3 <br>Nécessitent un suivi</p>
                    <div class="icon">
                        <img src="{{ asset('images/icons/error1.svg') }}" >
                    </div>
                </div>
            </section>

            <section class="recherche">
                <div class="recherche-container">
                    <div class="recherche-input">
                        <span class="search-icon"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#434343"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/></svg></span>
                        <input type="text" placeholder="Rechercher un étudiant ou une classe...">
                    </div>

                    <select class="recherche-select">
                        <option>Toutes les classes</option>
                        <option>Terminale S</option>
                        <option>Terminale ES</option>
                        <option>Première L</option>
                        <option>Première ES</option>
                    </select>

                </div>
            </section>

            <section class="table-card">
                <table class="students-table">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Class</th>
                            <th>Moyenne</th>
                            <th>Tendance</th>
                            <th>Dernière MAJ</th>
                            <th>Alertes</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="name-cell">
                                <span class="avatar">MD</span>
                                <span>Marie DUPONT</span>
                            </td>

                            <td>Terminale S</td>

                            <td class="score succes">15.5/20</td>

                            <td class="trend up"> Hausse</td>

                            <td class="10/12/2024"></td>

                            <td>-</td>

                            <td class="actions"></td>
                        </tr>
                    </tbody>

                </table>

            </section>
        </div>

    </div>

    <style>
        .Etabissement {
            font-family: 'Inter', sans-serif;
            background-color: #f9fafb;
            color: #1f2937;
            padding: 60px 20px;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
        }

        .header {

            display: flex;
            justify-content: space-between;
            /* gauche / droite */
            align-items: center;
            padding: 30px 50px;
            /* espace avec le header */
        }


        .header .texte h2 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            font-weight: 700;
            text-align: left;
        }

        .header .texte p {
            color: #6b7280;
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
            text-align: left;
        }

        .header .barre-recherche {
            width: 200px;
            height: 40px;
            display: flex;
            box-sizing: border-box;
            background-color: oklch(54.6% 0.245 262.881);
            text-align: center;
            align-items: center;
            justify-content: center;
            color: white;
            border-radius: 10px;
        }

        .div3{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 30px 50px;
        }

        .div3 .div0 ,.div1 ,.div2{
            width: 300px;
            height: 100px;
            box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.3);
            border-radius: 10px;
            text-align: left;
            padding: 10px 10px; 
            display: flex;
            align-items: center;   /* aligne verticalement */
            justify-content: space-between;
        }

        .icon {
            top: -25px;
            right: 8px;
            width: 20px;
            height: 20px;
            position: relative; 
        }

        .recherche {
            padding: 30px;
        }

        .recherche-container {
            background: #fff;
            padding: 10px 10px;
            border-radius: 10px;
            box-shadow: 2px 2px 2px  2px rgba(0,0,0,0.08);

            display: flex;
            align-items: center;
            gap: 20px;
            justify-content: space-between;
        }

        .recherche-input {
            flex: 1;
            display: flex;
            align-items: center;
            border: 1px solid #d0d7e2;
            border-radius: 10px;
            padding: 12px 16px;
        }

        .recherche-input input {
            border: none;
            outline: none;
            width: 100%;
            font-size: 16px;
        }

        .search-icon {
            margin-right: 10px;
            font-size: 18px;
            color: #9aa4b2;
        }

        .recherche-select {
            border: 1px solid #d0d7e2;
            border-radius: 14px;
            padding: 12px 16px;
            font-size: 16px;
            background: white;
            cursor: pointer;
        }
    </style>
</x-layouts.app.navBar>