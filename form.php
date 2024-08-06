<?php $page = 'Form'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>form || Scaoraindia</title>
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

        <section>
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-10 offset-1 p-4 shadow rounded-3">
                        <h1 class="sub_heading fontWeight700 text-center mb-5">SCAORA DIRECTORY FORM</h1>

                        <form>



                            <div class="form-bottom row">

                                <div class="form-group col-lg-12">
                                    <!-- <label for="name">Name</label> -->

                                    <input type="text" id="name" placeholder="Name" name="name">
                                </div>
                                <div class="form-group col-lg-6">

                                    <!-- <label for="aor-code">AOR Code</label> -->

                                    <input type="text" id="aor-code" placeholder="AOR Code" name="aor-code">


                                </div>
                                <div class="form-group col-lg-6">

                                    <!-- <label for="blood-group">Blood Group</label> -->

                                    <input type="text" id="blood-group" placeholder="Blood Group" name="blood-group">


                                </div>
                                <div class="form-group col-lg-6">
                                    <!-- <label for="mobile-no">Mob No.</label> -->

                                    <input type="number" id="mobile-no" placeholder="Mob No." name="mobile-no">
                                </div>
                                
                                <div class="form-group col-lg-6">
                                    <!-- <label for="email-id">E-mail ID</label> -->

                                    <input type="email" id="email-id" placeholder="E-mail ID" name="email-id">
                                </div>


                                <div class="form-group col-lg-6">

                                    <!-- <label for="office-address">Office Address</label> -->

                                    <textarea id="office-address" placeholder="Office Address" name="office-address"></textarea>
                                </div>

                                <div class="form-group col-lg-6">
                                    <!-- <label for="chamber-address">chamber Address</label> -->

                                    <textarea id="chamber-address" placeholder="Chamber Address" name="chamber-address"></textarea>
                                </div>

                                <div class="form-group col-lg-6">
                                    <!-- <label for="office-tel">Office Tel.</label> -->

                                    <input type="number" id="office-tel" placeholder="Office Tel." name="office-tel">
                                </div>
                                <div class="form-group col-lg-6">
                                    <!-- <label for="emergency-no">Emergency No.</label> -->

                                    <input type="number" id="emergency-no" placeholder="Emergency No." name="emergency-no">
                                </div>

                                <div class="form-group col-lg-6">
                                    <!-- <label for="residence-address">Residence Address</label> -->

                                    <textarea id="residence-address" placeholder="Residence Address" name="residence-address"></textarea>
                                </div>
                                <div class="form-group col-lg-6">

                                    <!-- <label for="residence-tel">Resi. Tel.</label> -->

                                    <input type="number" id="residence-tel" placeholder="Resi. Tel." name="residence-tel">
                                </div>
                                <h3 class="small_heading text-center fontWeight700 mt-3 mb-4">Clerk Details</h3>

                                <div class="form-group col-lg-6">

                                    <!-- <label for="regd-clerk-name">Regd Clerk Name</label> -->

                                    <input type="text" id="regd-clerk-name" placeholder="Regd Clerk Name" name="regd-clerk-name">
                                </div>

                                <div class="form-group col-lg-6">

                                    <!-- <label for="regd-clerk-phone">Phone Number</label> -->

                                    <input type="number" id="regd-clerk-phone" placeholder="Clerk Phone Number" name="regd-clerk-phone">
                                </div>
                                <div class="form-group col-lg-6">

                                    <label for="regd-clerk-phone">Upload Image</label>

                                    <input type="file" id="user-photo" placeholder="Upload Image" name="user-photo">
                                </div>
                                <br />
                            </div>
                            <button type="submit" class="btnTop">Submit Now</button>


                        </form>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'include/footer.php'; ?>

    </div>
    <?php include 'include/footer-links.php'; ?>
</body>

</html>