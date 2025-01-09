<!DOCTYPE html>
<html class="no-js" lang="zxx" dir="ltr">


<!-- Mirrored from htmldemo.net/mitech/index-infotechno.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Jul 2024 06:25:09 GMT -->
<head>
    
    <!-- Favicon -->



     <!--top links--->

    <?php include 'components/top_links.php'; ?>

    <!--top links--->

    <style>
  /* Container for the images */
  .image-container {
    position: relative;
    width: 300px; /* Adjust width as needed */
    height: 300px; /* Adjust height as needed */
    perspective: 1000px; /* Perspective for 3D effect */
    float:inline-end;
  }
  
  /* Base image */
  .base-image {
    width: 100%;
    height: 100%;
    display: block;
    transition: transform 0.5s ease;
    border-radius: 10px; /* Rounded corners for the image */
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3); /* Shadow effect */
  }
  
  /* Overlay image */
  .overlay-image {
    position: absolute;
    top: 10%;
    left: 10%;
    width: 80%; /* Adjust size of overlay image */
    height: 80%; /* Adjust size of overlay image */
    display: block;
    transform: rotateY(-30deg) translateZ(20px); /* Initial 3D transform */
    transition: transform 0.5s ease;
    border-radius: 10px; /* Rounded corners for the image */
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.4); /* Shadow effect */
  }
  
  /* Hover effect */
  .image-container:hover .base-image {
    transform: rotateY(30deg) translateZ(-20px); /* Rotate and move back */
  }
  
  .image-container:hover .overlay-image {
    transform: rotateY(0deg) translateZ(0); /* Rotate to front */
  }
  .image-container:to-right {
  display: flex;
  justify-content: flex-end;
  padding: 50px; /* Adjust spacing as needed */
}
</style>
</head>

<body>

    

    <!--====================  header area ====================-->

        <!-- Header Bottom Wrap Start -->
        <?php include 'components/header.php' ; ?>
        <!-- Header Bottom Wrap End -->

    <!--====================  End of header area  ====================-->



    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <!--============ Infotechno Hero Start ============-->
            <div class="infotechno-hero infotechno-bg">
                <div class="container-fluid">
                    <div class="row " style="background: linear-gradient(135deg, #feda75, #fa7e1e, #d62976, #962fbf, #4f5bd5);;" ><!--baseline-->
                        <div class="col-lg-6 col-md-6">
                            <div class="infotechno-hero-text  wow move-up">
                               <h6 style="padding: 32px;
                               color: #dbf113;
                               margin-top: 20px;">#1 Software Company In World</h6>
                               <h1 _ngcontent-ovb-c14="" class="fw-bold display-5 white-text">Advanced Feature to Grow Your Business</h1>
                                <h6 style="color: white;" >Proactively coordinate quality vectors vis-a-vis supply chains engage client-centric web services. </h6>
                                <div class="hero-button  mt-30">
                                    <a href="#" class="ht-btn ht-btn-md">Get details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="infotechno-hero-inner-images">
                                <div class="infotechno-inner-one">
                                    <img class="img-fluid" src="assets/images/award/preloader.png" alt="">
                                </div>
                                <div class="infotechno-inner-two  wow move-up">
                                    <img class="img-fluid" src="assets/images/hero/home-infotechno-main-slider-slide-01-image-02.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--============ Infotechno Hero End ============-->
           
            <!--====================  End of brand logo slider area  ====================-->
            <!--===========  feature-images-wrapper  Start =============-->
            <div class="feature-images-wrapper bg-gray section-space--ptb_100">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section-title-wrap Start -->
                            <div class="section-title-wrap text-center">
                                <h3 class="heading"> <br><span class="text-color-primary"> our services</span></h3>
                                <h5 style="color: grey;">Team of experts is highly skilled and experienced in their field, and we are committed to delivering the best results for our clients.</h5>
                            </div>
                            <!-- section-title-wrap Start -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="feature-images__one">
                                <div class="row">

                                    <div class="col-lg-4 col-md-6 wow move-up">
                                        <!-- ht-box-icon Start -->
                                        <div class="ht-box-images style-01">
                                            <div class="image-box-wrap">
                                                <div class="box-image">
                                                    <img class="img-fulid" src="assets/images/award/icons8-android-os-64.png" alt="">
                                                </div>
                                                <div class="content">
                                                    <h5 class="heading">Android & Web development </h5>
                                                    <div class="text">We offer professional android $ web development services to help businesses of all sizes develop high-quality, feature-rich apps $ webs that engage users and drive results.
                                                    </div>
                                                    <div class="circle-arrow">
                                                        <div class="middle-dot"></div>
                                                        <div class="middle-dot dot-2"></div>
                                                        <a href="#">
                                                            <i class="fas fa-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>

                                    <div class="col-lg-4 col-md-6 wow move-up">
                                        <!-- ht-box-icon Start -->
                                        <div class="ht-box-images style-01">
                                            <div class="image-box-wrap">
                                                <div class="box-image">
                                                    <img class="img-fulid" src="assets/images/icons/icons8-robot-64.png" alt="">
                                                </div>
                                                <div class="content">
                                                    <h5 class="heading">Artificial Intelligence</h5>
                                                    <div class="text">our AI services to streamline operations, foster creativity, and elevate your business strategy. Our solutions are designed to optimize efficiency, drive innovation, and maintain a competitive edge.
                                                    </div>
                                                    <div class="circle-arrow">
                                                        <div class="middle-dot"></div>
                                                        <div class="middle-dot dot-2"></div>
                                                        <a href="#">
                                                            <i class="fas fa-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>

                                    <div class="col-lg-4 col-md-6 wow move-up">
                                        <!-- ht-box-icon Start -->
                                        <div class="ht-box-images style-01">
                                            <div class="image-box-wrap">
                                                <div class="box-image">
                                                    <img class="img-fulid" src="assets/images/award/icons8-cloud-link-64.png" alt="">
                                                </div>
                                                <div class="content">
                                                    <h5 class="heading">Cloud Computing</h5>
                                                    <div class="text">Whether you're looking to migrate to the cloud, improve your existing cloud infrastructure, or develop a new cloud-based solution, our team can help you achieve your goals..
                                                    </div>
                                                    <div class="circle-arrow">
                                                        <div class="middle-dot"></div>
                                                        <div class="middle-dot dot-2"></div>
                                                        <a href="#">
                                                            <i class="fas fa-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>

                                    <div class="col-lg-4 col-md-6 wow move-up">
                                        <!-- ht-box-icon Start -->
                                        <div class="ht-box-images style-01">
                                            <div class="image-box-wrap">
                                                <div class="box-image">
                                                    <img class="img-fulid" src="assets/images/award/icons8-link-64.png" alt="">
                                                </div>
                                                <div class="content">
                                                    <h5 class="heading">Blockchain technology</h5>
                                                    <div class="text">We offer professional blockchain technology services to help businesses of all sizes improve security, transparency, and efficiency.
                                                    </div>
                                                    <div class="circle-arrow">
                                                        <div class="middle-dot"></div>
                                                        <div class="middle-dot dot-2"></div>
                                                        <a href="#">
                                                            <i class="fas fa-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>

                                    <div class="col-lg-4 col-md-6 wow move-up">
                                        <!-- ht-box-icon Start -->
                                        <div class="ht-box-images style-01">
                                            <div class="image-box-wrap">
                                                <div class="box-image">
                                                    
                                                    <img class="img-fulid" src="assets/images/award/icons8-apple-vision-pro-64.png" alt="">
                                                </div>
                                                <div class="content">
                                                    <h5 class="heading">AR & VR</h5>
                                                    <div class="text">Our team of experienced VR & AR developers and designers use the latest tools and technologies to create high-quality and stunning VR & AR experiences.
                                                    </div>
                                                    <div class="circle-arrow">
                                                        <div class="middle-dot"></div>
                                                        <div class="middle-dot dot-2"></div>
                                                        <a href="#">
                                                            <i class="fas fa-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>
                                    <div class="col-lg-4 col-md-6 wow move-up">
                                        <!-- ht-box-icon Start -->
                                        <div class="ht-box-images style-01">
                                            <div class="image-box-wrap">
                                                <div class="box-image">
                                                    <img class="img-fulid" src="assets/images/award/icons8-reading-64.png" alt="">
                                                </div>
                                                <div class="content">
                                                    <h5 class="heading">Research and development</h5>
                                                    <div class="text">Our R&D services are designed to help businesses like yours stay ahead of the curve by evaluating new technologies, and developing new products and services that meet the changing needs of your customers.
                                                    </div>
                                                    <div class="circle-arrow">
                                                        <div class="middle-dot"></div>
                                                        <div class="middle-dot dot-2"></div>
                                                        <a href="#">
                                                            <i class="fas fa-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>
                                </div>
                            </div>

                            <div class="section-under-heading text-center section-space--mt_60 section-space--pt_30">Challenges are just opportunities in disguise. <a href="#">Take the challenge!</a></div>

                        </div>
                    </div>
                </div>
            </div>
            <!--===========  feature-images-wrapper  End =============-->

            <!-- ============ Our Experience Wrapper Start =============== -->
            <div class="section-space--ptb_100 infotechno-section-bg-01">

                <div class="our-experience-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="section-title small-mb__40 tablet-mb__40">
            
                            <h2 _ngcontent-ovb-c14="">Who We Are</h2>
                            <p _ngcontent-ovb-c14="">Since its inception, Magenixs has established itself as a leading provider of technology solutions, providing services that range from software development to Codeigniter, Laravel, Angular, Flutter. The company's expertise lies in delivering innovative solutions that meet the specific needs of its clients. </p>
                                    <div class="sider-title-button-box mt-30">
                                        <a href="#" class="ht-btn ht-btn-md">Join us now</a>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="col-lg-5 offset-lg-2">
                                <div class="image-container">
                                    <img class="base-image" src="assets/images/award/slider2.jpg" alt="Base Image">
                                    <img class="overlay-image" src="assets/images/award/about_img2.jpg" alt="Overlay Image">
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--===========  feature-large-images-wrapper  Start =============-->
                <div class="feature-large-images-wrapper section-space--pt_100">
                    <div class="container">

                       
                        <div class="row">
                            <div class="col-12">
                                <div class="row row--35">

                                    <div class="col-lg-4 col-md-6 mt-30">
                                        <!-- Box large image warap Start -->
                                        <a href="#" class="box-large-image__wrap wow move-up">
                                            <div class="box-large-image__box">
                                                <div class="box-large-image__midea">
                                                    <div class="images-midea">
                                                        <img src="assets/images/award/3d-rendering-blockchain-technology_23-2151480194.jpg" width="330" height="330" class="img-fluid" alt="">

                                                        <div class="button-wrapper">
                                                            <div class="btn tm-button">
                                                                <span class=text>Explore</span>
                                                            </div>
                                                        </div>
                                                        <div class="heading-wrap">
                                                            <h5 class="heading">Blockchain</h5>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="box-large-image__content mt-30 text-center">
                                                    <h7>Blockchain technology offers a decentralized and secure way to record transactions across a network of computers. Each transaction is recorded in a block, and these blocks are linked together in a chronological chainensuring transparency and immutability.</h7>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Box large image warap End -->
                                    </div>

                                    <div class="col-lg-4 col-md-6  mt-30">
                                        <!-- Box large image warap Start -->
                                        <a href="#" class="box-large-image__wrap wow move-up">
                                            <div class="box-large-image__box">
                                                <div class="box-large-image__midea">
                                                    <div class="images-midea">
                                                        <img src="assets/images/award/abstract-world-blockchain-technology-cryptocurrency-fintech-square-cubes_5095-1260.jpg" width="330" height="330" class="img-fluid" alt="">

                                                        <div class="button-wrapper">
                                                            <div class="btn tm-button">
                                                                <span class="button-text">Explore</span>
                                                            </div>
                                                        </div>
                                                        <div class="heading-wrap">
                                                            <h5 class="heading">Cloud Computing</h5>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="box-large-image__content mt-30 text-center">
                                                    <h7>Cloud computing revolutionizes how we manage and access technology by offering scalable resources over the internet. It allows businesses to store, process, and analyze vast amounts of data without investing in expensive physical infrastructure.</h5>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Box large image warap End -->
                                    </div>


                                    <div class="col-lg-4 col-md-6  mt-30">
                                        <!-- Box large image warap Start -->
                                        <a href="#" class="box-large-image__wrap wow move-up">
                                            <div class="box-large-image__box">
                                                <div class="box-large-image__midea">
                                                    <div class="images-midea">
                                                        <img src="assets/images/award/immersiveexpp-2-60a262091460d.jpg" width="330" height="330" class="img-fluid" alt="">

                                                        <div class="button-wrapper">
                                                            <div class="btn tm-button">
                                                                <span class="button-text">Explore</span>
                                                            </div>
                                                        </div>
                                                        <div class="heading-wrap">
                                                            <h5 class="heading">AR & VR</h5>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="box-large-image__content mt-40 text-center">
                                                    <h7>Explore immersive virtual reality experiences where you can dive into stunning 360-degree worlds and interact with lifelike environments. Engage with cutting-edge games that offer intuitive controls and realistic graphics.</h7>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Box large image warap End -->
                                    </div>
                                </div>

                                <div class="section-under-heading text-center section-space--mt_40"><a href="#">Learn more about how we work span <i class="ml-1 button-icon fas fa-arrow-right"></i></a></div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--===========  feature-large-images-wrapper  End =============-->


            </div>
            <!-- ============ Our Experience Wrapper End =============== -->
            <!--=========== fun fact Wrapper Start ==========-->
            <!--=========== fun fact Wrapper End ==========-->
            <!--=========== Infotechno Video Wrapper Start ==========-->
            <div class="accordion-wrapper section-space--ptb_100">
                <div class="container-fluid">
                    <div class="row " style="background: linear-gradient(135deg, #feda75, #fa7e1e, #d62976, #962fbf, #4f5bd5);">
                        <div class="col-lg-6" style="margin-bottom: 20px;" >
                            <div class="faq-wrapper faq-custom-col">

                                <div class="section-title section-space--mb_40">
                                    
                                    <h3 class="heading">We create visually-stunning VR experiences that meet the unique needs of your business</h3>
                                    <p style="color: rgb(252, 250, 250);"> Technology allows users to immerse themselves in a computer-generated 3D environment, creating a sense of presence in a virtual world. </p>

                                </div>
                               
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Compellingly engage corporate scenarios for monetize<span> <i class="fas fa-chevron-down"></i>
                                            <i class="fas fa-chevron-up"></i> </span>
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                            <div class="card-body">
                                                <h5> 55% Compellingly engage corporate scenarios for monetize</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Conveniently target enterprise vortals for process-centric<span> <i class="fas fa-chevron-down"></i>
                                            <i class="fas fa-chevron-up"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                            <div class="card-body">
                                                <h5> 5K+ Conveniently target enterprise vortals for process-centric.</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Completely strategize long-term high-impact paradigms<span> <i class="fas fa-chevron-down"></i>
                                            <i class="fas fa-chevron-up"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                                            <div class="card-body">
                                                <h5>15M+ Completely strategize long-term high-impact paradigms. </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFour">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
                                                    Uniquely negotiate compelling platforms via standardized.<span> <i class="fas fa-chevron-down"></i>
                                            <i class="fas fa-chevron-up"></i> </span>
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseFour" class="collapse " aria-labelledby="headingFour" data-bs-parent="#accordion">
                                            <div class="card-body">
                                                <h5> 95% Uniquely negotiate compelling platforms via standardized.</h5>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="rv-video-section">

                                <div class="ht-banner-01 ">
                                    <img class="img-fluid border-radus-5 animation_images one wow fadeInDown animated" src="assets/images/award/augmented-reality-uqxbl4qajkaoxmwt (1).jpg" alt="" style="visibility: visible; animation-name: animateUpDown;">
                                </div>

                                <div class="ht-banner-02">
                                    <img class="img-fluid border-radus-5 animation_images two wow fadeInDown animated" src="assets/images/award/HD-wallpaper-viar-virtual-reality-neon-technology-art (1).jpg" alt="" style="visibility: visible; animation-name: animateUpDown;">
                                </div>

                                <div class="main-video-box video-popup">
                                    
                                        <div class="single-popup-wrap">
                                            <img class="img-fluid border-radus-5" src="assets/images/award/1684889622115.jpg" alt="">
                                            <div class="ht-popup-video video-button">
                                                <div class="video-mark">
                                                    <div class="wave-pulse wave-pulse-1"></div>
                                                    <div class="wave-pulse wave-pulse-2"></div>
                                                </div>
                                                <div class="">
                                                    <div class="">
                                                        <span class=""></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    

                                </div>


                                <div class="ht-banner-03">
                                    <img class="img-fluid border-radus-5 animation_images three wow fadeInDown animated" src="assets/images/award/1_UHqOYqV7AZrbqnYyrpdKlQ (1).jpg" alt="" style="visibility: visible; animation-name: animateUpDown;">
                                </div>

                                <div class="ht-banner-04">
                                    <img class="img-fluid border-radus-5 animation_images four wow fadeInDown animated" src="assets/images/award/4k-soldier-future-virtual-technology-wallpaper-preview (1).jpg" alt="" style="visibility: visible; animation-name: animateUpDown;">
                                </div>


                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <!--=========== Infotechno Video Wrapper End ==========-->
            <!--===========  Projects wrapper Start =============-->
            <div class="gradation-process-area section-space--ptb_100">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="gradation-title-wrapper section-space--mb_60">
                                <div class="gradation-title-wrap ">
                                    <h6 class="section-sub-title text-black mb-20">Process</h6>
                                    <h4 style="color: blue;">We Follow Our Work Process</h4>
                                        <p>We have some principles and statergy with ethics to develop our projects.</p>
                                </div>


                                <div class="gradation-sub-heading">
                                    <h3 class="heading"><mark></mark></h3>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ht-gradation style-01">
                                <!-- Single item gradation Start -->
                                <div class="item item-1 animate  wow fadeInRight" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                                    <div class="line"></div>
                                    <div class="circle-wrap">
                                        <div class="mask">
                                            <div class="wave-pulse wave-pulse-1"></div>
                                            <div class="wave-pulse wave-pulse-2"></div>
                                            <div class="wave-pulse wave-pulse-3"></div>
                                        </div>

                                        <h6 class="circle">1</h6>
                                    </div>

                                    <div class="content-wrap">

                                        <h5 class="heading">01. Research & Strategy</h5>

                                        <div class="text">Conducting market research, defining the target audience and their needs, and creating a content strategy.</div>

                                       
                                    </div>
                                </div>
                                <!-- Single item gradation End -->

                                <!-- Single item gradation Start -->
                                <div class="item item-1 animate  wow fadeInRight" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInRight;">
                                    <div class="line"></div>
                                    <div class="circle-wrap">
                                        <div class="mask">
                                            <div class="wave-pulse wave-pulse-1"></div>
                                            <div class="wave-pulse wave-pulse-2"></div>
                                            <div class="wave-pulse wave-pulse-3"></div>
                                        </div>

                                        <h6 class="circle">2</h6>
                                    </div>

                                    <div class="content-wrap">

                                        <h5 class="heading">02.Design & Development</h5>

                                        <div class="text">Creating a visually appealing website design, developing the website, and integrating the necessary functionality.</div>

                                        
                                    </div>
                                </div>
                                <!-- Single item gradation End -->

                                <!-- Single item gradation Start -->
                                <div class="item item-1 animate  wow fadeInRight" data-wow-delay="0.20s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                                    <div class="line"></div>
                                    <div class="circle-wrap">
                                        <div class="mask">
                                            <div class="wave-pulse wave-pulse-1"></div>
                                            <div class="wave-pulse wave-pulse-2"></div>
                                            <div class="wave-pulse wave-pulse-3"></div>
                                        </div>

                                        <h6 class="circle">3</h6>
                                    </div>

                                    <div class="content-wrap">

                                        <h5 class="heading">03.Testing & Launch</h5>

                                        <div class="text">Testing the website for performance, user experience, and functionality, and launching it to the public.</div>

                                       
                                    </div>
                                </div>
                                <!-- Single item gradation End -->

                                <!-- Single item gradation Start -->
                                <div class="item item-1 animate wow fadeInRight" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInRight;">
                                    <div class="line"></div>
                                    <div class="circle-wrap">
                                        <div class="mask">
                                            <div class="wave-pulse wave-pulse-1"></div>
                                            <div class="wave-pulse wave-pulse-2"></div>
                                            <div class="wave-pulse wave-pulse-3"></div>
                                        </div>

                                        <h6 class="circle">4</h6>
                                    </div>

                                    <div class="content-wrap">

                                        <h5 class="heading">04.Maintenance & Monitoring</h5>

                                        <div class="text">Regularly monitoring and updating the website to maintain its relevance and effectiveness.</div>

                                       
                                    </div>
                                </div>
                                <!-- Single item gradation End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================  End of testimonial section  ====================-->
             <!--====================  brand logo slider area ====================-->
            <div class="brand-logo-slider-area section-space--ptb_60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- brand logo slider -->
                            <div class="brand-logo-slider__container-area">
                                <div class="swiper-container brand-logo-slider__container">
                                    <div class="swiper-wrapper brand-logo-slider__one">
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="assets/images/award/560c4353b21b4948e5f0e9508ea07597.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="assets/images/award/560c4353b21b4948e5f0e9508ea07597.jpg" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="assets/images/award/laravel logo.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="assets/images/award/laravel logo.png" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="assets/images/award/images.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="assets/images/award/images.png" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="assets/images/award/codeignetier.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="assets/images/award/codeignetier.png  " class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="assets/images/award/angular9826.logowik.com.webp" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="assets/images/award/angular9826.logowik.com.webp" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="assets/images/award/d4747cb7dcbecb5223b83355ea97a3be.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="assets/images/award/d4747cb7dcbecb5223b83355ea97a3be.jpg" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="assets/images/award/com036-scaled.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="assets/images/award/com036-scaled.jpg" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="assets/images/award/metamask4112.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="assets/images/award/metamask4112.jpg" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="assets/images/award/blender4645.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="assets/images/award/blender4645.jpg" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================  End of brand logo slider area  ====================-->



            <!--====================  Blog Section Start ====================-->+
            <section    _ngcontent-mjb-c14="" class="customer-review-tab ptb-120 bg-gradient text-white position-relative z-2">
            <div style="background:linear-gradient(135deg, #feda75, #fa7e1e, #d62976, #962fbf, #4f5bd5); border-radius: 20px;
    padding: 20px;"  _ngcontent-mjb-c14="" class="container"><div _ngcontent-mjb-c14="" class="row justify-content-center align-content-center">
                <div _ngcontent-mjb-c14="" class="col-md-10 col-lg-6"> 

                    <div style="margin-left: 20px;" _ngcontent-mjb-c14="" data-aos="fade-right" data-aos-delay="50" class="section-heading text-center aos-init aos-animate">
                        <h4 _ngcontent-mjb-c14=""="h5 text-warning text-primary"  style="color: blue;">Testimonial</h4>
                        <h2 _ngcontent-mjb-c14="">What They Say About Us</h2>
                        <p style="color: rgb(245, 244, 250);">Uniquely promote adaptive quality vectors rather than stand-alone e-markets. pontificate alternative architectures whereas iterate.</p>
                    </div>
                </div>
            </div>
                        <div _ngcontent-mjb-c14="" class="row"><div _ngcontent-mjb-c14="" class="col-12"><div _ngcontent-mjb-c14="" id="testimonial-tabContent" class="tab-content">
                            <div _ngcontent-mjb-c14="" id="testimonial-tab-1" role="tabpanel" class="tab-pane fade active show"><div _ngcontent-mjb-c14="" class="row align-items-center justify-content-between">
                            <div _ngcontent-mjb-c14="" class="col-lg-6 col-md-6"><div style="margin-left: 20px;"  _ngcontent-mjb-c14="" data-aos="fade-right" data-aos-delay="100" class="testimonial-tab-content mb-5 mb-lg-0 mb-md-0 aos-init aos-animate">
                                <img _ngcontent-mjb-c14="" src="assets/images/testimonial/verified-svgrepo-com.svg" alt="testimonial quote" width="65" class="img-fluid mb-32"><div _ngcontent-mjb-c14="" class="blockquote-title-review mb-4">
                                    <h3 _ngcontent-mjb-c14="" class="mb-0 h4 fw-semi-bold">The Best Template You Got to Have it!</h3><ul _ngcontent-mjb-c14="" class="review-rate mb-0 list-unstyled list-inline"><li _ngcontent-mjb-c14="" class="list-inline-item">
                                        <i _ngcontent-mjb-c14="" class="fas fa-star text-warning"></i></li><li _ngcontent-mjb-c14="" class="list-inline-item"><i _ngcontent-mjb-c14="" class="fas fa-star text-warning"></i></li>
                                        <li _ngcontent-mjb-c14="" class="list-inline-item"><i _ngcontent-mjb-c14="" class="fas fa-star text-warning"></i></li>
                                        <li _ngcontent-mjb-c14="" class="list-inline-item"><i _ngcontent-mjb-c14="" class="fas fa-star text-warning"></i></li>
                                        <li _ngcontent-mjb-c14="" class="list-inline-item"><i _ngcontent-mjb-c14="" class="fas fa-star text-warning"></i></li></ul></div>
                                        <blockquote _ngcontent-mjb-c14="" class="blockquote"><p _ngcontent-mjb-c14="">"I've been using your software for a few months now and I am extremely pleased with its performance. The user interface is easy to navigate and the features are exactly what I need for my business. Keep up the good work!" </p></blockquote>
                            
                                        <div _ngcontent-mjb-c14="" class="author-info mt-4"><h6 _ngcontent-mjb-c14="" class="mb-0">Joe Richard</h6><span _ngcontent-mjb-c14="">Visual Designer</span></div></div></div>
                                        <div _ngcontent-mjb-c14="" class="col-lg-5 col-md-6"><div  _ngcontent-mjb-c14="" data-aos="fade-up" data-aos-delay="150" class="author-img-wrap pt-5 ps-5 aos-init aos-animate">
                                            <div _ngcontent-mjb-c14="" class="testimonial-video-wrapper position-relative">
                                                <img _ngcontent-mjb-c14="" src="assets/images/logo/1.jpg" alt="testimonial author" class="img-fluid rounded-custom shadow-lg">
                                                <div _ngcontent-mjb-c14="" class="customer-info text-white d-flex align-items-center"><a _ngcontent-mjb-c14="" href="-http://www.youtube.com/watch?v=hAP2QF--2Dg" class="video-icon popup-youtube text-decoration-none">
                                                    <i _ngcontent-mjb-c14="" class="fas fa-play"></i><span _ngcontent-mjb-c14="" class="text-white ms-2 small" ;> Watch Video</span></a></div><div _ngcontent-mjb-c14="" class="position-absolute bg-primary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div></div></div></div></div></div>
                                                    <div _ngcontent-mjb-c14="" id="testimonial-tab-2" role="tabpanel" class="tab-pane fade"><div _ngcontent-mjb-c14="" class="row align-items-center justify-content-between"><div _ngcontent-mjb-c14="" class="col-lg-6 col-md-6">
                                                        <div _ngcontent-mjb-c14="" data-aos="fade-right" data-aos-delay="100" class="testimonial-tab-content mb-5 mb-lg-0 mb-md-0 aos-init aos-animate"><img _ngcontent-mjb-c14="" src="assets/images/testimonial/verified-svgrepo-com.svg" alt="testimonial quote" width="65" class="img-fluid mb-32">
                                                            <div _ngcontent-mjb-c14="" class="blockquote-title-review mb-4"><h3 _ngcontent-mjb-c14="" class="mb-0 h4 fw-semi-bold">Embarrassed by the First Version.</h3><ul _ngcontent-mjb-c14="" class="review-rate mb-0 list-unstyled list-inline">
                                                                <li _ngcontent-mjb-c14="" class="list-inline-item"><i _ngcontent-mjb-c14="" class="fas fa-star text-warning"></i></li><li _ngcontent-mjb-c14="" class="list-inline-item">
                                                                    <i _ngcontent-mjb-c14="" class="fas fa-star text-warning"></i></li><li _ngcontent-mjb-c14="" class="list-inline-item"><i _ngcontent-mjb-c14="" class="fas fa-star text-warning"></i></li>
                                                                    <li _ngcontent-mjb-c14="" class="list-inline-item"><i _ngcontent-mjb-c14="" class="fas fa-star text-warning"></i></li><li _ngcontent-mjb-c14="" class="list-inline-item">
                                                                        <i _ngcontent-mjb-c14="" class="fas fa-star text-warning"></i></li></ul></div><blockquote _ngcontent-mjb-c14="" class="blockquote">
                                                                            <p _ngcontent-mjb-c14="">"I recently switched to your software from a competitor and I am extremely happy with the decision. The software is much more user-friendly and has many more features. I would highly recommend it to others in my industry." </p></blockquote>
                                                                            <div _ngcontent-mjb-c14="" class="author-info mt-4"><h6 _ngcontent-mjb-c14="" class="mb-0">Rupan Oberoi</h6><span _ngcontent-mjb-c14="">Web Designer</span></div></div></div>
                                                                            <div _ngcontent-mjb-c14="" class="col-lg-5 col-md-6"><div _ngcontent-mjb-c14="" class="author-img-wrap pt-5 ps-5"><div  style="margin-left: 80px;"  _ngcontent-mjb-c14="" data-aos="fade-up" data-aos-delay="150" class="testimonial-video-wrapper position-relative aos-init aos-animate">
                                                                                <img _ngcontent-mjb-c14="" src="assets/images/logo/2.jpg" alt="testimonial author" class="img-fluid rounded-custom shadow-lg"><div _ngcontent-mjb-c14="" class="customer-info text-white d-flex align-items-center">
                                                                                    <a _ngcontent-mjb-c14="" href="http://www.youtube.com/watch?v=hAP2QF--2Dg" class="video-icon popup-youtube text-decoration-none"><i _ngcontent-mjb-c14="" class="fas fa-play"></i>
                                                                                        <span _ngcontent-mjb-c14="" class="text-white ms-2 small"> Watch Video</span></a></div><div _ngcontent-mjb-c14="" class="position-absolute bg-primary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div></div></div></div></div></div>
                                                                                        <div _ngcontent-mjb-c14="" id="testimonial-tab-3" role="tabpanel" class="tab-pane fade"><div _ngcontent-mjb-c14="" class="row align-items-center justify-content-between">
                                                                                            <div _ngcontent-mjb-c14="" class="col-lg-6 col-md-6"><div _ngcontent-mjb-c14="" data-aos="fade-right" data-aos-delay="100" class="testimonial-tab-content mb-5 mb-lg-0 mb-md-0 aos-init aos-animate">
                                                                                                <img _ngcontent-mjb-c14="" src="assets/images/testimonial/verified-svgrepo-com.svg" alt="testimonial quote" width="65" class="img-fluid mb-32"><div _ngcontent-mjb-c14="" class="blockquote-title-review mb-4">
                                                                                                    <h3 _ngcontent-mjb-c14="" class="mb-0 h4 fw-semi-bold">Amazing Maqenixs Products!</h3>
                                                                                                    <ul _ngcontent-mjb-c14="" class="review-rate mb-0 list-unstyled list-inline"><li _ngcontent-mjb-c14="" class="list-inline-item">
                                                                                                        <i _ngcontent-mjb-c14="" class="fas fa-star text-warning"></i></li><li _ngcontent-mjb-c14="" class="list-inline-item">
                                                                                                            <i _ngcontent-mjb-c14="" class="fas fa-star text-warning"></i></li><li _ngcontent-mjb-c14="" class="list-inline-item">
                                                                                                                <i _ngcontent-mjb-c14="" class="fas fa-star text-warning"></i></li><li _ngcontent-mjb-c14="" class="list-inline-item">
                                                                                                                    <i _ngcontent-mjb-c14="" class="fas fa-star text-warning"></i></li><li _ngcontent-mjb-c14="" class="list-inline-item">
                                                                                                                        <i _ngcontent-mjb-c14="" class="fas fa-star text-warning"></i></li></ul></div><blockquote _ngcontent-mjb-c14="" class="blockquote">
                                                                                                                            <p _ngcontent-mjb-c14=""> "I am impressed with the customer service and technical support provided. Whenever I had an issue, the support team was quick to respond and resolved it in no time. Keep up the great work." </p></blockquote><div _ngcontent-mjb-c14="" class="author-info mt-4"><h6 _ngcontent-mjb-c14="" class="mb-0">Jon Doe</h6><span _ngcontent-mjb-c14="">Software Engineer</span></div></div></div><div _ngcontent-mjb-c14="" class="col-lg-5 col-md-6"><div _ngcontent-mjb-c14="" class="author-img-wrap pt-5 ps-5"><div style="margin-left: 20px;" _ngcontent-mjb-c14="" data-aos="fade-up" data-aos-delay="150" class="testimonial-video-wrapper position-relative aos-init aos-animate"><img _ngcontent-mjb-c14="" src="assets/images/logo/3.jpg" alt="testimonial author" class="img-fluid rounded-custom shadow-lg"><div _ngcontent-mjb-c14="" class="customer-info text-white d-flex align-items-center"><a _ngcontent-mjb-c14="" href="http://www.youtube.com/watch?v=hAP2QF--2Dg" class="video-icon popup-youtube text-decoration-none"><i _ngcontent-mjb-c14="" class="fas fa-play"></i><span _ngcontent-mjb-c14="" class="text-white ms-2 small"> Watch Video</span></a></div><div _ngcontent-mjb-c14="" class="position-absolute bg-primary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div></div></div></div></div></div><div _ngcontent-mjb-c14="" id="testimonial-tab-4" role="tabpanel" class="tab-pane fade"><div _ngcontent-mjb-c14="" class="row align-items-center justify-content-between"><div _ngcontent-mjb-c14="" class="col-lg-6 col-md-6"><div _ngcontent-mjb-c14="" data-aos="fade-right" data-aos-delay="100" class="testimonial-tab-content mb-5 mb-lg-0 mb-md-0 aos-init aos-animate"><img _ngcontent-mjb-c14="" src="assets/images/testimonial/verified-svgrepo-com.svg" alt="testimonial quote" width="65" class="img-fluid mb-32"><div _ngcontent-mjb-c14="" class="blockquote-title-review mb-4"><h3 _ngcontent-mjb-c14="" class="mb-0 h4 fw-semi-bold">Best Products for SAAS Company!</h3><ul _ngcontent-mjb-c14="" class="review-rate mb-0 list-unstyled list-inline"><li _ngcontent-mjb-c14="" class="list-inline-item"><i _ngcontent-mjb-c14="" class="fas fa-star text-warning"></i></li><li _ngcontent-mjb-c14="" class="list-inline-item"><i _ngcontent-mjb-c14="" class="fas fa-star text-warning"></i></li><li _ngcontent-mjb-c14="" class="list-inline-item"><i _ngcontent-mjb-c14="" class="fas fa-star text-warning"></i></li><li _ngcontent-mjb-c14="" class="list-inline-item"><i _ngcontent-mjb-c14="" class="fas fa-star text-warning"></i></li><li _ngcontent-mjb-c14="" class="list-inline-item"><i _ngcontent-mjb-c14="" class="fas fa-star text-warning"></i></li></ul></div><blockquote _ngcontent-mjb-c14="" class="blockquote"><p _ngcontent-mjb-c14="">"I love the new feature that was added to the software, it made my workflow much more efficient. Thank you for listening to your customers and implementing their suggestions." </p></blockquote><div _ngcontent-mjb-c14="" class="author-info mt-4"><h6 _ngcontent-mjb-c14="" class="mb-0">Hanry Luice</h6><span _ngcontent-mjb-c14="">App Developer</span></div></div></div><div _ngcontent-mjb-c14="" class="col-lg-5 col-md-6"><div style="margin-left:20px"   _ngcontent-mjb-c14="" data-aos="fade-up" data-aos-delay="150" class="author-img-wrap pt-5 ps-5 aos-init aos-animate"><div _ngcontent-mjb-c14="" class="testimonial-video-wrapper position-relative"><img _ngcontent-mjb-c14="" src="assets/images/logo/4.jpg" alt="testimonial author" class="img-fluid rounded-custom shadow-lg"><div _ngcontent-mjb-c14="" class="customer-info text-white d-flex align-items-center"><a _ngcontent-mjb-c14="" href="http://www.youtube.com/watch?v=hAP2QF--2Dg" class="video-icon popup-youtube text-decoration-none"><i _ngcontent-mjb-c14="" class="fas fa-play"></i><span _ngcontent-mjb-c14="" class="text-white ms-2 small"> Watch Video</span></a></div><div _ngcontent-mjb-c14="" class="position-absolute bg-primary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div></div></div></div></div></div><div _ngcontent-mjb-c14="" id="testimonial-tab-5" role="tabpanel" class="tab-pane fade"><div _ngcontent-mjb-c14="" class="row align-items-center justify-content-between"><div _ngcontent-mjb-c14="" class="col-lg-6 col-md-6"><div _ngcontent-mjb-c14="" data-aos="fade-right" data-aos-delay="100" class="testimonial-tab-content mb-5 mb-lg-0 mb-md-0 aos-init aos-animate"><img _ngcontent-mjb-c14="" src="assets/images/testimonial/verified-svgrepo-com.svg" alt="testimonial quote" width="65" class="img-fluid mb-32"><div _ngcontent-mjb-c14="" class="blockquote-title-review mb-4"><h3 _ngcontent-mjb-c14="" class="mb-0 h4 fw-semi-bold">It is Undeniably Good!</h3><ul _ngcontent-mjb-c14="" class="review-rate mb-0 list-unstyled list-inline"><li _ngcontent-mjb-c14="" class="list-inline-item"><i _ngcontent-mjb-c14="" class="fas fa-star text-warning"></i></li><li _ngcontent-mjb-c14="" class="list-inline-item"><i _ngcontent-mjb-c14="" class="fas fa-star text-warning"></i></li><li _ngcontent-mjb-c14="" class="list-inline-item"><i _ngcontent-mjb-c14="" class="fas fa-star text-warning"></i></li><li _ngcontent-mjb-c14="" class="list-inline-item"><i _ngcontent-mjb-c14="" class="fas fa-star text-warning"></i></li><li _ngcontent-mjb-c14="" class="list-inline-item"><i _ngcontent-mjb-c14="" class="fas fa-star text-warning"></i></li></ul></div><blockquote _ngcontent-mjb-c14="" class="blockquote"><p _ngcontent-mjb-c14="">Appropriately disintermediate one-to-one vortals through cross functional infomediaries. Collaboratively pursue multidisciplinary systems through stand-alone architectures. Progressively transition covalent architectures whereas vertical applications procrastinate professional. </p></blockquote><div _ngcontent-mjb-c14="" class="author-info mt-4"><h6 _ngcontent-mjb-c14="" class="mb-0">Ami Nijai</h6><span _ngcontent-mjb-c14="">Customer Support</span></div></div></div><div _ngcontent-mjb-c14="" class="col-lg-5 col-md-6"><div _ngcontent-mjb-c14="" data-aos="fade-right" data-aos-delay="150" class="author-img-wrap pt-5 ps-5 aos-init aos-animate"><div _ngcontent-mjb-c14="" class="testimonial-video-wrapper position-relative"><img _ngcontent-mjb-c14="" src="assets/images/testimonial/verified-svgrepo-com.svg" alt="testimonial author" class="img-fluid rounded-custom shadow-lg"><div _ngcontent-mjb-c14="" class="customer-info text-white d-flex align-items-center"><a _ngcontent-mjb-c14="" href="http://www.youtube.com/watch?v=hAP2QF--2Dg" class="video-icon popup-youtube text-decoration-none"><i _ngcontent-mjb-c14="" class="fas fa-play"></i><span _ngcontent-mjb-c14="" class="text-white ms-2 small"> Watch Video</span></a></div><div _ngcontent-mjb-c14="" class="position-absolute bg-primary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div></div></div></div></div></div></div></div></div><div _ngcontent-mjb-c14="" class="row"><div _ngcontent-mjb-c14="" class="col-12"><ul _ngcontent-mjb-c14="" id="testimonial" role="tablist" class="nav nav-pills testimonial-tab-menu mt-60"><li _ngcontent-mjb-c14="" role="presentation" class="nav-item">
                                                                                                                                <div style="margin-left: 20px;"  _ngcontent-mjb-c14="" data-aos="fade-up" data-aos-delay="250" data-bs-toggle="pill" data-bs-target="#testimonial-tab-1" role="tab" aria-selected="true" class="nav-link d-flex align-items-center rounded-custom border border-light border-2 testimonial-tab-link aos-init aos-animate active"><div _ngcontent-mjb-c14="" class="testimonial-thumb me-3"><img _ngcontent-mjb-c14="" src="assets/images/logo/1.jpg" width="50" alt="testimonial thumb" class="rounded-circle"></div>
                                                                                                                                <div  _ngcontent-mjb-c14="" class="author-info"><h6 _ngcontent-mjb-c14="" class="mb-0">Joe Richard</h6><span _ngcontent-mjb-c14="">Visual Designer</span></div></div></li><li _ngcontent-mjb-c14="" role="presentation" class="nav-item">
                                                                                                                                    <div style="margin-left: 20px;" _ngcontent-mjb-c14="" data-aos="fade-up" data-aos-delay="300" data-bs-toggle="pill" data-bs-target="#testimonial-tab-2" role="tab" aria-selected="false" class="nav-link d-flex align-items-center rounded-custom border border-light border-2 testimonial-tab-link aos-init aos-animate"><div _ngcontent-mjb-c14="" class="testimonial-thumb me-3"><img _ngcontent-mjb-c14="" src="assets/images/logo/2.jpg" width="50" alt="testimonial thumb" class="rounded-circle"></div><div _ngcontent-mjb-c14="" class="author-info"><h6 _ngcontent-mjb-c14="" class="mb-0">Rupan Oberoi</h6><span _ngcontent-mjb-c14="">Web Designer</span></div></div>
                                                                                                                                </li><li _ngcontent-mjb-c14="" role="presentation" class="nav-item"><div style="margin-left: 20px;" _ngcontent-mjb-c14="" data-aos="fade-up" data-aos-delay="350" data-bs-toggle="pill" data-bs-target="#testimonial-tab-3" role="tab" aria-selected="false" class="nav-link d-flex align-items-center rounded-custom border border-light border-2 testimonial-tab-link aos-init aos-animate"><div _ngcontent-mjb-c14="" class="testimonial-thumb me-3"><img _ngcontent-mjb-c14="" src="assets/images/logo/3.jpg" width="50" alt="testimonial thumb" class="rounded-circle"></div><div _ngcontent-mjb-c14="" class="author-info"><h6 _ngcontent-mjb-c14="" class="mb-0">Jon Doe</h6><span _ngcontent-mjb-c14="">Software Engineer</span></div></div></li><li _ngcontent-mjb-c14="" role="presentation" class="nav-item">
                                                                                                                                    <div style="margin-left: 20px;"  _ngcontent-mjb-c14="" data-aos="fade-up" data-aos-delay="400" data-bs-toggle="pill" data-bs-target="#testimonial-tab-4" role="tab" aria-selected="false" class="nav-link d-flex align-items-center rounded-custom border border-light border-2 testimonial-tab-link aos-init aos-animate"><div _ngcontent-mjb-c14="" class="testimonial-thumb me-3"><img _ngcontent-mjb-c14="" src="assets/images/logo/4.jpg" width="50" alt="testimonial thumb" class="rounded-circle"></div><div _ngcontent-mjb-c14="" class="author-info"><h6 _ngcontent-mjb-c14="" class="mb-0">Hanry Luice</h6><span _ngcontent-mjb-c14="">App Developer</span></div></div></li></ul></div></div></div></section>



            <!--====================  Blog Section End  ====================-->
            <!--====================  Conact us Section Start ====================-->
            
            <div class="rev_redraw-inner-box bg-gray-2 section-space--mt_40 section-space--mb_40 rev_redraw-space" style="width: 100%; overflow-x: hidden;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="redraw-content text-center">
                    <h6 style="color: crimson;">Integration</h6>
                    <h3 class="font-weight--reguler"><span class="text-color-primary">We Collaborate with Top Software Company</span></h3>

                    <div class="">
                        <a href="" class=""> <i class=""></i></a>
                    </div>
                </div>

                <div class="redraw-images">
                    <img class="img-fluid redrow-1 animate wow fadeInLeft" data-wow-delay="0.1s" src="assets/images/icons/1.png" alt="" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">

                    <img class="img-fluid redrow-2 animate wow fadeInLeft" data-wow-delay="0.2s" src="assets/images/icons/2.png" alt="" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">

                    <img class="img-fluid redrow-3 animate wow fadeInLeft" data-wow-delay="0.3s" src="assets/images/icons/3.png" alt="" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">

                    <img class="img-fluid redrow-4 animate wow fadeInLeft" data-wow-delay="0.4s" src="assets/images/icons/4.png" alt="" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">

                    <img class="img-fluid redrow-5 animate wow fadeInLeft" data-wow-delay="0.1s" src="assets/images/icons/5.png" alt="" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">

                    <img class="img-fluid redrow-6 animate wow fadeInLeft" data-wow-delay="0.3s" src="assets/images/icons/6.png" alt="" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">

                    <img class="img-fluid redrow-7 animate wow fadeInLeft" data-wow-delay="0.4s" src="assets/images/icons/7.png" alt="" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">

                    <img class="img-fluid redrow-8 animate wow fadeInLeft" data-wow-delay="0.4s" src="assets/images/icons/8.png" alt="" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">

                    <img class="img-fluid redrow-9 animate wow fadeInLeft" data-wow-delay="0.4s" src="assets/images/icons/9.png" alt="" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">

                </div>

            </div>
        </div>
    </div>
</div>

            <!--====================  Conact us Section End  ====================-->
        </div>


        <!--====================  footer area ====================-->
        <?php include 'components/footer.php' ; ?>
        <!--====================  End of footer area  ====================-->

    </div>

    <!-- End Toolbar -->

    <!--====================  mobile menu overlay ====================-->
    <?php include 'components/mobile_menu.php' ; ?>

    
    
    <!--====================  Footer links  ====================-->

    <?php include 'components/footer_links.php' ; ?>

    <!--====================  Footer links end  ====================-->

    
   

</body>


</html>