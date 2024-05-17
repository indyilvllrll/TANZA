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



















    
    <?php

    require_once('db_connection.php');

    // Assuming you have a session or user ID to identify the logged-in user
    $userId = $_SESSION['user_id']; // Change this according to your setup

    // echo "User ID: " . $userId . "<br>";

    // Fetch user details from the database
    $sql = "SELECT first_name, last_name, email FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows > 0) {
        // Fetch user details
        $row = $result->fetch_assoc();
        // $firstName = $row["first_name"];
        // $lastName = $row["last_name"];
        $fullName = $row["first_name"] . " " . $row["last_name"];
        $email = $row["email"];
    } else {
        // Handle case when user doesn't exist or user ID is invalid
        $firstName = "";
        $lastName = "";
        $email = "";
    }

    // Close database connection
    $stmt->close();
?>

        <section id="mission">
            <h1 class="custom-heading"><span>CHECKOUT</span> </h1>
        </section>

    <!-- carousel -->

    <!-- <div class="container-fluid px-lg-4 mt-4"> </div> -->

    <!-- check availability form -->

    <div class="container availability-form">
  <div class="row">
    <div class="col-lg-16 bg-white shadow p-3 rounded">
      <h5 class="mb-3">Booking Details</h5>
      <form id="bookForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="row">
          <div class="col-md-4 mb-2">
            <label for="name" class="form-label col-form-label">Name</label>
            <!-- <input type="text" class="form-control shadow-none" id="name"> -->
            <input type="text" class="form-control shadow-none" id="fullName" value="<?php echo htmlspecialchars($fullName); ?>">

          </div>
          <div class="col-md-4 mb-2">
            <label for="phone" class="form-label col-form-label">Phone Number</label>
            <input type="tel" class="form-control shadow-none" id="phone">
          </div>
          <div class="col-md-4 mb-2">
            <label for="address" class="form-label col-form-label">Email Address</label>
            <input type="email" readonly class="form-control shadow-none" id="email" value="<?php echo htmlspecialchars($email); ?>">
          </div>
        </div>

        <div class="row">
          <div class="col-md-3 mb-2">
            <label for="checkIn" class="form-label col-form-label">Check-In</label>
            <input type="date" class="form-control shadow-none" id="checkIn">
          </div>
          <div class="col-md-3 mb-2">
            <label for="checkOut" class="form-label col-form-label">Check-Out</label>
            <input type="date" class="form-control shadow-none" id="checkOut">
          </div>

          <div class="col-md-3 mb-2">
            <label class="form-label" style="font-weight: 500;">Adult</label>
            <select name="adult" class="form-select" shadow-none>
                <option selected="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
          </div>

          <div class="col-md-3 mb-2">
                <label class="form-label" style="font-weight: 500;">Children</label>
                <select name="children" class="form-select" shadow-none>
                    <option selected="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>

            </div>
        </div>

        
        <div class="row">

            <div class="col-md-4 mb-2">
                <label for="price" class="form-label col-form-label">Price per Day:</label>
                <input type="text" class="form-control text-center shadow-control shadow-none" id="price" readonly>
            </div>

            <div class="col-md-4 mb-2">
                <label for="noOfDays" class="form-label col-form-label">No. of Days:</label>
                <input type="number" class="form-control text-center shadow-control shadow-none" id="noOfDays" readonly>
            </div>

            <div class="col-md-4 mb-2">
                <label for="totalAmount" class="form-label col-form-label">Total Amount to Pay:</label>
                <input type="text" class="form-control text-center shadow-control shadow-none" id="totalAmount" readonly>
            </div>
        </div>

        <div class="row">

            <div class="col-md-12 mb-2">
                <label for="mes" class="form-label col-form-label"></label>
                <input type="text" class="form-control text-center shadow-control shadow-none" id="mes" name="mes" readonly>
            </div>

        </div>

        <div class="row mt-3">
          <div class="col-12 text-center">
          <button type="button"  id="paynowbtn" name="paynowbtn" class="btn btn-sm text-white shadow-none custom-bg" >PAY NOW</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>




    

    <!-- PRESIDENTIAL -->
    <section id="rooms" class="container-fluid" data-section-type="1"  style="display: none;">


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

    <section id="rooms" class="container-fluid" data-section-type="2" style="display: none;">

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

    <section id="rooms" class="container-fluid" data-section-type="3" style="display: none;">

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
    <section id="rooms" class="container-fluid" data-section-type="4" style="display: none;">

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
    <section id="rooms" class="container-fluid" data-section-type="5" style="display: none;">

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


    function updateCheckOutMinDate() {
        // Get the value of the Check-In date input
        var checkInDate = new Date(document.getElementById('checkIn').value);

        // Set the minimum allowed date for the Check-Out input to the day after the selected Check-In date
        checkInDate.setDate(checkInDate.getDate() + 1);
        var minDate = checkInDate.toISOString().split('T')[0];
        document.getElementById('checkOut').min = minDate;
    }

    // Get today's date
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); // January is 0!
    var yyyy = today.getFullYear();

    today = yyyy + '-' + mm + '-' + dd;

    // Set the min attribute of the check-in input to today
    document.getElementById("checkIn").setAttribute("min", today);

    // Call the function to update the minimum Check-Out date when the Check-In date changes
    document.getElementById('checkIn').addEventListener('change', updateCheckOutMinDate);

</script>



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

    // Get the ID from the URL query parameter
    var urlParams = new URLSearchParams(window.location.search);
    var id = urlParams.get('id');

        // Output the ID to the console for debugging
        console.log("ID from URL:", id);
    // Show the room section based on the ID from the URL

    var roomSection = document.querySelector('[data-section-type="' + id + '"]');
    if (roomSection) {
        roomSection.style.display = 'block';
    }

    



</script>








<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Function to calculate the difference in days between two dates
    function getNumberOfDays(checkInDate, checkOutDate) {
        const oneDay = 24 * 60 * 60 * 1000; // One day in milliseconds
        const startDate = new Date(checkInDate);
        const endDate = new Date(checkOutDate);
        const diffDays = Math.round(Math.abs((endDate - startDate) / oneDay));
        return diffDays;
    }


    // Function to update the number of days and total amount
    function updateBookingDetails() {
        // Get the check-in and check-out dates from the form or elsewhere in your code
        const checkInDate = document.getElementById('checkIn').value;
        const checkOutDate = document.getElementById('checkOut').value;



        // Calculate the difference in days
        const numberOfDays = getNumberOfDays(checkInDate, checkOutDate);

        // Fetch room price from database (replace with your actual SQL query)

        var urlParams = new URLSearchParams(window.location.search);
        var roomId = urlParams.get('id');




        fetchRoomPrice(roomId)
    .then(data => {
        const { price, adult, children } = data;

        // Check if price and numberOfDays are valid
        if (!isNaN(price) && !isNaN(numberOfDays)) {
            // Calculate total amount
            const totalAmount = price * numberOfDays;

            // Update the value of the input fields with the calculated values
            document.getElementById('noOfDays').value = numberOfDays;
            document.getElementById('price').value = price;
            document.getElementById('totalAmount').value = totalAmount;

            populateOptions('[name="adult"]', adult);
            populateOptions('[name="children"]', children);            



                            // Add event listener to Pay Now button
            document.getElementById('paynowbtn').addEventListener('click', function() {
                    redirectToPayment(roomId, numberOfDays, totalAmount, price);
                });

        } else {
            // If price or numberOfDays is not valid, set totalAmount input field to empty
            document.getElementById('totalAmount').value = '';
            document.getElementById('price').value = price;

            populateOptions('[name="adult"]', adult);
            populateOptions('[name="children"]', children);
        }
    })
    .catch(error => {
        console.error('Error fetching room price:', error);
        // If an error occurs, set totalAmount input field to empty
        document.getElementById('totalAmount').value = '';
    });


    fetchMessage(roomId, checkInDate, checkOutDate)
    .then(data => {
        const { roomAvailable, totalMatchedBookings } = data;

        // Check if both check-in and check-out dates are empty
        if (!checkInDate && !checkOutDate) {
            clearFields(); // Clear all fields
            return;
        }

        // Check if check-out date is higher than check-in date
        if (checkOutDate < checkInDate) {
            clearFields(); // Clear all fields
            document.getElementById('mes').value = 'Invalid Dates. Please select dates again.'; // Display "Invalid Dates" message
            document.querySelector('[name="paynowbtn"]').disabled = true; // Disable the pay now button
            document.querySelector('[name="paynowbtn"]').style.backgroundColor = 'gray'; // Gray out the pay now button
            return;
        }

        if (!isNaN(totalMatchedBookings) && !isNaN(roomAvailable)) {
            const numberOfAvailable = roomAvailable - totalMatchedBookings;

            const messageInput = document.getElementById('mes');
            const paynowBtn = document.querySelector('[name="paynowbtn"]');

            if (numberOfAvailable === 0) {
                clearFields(); // Clear all fields
                messageInput.value = "This room is fully booked on selected dates.";
                paynowBtn.disabled = true; // Disable the button
                paynowBtn.style.backgroundColor = 'gray'; // Optionally change button color
            } else {
                messageInput.value = `${numberOfAvailable} rooms left! Book now!`;
                paynowBtn.disabled = false; // Enable the button
                paynowBtn.style.backgroundColor = ''; // Reset button color
            }
        } else {
            console.error('Invalid data received from server.');
        }
    })
    .catch(error => {
        console.error('Error fetching room availability:', error);
    });








    }

    function redirectToPayment(roomId, numberOfDays, totalAmount, price) {
        const fullName = encodeURIComponent(document.getElementById('fullName').value);
        const email = encodeURIComponent(document.getElementById('email').value);
        const phone = encodeURIComponent(document.getElementById('phone').value);
        const checkIn = encodeURIComponent(document.getElementById('checkIn').value);
        const checkOut = encodeURIComponent(document.getElementById('checkOut').value);
        const adult = encodeURIComponent(document.querySelector('select[name="adult"]').selectedIndex + 1);
        const children = encodeURIComponent(document.querySelector('select[name="children"]').selectedIndex + 1);


        // Construct the URL with parameters
        // const url = `payment.php?roomId=${roomId}&numberOfDays=${numberOfDays}&totalAmount=${totalAmount}`;

        const url = `payment.php?roomId=${roomId}&numberOfDays=${numberOfDays}&totalAmount=${totalAmount}&price=${price}&fullName=${fullName}&email=${email}&phone=${phone}&checkIn=${checkIn}&checkOut=${checkOut}&adult=${adult}&children=${children}`;

        // Redirect to payment.php
        window.location.href = url;

    }

    function clearFields() {
    document.getElementById('mes').value = ''; // Clear the message
    document.getElementById('totalAmount').value = ''; // Clear the total amount field
    document.getElementById('noOfDays').value = ''; // Clear the number of days field
}
    function fetchMessage(roomId,  checkInDate, checkOutDate){
        const url = `check_availability.php?id=${roomId}&check_out=${checkOutDate}&check_in=${checkInDate}`;

        return fetch(url)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Failed to fetch room availabiility');
                }
                return response.json();
            })
            .catch(error => {
                throw new Error('Failed to fetch room availabiility');
            });

    }

    // Function to fetch room price from the database
    function fetchRoomPrice(roomId) {
        return fetch('get_room_price.php?id=' + roomId)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Failed to fetch room price');
                }
                return response.json();
            })
            .catch(error => {
                throw new Error('Failed to fetch room price');
            });
    }

    // Function to populate options for a select element
    function populateOptions(selectName, maxValue) {
        const select = document.querySelector(selectName);
        select.innerHTML = ''; // Clear existing options

        // Populate options
        for (let i = 1; i <= maxValue; i++) {
            const option = document.createElement('option');
            option.value = i;
            option.textContent = i;
            select.appendChild(option);
        }
    }




    // Add event listeners to check-in and check-out input fields
    document.getElementById('checkIn').addEventListener('change', updateBookingDetails);
    document.getElementById('checkOut').addEventListener('change', updateBookingDetails);
    document.getElementById('paynowbtn').addEventListener('click', updateBookingDetails);


    // Initial update of the booking details
    updateBookingDetails();
    });

</script>










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