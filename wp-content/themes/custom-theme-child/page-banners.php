
<?php
$page_slug = get_post_field('post_name', get_queried_object_id());

switch ($page_slug) {

    case 'curriculum':
        ?>
        <!-- BANNER -->
    <section class="page-banner">
        <div class="container">

            <div class="page-banner-inner">

                <div class="page-banner-text">
                    <div class="page-banner-crumb">
                        <?php
                        if ( function_exists('yoast_breadcrumb') ) {
                            yoast_breadcrumb( '<a id="breadcrumbs">','</a>' );
                        }
                        ?>
                    </div>

                    <h1>
                        A Curriculum for<br>
                        the <span>Whole Child</span>
                    </h1>
                    <p>
                        NCERT-guided academics from Grade 1 to Grade 8,
                        woven together with the five streams of
                        Panchangashikshan — so that what a child learns
                        becomes what a child lives.
                    </p>

                    <div class="page-banner-facts">
                        <span><i class="bi bi-building"></i> NIOS Affiliated</span>
                        <span><i class="bi bi-book-half"></i> NCERT-Guided</span>
                        <span><i class="bi bi-mortarboard-fill"></i> Grades 1 – 8</span>
                    </div>
                </div>

                <div class="page-banner-visual">
                    <div class="banner-quote-card">

                        <div class="banner-quote-mark">
                            <i class="bi bi-quote"></i>
                        </div>

                        <p class="banner-quote-text">
                            Education that shapes the mind,
                            forms the character, and <em>serves the community</em>.
                        </p>

                        <div class="banner-quote-note">
                            Our Academic Philosophy
                        </div>

                        <div class="banner-quote-icons">
                            <span><i class="bi bi-flower2"></i> Meditation</span>
                            <span><i class="bi bi-globe2"></i> Culture</span>
                            <span><i class="bi bi-heart-fill"></i> Values</span>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>
        <?php
        break;

    case 'examination-and-evaluation'
    ?>
        <!-- =========================================================
         HERO (70vh)
    ========================================================= -->
    <section class="exam-hero">
        <div class="container">
            <div class="exam-hero-inner">

                <div class="exam-hero-text">
                    <div class="exam-crumb">
                        <!-- <a href="<?php echo home_url(); ?>">Home</a>
                        <i class="bi bi-chevron-right"></i>
                        <span>Academics</span>
                        <i class="bi bi-chevron-right"></i>
                        <span class="current">Examination &amp; Evaluation</span> -->
                        <?php
                            if ( function_exists('yoast_breadcrumb') ) {
                                yoast_breadcrumb( '<a id="breadcrumbs">','</a>' );
                            }
                        ?>
                    </div>

                    <div class="exam-eyebrow">Assessment Framework</div>

                    <h1 class="exam-hero-title">
                        Examination &amp;<br>
                        <em>Evaluation</em>
                    </h1>

                    <p class="exam-hero-desc">
                        A fair and continuous assessment approach — where
                        periodic exams, classroom participation, projects,
                        and character growth are held together as one
                        complete picture of every child.
                    </p>

                    <div class="exam-hero-facts">
                        <span><i class="bi bi-journal-text"></i> 3 Periodic Assessments</span>
                        <span><i class="bi bi-mortarboard-fill"></i> Term 1 &amp; Annual Exams</span>
                        <span><i class="bi bi-building"></i> NIOS Aligned</span>
                    </div>
                </div>

                <div class="exam-hero-visual">
                    <div class="report-card" aria-hidden="true">
                        <div class="report-head">
                            <span class="report-head-bar"></span>
                            <span class="report-head-bar short"></span>
                            <div class="report-head-meta">
                                <span></span>
                                <span></span>
                            </div>
                        </div>

                        <div class="report-rows">
                            <div class="report-row"><span class="report-subject"></span><span class="report-bar"></span><span class="report-grade">A+</span></div>
                            <div class="report-row"><span class="report-subject"></span><span class="report-bar"></span><span class="report-grade">A</span></div>
                            <div class="report-row"><span class="report-subject"></span><span class="report-bar"></span><span class="report-grade">A+</span></div>
                            <div class="report-row"><span class="report-subject"></span><span class="report-bar"></span><span class="report-grade">A</span></div>
                            <div class="report-row"><span class="report-subject"></span><span class="report-bar"></span><span class="report-grade">B+</span></div>
                        </div>

                        <div class="report-foot">
                            <div class="report-seal">
                                <div class="report-seal-icon">
                                    <i class="bi bi-patch-check-fill"></i>
                                </div>
                                <div class="report-seal-text">
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                            <span class="report-verified">
                                <i class="bi bi-check-circle-fill"></i> Verified
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
        <?php
        break;

        case 'teaching-methodology':
        ?>
         <!-- =========================================================
         HERO (70vh)
    ========================================================= -->
    <section class="tm-hero">
        <div class="container">
            <div class="tm-hero-inner">

                <div class="tm-hero-text">
                    <div class="tm-crumb">
                        <!-- <a href="index.html">Home</a>
                        <i class="bi bi-chevron-right"></i>
                        <span>Academics</span>
                        <i class="bi bi-chevron-right"></i>
                        <span class="current">Teaching Methodology</span> -->
                        <?php
                            if ( function_exists('yoast_breadcrumb') ) {
                                yoast_breadcrumb( '<a id="breadcrumbs">','</a>' );
                            }
                            ?>
                    </div>

                    <h1 class="tm-hero-title">
                        Teaching<br>
                        <em>Methodology</em>
                    </h1>

                    <p class="tm-hero-desc">
                        A thoughtful approach to teaching — where every
                        lesson is designed to engage the mind, nurture
                        character, and connect learning to real life
                        beyond the classroom.
                    </p>

                    <div class="tm-hero-facts">
                        <span><i class="bi bi-people-fill"></i> Small, Attentive Classes</span>
                        <span><i class="bi bi-lightbulb-fill"></i> Learning by Doing</span>
                        <span><i class="bi bi-flower2"></i> Meditation &amp; Reflection</span>
                    </div>
                </div>

                <div class="tm-hero-visual">
                    <div class="tm-visual" aria-hidden="true">

                        <div class="tm-float tm-float-1">
                            <div class="tm-float-icon">
                                <i class="bi bi-person-heart"></i>
                            </div>
                            <div class="tm-float-text">
                                <small>Teachers as</small>
                                <strong>Mentors</strong>
                            </div>
                        </div>

                        <div class="tm-float tm-float-2">
                            <div class="tm-float-icon">
                                <i class="bi bi-easel2-fill"></i>
                            </div>
                            <div class="tm-float-text">
                                <small>Activity-led</small>
                                <strong>Classrooms</strong>
                            </div>
                        </div>

                        <div class="tm-float tm-float-3">
                            <div class="tm-float-icon">
                                <i class="bi bi-tree-fill"></i>
                            </div>
                            <div class="tm-float-text">
                                <small>Rooted in</small>
                                <strong>Values</strong>
                            </div>
                        </div>

                        <div class="tm-flow-card">

                            <div class="tm-flow-head">
                                <div class="tm-flow-head-icon">
                                    <i class="bi bi-diagram-3-fill"></i>
                                </div>
                                <span class="tm-flow-head-bar"></span>
                                <span class="tm-flow-head-bar short"></span>
                            </div>

                            <div class="tm-flow-steps">

                                <div class="tm-flow-step">
                                    <div class="tm-flow-step-num">01</div>
                                    <div class="tm-flow-step-body">
                                        <span class="tm-flow-step-name"></span>
                                        <span class="tm-flow-step-sub"></span>
                                    </div>
                                </div>

                                <div class="tm-flow-step">
                                    <div class="tm-flow-step-num">02</div>
                                    <div class="tm-flow-step-body">
                                        <span class="tm-flow-step-name"></span>
                                        <span class="tm-flow-step-sub"></span>
                                    </div>
                                </div>

                                <div class="tm-flow-step">
                                    <div class="tm-flow-step-num">03</div>
                                    <div class="tm-flow-step-body">
                                        <span class="tm-flow-step-name"></span>
                                        <span class="tm-flow-step-sub"></span>
                                    </div>
                                </div>

                                <div class="tm-flow-step">
                                    <div class="tm-flow-step-num">04</div>
                                    <div class="tm-flow-step-body">
                                        <span class="tm-flow-step-name"></span>
                                        <span class="tm-flow-step-sub"></span>
                                    </div>
                                </div>

                            </div>

                            <div class="tm-flow-foot">
                                <span class="tm-flow-foot-label">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Complete Cycle
                                </span>
                                <div class="tm-flow-foot-dots">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
        <?php
        break;

        case 'co-curricular-activities':
        ?>
        <!-- =========================================================
         HERO (70vh)
    ========================================================= -->
    <section class="cca-hero">
        <div class="container">
            <div class="cca-hero-inner">

                <div class="cca-hero-text">
                    <div class="cca-crumb">
                        <!-- <a href="<?php echo home_url(); ?>">Home</a>
                        <i class="bi bi-chevron-right"></i>
                        <span>Academics</span>
                        <i class="bi bi-chevron-right"></i>
                        <span class="current">Co-Curricular Activities</span> -->
                        <?php
                            if ( function_exists('yoast_breadcrumb') ) {
                                yoast_breadcrumb( '<a id="breadcrumbs">','</a>' );
                            }
                        ?>
                    </div>

                    <h1 class="cca-hero-title">
                        Co-Curricular<br>
                        <em>Activities</em>
                    </h1>

                    <p class="cca-hero-desc">
                        Learning that goes beyond textbooks — where yoga,
                        sports, music, dance, and service come together
                        to shape confident, creative, and caring young
                        individuals.
                    </p>

                    <div class="cca-hero-facts">
                        <span><i class="bi bi-stars"></i> 9+ Activity Streams</span>
                        <span><i class="bi bi-flower1"></i> Panchangashikshan Framework</span>
                        <span><i class="bi bi-people-fill"></i> Every Child Participates</span>
                    </div>
                </div>

                <div class="cca-hero-visual">
                    <div class="cca-visual" aria-hidden="true">

                        <div class="cca-float cca-float-1">
                            <div class="cca-float-icon">
                                <i class="bi bi-person-arms-up"></i>
                            </div>
                            <div class="cca-float-text">
                                <small>Daily Practice</small>
                                <strong>Yoga</strong>
                            </div>
                        </div>

                        <div class="cca-float cca-float-2">
                            <div class="cca-float-icon">
                                <i class="bi bi-music-note-beamed"></i>
                            </div>
                            <div class="cca-float-text">
                                <small>Cultural Arts</small>
                                <strong>Music</strong>
                            </div>
                        </div>

                        <div class="cca-float cca-float-3">
                            <div class="cca-float-icon">
                                <i class="bi bi-trophy-fill"></i>
                            </div>
                            <div class="cca-float-text">
                                <small>Every Season</small>
                                <strong>Sports</strong>
                            </div>
                        </div>

                        <div class="cca-card">

                            <div class="cca-card-head">
                                <div class="cca-card-head-icon">
                                    <i class="bi bi-stars"></i>
                                </div>
                                <div class="cca-card-head-text">
                                    <span>Activity Streams</span>
                                    <strong>Beyond the Classroom</strong>
                                </div>
                            </div>

                            <div class="cca-grid">

                                <div class="cca-tile">
                                    <div class="cca-tile-icon"><i class="bi bi-person-arms-up"></i></div>
                                    <div class="cca-tile-text">
                                        <strong>Yoga</strong>
                                        <small>Well-being</small>
                                    </div>
                                </div>

                                <div class="cca-tile">
                                    <div class="cca-tile-icon"><i class="bi bi-person-walking"></i></div>
                                    <div class="cca-tile-text">
                                        <strong>Sports</strong>
                                        <small>Fitness</small>
                                    </div>
                                </div>

                                <div class="cca-tile">
                                    <div class="cca-tile-icon"><i class="bi bi-music-note-beamed"></i></div>
                                    <div class="cca-tile-text">
                                        <strong>Music</strong>
                                        <small>Expression</small>
                                    </div>
                                </div>

                                <div class="cca-tile">
                                    <div class="cca-tile-icon"><i class="bi bi-flower1"></i></div>
                                    <div class="cca-tile-text">
                                        <strong>Dance</strong>
                                        <small>Culture</small>
                                    </div>
                                </div>

                                <div class="cca-tile">
                                    <div class="cca-tile-icon"><i class="bi bi-hand-index-thumb"></i></div>
                                    <div class="cca-tile-text">
                                        <strong>Karate</strong>
                                        <small>Discipline</small>
                                    </div>
                                </div>

                                <div class="cca-tile">
                                    <div class="cca-tile-icon"><i class="bi bi-palette"></i></div>
                                    <div class="cca-tile-text">
                                        <strong>Craft</strong>
                                        <small>Creativity</small>
                                    </div>
                                </div>

                            </div>

                            <div class="cca-card-foot">
                                <span class="cca-card-foot-label">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Every Child Participates
                                </span>
                                <div class="cca-card-foot-dots">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php
    break;

    case 'admission-overview':
        ?>
        <!-- =========================================================
         HERO  (unchanged)
    ========================================================= -->
    <section class="fac-hero">
        <div class="container">
            <div class="fac-hero-inner">

                <div class="fac-hero-text">
                    <div class="fac-crumb">
                        <!-- <a href="<?php echo home_url(); ?>">Home</a>
                        <i class="bi bi-chevron-right"></i>
                        <a href="#">Admissions</a>
                        <i class="bi bi-chevron-right"></i>
                        <span class="current">Admission Overview</span> -->
                        <?php
                            if ( function_exists('yoast_breadcrumb') ) {
                                yoast_breadcrumb( '<a id="breadcrumbs">','</a>' );
                            }
                        ?>
                    </div>

                    <h1 class="fac-hero-title">
                        Admission<br>
                        <em>Overview</em>
                    </h1>

                    <p class="fac-hero-desc">
                        Everything you need to know about joining our school
                        family — eligibility, application steps, and the
                        important dates you should mark on your calendar.
                    </p>

                    <div class="fac-hero-facts">
                        <span><i class="bi bi-mortarboard"></i> Admissions Open</span>
                        <span><i class="bi bi-journal-check"></i> Simple Process</span>
                        <span><i class="bi bi-people"></i> Welcoming Community</span>
                    </div>
                </div>

                <div class="fac-hero-visual">
                    <div class="ao-hero-wrap">

                        <div class="ao-glow"></div>
                        <div class="ao-ring"></div>
                        <div class="ao-accent-dot dot-1"></div>
                        <div class="ao-accent-dot dot-2"></div>

                        <div class="ao-hub">
                            <div class="ao-hub-icon">
                                <i class="bi bi-mortarboard-fill"></i>
                            </div>
                            <div class="ao-hub-title">Admissions</div>
                            <div class="ao-hub-year">Open 2026-27</div>
                            <div class="ao-hub-label">KG to Class 10</div>
                        </div>

                        <div class="ao-mini ao-mini-top" title="Apply Now">
                            <i class="bi bi-person-plus-fill"></i>
                        </div>
                        <div class="ao-mini ao-mini-right" title="Now Open">
                            <i class="bi bi-calendar2-check-fill"></i>
                        </div>
                        <div class="ao-mini ao-mini-bottom" title="Learn With Us">
                            <i class="bi bi-book-half"></i>
                        </div>
                        <div class="ao-mini ao-mini-left" title="Excellence">
                            <i class="bi bi-award-fill"></i>
                        </div>

                        <div class="ao-float ao-float-1">
                            <div class="ao-float-icon"><i class="bi bi-mortarboard-fill"></i></div>
                            <div class="ao-float-text">
                                <small>Now</small>
                                <strong>Open</strong>
                            </div>
                        </div>
                        <div class="ao-float ao-float-2">
                            <div class="ao-float-icon"><i class="bi bi-people-fill"></i></div>
                            <div class="ao-float-text">
                                <small>Join Our</small>
                                <strong>Family</strong>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
        <?php
        break;
    
    case 'overview':
        ?>
        <!-- BANNER -->
    <section class="page-banner">
        <div class="container">

            <div class="page-banner-inner">

                <div class="page-banner-text">
                    <div class="page-banner-crumb">
                        <!-- <a href="index.html">Home</a>
                        <i class="bi bi-chevron-right"></i>
                        <span>About Us</span>
                        <i class="bi bi-chevron-right"></i>
                        <span class="current">Overview</span> -->
                        <?php
                            if ( function_exists('yoast_breadcrumb') ) {
                                yoast_breadcrumb( '<a id="breadcrumbs">','</a>' );
                            }
                        ?>
                    </div>

                    <h1>
                        A Place to Learn,<br>
                        Grow &amp; <span>Serve</span>
                    </h1>
                    <p>
                        An overview of Shree Mahalingeshwara Vidyanikethana —
                        its foundation, its values, and the learning environment
                        it offers every child.
                    </p>

                    <div class="page-banner-facts">
                        <span><i class="bi bi-bank"></i> Temple Education Trust</span>
                        <span><i class="bi bi-building"></i> NIOS Affiliated</span>
                        <span><i class="bi bi-geo-alt-fill"></i> Kunjathur, Kerala</span>
                    </div>
                </div>

                <div class="page-banner-visual">
                    <div class="hero-shape-wrapper">
                        <!-- Soft ambient glow -->
                        <div class="hero-shape-glow"></div>

                        <!-- Asymmetric geometric outline backdrop -->
                        <div class="hero-shape-backdrop"></div>

                        <!-- Main unique shape image frame -->
                        <div class="hero-shape-frame">
                            <figure>
                                <img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shree-mahalingeshwara-vidyanikethana-overview-hero.jpg"
                                    alt="Shree Mahalingeshwara Vidyanikethana School Students and Campus"
                                    title="School Campus and Student Community at Shree Mahalingeshwara Vidyanikethana"
                                    class="hero-shape-image"
                                >
                                <figcaption class="cr-only">
                                    A welcoming learning community at Shree Mahalingeshwara Vidyanikethana where students thrive through academic excellence and personal growth.
                                </figcaption>
                            </figure>
                        </div>

                        <!-- Floating Top Badge -->
                        <div class="hero-badge hero-badge-top">
                            <div class="hero-badge-icon blue">
                                <i class="bi bi-patch-check-fill"></i>
                            </div>
                            <div class="hero-badge-info">
                                <span class="hero-badge-title">NIOS Affiliated</span>
                                <span class="hero-badge-sub">OB0918317 · Govt. Recognised</span>
                            </div>
                        </div>

                        <!-- Floating Bottom Badge -->
                        <div class="hero-badge hero-badge-bottom">
                            <div class="hero-badge-icon orange">
                                <i class="bi bi-flower2"></i>
                            </div>
                            <div class="hero-badge-info">
                                <span class="hero-badge-title">Living in Truth</span>
                                <span class="hero-badge-sub">Value-Based Holistic Education</span>
                            </div>
                        </div>

                        <!-- Decorative Accent Dots -->
                        <div class="hero-shape-dots">
                            <span></span><span></span><span></span>
                            <span></span><span></span><span></span>
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
        <?php
        break;

    case 'classes-offered':
        ?>
        <!-- HERO -->
    <section class="page-banner">
        <div class="container">

            <div class="page-banner-inner">

                <div class="page-banner-text">
                    <div class="page-banner-crumb">
                        <!-- <a href="index.html">Home</a>
                        <i class="bi bi-chevron-right"></i>
                        <span>Academics</span>
                        <i class="bi bi-chevron-right"></i>
                        <span class="current">Classes Offered</span> -->
                        <?php
                            if ( function_exists('yoast_breadcrumb') ) {
                                yoast_breadcrumb( '<a id="breadcrumbs">','</a>' );
                            }
                        ?>
                    </div>

                    <h1>
                        Every Stage,<br>
                        Every <span>Child, Every Year</span>
                    </h1>
                    <p>
                        From the first day of pre-primary through the
                        completion of middle school in Grade 8 — a single,
                        continuous, values-rooted learning journey.
                    </p>

                    <div class="page-banner-facts">
                        <span><i class="bi bi-mortarboard-fill"></i> Pre-Primary to Grade 8</span>
                        <span><i class="bi bi-building"></i> NIOS Affiliated</span>
                        <span><i class="bi bi-book-half"></i> NCERT-Guided</span>
                    </div>
                </div>

                <div class="hero-image-panel">
                    <div class="hero-image-frame">
                        <figure>
                            <img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/images-from-media/shree-mahalingeshwara-vidyanikethana-school-classes-hero.jpg"
                                alt="Students at Shree Mahalingeshwara Vidyanikethana"
                                title="Academic Stages and Classes Offered"
                                class="hero-image"
                            >
                            <figcaption class="cr-only">
                                Students engaging in active learning, foundational literacy, numeracy, and holistic classroom activities across pre-primary, primary, and middle school stages.
                            </figcaption>
                        </figure>
                    </div>

                    <div class="hero-range-badge">
                        <div class="hero-range-badge-icon">
                            <i class="bi bi-mortarboard-fill"></i>
                        </div>
                        <div class="hero-range-badge-text">
                            <small>Classes Offered</small>
                            <span>Pre-Primary – Grade 8</span>
                        </div>
                    </div>

                    <div class="hero-stages-card">
                        <div class="hero-stage-pill">
                            <i class="bi bi-balloon-heart"></i>
                            <span>Pre-Primary</span>
                            <small>Early Years</small>
                        </div>
                        <div class="hero-stage-pill">
                            <i class="bi bi-book"></i>
                            <span>I – IV</span>
                            <small>Primary</small>
                        </div>
                        <div class="hero-stage-pill">
                            <i class="bi bi-mortarboard"></i>
                            <span>V – VIII</span>
                            <small>Middle</small>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section> 
         <?php
         break;

    case 'facilities':
        ?>
            <!-- HERO -->
    <section class="fac-hero">
        <div class="container">
            <div class="fac-hero-inner">

                <div class="fac-hero-text">
                    <div class="fac-crumb">
                        <!-- <a href="index.html">Home</a>
                        <i class="bi bi-chevron-right"></i>
                        <span class="current">Facilities</span> -->
                        <?php
                            if ( function_exists('yoast_breadcrumb') ) {
                                yoast_breadcrumb( '<a id="breadcrumbs">','</a>' );
                            }
                        ?>
                    </div>

                    <h1 class="fac-hero-title">
                        Our School<br>
                        <em>Facilities</em>
                    </h1>

                    <p class="fac-hero-desc">
                        A thoughtfully designed environment that supports
                        academic learning, creativity, recreation, and the
                        overall development of every child — from the
                        classroom to the campus and beyond.
                    </p>

                    <div class="fac-hero-facts">
                        <span><i class="bi bi-buildings"></i> Spacious Campus</span>
                        <span><i class="bi bi-easel2-fill"></i> Modern Classrooms</span>
                        <span><i class="bi bi-flask"></i> Science &amp; Computer Labs</span>
                    </div>
                </div>

                <div class="fac-hero-visual">
                    <div class="fac-visual" aria-hidden="true">

                        <div class="fac-float fac-float-1">
                            <div class="fac-float-icon"><i class="bi bi-book-half"></i></div>
                            <div class="fac-float-text">
                                <small>Reading Space</small>
                                <strong>Library</strong>
                            </div>
                        </div>

                        <div class="fac-float fac-float-2">
                            <div class="fac-float-icon"><i class="bi bi-flask"></i></div>
                            <div class="fac-float-text">
                                <small>Practical Learning</small>
                                <strong>Science Lab</strong>
                            </div>
                        </div>

                        <div class="fac-float fac-float-3">
                            <div class="fac-float-icon"><i class="bi bi-pc-display"></i></div>
                            <div class="fac-float-text">
                                <small>Digital Skills</small>
                                <strong>Computer Lab</strong>
                            </div>
                        </div>

                        <div class="fac-card">
                            <div class="fac-card-head">
                                <div class="fac-card-head-icon"><i class="bi bi-building-gear"></i></div>
                                <div class="fac-card-head-text">
                                    <span>Campus Overview</span>
                                    <strong>Everything Under One Roof</strong>
                                </div>
                            </div>

                            <div class="fac-grid">
                                <div class="fac-tile">
                                    <div class="fac-tile-icon"><i class="bi bi-buildings"></i></div>
                                    <div class="fac-tile-text"><strong>Campus</strong><small>Spacious</small></div>
                                </div>
                                <div class="fac-tile">
                                    <div class="fac-tile-icon"><i class="bi bi-easel2-fill"></i></div>
                                    <div class="fac-tile-text"><strong>Classrooms</strong><small>Modern</small></div>
                                </div>
                                <div class="fac-tile">
                                    <div class="fac-tile-icon"><i class="bi bi-flask"></i></div>
                                    <div class="fac-tile-text"><strong>Science Lab</strong><small>Curiosity</small></div>
                                </div>
                                <div class="fac-tile">
                                    <div class="fac-tile-icon"><i class="bi bi-pc-display"></i></div>
                                    <div class="fac-tile-text"><strong>Computer Lab</strong><small>Digital</small></div>
                                </div>
                                <div class="fac-tile">
                                    <div class="fac-tile-icon"><i class="bi bi-book-half"></i></div>
                                    <div class="fac-tile-text"><strong>Library</strong><small>Discovery</small></div>
                                </div>
                                <div class="fac-tile">
                                    <div class="fac-tile-icon"><i class="bi bi-music-note-beamed"></i></div>
                                    <div class="fac-tile-text"><strong>Music Room</strong><small>Expression</small></div>
                                </div>
                            </div>

                            <div class="fac-card-foot">
                                <span class="fac-card-foot-label">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Learning Extends Beyond the Classroom
                                </span>
                                <div class="fac-card-foot-dots">
                                    <span></span><span></span><span></span>
                                    <span></span><span></span><span></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
         <?php
         break;

    case 'history-of-the-institute':
        ?>
        <!-- HERO -->
    <section class="history-hero">
        <div class="container">
            <div class="history-hero-grid">

                <div class="history-hero-text">
                    <div class="page-banner-crumb">
                        <!-- <a href="index.html">Home</a>
                        <i class="bi bi-chevron-right"></i>
                        <span>Academics</span>
                        <i class="bi bi-chevron-right"></i>
                        <span class="current">Classes Offered</span> -->
                        <?php
                            if ( function_exists('yoast_breadcrumb') ) {
                                yoast_breadcrumb( '<a id="breadcrumbs">','</a>' );
                            }
                        ?>
                    </div>
                    <div class="history-hero-eyebrow">Our History</div>
                    <h1>
                        From a temple trust<br>
                        to a <em>living school</em>
                    </h1>
                    <p>
                        A quiet story of how a small non-profit body in Kunjathur
                        grew into a learning community rooted in freedom, truth,
                        and service to others.
                    </p>
                </div>

                <figure>
                    <img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shree-mahalingeshwara-vidyanikethana-school-campus.jpg"
                        alt="Shree Mahalingeshwara Vidyanikethana Kunjathur Campus"
                        title="Campus Heritage and History of Shree Mahalingeshwara Vidyanikethana"
                        class="history-hero-image"
                    >
                    <figcaption class="cr-only">
                        Scenic campus grounds of Shree Mahalingeshwara Vidyanikethana School in Kunjathur, depicting the evolutionary journey from trust origins to a thriving school community.
                    </figcaption>
                </figure>

            </div>
        </div>
    </section>
         <?php
         break;

    case 'management-committee':
        ?>
        <!-- SECTION 1: HEADER BAND -->
    <section class="committee-band">
        <div class="container">
            <div class="page-banner-crumb">
                        <!-- <a href="index.html">Home</a>
                        <i class="bi bi-chevron-right"></i>
                        <span>Academics</span>
                        <i class="bi bi-chevron-right"></i>
                        <span class="current">Classes Offered</span> -->
                        <?php
                            if ( function_exists('yoast_breadcrumb') ) {
                                yoast_breadcrumb( '<a id="breadcrumbs">','</a>' );
                            }
                        ?>
                    </div><br>
            <div class="committee-eyebrow">
                Management Committee
            </div>

            <h1>
                The people behind<br>
                <em>the institution</em>
            </h1>

            <p>
                The Shree Mahalingeshwara Temple Education Trust is guided by a
                dedicated committee of trustees who serve the school with
                commitment, integrity and care.
            </p>
        </div>
    </section>
         <?php
         break;

        case 'fee-structure':
        ?>
        <!-- =========================================================
         HERO
    ========================================================= -->
    <section class="fac-hero">
        <div class="container">
            <div class="fac-hero-inner">

                <div class="fac-hero-text">
                    <div class="fac-crumb">
                        <!-- <a href="index.html">Home</a>
                        <i class="bi bi-chevron-right"></i>
                        <a href="#">Admissions</a>
                        <i class="bi bi-chevron-right"></i>
                        <span class="current">Fee Structure</span> -->
                        <?php 
                            if( function_exists('yoast_breadcrumb') ) {
                                yoast_breadcrumb( '<a id="breadcrumbs">','</a>' );
                            }
                        ?>
                    </div>

                    <h1 class="fac-hero-title">
                        Fee<br>
                        <em>Structure</em>
                    </h1>

                    <p class="fac-hero-desc">
                        Transparent and affordable fee details for every class
                        at Shree Mahalingeshwara Vidyanikethana — designed to
                        make quality education accessible to every family.
                    </p>

                    <div class="fac-hero-facts">
                        <span><i class="bi bi-tag"></i> Affordable Fees</span>
                        <span><i class="bi bi-file-earmark-text"></i> Transparent Structure</span>
                        <span><i class="bi bi-cash-coin"></i> Easy Payment</span>
                    </div>
                </div>

                <div class="fac-hero-visual">
                    <div class="fs-hero-wrap">

                        <div class="fs-ring-blue"></div>

                        <div class="fs-card">

                            <div class="fs-card-head">
                                <div class="fs-card-icon">
                                    <i class="bi bi-receipt"></i>
                                </div>
                                <div class="fs-card-head-text">
                                    <span>Academic Year 2026-27</span>
                                    <strong>Fee Structure</strong>
                                </div>
                            </div>

                            <div class="fs-card-body">

                                <div class="fs-row">
                                    <div class="fs-row-left">
                                        <div class="fs-row-icon"><i class="bi bi-mortarboard-fill"></i></div>
                                        <div class="fs-row-bars">
                                            <span class="fs-bar-primary"></span>
                                            <span class="fs-bar-secondary"></span>
                                        </div>
                                    </div>
                                    <span class="fs-amount">₹ —</span>
                                </div>

                                <div class="fs-row">
                                    <div class="fs-row-left">
                                        <div class="fs-row-icon"><i class="bi bi-book-half"></i></div>
                                        <div class="fs-row-bars">
                                            <span class="fs-bar-primary"></span>
                                            <span class="fs-bar-secondary"></span>
                                        </div>
                                    </div>
                                    <span class="fs-amount">₹ —</span>
                                </div>

                                <div class="fs-row">
                                    <div class="fs-row-left">
                                        <div class="fs-row-icon"><i class="bi bi-bus-front-fill"></i></div>
                                        <div class="fs-row-bars">
                                            <span class="fs-bar-primary"></span>
                                            <span class="fs-bar-secondary"></span>
                                        </div>
                                    </div>
                                    <span class="fs-amount">₹ —</span>
                                </div>

                                <div class="fs-row">
                                    <div class="fs-row-left">
                                        <div class="fs-row-icon"><i class="bi bi-trophy-fill"></i></div>
                                        <div class="fs-row-bars">
                                            <span class="fs-bar-primary"></span>
                                            <span class="fs-bar-secondary"></span>
                                        </div>
                                    </div>
                                    <span class="fs-amount">₹ —</span>
                                </div>

                            </div>

                            <div class="fs-card-foot">
                                <span class="fs-card-foot-label">
                                    <i class="bi bi-patch-check-fill"></i>
                                    Approved by Management
                                </span>
                                <div class="fs-card-foot-dots">
                                    <span></span><span></span><span></span>
                                </div>
                            </div>

                        </div>

                        <div class="fs-float fs-float-1">
                            <div class="fs-float-icon"><i class="bi bi-shield-check"></i></div>
                            <div class="fs-float-text">
                                <small>Fully</small>
                                <strong>Transparent</strong>
                            </div>
                        </div>

                        <div class="fs-float fs-float-2">
                            <div class="fs-float-icon"><i class="bi bi-wallet2"></i></div>
                            <div class="fs-float-text">
                                <small>Easy</small>
                                <strong>Payment</strong>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
         <?php
         break;

    case 'teaching-staff':
        ?>
        <!-- HERO -->
    <section class="fac-hero">
        <div class="container">
            <div class="fac-hero-inner">

                <div class="fac-hero-text">
                    <div class="fac-crumb">
                        <!-- <a href="index.html">Home</a>
                        <i class="bi bi-chevron-right"></i>
                        <a href="#">Faculty &amp; Staff</a>
                        <i class="bi bi-chevron-right"></i>
                        <span class="current">Teaching Staff</span> -->
                        <?php
                            if ( function_exists('yoast_breadcrumb') ) {
                                yoast_breadcrumb( '<a id="breadcrumbs">','</a>' );
                            }
                        ?>
                    </div>

                    <h1 class="fac-hero-title">
                        Our Teaching<br>
                        <em>Faculty</em>
                    </h1>

                    <p class="fac-hero-desc">
                        A dedicated team of qualified, compassionate and
                        experienced educators who inspire curiosity,
                        nurture talent, and guide every student towards
                        academic excellence and strong moral values.
                    </p>

                    <div class="fac-hero-facts">
                        <span><i class="bi bi-person-badge"></i> Qualified Educators</span>
                        <span><i class="bi bi-mortarboard"></i> Experienced Mentors</span>
                        <span><i class="bi bi-heart"></i> Student-First Approach</span>
                    </div>
                </div>

                <div class="fac-hero-visual">
                    <div class="fac-visual" aria-hidden="true">

                        <div class="fac-float fac-float-1">
                            <div class="fac-float-icon"><i class="bi bi-mortarboard-fill"></i></div>
                            <div class="fac-float-text">
                                <small>Trained</small>
                                <strong>Educators</strong>
                            </div>
                        </div>

                        <div class="fac-float fac-float-2">
                            <div class="fac-float-icon"><i class="bi bi-people-fill"></i></div>
                            <div class="fac-float-text">
                                <small>Supportive</small>
                                <strong>Mentors</strong>
                            </div>
                        </div>

                        <div class="fac-float fac-float-3">
                            <div class="fac-float-icon"><i class="bi bi-lightbulb-fill"></i></div>
                            <div class="fac-float-text">
                                <small>Inspiring</small>
                                <strong>Guidance</strong>
                            </div>
                        </div>

                        <div class="fac-card">
                            <div class="fac-card-head">
                                <div class="fac-card-head-icon"><i class="bi bi-person-workspace"></i></div>
                                <div class="fac-card-head-text">
                                    <span>Faculty Overview</span>
                                    <strong>Departments &amp; Expertise</strong>
                                </div>
                            </div>

                            <div class="fac-grid">
                                <div class="fac-tile">
                                    <div class="fac-tile-icon"><i class="bi bi-calculator-fill"></i></div>
                                    <div class="fac-tile-text"><strong>Mathematics</strong><small>Logic</small></div>
                                </div>
                                <div class="fac-tile">
                                    <div class="fac-tile-icon"><i class="bi bi-flask"></i></div>
                                    <div class="fac-tile-text"><strong>Science</strong><small>Discovery</small></div>
                                </div>
                                <div class="fac-tile">
                                    <div class="fac-tile-icon"><i class="bi bi-translate"></i></div>
                                    <div class="fac-tile-text"><strong>Languages</strong><small>Communication</small></div>
                                </div>
                                <div class="fac-tile">
                                    <div class="fac-tile-icon"><i class="bi bi-globe-americas"></i></div>
                                    <div class="fac-tile-text"><strong>Social Studies</strong><small>Perspective</small></div>
                                </div>
                                <div class="fac-tile">
                                    <div class="fac-tile-icon"><i class="bi bi-pc-display"></i></div>
                                    <div class="fac-tile-text"><strong>Computers</strong><small>Digital</small></div>
                                </div>
                                <div class="fac-tile">
                                    <div class="fac-tile-icon"><i class="bi bi-palette-fill"></i></div>
                                    <div class="fac-tile-text"><strong>Arts &amp; Sports</strong><small>Creativity</small></div>
                                </div>
                            </div>

                            <div class="fac-card-foot">
                                <span class="fac-card-foot-label">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Guiding Every Learner Forward
                                </span>
                                <div class="fac-card-foot-dots">
                                    <span></span><span></span><span></span>
                                    <span></span><span></span><span></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
         <?php
         break;

    case 'non-teaching-staff':
        ?>
        <!-- HERO -->
    <section class="fac-hero">
        <div class="container">
            <div class="fac-hero-inner">

                <div class="fac-hero-text">
                    <div class="fac-crumb">
                        <!-- <a href="index.html">Home</a>
                        <i class="bi bi-chevron-right"></i>
                        <a href="#">Faculty &amp; Staff</a>
                        <i class="bi bi-chevron-right"></i>
                        <span class="current">Non-Teaching Staff</span> -->
                        <?php 
                            if ( function_exists('yoast_breadcrumb') ) {
                                yoast_breadcrumb( '<a id="breadcrumbs">','</a>' );
                            }
                        ?>
                    </div>

                    <h1 class="fac-hero-title">
                        Our Non-Teaching<br>
                        <em>Staff</em>
                    </h1>

                    <p class="fac-hero-desc">
                        The backbone of our institution — a dedicated team of
                        administrative professionals, support staff, and
                        caregivers who ensure a safe, organized, and efficient
                        environment for our students and teachers.
                    </p>

                    <div class="fac-hero-facts">
                        <span><i class="bi bi-clipboard-check"></i> Administrative Support</span>
                        <span><i class="bi bi-tools"></i> Campus Maintenance</span>
                        <span><i class="bi bi-shield-check"></i> Safe Environment</span>
                    </div>
                </div>

                <div class="fac-hero-visual">
                    <div class="fac-visual" aria-hidden="true">

                        <div class="fac-float fac-float-1">
                            <div class="fac-float-icon"><i class="bi bi-headset"></i></div>
                            <div class="fac-float-text">
                                <small>Dedicated</small>
                                <strong>Support Team</strong>
                            </div>
                        </div>

                        <div class="fac-float fac-float-2">
                            <div class="fac-float-icon"><i class="bi bi-gear-wide-connected"></i></div>
                            <div class="fac-float-text">
                                <small>Smooth</small>
                                <strong>Operations</strong>
                            </div>
                        </div>

                        <div class="fac-float fac-float-3">
                            <div class="fac-float-icon"><i class="bi bi-shield-lock-fill"></i></div>
                            <div class="fac-float-text">
                                <small>Safe</small>
                                <strong>Campus</strong>
                            </div>
                        </div>

                        <div class="fac-card">
                            <div class="fac-card-head">
                                <div class="fac-card-head-icon"><i class="bi bi-building-gear"></i></div>
                                <div class="fac-card-head-text">
                                    <span>Support Services</span>
                                    <strong>Keeping Our Campus Running</strong>
                                </div>
                            </div>

                            <div class="fac-grid">
                                <div class="fac-tile">
                                    <div class="fac-tile-icon"><i class="bi bi-clipboard-data-fill"></i></div>
                                    <div class="fac-tile-text"><strong>Administration</strong><small>Efficient</small></div>
                                </div>
                                <div class="fac-tile">
                                    <div class="fac-tile-icon"><i class="bi bi-calculator-fill"></i></div>
                                    <div class="fac-tile-text"><strong>Accounts</strong><small>Accurate</small></div>
                                </div>
                                <div class="fac-tile">
                                    <div class="fac-tile-icon"><i class="bi bi-book-half"></i></div>
                                    <div class="fac-tile-text"><strong>Library Asst.</strong><small>Organized</small></div>
                                </div>
                                <div class="fac-tile">
                                    <div class="fac-tile-icon"><i class="bi bi-eyedropper"></i></div>
                                    <div class="fac-tile-text"><strong>Lab Asst.</strong><small>Prepared</small></div>
                                </div>
                                <div class="fac-tile">
                                    <div class="fac-tile-icon"><i class="bi bi-wrench-adjustable-circle-fill"></i></div>
                                    <div class="fac-tile-text"><strong>Maintenance</strong><small>Reliable</small></div>
                                </div>
                                <div class="fac-tile">
                                    <div class="fac-tile-icon"><i class="bi bi-bus-front-fill"></i></div>
                                    <div class="fac-tile-text"><strong>Transport</strong><small>Safe</small></div>
                                </div>
                            </div>

                            <div class="fac-card-foot">
                                <span class="fac-card-foot-label">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Supporting Education Every Day
                                </span>
                                <div class="fac-card-foot-dots">
                                    <span></span><span></span><span></span>
                                    <span></span><span></span><span></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
            <?php
            break;

    case 'mandatory-disclosure':
        ?>
        <!-- =========================================================
         HERO — PLAYFUL / COLORFUL (UNCHANGED)
    ========================================================= -->
    <section class="fac-hero">
        <div class="container">
            <div class="fac-hero-inner">

                <div class="fac-hero-text">
                    <div class="fac-crumb">
                        <!-- <a href="index.html">Home</a>
                        <i class="bi bi-chevron-right"></i>
                        <span class="current">Mandatory Disclosure</span> -->
                        <?php 
                            if ( function_exists('yoast_breadcrumb') ) {
                                yoast_breadcrumb( '<a id="breadcrumbs">','</a>' );
                            }
                        ?>
                    </div>

                    <h1 class="fac-hero-title">
                        Mandatory<br>
                        <em>Disclosure</em>
                    </h1>

                    <p class="fac-hero-desc">
                        In compliance with regulatory requirements, we publish
                        all essential information about the school — including
                        affiliation details, infrastructure, staff, and
                        certified documents — for public transparency.
                    </p>

                    <div class="fac-hero-facts">
                        <span><i class="bi bi-file-earmark-check"></i> Certified Documents</span>
                        <span><i class="bi bi-shield-check"></i> Regulatory Compliance</span>
                        <span><i class="bi bi-eye"></i> Public Transparency</span>
                    </div>
                </div>

                <div class="fac-hero-visual">
                    <div class="md-hero-wrap">

                        <div class="md-ring-blue"></div>

                        <div class="md-card">

                            <div class="md-card-head">
                                <div class="md-card-icon">
                                    <i class="bi bi-file-earmark-text-fill"></i>
                                </div>
                                <div class="md-card-head-text">
                                    <span>Official</span>
                                    <strong>Document Checklist</strong>
                                </div>
                            </div>

                            <div class="md-card-body">

                                <div class="md-doc-line">
                                    <div class="md-doc-check"><i class="bi bi-check-lg"></i></div>
                                    <div class="md-doc-text">
                                        <strong>School Affiliation</strong>
                                        <span class="md-doc-bar"></span>
                                    </div>
                                </div>

                                <div class="md-doc-line">
                                    <div class="md-doc-check"><i class="bi bi-check-lg"></i></div>
                                    <div class="md-doc-text">
                                        <strong>Trust Registration</strong>
                                        <span class="md-doc-bar"></span>
                                    </div>
                                </div>

                                <div class="md-doc-line">
                                    <div class="md-doc-check"><i class="bi bi-check-lg"></i></div>
                                    <div class="md-doc-text">
                                        <strong>Infrastructure Details</strong>
                                        <span class="md-doc-bar"></span>
                                    </div>
                                </div>

                                <div class="md-doc-line">
                                    <div class="md-doc-check"><i class="bi bi-check-lg"></i></div>
                                    <div class="md-doc-text">
                                        <strong>Staff &amp; Faculty List</strong>
                                        <span class="md-doc-bar"></span>
                                    </div>
                                </div>

                            </div>

                            <div class="md-card-foot">
                                <span class="md-card-foot-label">
                                    <i class="bi bi-patch-check-fill"></i>
                                    Verified &amp; Public
                                </span>
                                <div class="md-card-foot-dots">
                                    <span></span><span></span><span></span>
                                </div>
                            </div>

                        </div>

                        <div class="md-float md-float-1">
                            <div class="md-float-icon"><i class="bi bi-file-earmark-pdf-fill"></i></div>
                            <div class="md-float-text">
                                <small>Download</small>
                                <strong>PDF Documents</strong>
                            </div>
                        </div>

                        <div class="md-float md-float-2">
                            <div class="md-float-icon"><i class="bi bi-shield-fill-check"></i></div>
                            <div class="md-float-text">
                                <small>Fully</small>
                                <strong>Compliant</strong>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
        <?php 
        break;


    case 'gallery':
        ?>
        <!-- HERO -->
    <section class="fac-hero">
        <div class="container">
            <div class="fac-hero-inner">

                <div class="fac-hero-text">
                    <div class="fac-crumb">
                        <!-- <a href="index.html">Home</a>
                        <i class="bi bi-chevron-right"></i>
                        <span class="current">Gallery</span> -->
                        <?php 
                            if ( function_exists('yoast_breadcrumb') ) {
                            yoast_breadcrumb( '<a id="breadcrumbs">','</a>' );
                        }
                        ?>
                    </div>

                    <h1 class="fac-hero-title">
                        School<br>
                        <em>Gallery</em>
                    </h1>

                    <p class="fac-hero-desc">
                        A visual journey through the vibrant life of our school —
                        capturing moments of learning, celebration, sports,
                        and the everyday joy of our students and staff.
                    </p>

                    <div class="fac-hero-facts">
                        <span><i class="bi bi-camera"></i> Captured Moments</span>
                        <span><i class="bi bi-images"></i> Photo Collections</span>
                        <span><i class="bi bi-heart"></i> School Memories</span>
                    </div>
                </div>

                <div class="fac-hero-visual">
                    <div class="gal-hero-wrap">

                        <div class="gal-ring-1"></div>
                        <div class="gal-dot"></div>
                        <div class="gal-sparkle"><i class="bi bi-stars"></i></div>

                        <div class="gal-hero-frame">
                            <figure>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image10.png"
                                     alt="School moment at Shree Mahalingeshwara Vidyanikethana"
                                     title="School Life and Student Memories">
                                <figcaption class="cr-only">
                                    Vibrant moments of academic, cultural, and extracurricular life captured at Shree Mahalingeshwara Vidyanikethana Kunjathur.
                                </figcaption>
                            </figure>
                        </div>

                        <div class="gal-ring-2"></div>

                        <div class="gal-badge">
                            <div class="gal-badge-icon"><i class="bi bi-camera-fill"></i></div>
                            <div class="gal-badge-text">
                                <small>Explore</small>
                                <strong>Photo Memories</strong>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
        <?php
        break;
    
    case 'contact-us':
        ?>
        <!-- =========================================================
         HERO
    ========================================================= -->
    <section class="fac-hero">
        <div class="container">
            <div class="fac-hero-inner">

                <div class="fac-hero-text">
                    <div class="fac-crumb">
                        <!-- <a href="index.html">Home</a>
                        <i class="bi bi-chevron-right"></i>
                        <span class="current">Contact Us</span> -->
                        <?php 
                            if ( function_exists('yoast_breadcrumb') ) {
                            yoast_breadcrumb( '<a id="breadcrumbs">','</a>' );
                        }
                        ?>
                    </div>

                    <h1 class="fac-hero-title">
                        Get In<br>
                        <em>Touch</em>
                    </h1>

                    <p class="fac-hero-desc">
                        We would love to hear from you. Reach out to us for
                        admissions, general enquiries, or to plan a visit to
                        our campus — our team is always happy to help.
                    </p>

                    <div class="fac-hero-facts">
                        <span><i class="bi bi-telephone"></i> Quick Response</span>
                        <span><i class="bi bi-chat-dots"></i> Friendly Support</span>
                        <span><i class="bi bi-geo-alt"></i> Campus Visits</span>
                    </div>
                </div>

                <div class="fac-hero-visual">
                    <div class="ct-hero-wrap">

                        <div class="ct-ring-blue"></div>

                        <div class="ct-card">

                            <div class="ct-card-head">
                                <div class="ct-card-icon">
                                    <i class="bi bi-chat-dots-fill"></i>
                                </div>
                                <div class="ct-card-head-text">
                                    <span>Reach Us</span>
                                    <strong>Contact Details</strong>
                                </div>
                            </div>

                            <div class="ct-card-body">

                                <div class="ct-line">
                                    <div class="ct-line-icon"><i class="bi bi-telephone-fill"></i></div>
                                    <div class="ct-line-text">
                                        <strong>04998 278940</strong>
                                        <small>Mob: 8921400582</small>
                                    </div>
                                </div>

                                <div class="ct-line">
                                    <div class="ct-line-icon"><i class="bi bi-envelope-fill"></i></div>
                                    <div class="ct-line-text">
                                        <strong>smvkunjathur@gmail.com</strong>
                                        <small>We reply within 24 hours</small>
                                    </div>
                                </div>

                                <div class="ct-line">
                                    <div class="ct-line-icon"><i class="bi bi-geo-alt-fill"></i></div>
                                    <div class="ct-line-text">
                                        <strong>Kunjathur, Manjeshwar</strong>
                                        <small>Shree Mahalingeshwara Temple Campus – 671323</small>
                                    </div>
                                </div>

                            </div>

                            <div class="ct-card-foot">
                                <span class="ct-card-foot-label">
                                    <i class="bi bi-clock-fill"></i>
                                    Mon – Sat
                                </span>
                                <div class="ct-card-foot-dots">
                                    <span></span><span></span><span></span>
                                </div>
                            </div>

                        </div>

                        <div class="ct-float ct-float-1">
                            <div class="ct-float-icon"><i class="bi bi-telephone-outbound-fill"></i></div>
                            <div class="ct-float-text">
                                <small>Call</small>
                                <strong>Anytime</strong>
                            </div>
                        </div>

                        <div class="ct-float ct-float-2">
                            <div class="ct-float-icon"><i class="bi bi-send-fill"></i></div>
                            <div class="ct-float-text">
                                <small>Send</small>
                                <strong>A Message</strong>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
        <?php
        break;

    default:
        ?>
        <!-- DEFAULT BANNER DESIGN -->
        <!-- <section class="default-banner">
            <div class="container">
                <h1><?php echo esc_html(get_the_title()); ?></h1>
                <p>Home / <?php echo esc_html(get_the_title()); ?></p>
            </div>
        </section> -->
        <?php
        break;
}
?>
