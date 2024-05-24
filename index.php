<?php include'header.php'; ?>



<style>
.form-control {
    background-color: #0B2922 !important;
    border: 0;
    padding: 15px 18px;
    color: white !important;
}

.cardclass:hover {
    transform: scale(1.009);
}

.cardclass {
    margin-left: 30px;
    border-radius: 8px;
    border: 1px solid #D9D9D9;
    margin-right: 10px;
    margin-bottom: 31px;
}

.titleclass {
    font-weight: 500;
    color: black;
    padding-right: 15px;
    font-size: 1.234rem;
    padding-left: 15px;
}

.des {
    font-weight: 500 !important;
    padding-right: 15px;
    padding-left: 15px;
}

.asdt {
    padding-right: 15px;
    padding-left: 15px;
}

.underline:hover {
    text-decoration: none;
}

#test {
    padding-right: 0px !important;
    padding-left: 0px !important;
    max-width: 26.333333% !important;
}

.moretest {
    margin-top: 40px;
    margin-right: 0px;
    margin-left: 114px;
}

@media screen and (max-width: 575px) {
    .testfordesktop {
        display: none;
    }
}

@media screen and (min-width: 574px) {
    .formobile {
        display: none;
    }
}





.desktop-view {
    margin-top: 20px;
    font-size: 25px;
    margin-bottom: 20px;
}

.accordion .accordion-item {
    box-shadow: 0 0 6px rgb(0 0 0 / 20%);
    border: none !important;
    margin: 8px auto;
    padding: 27px;
    background: #fff;
    color: #4d5974;
    font-size: 15px;
}

.accordion .accordion-item button[aria-expanded='true'] {
    /* border-bottom: 1px solid #1F3C36; */
}

.accordion button {
    position: relative;
    display: block;
    text-align: left;
    width: 100%;
    /* padding: 0; */
    color: #7288a2;
    font-size: 1.15rem;
    font-weight: 400;
    border: none;
    background: none;
    outline: none;
}

.accordion button:hover,
.accordion button:focus {
    cursor: pointer;
    color: #03b5d2;
}

.accordion button:hover::after,
.accordion button:focus::after {
    cursor: pointer;
    color: #03b5d2;
    border: 1px solid #03b5d2;
}

.accordion button .accordion-title {
    font-size: 16px;

    padding: 1em 1.5em 1em 0;
    color: #1F3C36;
    font-weight: 600;
}

.accordion button .icon {
    display: inline-block;
    position: absolute;
    top: 2px;
    right: 5px;
    width: 22px;
    height: 22px;
    /* border: 1px solid; */
    border-radius: 22px;
}

.accordion button .icon::before {
    display: block;
    position: absolute;
    content: '';
    top: 9px;
    left: 5px;
    width: 10px;
    height: 2px;
    background: currentColor;
}

.accordion button .icon::after {
    display: block;
    position: absolute;
    content: '';
    top: 5px;
    left: 9px;
    width: 2px;
    height: 10px;
    background: currentColor;
}

.accordion button[aria-expanded='true'] {
    color: #03b5d2;
}

.accordion button[aria-expanded='true'] .icon::after {
    width: 0;
}

.accordion button[aria-expanded='true']+.accordion-content {
    opacity: 1;
    max-height: 32%;
    transition: all 200ms linear;
    will-change: opacity, max-height;
}

.accordion .accordion-content {
    opacity: 0;
    max-height: 0;
    overflow: hidden;
    transition: opacity 200ms linear, max-height 200ms linear;
    will-change: opacity, max-height;
}

.accordion .accordion-content p {
    font-size: 16px;
    font-weight: normal;
    text-align: justify;
    /* margin: 20px 0px 0px 0px; */
    padding: 30px 0px;
    color: black;
}

@media (max-width: 575px),
only screen and (max-width: 320px),
only screen and (min-width: 576px) and (max-width: 767px),
only screen and (min-width: 768px) and (max-width: 991px),
only screen and (min-width: 992px) and (max-width: 1199px) {
    .buzz_brand_headding {
        color: black;
        font-size: 22px;
        font-weight: 600;

    }

    .service_buzz::after,
    .buzz_brand_headding::after {
        content: '';
        border-bottom: 2px solid #f01;
        width: 50%;
        display: block;
        text-align: center;
        margin: 5px auto;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .buzz_brand_ptagrap {
        font-size: 15px !important;
        padding: 0px !important;
        margin-bottom: 0px;
    }

    .card-body {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 0.25rem;
    }

    .service_buzz {
        font-size: 22px !important;
    }

    .buzz_service_dec {
        font-size: 15px !important;
    }

    .card-subtitle1 {
        font-size: 13px !important;
    }

    .buzz_main_heading {
        font-size: 20px;
        margin-bottom: 39px;
    }

    .mobile-view {
        text-align: center;
        margin-top: 35px;
    }

    .b-line::after {
        display: none !important;
    }

    .accordion .accordion-item {
        margin: 10px 0px 10px -35px !important;

        width: 21.4rem !important;
    }

    .accordion .accordion-content p {
        font-size: 13px;
        font-weight: 400;
        margin: 11px;
        padding: 3px;

        line-height: 20px;
    }

    .accordion {
        margin: 6px 46px 36px 38px;
    }

    .accordion button .icon {

        position: absolute;
        right: -16px;
        width: 22px;
        height: 22px;
        /* border: 1px solid; */
        border-radius: 22px;
    }
}

.section-title {
    padding: 0px 0px 30px 0px;
}

.heroSection1 video{
    width:100%;
}
.videoSection{
    /* margin-top: -165px; */

}
</style>


<!-- hero section start  -->

<div class="heroSection1">

<div class="col-12">
    <div class="videoSection">
    <video class="firstVideo" autoplay loop muted src="imgall/newV.mp4"></video>
    </div>
</div>
    <!-- <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="textGroup">
                    <h2 class='fw-bold mb-0'>READY TO TAKE YOUR</h2>
                    <h2 class='fw-bold mb-0'>BRAND TO NEW</h2>
                    <h2 class='fw-bold mb-3'>HEIGHTS !!</h2>
                    <b class='fs-6 fw-medium mb-3'>LET OUR TEAM OF PROFESSIONAL EXPERTS TRANSFORM <br> YOUR ONLINE
                        PRESENCE.</b>
                    <br>
                    <button type="button" class="btn btn-warning shadow-none rounded-pill mt-4 p--11">
                        <a href="#" style='color:#1F3C36;' class='fw-semibold'>
                            GET STARTED
                        </a>
                    </button>
                </div>


                <div class="hero-slide">
                    <div class="slides1 slowFade1">
                        <div class="slide1">
                            <img src="imgall/Component 5.png" alt="img" />
                        </div>
                        <div class="slide1">
                            <img src="imgall/02.jpg" alt="img" />
                        </div>
                        <div class="slide1">
                            <img src="imgall/03.jpg" alt="img" />
                        </div>
                        <div class="slide1">
                            <img src="imgall/04.jpg" alt="img" />
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div> -->
</div>

</div>

<div class="heroMobile">
    <div class="container">
        <div class="row">
            <div class="textGroupMobile">
                <h2 class='fw-bold mb-0'>READY TO TAKE YOUR</h2>
                <h2 class='fw-bold mb-3'>BRAND TO NEW HEIGHTS !!</h2>
                <b class='fs-6 fw-medium mb-3'>LET OUR TEAM OF PROFESSIONAL <br> EXPERTS TRANSFORM YOUR <br> ONLINE
                    PRESENCE.</b>
            </div>
        </div>
    </div>
</div>

<!-- hero section end  -->


<!-- pattern section start  -->

<div class="patternSection py-4">
    <div class="container">
        <div class="row">
            <div class="patternText">
                <h2 class='mb-0'>YOUR PARTNER</h2>
                <h2 class='text-end mb-0'>IN DIGITAL</h2>
                <h2 class='mb-0'>EXCELLENCE !</h2>
            </div>
        </div>
    </div>
</div>

<!-- pattern section end  -->


<!-- our works section start  -->

<div class="ourSection py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <div class="box-tasvir">

                    <img src="imgall/web3.png" alt="">

                </div>



            </div>
            <div class="col-md-6">
                <div class="ourText py-5">
                    <h2 class='mb-0' style='color:#fff;'>Made with</h2>
                    <h2 class='mb-4' style='color:#F2E901;'>Redo Technology</h2>
                    <p class='fw-medium mb-2 bgbgb' style='color:#fff;'>
                        Get inspired by a collection of websites <br>
                        made by Redotechnology users.
                    </p>
                    <div class='btn-our'>
                        <a type="button" class="btn btn-outline-warning shadow-none mt-4 rounded-pill p12">OUR WORKS</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<!-- our work section end  -->

<!-- responsive website start  -->
<div class="respoWebsite py-5" style='background:#000;'>
    <div class="container">
        <div class="col-12">
            <div class="textRespo">
                <h2 class='text-white'> CRAFT <span style='color:#F2E901;'>DYNAMIC</span></h2>
                <h2 class='text-white'>AND</h2>
                <h2 style='color:#F2E901;'>RESPONSIVE</h2>
                <h2 class='text-white'>WEBSITES</h2>
            </div>
        </div>
    </div>
</div>

<!-- responsive website end  -->


<!-- project reviews section start  -->

<div class="projectReview py-5" style='background-color: #0B2922;'>
    <div class="container">
        <div class="d-flex col-12">
            <div class="col-4 p-2">
                <div class="box-tasvir">

                    <img src="imgall/web3.png" alt="">

                </div>
            </div>
            <div class="col-4 p-2">
                <div class="box-tasvir1">

                    <img src="imgall/web3.png" alt="">

                </div>
            </div>
            <div class="col-4 p-2">

                <div class="box-tasvir">

                    <img src="imgall/web3.png" alt="">

                </div>
            </div>
        </div>
    </div>
</div>

<!-- project reviews section end  -->


<!-- website review section start  -->

<div class="rewWebsite py-4" style='background-color: #fff;'>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <div class="txt-rew-web">
                        <div class="num">1</div>
                        <div class="div-text">
                            <h4>Choose Your Style</h4>
                            <p>
                                Immerse yourself in our collection of website templates, crafted to align with your
                                personal
                                style and meet the demands of your professional endeavors. Choose from an array of
                                designer
                                fonts and color palettes to impart a distinctive and polished appeal to your online
                                identity.
                            </p>

                        </div>
                    </div>
                    <div class="txt-rew-web">
                        <div class="num">2</div>
                        <div class="div-text">
                            <h4>Effortless Ecommerce Integration</h4>
                            <p>
                                Elevate your online business effortlessly by leveraging our intuitive tools. Whether
                                establishing an online store, scheduling services, or integrating preferred third-party
                                extensions, our platform simplifies the complexities of ecommerce.
                            </p>

                        </div>
                    </div>
                    <div class="txt-rew-web">
                        <div class="num">3</div>
                        <div class="div-text">
                            <h4>Strategic Business Marketing</h4>
                            <p>
                                Command attention in both inboxes and social feeds with our suite of on-brand email
                                campaigns and social media tools. Streamline customer retention efforts and amplify your
                                audience growth through sophisticated, targeted marketing strategies.
                            </p>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 py-4 m-auto" style='background-color: #0B2922;'>
                <div class="container">
                    <div class="img-rew">
                        <img src="imgall/Cover.png" alt="img">
                    </div>
                </div>


            </div>
        </div>

    </div>
</div>


<!-- website review section end  -->


<!-- faq section start  -->

<div class="faqsection py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="faqtext">
                    <h2>We provide</h2>
                    <h2>comprehensive</h2>
                    <h2>coverage</h2>
                    <h2>available 24/7.</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class=" mobile-view section-title">

                    <div class="accordion">
                        <div class="accordion-item"><button id="accordion-button-1" aria-expanded="false"><span
                                    class="accordion-title">
                                    Q1. What is Lorem Ipsum? </span><span class="icon"
                                    aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's standard
                                    dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                    scrambled it
                                    to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    typesetting,
                                    remaining essentially
                                    unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                    containing Lorem
                                    Ipsum passages, and more
                                    recently with desktop publishing software like Aldus PageMaker including versions of
                                    Lorem Ipsum
                            </div>
                        </div>
                        <div class="accordion-item"><button id="accordion-button-2" aria-expanded="false"><span
                                    class="accordion-title">Q2. Is there any warranty on the spare parts?</span><span
                                    class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <p> Yes, we provide a minimum of 6-months warranty on any spare part we deliver to the
                                    customer.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item"><button id="accordion-button-3" aria-expanded="false"><span
                                    class="accordion-title">Q3. What are service costs?</span><span class="icon"
                                    aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <p> The service costs depend on the service category and extent of the technical
                                    problem. You can
                                    call us to know further details.</p>
                            </div>
                        </div>
                        <div class="accordion-item"><button id="accordion-button-3" aria-expanded="false"><span
                                    class="accordion-title">Q4. Is there support available after the service has been
                                    delivered?</span><span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <p> We sincerely prioritise the interests of our customers and never leave any stones
                                    unturned in
                                    delivering extensive customer support even after we have delivered our services.</p>
                            </div>
                        </div>
                        <div class="accordion-item"><button id="accordion-button-3" aria-expanded="false"><span
                                    class="accordion-title">Q5. How much time does it take to repair the mobile
                                    phone?</span><span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <p> It depends on the type of technical fault. In almost every case, we repair the
                                    mobile phone
                                    solve
                                    the issue within an hour or two.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- faq section end  -->


<!-- Clients Reviews section start  -->
<div class="clint-re py-5">
    <div class="container">
        <h2 class='fs-2 fw-bold text-center' style='color: #1F3C36;'>Clients Reviews</h2>


        <div class="col-12 py-5">
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card" style='background:#0B2922;'>
                            <img src="imgall/aartimandal.png" alt="img">

                            <div class="card-body">

                                <p class="card-text text-white">
                                    Immerse yourself in our collection of website templates, crafted to align with your
                                    personal style and meet the demands of your professional endeavors. Choose from an
                                    array of designer fonts and color palettes to impart a distinctive and polished
                                    appeal to your online identity.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card" style='background:#0B2922;'>
                            <img src="imgall/aartimandal.png" alt="img">

                            <div class="card-body">

                                <p class="card-text text-white">
                                    Immerse yourself in our collection of website templates, crafted to align with your
                                    personal style and meet the demands of your professional endeavors. Choose from an
                                    array of designer fonts and color palettes to impart a distinctive and polished
                                    appeal to your online identity.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card" style='background:#0B2922;'>
                            <img src="imgall/aartimandal.png" alt="img">
                            <div class="card-body">

                                <p class="card-text text-white">
                                    Immerse yourself in our collection of website templates, crafted to align with your
                                    personal style and meet the demands of your professional endeavors. Choose from an
                                    array of designer fonts and color palettes to impart a distinctive and polished
                                    appeal to your online identity.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card" style='background:#0B2922;'>
                            <img src="imgall/aartimandal.png" alt="img">
                            <div class="card-body">

                                <p class="card-text text-white">
                                    Immerse yourself in our collection of website templates, crafted to align with your
                                    personal style and meet the demands of your professional endeavors. Choose from an
                                    array of designer fonts and color palettes to impart a distinctive and polished
                                    appeal to your online identity.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card" style='background:#0B2922;'>
                            <img src="imgall/aartimandal.png" alt="img">
                            <div class="card-body">

                                <p class="card-text text-white">
                                    Immerse yourself in our collection of website templates, crafted to align with your
                                    personal style and meet the demands of your professional endeavors. Choose from an
                                    array of designer fonts and color palettes to impart a distinctive and polished
                                    appeal to your online identity.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card" style='background:#0B2922;'>
                            <img src="imgall/aartimandal.png" alt="img">
                            <div class="card-body">

                                <p class="card-text text-white">
                                    Immerse yourself in our collection of website templates, crafted to align with your
                                    personal style and meet the demands of your professional endeavors. Choose from an
                                    array of designer fonts and color palettes to impart a distinctive and polished
                                    appeal to your online identity.
                                </p>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
</div>

<!-- Clients Reviews section end  -->



<!-- contact section start  -->

<div class="contactSection py-5">
    <div class="container">
        <div class="col-12">
            <h2 class='fs-2 fw-semibold' style='color:#F2E901;'>Start a project</h2>
            <h3 class='fs-2 fw-bold'>Let’s talk about you</h3>
        </div>

        <div class="row">
            <div class="col-md-6 py-5">
                <div class="cardimg ">
                    <div class="card p-4" style='background:#0B2922;'>
                        <img src="imgall/nikhil.png" width='15%' alt="nikilimg">
                        <div class="card-body">
                            <h5 class="card-title text-white">30min consultation</h5>
                            <p class="card-text text-white">Some quick example text to build on the card title and make
                                up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-warning">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 py-5">
                <div class="contctinput">
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-6">
                            <label class="form-label fs-6 fw-semibold">Name</label>
                            <input type="text" class="form-control shadow-none text-white" placeholder='Your Name'>

                        </div>
                        <div class="col-md-6">
                            <label class="form-label fs-6 fw-semibold">Email</label>
                            <input type="email" class="form-control shadow-none" placeholder='Your Email' required>

                        </div>

                        <div class="col-md-12">
                            <label class="form-label fs-6 fw-semibold">Estimated budget</label>
                            <input type="number" class="form-control shadow-none" placeholder='Your budget...' required>

                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label fs-6 fw-semibold">Project summary</label>
                                <textarea class="form-control shadow-none" placeholder='Please your Messages'
                                    rows="3"></textarea>
                            </div>
                        </div>

                        <div class="col-12">
                            <a class="btn btn-outline-secondary rounded-pill shadow-none send-btn"
                                type="submit">Send</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- contact section end  -->





<?php include'footer.php'; ?>