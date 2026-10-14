<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <title>Shree Mahalingeshwara Vidyanikethana Kunjathur</title>
     <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.png">
    <meta name="theme-color" content="#f58220" >
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


   
    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

 
<link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet"
    >

     <!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">




      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css">
</head>
<body>
<!-- =============================================================
     HEADER
============================================================= -->

<header id="schoolMainHeader" class="school-main-header">

    <div class="container-fluid px-3 px-lg-5 h-100">

        <div class="school-header-inner">

            <!-- SCHOOL LOGO -->
            <a href="<?php echo home_url(); ?>" aria-label="Shree Mahalingeshwara Vidyanikethana">
                <figure>
                    <img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shree-mahalingeshwara-vidyanikethana-school-logo.png"
                        alt="Shree Mahalingeshwara Vidyanikethana School Logo"
                        title="Shree Mahalingeshwara Vidyanikethana Logo"
                        class="school-header-logo"
                    >
                    <figcaption class="cr-only">
                        Official logo of Shree Mahalingeshwara Vidyanikethana School, a premier educational institution providing quality holistic education, academic excellence, moral values, and cultural heritage in Kunjathur, Kasaragod.
                    </figcaption>
                </figure>
            </a>


            <!-- RIGHT SIDE -->
            <div class="school-header-right">

              


                <!-- BOOTSTRAP OFFCANVAS TOGGLER -->
                <button
                    class="school-menu-trigger"
                    type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#schoolNavigation"
                    aria-controls="schoolNavigation"
                    aria-label="Open navigation"
                >
                    <span></span>
                </button>

            </div>

        </div>

    </div>

</header>


<!-- =============================================================
     HEADER SPACER
============================================================= -->

<div id="schoolHeaderSpacer" class="school-header-spacer"></div>

