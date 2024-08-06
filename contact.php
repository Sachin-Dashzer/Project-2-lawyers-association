<?php $page = 'contact-us'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact us || Scaoraindia</title>
    <meta name="description" content="" />
    <?php include 'include/head-links.php'; ?>
    <meta property="og:url" content="<?php echo $page_url ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="images/logo.png">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="<?php echo $page_url ?>">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="images/logo.png">
</head>

<body>
    <div class="wrapper">
        <?php include 'include/header.php'; ?>

        <div class="shorBanner">
            <picture>
                <source srcset="images/short-banner.webp" type="image/webp" />
                <img src="images/short-banner.jpg" alt="" />
            </picture>

            <div class="short-banner-text">
                <h1 class="large_heading">Contact us</h1>
                <div class="breadcrum">
                    <ul>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>



        <section>
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-6 order-2 order-md-1 mt-3 mt-md-0">

                        <div class="staffContainer p-md-3">
                            <div class="staffBox">
                                <div class="staffImg">
                                    <picture>
                                        <source srcset="images/dummy.webp" type="image/webp" />
                                        <img src="images/dummy.png" alt="" />
                                    </picture>
                                </div>
                                <div class="staffDetails">
                                    <h3 class="small_heading fontWeight700">Dinesh</h3>
                                    <h4 class="title mt-1"><span class="fontWeight700"></span>Support Staff</h4>
                                    <h5 class="title mt-2"><span class="fontWeight700">Phone: </span>0-123-456-7789</h5>
                                    <h5 class="title mt-1"><span class="fontWeight700">Email: </span>scaorainfo.in</h5>
                                </div>
                            </div>
                            <div class="staffBox">
                                <div class="staffImg">
                                    <picture>
                                        <source srcset="images/dummy.webp" type="image/webp" />
                                        <img src="images/dummy.png" alt="" />
                                    </picture>
                                </div>
                                <div class="staffDetails">
                                    <h3 class="small_heading fontWeight700">Sapna</h3>
                                    <h4 class="title mt-1"><span class="fontWeight700"></span>Support Staff</h4>
                                    <h5 class="title mt-2"><span class="fontWeight700">Phone: </span>0-123-456-7789</h5>
                                    <h5 class="title mt-1"><span class="fontWeight700">Email: </span>scaorainfo.in</h5>
                                </div>
                            </div>
                            <div class="staffBox">
                                <div class="staffImg">
                                    <picture>
                                        <source srcset="images/dummy.webp" type="image/webp" />
                                        <img src="images/dummy.png" alt="" />
                                    </picture>
                                </div>
                                <div class="staffDetails">
                                    <h3 class="small_heading fontWeight700">Gaurav</h3>
                                    <h4 class="title mt-1"><span class="fontWeight700"></span>Support Staff</h4>
                                    <h5 class="title mt-2"><span class="fontWeight700">Phone: </span>0-123-456-7789</h5>
                                    <h5 class="title mt-1"><span class="fontWeight700">Email: </span>scaorainfo.in</h5>
                                </div>
                            </div>
                        </div>






                    </div>
                    <div class="col-lg-6 pt-3 order-1 order-md-1">
                        <h2 class="large_heading text-center fontWeight700">Contact Us</h2>
                        <div class="newContactIcons">

                            <div class="connectIcon">
                                <div class="newIcons">
                                    <div class="loader">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="fontWeight700">Office Address</h3>

                                    <h5>GE-81A & GE-82, Ground Floor, Main Building, East Wing, Supreme Court of India, New Delhi-110001</h5>
                                </div>
                            </div>
                            <div class="connectIcon">
                                <div class="newIcons">
                                    <div class="loader">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="fontWeight700">Phone</h3>

                                    <h5><a class="text-black" href="tel:+91-011-23072352">+91-011-23072352</a></h5>
                                </div>
                            </div>
                            <div class="connectIcon">
                                <div class="newIcons">
                                    <div class="loader">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="fontWeight700">Mail</h3>

                                    <h5><a class="text-black" href="mailto:scaora1@gmail.com">scaora1@gmail.com</a></h5>
                                </div>
                            </div>
                            <div class="connectIcon">
                                <div class="newIcons">
                                    <div class="loader">
                                        <i class="fa-brands fa-youtube"></i>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="fontWeight700">YouTube</h3>

                                    <h5><a class="text-black" href="#">Scoara lectures</a></h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>








        <section class="bgLight">
            <div class="containerFull">

                <div class="row">
                    <div class="col-lg-6 px-md-5">

                        <h1 class="sub_heading fontWeight700 my-md-4 mb-4">For Any Query</h1>

                        <form class="mb-4 mb-md-0">

                            <div class="form-bottom row">

                                <div class="form-group col-lg-6">

                                    <input type="text" id="name" placeholder="Name (In Capital Letters)" name="name">
                                </div>
                                <div class="form-group col-lg-6">


                                    <input type="number" id="phone number" placeholder="Phone Number" name="phone number">
                                </div>
                                <div class="form-group col-lg-12">


                                    <input type="email" id="Email" placeholder="Email" name="Email">
                                </div>

                                <div class="form-group col-lg-12">

                                    <textarea id="massage" placeholder="Write a message.." name="massage"></textarea>
                                </div>






                            </div>
                            <button type="submit" class="btnTop">Submit Now</button>


                        </form>
                    </div>
                    <div class="col-lg-6 px-md-5">

                        <iframe class="rounded-3 stickyItem" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.2631285020907!2d77.23893697396772!3d28.621874903700576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce32a616ca37d%3A0xcfa50695c68a4a21!2sSupreme%20Court%20of%20India%20New%20Building%20(%20Extension%20)!5e0!3m2!1sen!2sin!4v1721813471154!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



                    </div>
                </div>
            </div>
        </section>












        <?php include 'include/footer.php'; ?>

    </div>
    <?php include 'include/footer-links.php'; ?>
</body>

</html>