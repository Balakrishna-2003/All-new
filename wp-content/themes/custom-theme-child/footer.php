
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
<!-- OFFCANVAS NAVIGATION -->
<div class="offcanvas offcanvas-end school-navigation-offcanvas"
     tabindex="-1"
     id="schoolNavigation"
     aria-labelledby="schoolNavigationLabel">

    <div class="offcanvas-header">
        <a href="index.html" aria-label="School Home">
            <figure>
                <img src="images/shree-mahalingeshwara-vidyanikethana-school-logo.png"
                     alt="Shree Mahalingeshwara Vidyanikethana"
                     title="Shree Mahalingeshwara Vidyanikethana Navigation Logo"
                     class="school-offcanvas-brand">
                <figcaption class="cr-only">
                    Shree Mahalingeshwara Vidyanikethana navigation menu and campus gallery link.
                </figcaption>
            </figure>
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">
        <nav aria-label="Main navigation">
            <ul class="school-menu-list">
                <li class="school-menu-item">
                    <a href="index.html" class="school-menu-link">Home</a>
                </li>

                <li class="school-menu-item">
                    <button class="school-menu-parent" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#schoolAboutMenu"
                            aria-expanded="false" aria-controls="schoolAboutMenu">
                        <span>About Us</span>
                        <span class="school-menu-arrow"></span>
                    </button>
                    <div class="collapse" id="schoolAboutMenu">
                        <ul class="school-submenu">
                            <li><a href="overview.html">Overview</a></li>
                            <li><a href="history-of-the-institute.html">History of the Institution</a></li>
                            <li><a href="vision-and-mission.html">Vision &amp; Mission</a></li>
                            <!-- <li><a href="founders-message.html">Founder's Message</a></li> -->
                            <li><a href="presidents-message.html">President's Message</a></li>
                            <li><a href="principals-message.html">Principal's Message</a></li>
                            <li><a href="management-committee.html">Management Committee</a></li>
                        </ul>
                    </div>
                </li>

                <li class="school-menu-item">
                    <button class="school-menu-parent" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#schoolAcademicsMenu"
                            aria-expanded="false" aria-controls="schoolAcademicsMenu">
                        <span>Academics</span>
                        <span class="school-menu-arrow"></span>
                    </button>
                    <div class="collapse" id="schoolAcademicsMenu">
                        <ul class="school-submenu">
                            <li><a href="curriculam.html">Curriculum</a></li>
                            <li><a href="classes-offered.html">Classes Offered</a></li>
                            <li><a href="academic-calender.html">Academic Calendar</a></li>
                            <li><a href="examination-and-evaluation.html">Examination &amp; Evaluation</a></li>
                            <li><a href="teaching-methodology.html">Teaching Methodology</a></li>
                            <li><a href="co-curricular-activities.html">Co-Curricular Activities</a></li>
                        </ul>
                    </div>
                </li>

                <li class="school-menu-item">
                    <button class="school-menu-parent" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#schoolAdmissionsMenu"
                            aria-expanded="false" aria-controls="schoolAdmissionsMenu">
                        <span>Admissions</span>
                        <span class="school-menu-arrow"></span>
                    </button>
                    <div class="collapse" id="schoolAdmissionsMenu">
                        <ul class="school-submenu">
                            <li><a href="admission-overview.html">Admission Overview</a></li>
                            <li><a href="required-documents.html">Required Documents</a></li>
                            <li><a href="fee-structure.html">Fee Structure</a></li>
                            <li><a href="admission-enquiry.html">Admission Inquiry</a></li>
                        </ul>
                    </div>
                </li>

                <li class="school-menu-item">
                    <a href="facilities.html" class="school-menu-link">Facilities</a>
                </li>

                <li class="school-menu-item">
                    <button class="school-menu-parent" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#schoolFacultyMenu"
                            aria-expanded="false" aria-controls="schoolFacultyMenu">
                        <span>Faculty &amp; Staff</span>
                        <span class="school-menu-arrow"></span>
                    </button>
                    <div class="collapse" id="schoolFacultyMenu">
                        <ul class="school-submenu">
                            <li><a href="teaching-staff.html">Teaching Staff</a></li>
                            <li><a href="non-teaching-staff.html">Non-Teaching Staff</a></li>
                            <li><a href="staff-activities.html">Staff Activities</a></li>
                        </ul>
                    </div>
                </li>

                <li class="school-menu-item">
                    <button class="school-menu-parent" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#schoolStudentsMenu"
                            aria-expanded="false" aria-controls="schoolStudentsMenu">
                        <span>Students Corner</span>
                        <span class="school-menu-arrow"></span>
                    </button>
                    <div class="collapse" id="schoolStudentsMenu">
                        <ul class="school-submenu">
                            <li><a href="student-achievements.html">Student Achievements</a></li>
                            <li><a href="clubs-and-activities.html">Clubs &amp; Activities</a></li>
                        </ul>
                    </div>
                </li>

                <li class="school-menu-item">
                    <a href="gallery.html" class="school-menu-link school-menu-active">Gallery</a>
                </li>

                <li class="school-menu-item">
                    <a href="news-and-events.html" class="school-menu-link">News &amp; Events</a>
                </li>

                <li class="school-menu-item">
                    <a href="mandatory-disclosure.html" class="school-menu-link">Mandatory Disclosure</a>
                </li>

                <li class="school-menu-item">
                    <a href="contact-us.html" class="school-menu-link">Contact Us</a>
                </li>
            </ul>
        </nav>

        <div class="school-offcanvas-footer">
            <div class="school-offcanvas-footer-title">Every Child Matters</div>
            <p class="school-offcanvas-footer-text">Education · Values · Community</p>
        </div>
    </div>
</div>


<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.7.1.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const schoolHeader = document.getElementById("schoolMainHeader");
        const schoolSpacer = document.getElementById("schoolHeaderSpacer");
        const schoolScrollPoint = 70;

        function schoolHandleHeaderScroll() {
            if (window.scrollY > schoolScrollPoint) {
                schoolHeader.classList.add("school-header-scrolled");
                schoolSpacer.classList.add("school-spacer-active");
            } else {
                schoolHeader.classList.remove("school-header-scrolled");
                schoolSpacer.classList.remove("school-spacer-active");
            }
        }

        window.addEventListener("scroll", schoolHandleHeaderScroll, { passive: true });
        schoolHandleHeaderScroll();
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const schoolNavigation = document.getElementById("schoolNavigation");
        const schoolOffcanvas = bootstrap.Offcanvas.getOrCreateInstance(schoolNavigation);

        schoolNavigation
            .querySelectorAll(".school-submenu a, .school-menu-link")
            .forEach(function (schoolLink) {
                schoolLink.addEventListener("click", function () {
                    schoolOffcanvas.hide();
                });
            });
    });
</script>

<!-- =========================================================
     JUSTIFIED GALLERY LAYOUT + FILTER + LIGHTBOX
     (with figure/figcaption + keyboard accessibility)
========================================================= -->
<!-- <script>
    (function () {
        const grid       = document.getElementById("galGrid");
        const emptyState = document.getElementById("galEmpty");
        const GAP        = 14;

        function getTargetRowHeight() {
            const w = window.innerWidth;
            if (w < 576) return 130;
            if (w < 768) return 160;
            if (w < 992) return 200;
            if (w < 1200) return 240;
            return 280;
        }

        function layoutJustified() {
            const allTiles = Array.from(grid.querySelectorAll(".gal-tile"));
            const tiles = allTiles.filter(t => !t.classList.contains("is-hidden"));

            if (!tiles.length) {
                grid.style.height = "0px";
                return;
            }

            const containerWidth = grid.clientWidth;
            const targetH = getTargetRowHeight();

            const items = tiles.map(tile => {
                const img = tile.querySelector("img");
                let ratio = 4 / 3;
                if (img && img.naturalWidth && img.naturalHeight) {
                    ratio = img.naturalWidth / img.naturalHeight;
                }
                return { tile, ratio };
            });

            const rows = [];
            let currentRow = [];
            let currentRowRatioSum = 0;

            items.forEach(item => {
                currentRow.push(item);
                currentRowRatioSum += item.ratio;

                const neededWidth = currentRowRatioSum * targetH + GAP * (currentRow.length - 1);

                if (neededWidth >= containerWidth) {
                    rows.push(currentRow);
                    currentRow = [];
                    currentRowRatioSum = 0;
                }
            });

            if (currentRow.length) {
                if (rows.length && currentRow.length === 1 && currentRowRatioSum > 2.2) {
                    rows[rows.length - 1] = rows[rows.length - 1].concat(currentRow);
                } else {
                    rows.push(currentRow);
                }
            }

            let y = 0;

            rows.forEach(row => {
                const ratioSum = row.reduce((s, i) => s + i.ratio, 0);
                const totalGaps = GAP * (row.length - 1);
                const idealRowHeight = (containerWidth - totalGaps) / ratioSum;

                const isLastRow = (row === rows[rows.length - 1]);
                let rowHeight = idealRowHeight;
                if (isLastRow && row.length < 3 && idealRowHeight > targetH * 1.4) {
                    rowHeight = targetH * 1.4;
                }

                let x = 0;
                row.forEach(item => {
                    const tileWidth = item.ratio * rowHeight;
                    item.tile.style.width  = tileWidth + "px";
                    item.tile.style.height = rowHeight + "px";
                    item.tile.style.left   = x + "px";
                    item.tile.style.top    = y + "px";
                    x += tileWidth + GAP;
                });

                y += rowHeight + GAP;
            });

            const finalHeight = Math.max(0, y - GAP);
            grid.style.height = finalHeight + "px";
        }

        function whenAllImagesReady(callback) {
            const images = Array.from(grid.querySelectorAll("img"));
            let remaining = 0;

            images.forEach(function (img) {
                if (img.complete && img.naturalWidth) return;
                remaining++;
                img.addEventListener("load",  function () { remaining--; if (remaining === 0) callback(); }, { once: true });
                img.addEventListener("error", function () { remaining--; if (remaining === 0) callback(); }, { once: true });
            });

            if (remaining === 0) callback();
        }

        let resizeTimer;
        window.addEventListener("resize", function () {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(layoutJustified, 120);
        });

        const filterButtons = document.querySelectorAll(".gal-filter");

        filterButtons.forEach(function (btn) {
            btn.addEventListener("click", function () {
                const filter = btn.dataset.filter;

                filterButtons.forEach(function (b) { b.classList.remove("is-active"); });
                btn.classList.add("is-active");

                let visibleCount = 0;
                grid.querySelectorAll(".gal-tile").forEach(function (tile) {
                    const match = (filter === "all" || tile.dataset.category === filter);
                    tile.classList.toggle("is-hidden", !match);
                    if (match) visibleCount++;
                });

                if (emptyState) {
                    emptyState.classList.toggle("is-visible", visibleCount === 0);
                }

                layoutJustified();
            });
        });

        const modalEl = document.getElementById("galLightbox");
        if (modalEl) {
            const modal = bootstrap.Modal.getOrCreateInstance(modalEl);
            const img   = document.getElementById("galLightboxImg");
            const cap   = document.getElementById("galLightboxCap");

            function openLightbox(tile) {
                const thumb = tile.querySelector("img");
                img.src = thumb.src;
                img.alt = thumb.alt;
                cap.textContent = tile.dataset.caption || "";
                modal.show();
            }

            grid.querySelectorAll(".gal-tile").forEach(function (tile) {
                // Mouse / touch
                tile.addEventListener("click", function () {
                    openLightbox(tile);
                });

                // Keyboard — Enter or Space
                tile.addEventListener("keydown", function (e) {
                    if (e.key === "Enter" || e.key === " " || e.key === "Spacebar") {
                        e.preventDefault();
                        openLightbox(tile);
                    }
                });
            });
        }

        document.addEventListener("DOMContentLoaded", function () {
            layoutJustified();

            whenAllImagesReady(function () {
                layoutJustified();
            });

            if (document.fonts && document.fonts.ready) {
                document.fonts.ready.then(layoutJustified);
            }
        });
    })();
</script> -->

<!-- =========================================================
     JUSTIFIED GALLERY LAYOUT + FILTER + LIGHTBOX
     (with figure/figcaption + keyboard accessibility)
========================================================= -->
<!-- =========================================================
     JUSTIFIED GALLERY LAYOUT + FILTER + LIGHTBOX
     - Grid stays hidden until layout settles
     - Each photo fades in individually as it loads
     - Shimmer skeleton sweeps while each photo loads
     - Uses width/height attributes for accurate first-pass layout
========================================================= -->
<script>
    (function () {
        const grid       = document.getElementById("galGrid");
        const emptyState = document.getElementById("galEmpty");

        // Bail out on pages without a gallery
        if (!grid) return;

        const GAP = 14;

        /* ---------------------------------------------------
           Target row height based on viewport
        --------------------------------------------------- */
        function getTargetRowHeight() {
            const w = window.innerWidth;
            if (w < 576)  return 130;
            if (w < 768)  return 160;
            if (w < 992)  return 200;
            if (w < 1200) return 240;
            return 280;
        }

        /* ---------------------------------------------------
           Get the aspect ratio of a tile's image.
           Prefers HTML width/height attributes so the first
           layout pass is already accurate before loading.
        --------------------------------------------------- */
        function getTileRatio(tile) {
            const img = tile.querySelector("img");
            if (!img) return 4 / 3;

            const attrW = parseFloat(img.getAttribute("width"))  || 0;
            const attrH = parseFloat(img.getAttribute("height")) || 0;
            if (attrW > 0 && attrH > 0) return attrW / attrH;

            if (img.naturalWidth && img.naturalHeight) {
                return img.naturalWidth / img.naturalHeight;
            }
            return 4 / 3;
        }

        /* ---------------------------------------------------
           Justified layout (absolute positioning)
        --------------------------------------------------- */
        function layoutJustified() {
            const allTiles = Array.from(grid.querySelectorAll(".gal-tile"));
            const tiles    = allTiles.filter(t => !t.classList.contains("is-hidden"));

            if (!tiles.length) {
                grid.style.height = "0px";
                return;
            }

            const containerWidth = grid.clientWidth;
            const targetH        = getTargetRowHeight();

            const items = tiles.map(tile => ({
                tile,
                ratio: getTileRatio(tile)
            }));

            // Build rows
            const rows = [];
            let currentRow = [];
            let currentRowRatioSum = 0;

            items.forEach(item => {
                currentRow.push(item);
                currentRowRatioSum += item.ratio;

                const neededWidth =
                    currentRowRatioSum * targetH + GAP * (currentRow.length - 1);

                if (neededWidth >= containerWidth) {
                    rows.push(currentRow);
                    currentRow = [];
                    currentRowRatioSum = 0;
                }
            });

            // Handle leftover items in the final row
            if (currentRow.length) {
                if (rows.length && currentRow.length === 1 && currentRowRatioSum > 2.2) {
                    rows[rows.length - 1] = rows[rows.length - 1].concat(currentRow);
                } else {
                    rows.push(currentRow);
                }
            }

            // Position tiles
            let y = 0;
            rows.forEach(row => {
                const ratioSum    = row.reduce((s, i) => s + i.ratio, 0);
                const totalGaps   = GAP * (row.length - 1);
                const idealHeight = (containerWidth - totalGaps) / ratioSum;

                const isLastRow = (row === rows[rows.length - 1]);
                let rowHeight   = idealHeight;
                if (isLastRow && row.length < 3 && idealHeight > targetH * 1.4) {
                    rowHeight = targetH * 1.4;
                }

                let x = 0;
                row.forEach(item => {
                    const tileWidth = item.ratio * rowHeight;
                    item.tile.style.width  = tileWidth + "px";
                    item.tile.style.height = rowHeight + "px";
                    item.tile.style.left   = x + "px";
                    item.tile.style.top    = y + "px";
                    x += tileWidth + GAP;
                });

                y += rowHeight + GAP;
            });

            const finalHeight = Math.max(0, y - GAP);
            grid.style.height = finalHeight + "px";
        }

        /* ---------------------------------------------------
           Fire callback once every <img> inside grid is settled
        --------------------------------------------------- */
        function whenAllImagesReady(callback) {
            const images = Array.from(grid.querySelectorAll("img"));
            let remaining = 0;

            images.forEach(img => {
                if (img.complete && img.naturalWidth) return;
                remaining++;
                img.addEventListener("load",  () => { remaining--; if (remaining === 0) callback(); }, { once: true });
                img.addEventListener("error", () => { remaining--; if (remaining === 0) callback(); }, { once: true });
            });

            if (remaining === 0) callback();
        }

        /* ---------------------------------------------------
           Reveal each image individually as it loads.
           Adds .gal-img-loaded on the <img>       (photo fades in)
           Adds .gal-tile-loaded on the <figure>   (shimmer fades out)
        --------------------------------------------------- */
        function revealImagesIndividually() {
            grid.querySelectorAll(".gal-tile img").forEach(img => {
                const tile = img.closest(".gal-tile");

                const done = () => {
                    img.classList.add("gal-img-loaded");
                    if (tile) tile.classList.add("gal-tile-loaded");
                };

                if (img.complete && img.naturalWidth) {
                    done();
                    return;
                }
                img.addEventListener("load",  done, { once: true });
                img.addEventListener("error", done, { once: true });
            });
        }

        /* ---------------------------------------------------
           Resize handler
        --------------------------------------------------- */
        let resizeTimer;
        window.addEventListener("resize", () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(layoutJustified, 120);
        });

        /* ---------------------------------------------------
           Filter buttons
        --------------------------------------------------- */
        const filterButtons = document.querySelectorAll(".gal-filter");
        filterButtons.forEach(btn => {
            btn.addEventListener("click", () => {
                const filter = btn.dataset.filter;

                filterButtons.forEach(b => b.classList.remove("is-active"));
                btn.classList.add("is-active");

                let visibleCount = 0;
                grid.querySelectorAll(".gal-tile").forEach(tile => {
                    const match = (filter === "all" || tile.dataset.category === filter);
                    tile.classList.toggle("is-hidden", !match);
                    if (match) visibleCount++;
                });

                if (emptyState) {
                    emptyState.classList.toggle("is-visible", visibleCount === 0);
                }

                layoutJustified();
            });
        });

        /* ---------------------------------------------------
           Lightbox
        --------------------------------------------------- */
        const modalEl = document.getElementById("galLightbox");
        if (modalEl) {
            const modal = bootstrap.Modal.getOrCreateInstance(modalEl);
            const img   = document.getElementById("galLightboxImg");
            const cap   = document.getElementById("galLightboxCap");

            function openLightbox(tile) {
                const thumb = tile.querySelector("img");
                if (!thumb) return;

                // Prefer data-full if present, otherwise use the thumb src
                img.src = tile.dataset.full || thumb.src;
                img.alt = thumb.alt || "";
                cap.textContent = tile.dataset.caption || "";
                modal.show();
            }

            grid.querySelectorAll(".gal-tile").forEach(tile => {
                tile.addEventListener("click", () => openLightbox(tile));

                tile.addEventListener("keydown", e => {
                    if (e.key === "Enter" || e.key === " " || e.key === "Spacebar") {
                        e.preventDefault();
                        openLightbox(tile);
                    }
                });
            });
        }

        /* ---------------------------------------------------
           BOOT
        --------------------------------------------------- */
        document.addEventListener("DOMContentLoaded", () => {

            // 1) First pass — ratios come from width/height attrs,
            //    so layout is already accurate before any image loads.
            layoutJustified();

            // 2) Start the per-image reveal loop (also stops the shimmer).
            revealImagesIndividually();

            // 3) Once every image has settled, re-run layout with
            //    real naturalWidth/Height (in case attrs were missing)
            //    then fade the whole grid in.
            whenAllImagesReady(() => {
                layoutJustified();
                grid.classList.add("gal-ready");
            });

            // 4) Re-layout when webfonts finish loading.
            if (document.fonts && document.fonts.ready) {
                document.fonts.ready.then(layoutJustified);
            }
        });

        /* ---------------------------------------------------
           Safety net — if some image never fires load/error,
           reveal the grid after 4s so the user isn't stuck.
        --------------------------------------------------- */
        setTimeout(() => {
            if (!grid.classList.contains("gal-ready")) {
                layoutJustified();
                grid.classList.add("gal-ready");
            }
        }, 4000);

    })();
</script>
</body>
</html>
