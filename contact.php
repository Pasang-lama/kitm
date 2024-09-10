<?php include("includes/header.php"); ?>
<section class="breadcrumb-section" style=" background-image: url('images/breadcrumb.png')">
    <div class="container">
        <div class="page-tittle">Contact us</div>
    </div>
    <nav aria-label="breadcrumb" class="breadcrumb-wrapper">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact us</li>
            </ol>
        </div>
    </nav>
</section>

<section class="container contact-section-page custom-margin ">
    <div class="row gy-4">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="get-in-touch">
                <div class="contact-information">
                    <div class="block-heading">
                        Contact Information
                    </div>
                    <ul>
                        <li>
                            <div class="wrapper">
                                <div class="icon-box"><i class="fa-solid fa-location-dot"></i></div>
                                <div class="details">
                                    <div class="tittle">Location </div>
                                    <span>Putalisadak-28 (Kamaladi Mod), Kathmandu</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="wrapper">
                                <div class="icon-box"><i class="fa-solid fa-envelope"></i></div>
                                <div class="details">
                                    <div class="tittle">Email Address </div>
                                    <span><a href="mailto:kantipurinstituteoftechnologya@gmail.com">kantipurinstituteoftechnologya@gmail.com</a></span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="wrapper">
                                <div class="icon-box"><i class="fa-solid fa-phone"></i></div>
                                <div class="details">
                                    <div class="tittle">Phone </div>
                                    <span>
                                        <a href="tel:976-3690075">976-3690075</a>,
                                        <a href="tel:9849839763">9849839763</a>
                                    </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="social-media">
                    <div class="block-heading ">
                        Follow Us
                    </div>
                    <ul>
                        <li>
                            <a class="facebook" href="" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a class="instagram" href="" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a class="twitter" href="" target="_blank">
                                <i class="fab fa-x-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a class="linkedin" href="" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <form class="contact-us-message-form contact-message-form  form-element" action="<?= BASE ?>posthandler/ContactInsert.php" method="POST">
                <div class="heading">Schedule a Free Consultation <?php
                                                                    if (isset($_SESSION['success-contact'])) {
                                                                    ?>
                        <div class="alert alert-success" role="alert">
                            <?= $_SESSION['success-contact'] ?>
                        </div>
                    <?php
                                                                        unset($_SESSION['success-contact']);
                                                                    }
                    ?>


                </div>
                <div class="form-wrapper">
                    <div class="form-group">
                        <label for="name">Full Name*</label>
                        <input type="text" name="name" id="contact-name" placeholder="Enter a full name.">
                        <div id="contact-name-error" class="error-message" style="color: red;"></div> <!-- Error message for name -->
                    </div>
                    <div class="form-group">
                        <label for="number">Phone Number*</label>
                        <input type="text" name="number" id="contact-number" placeholder="Enter a phone number.">
                        <div id="contact-number-error" class="error-message" style="color: red;"></div> <!-- Error message for number -->
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address*</label>
                        <input type="text" name="email" id="contact-email" placeholder="Enter an email address.">
                        <div id="contact-email-error" class="error-message" style="color: red;"></div> <!-- Error message for email -->
                    </div>
                    <div class="form-group">
                        <label for="message">Message*</label>
                        <textarea name="message" id="contact-message" placeholder="Enter a message." cols="30" rows="7"></textarea>
                        <div id="contact-message-error" class="error-message" style="color: red;"></div> <!-- Error message for message -->
                    </div>
                    <div class="custom-button">
                        <button class="secondary-btn" type="submit">Send Message</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</section>
<section class="google-map custom-margin button-margin-none">
    <div class="google-location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d113034.66859265203!2d85.23982745760436!3d27.706990808856435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x39eb1907be4b5251%3A0x31f852fae10e4ea6!2sKathmandu%2044600!3m2!1d27.707015199999997!2d85.3222289!5e0!3m2!1sen!2snp!4v1725619948770!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<script>
    document.querySelector('.contact-message-form').addEventListener('submit', function(event) {
        let valid = true;
        const name = document.getElementById('contact-name').value;
        const number = document.getElementById('contact-number').value;
        const email = document.getElementById('contact-email').value;
        const message = document.getElementById('contact-message').value;

        // Clear previous error messages
        document.getElementById('contact-name-error').textContent = '';
        document.getElementById('contact-number-error').textContent = '';
        document.getElementById('contact-email-error').textContent = '';
        document.getElementById('contact-message-error').textContent = '';

        if (!name) {
            valid = false;
            document.getElementById('contact-name-error').textContent = 'Please enter your name.';
        }
        if (!number) {
            valid = false;
            document.getElementById('contact-number-error').textContent = 'Please enter your phone number.';
        }
        if (!email) {
            valid = false;
            document.getElementById('contact-email-error').textContent = 'Please enter your email address.';
        }
        if (!message) {
            valid = false;
            document.getElementById('contact-message-error').textContent = 'Please enter a message.';
        }
        if (!valid) {
            event.preventDefault(); // Prevent form submission
        }
    });
</script>
<?php include("includes/footer.php"); ?>