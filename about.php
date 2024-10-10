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
.abt-right-thumb {
        padding: 0;
        margin-top: 20px;
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
}
</style>
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
    <div class="crumbs-area" >
        <div class="container">
            <div class="crumb-content">
                <h4 class="crumb-title"><span>About </span>Us</h4>
            </div>
        </div>
    </div>
    <!-- crumbs area end --> 
    <!-- about area start -->
    <div class="about-area ptb--120">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-left-content">
                        <div class="section-title">
                             <span class="text-uppercase">about us</span>
                            <h2>Welcome to</h2><h2><span class="primary-color">Sri Kumaran School of Nursing</span></h2> 
                        </div>
                        <p class="ml-2">Situated in Tamil Nadu, Sri Kumaran School of Nursing is a premier Institute incepted in 2011. A leading institute in the city offers a UG Diploma course in Nursing. The course is available in Full Time mode. Sri Kumaran School of Nursing is a well-known institution for GNM course. These programs are delivered by highly experienced faculty. Sri Kumaran School of Nursing offers course that is recognized by reputed approving body like INC. Course offered by Sri Kumaran School of Nursing is available for a total of 20 candidates. Institute has good facilities all around the campus like Auditorium, Cafeteria, Girls Hostel, Gym, Hospital / Medical Facilities, Hostel, Labs, Library, Sports Complex, Wi-Fi Campus.</p>
                        <p class="ml-2">The various departments available are Medicine, Surgery, Gynecology, Pediatric, Orthopaedic, ENT, Ophthalmology, Psychiatric, Maternity, Infertility, Cardiology, Nephrology, Neurology, Neurosurgery, Plastic and Reconstructive surgery, oncology and so on. And also available ICCU, Casualty, Physiotherapy, Pathology & Bio Chemistry laboratory, Chest clinic, Operation theaters, Dental unit, Dermatology, Well women clinic, Pharmacy and Ambulance service at round the clock. The School of Nursing also has tie-up with private hospitals and research centres in Chennai. The purpose of this program is to enable the students to get a broader vision of nursing care and get immediate placement with high salary in India and abroad.</p>
                        <!-- <a href="#" class="btn btn-primary btn-round">Read more</a> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="abt-right-thumb">
                        <div class="abt-rt-inner">
                        <a class="expand-video" href="#" data-bs-toggle="modal" data-bs-target="#videoModal" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1;">
                            <i class="fa fa-play"></i>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <video id="myVideo" width="100%" autoplay loop controls>
                        <source src="assets/video/clg-video1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->
    <!-- take toure area start -->
    <div class="take-toure-area ptb--60">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="section-title sec-style-two">
                        <img class="title-top-shape" src="assets/images/logo/title-top-shape.png" alt="image">
                        <span class="text-uppercase">Take A Tour</span>
                        <h2>Video Tour on Edification</h2>
                    </div>
                </div>
            </div>
            <div class="video-area">
                <a class="expand-video" href="#" data-bs-toggle="modal" data-bs-target="#videoModal1" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1;">
                    <i class="fa fa-play"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="modal fade" id="videoModal1" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <video id="myVideo" width="100%" autoplay loop controls>
                        <source src="assets/video/clg-video.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>
    <!-- take toure area end -->
 

    <!-- teacher area start -->
    <div class="teacher-area pb--70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="section-title">
                        <span class="text-uppercase">Learn from best</span>
                        <h2>Our Professors</h2> 
                    </div>
                </div>
            </div>
            <div class="commn-carousel owl-carousel card-deck ml-1">   
                <div class="card mb-5" style="height:50%;"> 
                    <img src="assets/images/professor-3.jpg" alt="image"> 
                    <div class="card-body teacher-content p-25">  
                        <h4 class="card-title mb-4">Rajesh Kumar</h4>
                        <span class="primary-color font-italic d-block mb-3">Senior Professor</span>
                        <br>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fab fa-github"></i></a></li>
                        </ul> 
                    </div>
                </div><!-- card -->    

              <div class="card mb-5" style="height:50%;"> 
                <img src="assets/images/dr_3.jpg" alt="image"> 
                <div class="card-body teacher-content p-25">  
                  <h4 class="card-title mb-4">Sharmila</h4>
                  <span class="primary-color font-italic d-block mb-3">Assistant Professor</span>
                 <br>
                  <ul class="list-inline">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-github"></i></a></li>
                  </ul>
                </div>
              </div><!-- card -->    

              <div class="card mb-5" style="height:50%;"> 
                <img src="assets/images/dr_4_1.png" alt="image"> 
                <div class="card-body teacher-content p-25">  
                  <h4 class="card-title mb-4">Bindu</h4>
                  <span class="primary-color font-italic d-block mb-3">Professor</span>
                 <br>
                  <ul class="list-inline">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-github"></i></a></li>
                  </ul>
                </div>
              </div><!-- card -->  
              <div class="card mb-5" style="height:50%;"> 
                <img src="assets/images/dr_vijay.png" alt="image"> 
                <div class="card-body teacher-content p-25">  
                  <h4 class="card-title mb-4">Vijay</h4>
                  <span class="primary-color font-italic d-block mb-3">Associate Professor</span>
                  <br>
                  <ul class="list-inline">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-github"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div><!-- card -->         
            </div>
        </div>
    </div>
    <!-- teacher area end -->
 
     <!-- cta area start --> 
     <div class="cta-area primary-bg has-color ptb--50"> 
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <div class="cta-content">
                        <p class="mb-2">Click to Join the Advance Workshop</p>
                        <h2>Training in advance networking</h2>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cta-btn">
                        <a class="btn btn-light btn-round" href="#">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cta area end -->

    <!-- footer area start -->
    <?php include("footer.php"); ?>
    <!-- footer area end -->
 
<script>
    // Play the video when the modal opens
    var videoModal = document.getElementById('videoModal');
    videoModal.addEventListener('shown.bs.modal', function() {
        var video = document.getElementById('myVideo');
        video.play();
    });

    // Pause the video when the modal is closed
    videoModal.addEventListener('hidden.bs.modal', function() {
        var video = document.getElementById('myVideo');
        video.pause();
        video.currentTime = 0; // Reset video time to the beginning
    });
</script>
<script>
    // Play the video when the modal opens
    var videoModal1 = document.getElementById('videoModal1');
    videoModal1.addEventListener('shown.bs.modal', function() {
        var video = document.getElementById('myVideo');
        video.play();
    });

    // Pause the video when the modal is closed
    videoModal1.addEventListener('hidden.bs.modal', function() {
        var video = document.getElementById('myVideo');
        video.pause();
        video.currentTime = 0; // Reset video time to the beginning
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>