<x-layouts.app.navBar :title="$title ?? null">
    <main class="scroll-smooth">
        {{-- presentation --}}
        <section class="flex justify-between px-32 pt-10 pb-20">
            <div class="flex flex-col gap-8 w-1/2">
                <div class="flex gap-2 w-fit p-2 border-1 border-blue-500 rounded-xl shadow-2xl">
                    <i class="ri-bard-line text-xl text-blue-600"></i>
                    <p class="text-blue-600 font-semibold">L'IA au service de la reussite scolaire</p>
                </div>
                <h1 class=" text-8xl font-bold">
                    Révélez le potentiel de <span class="text-blue-600">chaque élève</span>
                </h1>
                <p class="w-4/5 text-gray-400 font-semibold text-xl">StatAi analyse les notes, les appréciations et les préférences pour créer des profils uniques et offrir un accompagnement personnalisé.</p>
                <div class="flex gap-4">
                    <a href="/" class="w-fit flex px-5 py-1.5 shadow bg-blue-600 text-white cursor-pointer rounded-xl text-xl font-semibold">Commencer maintenant</a>
                    <a href="/" class="w-fit flex px-5 py-1.5 shadow bg-white text-blue-600 cursor-pointer rounded-xl text-xl font-semibold border border-gray-400">Pour les etablissements</a>
                </div>
                <div class="flex gap-4">
                    <div class="flex gap-4 items-center">
                        <i class="ri-check-line text-ld text-blue-600"></i>
                        <p class="text-gray-400 text-lg">Analyse prédictive</p>
                    </div>
                    <div class="flex gap-4 items-center">
                        <i class="ri-check-line text-ld text-blue-600"></i>
                        <p class="text-gray-400 text-lg">Profils détaillés</p>
                    </div>
                    <div class="flex gap-4 items-center">
                        <i class="ri-check-line text-ld text-blue-600"></i>
                        <p class="text-gray-400 text-lg">Sécurisé</p>
                    </div>
                </div>
            </div>    
            <div class="w-1/2">
                <div class="mt-20 p-4 shadow-xl rounded-xl">
                    <img src="{{asset('images/back02.jpg')}}" class="rounded-xl" width="600" alt="">
                </div>
            </div>
        </section> 
        {{-- les fonctionnalités --}}
        <section class="flex flex-col gap-8 px-32 py-20 bg-blue-200/10" id="fonctionnalites">
            <div class="flex flex-col gap-4">
                <h1 class="flex justify-center text-4xl font-bold">Une analyse complète à 360°</h1>
                <P class="flex justify-center text-center text-gray-400 font-semibold text-xl">Nous combinons données quantitatives et qualitatives pour comprendre l'élève dans sa globalité.</P>
            </div>
            <div class="grid grid-cols-3 gap-8">
                <div class="flex flex-col gap-4 p-6 rounded-xl shadow-xl">
                    <div class="w-fit p-2 bg-blue-400/10 rounded-xl">
                        <i class="ri-line-chart-line text-2xl text-blue-600 font-bold"></i>
                    </div>
                    <h2 class="text-2xl font-bold">Profil de Compétences</h2>
                    <p class="w-4/5 text-gray-400 text-xl">Visualisez instantanément les forces et les axes d'amélioration grâce à nos graphiques intuitifs basés sur les résultats scolaires.</p>
                </div>
                <div class="flex flex-col gap-4 p-6 rounded-xl shadow-xl">
                    <div class="w-fit p-2 bg-blue-400/10 rounded-xl">
                        <i class="ri-brain-line text-2xl text-blue-600 font-bold"></i>
                    </div>
                    <h2 class="text-2xl font-bold">Accompagnement IA</h2>
                    <p class="w-4/5 text-gray-400 text-xl">Notre algorithme suggère des ressources pédagogiques et des méthodes de travail adaptées au profil cognitif de l'élève.</p>
                </div>
                <div class="flex flex-col gap-4 p-6 rounded-xl shadow-xl">
                    <div class="w-fit p-2 bg-blue-400/10 rounded-xl">
                        <i class="ri-school-line text-2xl text-gray-600 font-bold"></i>
                    </div>
                    <h2 class="text-2xl font-bold">Pour les Écoles</h2>
                    <p class="w-4/5 text-gray-400 text-xl">Les établissements peuvent gérer leurs classes, suivre les tendances globales et importer facilement les données.</p>
                </div>
            </div>
        </section>
        {{-- section de payement --}}
        <section class="py-20"></section>
        {{-- section invitation --}}
        <section class="flex flex-col items-center gap-8 px-32 bg-blue-600 py-20">
            <h1 class="text-5xl text-white font-bold">Prêt à transformer l'éducation ?</h1>
            <div class="w-1/2">
                <p class="text-xl text-center text-gray-200">Rejoignez les milliers d'élèves et d'établissements qui utilisent StatAi pour mieux comprendre et améliorer les parcours scolaires.</p>
            </div>
            <a href="/" class="w-fit flex px-5 py-1.5 shadow bg-white text-blue-600 cursor-pointer rounded-xl text-xl font-semibold border border-gray-400">Connectez-vous gratuitement</a>
        </section>
        {{-- le footer --}}
        @include('components.layouts.app.footer')
    </main>
</x-layouts.app.navBar>