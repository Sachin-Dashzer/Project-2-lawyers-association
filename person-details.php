<?php $page = 'directory'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Personal-details || Scaoraindia</title>
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



    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }

        td {
            padding: 8px;
            vertical-align: top;
        }

        .title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            padding: 20px 0;
        }

        .label {
            font-weight: bold;
            width: 190px;
        }

        .image-cell {
            text-align: center;
        }

        .image-cell img {
            width: 150px;
            height: 150px;
            border: 1px solid #ddd;
            border-radius: 50%;
        }

        .address-cell {
            width: 50%;
        }

        .section-title {
            font-weight: bold;
            font-size: 18px;
            margin-top: 20px;
        }
    </style>



</head>

<body>




    <div class="detailBoxnew">




        <div class="title">SCAORA MEMBERS DETAILS</div>
        <table border="1">
            <tr>
                <td class="label">Name :</td>
                <td>John Doe</td>
                <td rowspan="8" class="infoImgNew">
                    <picture>
                        <source srcset="images/dummy.webp" type="image/webp" />
                        <img src="images/dummy.png" alt="" />
                    </picture>
                </td>
            </tr>
            <tr>
                <td class="label">AOR Code :</td>
                <td>236847</td>
            </tr>
            <tr>
                <td class="label">Blood Group :</td>
                <td>B+</td>
            </tr>
            <tr>
                <td class="label">E-mail ID :</td>
                <td>info.Scaora@gmail.com</td>
            </tr>
            <tr>
                <td class="label">Mob No. :</td>
                <td>+0-123-456-7789</td>
            </tr>
            <tr>
                <td class="label">Emergency No. :</td>
                <td>+0-123-456-7789</td>
            </tr>
            <tr>
                <td class="label">Office Tel. :</td>
                <td>+0-123-456-7789</td>
            </tr>
            <tr>
                <td class="label">Resi. Tel. :</td>
                <td>+0-123-456-7789</td>
            </tr>
        </table>

        <table border="1">
            <tr>
                <td class="label">Office Address :</td>
                <td class="label">Chamber Address :</td>
            </tr>
            <tr>
                <td class="address-cell">GE-81A & GE-82, Ground Floor, Main Building, East Wing, Supreme Court of India, New Delhi-110001</td>
                <td class="address-cell">GE-81A & GE-82, Ground Floor, Main Building, East Wing, Supreme Court of India, New Delhi-110001</td>
                <!-- <td class="label">Residence Address :</td>
            <td colspan="3" class="address-cell">GE-81A & GE-82, Ground Floor, Main Building, East Wing, Supreme Court of India, New Delhi-110001</td> -->
            </tr>

        </table>
        <table border="1">


            <tr>
                <td class="label">Residence Address :</td>
                <td class="label">Resi. Tel. :</td>
            </tr>
            <tr>
                <td class="address-cell">GE-81A & GE-82, Ground Floor, Main Building, East Wing, Supreme Court of India, New Delhi-110001</td>
                <td class="address-cell">+0-123-456-7789</td>

            </tr>
        </table>
        <div class="sub_heading fontWeight700 text-center">Clerk Details</div>
        <table border="1">
            <tr>
                <td class="label">Regd Clerk Name :</td>
                <td>John Doe</td>
            </tr>
            <tr>
                <td class="label">Clerk Phone Number :</td>
                <td>+0-123-345-4366</td>
            </tr>
        </table>


    </div>



    <!-- 

    <section class="detailContainer">


        <div class="container px-5">



            <div class="detailBox py-4">
                <h3 class="heading text-center fontWeight700 mb-4">SCAORA MEMBERS DETAILS</h3>

                <div class="infoImg shadow">
                    <picture>
                        <source srcset="images/dummy.webp" type="image/webp" />
                        <img src="images/dummy.png" alt="" />
                    </picture>
                </div>



                


                <div class="infoBox mt-5">
                    <div class="infoHeading">Name : </div>
                    <div class="actualInfo"> John Doe</div>
                </div>

                <div class="infoBox mt-3">
                    <div class="infoHeading">AOR Code :</div>
                    <div class="actualInfo"> 236847</div>
                </div>

                <div class="infoBox mt-3">
                    <div class="infoHeading">Blood Group : </div>
                    <div class="actualInfo"> B+</div>
                </div>
                <div class="infoBox mt-3">
                    <div class="infoHeading">E-mail ID : </div>
                    <div class="actualInfo"> info.Scaora@gmail.com</div>
                </div>
                <div class="infoBox mt-3">
                    <div class="infoHeading">Mob No. : </div>
                    <div class="actualInfo"> +0-123-456-7789</div>
                </div>
                <div class="infoBox mt-3">
                    <div class="infoHeading">Emergency No. : </div>
                    <div class="actualInfo"> +0-123-456-7789</div>
                </div>









                <div class="row mt-4">
                    <div class="col-lg-5 pe-5">
                        <div class="infoBox">
                            <div class="infoHeading">Office Address : </div>
                            <div class="actualInfo"> GE-81A & GE-82, Ground Floor, Main Building, East Wing, Supreme Court of India, New Delhi-110001</div>
                        </div>
                        <div class="infoBox mt-3">
                            <div class="infoHeading">Office Tel. : </div>
                            <div class="actualInfo"> +0-123-456-7789</div>
                        </div>


                    </div>
                    <div class="col-lg-5">

                        <div class="infoBox">
                            <div class="infoHeading">Chamber Address : </div>
                            <div class="actualInfo"> GE-81A & GE-82, Ground Floor, Main Building, East Wing, Supreme Court of India, New Delhi-110001</div>
                        </div>

                    </div>
                </div>



                <div class="infoBox  mt-4">
                    <div class="infoHeading">Residence Address : </div>
                    <div class="actualInfo"> GE-81A & GE-82, Ground Floor, Main Building, East Wing, Supreme Court of India, New Delhi-110001</div>
                </div>
                <div class="infoBox mt-3">
                    <div class="infoHeading">Resi. Tel. : </div>
                    <div class="actualInfo"> +0-123-456-7789</div>
                </div>

                <h3 class="small_heading mt-4 fontWeight700 text-decoration-underline">Clerk Details</h3>
                <div class="infoBox mt-3">
                    <div class="infoHeading">Regd Clerk Name : </div>
                    <div class="actualInfo"> John Doe</div>
                </div>
                <div class="infoBox mt-3">
                    <div class="infoHeading">Clerk Phone Number : </div>
                    <div class="actualInfo"> +0-123-345-4366</div>
                </div>
            </div>


    </section>
 -->




    <?php include 'include/footer-links.php'; ?>
</body>

</html>