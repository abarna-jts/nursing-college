<?php include("header.php"); ?>
<style>
    .logo a {
    display: inline-block;
    background: #fff;
    padding: 5px;
    border-radius: 7px;
}
@media (max-width:600px){
    .logo a {
    display: inline-block;
    background: transparent;
    padding: 0px;
    border-radius: 0px;
}
}
@media (min-width: 768px) and (max-width: 991px) {
    .logo a {
    display: inline-block;
    background: transparent;
    padding: 5px;
    /* border-radius: 7px; */
}
.slicknav_menu {
    margin: 0px 0;
    padding: 0;
}
.pt--120 {
        padding-top: 50px;
    }
}
/* .crumb-content h4 {
    font-family: "Roboto Slab", serif !important;
} */
</style>
<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"> -->


    <!-- header area end -->
    <!-- offset search area start -->
    <div class="offset-search">
        <form action="#">
            <input type="text" name="search" placeholder="Search here...">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- offset search area end -->
    <!-- body overlay area start -->
    <div class="body_overlay"></div>
    <!-- body overlay area end -->
    <!-- crumbs area start -->
    <div class="crumbs-area">
        <div class="container">
            <div class="crumb-content">
                <h4 class="crumb-title"><span>Contact </span> &amp; Us</h4>
            </div>
        </div>
    </div>
    <!-- crumbs area end -->
    <!-- contact info area start -->
    <div class="contact-info pt--120">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-lg-4 ml-auto">
                    <div class="cnt-info">
                        <h4>Contact Info</h4>
                        <p>No.129-B, By Pass Road, Near Kamatchi Amman Temple, RedHills, Chennai-600 052, Tamil Nadu.</p>
                        <ul class="address">
                            <li><i class="fa fa-phone"></i>+91 9444840174</li>
                            <li><i class="fa fa-phone"></i>+91 9003964333</li>
                            <li><i class="fa fa-envelope"></i>srikumaranschoolofnursing@gmail.com</li>
                            <li><i class="fa fa-envelope"></i>santhanaselvamk@gmail.com</li>
                        </ul>
                        <ul class="social list-inline mt-5">
                            <li><a href="https://www.facebook.com/retterikumaranhospital"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/i/flow/login?redirect_after_login=%2FRetterikumaran1"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4 mr-auto">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.6640045694817!2d80.10174228523879!3d13.057046180182342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5261e77e8da189%3A0x9001819a40067ccb!2sPoonamallee%20Bypass%20Rd%2C%20Poonamallee%2C%20Chennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1704448608571!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact info area end -->
    <!-- contact form area start -->
    <div class="contact-form-area pt-5 pb--90">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="cnt-title">
                        <h4>Get in touch <span>with us</span></h4>
                        <p>We Inform you later.  Please fill the below details.</p>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <form action="contact-mail.php" method="POST" name="form" id="form">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" name="name_st" placeholder="Enter your name" id="name" required 
                            oninvalid="this.setCustomValidity('Please select all questions and proceed')"
                            oninput="this.setCustomValidity('')">
                        </div>
                        <div class="col-md-4">
                            <input type="email" name="emailid" placeholder="Your Email" id="emailid" required 
                            oninvalid="validateEmail(this)"
                            oninput="this.setCustomValidity('')">
                        </div>
                        <div class="col-md-4">
                            <input type="number" name="phone" placeholder="Phone" id="phone" required 
                            oninvalid="this.setCustomValidity('Please select all questions and proceed')"
                            oninput="this.setCustomValidity('')">
                        </div>
                        <div class="col-12">
                            <textarea name="msg" id="msg" placeholder="Your message here" value="msg" required 
                            oninvalid="this.setCustomValidity('Please select all questions and proceed')"
                            oninput="this.setCustomValidity('')"></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" name="submit" id="submit">SEND TO US</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- contact form area end --> 

    <!-- thank you message area start -->
    <!-- <div class="vh-100 d-flex justify-content-center align-items-center" id="greeting">
        <div>
            <div class="mb-4 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75"
                    fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </svg>
            </div>
            <div class="text-center">
                <h1>Thank You !</h1>
                <p style="font-size: 1.4em;">Your Information was successfully submitted.</p>
                <p style="font-style: italic;">We'll contact you when a decision is made.</p>
                 <button class="btn btn-primary" onclick="NxtPage()">Back Home</button> -->
            <!-- </div>
        </div>
    thank you message area end  -->
<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Success!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Your message has been successfully sent. We will get back to you shortly!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
    <!-- footer area start -->
    <?php include("footer.php"); ?>
    <!-- footer area end -->
 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsUcTjt43mTheN9ruCsQVgBE-wgN6_AfY&#038"></script>
    <script src="assets/js/google-maps.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
<script>
    document.getElementById('form').onsubmit = function(event) {
        event.preventDefault(); // Prevent default form submission

        var formData = new FormData(this);

        fetch('contact-mail.php', {
            method: 'POST',
            body: formData,
        })
        .then(response => response.text())
        .then(result => {
            if (result.trim() === 'success') {
                $('#successModal').modal('show'); // Show the success modal
            } else {
                alert('There was an error sending the message.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    };
</script>

<!-- <script>
function validate() {
    const form = document.querySelector("#form")
   const submitButton = document.querySelector("#submit")
   const scriptURL = 'https://script.google.com/macros/s/AKfycbzzt22FtWbuI6nCdiCZsqpfmNX4nb0SpCbvV66GFktOLgQyZLJewju66-FpUDhHQqJU2A/exec'
                                 
   form.addEventListener('submit', e => {
     submitButton.disabled = true;
     e.preventDefault();

     let requestBody = new FormData(form);
     fetch(scriptURL, {method: 'POST', body: requestBody,})
       .then(response => {
        //   alert('Success!', response);
          submitButton.disabled = false;

          const greetingContainer = document.createElement('div');
                greetingContainer.className = 'vh-100 d-flex justify-content-center align-items-center';
                greetingContainer.id = 'greeting';

                greetingContainer.innerHTML = `
                    <div>
                        <div class="mb-4 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75"
                                fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                        </div>
                        <div class="text-center">
                            <h1>Thank You !</h1>
                            <p style="line-height:1em;">Your Information was successfully submitted.</p>
                            <p style="font-style: italic;" >We'll contact you when a decision is made.</p>
                            <button class="btn btn-primary"  id="closeButton" onclick="nextpage()">Close</button>
                        </div>
                    </div>
                `;

                document.body.appendChild(greetingContainer);

                // Add event listener to close button
                const closeButton = document.getElementById('closeButton');
                closeButton.addEventListener('click', () => {
                    document.body.removeChild(greetingContainer);
                });
            })
            .catch(error => {
                alert('Error!', error.message);
                submitButton.disabled = false;
            });
    });
}
document.querySelector('#form').addEventListener('submit', function (e) {
    e.preventDefault();
    validate();
});

function validateAge(input) {
        if (input.validity.valueMissing) {
            input.setCustomValidity('Please select all questions and proceed');
        } else if (input.validity.patternMismatch) {
            input.setCustomValidity('Age should only contain numeric characters');
        }
    }

function validateContactNumber(input) {
        if (input.validity.valueMissing) {
            input.setCustomValidity('Please select all questions and proceed');
        } else if (input.validity.patternMismatch) {
            input.setCustomValidity('Number should contain atleast 10 numeric characters');
        }
    }

function validateEmail(input) {
        if (input.validity.valueMissing) {
            input.setCustomValidity('Please select all questions and proceed');
        } else if (input.validity.typeMismatch) {
            input.setCustomValidity('Enter a valid email address. Please include "@" and ".com"');
        }
    }
function nextpage(){
    window.location.href="contact.html";
}


</script>  -->
</html>




















