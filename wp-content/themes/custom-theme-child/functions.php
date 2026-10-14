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





    



 