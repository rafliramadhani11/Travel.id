<?php
require 'proses.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon-16x16.png" />
    <title><?= $title ?></title>
    <link rel="stylesheet" href="style.css?v=2">
</head>

<body>
    <!-- NAVIGATION BAR SECTION -->
    <div class="navbar">
        <div style="font-size: 2em; font-weight: 600">
            <img src="img/Travel.id.png" alt="" />
            </a>
        </div>
        <div class="service" style="width: 40%; font-size: 16px;">
            <ul>
                <li>
                    <a href="index.html#home">Home</a>
                </li>
                <li>
                    <a href="index.html#services">Services</a>
                </li>
                <li>
                    <a href="index.html#destination">Destinations</a>
                </li>
                <li>
                    <a href="#footer">About Us</a>
                </li>
            </ul>
        </div>
        <div style="width: 20vw;display: flex; align-items: center;justify-content: space-between;">
            <a href="signin.html" style="color: black;">
                <div class="btn-login" style="width: 8vw;height: 7vh;border: 1px solid;display: flex; align-items: center;justify-content: center;border-radius: 2vw;">
                    Sign In
                </div>
            </a>
            <a href="signup.html" style="color: white;">
                <div style="width: 8vw;height: 7vh;border: 1px solid;display: flex; align-items: center;justify-content: center; border-radius: 2vw;background-color: #e9750a;">
                    Sign Up
                </div>
            </a>
        </div>
    </div>
    <!-- AKHIR NAVIGATION BAR -->

    <!-- JUMBROTON SECTION -->
    <div class="jumbotron" style="background: url(img/<?= $img ?>), linear-gradient(315deg, #f0f0f0, #cacaca);background-position: center;background-size: cover;object-fit: cover;">
        <p style="font-weight: 100;letter-spacing: 1px;font-size: 40px;"><?= $nameDestination ?></p>
        <p><?= $descDestination ?></p>
    </div>
    <!-- AKHIR JUMBOTRON SECTION -->


    <div style="margin: 0 auto;margin-top: 5%; font-size: 38px;width:90%;margin-bottom: 2%;">
        <span>Adevnture in <?= $name ?></span>
    </div>

    <!-- DESTINATION SECTION -->
    <div class="tour">
        <div class="tourContent">
            <div class="content1" style="background-image: url(img/<?= $imgTour1 ?>);object-fit: cover;background-size: cover;"></div>
            <p style="font-weight: bold;margin-bottom: 8%;font-size: 28px;"><?= $tour1 ?></p>
            <p style="font-size: 14px;"><?= $descTour1 ?></p>
        </div>
        <div class="tourContent" style="position: relative;">
            <p style="font-weight: bold;margin-bottom: 8%;font-size: 28px;"><?= $tour2 ?></p>
            <p style="font-size: 14px;"><?= $descTour2 ?></p>
            <div class="content2" style="background-image: url(img/<?= $imgTour2 ?>);object-fit: cover;background-size: cover;"></div>
        </div>
        <div class="tourContent">
            <div class="content3" style="background-image: url(img/<?= $imgTour3 ?>);object-fit: cover;background-size: cover;"></div>
            <p style="font-weight: bold;margin-bottom: 8%;font-size: 28px;"><?= $tour3 ?></p>
            <p style="font-size: 14px;"><?= $descTour3 ?></p>
        </div>
    </div>
    <!-- AKHIR DESTINATION SECTION -->

    <!-- FOOTER SECTION -->
    <div class="footer" id="footer">
        <div style="width: 40%">
            <img src="img/artiom-vallat-3ZdUvtP6S-A-unsplash 1.png" width="100%" />
        </div>
        <div style="display: flex; flex-direction: column; box-sizing: border-box; padding: 5%">
            <p style="color: #02298b; font-size: 40px; font-weight: 600">Travel.<span style="color: #e9750a">id</span></p>
            <p>
                The best service to customers is <br />
                our top priority in building a business
            </p>
            <div class="socmed" style="margin-top: 20%">
                <img src="img/Ig.png" alt="" />
                <img src="img/Fb.png" alt="" />
                <img src="img/Twt.png" alt="" />
            </div>
            <div style="margin-top: 10%; width: 100%">
                <p style="padding: 3%">Get in Touch</p>
                <div style="display: flex; align-items: center; border: 1px solid; border-radius: 30px; height: 30px">
                    <input type="text" placeholder="Enter your email" />
                    <button class="button"></button>
                </div>
            </div>
            <div style="font-size: 12px; font-family: 'Jost'; text-align: center; margin-top: 20%">&copy; Copyright 2021 All right reserved | Built by Rafli, Firda, Fitria, Aliffia, Abid</div>
        </div>
        <div style="display: flex; justify-content: space-around; width: 40%">
            <div style="margin-top: 17%">
                <span style="font-weight: 600; font-size: 20px">About</span>
                <br />
                <p>About Us</p>
                <p>Features</p>
                <p>News</p>
                <p>Menu</p>
            </div>
            <div style="margin-top: 17%">
                <span style="font-weight: 600; font-size: 20px">Company</span>
                <br />
                <p>Why Travel.id ?</p>
                <p>Partners with us</p>
                <p>FaQ</p>
                <p>Blogs</p>
            </div>
            <div style="margin-top: 17%">
                <span style="font-weight: 600; font-size: 20px">Support</span>
                <br />
                <p>Account</p>
                <p>Support center</p>
                <p>Feedback</p>
                <p>Contact us</p>
            </div>
        </div>
    </div>
    <!-- AKHIR FOOTER SECTION -->

</body>

</html>