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

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- jQuery Library -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <!-- Link to External Stylesheet -->
  <link rel="stylesheet" href="style.css">

  <!-- Deferred JavaScript Execution -->
  <script src="accommodations.js" defer></script>

  <!-- Font Awesome Icons with Integrity Check -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



  <!-- Title of the Page -->
  <title>Tanza Oasis Hotel & Resort</title>

  <!-- Favicon for the Browser Tab -->
  <link rel="icon" href="images/logo.png">
    <!-- Header Section -->
    <header>
        <?php include_once 'nav.php'; ?>

    </header>


        <section id="mission">
            <h1 class="custom-heading"><span>Rooms</span> </h1>
            <article>
                <p>The Tanza Oasis Hotel & Resort Cavite has a variety of room options for guests to choose from. With 5 different room types, there is something for every traveler's needs and budget.

                    </p>
                <p>Guests can select from standard, deluxe, or premium rooms depending on the size and amenities desired. For larger groups or families, suite accommodations provide extra space and living areas. Those looking for a truly indulgent stay can book the resort's luxury villas which offer private pools and exclusive services.
                    
                    </p>
                <p>No matter which of the 5 room types you select, you'll enjoy comfortable furnishings, modern amenities, and the signature hospitality of Tanza Oasis Hotel & Resort Cavite. With choices to fit both wallet and travel style, we're confident you'll find the perfect accommodation for your next Cavite getaway.</p>
              
            </article>
            <h1 class="custom-heading"> </h1>
        </section>

    <!-- carousel -->

    <!-- <div class="container-fluid px-lg-4 mt-4"> </div> -->

    <!-- check availability form -->



    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-In</label>
                            <input id="check-in" name="check_in" type="date" class="form-control shadow-none" onchange="updateCheckOutMinDate()">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-Out</label>
                            <input id="check-out" name="check_out" type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Adult</label>
                            <select name="adult" class="form-select" shadow-none>
                                <option selected="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Children</label>
                            <select name="children" class="form-select" shadow-none>
                                <option selected="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>

                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button id="clear-btn" type="button" class="btn text-white shadow-none custom-bg"  onclick="showRooms(); clearForm(); ">Clear</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script>
    function updateCheckOutMinDate() {
        // Get the value of the Check-In date input
        var checkInDate = new Date(document.getElementById('check-in').value);

        // Set the minimum allowed date for the Check-Out input to the day after the selected Check-In date
        checkInDate.setDate(checkInDate.getDate() + 1);
        var minDate = checkInDate.toISOString().split('T')[0];
        document.getElementById('check-out').min = minDate;
    }

        // Get today's date
        var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); // January is 0!
    var yyyy = today.getFullYear();

    today = yyyy + '-' + mm + '-' + dd;

    // Set the min attribute of the check-in input to today
    document.getElementById("check-in").setAttribute("min", today);

</script>

    <!-- PRESIDENTIAL -->
    <section id="rooms" class="container-fluid" data-section-type="1">


        <!-- Main Content -->
        <main>
            
            <div class="container container_rooms">
	
                <div class="feature">
                    <figure class="featured-item image-holder r-3-2 transition"></figure>
                </div>
                
                <div class="gallery-wrapper">
                    <div class="gallery">
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 active transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                    </div>
                </div>
                
                <div class="controls">
                    <button class="move-btn left">&larr;</button>
                    <button class="move-btn right">&rarr;</button>
                </div>
                
            </div>

            <article class="r" >
                <!-- Section Heading -->
                <h1 class="custom-heading">
                    <span>Presidential Suite</span>
                </h1>

                <p>
                    <span>Enjoy ultimate luxury and comfort in the Presidential Suite.</span>  
                    <br> <br>
                    Absolutely everything is provided in this luxurious hotel suite. You’ll enjoy panoramic views of the oasis beach and the swimming pool as well. You have spacious sleeping quarters with an En-suite bathroom. This suite consists of a master bedroom, with 3 guest bedrooms. It has a spacious living room, theatre room, dining room and kitchen which are arranged to offer elegance and luxurious comfort with a touch of a home-like essence. Plus it has a separate guest comfort room and maid’s room. So what are you waiting for, bring the whole family in!
                    <br> <br>
                    


                    <form id="bookForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" style="text-align: left;  padding-left: 28px;">
                        <button type="submit" class="button-48" role="button" name="bookNow" value="1">
                            <span class="text">Book Now</span>
                        </button>
                    </form>

                </p>
            </article>

        </main>



        <section class="card-container">


                <article class="card">
                  <h2>Services and Facilities</h2>
                  <div class="cutoff-text">
                    <p>
                        Discover an unparalleled experience where luxury meets convenience with our exceptional array of services and facilities. Designed to cater to your every need, our offerings are tailored to provide you with the ultimate in comfort and sophistication. Explore the epitome of modern living with:
                    </p>
                    <ul role="list" class="card__bullets flow">
                        <li>Telephone</li>
                        <li>Refrigerator</li>
                        <li>Kitchenette with electric stove</li>
                        <li>Safety Deposit Box</li>
                        <li>Home Theater</li>
                        <li>Solar powered hot water system</li>
                        <li>Servant’s quarter</li>
                        <li>Separate guest toilet</li>
                        <li>Use of our business center and meeting room</li>
                        <li>Luxurious toiletries</li>
                        <li>24 hour room service</li>
                        <li>Dry cleaning and laundry service</li>
                        <li>Wi-Fi broad band internet connection</li>
                        <li>1 Master bedroom</li>
                        <li>3 Regular room</li>
                      </ul>

                  </div>
                  <input type="checkbox" class="expand-button">
                  <label class="expand-label" aria-label="Expand"></label>

                </article>
              
                <article class="card">
                  <h2>Amenities</h2>
                  <div class="cutoff-text">
                    <p>
                        Elevate your senses and indulge in the ultimate luxury experience with our thoughtfully curated amenities. Designed to pamper and delight, these exquisite offerings are the epitome of refined living. Prepare to be enchanted by:
                    </p>

                    <ul role="list" class="card__bullets flow">
                        <li>Shampoo and conditioner</li> <li>Body soap</li> <li>Hand bar soap</li> <li>Toothbrush and toothpaste</li> <li>Shaving kit</li> <li>Bath towel, face towel, hand towel, bathrobe</li> <li>Bath mat</li> <li>Slippers</li> <li>Hair comb</li> <li>Hair dryer</li> <li>Cotton swabs</li> <li>Shower cap</li> <li>220 sq.m. including 3 bedrooms & 1 master bedroom</li> 
                      </ul>
                  </div>
                  <input type="checkbox" class="expand-button">
                  <label class="expand-label" aria-label="⌄"></label>
                </article>

        </section>
        
    </section>




<!-- Executive Suite -->

    <section id="rooms" class="container-fluid" data-section-type="2">

        <h1 class="custom-heading"> </h1>
        <!-- Main Content -->
        <main>
            
            <div class="container container_rooms">
	
                <div class="feature">
                    <figure class="featured-item image-holder r-3-2 transition"></figure>
                </div>
                
                <div class="gallery-wrapper">
                    <div class="gallery">
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 active transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                    </div>
                </div>
                
                <div class="controls">
                    <button class="move-btn left">&larr;</button>
                    <button class="move-btn right">&rarr;</button>
                </div>
                
            </div>

            <article class="r" >
                <!-- Section Heading -->
                <h1 class="custom-heading">
                    <span>Executive Suite</span>
                </h1>

                <p>
                    <span>Ideal for those seeking privacy and indulgence, our elegant executive suite offers a serene retreat.</span>  
                    <br> <br>
                     The separate living room and guest toilet provide a comfortable space to entertain, while the spacious one-bedroom layout features a plush living area and breathtaking beach views. Unwind in the luxurious bathroom, complete with an indulgent steam bath option, allowing you to pamper yourself in ultimate relaxation. Designed with meticulous attention to detail, this suite promises a tranquil and rejuvenating experience.
                    <br> <br>
                    
                    <form id="bookForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" style="text-align: left;  padding-left: 28px;">
                        <button type="submit" class="button-48" role="button" name="bookNow" value="2">
                            <span class="text">Book Now</span>
                        </button>
                    </form>

                </p>
            </article>
            
        </main>



        <section class="card-container">


                <article class="card">
                  <h2>Services and Facilities</h2>
                  <div class="cutoff-text">
                    <p>
                        Discover an unparalleled experience where luxury meets convenience with our exceptional array of services and facilities. Designed to cater to your every need, our offerings are tailored to provide you with the ultimate in comfort and sophistication. Explore the epitome of modern living with:
                    </p>
                    <ul role="list" class="card__bullets flow">
                        <li>Bathtub</li>
                        <li>Solar powered hotwater system</li>
                        <li>Telephone</li>
                        <li>Mobile phone recharging plug</li>
                        <li>Safety deposit box</li>
                        <li>TV</li>
                        <li>Refrigerator</li>
                        <li>Bathtub with shower</li>
                        <li>Laundry and press service</li>
                      </ul>

                  </div>
                  <input type="checkbox" class="expand-button">
                  <label class="expand-label" aria-label="Expand"></label>

                </article>
              
                <article class="card">
                  <h2>Amenities</h2>
                  <div class="cutoff-text">
                    <p>
                        Elevate your senses and indulge in the ultimate luxury experience with our thoughtfully curated amenities. Designed to pamper and delight, these exquisite offerings are the epitome of refined living. Prepare to be enchanted by:
                    </p>

                    <ul role="list" class="card__bullets flow">
                        <li>Shampoo and conditioner</li>
                        <li>Body soap</li>
                        <li>Hand bar soap</li>
                        <li>Toothbrush and toothpaste</li>
                        <li>Shaving Kit</li>
                        <li>Bath towel, face towel, hand towel</li>
                        <li>Bath mat</li>
                        <li>Slippers</li>
                        <li>Hair comb</li>
                        <li>Hair dryer</li>
                        <li>Cotton swabs</li>
                        <li>Shower cap</li>
                        <li>63 sqm</li>
                      </ul>
                  </div>
                  <input type="checkbox" class="expand-button">
                  <label class="expand-label" aria-label="⌄"></label>
                </article>

        </section>

    </section>

<!-- Junior Suite -->

    <section id="rooms" class="container-fluid" data-section-type="3">

        <h1 class="custom-heading"> </h1>
        <!-- Main Content -->
        <main>
            
            <div class="container container_rooms">
	
                <div class="feature">
                    <figure class="featured-item image-holder r-3-2 transition"></figure>
                </div>
                
                <div class="gallery-wrapper">
                    <div class="gallery">
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 active transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                    </div>
                </div>
                
                <div class="controls">
                    <button class="move-btn left">&larr;</button>
                    <button class="move-btn right">&rarr;</button>
                </div>
                
            </div>

            <article class="r" >
                <!-- Section Heading -->
                <h1 class="custom-heading">
                    <span>Junior Suite</span>
                </h1>

                <p>
                    <span>Indulge in a matchless vacation experience with our Junior Suite</span>  
                    <br> <br>
                    This exquisite retreat features a spacious layout with a comfortable sofa, perfect for unwinding after a day of adventure. Sink into the sumptuous queen-sized bed, adorned with the finest linens, and surrender to a night of restorative slumber. Every element of the suite has been meticulously designed to cater to your desires, from the elegant decor to the top-of-the-line amenities. Elevate your getaway and embrace the epitome of refined living in this sophisticated oasis.
                    <br> <br>
                    
                    <form id="bookForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" style="text-align: left;  padding-left: 28px;">
                        <button type="submit" class="button-48" role="button" name="bookNow" value="3">
                            <span class="text">Book Now</span>
                        </button>
                    </form>

                </p>
            </article>
            
        </main>



        <section class="card-container">


                <article class="card">
                  <h2>Services and Facilities</h2>
                  <div class="cutoff-text">
                    <p>
                        Discover an unparalleled experience where luxury meets convenience with our exceptional array of services and facilities. Designed to cater to your every need, our offerings are tailored to provide you with the ultimate in comfort and sophistication. Explore the epitome of modern living with:
                    </p>
                    <ul role="list" class="card__bullets flow">
                        <li>Telephone</li>
                        <li>Refrigerator</li>
                        <li>Mobile phone recharging plug</li>
                        <li>Safety deposit box</li>
                        <li>TV</li>
                        <li>Solar powered hot water system</li>
                        <li>Special shower</li>
                        <li>Shower bathroom</li>
                        <li>Laundry and press service</li>
                      </ul>

                  </div>
                  <input type="checkbox" class="expand-button">
                  <label class="expand-label" aria-label="Expand"></label>

                </article>
              
                <article class="card">
                  <h2>Amenities</h2>
                  <div class="cutoff-text">
                    <p>
                        Elevate your senses and indulge in the ultimate luxury experience with our thoughtfully curated amenities. Designed to pamper and delight, these exquisite offerings are the epitome of refined living. Prepare to be enchanted by:
                    </p>

                    <ul role="list" class="card__bullets flow">
                        <li>Shampoo and conditioner</li>
                        <li>Body soap</li>
                        <li>Hand bar soap</li>
                        <li>Toothbrush and toothpaste</li>
                        <li>Shaving kit</li>
                        <li>Bath towel, hand towel, bathrobe</li>
                        <li>Bath mat</li>
                        <li>Slippers</li>
                        <li>Hair comb</li>
                        <li>Hair dryer</li>
                        <li>Cotton swabs</li>
                        <li>Shower cap</li>
                        <li>63 sqm.</li>
                      </ul>
                  </div>
                  <input type="checkbox" class="expand-button">
                  <label class="expand-label" aria-label="⌄"></label>
                </article>

        </section>

    </section>

    <!-- Deluxe Room -->
    <section id="rooms" class="container-fluid" data-section-type="4">

        <h1 class="custom-heading"> </h1>
        <!-- Main Content -->
        <main>
            
            <div class="container container_rooms">
	
                <div class="feature">
                    <figure class="featured-item image-holder r-3-2 transition"></figure>
                </div>
                
                <div class="gallery-wrapper">
                    <div class="gallery">
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 active transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                    </div>
                </div>
                
                <div class="controls">
                    <button class="move-btn left">&larr;</button>
                    <button class="move-btn right">&rarr;</button>
                </div>
                
            </div>

            <article class="r" >
                <!-- Section Heading -->
                <h1 class="custom-heading">
                    <span>Deluxe Room</span>
                </h1>

                <p>
                    <span>Escape to a peaceful modern retreat where tranquility meets luxury in our deluxe room. </span>  
                    <br> <br>
                    Gaze out at the breathtaking views that unfold before you, with the pristine beach and stunning sunsets painting a picture-perfect backdrop for your stay. Choose between the plush comfort of a luxurious queen bed or the convenience of two twin beds, tailored to your preference. For those traveling with family or friends, our deluxe rooms offer the option of connecting doors, allowing you to seamlessly merge accommodations while maintaining privacy.
                    <br> <br>
                    
                    <form id="bookForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" style="text-align: left;  padding-left: 28px;">
                        <button type="submit" class="button-48" role="button" name="bookNow" value="4">
                            <span class="text">Book Now</span>
                        </button>
                    </form>

                </p>
            </article>
            
        </main>



        <section class="card-container">


                <article class="card">
                  <h2>Services and Facilities</h2>
                  <div class="cutoff-text">
                    <p>
                        Discover an unparalleled experience where luxury meets convenience with our exceptional array of services and facilities. Designed to cater to your every need, our offerings are tailored to provide you with the ultimate in comfort and sophistication. Explore the epitome of modern living with:
                    </p>
                    <ul role="list" class="card__bullets flow">
                        <li>Telephone</li>
                        <li>Refrigerator</li>
                        <li>Mobile phone recharging plug</li>
                        <li>Safety deposit box</li>
                        <li>TV</li>
                        <li>Solar powered hot water system</li>
                        <li>Shower bathroom</li>
                        <li>Laundry and press service</li>
                      </ul>

                  </div>
                  <input type="checkbox" class="expand-button">
                  <label class="expand-label" aria-label="Expand"></label>

                </article>
              
                <article class="card">
                  <h2>Amenities</h2>
                  <div class="cutoff-text">
                    <p>
                        Elevate your senses and indulge in the ultimate luxury experience with our thoughtfully curated amenities. Designed to pamper and delight, these exquisite offerings are the epitome of refined living. Prepare to be enchanted by:
                    </p>

                    <ul role="list" class="card__bullets flow">
                        <li>Shampoo and conditioner</li>
                        <li>Body soap</li>
                        <li>Hand bar soap</li>
                        <li>Toothbrush and toothpaste</li>
                        <li>Shaving Kit</li>
                        <li>Bath towel, face towel, hand towel, bathrobe</li>
                        <li>Bath mat</li>
                        <li>Slippers</li>
                        <li>Hair comb</li>
                        <li>Hair dryer</li>
                        <li>Cotton swabs</li>
                        <li>Shower cap</li>
                        <li>30 sqm.</li>
                      </ul>
                  </div>
                  <input type="checkbox" class="expand-button">
                  <label class="expand-label" aria-label="⌄"></label>
                </article>

        </section>

    </section>

    <!-- Superior Room -->
    <section id="rooms" class="container-fluid" data-section-type="5">

        <h1 class="custom-heading"> </h1>
        <!-- Main Content -->
        <main>
            
            <div class="container container_rooms">
	
                <div class="feature">
                    <figure class="featured-item image-holder r-3-2 transition"></figure>
                </div>
                
                <div class="gallery-wrapper">
                    <div class="gallery">
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 active transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 transition"></figure>
                            </div>
                    </div>
                </div>
                
                <div class="controls">
                    <button class="move-btn left">&larr;</button>
                    <button class="move-btn right">&rarr;</button>
                </div>
                
            </div>

            <article class="r" >
                <!-- Section Heading -->
                <h1 class="custom-heading">
                    <span>Superior Room</span>
                </h1>

                <p>
                    <span>Escape into a sanctuary of comfort and tranquility within our superior rooms</span>  
                    <br> <br>
                    Offering a choice of luxurious single or twin sharing beds, these spacious havens are thoughtfully crafted to create a warm, welcoming, and airy ambiance. Unwind in the soothing natural light that fills the room, providing the perfect backdrop for restful slumber, rejuvenating relaxation, or productive work. Every detail has been carefully considered to ensure a harmonious blend of style, functionality, and comfort, allowing you to indulge in the ultimate retreat tailored to your needs.
                    <br> <br>
                    
                    <form id="bookForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" style="text-align: left;  padding-left: 28px;">
                        <button type="submit" class="button-48" role="button" name="bookNow" value="5">
                            <span class="text">Book Now</span>
                        </button>
                    </form>

                </p>
            </article>
            
        </main>



        <section class="card-container">


                <article class="card">
                  <h2>Services and Facilities</h2>
                  <div class="cutoff-text">
                    <p>
                        Discover an unparalleled experience where luxury meets convenience with our exceptional array of services and facilities. Designed to cater to your every need, our offerings are tailored to provide you with the ultimate in comfort and sophistication. Explore the epitome of modern living with:
                    </p>
                    <ul role="list" class="card__bullets flow">
                        <li>Telephone</li>
                        <li>Mobile phone recharging plug</li>
                        <li>Safety deposit box</li>
                        <li>TV</li>
                        <li>Solar powered hot water system</li>
                        <li>Refrigerator</li>
                      </ul>

                  </div>
                  <input type="checkbox" class="expand-button">
                  <label class="expand-label" aria-label="Expand"></label>

                </article>
              
                <article class="card">
                  <h2>Amenities</h2>
                  <div class="cutoff-text">
                    <p>
                        Elevate your senses and indulge in the ultimate luxury experience with our thoughtfully curated amenities. Designed to pamper and delight, these exquisite offerings are the epitome of refined living. Prepare to be enchanted by:
                    </p>

                    <ul role="list" class="card__bullets flow">
                        <li>Shampoo and conditioner</li>
                        <li>Body soap</li>
                        <li>Toothbrush and toothpaste</li>
                        <li>Shaver/Shaving Kit</li>
                        <li>Bath towel, Hand towel, Bathrobe</li>
                        <li>Bath mat</li>
                        <li>Slippers</li>
                        <li>Hair comb</li>
                        <li>Hair dryer</li>
                        <li>Shower cap</li>
                        <li>Cotton swabs</li>
                        <li>33.6 sqm</li>
                      </ul>
                  </div>
                  <input type="checkbox" class="expand-button">
                  <label class="expand-label" aria-label="⌄"></label>
                </article>

        </section>

    </section>


<script>
    // Function to clear the form fields
    function clearForm() {
        document.getElementById("check-in").value = "";
        document.getElementById("check-out").value = "";
        document.getElementById("adult").selectedIndex = 0;
        document.getElementById("children").selectedIndex = 0;
    }

    // Function to hide all room sections
    function hideRooms() {
        var roomSections = document.querySelectorAll('[data-section-type]');
        roomSections.forEach(function(section) {
            section.style.display = 'none';
        });
    }

    // Function to show all room sections
    function showRooms() {
        var roomSections = document.querySelectorAll('[data-section-type]');
        roomSections.forEach(function(section) {
            section.style.display = 'block';
        });
    }

    // // Function to handle form submission
    // document.getElementById("availability-form").addEventListener("submit", function(event) {
    //     event.preventDefault(); // Prevent form submission
        
    //     // Hide all room sections
    //     hideRooms();

    //     // Add your code to check availability and display available rooms here
    //     // You can use AJAX to send form data to a PHP script for processing
        
    //     // For demonstration purposes, we'll just show all rooms after a delay
    //     setTimeout(showRooms, 2000); // Change 2000 to the desired delay in milliseconds
    // });
</script>




<?php
    // Start session
    require('essentials.php');

    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['bookNow'])) {
    // Check if the user is logged in
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        // Redirect to dining.php if logged in using JavaScript
        $id = isset($_POST['bookNow']) ? $_POST['bookNow'] : null;
        $url = "booking.php?id=" . $id;     
        redirects($url);
                    // Redirect to booking.php with the ID if logged in
        exit();
    } else {
        // Show alert if not logged in and redirect to login.php using JavaScript
        alert('danger', 'Please log in to book');
        // echo "<script>window.location.href='login.php';</script>";
        
        
        exit();
    }
    }
?>



<?php
    // Include your database connection file
    require_once('db_connection.php');

    $formSubmitted = false;


        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $formSubmitted = true;

            echo '<script>hideRooms();</script>';
    // Define the range of room IDs
    $roomIDs = range(1, 5);

    // Loop through each room ID
    foreach ($roomIDs as $roomID) {
        // Count the number of bookings for this room that overlap with the submitted check-in and check-out dates
        $sql = "SELECT COUNT(booking_id) AS total_matched_bookings FROM bookings 
                WHERE check_out > ? AND check_in < ? 
                AND booking_status = 'confirmed' AND room_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $_POST['check_in'], $_POST['check_out'], $roomID); // Assuming check-in and check-out dates are submitted via form
        $stmt->execute();
        $result = $stmt->get_result();
        $totalMatchedBookings = $result->fetch_assoc()['total_matched_bookings'];

        // Check if the room is available
        $sql = "SELECT quantity FROM rooms 
        WHERE id = ? 
        AND quantity > ? 
        AND adult >= ? 
        AND children >= ?";    


        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iiii", $roomID, $totalMatchedBookings, $_POST['adult'], $_POST['children']);
        $stmt->execute();




        $result = $stmt->get_result();
        $roomAvailable = $result->fetch_assoc();

        // Output JavaScript to adjust room section display based on availability
        echo '<script>';
        echo "var roomSection = document.querySelector('[data-section-type=\"$roomID\"]');";
        echo "if (" . $roomAvailable['quantity'] . " > 0) {";
        echo "    roomSection.style.display = 'block';";
        echo "} else {";
        echo "    roomSection.style.display = 'none';";
        echo "}";
        echo '</script>';
    }

    } else {
        // Handle case where form data is empty
        echo "";
    }

?>
<!-- <script>
    // Define a function to hide sections
    function hideSections() {
        <?php
            // Check if the form has been submitted
            if ($formSubmitted) {
                // Generate JavaScript code to hide sections based on PHP conditions
                echo "document.addEventListener('DOMContentLoaded', function() {";
                echo "    var sections = document.querySelectorAll('[data-section-type]');";
                echo "    sections.forEach(function(section) {";
                echo "        section.style.display = 'none';";
                echo "    });";
                echo "});";
            }
        ?>
    }
    // Call the function to hide sections
    hideSections();
</script> -->






<!-- 
    <script>
    function hideSections() {
        // Get all sections with the specified data-section-type attribute
        var sections = document.querySelectorAll('[data-section-type]');
        
        // Loop through each section
        sections.forEach(function(section) {
            // Hide the section
            section.style.display = 'none';
        });
    }
</script> -->

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

    <!-- <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title" d-flex align-items-center>
                        <i class="bi bi-person-circle fs-3 ,e-2"></i> User Login
                    </h5>
                    <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </form>
        </div>
    </div> -->
</body>
</html>