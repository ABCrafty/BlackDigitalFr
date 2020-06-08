@extends('layouts.app')

@section('content')
<section>
  <div class="home-title columns is-marginless">
    <div class="landing-presentation-container column is-paddingless" 
        style="background-image: url('images/landing-background.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;">
      
      <div class="landing-presentation-background">
        <div class="landing-titles">
            <h1>
                Avec Black Digital.fr, pensez Agile pour vos projets !
            </h1>
            <h2>
                Je vous accompagne dans la mise en oeuvre de vos projets <br>agiles, éco-responsables
                et éthiques. 
            </h2>
        </div>
        <div class="next-buttons">
            <button class="button is-primary">Dis-m'en plus</button>
            <a href="#"><i class="fa fa-angle-double-down" aria-hidden="true"></i>
            </a>
        </div>
      </div> <!-- background -->
    </div> <!-- presentation-container --> 
  </div>
</section>

<section class="valeurs-section">
  <div class="valeurs-container columns is-marginless">
    <div class="column valeur">
      <h3>La philosophie Agile</h3>
      <p>Par sa nature, la philosophie <strong>Agile</strong> privilégie l'humain et ses interactions, 
        la collaboration, l'adaptabilité et vise à livrer des produits qui fonctionnent. Pourquoi 
        l'agilité ? Pour livrer un produit de qualité qui répond réellement aux besoins de vos 
        utilisateurs.</p>
        <p><a href="">Certifié <strong>Product Owner</strong> par scrum.org </a>, je suis convaincu 
          de l'utilité et de l'efficacité de l'Agile dans vos projets de digitalisation.
        </p>
        <a class="button is-primary">En savoir plus sur l'agile</a>
    </div>
    <div class="column valeur">
      <h3>Le <strong>développement durable</strong></h3>
        <p>Internet pollue (beaucoup), c'est un fait que nous ne pouvons plus ignorer si nous voulons 
        espérer un avenir pour nos enfants. Depuis plusieurs années, l'<strong>environnement</strong> 
        a été une préoccupation majeure pour moi et est devenu un problème auquel il faut apporter 
        une réponse urgente et massive.</p>
        <p>Heureusement, des solutions existent déjà pour rendre Internet plus propre et je m'engage 
        à vous les fournir pour que vos projets digitaux soient durables dans le temps.</p>
        <a class="button is-primary">En savoir plus sur l'agile</a>
    </div>
    <div class="column valeur">
      <h3>L'éthique</h3>
      <p>A une époque où des quantités phénoménales de données transitent, sont vendues aux
        plus offrants et que la notion de vie privée évolue, <strong>l'éthique</strong> est plus 
        que jamais de mise et devient une exigence primordiale pour vos utilisateurs.</p>
      <p>L'éthique fait donc partie intégrante de mes services : applications RGPD-compatibles et 
        sécurisés, solutions <strong>open-source</strong> privilégiées, je m'engage à protéger 
        la vie privée de vos utilisateurs - et la vôtre.</p>
      <a class="button is-primary">En savoir plus sur l'agile</a>
    </div>
  </div>

  <div class="next-buttons">
    <button class="button">Découvrez mes services</button>
    <a href="#">Icône flèche</a>
  </div>
</section>

<section>
  <div class="main-prestations columns is-multiline is-marginless">
    <div class="main-prestation prestation-PO column is-half">
      <div class="prestation-container">
        <h3>Product Owner</h3>
        <p>Votre équipe Scrum a besoin d'un Product Owner ? Certifié Scrum.org, je peux vous aider
        à concrétiser la vision de votre produit en concordance avec Scrum et la méthode Agile.
        </p>
        <button class="button btn-custom">En savoir plus</button>
      </div>
    </div>

    <div class="main-prestation prestation-web column is-half">
      <div class="prestation-container">
        <h3>Webmaster</h2>
        <p>Site vitrine, site de communication, e-commerce, SEO... Grâce à mes prestations web
            rendez-vous visible sur Internet et développez votre activité.</p>
        <button class="button btn-custom">Découvrir mes prestations</button>
      </div>
    </div>

    <div class="main-prestation prestation-com column is-half">
      <div class="prestation-container">
        <h3>Communication & Marketing</h2>
          <p>Etre présent sur les réseaux sociaux présente ses avantages et permet de développer
            votre activité et votre image de marque. Découvrez comment je peux vous aider à vous développer
            sur les différents réseaux sociaux.
          </p>
          <button class="button btn-custom">Découvrir mes prestations</button>
      </div>
    </div>

    <div class="main-prestation prestation-conseil column is-half">
      <div class="prestation-container">
        <h3>Conseil</h2>
        <p>Expression de besoin, traduction des besoins en solution technique, mettre en place une
        stratégie de développement en accord avec votre vision et vos valeurs</p>
        <button class="button btn-custom">Découvrir mes prestations</button>
      </div>
    </div>

  </div>
</section>
  

<section>
  <h3>Contact</h3>
  <p>Vous avez des questions ? Contactez-moi et je vous répondrai dans les plus brefs délais !
    <div class="form-container">
      <!-- formulaire -->
    </div>
  </p>
</section>

@endsection