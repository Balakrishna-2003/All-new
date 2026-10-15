<?php 
/* Template Name: Mandatory Disclosure Template*/


$mandatory_disclousure_general_info = new WP_Query(array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'category_name'  => 'mandatory-disclosure-general-info',
    'orderby'        => 'date',
    'order'          => 'ASC',
));


$mandatory_disclousure_documents = new Wp_Query(array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'category_name'  => 'mandatory-disclosure-documents',
    'orderby'        => 'date',
    'order'          => 'ASC',
));

$mandatory_disclousure_results = new Wp_Query(array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'category_name'  => 'mandatory-disclosure-results',
    'orderby'        => 'date',
    'order'          => 'ASC',
));

$mandatory_disclousure_school_committee = new Wp_Query(array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'category_name'  => 'mandatory-disclosure-school-committee',
    'orderby'        => 'date',
    'order'          => 'ASC',
));

$mandatory_disclousure_staff_teaching = new Wp_Query(array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'category_name'  => 'mandatory-disclosure-staff-teaching',
    'orderby'        => 'date',
    'order'          => 'ASC',
));

$mandatory_disclousure_school_infrastructure = new Wp_Query(array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'category_name'  => 'mandatory-disclosure-school-infrastructure',
    'orderby'        => 'date',
    'order'          => 'ASC',
));

get_header(); 
?>




<article>

    <?php get_template_part('page-banners'); ?>


    <!-- =========================================================
         MANDATORY PUBLIC DISCLOSURE (TABLES SECTION)
    ========================================================= -->
    <section class="mpd-section">
        <div class="container">

            <div class="mpd-main-heading">
                <h2 class="mpd-main-title">MANDATORY PUBLIC DISCLOSURE</h2>
            </div>

            <!-- A. GENERAL INFORMATION -->
            <div class="mpd-block">
                <h3 class="mpd-block-title">A. GENERAL INFORMATION</h3>
                <div class="table-responsive mpd-table-card">
                    <table class="mpd-table">
                        <thead>
                            <tr>
                                <th class="mpd-col-sno">SNO</th>
                                <th class="mpd-col-info">INFORMATION</th>
                                <th class="mpd-col-action">LINK / DETAILS</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                                $serial = 1;
                                    if ($mandatory_disclousure_general_info->have_posts()) :
                                        while ($mandatory_disclousure_general_info->have_posts()) :
                                            $mandatory_disclousure_general_info->the_post();

                                            $fee_id = get_the_ID();

                                            $general_info_key = get_post_meta(
                                                    $fee_id,
                                                    'mdi_general_data_name',
                                                    true
                                            );

                                            $general_info_value = get_post_meta(
                                                    $fee_id,
                                                    'mdi_general_data_value',
                                                    true
                                            );

                                            if(!empty($general_info_key)){
                            
                            ?>
                            
                            <tr>
                                <td class="mpd-sno-cell"><?php echo $serial++; ?></td>
                                <td><?php echo $general_info_key; ?></td>
                                <td><?php echo $general_info_value; ?></td>
                            </tr>
                            <?php
                                }
                        endwhile;
                    else :
                        ?>
                        <tr>
                                <td colspan="5" class="fac-empty">
                                    No Records Found
                                </td>
                            </tr>
                        <?php
                    endif;
                    ?>
                            <!-- <tr>
                                <td class="mpd-sno-cell">1</td>
                                <td>Mandatory Public Disclosure (Accreditation &amp; Compliance)</td>
                                <td><a href="#" class="mpd-download-link"><i class="bi bi-file-earmark-arrow-down-fill"></i> Click to Download</a></td>
                            </tr> -->
                            <!-- <tr>
                                <td class="mpd-sno-cell">1</td>
                                <td>NAME OF THE SCHOOL</td>
                                <td>Shree Mahalingeshwara Vidyanikethana</td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell">2</td>
                                <td>Affiliation / Accreditation No.</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell">3</td>
                                <td>Complete Address with Pin code</td>
                                <td>Kunjathur, Manjeshwar, Kasaragod, Kerala – 671323</td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell">4</td>
                                <td>UDISE CODE</td>
                                <td>32010100140</td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell">5</td>
                                <td>Principal Name &amp; Qualification</td>
                                <td>Mrs. Kusuma M P, M.A., B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell">6</td>
                                <td>School Email ID</td>
                                <td><a href="mailto:smvkunjathur@gmail.com" class="mpd-link">smvkunjathur@gmail.com</a></td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell">7</td>
                                <td>Contact Details</td>
                                <td><a href="tel:+914998278940" class="mpd-link">04998 278940</a> / <a href="tel:+918921400582" class="mpd-link">+91 89214 00582</a></td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- B. DOCUMENTS AND INFORMATION -->
            <div class="mpd-block">
                <h3 class="mpd-block-title">B. DOCUMENTS AND INFORMATION</h3>
                <div class="table-responsive mpd-table-card">
                    <table class="mpd-table">
                        <thead>
                            <tr>
                                <th class="mpd-col-sno">SNO</th>
                                <th class="mpd-col-info">DOCUMENTS / INFORMATION</th>
                                <th class="mpd-col-action">LINK</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                                $serial = 1;
                                    if ($mandatory_disclousure_documents->have_posts()) :
                                        while ($mandatory_disclousure_documents->have_posts()) :
                                            $mandatory_disclousure_documents->the_post();

                                            $fee_id = get_the_ID();

                                            $document_info_key = get_post_meta(
                                                    $fee_id,
                                                    'mdi_document_name',
                                                    true
                                            );

                                            $document_info_value = get_post_meta(
                                                    $fee_id,
                                                    'mdi_document_url',
                                                    true
                                            );

                                            $url = $document_info_value;
                                            // echo $url;

                                            $url_path = parse_url($url, PHP_URL_PATH);
                                            $extension = strtolower(
                                                pathinfo($url_path ?? '', PATHINFO_EXTENSION)
                                            );
                                                                                    
                                            if (!empty($url) && esc_url($url) !== '') {
                                                                                    
                                                // if ($extension === 'pdf') {
                                                //     $label = '📄 View PDF Document';
                                                // } else {
                                                //     $label = '📁 View or Download File';
                                                // }

                                                

                                                switch ($extension) {

                                                    // PDF files
                                                    case 'pdf':
                                                        $label = '<i class="bi bi-file-earmark-pdf-fill"></i> View PDF Document';
                                                        break;

                                                    // Excel files
                                                    case 'xls':
                                                    case 'xlsx':
                                                    case 'xlsm':
                                                        $label = '<i class="bi bi-file-earmark-excel-fill"></i> View /Download Excel';
                                                        break;

                                                    // Word documents
                                                    case 'doc':
                                                    case 'docx':
                                                        $label = '<i class="bi bi-file-earmark-word-fill"></i>View /Download Word';
                                                        break;

                                                    // PowerPoint presentations
                                                    case 'ppt':
                                                    case 'pptx':
                                                        $label = '<i class="bi bi-file-earmark-ppt-fill"></i> View / Download PPT';
                                                        break;

                                                    // CSV files
                                                    case 'csv':
                                                        $label = '<i class="bi bi-file-earmark-spreadsheet-fill"></i> View / Download CSV';
                                                        break;

                                                    

                                                    // Unknown or other file types
                                                    default:
                                                        $label = '';
                                                        break;
                                                }
                                            }

                                            if(!empty($document_info_key)){
                            
                            ?>

                            <tr>
                                <td class="mpd-sno-cell"><?php echo $serial++; ?></td>
                                <td><?php echo $document_info_key; ?> </td>
                                <td>
                                    <a href="<?php echo $document_info_value ?>" target="_blank" class="mpd-download-link"> <?php echo $label; ?></a>
                                </td>
                            </tr>

                            <?php
                                            }
                                endwhile;
                                else :
                                ?>
                            <tr>
                                <td colspan="5" class="fac-empty">
                                    No Records Found
                                </td>
                            </tr>
                            <?php
                                endif;
                            ?>
                            <!-- <tr>
                                <td class="mpd-sno-cell">1</td>
                                <td>LAND CERTIFICATE (POSSESSION CERTIFICATE)</td>
                                <td>
                                    <a href="pdf/Land-certificate-Manjeshwar.pdf" target="_blank" class="mpd-download-link"><i class="bi bi-file-earmark-pdf-fill"></i> View / Download PDF</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell">2</td>
                                <td>TRUST DEED</td>
                                <td>
                                    <a href="pdf/Trust-Deed.pdf" target="_blank" class="mpd-download-link"><i class="bi bi-file-earmark-pdf-fill"></i> View / Download PDF</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell">3</td>
                                <td>BUILDING SAFETY / FITNESS CERTIFICATE</td>
                                <td><a href="pdf/Fitness%20Certificate.pdf" target="_blank" class="mpd-download-link"><i class="bi bi-file-earmark-pdf-fill"></i> View / Download PDF</a></td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell">4</td>
                                <td>FIRE &amp; RESCUE SERVICES CERTIFICATE / NOC</td>
                                <td><a href="pdf/fire%20Rescue%20Services.pdf" target="_blank" class="mpd-download-link"><i class="bi bi-file-earmark-pdf-fill"></i> View / Download PDF</a></td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell">5</td>
                                <td>HEALTH AND SANITATION CERTIFICATE</td>
                                <td><a href="pdf/Sanitary%20Certificate.pdf" target="_blank" class="mpd-download-link"><i class="bi bi-file-earmark-pdf-fill"></i> View / Download PDF</a></td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell">6</td>
                                <td>DRINKING WATER TEST REPORT</td>
                                <td><a href="pdf/Water%20test%20report.pdf" target="_blank" class="mpd-download-link"><i class="bi bi-file-earmark-pdf-fill"></i> View / Download PDF</a></td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell">7</td>
                                <td>SELF CERTIFICATION PROFORMA</td>
                                <td>
                                    <a href="pdf/Self-Certification-proforma.pdf" target="_blank" class="mpd-download-link"><i class="bi bi-file-earmark-pdf-fill"></i> View / Download PDF</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell">8</td>
                                
                                 <td>
                                    RECOGNITION
                                 </td>
                                <td>
                                    <a href="pdf/Recognition.pdf" target="_blank" class="mpd-download-link"><i class="bi bi-file-earmark-pdf-fill"></i> View / Download PDF</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell">9</td>
                                <td>MANDATORY DISCLOSURE</td>
                                <td><a href="pdf/MANDATORY-PUBLIC-DISCLOSURE.pdf" target="_blank" class="mpd-download-link"><i class="bi bi-file-earmark-pdf-fill"></i> View / Download PDF</a></td>
                            </tr> -->
                            <!--
                            <tr>
                                <td class="mpd-sno-cell">10</td>
                                <td>AFFILIATION / ACCREDITATION CERTIFICATE</td>
                                <td><a href="#" class="mpd-download-link"><i class="bi bi-file-earmark-pdf-fill"></i> Click to Download</a></td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell">11</td>
                                <td>NO OBJECTION CERTIFICATE (NOC)</td>
                                <td><a href="#" class="mpd-download-link"><i class="bi bi-file-earmark-pdf-fill"></i> Click to Download</a></td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell">12</td>
                                <td>RECOGNITION CERTIFICATE</td>
                                <td><a href="#" class="mpd-download-link"><i class="bi bi-file-earmark-pdf-fill"></i> Click to Download</a></td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell">13</td>
                                <td>SELF CERTIFICATION</td>
                                <td><a href="#" class="mpd-download-link"><i class="bi bi-file-earmark-pdf-fill"></i> Click to Download</a></td>
                            </tr>
                            -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- C. RESULTS & ACADEMICS -->
            <div class="mpd-block">
                <h3 class="mpd-block-title">C. RESULTS &amp; ACADEMICS</h3>
                <div class="table-responsive mpd-table-card">
                    <table class="mpd-table">
                        <thead>
                            <tr>
                                <th class="mpd-col-sno">SNO</th>
                                <th class="mpd-col-info">DOCUMENTS / INFORMATION</th>
                                <th class="mpd-col-action">LINK</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $serial = 1;
                                    if ($mandatory_disclousure_results->have_posts()) :
                                        while ($mandatory_disclousure_results->have_posts()) :
                                            $mandatory_disclousure_results->the_post();

                                            $fee_id = get_the_ID();

                                            $results_info_key = get_post_meta(
                                                    $fee_id,
                                                    'mdi_results_data_name',
                                                    true
                                            );

                                            $results_info_value = get_post_meta(
                                                    $fee_id,
                                                    'mdi_results_data_value',
                                                    true
                                            );

                                            $url = $results_info_value;
                                            // echo $url;

                                            $url_path = parse_url($url, PHP_URL_PATH);
                                            $extension = strtolower(
                                                pathinfo($url_path ?? '', PATHINFO_EXTENSION)
                                            );
                                                                                    
                                            if (!empty($url) && esc_url($url) !== '') {
                                                                                    
                                                // if ($extension === 'pdf') {
                                                //     $label = '📄 View PDF Document';
                                                // } else {
                                                //     $label = '📁 View or Download File';
                                                // }

                                                

                                                switch ($extension) {

                                                    // PDF files
                                                    case 'pdf':
                                                        $label = '<i class="bi bi-file-earmark-pdf-fill"></i> View PDF Document';
                                                        break;

                                                    // Excel files
                                                    case 'xls':
                                                    case 'xlsx':
                                                    case 'xlsm':
                                                        $label = '<i class="bi bi-file-earmark-excel-fill"></i> View /Download Excel';
                                                        break;

                                                    // Word documents
                                                    case 'doc':
                                                    case 'docx':
                                                        $label = '<i class="bi bi-file-earmark-word-fill"></i>View /Download Word';
                                                        break;

                                                    // PowerPoint presentations
                                                    case 'ppt':
                                                    case 'pptx':
                                                        $label = '<i class="bi bi-file-earmark-ppt-fill"></i> View / Download PPT';
                                                        break;

                                                    // CSV files
                                                    case 'csv':
                                                        $label = '<i class="bi bi-file-earmark-spreadsheet-fill"></i> View / Download CSV';
                                                        break;

                                                    

                                                    // Unknown or other file types
                                                    default:
                                                        $label = '';
                                                        break;
                                                }
                                            }

                                            if(!empty($results_info_key)){
                            
                            ?>

                            <tr>
                                <td class="mpd-sno-cell"><?php echo $serial++; ?></td>
                                <td><?php echo $results_info_key; ?> </td>
                                <td>
                                    <a href="<?php echo $results_info_value ?>" target="_blank" class="mpd-download-link"> <?php echo $label; ?></a>
                                </td>
                            </tr>

                            <?php
                                            }
                                endwhile;
                                else :
                                ?>
                                    <tr>
                                <td colspan="5" class="fac-empty">
                                    No Records Found
                                </td>
                            </tr>
                            <?php
                                endif;
                            ?>
                            <!-- <tr>
                                <td class="mpd-sno-cell">1</td>
                                <td>Annual Academic Calendar</td>
                                <td>
                                    <a href="pdf/Academic_calendar.pdf" class="mpd-download-link" target="_blank"><i class="bi bi-file-earmark-pdf-fill"></i> View / Download PDF</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell">2</td>
                                <td>FEE STRUCTURE</td>
                                <td><a href="pdf/Fee Structure 2026.pdf" class="mpd-download-link" target="_blank"><i class="bi bi-file-earmark-pdf-fill"></i></i> View / Download PDF</a></td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>

            

            <!-- D. SCHOOL COMMITTEES -->
            <div class="mpd-block">
                <h3 class="mpd-block-title">D. SCHOOL COMMITTEES</h3>
                <div class="table-responsive mpd-table-card">
                    <table class="mpd-table">
                        <thead>
                            <tr>
                                <th class="mpd-col-sno">SNO</th>
                                <th class="mpd-col-info">DOCUMENTS / INFORMATION</th>
                                <th class="mpd-col-action">LINK</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $serial = 1;
                                    if ($mandatory_disclousure_school_committee->have_posts()) :
                                        while ($mandatory_disclousure_school_committee->have_posts()) :
                                            $mandatory_disclousure_school_committee->the_post();

                                            $fee_id = get_the_ID();

                                            $school_committee_info_key = get_post_meta(
                                                    $fee_id,
                                                    'mdi_committee_document_name',
                                                    true
                                            );

                                            $school_committee_info_value = get_post_meta(
                                                    $fee_id,
                                                    'mdi_committee_document_url',
                                                    true
                                            );

                                            $url = $school_committee_info_value;
                                            

                                            $url_path = parse_url($url, PHP_URL_PATH);
                                            $extension = strtolower(
                                                pathinfo($url_path ?? '', PATHINFO_EXTENSION)
                                            );
                                                                                    
                                            if (!empty($url) && esc_url($url) !== '') {
                                                switch ($extension) {

                                                    // PDF files
                                                    case 'pdf':
                                                        $label = '<i class="bi bi-file-earmark-pdf-fill"></i> View PDF Document';
                                                        break;

                                                    // Excel files
                                                    case 'xls':
                                                    case 'xlsx':
                                                    case 'xlsm':
                                                        $label = '<i class="bi bi-file-earmark-excel-fill"></i> View /Download Excel';
                                                        break;

                                                    // Word documents
                                                    case 'doc':
                                                    case 'docx':
                                                        $label = '<i class="bi bi-file-earmark-word-fill"></i>View /Download Word';
                                                        break;

                                                    // PowerPoint presentations
                                                    case 'ppt':
                                                    case 'pptx':
                                                        $label = '<i class="bi bi-file-earmark-ppt-fill"></i> View / Download PPT';
                                                        break;

                                                    // CSV files
                                                    case 'csv':
                                                        $label = '<i class="bi bi-file-earmark-spreadsheet-fill"></i> View / Download CSV';
                                                        break;

                                                    

                                                    // Unknown or other file types
                                                    default:
                                                        $label = '';
                                                        break;
                                                }
                                            }

                                            if(!empty($school_committee_info_key)){
                            
                            ?>

                            <tr>
                                <td class="mpd-sno-cell"><?php echo $serial++; ?></td>
                                <td><?php echo $school_committee_info_key; ?> </td>
                                <td>
                                    <a href="<?php echo $school_committee_info_value ?>" target="_blank" class="mpd-download-link"> <?php echo $label; ?></a>
                                </td>
                            </tr>

                            <?php
                                            }
                                endwhile;
                                else :
                                ?>
                                    <tr>
                                <td colspan="5" class="fac-empty">
                                    No Records Found
                                </td>
                            </tr>
                            <?php
                                endif;
                            ?>
                            <!-- <tr>
                                <td class="mpd-sno-cell">1</td>
                                <td>School Managing Committees</td>
                                <td>
                                    <a href="pdf/Trust Members.pdf" class="mpd-download-link" target="_blank"><i class="bi bi-file-earmark-pdf-fill"></i> View / Download PDF</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell">2</td>
                                <td>
                                    Parents Teachers Association (PTA Executive Committee)</td>
                                <td><a href="pdf/P%20T%20A.pdf" target="_blank" class="mpd-download-link"><i class="bi bi-file-earmark-pdf-fill"></i> View / Download PDF</a>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- E. STAFF (Teaching) -->
            <div class="mpd-block">
                <h3 class="mpd-block-title">E. STAFF (Teaching)</h3>
                <div class="table-responsive mpd-table-card">
                    <table class="mpd-table">
                        <thead>
                            <tr>
                                <th class="mpd-col-sno">SNO</th>
                                <th class="mpd-col-info">DOCUMENTS / INFORMATION</th>
                                <th class="mpd-col-action">DETAILS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $serial = 1;
                                    if ($mandatory_disclousure_staff_teaching->have_posts()) :
                                        while ($mandatory_disclousure_staff_teaching->have_posts()) :
                                            $mandatory_disclousure_staff_teaching->the_post();

                                            $fee_id = get_the_ID();

                                            $staff_teaching_info_key = get_post_meta(
                                                    $fee_id,
                                                    'mdi_teaching_staff_data_name',
                                                    true
                                            );

                                            $staff_teaching_info_value = get_post_meta(
                                                    $fee_id,
                                                    'mdi_teaching_staff_data_value',
                                                    true
                                            );

                                            $staff_teaching_is_serial_needed = get_post_meta(
                                                $fee_id,
                                                'mdi_teaching_staff_serial_number',
                                                true
                                            );

                                            $url = $staff_teaching_info_value;
                                            // echo $staff_teaching_is_serial_needed;

                                            $url_path = parse_url($url, PHP_URL_PATH);
                                            $extension = strtolower(
                                                pathinfo($url_path ?? '', PATHINFO_EXTENSION)
                                            );
                                                                                    
                                            if (!empty($url) && esc_url($url) !== '') {
                                                switch ($extension) {

                                                    // PDF files
                                                    case 'pdf':
                                                        $label = '<i class="bi bi-file-earmark-pdf-fill"></i> View PDF Document';
                                                        break;

                                                    // Excel files
                                                    case 'xls':
                                                    case 'xlsx':
                                                    case 'xlsm':
                                                        $label = '<i class="bi bi-file-earmark-excel-fill"></i> View /Download Excel';
                                                        break;

                                                    // Word documents
                                                    case 'doc':
                                                    case 'docx':
                                                        $label = '<i class="bi bi-file-earmark-word-fill"></i>View /Download Word';
                                                        break;

                                                    // PowerPoint presentations
                                                    case 'ppt':
                                                    case 'pptx':
                                                        $label = '<i class="bi bi-file-earmark-ppt-fill"></i> View / Download PPT';
                                                        break;

                                                    // CSV files
                                                    case 'csv':
                                                        $label = '<i class="bi bi-file-earmark-spreadsheet-fill"></i> View / Download CSV';
                                                        break;

                                                    

                                                    // Unknown or other file types
                                                    default:
                                                        $label = $url;
                                                        break;
                                                }
                                            }

                                            if(!empty($staff_teaching_info_key)){
                            
                            ?>

                            <tr>
                                <td class="mpd-sno-cell"><?php echo $staff_teaching_is_serial_needed === 'yes' ?  $serial++ : '' ?></td>
                                <td <?php echo $staff_teaching_is_serial_needed === 'no' ?  'class="mpd-sub-indent"' : '' ?>><?php echo $staff_teaching_info_key; ?> </td>
                                <td>
                                    <a href="<?php echo $staff_teaching_info_value ?>" target="_blank" class="mpd-download-link"> <?php echo $label; ?></a>
                                </td>
                            </tr>

                            <?php
                                            }
                                endwhile;
                                else :
                                ?>
                                    <tr>
                                <td colspan="5" class="fac-empty">
                                    No Records Found
                                </td>
                            </tr>
                            <?php
                                endif;
                            ?>
                            <!-- <tr>
                                <td class="mpd-sno-cell">1</td>
                                <td>Academic Staff Details</td>
                                <td>
                                    <a href="pdf/Shree Mahalingeshwara Vidyanikethana-staff.xlsx" target="_blank" class="mpd-download-link"><i class="bi bi-file-earmark-spreadsheet-fill"></i>Download Excel</a>
                                </td>
                                
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell">2</td>
                                <td><strong>Total No. of Teachers</strong></td>
                                <td><strong>20</strong></td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell"></td>
                                <td class="mpd-sub-indent">Principal</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell"></td>
                                <td class="mpd-sub-indent">Vice Principal</td>
                                <td>1</td>
                            </tr> -->
                            <!-- <tr>
                                <td class="mpd-sno-cell"></td>
                                <td class="mpd-sub-indent">PGT</td>
                                <td>2</td>
                            </tr> -->
                            <!-- <tr>
                                <td class="mpd-sno-cell"></td>
                                <td class="mpd-sub-indent">TGT</td>
                                <td>4</td>
                            </tr> -->
                            <!-- <tr>
                                <td class="mpd-sno-cell"></td>
                                <td class="mpd-sub-indent">TGT</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell"></td>
                                <td class="mpd-sub-indent">PRT</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell"></td>
                                <td class="mpd-sub-indent">NTT / Pre-Primary (PPRT)</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell"></td>
                                <td class="mpd-sub-indent">PET (Physical Education)</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell"></td>
                                <td class="mpd-sub-indent">Special Educator</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell">3</td>
                                <td>Section Teacher Ratio</td>
                                <td>1:1.5</td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- F. SCHOOL INFRASTRUCTURE -->
            <div class="mpd-block">
                <h3 class="mpd-block-title">F. SCHOOL INFRASTRUCTURE</h3>
                <div class="table-responsive mpd-table-card">
                    <table class="mpd-table">
                        <thead>
                            <tr>
                                <th class="mpd-col-sno">SNO</th>
                                <th class="mpd-col-info">INFORMATION</th>
                                <th class="mpd-col-action">DETAILS</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php 
                        $serial = 1;
                            if($mandatory_disclousure_school_infrastructure->have_posts()):
                                while($mandatory_disclousure_school_infrastructure->have_posts()):
                                    $mandatory_disclousure_school_infrastructure->the_post();

                                    $fee_id = get_the_ID();

                                    $school_infrastructure_info_key = get_post_meta(
                                        $fee_id,
                                        'mdi_infrastructure_data_name',
                                        true
                                    );

                                    $school_infrastructure_info_value = get_post_meta(
                                        $fee_id,
                                        'mdi_infrastructure_data_value',
                                        true
                                    );
                                    ?>
                                    <tr>
                                <td class="mpd-sno-cell"><?php echo $serial; ?></td>
                                <td><?php echo $school_infrastructure_info_key ?></td>
                                <td><?php echo $school_infrastructure_info_value ?></td>
                            </tr>
                            <?php
                                endwhile;
                            else:
                                ?>
                                <tr>
                                    <td colspan="5" class="fac-empty">No Records Found</td>
                                </tr>
                                <?php 
                                
                            endif;

                        ?>
                            <!-- <tr>
                                <td class="mpd-sno-cell">1</td>
                                <td>Total Campus Area of the school (in sqr. Mtrs)</td>
                                <td>6,024 sqr. mtrs. (1.5 Acre)</td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell">2</td>
                                <td>No. and size of the class rooms</td>
                                <td>14 Classrooms (Size : 48 sqr. mtrs)</td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell">3</td>
                                <td>No. and size of Laboratories including computer lab</td>
                                <td>
                                    <div>Composite Science Lab : 01</div>
                                    <div>Computer Science Lab : 01</div>
                                    <div>Maths Lab : 01</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell">4</td>
                                <td>Internet Facility</td>
                                <td>Available</td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell">5</td>
                                <td>No. of Girls Toilet</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td class="mpd-sno-cell">6</td>
                                <td>No. of Boys Toilet</td>
                                <td>15</td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Notice -->
            <div class="doc-notice">
                <div class="doc-notice-icon">
                    <i class="bi bi-info-circle-fill"></i>
                </div>
                <div class="doc-notice-body">
                    <strong>Need additional information?</strong>
                    <p>
                        For certified copies, additional documents or further
                        clarification, please contact the school office at
                        <a href="tel:+914998278940">+91 4998 278940</a>
                        or email
                        <a href="mailto:smvkunjathur@gmail.com">smvkunjathur@gmail.com</a>.
                    </p>
                </div>
            </div>

        </div>
    </section>

</article>


<?php 
get_footer();
?>