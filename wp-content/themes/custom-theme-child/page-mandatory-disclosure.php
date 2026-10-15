<?php 
/* Template Name: Mandatory Disclosure Template*/


$fee_structures = new WP_Query(array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'category_name'  => 'mandatory-disclosure',
    'orderby'        => 'date',
    'order'          => 'ASC',
));

get_header(); 
?>




<article>

    <!-- =========================================================
         HERO — PLAYFUL / COLORFUL (UNCHANGED)
    ========================================================= -->
    <section class="fac-hero">
        <div class="container">
            <div class="fac-hero-inner">

                <div class="fac-hero-text">
                    <div class="fac-crumb">
                        <a href="index.html">Home</a>
                        <i class="bi bi-chevron-right"></i>
                        <span class="current">Mandatory Disclosure</span>
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
                                    if ($fee_structures->have_posts()) :
                                        while ($fee_structures->have_posts()) :
                                            $fee_structures->the_post();

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
                            
                            ?>
                            
                            <tr>
                                <td class="mpd-sno-cell"><?php echo $serial++; ?></td>
                                <td><?php echo $general_info_key; ?></td>
                                <td><?php echo $general_info_value; ?></td>
                            </tr>
                            <?php
                        endwhile;
                    else :
                        ?>
                        <h1> not data found </h1>
                        <?php
                    endif;
                    ?>
                            <!-- <tr>
                                <td class="mpd-sno-cell">1</td>
                                <td>Mandatory Public Disclosure (Accreditation &amp; Compliance)</td>
                                <td><a href="#" class="mpd-download-link"><i class="bi bi-file-earmark-arrow-down-fill"></i> Click to Download</a></td>
                            </tr> -->
                            <tr>
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
                            </tr>
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
                                    if ($fee_structures->have_posts()) :
                                        while ($fee_structures->have_posts()) :
                                            $fee_structures->the_post();

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
                                            echo $url;

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
                                                        $label = '📊 View Excel Spreadsheet';
                                                        break;

                                                    // Word documents
                                                    case 'doc':
                                                    case 'docx':
                                                        $label = '📝 View Word Document';
                                                        break;

                                                    // PowerPoint presentations
                                                    case 'ppt':
                                                    case 'pptx':
                                                        $label = '📽️ View Presentation';
                                                        break;

                                                    // CSV files
                                                    case 'csv':
                                                        $label = '📊 View CSV File';
                                                        break;

                                                    

                                                    // Unknown or other file types
                                                    default:
                                                        $label = '<i class="bi bi-file-earmark-pdf-fill"></i> View PDF Document <?php echo $extension; ?>';
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
                                    <h1> not data found </h1>
                            <?php
                                endif;
                            ?>
                            <tr>
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
                                <!-- <td>LAND REVENUE &amp; BUILDING TAX RECEIPT</td> -->
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
                            </tr>
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
                            <tr>
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
                            </tr>
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
                            <tr>
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
                            </tr>
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
                            <tr>
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
                            </tr>
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
                            <tr>
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
                            </tr>
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
                            <tr>
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
                            </tr>
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