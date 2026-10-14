
<?php
    $is_about_page = is_page() &&
    has_term('about-us', 'category', get_queried_object_id());
?>

<!-- =========================
     SCHOOL FOOTER
========================= -->
<footer class="smv-footer">

    <div class="container">

        <div class="smv-footer-main">

            <!-- BRAND -->
            <div class="smv-footer-brand">

                <figure>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shree-mahalingeshwara-vidyanikethana-school-logo.png"
                         alt="Shree Mahalingeshwara Vidyanikethana School Logo"
                         title="Shree Mahalingeshwara Vidyanikethana">
                    <figcaption class="cr-only">
                        Shree Mahalingeshwara Vidyanikethana School emblem representing knowledge, integrity, value-centric learning, and educational service in Kunjathur.
                    </figcaption>
                </figure>

                <!-- <h3>
                    Shree Mahalingeshwara<br>
                    Vidyanikethana
                </h3>

                <div class="smv-footer-location">
                    KUNJATHUR
                </div> -->

                <p>
                    Empowering young minds with knowledge, values
                    and compassion for a brighter tomorrow.
                </p>

                <div class="smv-social">

                    <a href="#">
                        <i class="bi bi-facebook"></i>
                    </a>

                    <a href="#">
                        <i class="bi bi-youtube"></i>
                    </a>

                    <a href="#">
                        <i class="bi bi-instagram"></i>
                    </a>

                    <a href="#">
                        <i class="bi bi-twitter-x"></i>
                    </a>

                </div>

            </div>


            <!-- MAIN MENU -->
            <div class="smv-footer-menu">

                <h4>Explore</h4>

                <div class="smv-footer-line"></div>

                <div class="row">

                    <div class="col-6">

                        <a href="<?php echo home_url('/'); ?>">Home</a>
                        <a href="<?php echo home_url('/overview'); ?>">About Us</a>
                        <a href="<?php echo home_url('/curriculum'); ?>">Academics</a>
                        <a href="<?php echo home_url('/admission-overview'); ?>">Admissions</a>

                    </div>

                    <div class="col-6">

                        <a href="<?php echo home_url('/facilities'); ?>">Facilities</a>
                        <a href="<?php echo home_url('/gallery'); ?>">Gallery</a>
                        <a href="<?php echo home_url('/news-and-events'); ?>">News & Events</a>
                        <a href="<?php echo home_url('/contact-us'); ?>">Contact Us</a>

                    </div>

                </div>

            </div>


            <!-- CONTACT -->
            <div class="smv-footer-contact">

                <h4>Get In Touch</h4>

                <div class="smv-footer-line"></div>

                <div class="smv-contact-row">

                    <div class="smv-contact-icon">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>

                    <p>
                        Kunjathur, Manjeshwar<br>
                        Kasaragod, Kerala – 671323
                    </p>

                </div>

                <div class="smv-contact-row">

    <div class="smv-contact-icon blue">
        <i class="bi bi-telephone-fill"></i>
    </div>

    <p>
        <a href="tel:+914998278940">
            +91 4998 278940
        </a><br>

        <a href="tel:+918921400582">
            +91 89214 00582
        </a>
    </p>

</div>


<div class="smv-contact-row">

    <div class="smv-contact-icon">
        <i class="bi bi-envelope-fill"></i>
    </div>

    <p>
        <a href="mailto:smvkunjathur@gmail.com">
            smvkunjathur@gmail.com
        </a>
    </p>

</div>

            </div>

        </div>

    </div>


    <!-- SIMPLE BOTTOM BAR -->
    <div class="smv-footer-bottom">

        <div class="container">

            <div class="smv-footer-bottom-inner">

                <div class="smv-copyright">
                    © 2026 Shree Mahalingeshwara Vidyanikethana,
                    Kunjathur. All Rights Reserved.
                </div>

                <div class="smv-powered">
                    Powered by
                    <a href="https://bluelinecomputers.com/"
                       target="_blank">
                        Blue Line Computers
                    </a>
                </div>

            </div>

        </div>

    </div>

</footer>

<!-- =============================================================
     OFFCANVAS NAVIGATION
     KEEP THIS DIRECTLY UNDER BODY.
     DO NOT PUT IT INSIDE HERO/SECTION.
============================================================= -->

<div
    class="offcanvas offcanvas-end school-navigation-offcanvas"
    tabindex="-1"
    id="schoolNavigation"
    aria-labelledby="schoolNavigationLabel"
>

    <!-- OFFCANVAS HEADER -->

    <div class="offcanvas-header">

        <a href="#" aria-label="School Home">

            <figure>
                <img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shree-mahalingeshwara-vidyanikethana-school-logo.png"
                    alt="Shree Mahalingeshwara Vidyanikethana Navigation Logo"
                    title="Shree Mahalingeshwara Vidyanikethana Navigation Logo"
                    class="school-offcanvas-brand"
                >
                <figcaption class="cr-only">
                    Mobile navigation logo for Shree Mahalingeshwara Vidyanikethana School portal in Kunjathur.
                </figcaption>
            </figure>

        </a>

        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="offcanvas"
            aria-label="Close"
        ></button>

    </div>


    <!-- OFFCANVAS BODY -->

    <div class="offcanvas-body">

        <nav aria-label="Main navigation">

            <ul class="school-menu-list">


                <!-- HOME -->

                <li class="school-menu-item">

                    <a
                        href="<?php echo esc_url(home_url('/')); ?>"
                        class="school-menu-link  <?php echo is_front_page() ? 'school-menu-active' : ''; ?>"
                        
                    >
                        Home
                    </a>

                </li>


                <!-- ABOUT -->

                <li class="school-menu-item">

                    <button
                        class="school-menu-parent"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#schoolAboutMenu"
                        aria-expanded="<?php echo $is_about_page ? 'true' : 'false'; ?>"
                        aria-controls="schoolAboutMenu"
                    >
                        <span>About Us</span>
                        <span class="school-menu-arrow"></span>
                    </button>


                    <div
                        class="collapse <?php echo $is_about_page ? 'show' : ''; ?>"
                        id="schoolAboutMenu"
                    >

                        <!-- <ul class="school-submenu">

                            <li>
                                <a href="overview.html">Overview</a>
                            </li>

                            <li>
                                <a href="history-of-the-institute.html">History of the Institution</a>
                            </li>

                            <li>
                                <a href="vision-and-mission.html">Vision &amp; Mission</a>
                            </li>

                            <li>
                                <a href="presidents-message.html">President's Message</a>
                            </li>

                            <li>
                                <a href="principals-message.html">Principal’s Message</a>
                            </li>

                            <li>
                                <a href="management-committee.html">Management Committee</a>
                            </li>

                        </ul> -->

                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'about-menu',
                            'container' => false,
                            'menu_class' => 'school-submenu',
                            'fallback_cb' => true,
                        ));
                        ?>
                    </div>
                    

                </li>
                
                <!-- ACADEMICS -->

                <li class="school-menu-item">

                    <button
                        class="school-menu-parent"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#schoolAcademicsMenu"
                        aria-expanded="<?php echo is_page() && has_term('academics', 'category', get_queried_object_id()) ? 'true' : 'false'; ?>"
                        aria-controls="schoolAcademicsMenu"
                    >
                        <span>Academics</span>
                        <span class="school-menu-arrow"></span>
                    </button>


                    <div
                        class="collapse <?php echo is_page() && has_term('academics', 'category', get_queried_object_id()) ? 'show' : ''; ?>"
                        id="schoolAcademicsMenu"
                    >

                        <!-- <ul class="school-submenu">

                            <li>
                                <a href="curriculam.html">Curriculum</a>
                            </li>

                            <li>
                                <a href="classes-offered.html">Classes Offered</a>
                            </li>

                            <li>
                                <a href="academic-calender.html">Academic Calendar</a>
                            </li>

                            <li>
                                <a href="examination-and-evaluation.html">Examination &amp; Evaluation</a>
                            </li>

                            <li>
                                <a href="teaching-methodology.html">Teaching Methodology</a>
                            </li>

                            <li>
                                <a href="co-curricular-activities.html">Co-Curricular Activities</a>
                            </li>

                        </ul> -->

                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'academics-menu',
                            'container' => false,
                            'menu_class' => 'school-submenu',
                            'fallback_cb' => true,
                        ));
                        ?>

                    </div>

                </li>


                <!-- ADMISSIONS -->

                <li class="school-menu-item">

                    <button
                        class="school-menu-parent"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#schoolAdmissionsMenu"
                        aria-expanded="<?php echo is_page() && has_term('admissions', 'category', get_queried_object_id()) ? 'true' : 'false'; ?>"
                        aria-controls="schoolAdmissionsMenu"
                    >
                        <span>Admissions</span>
                        <span class="school-menu-arrow"></span>
                    </button>


                    <div
                        class="collapse <?php echo is_page() && has_term('admissions', 'category', get_queried_object_id()) ? 'show' : ''; ?>"
                        id="schoolAdmissionsMenu"
                    >

                        <!-- <ul class="school-submenu">

                            <li>
                                <a href="admission-overview.html">Admission Overview</a>
                            </li>

                            <li>
                                <a href="required-documents.html">Required Documents</a>
                            </li>

                            <li>
                                <a href="fee-structure.html">Fee Structure</a>
                            </li>

                            <li>
                                <a href="admission-enquiry.html">Admission Inquiry</a>
                            </li>

                        </ul> -->
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'admissions-menu',
                            'container' => false,
                            'menu_class' => 'school-submenu',
                            'fallback_cb' => true,
                        ));
                        ?>

                    </div>

                </li>


                <!-- FACILITIES -->

                <li class="school-menu-item">

                    <a
                        href="<?php echo home_url('/facilities'); ?>"
                        class="school-menu-link <?php echo is_page() && get_queried_object_id() == get_page_by_path('facilities')->ID ? 'school-menu-active' : ''; ?>"
                    >
                        Facilities
                    </a>

                </li>


                <!-- FACULTY -->

                <li class="school-menu-item">

                    <button
                        class="school-menu-parent"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#schoolFacultyMenu"
                        aria-expanded="<?php echo is_page() && has_term('faculty-staff', 'category', get_queried_object_id()) ? 'true' : 'false'; ?>"
                        aria-controls="schoolFacultyMenu"
                    >
                        <span>Faculty &amp; Staff</span>
                        <span class="school-menu-arrow"></span>
                    </button>


                    <div
                        class="collapse <?php echo is_page() && has_term('faculty-staff', 'category', get_queried_object_id()) ? 'show' : ''; ?>"
                        id="schoolFacultyMenu"
                    >

                        <!-- <ul class="school-submenu">

                            <li>
                                <a href="teaching-staff.html">Teaching Staff</a>
                            </li>

                            <li>
                                <a href="non-teaching-staff.html">Non-Teaching Staff</a>
                            </li>

                            <li>
                                <a href="staff-activities.html">Staff Activities</a>
                            </li>

                        </ul> -->
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'faculty-and-staff-menu',
                            'container' => false,
                            'menu_class' => 'school-submenu',
                            'fallback_cb' => true,
                        ));
                        ?>

                    </div>

                </li>


                <!-- STUDENTS -->

                <li class="school-menu-item">

                    <button
                        class="school-menu-parent"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#schoolStudentsMenu"
                        aria-expanded="<?php echo is_page() && has_term('students-corner', 'category', get_queried_object_id()) ? 'true' : 'false'; ?>"
                        aria-controls="schoolStudentsMenu"
                    >
                        <span>Students Corner</span>
                        <span class="school-menu-arrow"></span>
                    </button>


                    <div
                        class="collapse <?php echo is_page() && has_term('students-corner', 'category', get_queried_object_id()) ? 'show' : ''; ?>"
                        id="schoolStudentsMenu"
                    >

                        <!-- <ul class="school-submenu">

                            <li>
                                <a href="student-achievements.html">Student Achievements</a>
                            </li>

                            <li>
                                <a href="clubs-and-activities.html">Clubs &amp; Activities</a>
                            </li>

                        </ul> -->
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'students-corner-menu',
                            'container' => false,
                            'menu_class' => 'school-submenu',
                            'fallback_cb' => true,
                        ));
                        ?>

                    </div>

                </li>


                <!-- GALLERY -->

                <li class="school-menu-item <?php echo is_page() && get_queried_object_id() == get_page_by_path('facilities')->ID ? 'school-menu-active' : ''; ?>">

                    <a href="<?php echo home_url('/gallery'); ?>" class="school-menu-link">
                        Gallery
                    </a>

                </li>


                <!-- NEWS -->

                <li class="school-menu-item">

                    <a href="<?php echo home_url('/news-and-events'); ?>" class="school-menu-link">
                        News &amp; Events
                    </a>

                </li>


                <!-- DISCLOSURE -->

                <li class="school-menu-item">

                    <a href="<?php echo home_url('/mandatory-disclosure'); ?>" class="school-menu-link">
                        Mandatory Disclosure
                    </a>

                </li>


                <!-- CONTACT -->

                <li class="school-menu-item">

                    <a href="<?php echo home_url('/contact-us'); ?>" class="school-menu-link">
                        Contact Us
                    </a>

                </li>

            </ul>

        </nav>


        <!-- OFFCANVAS FOOTER -->

        <div class="school-offcanvas-footer">

            <div class="school-offcanvas-footer-title">
                Every Child Matters
            </div>

            <p class="school-offcanvas-footer-text">
                Education · Values · Community
            </p>

        </div>

    </div>

</div>


<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
 <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-3.7.1.min.js"></script> 
<!-- =============================================================
     HEADER SCROLL SCRIPT
============================================================= -->

<script>

    document.addEventListener("DOMContentLoaded", function () {

        const schoolHeader =
            document.getElementById("schoolMainHeader");

        const schoolSpacer =
            document.getElementById("schoolHeaderSpacer");

        const schoolScrollPoint = 70;


        function schoolHandleHeaderScroll() {

            if (window.scrollY > schoolScrollPoint) {

                schoolHeader.classList.add(
                    "school-header-scrolled"
                );

                schoolSpacer.classList.add(
                    "school-spacer-active"
                );

            } else {

                schoolHeader.classList.remove(
                    "school-header-scrolled"
                );

                schoolSpacer.classList.remove(
                    "school-spacer-active"
                );

            }

        }


        window.addEventListener(
            "scroll",
            schoolHandleHeaderScroll,
            {
                passive: true
            }
        );


        schoolHandleHeaderScroll();

    });


</script>


<!-- =============================================================
     CLOSE OFFCANVAS AFTER NORMAL LINK CLICK
============================================================= -->

<script>

    document.addEventListener("DOMContentLoaded", function () {

        const schoolNavigation =
            document.getElementById("schoolNavigation");

        const schoolOffcanvas =
            bootstrap.Offcanvas.getOrCreateInstance(
                schoolNavigation
            );


        schoolNavigation
            .querySelectorAll(
                ".school-submenu a, .school-menu-link"
            )
            .forEach(function (schoolLink) {

                schoolLink.addEventListener(
                    "click",
                    function () {

                        schoolOffcanvas.hide();

                    }
                );

            });

    });

</script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
$(document).ready(function () {

    $('.school-events-carousel').owlCarousel({

        loop: true,

        margin: 22,

        nav: true,

        dots: false,

        autoplay: true,

        autoplayTimeout: 4500,

        autoplayHoverPause: true,

        smartSpeed: 700,

        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],

        responsive: {

            0: {
                items: 1
            },

            576: {
                items: 1
            },

            768: {
                items: 2
            },

            992: {
                items: 3
            }

        }

    });

});
</script>
</body>
</html>
