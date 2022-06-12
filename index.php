<?php
include "models/Room.php";
require 'controllers/ProfileController.php';
$controller = new ProfileController();
$user = $controller->showData();
$_SESSION['id'] = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Grand Hotel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="main.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <link rel="icon" href="images/logo.png" type="image/png">
</head>

<body>

    <!-- header -->
    <header class="header" id="header">
        <div class="head-top">
            <div class="site-name">
                <span>GEEKPROBIN</span>
            </div>
            <div class="site-nav">
                <span id="nav-btn">MENU <i class="fas fa-bars"></i></span>
            </div>
        </div>

        <div class="head-bottom flex">
            <h2>NICE AND COMFORTABLE PLACE TO STAY</h2>
            <p>Grand Hotel is a quiet, comfortable hotel located near the Ecological Sanctuary and the Monteverde Butterfly Gardens in an area called Cerro Plano, an ideal location half way between the Monteverde Cloud Forest reserve and the main village of the Monteverde area (Santa Elena), in close proximity to several restaurants and activities. All rooms have private bathrooms with hot water. </p>
            <!-- <button type="button" class="head-btn">GET STARTED</button> -->
        </div>
    </header>
    <!-- end of header -->

    <!-- side navbar -->
    <?php if (isset($_SESSION["id"])) {

    ?>

        <div class="sidenav" id="sidenav">


            <span class="cancel-btn" id="cancel-btn">
                <i class="fas fa-times"></i>
            </span>
            <br>
            <br>
            <div class="w-50 h-50" style="align-content: center;">
                <img class="img-fluid rounded" src="./images/default_profile.jpg" alt="profile" style="height:150px;">
                <a href="profile.php">
                    <h2><?= $user->data["name"] ?></h2>
                </a>
            </div>
            <ul class="navbar">
                <li><a href="#header">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#rooms">Rooms</a></li>
                <li><a href="#customers">Customers</a></li>
                <li><a href="doneReservations.php">Done Reservation</a></li>
                <li><a href="create-reservation.php">book now</a></li>

            </ul>
            <a href="logout.php" style="text-decoration:none;"><button class="btn log-in">Log Out</button></a>
        <?php } else {

        ?>

            <div class="sidenav" id="sidenav">


                <span class="cancel-btn" id="cancel-btn">
                    <i class="fas fa-times"></i>
                </span>
                <br>
                <br>
                <div class="w-50 h-50" style="align-content: center;">
                    <!-- insert profile image -->
                    <!-- <img  class="img-fluid rounded" src="" alt="profile" > -->
                </div>
                <ul class="navbar">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#rooms">Rooms</a></li>
                    <li><a href="#customers">Customers</a></li>
                </ul>
                <a href="SignUp.php" style="text-decoration:none;"> <button class="btn">Sign Up</button> </a>
                <a href="login.php" style="text-decoration:none;"><button class="btn log-in">Login</button></a>

            <?php

        }

            ?>




            </div>
            <!-- end of side navbar -->

            <!-- fullscreen modal -->
            <div id="modal"></div>
            <!-- end of fullscreen modal -->

            <!-- body content  -->
            <section class="services sec-width" id="services">
                <div class="title">
                    <h2>services</h2>
                </div>
                <div class="services-container">
                    <!-- single service -->
                    <article class="service">
                        <div class="service-icon">
                            <span>
                                <i class="fas fa-utensils"></i>
                            </span>
                        </div>
                        <div class="service-content">
                            <h2>Food Service/ Food Runner</h2>
                            <p>Full-service restaurants : fine dining restaurants, family restaurants, ethnic restaurants, casual restaurants. Catering & banqueting : catering companies, conference centers, wedding venues, festival food coordinators. Drinking establishments : bars, pubs, nightclubs, cabarets.</p>

                        </div>
                    </article>
                    <!-- end of single service -->
                    <!-- single service -->
                    <article class="service">
                        <div class="service-icon">
                            <span>
                                <i class="fas fa-swimming-pool"></i>
                            </span>
                        </div>
                        <div class="service-content">
                            <h2>Refreshment</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis tempore officia accusamus asperiores. Illum maxime eligendi necessitatibus laudantium iste nisi pariatur doloremque ut illo similique voluptatum enim distinctio perferendis, ad ipsam aspernatur omnis rem autem ex, reiciendis corporis suscipit!</p>

                        </div>
                    </article>
                    <!-- end of single service -->
                    <!-- single service -->
                    <article class="service">
                        <div class="service-icon">
                            <span>
                                <i class="fas fa-broom"></i>
                            </span>
                        </div>
                        <div class="service-content">
                            <h2>Housekeeping</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis tempore officia accusamus asperiores. Illum maxime eligendi necessitatibus laudantium iste nisi pariatur doloremque ut illo similique voluptatum enim distinctio perferendis, ad ipsam aspernatur omnis rem autem ex, reiciendis corporis suscipit!</p>

                        </div>
                    </article>
                    <!-- end of single service -->
                    <!-- single service -->
                    <article class="service">
                        <div class="service-icon">
                            <span>
                                <i class="fas fa-door-closed"></i>
                            </span>
                        </div>
                        <div class="service-content">
                            <h2>Room Security</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis tempore officia accusamus asperiores. Illum maxime eligendi necessitatibus laudantium iste nisi pariatur doloremque ut illo similique voluptatum enim distinctio perferendis, ad ipsam aspernatur omnis rem autem ex, reiciendis corporis suscipit!</p>

                        </div>
                    </article>
                    <!-- end of single service -->
                </div>
            </section>


            <section class="rooms sec-width" id="rooms">
                <div class="title">
                    <h2>rooms</h2>
                </div>


                <div class="rooms-container">
                    <!-- single room -->
                    <?php

                    $rooms = Room::all();

                    foreach ($rooms as $room) {
                    ?>
                        <article class="room">
                            <div class="room-image">
                                <img src="images/img1.jpg" alt="room image">
                            </div>
                            <div class="room-text">
                                <h3><?= $room["name"]; ?></h3>
                                <ul>
                                    <li>
                                        <i class="fas fa-arrow-alt-circle-right"></i>
                                        Lorem ipsum dolor sit amet.
                                    </li>
                                    <li>
                                        <i class="fas fa-arrow-alt-circle-right"></i>
                                        Lorem ipsum dolor sit amet.
                                    </li>
                                    <li>
                                        <i class="fas fa-arrow-alt-circle-right"></i>
                                        Lorem ipsum dolor sit amet.
                                    </li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus exercitationem repellendus maxime ullam tempore architecto provident unde expedita quam beatae, dolore eligendi molestias sint tenetur incidunt voluptas. Unde corporis qui iusto vitae. Aut nesciunt id iste, cum esse commodi nemo?</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla corporis quasi officiis cumque, fugiat nostrum sunt, tempora animi dicta laborum beatae ratione doloremque. Delectus odio sit eius labore, atque quo?</p>
                                <p class="rate">
                                    <span><?= $room["price"]; ?></span> Per Night
                                </p>

                            </div>
                        </article>

                    <?php
                    }
                    ?>
                </div>
            </section>


            <section class="customers" id="customers">
                <div class="sec-width">
                    <div class="title">
                        <h2>customers</h2>
                    </div>
                    <div class="customers-container">
                        <!-- single customer -->
                        <div class="customer">
                            <div class="rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <h3>We Loved it</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae veritatis provident eveniet praesentium veniam cum iusto distinctio esse, vero est autem, eius optio cupiditate?</p>
                            <img src="images/cus1.jpg" alt="customer image">
                            <span>Customer Name, Country</span>
                        </div>
                        <!-- end of single customer -->
                        <!-- single customer -->
                        <div class="customer">
                            <div class="rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <h3>Comfortable Living</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae veritatis provident eveniet praesentium veniam cum iusto distinctio esse, vero est autem, eius optio cupiditate?</p>
                            <img src="images/cus2.jpg" alt="customer image">
                            <span>Customer Name, Country</span>
                        </div>
                        <!-- end of single customer -->
                        <!-- single customer -->
                        <div class="customer">
                            <div class="rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <h3>Nice Place</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae veritatis provident eveniet praesentium veniam cum iusto distinctio esse, vero est autem, eius optio cupiditate?</p>
                            <img src="images/cus1.jpg" alt="customer image">
                            <span>Customer Name, Country</span>
                        </div>
                        <!-- end of single customer -->
                    </div>
                </div>
            </section>
            <!-- end of body content -->

            <!-- footer -->
            <footer class="footer">
                <div class="footer-container">
                    <div>
                        <h2>About Us </h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque sapiente mollitia doloribus provident? Eos quisquam aliquid vel dolorum, impedit culpa.</p>
                        <ul class="social-icons">
                            <li class="flex">
                                <i class="fa fa-twitter fa-2x"></i>
                            </li>
                            <li class="flex">
                                <i class="fa fa-facebook fa-2x"></i>
                            </li>
                            <li class="flex">
                                <i class="fa fa-instagram fa-2x"></i>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h2>Useful Links</h2>
                        <a href="#">Blog</a>
                        <a href="#">Rooms</a>
                        <a href="#">Subscription</a>
                        <a href="#">Gift Card</a>
                    </div>

                    <div>
                        <h2>Privacy</h2>
                        <a href="#">Career</a>
                        <a href="#">About Us</a>
                        <a href="#">Contact Us</a>
                        <a href="#">Services</a>
                    </div>

                    <div>
                        <h2>Have A Question</h2>
                        <div class="contact-item">
                            <span>
                                <i class="fas fa-map-marker-alt"></i>
                            </span>
                            <span>
                                The Grand Hotel, Promenade، Hurghada, Red Sea Governorate 84517
                            </span>
                        </div>
                        <div class="contact-item">
                            <span>
                                <i class="fas fa-phone-alt"></i>
                            </span>
                            <span>
                                <i class="fas fa-phone-alt">+84545 37534 48</i>
                            </span>
                        </div>
                        <div class="contact-item">
                            <span>
                                <i class="fas fa-envelope"></i>
                            </span>
                            <span>
                                info@domain.com
                            </span>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end of footer -->

            <script src="script.js"></script>

</body>

</html>