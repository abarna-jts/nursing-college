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
                <h4 class="crumb-title"><span>Blog</span> & News</h4>
            </div>
        </div>
    </div>
    <!-- crumbs area end -->
    <!-- blog area start -->
    <div class="feature-blog  pt--120 pb--70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title">
                        <span class="text-uppercase">Top stories</span>
                        <h2>Blog & news</h2> 
                    </div>
                </div>
            </div>
            <div class="row">
                  
                    <div class="blog-carousel owl-carousel card-deck pl-5">        
                            <div class="card mb-5" style="height:650px;"> 
                                <img class="card-img-top" src="assets/images/bl1_img.png" alt="image">
                                <div class="card-body p-25"> 
                                    <ul class="list-inline primary-color mb-3">
                                        <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                        <li><i class="fa fa-comments"></i> 3 Comments</li>
                                    </ul>
                                <h4 style="height:2.5em;" class="card-title mb-4"><a href="#" onclick="showBlog1()">Exploring Different Types of Nursing Degrees</a></h4>
                                <p class="card-text">Doctor in Nursing Practice programs is for highly passionate nursing students interested in conducting research documentation in clinical practices. Doctor in Nursing Practice programs is for highly passionate Nursing Student. They are also trained to lead the medical team. </p> 
                                <a class="btn btn-primary btn-round btn-sm" onclick="showBlog1()" style="color:#fff;"> Read More </a>
                                </div>
                            </div>
                    
                        <!-- card -->                
                            <div class="card mb-5" style="height:650px;"> 
                                <img class="card-img-top" src="assets/images/bl_2_img.png" alt="image">
                                <div class="card-body p-25"> 
                                    <ul class="list-inline primary-color mb-3">
                                        <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-comments"></i> 3 Comments</li>
                                    </ul>
                                    <h4 style="height:2.5em;" class="card-title mb-4"><a href="#" onclick="showBlog2()">The Top 5 Skills You Need to Be a Successful Nurse</a></h4>
                                    <p class="card-text">It’s a beautiful thing when career and passion come together. It is also true for nurses. If you are an aspiring nurse, you must have specific skills and characteristics which will bring success. Nursing is not just a job. It is more than an occupation; It requires caring for patient.</p> 
                                    <a class="btn btn-primary btn-round btn-sm" onclick="showBlog2()" style="color:#fff;"> Read More </a>
                                </div>
                            </div>
                            <!-- card -->
                
                            <div class="card mb-5" style="height:650px;"> 
                                <img class="card-img-top" src="assets/images/bl2.png" alt="image">
                                <div class="card-body p-25"> 
                                    <ul class="list-inline primary-color mb-3">
                                        <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                        <li><i class="fa fa-comments"></i> 3 Comments</li>
                                    </ul>
                                <h4 style="height:2.5em;" class="card-title mb-4"><a href="#" onclick="showBlog3()">B.Sc Nursing Scope and Carrier</a></h4>
                                <p class="card-text">Successfully graduating with B.Sc nursing makes students eligible for various private and public sector nursing jobs.The standard of nursing education in India is considered to be of high value. The trained nurses do not require any other additional training assistance.</p> 
                                <a class="btn btn-primary btn-round btn-sm" onclick="showBlog3()" style="color:#fff;"> Read More </a>
                                </div>
                            </div><!-- card -->         
                        <!-- <div class="card mb-5"> 
                            <img class="card-img-top" src="assets/images/blog/blog-thumbnail1.jpg" alt="image">
                            <div class="card-body p-25"> 
                                <ul class="list-inline primary-color mb-3">
                                    <li><i class="fa fa-clock-o"></i> AUGUST 6, 2017</li>
                                    <li><i class="fa fa-comments"></i> 3 Comments</li>
                                </ul>
                            <h4 class="card-title mb-4"><a href="blog-details.html">The Power of Teamwork in Nursing Care</a></h4>
                            <p class="card-text">Nursing is one of the key pillars that underpins the delivery of exceptional patient care is teamwork.Nursing is a multidimensional profession</p> 
                            <a class="btn btn-primary btn-round btn-sm" onclick="showBlog4()" href="blog-details.html"> Read More </a>
                            </div>
                        </div>card     -->
                       
                    </div><!-- blog-carousel -->
                
            </div><!-- blog-carousel -->
        </div>
    </div> 
    <!-- blog area end -->


    <!-- cta area start -->
    <div class="cta-area secondary-bg has-color ptb--50"> 
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
        window.location.href = `blog-details.php#blog1`;
    }
    function showBlog2() {
        // Redirect to blockdetails.html with the selected blog ID
        localStorage.setItem('selectedBlog', 'blog2');
        window.location.href = `blog-details.php#blog2`;
    }
    function showBlog3() {
        // Redirect to blockdetails.html with the selected blog ID
        localStorage.setItem('selectedBlog', 'blog3');
        window.location.href = `blog-details.php#blog3`;
    }
</script>
</html>