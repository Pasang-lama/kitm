<?php
require_once "dbconfig.php";
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantipure Institute Of Technology and Management</title>
    <!-- custome css  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- fontawesome css  -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- favicon  -->
    <link rel="shortcut icon" href="images/new-logo.jpg" type="image/x-icon">
    <!-- bootstrap css  -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- magnific-popup css  -->
    <link rel="stylesheet" href="css/magnific-popup.css" />
</head>

<body>
    <header>
        <div class="top-nav">
            <div class="container">
                <div class="top-header-wrapper">
                    <div class="contact-details">
                        <ul>
                            <li><i class="fa-solid fa-location-dot"></i> <span class="wrapper">Putalisadak-28 (Kamaladi Mod), Kathmandu</span></li>
                            <li><i class="fa-solid fa-phone"></i><span class="wrapper">
                                    <a href="tel:976-3690075">976-3690075</a>,
                                    <a href="tel:9849839763">9849839763</a>
                                </span></li>
                            <li><i class="fa-solid fa-envelope"></i><span class="wrapper"><a href="mailto:kantipurinstituteoftechnologya@gmail.com">kantipurinstituteoftechnologya@gmail.com</a></span></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="main-navigation-bar">
            <div class="container">
                <nav>
                    <div class="main-logo d-flex align-items-center">
                        <figure>
                            <a class="navbar-brand" href="/">
                                <img src="images/new-logo.jpg" alt="Kantipure Institute of Techmology and Management">
                            </a>
                        </figure>
                        <div class="content d-lg-none d-block ">
                            <h1>Kantipure Institute Of Technology and Management</h1>
                            <span>Affiliated with Rajarshi Janak University(RJU)</span>
                        </div>
                    </div>
                    <button class=" openbtn d-lg-none d-block md-5 ms-1" data-side-nav-target="#myside-nav">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <div class="navigation-item-wrapper" id="myside-nav">
                        <button class="ms-auto mb-3 d-block btn btn-danger d-lg-none closebtn" data-side-nav-target="#myside-nav"><i class="fa-solid fa-xmark"></i></button>
                        <ul class="navbar-nav">
                            <li class="nav-item ">
                                <a class="nav-link active" href="/">Home</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="about">About us</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="bcscsit">BCs.CSIT</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="bca">BCA</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="scholarship">Scholarship</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Resources
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="professional-training">Professional Training</a></li>
                                    <li><a class="dropdown-item" href="internship">Internship</a></li>
                                    <li><a class="dropdown-item" href="placement">Placement Cell</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact">Contact us</a>
                            </li>
                        </ul>
                        <button type="button" class="result-button d-none d-lg-block" data-bs-toggle="modal" data-bs-target="#applynowform">
                            Apply Now

                        </button>
                    </div>

                </nav>
            </div>
        </div>
    </header>


    <!-- header applynow form  -->


    <div class="modal fade" id="applynowform" tabindex="-1" aria-labelledby="applynowformLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">


                <form class="contact-us-message-form apply-message-form form-element" action="<?= BASE ?>posthandler/ApplyInsert.php" method="POST">
                    <div class="d-flex justify-content-between heading align-items-center">
                        <div>Apply with us</div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="form-wrapper">
                        <div class="form-group">
                            <label for="name">Full Name*</label>
                            <input type="text" name="name" id="name" placeholder="Enter a full name.">
                            <span class="error-message" id="name-error"></span>
                        </div>
                        <div class="form-group">
                            <label for="number">Phone Number*</label>
                            <input type="text" name="number" id="number" placeholder="Enter a phone number.">
                            <span class="error-message" id="number-error"></span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address*</label>
                            <input type="text" name="email" id="email" placeholder="Enter a email address.">
                            <span class="error-message" id="email-error"></span>
                        </div>
                        <div class="form-group">
                            <label for="program">Program*</label>
                            <select name="program" id="program">
                                <option value="0" selected disabled>Select a program</option>
                                <option value="Bcs.CSIT">BSc. Computer Science and Information Technology (BSc.CSIT)</option>
                                <option value="BCA">Bachelor of Computer Application (BCA)</option>
                            </select>
                            <span class="error-message" id="program-error"></span>
                        </div>
                        <div class="form-group">
                            <label for="message">Message*</label>
                            <textarea name="message" id="message" placeholder="Enter a message." cols="30" rows="4"></textarea>
                            <span class="error-message" id="message-error"></span>
                        </div>
                        <div class="custom-button">
                            <button class="secondary-btn" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php
    if (isset($_SESSION['success-apply'])) {   ?>
        <div class="container">
            <div class="alert alert-success" role="alert">
                <?= $_SESSION['success-apply'] ?>
            </div>
        </div>
    <?php
        unset($_SESSION['success-apply']);
    }

    ?>