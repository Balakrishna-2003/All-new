
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
                        <a href="<?php echo home_url(); ?>">Home</a>
                        <i class="bi bi-chevron-right"></i>
                        <span>Academics</span>
                        <i class="bi bi-chevron-right"></i>
                        <span class="current">Curriculum</span>
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
                        <a href="<?php echo home_url(); ?>">Home</a>
                        <i class="bi bi-chevron-right"></i>
                        <span>Academics</span>
                        <i class="bi bi-chevron-right"></i>
                        <span class="current">Examination &amp; Evaluation</span>
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
                        <a href="<?php echo home_url(); ?>">Home</a>
                        <i class="bi bi-chevron-right"></i>
                        <span>Academics</span>
                        <i class="bi bi-chevron-right"></i>
                        <span class="current">Teaching Methodology</span>
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
                        <a href="<?php echo home_url(); ?>">Home</a>
                        <i class="bi bi-chevron-right"></i>
                        <span>Academics</span>
                        <i class="bi bi-chevron-right"></i>
                        <span class="current">Co-Curricular Activities</span>
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
                        <a href="index.html">Home</a>
                        <i class="bi bi-chevron-right"></i>
                        <a href="#">Admissions</a>
                        <i class="bi bi-chevron-right"></i>
                        <span class="current">Admission Overview</span>
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
    

    default:
        ?>
        <!-- DEFAULT BANNER DESIGN -->
        <section class="default-banner">
            <div class="container">
                <h1><?php echo esc_html(get_the_title()); ?></h1>
                <p>Home / <?php echo esc_html(get_the_title()); ?></p>
            </div>
        </section>
        <?php
        break;
}
?>
