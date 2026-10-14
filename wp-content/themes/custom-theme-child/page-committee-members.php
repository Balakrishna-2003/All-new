
<?php
/*
Template Name: Committee Members
*/

get_header();

$committee = new WP_Query(array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'category_name'  => 'management-committee',
    'orderby'        => 'date',
    'order'          => 'ASC',
));
?>

<main class="committee-page">


    <?php
    get_template_part('page-banners');
    ?>

    <!-- SECTION 2: COMMITTEE TABLE -->
    <section class="committee-table-section">
        <div class="container">

            <div class="committee-table-heading">
                <h2>Committee <em>Members</em></h2>
                <p>
                    Complete details of the committee — as recorded with the Trust.
                </p>
            </div>

            <div class="committee-table-wrap">
                <table class="committee-table">

                    <thead>
                        <tr>
                            <th class="col-sl">Sl No.</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Post</th>
                            <th>Mob. No</th>
                            <th>Occupation</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php
                    $serial = 1;

                    if ($committee->have_posts()) :
                        while ($committee->have_posts()) :
                            $committee->the_post();

                            $member_id = get_the_ID();


                            $name = get_the_title();

                            $address = get_post_meta(
                                $member_id,
                                'member_address',
                                true
                            );

                            $position = get_post_meta(
                                $member_id,
                                'member_post',
                                true
                            );

                            $mobile = get_post_meta(
                                $member_id,
                                'member_mobile',
                                true
                            );

                            $occupation = get_post_meta(
                                $member_id,
                                'member_occupation',
                                true
                            );

                            // Preserve line breaks in addresses.
                            $address_lines = preg_split(
                                '/\r\n|\r|\n/',
                                (string) $address
                            );

                            $address_html = implode(
                                '<br>',
                                array_map(
                                    'esc_html',
                                    $address_lines
                                )
                            );

                            // Generate a safe telephone link.
                            $telephone = preg_replace(
                                '/[^0-9+]/',
                                '',
                                (string) $mobile
                            );

                            $position_class =
                                strtolower(trim((string) $position)) === 'president'
                                ? ' president'
                                : '';
                    ?>

                        <tr>
                            <td class="col-sl">
                                <?php
                                echo esc_html(
                                    sprintf('%02d', $serial++)
                                );
                                ?>
                            </td>

                            <td class="name-cell">
                                <?php echo esc_html($name); ?>
                            </td>

                            <td class="address-cell">
                                <?php echo $address_html; ?>
                            </td>

                            <td>
                                <span class="post-cell<?php
                                    echo esc_attr($position_class);
                                ?>">
                                    <?php echo esc_html($position); ?>
                                </span>
                            </td>

                            <td class="mob-cell">
                                <?php if ($telephone !== '') : ?>
                                    <a href="<?php
                                        echo esc_url('tel:' . $telephone);
                                    ?>">
                                        <?php echo esc_html($mobile); ?>
                                    </a>
                                <?php else : ?>
                                    —
                                <?php endif; ?>
                            </td>

                            <td>
                                <?php echo esc_html($occupation); ?>
                            </td>
                        </tr>

                    <?php
                        endwhile;
                    else :
                    ?>

                        <tr>
                            <td colspan="6">
                                No committee members found.
                            </td>
                        </tr>

                    <?php
                    endif;

                    wp_reset_postdata();
                    ?>
                    </tbody>

                </table>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>
