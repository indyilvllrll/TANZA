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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <!-- Link to External Stylesheet -->
  <link rel="stylesheet" href="style.css">


  <!-- Deferred JavaScript Execution -->
  <script src="animations.js" defer></script>

  <!-- Font Awesome Icons with Integrity Check -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Title of the Page -->
  <title>Tanza Oasis Hotel & Resort</title>



  <script>
        function logout() {
            // Your logout logic here
            // For example, you can make an AJAX call to logout.php
            // Or redirect the user to logout.php
            window.location.href = 'logout.php';
        }
    </script>

  <!-- Favicon for the Browser Tab -->
  <link rel="icon" href="images/logo.png">

</head>

<body>

    <!-- Header Section -->
    <header>
        <?php include_once 'nav.php'; ?>
    </header>
    <!-- Home Section -->
    <section id="home" class="container">
        <!-- Main Content Wrapper -->
        <main class="main_wrapper">
            <!-- Greeting and Introduction -->
            <h1 class="custom-heading">
                Welcome to,<br>
                <span>T</span><span>a</span><span>n</span><span>z</span><span>a</span>&nbsp;&nbsp;<span>O</span><span>a</span>
                <span>s</span><span>i</span><span>s</span>
            </h1>
            <!-- Subtitle -->
            <h2 class="custom-heading2">
                where you can
                <span>unwind completely.</span>
            </h2>

        </main>
    </section>

    <!-- About Section -->
    <section id="about" class="container">


        <!-- Main Content -->
        <main>
            <figure class="sideimage">
                <img src="images\rum.jpg" alt="profile-photo-2">
            </figure>
            <!-- About Me Text -->
        <article class="left" id="about-article">
                <!-- Section Heading -->
                <h1 class="custom-heading">
                    <span>Accommodation</span>
                </h1>

                <p>
                    <span>The Tanza Oasis Hotel & Resort Cavite has a variety of room options for guests to choose from. </span>  With 5 different room types, there is something for every traveler's needs and budget.
                    <br> <br>
                    <a href="accommodations.php" class="button-48" role="button">
                        <span class="text">LEARN MORE</span>
                    </a>

                </p>
                
        </article>
        </main>
    </section>

<!--------------------- Dining ------------------------>
    <!-- Dining Section -->
    <section id="community" class="container">
        <!-- Main Content -->

        <main class="community-main">

            <article class="comm" id="community-article">
                <!-- Section Heading -->
                <h1 class="custom-heading" >
                    <span>Dining</span>
                </h1>

                <p>
                    <span>Shang Garden Restaurant serves exquisite Asian-inspired cuisine in an elegant, warmly-lit setting.</span>  Guests can also enjoy creative cocktails and conversation in the laidback atmosphere of Sagobe Bar.
                    <br> <br>
                    <a href="dining.php" class="button-48" role="button">
                        <span class="text">LEARN MORE</span>
                    </a>

                </p>
                
            </article>
            <figure class="sideimage">
                <img src="images\shang.jpg" alt="profile-photo-2">
            </figure>
        </main>

    </section>

    <!-- MEDIA Section -->
    <section id="media" class="container">


        <!-- Main Content -->
        <main>
            <!-- Profile Image -->
            <figure class="sideimage">
                <img src="images\eve.jpg" alt="profile-photo-2">
            </figure>
            <!-- About Me Text -->
            <article class="left" id="media-article">
                <!-- Section Heading -->
                <h1 class="custom-heading" >
                    <span>Events</span>
                </h1>

                <p>
                    <span>Tanza Oasis Hotel & Resort Cavite offers customized venues</span>  like grand ballrooms, garden spaces, and beachfronts to host memorable celebrations for birthdays, graduations, despedida parties, and more.
                    <br> <br>

                    <a href="events.php" class="button-48" role="button">
                        <span class="text">LEARN MORE</span>
                    </a>

                </p>
                
            </article>
        </main>
    </section>

    <!--------------------- Attractions ------------------------>

    <section id="products" class="container">
        <!-- Section Heading -->
        <h1 class="custom-heading">
            <span>Attractions</span>
        </h1>
        <article class="products">
        <p>
            <span>Lounge by the expansive freeform pool surrounded by tropical greenery or let kids enjoy the shallow children's pool. </span>  Relax on the soft golden sand beach with sweeping ocean views and partake in watersports like jet skiing and banana boating in the clear blue waters. The swimming pool and private beach offer aquatic adventures and relaxation during your stay.
            <br> <br>

        </p>
        </article>
        <!-- Main Content Container for products -->
        <main class="box-container">


            <figure class="box">
                <img src="images/att1.jpg" >
                
            </figure>

            <figure class="box">
                <img src="images/att.jpg">
                
            </figure>

            <figure class="box">
                <img src="images/att4.JPG">
            </figure>

            <figure class="box">
                <img src="images/att2.jpg">
            </figure>

            <figure class="box">
                <img src="images/att3.JPG">
            </figure>

            <figure class="box">
                <img src="images/att5.JPG">
            </figure>




        </main>

        <a href="attractions.php" class="button-48" role="button">
            <span class="text">LEARN MORE</span>
        </a>

    </section>

    <section id="products" class="container">
        <!-- Section Heading -->
        <h1 class="custom-heading">
            <span>Activities</span>
        </h1>

        <article class="products">
            <p>
                <span>Tanza Oasis Hotel & Resort Cavite offers basketball, beach volleyball, billiards, and a playground for active recreation and entertainment options the whole family will enjoy.</span>  With activities ranging from team sports to leisure games and kids' entertainment, there is something to keep everyone engaged during your energizing Cavite getaway.
                <br> <br>
    
            </p>
            </article>
        <!-- Main Content Container -->
        <main class="box-container">


            <figure class="box">
                <img src="images/act1.jpg" >
                
            </figure>

            <figure class="box">
                <img src="images/act3.jpg">
                
            </figure>

            <figure class="box">
                <img src="images/act2.jpg">
            </figure>

            <figure class="box">
                <img src="images/act4.jpg">
            </figure>

            <figure class="box">
                <img src="images/act5.JPG">
            </figure>

            <figure class="box">
                <img src="images/act6.JPG">
            </figure>

        </main>
        <a href="activities.php" class="button-48" role="button">
            <span class="text">LEARN MORE</span>
        </a>



    <!-- FOOTER SECTION -->
    <footer>
        <!-- Quick Links -->
        <div class="quick-links">
    
                <a href="accommodations.php">Accommodation</a>
                <a href="dining.php">Dining</a>
                <a href="events.php">Events</a>
                <a href="activities.php">Activities</a>
                <a href="attractions.php">Attraction</a>

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
