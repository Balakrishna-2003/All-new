<?php
/* Template Name: Teaching Staff Template
 *
 * This is a custom template for displaying teaching staff members.
 *
 * @package WordPress
 * @subpackage oceanleisureinfra Child
 * @since oceanleisureinfra Child 1.0
 */
get_header();

$teaching_staff = new WP_Query(array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'category_name'  => 'teaching-staff',
    'orderby'        => 'date',
    'order'          => 'ASC',
));
?>

<article>

    <?php get_template_part('page-banners'); ?>

    <!-- =========================================================
         TEACHING STAFF — DIRECTORY
    ========================================================= -->
    <section class="fac-staff">
        <div class="container">

            <div class="fac-staff-head">
                <span class="fac-staff-eyebrow">Faculty &amp; Staff</span>
                <h2 class="fac-staff-title">Meet Our <em>Teaching Staff</em></h2>
                <p class="fac-staff-desc">
                    A team of qualified, dedicated and caring educators who
                    bring knowledge, experience and warmth into every classroom.
                </p>
            </div>

            <div class="fac-staff-card">

                <div class="fac-staff-card-head">
                    <div class="fac-staff-card-title">
                        <span>Faculty &amp; Staff</span>
                        <strong>Teaching Staff Directory</strong>
                    </div>
                    <div class="fac-staff-count">
                        <strong><?php echo $teaching_staff->found_posts; ?></strong>
                        <span>Members</span>
                    </div>
                </div>

                <div class="fac-staff-scroll">
                    <table class="fac-table">
                        <thead>
                            <tr>
                                <th scope="col">Sl No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Qualification</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Subject / Section</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                              $serial = 1;
                              if ($teaching_staff->have_posts()) :
                                  while ($teaching_staff->have_posts()) :
                                      $teaching_staff->the_post();

                                      $staff_id = get_the_ID();

                                      $name = get_the_title();

                                      $qualification = get_post_meta(
                                          $staff_id,
                                          'staff_qualification',
                                          true
                                      );

                                      $designation = get_post_meta(
                                          $staff_id,
                                          'staff_designation',
                                          true
                                      );

                                      $subject = get_post_meta(
                                          $staff_id,
                                          'staff_subject',
                                          true
                                      );
                                      ?>
                                      <tr>
                                        <td data-label="Sl No"><span class="fac-num"><?php echo sprintf('%02d', $serial++); ?></span></td>
                                        <td data-label="Name"><span class="fac-name"><?php echo $name; ?></span></td>
                                        <td data-label="Qualification"><span class="fac-qual"><?php echo $qualification; ?></span></td>
                                        <td data-label="Designation"><span class="fac-desig desig-principal"><?php echo $designation; ?></span></td>
                                        <td data-label="Subject / Section"><span class="fac-subject"><?php echo $subject; ?></span></td>
                            </tr>
                                      <?php
                                  endwhile;
                                else:
                                    ?>
                        <tr>
                            <td colspan="5" class="fac-empty">
                                No teaching staff records available.
                            </td>
                        </tr>
                            <?php
                                endif;
                                ?>


                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </section>

</article>

<?php get_footer(); ?>