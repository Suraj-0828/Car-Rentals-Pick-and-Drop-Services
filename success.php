<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Title and Discription start --> 
	<meta charset="UTF-8"/>
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Booking Request Successful!</title>

	<meta name="description"
		content="Thank you for choosing Singh’s Rental. We’ve received your request and will get back to you shortly with the next steps.">
	
	<meta name="Keywords" content="Here you type your SEO content..... Key like.......">

	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="1 day">
	<meta name="language" content="English">
	<meta name="generator" content="N/A">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Pragma" content="no-cache" />
	<!-- Title and Discription close -->

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/fevicon.png" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="images/fevicon.png">

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"><!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/animate.min.css"><!-- WOW ANIMATION STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"><!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/lc_lightbox.css"><!-- LC LIGHT BOX POPUP -->
    <link rel="stylesheet" type="text/css" href="css/feather.css"><!-- FEATHER ICON SHEET -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css"><!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.min.css"><!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/swiper-bundle.min.css"><!-- SWIPER Slider -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.min.css"><!-- DATETIMEPICKER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/style.css"><!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css"><!-- CUSTOM SCROLLBAR -->

    <style>
		.success {
            text-align: center;
            margin: auto;
            background-color: gray;
            color: black;
        }

        .successful {
            text-align: center;
            margin: auto;
            padding: 60px 50px 20px 50px;
            font-size: 40px !important;
            line-height: 50px;
            color: black;
        }

        .imgg {
            max-width: 100%;
        }

        .img-size {
            width: 100px;
            height: 100px;
            margin: auto;
            margin-top: 25px;
            margin-bottom: -20px;
        }

        .text-black {
            padding-bottom: 30px;
        }

        .bold-name{
            color: green;
        }

        .color-success {
            color: #6BC839;
        }

        .pp {
            text-align: center;
        }

        @media (max-width: 576px) {

            /* Extra small devices (phones) */
            .successful {
                font-size: 15px !important;
            }
        }
	</style>
</head>

<body>



    <div class="page-wraper">

        <?php include 'header.php'; ?>

        <!-- CONTENT START -->
        <div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr site-bg-dark  twm-primary-overlay-wrap" style="background-image: url(images/banner/banner-12.jpg);">
                <div class="twm-primary-overlay"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="wt-title">Success</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->


            	<div class="container pt-5 pb-4">
            <div class="img-size">
                <img class="imgg" src="images/home/success.png" />
            </div>
           <div class="successful text-black">
            Thank you, <span class="font-weight-bold"><?php echo $name; ?>,</span> for your inquiry!<br>
            Your Request Has Been <span class="bold-name">Successfully</span> Submited
            </div>
            <div class="pp text-black">
                Our dedicated care coordinator will reach out to you as soon as possible to assist you further.
            </div>
        </div>


        </div>
        <!-- CONTENT END -->

        <?php include 'footer.php'; ?>