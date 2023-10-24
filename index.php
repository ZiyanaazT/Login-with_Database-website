<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="contact.html" rel="">
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>project</title>
    <link href="contact.html" rel="">
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: "urbanist", sans-serif;
        }

        :root {
            --bs-dark-color: #1a1d20;
            --bs-dark-primary: #1c1c1c;
            --bs-main-color: #fff;
            --bs-primary-color: #c6c6c6;
            --bs-secondary-colors: #29a9fd;
            --bs-supporting-color: #C850C0;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: 'Lexend Deca', sans-serif;
            color: var(--bs-dark-color);
        }

        h1 {
            font-size: 3.8rem;
        }

        h2 {
            line-height: 4rem;
            font-weight: 600px;
            font-size: 3.4rem;
        }

        p {
            margin: 0px;
            font-weight: 400px;
            font-size: 1rem;
            color: var(--bs-dark-color);
            letter-spacing: 0.07rem;
            line-height: 1.55rem;
            font-synthesis: none;
            text-rendering: optimizeLegibility;
        }

        a {
            text-decoration: none;
        }

        li {
            list-style: none;
        }

        .bg-color {
            background-color: var(--bs-dark-primary);
        }

        .text-light-grey {
            color: var(--bs-primary-color);
        }

        /*.bg-theme {
            color: var(--bs-supporting-color);
            background-image: none;
        }*/

        .nav-link {
            color: var(--bs-main-color);
            font-weight: bold;
        }

        .nav-link :hover {
            color: var(--secondary-color);
        }

        /*----hero-section-start----*/
        .hero-section .container {
            display: grid;
            place-content: center;
            height: inherit;
        }

        .bg-main {
            height: 80vh;
            position: relative;
        }

        .hero-video--section {
            width: 30rem;
            border-radius: 2rem;
        }

        .custom-shape-divider-bottom-1696090958 {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
        }

        .custom-shape-divider-bottom-1696090958 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 150px;
            transform: rotateY(180deg);
        }

        .custom-shape-divider-bottom-1696090958 .shape-fill {
            fill: #FFFFFF;
        }

        .services-section {
            padding: 6rem 0 3rem 0;
        }

        .icon-span {
            width: 2.5rem;
            height: 2.5rem;
            background-color: var(--bs-secondary-colors);
            color: var(--bs-main-color);
        }

        .card-box:hover {
            box-shadow: rgba(149, 157, 165, 0.2) 0 8px 24px;
        }

        .more-info-section {
            background-image: linear-gradient(rgba(22, 22, 22, 0.9), rgba(22, 22, 22, 0.9)), url("./images/5.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            padding: 6rem 0;
            overflow: hidden;
        }

        .more-info-section .img-section {
            position: relative;
        }

        .more-info-section .img-section img {
            position: absolute;
            top: -10%;
            left: 0px;
            max-width: 100%;
            width: 70%;
        }

        @media screen and (max-width: 1200px) {
            .more-info-section img {
                position: absolute;
                bottom: 10%;
                top: 0;
                left: 55%;
                max-width: 100%;
                width: 50%;
                transform: scale(1);
            }

            .para-width {
                width: 90%;
            }
        }

        @media screen and(max-width:768px) {
            .more-info-section img {
                display: none;
            }

        }

        .services-section {
            padding: 6rem 0 3rem 0 !important;
        }

        .business-section {
            padding-top: 3rem;
        }

        .common-section {
            padding: 0 0 9rem 0;
        }

        .carousel .card {
            background-color: #262631;
            color: var(--bs-main-color);
            transition: all 0.3s linear;
        }

        .carousel-inner .card p {
            color: var(--bs-main-color);
        }

        .carousel-inner .card :hover {
            background: var(--bs-main-color);
            color: var(--bs-dark-color);
        }

        .carousel-inner .card :hover p {
            color: var(--bs-dark-color);
        }

        .fa-star {
            color: var(--bs-supporting-color);
        }

        .carousel-indicators {
            bottom: -20%;
        }

        .carousel-indicators [data-bs-target] {
            width: .7rem;
            height: .7rem;
            background-color: var(--bs-secondary-colors);
        }

        .contact-section {
            position: relative;
        }

        .custom-shape-divider-top-1696495929 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .custom-shape-divider-top-1696495929 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 150px;
        }

        .custom-shape-divider-top-1696495929 .shape-fill {
            fill: #FFFFFF;
        }

        .contact-section .common-title {
            padding-top: 6rem;
        }

        .contact-section .form-section {
            width: 50%;
        }

        .custom-shape-divider-top-1684211116 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .custom-shape-divider-top-1684211116 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 150px;
        }

        .custom-shape-divider-top-1684211116 .shape-fill {
            fill: var(--bs-main-color);
        }




        @media screen and (max-width: 998px) {
            .contact-section .common-title {
                padding-top: 10rem;
            }

            .contact-section .form-section {
                width: 100%;
            }
        }

        /*contact section end */

        /*footer styling */
        .main-footer-section {
            padding: 0 0 4rem 0;
            background-color: #222;
            color: var(--bs-main-color);
        }

        .contact-div {
            background-color: var(--bs-dark-primary);
        }

        .icon-div {
            width: 5rem;
            height: 5rem;
            /*background: #1089ff;*/
        }

        .icon- {
            width: 2.5rem;
            height: 2.5rem;
            background-color: #1089ff;
            color: var(--bs-main-color);
        }

        .icon-span .fa-brands,
        .fab {
            color: white;
        }

        .carousel-indicators {
            bottom: -20%;
        }

        .carousel-indicators [data-bs-target] {
            margin-top: 2rem;
            width: .7rem;
            height: .7rem;
            background-color: #1089ff;
        }
         
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-color py-5 pt-lg-5 ">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Web-Development</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#about_us">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="#about-us">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="#Online-section">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="#contact_section">Contact</a>
                    </li>


                </ul>

            </div>
        </div>
    </nav>

    <!------hero-section-->
    <section class="bg-main bg-color hero-section" id="about_us">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 col-md-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                    <h1 class="text-capitalize fw-bolder text-white">We collect high Quality Leads</h1>
                    <p class="mt-3 mb-5 para-width text-light-grey">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Ab animi quidem sed repellendus harum
                        quam et nihil. Error, corrupti vel? Blanditiis vitae enim delectus perspiciatis sit beatae
                        necessitatibus quibusdam explicabo.</p>
                    <div class="text-center w-100 text-md-start">
                        <button class="text-capitalize btn btn-primary px-5 py-2" data-bs-toggle="tooltip"
                            data-bs-title="Contact_us">
                            Contact-us</button>
                    </div>
                </div>
                <!----img-section-->
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="text-center text-lg-end">
                        <video src="./images/hero.mp4" loop autoplay muted class="hero-video--section"></video>
                    </div>
                </div>
                <!----img-section-end-->
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1696090958">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="shape-fill"></path>
            </svg>
        </div>

    </section>

    <!----hero-section-end---->

    <!-----service-section-start--->
    <section class="services-section" >
        <div class="container text-center common-title fw-bold">
            <h2 class="common-heading">What we will do For<br>your Business</h2>
            <hr class="w-25 mx-auto">
        </div>
        <div class="container mt-5">
            <div class="row g-5">
                <div class="col-xxl-4 col-lg-4 col-12">
                    <div class="card-box rounded-2 p-5 text-center">
                        <img src="images/link.gif" alt="link" class="img-fluid" width="200px">
                        <h5 class="my-3 fw-normal">Link-Building</h5>
                        <!-----fw is font_width and my-is margin top_bottom_here-->
                        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab nemo vitae
                            repudiandae veritatis</p>
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="#service"
                                class="icon-span rounded-circle d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 col-md-12">
                    <div class="text-center card-box rounded-2 p-5 text-center shadow">
                        <img src="images/speaker.gif" alt="link" class="img-fluid" width="200px">
                        <h5 class="my-3 fw-normal">Content-marketing</h5>
                        <!-----fw is font_width and my-is margin top_bottom_here-->
                        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab nemo vitae
                            repudiandae veritatis</p>
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="#service"
                                class="icon-span rounded-circle d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 col-md-12">
                    <div class="text-center card-box rounded-2 p-5">
                        <img src="images/seo.gif" alt="link" class="img-fluid" width="200px">
                        <h5 class="my-3 fw-normal">On the Page SEO </h5>
                        <!-----fw is font_width and my-is margin top_bottom_here-->
                        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab nemo vitae
                            repudiandae veritatis</p>
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="#service"
                                class="icon-span rounded-circle d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-----service-section-end--->

    <!-----digital_products-->
    <section class="bg-color more-info-section">
        <div class="container">
            <div class="row ">
                <!----img-section-->
                <div class="col-12 col-md-12 col-lg-6 img-section">

                    <figure>
                        <img src="./images/phone.gif" class="img-fluid">
                    </figure>

                </div>
                <!----img-section-end-->
                <div class="col-12 col-md-12 col-lg-6 d-flex flex-column justify-content-center align-items-start my-5">
                    <h2 class="text-capitalize fw-bolder text-white">Steps To Build A <br> Successful Digital Products
                    </h2>
                    <p class="mt-3 mb-5 para-width text-light-grey">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Ab animi quidem sed repellenduselit. Ab animi quidem sed repellendus
                        quam et nihil. Error, corrupti vel? Blanditiis vitae enim delectus perspiciatis
                        quam et nihil. Error, corrupti vel? Blanditiis vitae enim delectus perspiciatis sit beatae
                        necessitatibus quibusdam explicabo.</p>
                    <div class="text-center w-100 text-md-start">
                        <button class="text-capitalize btn btn-primary px-5 py-2" data-bs-toggle="tooltip"
                            data-bs-title="Contact_us">
                            Contact-us</button>
                    </div>
                </div>

            </div>
        </div>

        </div>

    </section>
    <!-----digital_products-end--->

    <!------online-code-section-->
    <section class="common-section business-section" id="Online-section">
        <div class="container text-center common-title fw-bold">
            <h2 class="common-heading mt-5">Generating New Customers via<br>Online Mode</h2>
            <hr class="w-25 mx-auto">
        </div>
        <div class="container">
            <div class="row g-5">
                <div class="col-12 col-m-12 col-lg-6">
                    <div class="d-flex px-3 py-5 shadow">
                        <img alt="gif-image" class="d-md-block d-none img-fluid mx-3" src="./images/phone.gif"
                            width="150px">
                        <div>
                            <p class="mb-3 fw-bolder">Social Media Advertising</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam corporis explicabo
                                reprehenderit perferendis sunt alias facere quam suscipit iusto enim! Dolores sapiente
                                assumenda
                                molestias recusandae labore aut autem. Officiis, qui!</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-m-12 col-lg-6">
                    <div class="d-flex px-3 py-5 shadow">
                        <img alt="gif-image" class="d-md-block d-none img-fluid mx-3" src="./images/speaker.gif"
                            width="150px">
                        <div>
                            <p class="mb-3 fw-bolder">Influencer Content-marketing</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam corporis explicabo
                                reprehenderit perferendis sunt alias facere quam suscipit iusto enim! Dolores sapiente
                                assumenda
                                molestias recusandae labore aut autem. Officiis, qui!</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-m-12 col-lg-6">
                    <div class="d-flex px-3 py-5 shadow">
                        <img alt="gif-image" class="d-md-block d-none img-fluid mx-3" src="./images/speaker.gif"
                            width="150px">
                        <div>
                            <p class="mb-3 fw-bolder">Content-Marketing</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam corporis explicabo
                                reprehenderit perferendis sunt alias facere quam suscipit iusto enim! Dolores sapiente
                                assumenda
                                molestias recusandae labore aut autem. Officiis, qui!</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-m-12 col-lg-6">
                    <div class="d-flex px-3 py-5 shadow">
                        <img alt="gif-image" class="d-md-block d-none img-fluid mx-3" src="./images/phone.gif"
                            width="150px">
                        <div>
                            <p class="mb-3 fw-bolder">Referral-Programs</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam corporis explicabo
                                reprehenderit perferendis sunt alias facere quam suscipit iusto enim! Dolores sapiente
                                assumenda
                                molestias recusandae labore aut autem. Officiis, qui!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------online-code-section--end--->

    <!-----testimonial-section--->
    <section class="common-section mb-5 pt-5 bg-color" id="about-us">
        <div class="container text-center common-title fw-bold">
            <h2 class="common-heading text-white">What Client says<br>About Us</h2>
            <hr class="w-25 mx-auto">
        </div>
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row g-5">
                            <div class="col-12 col-lg-4">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="card p-3" style="width: 18rem;">
                                        <img src="./images/Screenshot (110).png" class="card-img-top"
                                            alt="testimonial text">
                                        <div class="card-body">

                                            <h5 class="card-title mb-3">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make
                                                up the bulk of the card's content.</p>
                                            <div class="mt-3">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="card p-3" style="width: 18rem;">
                                        <img src="./images/Screenshot (110).png" class="card-img-top"
                                            alt="testimonial text">
                                        <div class="card-body">

                                            <h5 class="card-title mb-3">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make
                                                up the bulk of the card's content.</p>
                                            <div class="mt-3">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="card p-3" style="width: 18rem;">
                                        <img src="./images/Screenshot (110).png" class="card-img-top"
                                            alt="testimonial text">
                                        <div class="card-body">

                                            <h5 class="card-title mb-3">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make
                                                up the bulk of the card's content.</p>
                                            <div class="mt-3">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="card p-3" style="width: 18rem;">
                                        <img src="./images/Screenshot (110).png" class="card-img-top"
                                            alt="testimonial text">
                                        <div class="card-body">

                                            <h5 class="card-title mb-3">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make
                                                up the bulk of the card's content.</p>
                                            <div class="mt-3">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="card p-3" style="width: 18rem;">
                                        <img src="./images/Screenshot (110).png" class="card-img-top"
                                            alt="testimonial text">
                                        <div class="card-body">

                                            <h5 class="card-title mb-3">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make
                                                up the bulk of the card's content.</p>
                                            <div class="mt-3">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="card p-3" style="width: 18rem;">
                                        <img src="./images/Screenshot (110).png" class="card-img-top"
                                            alt="testimonial text">
                                        <div class="card-body">

                                            <h5 class="card-title mb-3">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make
                                                up the bulk of the card's content.</p>
                                            <div class="mt-3">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="card p-3" style="width: 18rem;">
                                        <img src="./images/Screenshot (110).png" class="card-img-top"
                                            alt="testimonial text">
                                        <div class="card-body">

                                            <h5 class="card-title mb-3">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make
                                                up the bulk of the card's content.</p>
                                            <div class="mt-3">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="card p-3" style="width: 18rem;">
                                        <img src="./images/Screenshot (110).png" class="card-img-top"
                                            alt="testimonial text">
                                        <div class="card-body">

                                            <h5 class="card-title mb-3">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make
                                                up the bulk of the card's content.</p>
                                            <div class="mt-3">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="card p-3" style="width: 18rem;">
                                        <img src="./images/Screenshot (110).png" class="card-img-top"
                                            alt="testimonial text">
                                        <div class="card-body">

                                            <h5 class="card-title mb-3">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make
                                                up the bulk of the card's content.</p>
                                            <div class="mt-3">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-----testimonial-section-end--->

    <!---expert-pannel--->
    <section class="common-section mb-10 pt-5">
        <div class="container text-center common-title fw-bold">
            <h2 class="common-heading">Tips and Tricks From<br>Our Experts</h2>
            <hr class="w-25 mx-auto">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="card" style="width: 18rem;">
                            <img src="./images/Hot Sale.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="d-flex justify-content"></div>
                                <h5 class="card-title mt-3">Web-Development</h5>
                                <p class="card-text mt-2 mb-3">Some quick example text to build on the card title and
                                    make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-dark px-4">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="card" style="width: 18rem;">
                            <img src="./images/pexels-rovenimagescom-949587.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="d-flex justify-content"></div>
                                <h5 class="card-title mt-3">Freelancing</h5>
                                <p class="card-text mt-2 mb-3">Some quick example text to build on the card title and
                                    make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-dark px-4">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="card" style="width: 18rem;">
                            <img src="./images/Hot Sale.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="d-flex justify-content"></div>
                                <h5 class="card-title mt-3">UI/UX Developer</h5>
                                <p class="card-text mt-2 mb-3">Some quick example text to build on the card title and
                                    make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-dark px-4">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="card" style="width: 18rem;">
                            <img src="./images/pexels-rovenimagescom-949587.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="d-flex justify-content"></div>
                                <h5 class="card-title mt-3">Graphic Designer</h5>
                                <p class="card-text mt-2 mb-3">Some quick example text to build on the card title and
                                    make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-dark px-4">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---expert-pannel-end-->

    <!------contact-section-->
    <!--contact--->
    <section class="common-section contact-section text-white mb-5 pt-5 bg-color" id="contact_section">
        <div class="custom-shape-divider-top-1696495929">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="shape-fill"></path>
            </svg>
        </div>
        <div class="container text-center common-title fw-bold">
            <h2 class="common-heading text-white">Contact Us</h2>
            <hr class="w-25 mx-auto">
        </div>
    <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
    <div class="form-group">
      <label>ID</label>
      <input type="text" name="id" autocomplete="off" class="form-control">  
     </div>
    <div class="form-group">
      <label>Username</label>
      <input type="text" name="user" autocomplete="off" class="form-control">  
     </div>
     <div class="form-group">
      <label>Email Id</label>
      <input type="text" name="email" autocomplete="off" class="form-control">  
     </div>
     <div class="form-group">
      <label>Mobile</label>
      <input type="text" name="mobile" autocomplete="off" class="form-control">  
     </div>
     <div class="form-group">
      <label>Comment</label>
       <textarea class="form-control" name="comments"></textarea> 
     </div>
     <button type="submit" class="btn btn-primary">Submit</button> 
    </form>
    </div>    
</section>
    <!------contact-section--end--->

    <!-----footer-section--->
    <footer>
        <footer class="main-footer-section">
            <div class="contact-details">
                <div class="container px-5">
                    <div class="row g-0">
                        <div class="col-lg-4 ">
                            <div class="contact-div p-5 d-flex flex-column justify-content-center align-items-center">
                                <div
                                    class="icon-div d-flex justify-content-center align-items-center rounded-circle mb-3">
                                    <img src="./images/Call (HD).png" alt="GIF Image" class="img-fluid">
                                </div>
                                <p class="text-white">(+00) 1234 5678</p>
                            </div>
                        </div>

                        <div class="col-lg-4 ">
                            <div class="contact-div p-5 d-flex flex-column justify-content-center align-items-center">
                                <div
                                    class="icon-div d-flex justify-content-center align-items-center rounded-circle mb-3">
                                    <!--                            <i class="fa-solid fa-phone"></i>-->
                                    <img src="./images/Email.png" alt="GIF Image" class="img-fluid">
                                </div>
                                <p class="text-white">(+00) 1234 5678</p>
                            </div>
                        </div>

                        <div class="col-lg-4 ">
                            <div class="contact-div p-5 d-flex flex-column justify-content-center align-items-center">
                                <div
                                    class="icon-div d-flex justify-content-center align-items-center rounded-circle mb-3">
                                    <img src="./images/map.gif" alt="GIF Image" class="img-fluid">
                                </div>
                                <p class="text-white">(+00) 1234 5678</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-section py-5 text-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-md-6 col-6">
                                <div class="footer-links">
                                    <h4 class="text-white mt-5 mb-3">About</h4>
                                    <ul class="text-light-grey list-unstyled d-flex flex-column gap-2">
                                        <li>Our Story</li>
                                        <li>Our Story</li>
                                        <li>Our Story</li>
                                        <li>Our Story</li>

                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-6 col-6">
                                <div class="footer-links">
                                    <h4 class="text-white mt-5 mb-3">About</h4>
                                    <ul class="text-light-grey list-unstyled d-flex flex-column gap-2">
                                        <li>Our Story</li>
                                        <li>Our Story</li>
                                        <li>Our Story</li>
                                        <li>Our Story</li>

                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-6 col-6">
                                <div class="footer-links">
                                    <h4 class="text-white mt-5 mb-3">About</h4>
                                    <ul class="text-light-grey list-unstyled d-flex flex-column gap-2">
                                        <li>Our Story</li>
                                        <li>Our Story</li>
                                        <li>Our Story</li>
                                        <li>Our Story</li>

                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="footer-links">
                                    <h4 class="mt-5 mb-3 text-white">Subscribe</h4>
                                    <div class="input-group mb-3 w-75">
                                        <input type="text" class="form-control" placeholder="Recipient's username"
                                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <span class="input-group-text btn btn-primary"
                                            id="basic-addon2">Subscribe</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container">
                    <hr class="container mx-auto">

                    <div class="row">
                        <div class="col-lg-8 col-12 ">
                            Copyright ©2023 All rights reserved. | This template is made with by <span class="bg-theme">
                                ThapaTechnical.com</span>
                        </div>
                        <div class="col-md-4 col-12  ">
                            <div class="d-flex justify-content-center justify-content-lg-end gap-5 mt-lg-0 mt-3">
                                <a href="https://www.instagram.com/thapatechnical/" target="_blank">
                                    <div
                                        class="icon-span d-flex justify-content-center align-items-center rounded-circle mb-3">
                                        <i class="fa-brands fa-instagram"></i>
                                    </div>
                                </a>
                                <div
                                    class="icon-span d-flex justify-content-center align-items-center rounded-circle mb-3">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </div>
                                <div
                                    class="icon-span d-flex justify-content-center align-items-center rounded-circle mb-3">
                                    <!--                            <i class="fa-brands fa-whatsapp"></i>-->
                                    <i class="fa-brands fa-twitter"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-----footer-section-end-->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

        <script>
            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
        </script>
</body>

</html>