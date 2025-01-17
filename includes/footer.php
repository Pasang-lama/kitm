<footer class="custom-margin">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="column-heading">Kantipure Institute of Technology and Management</div>
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
            <div class="col-lg-3 col-md-6 col-sm-12 ps-lg-5 ">
                <div class="column-heading">Our Resources</div>
                <ul>
                    <li><a href="professional-training">Professional Training</a></li>
                    <li><a href="internship">Internship</a></li>
                    <li><a href="placement">Placement Cell</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12">
                <div class="column-heading">Useful Links</div>
                <ul>
                    <li><a href="about">About us</a></li>
                    <li><a href="contact">Online Apply</a></li>
                    <!-- <li><a href="">Notices</a></li> -->
                    <!-- <li><a href="">News and Articles</a></li> -->
                    <!-- <li><a href="vaccancy">Vaccancy</a></li> -->
                    <li><a href="contact">Contact us</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="column-heading">Our Programs</div>
                <ul>
                    <li><a href="bca">Bachelor of Computer Application (BCA)</a></li>
                    <li><a href="bcscsit">BSc Computer Science and Information Technology (BSc.CSIT)</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copy-right-section container">
        <p class="text-center">© 2024, Kantipure Institute of Information and Technology. All Rights Reserved. Crafted by: <a href="">E-prabidhi</a></p>
    </div>
</footer>
</body>

<!-- validation for Apply Now btn -->
<script>
document.querySelector('.apply-message-form').addEventListener('submit', function(event) {
    let valid = true;
    const name = document.getElementById('name').value;
    const number = document.getElementById('number').value;
    const email = document.getElementById('email').value;
    const program = document.getElementById('program').value;
    const message = document.getElementById('message').value;

    // Clear previous error messages
    document.getElementById('name-error').textContent = '';
    document.getElementById('number-error').textContent = '';
    document.getElementById('email-error').textContent = '';
    document.getElementById('program-error').textContent = '';
    document.getElementById('message-error').textContent = '';

    if (!name) {
        valid = false;
        document.getElementById('name-error').textContent = 'Please enter your name.';
    }
    if (!number) {
        valid = false;
        document.getElementById('number-error').textContent = 'Please enter your phone number.';
    }
    if (!email) {
        valid = false;
        document.getElementById('email-error').textContent = 'Please enter your email address.';
    }
    if (program === "0") {
        valid = false;
        document.getElementById('program-error').textContent = 'Please select a program.';
    }
    if (!message) {
        valid = false;
        document.getElementById('message-error').textContent = 'Please enter a message.';
    }

    if (!valid) {
        event.preventDefault(); // Prevent form submission
    }
});
</script>


<!-- jquery  -->
<script src="js/jquery-3.6.0.min.js"></script>
<!-- bootstrap  -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- slck slider  -->
<script src="js/slick.min.js"></script>
<!-- mannific popup js  -->
<script src="js/jquery.magnific-popup.js"></script>
<!-- custom js file  -->
<script src="js/main.js"></script>

</html>