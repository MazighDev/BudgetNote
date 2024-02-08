<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{asset('css/styleslide.css')}}" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}} "/>
  <link rel="stylesheet" href="{{asset('css/stylehome.css')}}" />
  <title>BudgetNote</title>
</head>

<body>
  <!-- NAVBAR -->



@include('includes.navbar')

   
  </div>
    <!-- SLIDER -->
    <div class="slider">
      <div class="slides">
        <input type="radio" name="radio-btn" id="radio1" />
        <input type="radio" name="radio-btn" id="radio2" />
        <input type="radio" name="radio-btn" id="radio3" />
        <input type="radio" name="radio-btn" id="radio4" />
        <input type="radio" name="radio-btn" id="radio5" />
        <input type="radio" name="radio-btn" id="radio6" />
        <input type="radio" name="radio-btn" id="radio7" />
        <input type="radio" name="radio-btn" id="radio8" />
        <input type="radio" name="radio-btn" id="radio9" />
        <div class="slide first">
          <img src="Images/slider/3.jpg" alt="" />
        </div>
        <div class="slide">
          <img src="Images/slider/13dark.png" alt="" />
        </div>
        <div class="slide">
          <img src="Images/slider/11.jpg" alt="" />
        </div>
        <div class="slide">
          <img src="Images/slider/9.jpg" alt="" />
        </div>
        <div class="slide">
          <img src="Images/slider/12.jpg" alt="" />
        </div>
        <div class="slide">
          <img src="Images/slider/1.jpg" alt="" />
        </div>
        <div class="slide">
          <img src="Images/slider/4.jpg" alt="" />
        </div>
        <div class="slide">
          <img src="Images/slider/6.jpg" alt="" />
        </div>
        <div class="slide">
          <img src="Images/slider/10.jpg" alt="" />
        </div>
      </div>
    </div>
    <!-- HEADER -->
    <div class="header">
      <div class="container">
        <div class="row" id="column">
          <div class="col-2">
            <h1 class="whiteh1">
              L'assistant financier
  
              <br />
              qu'il vous faut
            </h1>
            <p>
              L'assistant financier qu'il vous faut pour atteindre vos objectifs financiers
            </p>
            <a res" class="btn" id="btn-middle">S'inscrire maintenant &#8594;</a>
          </div>
        </div>
      </div>
    </div>
    <!-- -----------------FEATURED CATEGORIES------------------- -->
    <div class="categories">
      <div class="small-container">
        <div class="row">
          <div class="col-2"><img src="" alt="" /></div>
          <div class="col-2"><img src="" alt="" /></div>
  
        </div>
      </div>
    </div>
    <!-- -----------------website features------------------- -->
    <div class="small-container">
      <h1 class="title">Ce que BUDGETNOTE vous permet d'accomplir</h1>
      <div class="row">
        <div class="col-4">
          <img src="Images/slider/20.jpg" alt="" />
          <h4> 
            Suivez vos dépenses : enregistrer les dépenses effectués afin d'avoir un visuel sur le cout total de vos dépenses quotidiennes,
             mensuelles et annuelles.
          </h4>
  
        </div>
        <div class="col-4">
          <img src="Images/slider/25.jpg" alt="" />
          <h4>Enregistrez vos emprunts : la connaissance du cout total des emprunts et la determination d'une possibilité de remboursement.</h4>
  
        </div>
        <div class="col-4">
          <img src="Images/slider/22.jpg" alt="" />
          <h4>Suivre les revenus : enregistrer vos sources de revenus tel que le salaires, les primes et autre.</h4>
  
        </div>
  
  
        <div class="row">
          <div class="col-4">
            <img src="Images/slider/23.jpg" alt="" />
            <h4>Les chapitres : inscrivez vos dépenses dans différents chapitres (fixe, courant,occasionnel et autres).
            </h4>
  
          </div>
          <div class="col-4">
            <img src="Images/slider/24.jpg" alt="" />
            <h4> Créer des budgets : créer des budget en fonction de ses revenus pour une meilleure planification de vos dépenses.</h4>
          </div>
          <div class="col-4">
            <img src="Images/slider/21.jpg" alt="" />
            <h4>Alertes de dépenses : L'application envoie des alertes lors d'une atteinte d'une certaine limite de dépenses.</h4>
          </div>
  
        </div>
      </div>
    </div>
    <!-------------- more -------------->
    <div class="more">
      <div class="small-container">
        <div class="row">
          <div class="col-2">
            <img src="Images/slider/handshake.png" class="more-img" />
          </div>
          <div class="col-2">
  
            <h1 class="whiteh1" style="color: #844d36">Conseils pour gérer son budget</h1>
            <small>En suivant ces conseils simples, vous pouvez commencer à gérer votre budget de manière plus efficace et à économiser de l'argent !</small><br />
            <a href="" class="btn" id="btn-start">Lire la suite &#8594;</a>
          </div>
        </div>
      </div>
    </div>
    <!-- ---------------Testimonial --------------- -->
    <div class="testimonial">
      <div class="small-container">
        <div class="row">
          <div class="col-3">
            <i class="fa fa-quote-left"></i>
            <p>
              site assez utile mais manque quelque fonctionnalités à améliorer.
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
            </div>
            <img src="images/user-1.png" alt="" />
            <h3>Laidi Melissa</h3>
          </div>
          <div class="col-3">
            <i class="fa fa-quote-left"></i>
            <p>
              Très utile!
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
            </div>
            <img src="images/user-2.png" alt="" />
            <h3>Khettari Yacine</h3>
          </div>
          <div class="col-3">
            <i class="fa fa-quote-left"></i>
            <p>
              Je vous conseille ce site il est génial!
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
            </div>
            <img src="images/user-3.png" alt="" />
            <h3>Gandour Amina</h3>
          </div>
        </div>
      </div>
    </div>
    <!-- ----------- brands -------------   -->
    <div class="brands">
      <div class="small-container">
        <div class="row">
          <div class="col-5">
            <img src="images/logo_post.png" alt="" />
          </div>
          <div class="col-5">
            <img src="images/Logo_CNEP2.png" alt="" />
          </div>
          <div class="col-5">
            <img src="images/Paysera_logo.png" alt="" />
          </div>
          <div class="col-5">
            <img src="images/logo-paypal.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  <!-- -------------- footer --------------  -->
@include('includes.footer')
  <!-- -------Java Script------- -->
  <script src="{{asset('js/functionhome.js')}}"></script>
</body>

</html>