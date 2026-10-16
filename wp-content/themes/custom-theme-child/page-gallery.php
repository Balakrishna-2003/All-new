<?php
/*
Template Name: School Gallery
*/
get_header();
?>
<article>
    <?php get_template_part('page-banners'); ?>

    <!-- GALLERY SECTION -->
    <section class="gal-section">
        <div class="container">

            <div class="gal-head">
                <span class="gal-eyebrow">Captured Moments</span>
                <h2 class="gal-title">School Life in <em>Pictures</em></h2>
                <p class="gal-sub">
                    A curated collection of moments from our classrooms,
                    playgrounds, stages and campus — celebrating the spirit
                    of our students, staff and community.
                </p>
            </div>

            <!-- Filter Tabs -->
            <div class="gal-filters" role="tablist" aria-label="Gallery filter">
                <button class="gal-filter is-active" data-filter="all" type="button">All</button>
                <button class="gal-filter" data-filter="events"    type="button">Events</button>
                <button class="gal-filter" data-filter="sports"    type="button">Sports</button>
                <button class="gal-filter" data-filter="culture"   type="button">Cultural</button>
                <button class="gal-filter" data-filter="classroom" type="button">Classroom</button>
                <button class="gal-filter" data-filter="campus"    type="button">Campus</button>
            </div>

            <!-- Justified Grid of Figures -->
            <div class="gal-grid" id="galGrid">

                

<?php
$category_labels = array(
    'events'    => 'Events',
    'sports'    => 'Sports',
    'culture'   => 'Cultural',
    'classroom' => 'Classroom',
    'campus'    => 'Campus',
);

$collections = new WP_Query(array(
    'post_type'      => 'gallery_collection',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'orderby'        => 'date',
    'order'          => 'DESC',
));

if ($collections->have_posts()) :
    while ($collections->have_posts()) :
        $collections->the_post();

        $category = get_post_meta(
            get_the_ID(),
            '_smvk_gallery_category',
            true
        );

        $images = get_post_meta(
            get_the_ID(),
            '_smvk_gallery_images',
            true
        );

        if (
            !isset($category_labels[$category]) ||
            !is_array($images)
        ) {
            continue;
        }

        foreach ($images as $image) :
            $image_id = absint($image['id'] ?? 0);
            $title = $image['title'] ?? '';
            $caption = $image['caption'] ?? '';

            if (
                !$image_id ||
                !wp_attachment_is_image($image_id) ||
                $title === ''
            ) {
                continue;
            }

            $alt = get_post_meta(
                $image_id,
                '_wp_attachment_image_alt',
                true
            );

            if (!$alt) {
                $alt = $title;
            }

            $lightbox_caption = $caption !== ''
                ? $caption
                : $title;
            ?>

            <figure
                class="gal-tile"
                role="button"
                tabindex="0"
                data-category="<?php echo esc_attr($category); ?>"
                data-caption="<?php echo esc_attr($lightbox_caption); ?>"
            >
                <?php
                echo wp_get_attachment_image(
                    $image_id,
                    'large',
                    false,
                    array(
                        'loading' => 'lazy',
                        'alt' => $alt,
                    )
                );
                ?>

                <figcaption class="gal-tile-cap">
                    <small>
                        <?php echo esc_html($category_labels[$category]); ?>
                    </small>

                    <strong>
                        <?php echo esc_html($title); ?>
                    </strong>
                </figcaption>
            </figure>

            <?php
        endforeach;

    endwhile;

    wp_reset_postdata();
endif;
?>



                <!-- <figure class="gal-tile" role="button" tabindex="0" data-category="events"
                        data-caption="Annual Day & Sports Champions Felicitation Ceremony">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image26.png" loading="lazy" alt="Annual Day & Sports Champions Felicitation Ceremony">
                    <figcaption class="gal-tile-cap">
                        <small>Events</small>
                        <strong>Annual Day & Sports Champions Felicitation</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="sports"
                        data-caption="Annual Sports Meet Mass Aerobics & Drill Display on Ground">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image22.png" loading="lazy" alt="Annual Sports Meet Mass Aerobics & Drill Display">
                    <figcaption class="gal-tile-cap">
                        <small>Sports</small>
                        <strong>Annual Sports Meet Mass PT Drill</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="culture"
                        data-caption="Classical Kathak Dance Troupe in Silver Regalia">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image35.png" loading="lazy" alt="Classical Kathak Dance Troupe in Silver Regalia">
                    <figcaption class="gal-tile-cap">
                        <small>Cultural</small>
                        <strong>Classical Kathak Dance Troupe</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="classroom"
                        data-caption="Physics Laboratory — Electrical Circuits & Practical Experiments">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image16.png" loading="lazy" alt="Physics Laboratory Practical Experiments">
                    <figcaption class="gal-tile-cap">
                        <small>Classroom</small>
                        <strong>Physics Lab Circuit Experiments</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="classroom"
                        data-caption="Biology Laboratory — Microscope Specimen & Cell Analysis">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image17.png" loading="lazy" alt="Biology Laboratory Microscope Specimen Analysis">
                    <figcaption class="gal-tile-cap">
                        <small>Classroom</small>
                        <strong>Biology Lab Microscope Analysis</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="campus"
                        data-caption="Shree Mahalingeshwara Vidyanikethana Campus Infrastructure">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image2.png" loading="lazy" alt="School Campus Infrastructure">
                    <figcaption class="gal-tile-cap">
                        <small>Campus</small>
                        <strong>SMVK Campus Infrastructure</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="sports"
                        data-caption="Karate & Martial Arts Squad Promotion & Demonstration">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image5.png" loading="lazy" alt="Karate & Martial Arts Squad">
                    <figcaption class="gal-tile-cap">
                        <small>Sports</small>
                        <strong>Karate & Martial Arts Squad</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="culture"
                        data-caption="Classical Bharatanatyam Stage Performance">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image10.png" loading="lazy" alt="Classical Bharatanatyam Stage Performance">
                    <figcaption class="gal-tile-cap">
                        <small>Cultural</small>
                        <strong>Classical Bharatanatyam Recital</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="events"
                        data-caption="Student Council Investiture Ceremony & Lamp Lighting">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image104.png" loading="lazy" alt="Student Council Investiture Ceremony">
                    <figcaption class="gal-tile-cap">
                        <small>Events</small>
                        <strong>Student Council Investiture Ceremony</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="classroom"
                        data-caption="Smart Digital Classroom & ICT Audio-Visual Interactive Learning">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image14.png" loading="lazy" alt="Smart Digital Classroom Audio Visual Learning">
                    <figcaption class="gal-tile-cap">
                        <small>Classroom</small>
                        <strong>Smart Digital Audio-Visual Class</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="campus"
                        data-caption="Central Quadrangle & School Main Portal Architecture">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image81.png" loading="lazy" alt="Central Quadrangle & School Architecture">
                    <figcaption class="gal-tile-cap">
                        <small>Campus</small>
                        <strong>Central Quadrangle & Building</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="sports"
                        data-caption="Roller Skating Training & Speed Skill Demonstration">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image7.png" loading="lazy" alt="Roller Skating Training & Demonstration">
                    <figcaption class="gal-tile-cap">
                        <small>Sports</small>
                        <strong>Roller Skating Training</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="culture"
                        data-caption="Diwali Festival Mythological Drama & Sanskrit Play">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image221.png" loading="lazy" alt="Diwali Mythological Drama">
                    <figcaption class="gal-tile-cap">
                        <small>Cultural</small>
                        <strong>Diwali Mythological Drama</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="campus"
                        data-caption="SMVK School Bus Fleet & Transportation Network">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image18.png" loading="lazy" alt="SMVK School Bus Fleet">
                    <figcaption class="gal-tile-cap">
                        <small>Campus</small>
                        <strong>SMVK Safe Transport Fleet</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="events"
                        data-caption="All-School Annual Prize Distribution & Medals Ceremony">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image28.png" loading="lazy" alt="Annual Prize Distribution & Medals Ceremony">
                    <figcaption class="gal-tile-cap">
                        <small>Events</small>
                        <strong>Annual Prize Distribution Ceremony</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="classroom"
                        data-caption="Kindergarten Interactive Digital Audio-Visual Room">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image12.png" loading="lazy" alt="Kindergarten Interactive Digital Learning">
                    <figcaption class="gal-tile-cap">
                        <small>Classroom</small>
                        <strong>Kindergarten Interactive Digital Room</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="classroom"
                        data-caption="Chemistry Laboratory — Solution Titration & Reactions">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image15.png" loading="lazy" alt="Chemistry Laboratory Experiments">
                    <figcaption class="gal-tile-cap">
                        <small>Classroom</small>
                        <strong>Chemistry Laboratory Experiments</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="culture"
                        data-caption="Patriotic Freedom Fighters Fancy Dress Competition">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image153.png" loading="lazy" alt="Patriotic Fancy Dress Competition">
                    <figcaption class="gal-tile-cap">
                        <small>Cultural</small>
                        <strong>Patriotic Fancy Dress Competition</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="sports"
                        data-caption="International Yoga Day Mass Pranayama & Meditation Session">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image4.png" loading="lazy" alt="International Yoga Day Mass Session">
                    <figcaption class="gal-tile-cap">
                        <small>Sports</small>
                        <strong>International Yoga Day Mass Session</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="campus"
                        data-caption="Wholesome Midday Meal & Community Dining Gathering">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image11.png" loading="lazy" alt="Wholesome Midday Meal Gathering">
                    <figcaption class="gal-tile-cap">
                        <small>Campus</small>
                        <strong>Wholesome Community Midday Meal</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="culture"
                        data-caption="Onam Festival Celebration & Floral Pookkalam Carpet">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image174.png" loading="lazy" alt="Onam Floral Pookkalam Celebration">
                    <figcaption class="gal-tile-cap">
                        <small>Cultural</small>
                        <strong>Onam Celebration & Floral Pookkalam</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="events"
                        data-caption="National Youth Day & Swami Vivekananda Jayanti Tribute">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image40.png" loading="lazy" alt="National Youth Day Tribute">
                    <figcaption class="gal-tile-cap">
                        <small>Events</small>
                        <strong>National Youth Day Tribute</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="classroom"
                        data-caption="Computer Science Lab & Digital Skills Practical Session">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image82.png" loading="lazy" alt="Computer Science Lab Practical">
                    <figcaption class="gal-tile-cap">
                        <small>Classroom</small>
                        <strong>Computer Science Practical Lab</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="sports"
                        data-caption="Speed Skating Training in School Quadrangle">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image6.png" loading="lazy" alt="Speed Skating Training Squad">
                    <figcaption class="gal-tile-cap">
                        <small>Sports</small>
                        <strong>Speed Skating Training Squad</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="culture"
                        data-caption="Traditional Folk Dance Ensemble & Costumes">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image31.png" loading="lazy" alt="Traditional Folk Dance Ensemble">
                    <figcaption class="gal-tile-cap">
                        <small>Cultural</small>
                        <strong>Traditional Folk Dance Troupe</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="events"
                        data-caption="School Cabinet Democratic Election & Ballot Voting">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image84.png" loading="lazy" alt="School Cabinet Democratic Election">
                    <figcaption class="gal-tile-cap">
                        <small>Events</small>
                        <strong>Democratic Cabinet Election</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="classroom"
                        data-caption="Guided Language Reading Circle & Group Study">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image85.png" loading="lazy" alt="Guided Language Reading Circle">
                    <figcaption class="gal-tile-cap">
                        <small>Classroom</small>
                        <strong>Guided Reading & Language Circle</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="campus"
                        data-caption="Dignitaries Arrival & Trust Welcome Reception">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image60.png" loading="lazy" alt="Dignitaries Welcome Reception">
                    <figcaption class="gal-tile-cap">
                        <small>Campus</small>
                        <strong>Dignitaries Welcome Reception</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="sports"
                        data-caption="Namitha K.G. — State Athletic Triple Gold Individual Champion">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image163.png" loading="lazy" alt="Namitha KG State Athletic Champion">
                    <figcaption class="gal-tile-cap">
                        <small>Sports</small>
                        <strong>Namitha K.G. — Triple Gold Champion</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="culture"
                        data-caption="Epic Ramayana Drama & Theatrical Skit Performance">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image36.png" loading="lazy" alt="Epic Ramayana Drama Performance">
                    <figcaption class="gal-tile-cap">
                        <small>Cultural</small>
                        <strong>Ramayana Theatrical Drama</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="events"
                        data-caption="Deepavali Celebration with Management & Faculty Guests">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image220.png" loading="lazy" alt="Deepavali Celebration Stage">
                    <figcaption class="gal-tile-cap">
                        <small>Events</small>
                        <strong>Deepavali Festive Assembly</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="classroom"
                        data-caption="Arts & Crafts Club Exhibition & Creative Painting Gallery">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image110.png" loading="lazy" alt="Arts & Crafts Club Exhibition">
                    <figcaption class="gal-tile-cap">
                        <small>Classroom</small>
                        <strong>Arts & Crafts Exhibition</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="sports"
                        data-caption="Annual Sports Day Opening — Peace Dove Release by Guests">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image20.png" loading="lazy" alt="Sports Day Opening Ceremony">
                    <figcaption class="gal-tile-cap">
                        <small>Sports</small>
                        <strong>Sports Day Peace Dove Release</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="culture"
                        data-caption="Folk Dandiya & Stick Dance Rehearsal in Dance Hall">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image8.png" loading="lazy" alt="Stick Dance Rehearsal">
                    <figcaption class="gal-tile-cap">
                        <small>Cultural</small>
                        <strong>Folk Stick Dance Rehearsal</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="campus"
                        data-caption="Parent-Teacher Association (PTA) Open House Assembly">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image125.png" loading="lazy" alt="PTA Open House Assembly">
                    <figcaption class="gal-tile-cap">
                        <small>Campus</small>
                        <strong>PTA Open House Assembly</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="events"
                        data-caption="Kargil Vijay Diwas Homage to Armed Forces War Heroes">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image130.png" loading="lazy" alt="Kargil Vijay Diwas Homage">
                    <figcaption class="gal-tile-cap">
                        <small>Events</small>
                        <strong>Kargil Vijay Diwas Tribute</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="classroom"
                        data-caption="Eco Club Environmental Models & Project Exhibition">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image112.png" loading="lazy" alt="Eco Club Models & Project Display">
                    <figcaption class="gal-tile-cap">
                        <small>Classroom</small>
                        <strong>Eco Club Science Exhibition</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="sports"
                        data-caption="Track & Field 100m/200m Sprint Medalists on Stage">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image21.png" loading="lazy" alt="Track & Field Sprint Medalists">
                    <figcaption class="gal-tile-cap">
                        <small>Sports</small>
                        <strong>Track & Field Sprint Medalists</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="culture"
                        data-caption="Classical Harmonium & Sangeetha Vocal Training">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image9.png" loading="lazy" alt="Classical Harmonium & Vocal Training">
                    <figcaption class="gal-tile-cap">
                        <small>Cultural</small>
                        <strong>Harmonium & Vocal Sangeetha</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="campus"
                        data-caption="Mothers Community Gathering & Interactive Forum">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image30.png" loading="lazy" alt="Mothers Community Gathering">
                    <figcaption class="gal-tile-cap">
                        <small>Campus</small>
                        <strong>Mothers Community Gathering</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="events"
                        data-caption="Independence Day Meritorious Awards Distribution">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image158.png" loading="lazy" alt="Independence Day Meritorious Awards">
                    <figcaption class="gal-tile-cap">
                        <small>Events</small>
                        <strong>Independence Day Honors</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="classroom"
                        data-caption="District Science Fair — Shishu Vibhag Innovators & Prizes">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image185.png" loading="lazy" alt="District Science Fair Primary Winners">
                    <figcaption class="gal-tile-cap">
                        <small>Classroom</small>
                        <strong>Science Fair Primary Innovators</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="sports"
                        data-caption="BVN District Sports Championship Overall Winner Trophy">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image24.png" loading="lazy" alt="BVN District Sports Championship Trophy">
                    <figcaption class="gal-tile-cap">
                        <small>Sports</small>
                        <strong>District Championship Trophy</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="culture"
                        data-caption="Kannada Rajyotsava Patriotic Choir on Stage">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image190.png" loading="lazy" alt="Kannada Rajyotsava Patriotic Choir">
                    <figcaption class="gal-tile-cap">
                        <small>Cultural</small>
                        <strong>Kannada Rajyotsava Choir</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="events"
                        data-caption="World Environment Day Sapling Plantation Ceremony">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image74.png" loading="lazy" alt="World Environment Day Sapling Plantation">
                    <figcaption class="gal-tile-cap">
                        <small>Events</small>
                        <strong>World Environment Day Plantation</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="classroom"
                        data-caption="District Science Fair — Kishore Vibhag Young Scientists">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image187.png" loading="lazy" alt="District Science Fair High School Winners">
                    <figcaption class="gal-tile-cap">
                        <small>Classroom</small>
                        <strong>Science Fair Kishore Vibhag</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="sports"
                        data-caption="Primary & Kindergarten Yoga Asanas Practice Session">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image89.png" loading="lazy" alt="Primary Yoga Asanas Practice Session">
                    <figcaption class="gal-tile-cap">
                        <small>Sports</small>
                        <strong>Primary Yoga Asana Practice</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="culture"
                        data-caption="World Music Day Vocal Choral Presentation">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image98.png" loading="lazy" alt="World Music Day Vocal Choral Presentation">
                    <figcaption class="gal-tile-cap">
                        <small>Cultural</small>
                        <strong>World Music Day Choir</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="campus"
                        data-caption="Green Campus Initiative & Student Gardening Drive">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image76.png" loading="lazy" alt="Green Campus Student Gardening Drive">
                    <figcaption class="gal-tile-cap">
                        <small>Campus</small>
                        <strong>Green Campus Gardening Drive</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="events"
                        data-caption="Matru Sangama — Mothers Meet & Parenting Forum">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image235.png" loading="lazy" alt="Matru Sangama Mothers Meet">
                    <figcaption class="gal-tile-cap">
                        <small>Events</small>
                        <strong>Matru Sangama Forum</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="classroom"
                        data-caption="Educational Field Trip to Ayurvedic Medical Center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image200.png" loading="lazy" alt="Educational Field Trip">
                    <figcaption class="gal-tile-cap">
                        <small>Classroom</small>
                        <strong>Educational Field Study Trip</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="sports"
                        data-caption="Kindergarten & Primary Fun Sports Track Race">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image171.png" loading="lazy" alt="Kindergarten & Primary Fun Race">
                    <figcaption class="gal-tile-cap">
                        <small>Sports</small>
                        <strong>Primary Fun Track Race</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="culture"
                        data-caption="Guru Poornima Reverence & Prayer by Primary Students">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image119.png" loading="lazy" alt="Guru Poornima Prayer by Primary Students">
                    <figcaption class="gal-tile-cap">
                        <small>Cultural</small>
                        <strong>Guru Poornima Reverence</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="campus"
                        data-caption="Parent & Community Audience at School Celebrations">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image256.png" loading="lazy" alt="Parent & Community Audience">
                    <figcaption class="gal-tile-cap">
                        <small>Campus</small>
                        <strong>Community & Parent Audience</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="classroom"
                        data-caption="Sanskrit Shloka & Gita Chanting Competition Winners">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image45.png" loading="lazy" alt="Sanskrit Shloka & Gita Chanting Winners">
                    <figcaption class="gal-tile-cap">
                        <small>Classroom</small>
                        <strong>Sanskrit Shloka Competition Winners</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="sports"
                        data-caption="Inter-School Athletic Meet Victory Podium Ceremony">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image253.png" loading="lazy" alt="Victory Podium Ceremony">
                    <figcaption class="gal-tile-cap">
                        <small>Sports</small>
                        <strong>Athletic Victory Podium</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="culture"
                        data-caption="Raksha Bandhan Celebration of Unity & Harmony">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image147.png" loading="lazy" alt="Raksha Bandhan Celebration">
                    <figcaption class="gal-tile-cap">
                        <small>Cultural</small>
                        <strong>Raksha Bandhan Celebration</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="culture"
                        data-caption="Saraswati & Bharat Mata Puja at Morning Altar">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image244.png" loading="lazy" alt="Saraswati Puja at School Altar">
                    <figcaption class="gal-tile-cap">
                        <small>Cultural</small>
                        <strong>Saraswati & Bharat Mata Puja</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="culture"
                        data-caption="Chishmitha A. Kulal — Kalathilakam District Title Winner">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image254.png" loading="lazy" alt="Chishmitha A Kulal Kalathilakam Winner">
                    <figcaption class="gal-tile-cap">
                        <small>Cultural</small>
                        <strong>Chishmitha A. Kulal — Kalathilakam</strong>
                    </figcaption>
                </figure>

                <figure class="gal-tile" role="button" tabindex="0" data-category="culture"
                        data-caption="Hindi Diwas Theatrical Stage Performance">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image189.png" loading="lazy" alt="Hindi Diwas Stage Performance">
                    <figcaption class="gal-tile-cap">
                        <small>Cultural</small>
                        <strong>Hindi Diwas Stage Drama</strong>
                    </figcaption>
                </figure> -->

            </div>

            <div class="gal-empty" id="galEmpty">
                No photos in this category yet.
            </div>

        </div>
    </section>

</article>

<!-- GALLERY LIGHTBOX -->
<div class="modal fade" id="galLightbox" tabindex="-1" aria-label="Photo preview" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <img id="galLightboxImg" src="" alt="">
            <div class="gal-lb-caption" id="galLightboxCap"></div>
        </div>
    </div>
</div>
<?php 
get_footer();
?>