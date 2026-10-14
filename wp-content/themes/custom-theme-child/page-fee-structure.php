<?php 
/* Template Name: Fee Structure Page Template
*/

get_header();

$fee_structures = new WP_Query(array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'category_name'  => 'fee-structure',
    'orderby'        => 'date',
    'order'          => 'ASC',
));

$colors = array(
    'orange',
    'blue',
    'purple',
    'green',
    'red',
    'yellow',
);

?>
    <?php get_template_part('page-banners'); ?>
    <!-- =========================================================
         FEE STRUCTURE 2026-27 — REFINED TABLE
    ========================================================= -->
    <section class="fee-section">
        <div class="container">

            <div class="fee-head">
                <span class="fee-eyebrow">Academic Year 2026-27</span>
                <h2 class="fee-title">Fee <em>Structure</em></h2>
                <p class="fee-sub">
                    Grade-wise tuition fees for the current academic year.
                    The fees below are approved by the management and are
                    payable on an annual basis.
                </p>
            </div>

            <div class="fee-table-wrap">

                <table class="fee-table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Grade</th>
                            <th scope="col">Tuition Fee</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                    $serial = 1;
                    if ($fee_structures->have_posts()) :
                        while ($fee_structures->have_posts()) :
                            $fee_structures->the_post();

                            $fee_id = get_the_ID();

                            $grade = get_the_title();

                            $fee_desc = get_post_meta(
                                $fee_id,
                                'fee_description',
                                true
                            );

                            $tuition_fee = get_post_meta(
                                $fee_id,
                                'tution_fee',
                                true
                            );
                            // $tuition_fee = trim((string) $tuition_fe);
                            ?>
                             <tr>
                            <td class="fee-sn" data-label="Sl No"><span class="fee-sn-badge"><?php echo esc_html(sprintf("%02d", $serial++)); ?></span></td>
                            <td>
                                <div class="fee-grade-cell">
                                    <div class="fee-grade-icon <?php echo $colors[$serial % count($colors)]; ?>"><i class="bi bi-mortarboard-fill"></i></div>
                                    <div class="fee-grade-text">
                                        <strong><?php echo $grade; ?></strong>
                                        <small><?php echo $fee_desc; ?></small>
                                    </div>
                                </div>
                            </td>
                            <td class="fee-amount-cell" data-label="Tuition Fee">
                                <span class="fee-amount-text">
                                    <span class="amount-currency">₹</span><?php echo $tuition_fee; ?><span class="amount-period">/year</span>
                                </span>
                            </td>
                        </tr>
                            <?php
                        endwhile;
                    endif;
                    ?>
                        
                       
                    

                            <!-- <tr>
                            <td class="fee-sn" data-label="Sl No"><span class="fee-sn-badge">01</span></td>
                            <td>
                                <div class="fee-grade-cell">
                                    <div class="fee-grade-icon orange"><i class="bi bi-mortarboard-fill"></i></div>
                                    <div class="fee-grade-text">
                                        <strong>Grade 01</strong>
                                        <small>Lower Primary</small>
                                    </div>
                                </div>
                            </td>
                            <td class="fee-amount-cell" data-label="Tuition Fee">
                                <span class="fee-amount-text">
                                    <span class="amount-currency">₹</span>13,400<span class="amount-period">/year</span>
                                </span>
                            </td>
                        </tr>
                            


                        <tr>
                            <td class="fee-sn" data-label="Sl No"><span class="fee-sn-badge">01</span></td>
                            <td>
                                <div class="fee-grade-cell">
                                    <div class="fee-grade-icon orange"><i class="bi bi-mortarboard-fill"></i></div>
                                    <div class="fee-grade-text">
                                        <strong>Grade 01</strong>
                                        <small>Lower Primary</small>
                                    </div>
                                </div>
                            </td>
                            <td class="fee-amount-cell" data-label="Tuition Fee">
                                <span class="fee-amount-text">
                                    <span class="amount-currency">₹</span>13,400<span class="amount-period">/year</span>
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td class="fee-sn" data-label="Sl No"><span class="fee-sn-badge">02</span></td>
                            <td>
                                <div class="fee-grade-cell">
                                    <div class="fee-grade-icon blue"><i class="bi bi-mortarboard-fill"></i></div>
                                    <div class="fee-grade-text">
                                        <strong>Grade 02</strong>
                                        <small>Lower Primary</small>
                                    </div>
                                </div>
                            </td>
                            <td class="fee-amount-cell" data-label="Tuition Fee">
                                <span class="fee-amount-text">
                                    <span class="amount-currency">₹</span>14,000<span class="amount-period">/year</span>
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td class="fee-sn" data-label="Sl No"><span class="fee-sn-badge">03</span></td>
                            <td>
                                <div class="fee-grade-cell">
                                    <div class="fee-grade-icon purple"><i class="bi bi-mortarboard-fill"></i></div>
                                    <div class="fee-grade-text">
                                        <strong>Grade 03</strong>
                                        <small>Lower Primary</small>
                                    </div>
                                </div>
                            </td>
                            <td class="fee-amount-cell" data-label="Tuition Fee">
                                <span class="fee-amount-text">
                                    <span class="amount-currency">₹</span>14,300<span class="amount-period">/year</span>
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td class="fee-sn" data-label="Sl No"><span class="fee-sn-badge">04</span></td>
                            <td>
                                <div class="fee-grade-cell">
                                    <div class="fee-grade-icon green"><i class="bi bi-mortarboard-fill"></i></div>
                                    <div class="fee-grade-text">
                                        <strong>Grade 04</strong>
                                        <small>Upper Primary</small>
                                    </div>
                                </div>
                            </td>
                            <td class="fee-amount-cell" data-label="Tuition Fee">
                                <span class="fee-amount-text">
                                    <span class="amount-currency">₹</span>14,900<span class="amount-period">/year</span>
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td class="fee-sn" data-label="Sl No"><span class="fee-sn-badge">05</span></td>
                            <td>
                                <div class="fee-grade-cell">
                                    <div class="fee-grade-icon red"><i class="bi bi-mortarboard-fill"></i></div>
                                    <div class="fee-grade-text">
                                        <strong>Grade 05</strong>
                                        <small>Upper Primary</small>
                                    </div>
                                </div>
                            </td>
                            <td class="fee-amount-cell" data-label="Tuition Fee">
                                <span class="fee-amount-text">
                                    <span class="amount-currency">₹</span>15,400<span class="amount-period">/year</span>
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td class="fee-sn" data-label="Sl No"><span class="fee-sn-badge">06</span></td>
                            <td>
                                <div class="fee-grade-cell">
                                    <div class="fee-grade-icon yellow"><i class="bi bi-mortarboard-fill"></i></div>
                                    <div class="fee-grade-text">
                                        <strong>Grade 06</strong>
                                        <small>Upper Primary</small>
                                    </div>
                                </div>
                            </td>
                            <td class="fee-amount-cell" data-label="Tuition Fee">
                                <span class="fee-amount-text">
                                    <span class="amount-currency">₹</span>15,750<span class="amount-period">/year</span>
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td class="fee-sn" data-label="Sl No"><span class="fee-sn-badge">07</span></td>
                            <td>
                                <div class="fee-grade-cell">
                                    <div class="fee-grade-icon blue"><i class="bi bi-mortarboard-fill"></i></div>
                                    <div class="fee-grade-text">
                                        <strong>Grade 07</strong>
                                        <small>High School</small>
                                    </div>
                                </div>
                            </td>
                            <td class="fee-amount-cell" data-label="Tuition Fee">
                                <span class="fee-amount-text">
                                    <span class="amount-currency">₹</span>16,200<span class="amount-period">/year</span>
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td class="fee-sn" data-label="Sl No"><span class="fee-sn-badge">08</span></td>
                            <td>
                                <div class="fee-grade-cell">
                                    <div class="fee-grade-icon orange"><i class="bi bi-mortarboard-fill"></i></div>
                                    <div class="fee-grade-text">
                                        <strong>Grade 08</strong>
                                        <small>High School</small>
                                    </div>
                                </div>
                            </td>
                            <td class="fee-amount-cell" data-label="Tuition Fee">
                                <span class="fee-amount-text">
                                    <span class="amount-currency">₹</span>16,900<span class="amount-period">/year</span>
                                </span>
                            </td>
                        </tr> -->

                    </tbody>
                </table>
            </div>

            <!-- Note -->
            <div class="fee-note">
                <div class="fee-note-icon">
                    <i class="bi bi-info-circle-fill"></i>
                </div>
                <div class="fee-note-body">
                    <strong>Fee-related queries?</strong>
                    <p>
                        For clarifications regarding the fee structure or
                        payment options, please contact the school office at
                        <a href="tel:+914998278940">04998 278940</a>
                        or email
                        <a href="mailto:smvkunjathur@gmail.com">smvkunjathur@gmail.com</a>.
                    </p>
                </div>
            </div>

        </div>
    </section>

<?php 
get_footer();
?>