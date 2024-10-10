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
}
</style>
    <!-- header area end -->
    <!-- offset search area start -->
    <div class="offset-search">
        <form action="#">
            <input type="text" name="search" placeholder="Sarch here...">
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
                <h4 class="crumb-title"><span>Our</span> Courses</h4>
            </div>
        </div>
    </div>
    <!-- crumbs area end -->
    <!-- course area start -->
    <div class="course-area  pt--0 pb--70">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="section-title">
                        <span class="text-uppercase">Build your career</span>
                        <h2>Featured Courses </h2> 
                    </div>
                </div>
            </div>
  
            <div class="commn-carousel owl-carousel card-deck ml-1"> 
                <div class="card mb-5 text-center text-md-left">
                    <div class="course-thumb">
                        <img src="assets/images/course1_img.png" alt="image">
                        
                    </div>
                    <div class="card-body p-25"> 
                        <div class="course-meta-title mb-4">
                            <div class="course-meta-text">
                                <h4><a href="#" onclick="showBlog1()">Diploma in General Nursing and Midwifery (GNM)</a></h4>
                                <ul class="course-meta-stats">
                                    <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                    <li>36 <i class="fa fa-comment"></i></li>
                                    <li>85 <i class="fa fa-heart"></i></li>
                                </ul>
                            </div> 
                            
                        </div>
                        <p class="text_content course-p">The (GNM) courses of 3.5 years duration, On successful completion of the course a Diploma in General Nursing and Midwifery (GNM) is awarded by the Government of Tamil Nadu Board for Nursing Education recognized by the Tamil Nadu Nursing Council & Indian Nursing Council, New Delhi. GNM is the best course in Our College.</p> 
                        <a class="btn btn-primary btn-round btn-sm" href="#" onclick="showBlog1()"> Read More </a>
                        
                        <ul class="course-meta-details list-inline  w-100 mt-5">
                            <li> 
                             <p>Course</p>
                             <span>3.5 Year</span>
                            </li>
                            <li>
                             <p>Class Size</p>
                              <span>18</span>
                            </li> 
                            <li>
                             <p>Class Time</p>
                              <span>1 hour</span>
                            </li>      
                        </ul>  
                  </div><!-- card-body -->
                </div><!-- card -->
 
                <div class="card mb-5">
                    <div class="course-thumb">
                        <img src="assets/images/course2_img.png" alt="image">
                        
                    </div>
                    <div class="card-body  p-25"> 
                        <div class="course-meta-title mb-4">
                            <div class="course-meta-text">
                                <h4><a href="#" onclick="showBlog2()">BSc Nursing Course
                                </a></h4>
                                <ul class="course-meta-stats">
                                    <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                    <li>36 <i class="fa fa-comment"></i></li>
                                    <li>85 <i class="fa fa-heart"></i></li>
                                </ul>
                            </div> 
                           
                        </div>
                        <p class="text_content course-p">BSc Nursing course is a bachelor's degree program that trains students in areas of critical care and incorporates values necessary to become nurses and midwives. The undergraduate program is of 4 years duration followed by 6 months of mandatory internship. Students will take part in classroom study, projects. </p> 
                        <a class="btn btn-primary btn-round btn-sm" href="#" onclick="showBlog2()"> Read More </a>
                        <ul class="course-meta-details list-inline  w-100 mt-5">
                            <li> 
                             <p>Course</p>
                             <span>4 Year</span>
                            </li>
                            <li>
                             <p>Class Size</p>
                              <span>18</span>
                            </li> 
                            <li>
                             <p>Class Time</p>
                              <span>2 hour</span>
                            </li>      
                        </ul>  
                  </div><!-- card-body -->
                </div><!-- card -->
  
                <div class="card mb-5">
                    <div class="course-thumb">
                        <img src="assets/images/course3_img.png" alt="image">
                        
                    </div>
                    <div class="card-body  p-25"> 
                        <div class="course-meta-title mb-4">
                            <div class="course-meta-text">
                                <h4><a href="#" onclick="showBlog3()">MSc Nursing Course</a></h4>
                                <ul class="course-meta-stats">
                                    <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                    <li>36 <i class="fa fa-comment"></i></li>
                                    <li>85 <i class="fa fa-heart"></i></li>
                                </ul>
                            </div> 
                            
                        </div>
                        <p class="text_content course-p">A two-year postgraduate programme called M.Sc. Nursing focuses on the study of advanced nursing topics, clinical nursing, nursing education, research, and statistics, among other things. Students who enroll in M.Sc.Nursing programmes are prepared for a variety of careers, staff nurse, supervisor, assistant, etc. </p> 
                        <a class="btn btn-primary btn-round btn-sm" href="#" onclick="showBlog3()"> Read More </a>
                        <ul class="course-meta-details list-inline  w-100 mt-5">
                            <li> 
                             <p>Course</p>
                             <span>3 Year</span>
                            </li>
                            <li>
                             <p>Class Size</p>
                              <span>18</span>
                            </li> 
                            <li>
                             <p>Class Time</p>
                              <span>1 hour</span>
                            </li>      
                        </ul>  
                  </div><!-- card-body -->
                </div><!-- card --> 
            </div> 
        </div>
    </div>

    <!-- cta area start -->
    <div class="cta-area  secondary-bg has-color ptb--50"> 
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

<script>
    function showBlog1() {
        // Redirect to blockdetails.html with the selected blog ID
        localStorage.setItem('selectedBlog', 'blog1');
        window.location.href = `course-details.php#blog1`;
    }
    function showBlog2() {
        // Redirect to blockdetails.html with the selected blog ID
        localStorage.setItem('selectedBlog', 'blog2');
        window.location.href = `course-details.php#blog2`;
    }
    function showBlog3() {
        // Redirect to blockdetails.html with the selected blog ID
        localStorage.setItem('selectedBlog', 'blog3');
        window.location.href = `course-details.php#blog3`;
    }
</script>

</html>