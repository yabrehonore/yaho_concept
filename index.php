<?php include 'includes/header.php'; ?>

<main>
    <!-- Section Accueil -->
    <section id="accueil" class="hero">
        <h1>Bienvenue chez YaHo-Concept</h1>
        <p>Développeurs Web et Mobile passionnés, nous créons des solutions<br>numériques sur mesure.</p>
        <a href="#services" class="btn">Nos services</a>
        <!--<a href="#a-propos" class="btn">A propos de nous</a>-->
    </section>

    <!-- Section À Propos -->
    <section id="a-propos" class="about">
        <div class="en-tete">
            <h2>À PROPOS DE NOUS</h2>
            <p>
                Depuis 2021, YaHo-Concept s’est imposée comme un acteur clé dans le domaine des
                technologies de l’information et de la communication.Notre mission est Vous accompagner dans votre
                transformationnumérique en vous offrant des solutions innovantes, sur mesure et adaptées à vos besoins.
                Que vous soyez une start-up, une PME, une grande entreprise ou un particulier, nous mettons notre
                expertise à votre service pour vous aider à atteindre vos objectifs et à rester compétitif dans un monde en
                constante évolution.
            </p>
        </div>
        <img src="images/about.jpg" alt="">
    </section>

    <!-- Section Services -->
    <section id="services" class="services">
    <h2>NOS SERVICES</h2>
    <div class="service-list">
        <div class="service">
            <img src="images/web-dev.jpg" alt="Développement Web">
            <div class="service-text">
                <h3>DEVELLOPEMENT WEB</h3>
                <p>Création de sites web modernes et responsives.<br>
                Dans un monde de plus en plus connecté, avoir un site web performant<br>
                et attrayant est essentiel pour se démarquer. Notre service de conception<br>
                de sites web vous aide à créer une présence en ligne qui reflète votre identité,<br>
                vos valeurs et vos objectifs commerciaux.
                </p>
            </div>
        </div>
        <div class="service">
            <div class="service-text">
                <h3>DEVELLOPEMENT MOBILE</h3>
                <p>Applications mobiles pour iOS et Android.<br>
                    Dans un monde numérique en constante évolution, le développement logiciel sur mesure<br>
                    est devenu un atout stratégique pour les entreprises. Que vous ayez besoin d’une<br>
                    application mobile, d’un logiciel personnalisé pour votre activité, ou d’une solution<br>
                    complexe pour gérer vos processus métier, nous sommes là pour transformer vos idées<br>
                    en réalité.
                </p>
            </div>
            <img src="images/mobile-dev.jpg" alt="Développement Mobile">
        </div>
        <div class="service">
            <img src="images/conseil.jpg" alt="Conseil en Technologie">
            <div class="service-text">
                <h3>CONSEIL EN TECHNOLOGIES</h3>
                <p>Accompagnement pour vos projets numériques.<br>
                    Dans un monde où les technologies évoluent rapidement, il devient essentiel pour les<br>
                    entreprises de s’adapter et d’intégrer des solutions innovantes pour rester compétitives.<br>
                    Nous offrons des services de conseil en technologie pour vous accompagner à chaque<br>
                    étape de votre transformation numérique et vous aider à tirer parti des dernières<br>
                    avancées technologiques.
                </p>
            </div>
        </div>
    </div>
</section>

    <!-- Section Portfolio -->
    <section id="portfolio" class="portfolio">
        <h2>NOS REALISATIONS</h2>
        <div class="projects-grid">
            <div class="project">
                <img src="images/project1.jpg" alt="Projet 1">
                <h3>Projet 1</h3>
                <p>Description courte du projet.</p>
            </div>
            <div class="project">
                <img src="images/project1.jpg" alt="Projet 2">
                <h3>Projet 2</h3>
                <p>Description courte du projet.</p>
            </div>
            <!-- Ajoutez plus de projets ici -->
        </div>
        <div class="projects-grid">
            <div class="project">
                <img src="images/project1.jpg" alt="Projet 3">
                <h3>Projet 3</h3>
                <p>Description courte du projet.</p>
            </div>
            <div class="project">
                <img src="images/project1.jpg" alt="Projet 4">
                <h3>Projet 4</h3>
                <p>Description courte du projet.</p>
            </div>
            <!-- Ajoutez plus de projets ici -->
        </div>
    </section>

    <!-- Section Offres Secondaires -->
    <section id="offres" class="secondary-offers">
    <h2>NOS OFFRES SECONDAIRES</h2>
    <div class="offer-list">
        <div class="offer">
            <div class="offer-text">
                <h3>FORMATIONS</h3>
                <p>Formations en développement web et mobile.<br>
                Que vous soyez débutant ou professionnel en reconversion, nos formations en informatique sont conçues<br>
                pour vous accompagner à chaque étape de votre apprentissage. Avec des programmes à la pointe de la<br>
                technologie, des formateurs expérimentés et des méthodes pédagogiques innovantes, nous vous donnons<br>
                les clés pour réussir dans un secteur en constante évolution.
            </p>
            </div>
            <img src="images/formations.jpg" alt="Formations">
        </div>
        <div class="offer">
        <img src="images/design.jpg" alt="Design Graphique">
            <div class="offer-text">
                <h3>DESIGN GRAPHQUE</h3>
                <p>Création de logos, maquettes, et designs.<br>
                Que vous soyez une start-up, une PME ou un professionnel indépendant, notre équipe de designers<br>
                graphiques talentueux est là pour transformer vos idées en visuels percutants. Du logo à la charte<br>
                graphique, en passant par les supports print et digitaux, nous vous accompagnons pour renforcer votre<br>
                image de marque et captiver votre audience.
            </p>
            </div>
        </div>
        <div class="offer">
            <div class="offer-text">
                <h3>MAINTENANCE INFORMATIQUE</h3>
                <p>Support et maintenance pour vos systèmes informatiques.<br>
                Que vous soyez une entreprise, une association ou un particulier, notre service de maintenance<br>
                informatique vous offre des solutions sur mesure pour garantir le bon fonctionnement de vos<br>
                équipements. Prévention, dépannage, optimisation : nous intervenons pour que vous puissiez travailler<br>
                en toute sérénité.</p>
            </div>
            <img src="images/maintenance.jpg" alt="Maintenance Informatique">
        </div>
    </div>
</section>

<!-- Section Contact -->
<section id="contact" class="contact">
    <h2>CONTACTEZ-NOUS</h2>
    <form id="contactForm" method="post">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>

        <label for="tel">Tel (WhatsApp) :</label>
        <input type="tel" id="tel" name="tel" required>

        <label for="message">Message :</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Envoyer</button>
    </form>
</section>

<!-- Script pour gérer la soumission du formulaire avec SweetAlert2 -->
<script>
document.getElementById('contactForm').addEventListener('submit', function (e) {
    e.preventDefault(); // Empêcher la soumission normale du formulaire

    // Récupérer les données du formulaire
    const formData = new FormData(this);

    // Envoyer les données via AJAX
    fetch('send_email.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            Swal.fire({
                icon: 'success',
                title: 'Succès !',
                text: data.message,
            });
            // Réinitialiser le formulaire après la soumission réussie
            document.getElementById('contactForm').reset();
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Erreur...',
                text: data.message,
            });
        }
    })
    .catch(error => {
        Swal.fire({
            icon: 'error',
            title: 'Erreur...',
            text: 'Une erreur s\'est produite. Veuillez réessayer.',
        });
    });
});
</script>
</main>

<?php include 'includes/footer.php'; ?>