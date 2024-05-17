<!DOCTYPE html>
<html lang="en">
  
  <!-- HEAD SECTION -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Preconnect to Google Fonts for improved performance -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Importing Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&family=Great+Vibes&family=Lustria&family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

  <!-- jQuery Library -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <!-- Link to External Stylesheet -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="dining.css">

  <!-- Deferred JavaScript Execution -->
  <script src="dining.js" defer></script>

  <!-- Font Awesome Icons with Integrity Check -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Title of the Page -->
  <title>Tanza Oasis Hotel & Resort</title>

  <!-- Favicon for the Browser Tab -->
  <link rel="icon" href="images/logo.png">

</head>

<body>

    <!-- Header Section -->
    <header>
    <?php include_once 'nav.php'; ?>

    </header>
    <section id="mission">
        <h1 class="custom-heading"><span>Dining</span> </h1>
        <article>
            <p>Experience exquisite Asian-inspired cuisine at the elegant Shang Garden Restaurant. With its natural theme and ambient lighting, Shang Garden creates a warm, inviting atmosphere perfect for savoring delicious meals. The menu features artful renditions of classic Filipino dishes accented with diverse Asian flavors to delight the palate. Using only the freshest, highest quality ingredients, Shang Garden's talented chefs prepare each dish to perfection.

                </p>
            <p>After dinner, continue the evening in comfort at Sagobe Bar. Unwind in the laidback setting while sipping creative cocktails or enjoying a nightcap. Sagobe Bar's drink menu offers handcrafted options made with care to perfectly complement your meal. With its stylish yet relaxed vibe, Sagobe is the ideal place to debrief after an evening in Shang Garden's serene dining room.
                
                </p>
            <p>Shang Garden Restaurant and Sagobe Bar offer the perfect pairings: elegant Asian-inspired fare in Shang Garden followed by artisanal drinks and conversation in Sagobe. Together, they create a dining experience to remember at Tanza Oasis Hotel & Resort Cavite.</p>
        </article>

    </section>



    <div class="slider__warpper">
        <div class="flex__container flex--piplup flex--active" data-slide="2">
          <div class="flex__item flex__item--left">
            <div class="flex__content">
              <p class="text--sub">A Feast for the Senses</p>
              <h1 class="text--big">Shang Garden Restaurant</h1>
              <p class="text--normal">Immerse yourself in a world of culinary enchantment at Shang Garden Restaurant. Our thoughtfully designed ambiance embraces the beauty of nature, with elegant decor and warm lighting that create an inviting and soothing atmosphere.
<br></br>
                Indulge in a menu that pays homage to the rich flavors of Filipino cuisine while incorporating touches of Asian influences. Our talented chefs meticulously craft each dish, using only the finest and freshest ingredients to ensure an unforgettable dining experience.
                <br></br>
                From classic Filipino favorites to innovative fusion creations, Shang Garden Restaurant offers a harmonious blend of flavors that will tantalize your taste buds. Enjoy a culinary journey that celebrates the vibrant culinary heritage of the Philippines while introducing you to exciting new flavors from across Asia.</p>
            </div>
            <p class="text__background">Shang Garden</p>
          </div>
          <div class="flex__item flex__item--right"></div>
          <img class="img" id="shangimg" src="images\shang.jpg" />
        </div>
        <div class="flex__container flex--blaziken animate--start" data-slide="3">
          <div class="flex__item flex__item--left">
            <div class="flex__content">
              <p class="text--sub">Crafted Cocktails, Urban Style</p>
              <h1 class="text--big">Sagobe Bar</h1>
              <p class="text--normal">

                Step into Sagobe Bar, where craft cocktails and urban sophistication collide. Our skilled mixologists artfully blend premium spirits and fresh ingredients, creating daring libations that awaken the senses. From classic favorites to innovative concoctions, every sip is a journey of flavors.
                
                <br></br>
                The alluring ambiance exudes a contemporary vibe with industrial-chic touches. Sleek lines, exposed brickwork, and warm lighting set the stage for a stylish night out. Complement your cocktail with our curated small plates, showcasing locally sourced ingredients.
                <br></br>

                Discover the art of the craft cocktail at Sagobe Bar, where each drink is a celebration of flavor and every moment is a toast to urban sophistication.</p>
            </div>
            <p class="text__background">Sagobe Bar</p>
          </div>
          <div class="flex__item flex__item--right"></div>
          <img class="img" id="barimg" src="images\dining\bar2.jpg" />
        </div>
        
    </div>
      
      <div class="slider__navi">
        <a href="#" class="slide-nav active" data-slide="2">piplup</a>
        <a href="#" class="slide-nav" data-slide="3">blaziken</a>

      </div>


    <!-- FOOTER SECTION -->
    <footer>
        <!-- Quick Links -->
        <div class="quick-links">
    
                <a href="accommodations.html">Accommodation</a>
                <a href="dining.html">Dining</a>
                <a href="events.html">Events</a>
                <a href="activities.html">Activities</a>
                <a href="attractions.html">Attraction</a>

        </div>

        <!-- Social Links -->
        <div class="social-links">
            <!-- Facebook Icon and Link -->
            <a href="https://www.facebook.com/tanzaoasishotel" class="icon" id="facebook" target="_blank">
                <i class="fab fa-facebook fa-bounce" style="color: #750023;"></i>
            </a>
            <!-- Instagram Icon and Link -->
            <a href="https://www.instagram.com/tanzaoasishotel/" class="icon" id="instagram" target="_blank">
                <i class="fab fa-instagram fa-bounce" style="color: #85002e;"></i>
            </a>
            <!-- Email Icon and Link -->
            <a href="mailto:sales@tanzaoasis.com" class="icon" id="email">
                <i class="fad fa-envelope fa-bounce" style="--fa-primary-color: #7a0035; --fa-secondary-color: #f03888;"></i>
            </a>
        </div>

        <!-- Copyright Notice -->
        <p>Built by Jhonna Lie Villaruel © 2024</p>

    </footer>
</body>
</html>