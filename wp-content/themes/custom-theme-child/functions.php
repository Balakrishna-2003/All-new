<?php
function twentytwentyfive_child_enqueue_assets() {

    // Load child theme's style.css (required by WordPress for theme metadata or overrides)
    wp_enqueue_style(
        'twentytwentyfive-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array(),
        wp_get_theme()->get('Version')
    );

    // Enqueue your static site's CSS files
    wp_enqueue_style('bhi-bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.0');
    wp_enqueue_style('bhi-animate', get_stylesheet_directory_uri() . '/assets/css/animate.css', array(), '1.0');
    wp_enqueue_style('bhi-owl-carousel', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '2.3.4');
    wp_enqueue_style('bhi-style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), '1.0');

    // Use WordPress's built-in jQuery
    wp_enqueue_script('jquery');

    // Enqueue JavaScript libraries
    wp_enqueue_script(
        'bhi-bootstrap-bundle',
        get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js',
        array('jquery'),
        '5.0',
        true
    );

    wp_enqueue_script(
        'bhi-owl-carousel',
        get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js',
        array('jquery'),
        '2.3.4',
        true
    );

    wp_enqueue_script(
        'bhi-wow',
        get_stylesheet_directory_uri() . '/assets/js/wow.min.js',
        array('jquery'),
        '1.1.3',
        true
    );

    // Optional: enqueue custom.js only if it exists
    if (file_exists(get_stylesheet_directory() . '/assets/js/custom.js')) {
        wp_enqueue_script(
            'bhi-custom-script',
            get_stylesheet_directory_uri() . '/assets/js/custom.js',
            array('jquery'),
            '1.0',
            true
        );
    }
}
    add_action('wp_enqueue_scripts', 'twentytwentyfive_child_enqueue_assets');


    

/* for adding registering menus in the theme */
function school_theme_register_menus() {
    register_nav_menus(array(
        'main-menu' => 'Main Menu',
        'about-menu' => 'About Menu',
        'academics-menu' => 'Academics Menu',
        'admissions-menu' => 'Admissions Menu',
        'faculty-and-staff-menu' => 'Faculty and Staff Menu',
        'students-corner-menu' => 'Students Corner Menu',
    ));
}
add_action('after_setup_theme', 'school_theme_register_menus');
/* End of registering menus in the theme */


// for adding category field to pages 
function add_categories_to_pages() {
    register_taxonomy_for_object_type(
        'category',
        'page'
    );
}
add_action('init', 'add_categories_to_pages');
/* End of adding category field to pages */


/* Yoast breadcrumb separator */
add_filter( 'wpseo_breadcrumb_separator', function( $separator ) {
    return '<i class="bi bi-chevron-right"></i>';
});
/* End of Yoast breadcrumb separator */

/*  for adding "category > current page name" in breadcrumb (e.g: home > academics > teaching methodolory) */
add_filter( 'wpseo_breadcrumb_links', function( $links ) {

    if ( ! is_page() ) {
        return $links;
    }

    $page_id = get_queried_object_id();
    $categories = get_the_terms( $page_id, 'category' );

    if ( empty( $categories ) || is_wp_error( $categories ) ) {
        return $links;
    }

    $category = reset( $categories );
    $current_index = count( $links ) - 1;

    
    // checking if the category slug matches the current page slug, if yes then return the links without adding category
    if ( $category->slug === get_post_field( 'post_name', $page_id ) ) {
        return $links;
    }
  

    array_splice( $links, $current_index, 0, array(
        array(
            'text' => $category->name,
            'url'  => '#',
        )
    ));

    return $links;
});
/* End of adding "category > current page name" in breadcrumb (e.g: home > academics > teaching methodolory) */

/* for adding committee members code */
/* Committee Member Details Fields */
add_action('add_meta_boxes', function () {
    add_meta_box(
        'committee_member_details',
        'Committee Member Details',
        'render_committee_member_fields',
        'post',
        'normal',
        'high'
    );
});

function render_committee_member_fields($post) {

    // Display fields only for Committee Members posts.
    if (!has_category('management-committee', $post->ID)) {
        echo '<p>Assign the Committee Members category to this post, then save or reload the editor to display the fields.</p>';
    }

    wp_nonce_field(
        'save_committee_member_details',
        'committee_member_details_nonce'
    );

    $fields = array(
        'member_address' => array(
            'label' => 'Address',
            'type'  => 'textarea',
        ),
        'member_post' => array(
            'label' => 'Post / Position',
            'type'  => 'text',
        ),
        'member_mobile' => array(
            'label' => 'Mobile Number',
            'type'  => 'text',
        ),
        'member_occupation' => array(
            'label' => 'Occupation',
            'type'  => 'text',
        ),
    );

    echo '<div style="max-width:900px;">';

    foreach ($fields as $key => $field) {
        $value = get_post_meta(
            $post->ID,
            $key,
            true
        );

        echo '<p style="margin-bottom:20px;">';
        echo '<label for="' . esc_attr($key) . '"><strong>'
            . esc_html($field['label'])
            . '</strong></label><br>';

        if ($field['type'] === 'textarea') {
            echo '<textarea id="' . esc_attr($key)
                . '" name="' . esc_attr($key)
                . '" rows="3" style="width:100%;margin-top:6px;">'
                . esc_textarea($value)
                . '</textarea>';
        } else {
            echo '<input type="text" id="' . esc_attr($key)
                . '" name="' . esc_attr($key)
                . '" value="' . esc_attr($value)
                . '" style="width:100%;margin-top:6px;">';
        }

        echo '</p>';
    }

    echo '</div>';
}

/* Save Committee Member Details */
add_action('save_post', function ($post_id) {

    if (get_post_type($post_id) !== 'post') {
        return;
    }

    if (
        !isset($_POST['committee_member_details_nonce']) ||
        !wp_verify_nonce(
            sanitize_text_field(
                wp_unslash($_POST['committee_member_details_nonce'])
            ),
            'save_committee_member_details'
        )
    ) {
        return;
    }

    if (
        (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) ||
        wp_is_post_revision($post_id) ||
        !current_user_can('edit_post', $post_id)
    ) {
        return;
    }

    $fields = array(
        'member_address',
        'member_post',
        'member_mobile',
        'member_occupation',
    );

    foreach ($fields as $key) {
        if (isset($_POST[$key])) {
            $value = wp_unslash($_POST[$key]);

            if ($key === 'member_address') {
                $value = sanitize_textarea_field($value);
            } else {
                $value = sanitize_text_field($value);
            }

            update_post_meta($post_id, $key, $value);
        }
    }
});

/* End of Committee Members Code */


/* for adding fee structure dynamic table and it's meta boxes */
/* for adding fee structure code meta boxes */
add_action('add_meta_boxes', function () {
    add_meta_box(
        'fee_structure_details',
        'Fee Structure Details',
        'render_fee_structure_fields',
        'post',
        'normal',
        'high'
    );
});

function render_fee_structure_fields($post) {

    // Display fields only for Fee Structure posts.
    if (!has_category('fee-structure', $post->ID)) {
        echo '<p>Assign the Fee Structure category to this post, then save or reload the editor to display the fields.</p>';
    }

    wp_nonce_field(
        'save_fee_structure_details',
        'fee_structure_details_nonce'
    );

    $fields = array(
        // 'fee_grade' => array(
        //     'label' => 'Fee Grade',
        //     'type'  => 'text',
        // ),
        'fee_description' => array(
            'label' => 'Description (e.g : Lower Primary)',
            'type'  => 'text',
        ),
        'tution_fee' => array(
            'label' => 'Tution Fee',
            'type'  => 'text',
        )
    );

    echo '<div style="max-width:900px;">';

    foreach ($fields as $key => $field) {
        $value = get_post_meta(
            $post->ID,
            $key,
            true
        );

        echo '<p style="margin-bottom:20px;">';
        echo '<label for="' . esc_attr($key) . '"><strong>'
            . esc_html($field['label'])
            . '</strong></label><br>';

        if ($field['type'] === 'textarea') {
            echo '<textarea id="' . esc_attr($key)
                . '" name="' . esc_attr($key)
                . '" rows="3" style="width:100%;margin-top:6px;">'
                . esc_textarea($value)
                . '</textarea>';
        } else {
            echo '<input type="text" id="' . esc_attr($key)
                . '" name="' . esc_attr($key)
                . '" value="' . esc_attr($value)
                . '" style="width:100%;margin-top:6px;">';
        }

        echo '</p>';
    }

    echo '</div>';
}

/* Save Fee Structure Details */
add_action('save_post', function ($post_id) {

    if (get_post_type($post_id) !== 'post') {
        return;
    }

    if (
        !isset($_POST['fee_structure_details_nonce']) ||
        !wp_verify_nonce(
            sanitize_text_field(
                wp_unslash($_POST['fee_structure_details_nonce'])
            ),
            'save_fee_structure_details'
        )
    ) {
        return;
    }

    if (
        (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) ||
        wp_is_post_revision($post_id) ||
        !current_user_can('edit_post', $post_id)
    ) {
        return;
    }

    $fields = array(
        // 'fee_grade',
        'fee_description',
        'tution_fee',
    );

    foreach ($fields as $key) {
        if (isset($_POST[$key])) {
            $value = wp_unslash($_POST[$key]);

            // if ($key === 'member_address') {
            //     $value = sanitize_textarea_field($value);
            // } else {
                $value = sanitize_text_field($value);
            // }

            update_post_meta($post_id, $key, $value);
        }
    }
});



/* for adding teaching staff dynamic table and it's meta boxes */
/* for adding teaching staff code meta boxes */
add_action('add_meta_boxes', function () {
    add_meta_box(
        'teaching_staff_details',
        'Teaching Staff Details',
        'render_teaching_staff_fields',
        'post',
        'normal',
        'high'
    );
});

function render_teaching_staff_fields($post) {

    // Display fields only for Teaching Staff posts.
    if (!has_category('teaching-staff', $post->ID)) {
        echo '<p>Assign the Teaching Staff category to this post, then save or reload the editor to display the fields.</p>';
    }

    wp_nonce_field(
        'save_teaching_staff_details',
        'teaching_staff_details_nonce'
    );

    $fields = array(
        'staff_qualification' => array(
            'label' => 'staff Qualification (e.g : M.Sc, B.Ed)',
            'type'  => 'text',
        ),
        'staff_designation' => array(
            'label' => 'Staff Designation (e.g : Pricipal, Head Master)',
            'type'  => 'text',
        ),
        'staff_subject' => array(
            'label' => 'Staff Subject/Section (e.g : Science, Maths)',
            'type'  => 'textarea',
        )
    );

    echo '<div style="max-width:900px;">';

    foreach ($fields as $key => $field) {
        $value = get_post_meta(
            $post->ID,
            $key,
            true
        );

        echo '<p style="margin-bottom:20px;">';
        echo '<label for="' . esc_attr($key) . '"><strong>'
            . esc_html($field['label'])
            . '</strong></label><br>';

        if ($field['type'] === 'textarea') {
            echo '<textarea id="' . esc_attr($key)
                . '" name="' . esc_attr($key)
                . '" rows="3" style="width:100%;margin-top:6px;">'
                . esc_textarea($value)
                . '</textarea>';
        } else {
            echo '<input type="text" id="' . esc_attr($key)
                . '" name="' . esc_attr($key)
                . '" value="' . esc_attr($value)
                . '" style="width:100%;margin-top:6px;"'
                . '/>';
        }

        echo '</p>';
    }

    echo '</div>';
}

/* Save Teaching Staff Details */
add_action('save_post', function ($post_id) {

    if (get_post_type($post_id) !== 'post') {
        return;
    }

    if (
        !isset($_POST['teaching_staff_details_nonce']) ||
        !wp_verify_nonce(
            sanitize_text_field(
                wp_unslash($_POST['teaching_staff_details_nonce'])
            ),
            'save_teaching_staff_details'
        )
    ) {
        return;
    }

    if (
        (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) ||
        wp_is_post_revision($post_id) ||
        !current_user_can('edit_post', $post_id)
    ) {
        return;
    }

    $fields = array(
        'staff_qualification',
        'staff_designation',
        'staff_subject'
    );

    foreach ($fields as $key) {
        if (isset($_POST[$key])) {
            $value = wp_unslash($_POST[$key]);

            if ($key === 'staff_subject') {
                $value = sanitize_textarea_field($value);
            } else {
                $value = sanitize_text_field($value);
            }

            update_post_meta($post_id, $key, $value);
        }
    }
});

/* End of Teaching Staff Code */


/* for adding non-teaching staff dynamic table and it's meta boxes */
/* for adding non-teaching staff code meta boxes */
add_action('add_meta_boxes', function () {
    add_meta_box(
        'non_teaching_staff_details',
        'Non-Teaching Staff Details',
        'render_non_teaching_staff_fields',
        'post',
        'normal',
        'high'
    );
});

function render_non_teaching_staff_fields($post) {

    // Display fields only for Non-Teaching Staff posts.
    if (!has_category('non-teaching-staff', $post->ID)) {
        echo '<p>Assign the Non-Teaching Staff category to this post, then save or reload the editor to display the fields.</p>';
    }

    wp_nonce_field(
        'save_non_teaching_staff_details',
        'non_teaching_staff_details_nonce'
    );

    $fields = array(
        'non_teaching_staff_qualification' => array(
            'label' => 'staff Qualification (e.g : M.Sc, B.Ed)',
            'type'  => 'text',
        ),
        'non_teaching_staff_designation' => array(
            'label' => 'Staff Designation (e.g : Pricipal, Head Master)',
            'type'  => 'text',
        ),
        'non_teaching_staff_subject' => array(
            'label' => 'Staff Subject/Section (e.g : Science, Maths)',
            'type'  => 'textarea',
        )
    );

    echo '<div style="max-width:900px;">';

    foreach ($fields as $key => $field) {
        $value = get_post_meta(
            $post->ID,
            $key,
            true
        );

        echo '<p style="margin-bottom:20px;">';
        echo '<label for="' . esc_attr($key) . '"><strong>'
            . esc_html($field['label'])
            . '</strong></label><br>';

        if ($field['type'] === 'textarea') {
            echo '<textarea id="' . esc_attr($key)
                . '" name="' . esc_attr($key)
                . '" rows="3" style="width:100%;margin-top:6px;">'
                . esc_textarea($value)
                . '</textarea>';
        } else {
            echo '<input type="text" id="' . esc_attr($key)
                . '" name="' . esc_attr($key)
                . '" value="' . esc_attr($value)
                . '" style="width:100%;margin-top:6px;"'
                . '/>';
        }

        echo '</p>';
    }

    echo '</div>';
}

/* Save Non-Teaching Staff Details */
add_action('save_post', function ($post_id) {

    if (get_post_type($post_id) !== 'post') {
        return;
    }

    if (
        !isset($_POST['non_teaching_staff_details_nonce']) ||
        !wp_verify_nonce(
            sanitize_text_field(
                wp_unslash($_POST['non_teaching_staff_details_nonce'])
            ),
            'save_non_teaching_staff_details'
        )
    ) {
        return;
    }

    if (
        (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) ||
        wp_is_post_revision($post_id) ||
        !current_user_can('edit_post', $post_id)
    ) {
        return;
    }

    $fields = array(
        'non_teaching_staff_qualification',
        'non_teaching_staff_designation',
        'non_teaching_staff_subject'
    );

    foreach ($fields as $key) {
        if (isset($_POST[$key])) {
            $value = wp_unslash($_POST[$key]);

            if ($key === 'non_teaching_staff_subject') {
                $value = sanitize_textarea_field($value);
            } else {
                $value = sanitize_text_field($value);
            }

            update_post_meta($post_id, $key, $value);
        }
    }
});

/* End of Non-Teaching Staff Code */




/* =========================================================
   MANDATORY DISCLOSURE - CUSTOM META BOX
========================================================= */

/* 1. Register the meta box */
add_action('add_meta_boxes', function () {

    add_meta_box(
        'mandatory_disclosure_details',
        'Mandatory Disclosure Details',
        'render_mandatory_disclosure_fields',
        'post',
        'normal',
        'high'
    );

});


/* 2. Render the fields */
function render_mandatory_disclosure_fields($post) {

    // Display these fields only for Mandatory Disclosure posts.
    // if (!has_category('mandatory-disclosure', $post->ID)) {

    //     echo '<p>Assign the Mandatory Disclosure category to this post,
    //     then save or reload the editor to display the fields.</p>';

    //     return;
    // }

    // Security nonce.
    wp_nonce_field(
        'save_mandatory_disclosure_details',
        'mandatory_disclosure_details_nonce'
    );


    /* Define all fields */
    $fields = array(

        // 1. GENERAL INFORMATION
        'mdi_general_data_name' => array(
            'label'   => 'Enter Data Name',
            'type'    => 'textarea',
            'section' => 'general',
        ),

        'mdi_general_data_value' => array(
            'label'   => 'Enter Value',
            'type'    => 'textarea',
            'section' => 'general',
        ),


        // 2. DOCUMENT INFORMATION
        'mdi_document_name' => array(
            'label'   => 'Enter Document Name',
            'type'    => 'textarea',
            'section' => 'documents',
        ),

        'mdi_document_url' => array(
            'label'   => 'Enter Document URL',
            'type'    => 'text',
            'section' => 'documents',
        ),


        // 3. RESULTS AND ACADEMICS
        'mdi_results_data_name' => array(
            'label'   => 'Enter Data Name',
            'type'    => 'text',
            'section' => 'results',
        ),

        'mdi_results_data_value' => array(
            'label'   => 'Enter URL or Value',
            'type'    => 'text',
            'section' => 'results',
        ),


        // 4. SCHOOL COMMITTEES
        'mdi_committee_document_name' => array(
            'label'   => 'Enter Document Name',
            'type'    => 'text',
            'section' => 'committees',
        ),

        'mdi_committee_document_url' => array(
            'label'   => 'Enter Document URL',
            'type'    => 'text',
            'section' => 'committees',
        ),


        // 5. STAFF (TEACHING)
        'mdi_teaching_staff_data_name' => array(
            'label'   => 'Enter Data Name',
            'type'    => 'text',
            'section' => 'teaching',
        ),

        'mdi_teaching_staff_data_value' => array(
            'label'   => 'Enter URL or Value',
            'type'    => 'text',
            'section' => 'teaching',
        ),

        'mdi_teaching_staff_serial_number' => array(
            'label'   => 'Serial Number Needed?',
            'type'    => 'select',
            'section' => 'teaching',
            'options' => array(
                ''    => 'Select an option',
                'yes' => 'Yes',
                'no'  => 'No',
            ),
        ),


        // 6. SCHOOL INFRASTRUCTURE
        'mdi_infrastructure_data_name' => array(
            'label'   => 'Enter Data Name',
            'type'    => 'text',
            'section' => 'infrastructure',
        ),

        'mdi_infrastructure_data_value' => array(
            'label'   => 'Enter URL or Value',
            'type'    => 'textarea',
            'section' => 'infrastructure',
        ),

    );


    /* Section labels */
    $sections = array(
        'general'        => 'General Information',
        'documents'      => 'Documents Information',
        'results'        => 'Results and Academics',
        'committees'     => 'School Committees',
        'teaching'       => 'Staff (Teaching)',
        'infrastructure' => 'School Infrastructure',
    );


    echo '<div id="mandatory-disclosure-fields"
        style="max-width:900px;">';


    /* Radio buttons */
    echo '<div class="mandatory-disclosure-tabs"
        style="display:flex;flex-wrap:wrap;gap:15px;margin:15px 0 25px;">';

    foreach ($sections as $section_key => $section_label) {

        echo '<label style="display:flex;align-items:center;gap:6px;">';

        echo '<input type="radio"
            name="mandatory_disclosure_section"
            value="' . esc_attr($section_key) . '" '
            . checked($section_key, 'general', false) . '>';

        echo '<span>' . esc_html($section_label) . '</span>';

        echo '</label>';
    }

    echo '</div>';


    /* Generate input fields */
    foreach ($fields as $key => $field) {

        $value = get_post_meta(
            $post->ID,
            $key,
            true
        );

        echo '<div class="mandatory-disclosure-field"
            data-section="' . esc_attr($field['section']) . '"
            style="margin-bottom:20px;">';


        // Field label.
        echo '<label for="' . esc_attr($key) . '"><strong>'
            . esc_html($field['label'])
            . '</strong></label><br>';


        // Multiline textarea.
        if ($field['type'] === 'textarea') {

            echo '<textarea
                id="' . esc_attr($key) . '"
                name="' . esc_attr($key) . '"
                rows="3"
                style="width:100%;margin-top:6px;">'
                . esc_textarea($value) .
            '</textarea>';


        // Dropdown/select.
        } elseif ($field['type'] === 'select') {

            echo '<select
                id="' . esc_attr($key) . '"
                name="' . esc_attr($key) . '"
                style="width:100%;margin-top:6px;">';

            foreach ($field['options'] as $option_value => $option_label) {

                echo '<option value="' . esc_attr($option_value) . '" '
                    . selected($value, $option_value, false) . '>'
                    . esc_html($option_label)
                    . '</option>';
            }

            echo '</select>';


        // Normal text or URL input.
        } else {

            echo '<input
                type="' . esc_attr($field['type']) . '"
                id="' . esc_attr($key) . '"
                name="' . esc_attr($key) . '"
                value="' . esc_attr($value) . '"
                style="width:100%;margin-top:6px;">';
        }

        echo '</div>';
    }

    echo '</div>';
}


/* =========================================================
   3. ADMIN-ONLY JAVASCRIPT
   Loads only in the WordPress Post Editor.
   It does not affect the public-facing website.
========================================================= */

add_action('admin_enqueue_scripts', function ($hook) {

    // Only load on the Add New Post and Edit Post screens.
    if (!in_array($hook, array('post.php', 'post-new.php'), true)) {
        return;
    }

    $screen = get_current_screen();

    // Only work with regular WordPress Posts.
    if (!$screen || $screen->post_type !== 'post') {
        return;
    }

    wp_enqueue_script('jquery');

    $script = <<<'JS'
jQuery(function ($) {

    // Limit every operation to our specific meta box.
    var $box = $('#mandatory_disclosure_details');

    if (!$box.length) {
        return;
    }

    var $radios = $box.find(
        'input[name="mandatory_disclosure_section"]'
    );

    var $fields = $box.find(
        '.mandatory-disclosure-field'
    );

    function updateFields() {

        var selected = $radios.filter(':checked').val();

        if (!selected) {
            return;
        }

        $fields.each(function () {

            var $field = $(this);

            $field.toggle(
                $field.attr('data-section') === selected
            );

        });
    }

    $radios.on('change', updateFields);

    // Display General Information initially.
    updateFields();

});
JS;

    wp_add_inline_script('jquery', $script, 'after');

});


/* =========================================================
   4. SAVE MANDATORY DISCLOSURE DETAILS
========================================================= */

add_action('save_post', function ($post_id) {

    // Only save regular Posts.
    if (get_post_type($post_id) !== 'post') {
        return;
    }

    // Verify the submitted nonce.
    if (
        !isset($_POST['mandatory_disclosure_details_nonce']) ||
        !wp_verify_nonce(
            sanitize_text_field(
                wp_unslash(
                    $_POST['mandatory_disclosure_details_nonce']
                )
            ),
            'save_mandatory_disclosure_details'
        )
    ) {
        return;
    }

    // Ignore autosaves, revisions and users without permission.
    if (
        (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) ||
        wp_is_post_revision($post_id) ||
        !current_user_can('edit_post', $post_id)
    ) {
        return;
    }


    // Allowed fields and their types.
    $textarea_fields = array(
        'mdi_general_data_name',
        'mdi_general_data_value',
        'mdi_document_name',
        'mdi_infrastructure_data_value',
    );

    $all_fields = array(
        'mdi_general_data_name',
        'mdi_general_data_value',

        'mdi_document_name',
        'mdi_document_url',

        'mdi_results_data_name',
        'mdi_results_data_value',

        'mdi_committee_document_name',
        'mdi_committee_document_url',

        'mdi_teaching_staff_data_name',
        'mdi_teaching_staff_data_value',
        'mdi_teaching_staff_serial_number',

        'mdi_infrastructure_data_name',
        'mdi_infrastructure_data_value',
    );


    // Save the submitted values.
    foreach ($all_fields as $key) {

        if (!isset($_POST[$key])) {
            continue;
        }

        $value = wp_unslash($_POST[$key]);

        // Accept only the allowed dropdown choices.
        if ($key === 'mdi_teaching_staff_serial_number') {

            $value = sanitize_text_field($value);

            if (!in_array($value, array('', 'yes', 'no'), true)) {
                $value = '';
            }

        // Multiline fields.
        } elseif (in_array($key, $textarea_fields, true)) {

            $value = sanitize_textarea_field($value);

        // Single-line fields, including document URL text inputs.
        } else {

            $value = sanitize_text_field($value);
        }

        update_post_meta($post_id, $key, $value);
    }

});
/* END MANDATORY DISCLOSURE CODE */





function smvk_register_gallery_collection() {
    register_post_type('gallery_collection', array(
        'labels' => array(
            'name'          => 'Gallery Collections',
            'singular_name' => 'Gallery Collection',
            'add_new_item'  => 'Add New Gallery Collection',
            'edit_item'     => 'Edit Gallery Collection',
            'menu_name'     => 'Gallery Collections',
        ),
        'public'       => false,
        'show_ui'      => true,
        'show_in_rest' => false,
        'menu_icon'    => 'dashicons-format-gallery',
        'supports'     => array('title'),
    ));
}
add_action('init', 'smvk_register_gallery_collection');


/**
 * Add category and multiple-image fields.
 */
function smvk_gallery_collection_metabox() {
    add_meta_box(
        'smvk_gallery_collection_details',
        'Gallery Photos and Category',
        'smvk_gallery_collection_fields',
        'gallery_collection',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'smvk_gallery_collection_metabox');


function smvk_gallery_collection_fields($post) {
    $category = get_post_meta(
        $post->ID,
        '_smvk_gallery_category',
        true
    );

    $images = get_post_meta(
        $post->ID,
        '_smvk_gallery_images',
        true
    );

    if (!is_array($images)) {
        $images = array();
    }

    $categories = array(
        'events'    => 'Events',
        'sports'    => 'Sports',
        'culture'   => 'Cultural',
        'classroom' => 'Classroom',
        'campus'    => 'Campus',
        'staff-gallery' => 'Staff Gallery'
    );

    wp_nonce_field(
        'smvk_save_gallery_collection',
        'smvk_gallery_nonce'
    );
    ?>

    <p>
        <label for="smvk_gallery_category">
            <strong>Choose category</strong>
        </label>
    </p>

    <select
        id="smvk_gallery_category"
        name="smvk_gallery_category"
        required
    >
        <option value="">-- Select Category --</option>

        <?php foreach ($categories as $value => $label) : ?>
            <option
                value="<?php echo esc_attr($value); ?>"
                <?php selected($category, $value); ?>
            >
                <?php echo esc_html($label); ?>
            </option>
        <?php endforeach; ?>
    </select>

    <hr>

    <h3>Images in this collection</h3>

    <p>Upload multiple images, then enter a separate title and caption for each one.</p>

    <button
        type="button"
        class="button button-primary"
        id="smvk_add_gallery_images"
    >
        Select / Add Images
    </button>

    <div id="smvk_gallery_image_list" style="margin-top:20px;">

        <?php foreach ($images as $image) :
            $image_id = absint($image['id'] ?? 0);

            if (!$image_id || !wp_attachment_is_image($image_id)) {
                continue;
            }

            $image_title = $image['title'] ?? '';
            $image_caption = $image['caption'] ?? '';
            ?>

            <div class="smvk-gallery-row"
                 data-id="<?php echo esc_attr($image_id); ?>"
                 style="display:flex;gap:15px;padding:15px;margin-bottom:12px;border:1px solid #ddd;background:#fff;">

                <div style="width:120px;flex-shrink:0;">
                    <?php
                    echo wp_get_attachment_image(
                        $image_id,
                        'thumbnail',
                        false,
                        array('style' => 'width:100%;height:auto;')
                    );
                    ?>
                    <input
                        type="hidden"
                        name="smvk_gallery_images[<?php echo esc_attr($image_id); ?>][id]"
                        value="<?php echo esc_attr($image_id); ?>"
                    >
                </div>

                <div style="flex:1;">
                    <p>
                        <label>Image title</label>
                        <input
                            type="text"
                            class="widefat"
                            name="smvk_gallery_images[<?php echo esc_attr($image_id); ?>][title]"
                            value="<?php echo esc_attr($image_title); ?>"
                            required
                        >
                    </p>

                    <p>
                        <label>Image caption</label>
                        <textarea
                            class="widefat"
                            rows="2"
                            name="smvk_gallery_images[<?php echo esc_attr($image_id); ?>][caption]"
                        ><?php echo esc_textarea($image_caption); ?></textarea>
                    </p>

                    <button type="button" class="button smvk-remove-gallery-image">
                        Remove image
                    </button>
                </div>
            </div>

        <?php endforeach; ?>

    </div>

    <p class="description">
        All images in this collection will use the category selected above.
        Each image can have its own title and caption.
    </p>

    <?php
}


/**
 * Load WordPress media uploader on the collection editor.
 */
function smvk_gallery_admin_scripts($hook) {
    $screen = get_current_screen();

    if (
        !$screen ||
        $screen->post_type !== 'gallery_collection' ||
        !in_array($hook, array('post.php', 'post-new.php'), true)
    ) {
        return;
    }

    wp_enqueue_media();
    wp_enqueue_script('jquery');

    $script = <<<'JS'
jQuery(function($) {
    let frame;

    function addGalleryRow(image) {
        const id = String(image.id);

        if ($('#smvk_gallery_image_list .smvk-gallery-row[data-id="' + id + '"]').length) {
            return;
        }

        const title = image.title || '';
        const thumb = image.sizes && image.sizes.thumbnail
            ? image.sizes.thumbnail.url
            : image.url;

        const row = $('<div>', {
            class: 'smvk-gallery-row',
            'data-id': id
        }).css({
            display: 'flex',
            gap: '15px',
            padding: '15px',
            marginBottom: '12px',
            border: '1px solid #ddd',
            background: '#fff'
        });

        const preview = $('<div>').css({
            width: '120px',
            flexShrink: 0
        });

        $('<img>', {
            src: thumb,
            alt: ''
        }).css({
            width: '100%',
            height: 'auto'
        }).appendTo(preview);

        $('<input>', {
            type: 'hidden',
            name: 'smvk_gallery_images[' + id + '][id]',
            value: id
        }).appendTo(preview);

        const fields = $('<div>').css({flex: 1});

        $('<label>').text('Image title').appendTo(fields);

        $('<input>', {
            type: 'text',
            class: 'widefat',
            name: 'smvk_gallery_images[' + id + '][title]',
            value: title,
            required: true
        }).css({marginBottom: '12px'}).appendTo(fields);

        $('<label>').text('Image caption').appendTo(fields);

        $('<textarea>', {
            class: 'widefat',
            rows: 2,
            name: 'smvk_gallery_images[' + id + '][caption]'
        }).appendTo(fields);

        $('<button>', {
            type: 'button',
            class: 'button smvk-remove-gallery-image',
            text: 'Remove image'
        }).css({marginTop: '10px'}).appendTo(fields);

        row.append(preview, fields);
        $('#smvk_gallery_image_list').append(row);
    }

    $('#smvk_add_gallery_images').on('click', function(e) {
        e.preventDefault();

        if (frame) {
            frame.open();
            return;
        }

        frame = wp.media({
            title: 'Select gallery images',
            button: { text: 'Add selected images' },
            library: { type: 'image' },
            multiple: true
        });

        frame.on('select', function() {
            frame.state().get('selection').each(function(attachment) {
                addGalleryRow(attachment.toJSON());
            });
        });

        frame.open();
    });

    $('#smvk_gallery_image_list').on(
        'click',
        '.smvk-remove-gallery-image',
        function() {
            $(this).closest('.smvk-gallery-row').remove();
        }
    );
});
JS;

    wp_add_inline_script('jquery', $script);
}
add_action('admin_enqueue_scripts', 'smvk_gallery_admin_scripts');


/**
 * Save category, image IDs, titles and captions.
 */
function smvk_save_gallery_collection($post_id) {
    if (
        !isset($_POST['smvk_gallery_nonce']) ||
        !wp_verify_nonce(
            sanitize_text_field(
                wp_unslash($_POST['smvk_gallery_nonce'])
            ),
            'smvk_save_gallery_collection'
        )
    ) {
        return;
    }

    if (
        (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) ||
        wp_is_post_revision($post_id)
    ) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    $allowed_categories = array(
        'events',
        'sports',
        'culture',
        'classroom',
        'campus',
        'staff-gallery'
    );

    $category = isset($_POST['smvk_gallery_category'])
        ? sanitize_key(wp_unslash($_POST['smvk_gallery_category']))
        : '';

    if (in_array($category, $allowed_categories, true)) {
        update_post_meta(
            $post_id,
            '_smvk_gallery_category',
            $category
        );
    } else {
        delete_post_meta($post_id, '_smvk_gallery_category');
    }

    $submitted = isset($_POST['smvk_gallery_images'])
        && is_array($_POST['smvk_gallery_images'])
        ? wp_unslash($_POST['smvk_gallery_images'])
        : array();

    $clean_images = array();

    foreach ($submitted as $item) {
        if (!is_array($item)) {
            continue;
        }

        $image_id = absint($item['id'] ?? 0);

        if (
            !$image_id ||
            !wp_attachment_is_image($image_id) ||
            !current_user_can('edit_post', $image_id)
        ) {
            continue;
        }

        $title = sanitize_text_field($item['title'] ?? '');

        if ($title === '') {
            continue;
        }

        $clean_images[] = array(
            'id'      => $image_id,
            'title'   => $title,
            'caption' => sanitize_textarea_field(
                $item['caption'] ?? ''
            ),
        );
    }

    update_post_meta(
        $post_id,
        '_smvk_gallery_images',
        $clean_images
    );
}
add_action(
    'save_post_gallery_collection',
    'smvk_save_gallery_collection'
);
