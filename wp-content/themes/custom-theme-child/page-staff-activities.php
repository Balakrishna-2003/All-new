<?php 
/*Template Name: Staff Activities Template */

get_header();
?>
<article>

    <?php get_template_part('page-banners'); ?>

    <!-- HIGHLIGHTS -->
    <section class="sa-section">
        <div class="container">
            <div class="sa-head">
                <span class="sa-eyebrow">What We Do Together</span>
                <h2 class="sa-title">A Team That <em>Grows</em> Together</h2>
                <p class="sa-sub">
                    From festive celebrations to training sessions and parent
                    meetings, our staff come together throughout the year to learn,
                    bond and serve the school community.
                </p>
            </div>

            <div class="sa-cards">

                <?php 
                    $activities = new WP_Query(array(
                        'post_type'      => 'post',
                        'post_status'    => 'publish',
                        'posts_per_page' =>  3,
                        'category_name'  => 'staff-activity',
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                    ));

                    if($activities->have_posts()):
                        while($activities->have_posts()):
                            $activities->the_post();
                            $post_id = get_the_ID();

                            $title = get_the_title();

                            
                            
                            ?>
                            

                            <article class="sa-card">
                    <div class="sa-card-img">
                        <div class="sa-card-img-clip">
                            <figure>
                                <img src="<?php echo the_post_thumbnail_url($post_id, 'medium'); ?>" loading="lazy"
                                     alt="Staff seated around the Onam pookalam"
                                     title="Staff Team Building and Onam Celebrations">
                                <figcaption class="cr-only">
                                    Teachers and staff members celebrating cultural festivals together, fostering warmth, team bonding, and unity.
                                </figcaption>
                            </figure>
                        </div>
                        <span class="sa-card-icon"><i class="bi bi-people"></i></span>
                    </div>
                    <div class="sa-card-body">
                        <h3><?php echo $title; ?></h3>
                        <p><?php echo the_content(); ?></p>
                    </div>
                </article>
                            
                            <?php
                        endwhile;
                    endif;
                    ?>
                        
                    
                <!-- <article class="sa-card">
                    <div class="sa-card-img">
                        <div class="sa-card-img-clip">
                            <figure>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image182.png" loading="lazy"
                                     alt="Staff seated around the Onam pookalam"
                                     title="Staff Team Building and Onam Celebrations">
                                <figcaption class="cr-only">
                                    Teachers and staff members celebrating cultural festivals together, fostering warmth, team bonding, and unity.
                                </figcaption>
                            </figure>
                        </div>
                        <span class="sa-card-icon"><i class="bi bi-people"></i></span>
                    </div>
                    <div class="sa-card-body">
                        <h3>Team Building</h3>
                        <p>Festivals such as Onam and Teachers' Day bring every
                           teacher and staff member together, strengthening
                           friendships and a shared sense of purpose.</p>
                    </div>
                </article>

                <article class="sa-card">
                    <div class="sa-card-img">
                        <div class="sa-card-img-clip">
                            <figure>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image235.png" loading="lazy"
                                     alt="Teachers addressing a school programme"
                                     title="Faculty Professional Growth and Presentations">
                                <figcaption class="cr-only">
                                    Faculty members leading seminars and presentations, promoting continuous professional development and knowledge sharing.
                                </figcaption>
                            </figure>
                        </div>
                        <span class="sa-card-icon"><i class="bi bi-lightbulb"></i></span>
                    </div>
                    <div class="sa-card-body">
                        <h3>Professional Growth</h3>
                        <p>Teachers take the stage to speak, present and lead
                           programmes, building confidence and sharing good
                           practices with colleagues.</p>
                    </div>
                </article>

                <article class="sa-card">
                    <div class="sa-card-img">
                        <div class="sa-card-img-clip">
                            <figure>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image93.png" loading="lazy"
                                     alt="Teachers at the PTA meeting"
                                     title="Parent-Teacher Association and Community Engagement">
                                <figcaption class="cr-only">
                                    Teachers and parents collaborating at PTA conferences to support student academic success and overall well-being.
                                </figcaption>
                            </figure>
                        </div>
                        <span class="sa-card-icon"><i class="bi bi-calendar-event"></i></span>
                    </div>
                    <div class="sa-card-body">
                        <h3>Community Events</h3>
                        <p>PTA meetings, inaugurations and cultural programmes keep
                           staff, parents and management working hand in hand.</p>
                    </div>
                </article> -->
            </div>
        </div>
    </section>

    <!-- GALLERY -->
    <section class="sa-section alt">
        <div class="container">
            <div class="sa-head">
                <span class="sa-eyebrow">Moments</span>
                <h2 class="sa-title">Staff <em>Gallery</em></h2>
                <p class="sa-sub">
                    A glimpse of our teachers and staff at celebrations,
                    programmes and meetings. Tap any photo to enlarge it.
                </p>
            </div>

            <div class="sa-gallery">
                <?php
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

        // Only display staff-gallery images
        if ($category !== 'staff-gallery') {
            continue;
        }

        $images = get_post_meta(
            get_the_ID(),
            '_smvk_gallery_images',
            true
        );

        if (!is_array($images)) {
            continue;
        }

        foreach ($images as $image) :
            $image_id = absint($image['id'] ?? 0);
            $title    = $image['title'] ?? '';
            $caption  = $image['caption'] ?? '';

            if (
                !$image_id ||
                !wp_attachment_is_image($image_id)
            ) {
                continue;
            }

            $alt = get_post_meta(
                $image_id,
                '_wp_attachment_image_alt',
                true
            );

            if (!$alt) {
                $alt = $title ?: 'Staff Gallery Image';
            }

            $image_caption = $caption ?: $title;
            ?>

            <button
                class="sa-item"
                type="button"
                data-caption="<?php echo esc_attr($image_caption); ?>"
            >
                <figure>
                    <?php
                    echo wp_get_attachment_image(
                        $image_id,
                        'large',
                        false,
                        array(
                            'loading' => 'lazy',
                            'alt'     => $alt,
                            'title'   => $title,
                        )
                    );
                    ?>

                    <figcaption class="cr-only">
                        <?php echo esc_html($image_caption); ?>
                    </figcaption>
                </figure>
            </button>

            <?php
        endforeach;
    endwhile;

    wp_reset_postdata();
endif;
?>
                <!-- <button class="sa-item wide" type="button" data-caption="Onam celebration with staff">
                    <figure>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image196.png" loading="lazy" alt="Staff group on stage during Onam celebration" title="Onam Celebration">
                        <figcaption class="cr-only">Staff group on stage celebrating Onam festival at school auditorium.</figcaption>
                    </figure>
                </button>
                <button class="sa-item" type="button" data-caption="Staff group photo">
                    <figure>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image241.png" loading="lazy" alt="Staff group photo on stage" title="Staff Group Photo">
                        <figcaption class="cr-only">Faculty and administrative team members assembled on stage.</figcaption>
                    </figure>
                </button>
                <button class="sa-item" type="button" data-caption="Teachers together on stage">
                    <figure>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image242.png" loading="lazy" alt="Teachers group photo" title="Teachers Group Photo">
                        <figcaption class="cr-only">Teaching faculty gathered together at school event.</figcaption>
                    </figure>
                </button>
                <button class="sa-item" type="button" data-caption="Teachers' dance performance">
                    <figure>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image248.png" loading="lazy" alt="Teachers performing a dance on stage" title="Teachers Cultural Dance">
                        <figcaption class="cr-only">Teachers performing cultural dance during school anniversary function.</figcaption>
                    </figure>
                </button>
                <button class="sa-item" type="button" data-caption="Staff cultural performance">
                    <figure>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image249.png" loading="lazy" alt="Staff cultural performance" title="Staff Cultural Performance">
                        <figcaption class="cr-only">Staff members presenting musical and dramatic performance on stage.</figcaption>
                    </figure>
                </button>
                <button class="sa-item" type="button" data-caption="Staff programme on stage">
                    <figure>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image250.png" loading="lazy" alt="Staff performing on stage" title="Staff Stage Programme">
                        <figcaption class="cr-only">Staff members participating in celebratory stage program.</figcaption>
                    </figure>
                </button>
                <button class="sa-item" type="button" data-caption="Children's Day with teachers">
                    <figure>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image247.png" loading="lazy" alt="Teachers at Children's Day programme" title="Children's Day Celebration">
                        <figcaption class="cr-only">Teachers organizing fun games and activities on Children's Day.</figcaption>
                    </figure>
                </button>
                <button class="sa-item" type="button" data-caption="Teachers' Day celebration">
                    <figure>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image177.png" loading="lazy" alt="Teachers' Day celebration" title="Teachers' Day Celebration">
                        <figcaption class="cr-only">Special celebrations and felicitations honoring school teachers.</figcaption>
                    </figure>
                </button>
                <button class="sa-item" type="button" data-caption="Teachers lighting the lamp">
                    <figure>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image234.png" loading="lazy" alt="Teachers lighting the ceremonial lamp" title="Ceremonial Lamp Lighting">
                        <figcaption class="cr-only">Faculty members lighting the auspicious traditional lamp at annual school function.</figcaption>
                    </figure>
                </button>
                <button class="sa-item" type="button" data-caption="Staff and management at inauguration">
                    <figure>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image104.png" loading="lazy" alt="Staff and management at a lamp-lighting ceremony" title="School Inauguration Ceremony">
                        <figcaption class="cr-only">Trust management and faculty members participating in inaugural rituals.</figcaption>
                    </figure>
                </button>
                <button class="sa-item" type="button" data-caption="PTA meeting">
                    <figure>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image29.png" loading="lazy" alt="PTA meeting on stage" title="Parent-Teacher Association Meeting">
                        <figcaption class="cr-only">Parents and educators addressing the general body at the PTA assembly.</figcaption>
                    </figure>
                </button>
                <button class="sa-item" type="button" data-caption="Staff and management">
                    <figure>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/media/image220.png" loading="lazy" alt="Staff and management seated on stage" title="Staff and Management Assembly">
                        <figcaption class="cr-only">Distinguished trustees and educators seated on dais during school ceremony.</figcaption>
                    </figure>
                </button> -->
            </div>
        </div>
    </section>

</article>

<!-- PHOTO LIGHTBOX -->
<div class="modal fade" id="saLightbox" tabindex="-1" aria-label="Photo preview" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <img id="saLightboxImg" src="" alt="">
            <div class="sa-lb-caption" id="saLightboxCap"></div>
        </div>
    </div>
</div>

<!-- STAFF GALLERY LIGHTBOX -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const modalEl = document.getElementById("saLightbox");
        const modal = bootstrap.Modal.getOrCreateInstance(modalEl);
        const img = document.getElementById("saLightboxImg");
        const cap = document.getElementById("saLightboxCap");

        document.querySelectorAll(".sa-item").forEach(function (item) {
            item.addEventListener("click", function () {
                const thumb = item.querySelector("img");
                img.src = thumb.src;
                img.alt = thumb.alt;
                cap.textContent = item.dataset.caption || "";
                modal.show();
            });
        });
    });
</script>
<?php
get_footer();
?>