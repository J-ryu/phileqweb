<?php
/**
 * philequity functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package philequity
 */

if ( ! function_exists( 'philequity_financing_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function philequity_financing_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on philequity, use a find and replace
		 * to change 'philequity-financing' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'philequity-financing', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		remove_filter('template_redirect','redirect_canonical');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
	

	 register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'philequity-financing' ),
		'footer' => __( 'Footer Menu', 'philequity-financing' ),
		) );


		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'philequity_financing_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'philequity_financing_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function philequity_financing_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'philequity_financing_content_width', 640 );
}
add_action( 'after_setup_theme', 'philequity_financing_content_width', 0 );




/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function philequity_financing_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'philequity-financing' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'philequity-financing' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'philequity_financing_widgets_init' );


// function university_files() {

// 	wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDSfGYY9Re1Kt4CfP0PPICQwL-PaIvDA30', array(), '3', true );
// 	wp_enqueue_script( 'google-map-init', get_template_directory_uri() . '/js/modules/GoogleMap.js', array('google-map', 'jquery'), '0.1', true );
// 	wp_enqueue_script('main-university-js', get_theme_file_uri('js/scripts-bundled.js'), NULL, microtime(), true);
// 	wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	
// 	wp_enqueue_style('font-style-google','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  
// 	wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime());
// 	}

	
/**
 * Enqueue scripts and styles.
 */
function philequity_financing_scripts() {
	// wp_enqueue_style( 'philequity-financing-style', get_stylesheet_uri(), NULL, microtime() );
	// wp_enqueue_style( 'stylesheet', get_template_directory_uri() . 'style.css',  NULL, '1.0', true);
	// wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css',  NULL, '1.0', true);
	// wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/css/flaticon.css',  NULL, '1.0', true);
	// wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css',  NULL, '1.0', true);
	// wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css',  NULL, '1.0', true);
	// wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css',  NULL, '1.0', true);
	// wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.css',  NULL, '1.0', true);
	// wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css',  NULL, '1.0', true);
	// wp_enqueue_style( 'slict-theme', get_template_directory_uri() . '/assets/css/slick-theme.css',  NULL, '1.0', true);
	// wp_enqueue_style( 'owl-transition', get_template_directory_uri() . '/assets/css/owl.transitions.css',  NULL, '1.0', true);
	// wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.css',  NULL, '1.0', true);
	// wp_enqueue_style( 'bootstrap-select', get_template_directory_uri() . '/assets/css/bootstrap-select.css',  NULL, '1.0', true);

	

	// wp_enqueue_style( 'bootstrap-select', get_template_directory_uri() . '/assets/css/bootstrap-select.css',  NULL, '1.0', true);
	

	wp_enqueue_script( 'philequity-financing-scripts', get_template_directory_uri() . '/assets/js/script.js',  NULL, '1.0', true);
	wp_enqueue_script( 'philequity-financing-map-api', '//maps.googleapis.com/maps/api/js?key',  NULL, '1.0', true);
	wp_enqueue_script( 'philequity-financing-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js',  NULL, '1.0', true);
	wp_enqueue_script( 'philequity-financing-bootsrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js',  NULL, '1.0', true);
	wp_enqueue_script( 'philequity-financing-jquery-plugin-collection', get_template_directory_uri() . '/assets/js/jquery-plugin-collection.js',  NULL, '1.0', true);




	// wp_enqueue_script( 'philequity-financing-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	// wp_enqueue_script( 'philequity-financing-chart', get_template_directory_uri() . '/js/Chart.min.js',  NULL, '1.0', true);
	// wp_enqueue_script( 'philequity-financing-scripts', get_template_directory_uri() . '/assets/js/script.js',  NULL, '1.0', true);

	// wp_enqueue_script( 'philequity-financing-charts', '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js',  NULL, '1.0', true);

	// wp_enqueue_script( 'philequity-financing-chart_new', '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js',  NULL, '1.0', true);
	// wp_enqueue_script( 'philequity-financing-chart_bundle_min', '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js',  NULL, '1.0', true);
	// wp_enqueue_script( 'philequity-financing-chart_bundle', '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js',  NULL, '1.0', true);


	// wp_enqueue_script( 'philequity-chart-bundle', get_template_directory_uri() . '/assets/js/bundle.min.js',  NULL, '1.0', true);


	


	
	
	// wp_enqueue_script( 'philequity-financing-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js',  NULL, '1.0', true);


	wp_enqueue_script( 'philequity-financing-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'philequity_financing_scripts' );



function philequity_add_admin_page() {
	// Generate Admin Page
	add_menu_page('Philequity Theme Options ', 'Philequity', 'manage_options', 'admin_philequity', 'philequity_theme_create_page', 'dashicons-sos', 110 );

	// Generate Admin  Sub Pages
	add_submenu_page('admin_philequity', 'Philequity Theme Options ', 'Settings', 'manage_options', 'admin_philequity', 'philequity_theme_create_page' );

	// Generate  Sub Pages
	add_submenu_page('admin_philequity', 'Philequity CSS Options ', 'Custom CSS', 'manage_options', 'admin_philequity_css', 'philequity_theme_settings_page' );

}


	
function philequity_theme_create_page() {
	require_once( get_template_directory() . '/inc/templates/philequity-admin.php');
}


function philequity_theme_settings_page() {
	echo '<h2> Philequity Theme Option </h2>';
}


add_action('admin_menu', 'philequity_add_admin_page');

// querypost 
function philequity_directors_queries($query) {
	
	if (!is_admin() AND is_post_type_archive('directors') AND $query->is_main_query()) {
		$query->set('order', 'ASC');
	}
}


add_action( 'pre_get_posts', 'philequity_directors_queries' );




function my_rest_prepare_post($data, $post, $request) {
 
	$fields = get_fields($post->ID);
	
    foreach ($fields as $key => $value){
		$_data[$key] = get_field($key, $post->ID);
		
	}


	$data->data = $_data;

	return 
			[ 
			
			
				'first_name' => $data->data['first_name'],
				'last_name' => $data->data['last_name'],
				'birthday'=> $data->data['birthday'],
				'email_address' => $data->data['email_address'],
				'mobile_number'=> $data->data['mobile_number'],
				'address' => $data->data['address'],
				'contact_person'=> $data->data['contact_person'],
				'contact_person_address' => $data->data['contact_person_address'],
				
				
					
				
				
				];
		
		
			
	
}
add_filter("rest_prepare_person", 'my_rest_prepare_post', 10, 3);

function get_fields_recursive( $item ) {
	if ( is_object( $item ) ) {
		$item->acf = array();
		if ( $fields = get_fields( $item ) ) {
			$item->acf = $fields;					
			array_walk_recursive( $item->acf, 'get_fields_recursive' );
		}
	}
}


add_filter( 'acf/rest_api/{type}/get_fields', function( $data, $request, $response ) {
	if ( $response instanceof WP_REST_Response ) {
		$data = $response->get_data();
	}

	if ( ! empty( $data ) ) {
		array_walk_recursive( $data, 'get_fields_recursive' );
	}

	return $data;
}, 10, 3 );

// function philequity_title_auto_increment( $value, $post_id, $field ) {
// 	// If this isn't an 'artists' post type, don't update it.
// 	if ( get_post_type( $post_id ) == 'download_url' ) {   
// 		$download_type = get_field('download_type', $post_id);
// 		$fundType = get_field('fund_type', $post_id);
// 		$title = $download_type . ' ' . $fundType;
// 		$slug = sanitize_title( $title );
// 		$postdata = array(
// 			 'ID'      => $post_id,
// 			 'post_title'  => $title,
// 			 'post_type'   => 'download_url',
// 			 'post_name'   => $slug
// 		);
// 	wp_update_post( $postdata, true );
// 	return $value;
// 	}
// 	}
// 	add_filter('acf/update_value/name=first_name', 'nd_update_postdata', 
// 	10, 3);
// 	add_filter('acf/update_value/name=last_name', 'nd_update_postdata', 10, 
// 	3);





function change_title($post_id) {


	date_default_timezone_set('Asia/Manila');

	if ( get_post_type( $post_id ) == 'download_url' ) {   


		$time = date('Y-m-d h:i:sa');

		$download_type = get_field('download_type',$post_id);
		$fundType = get_field('fund_type',$post_id);
		$monthpublished = get_field('month_published',$post_id);
		$year_published_fact = get_field('year_published_fact',$post_id);
		$year_published_annual = get_field('year_published_annual',$post_id);

		if ($download_type == "prospectus") {

			$post_title = $download_type . ' - ' .  $fundType . ' - ' . $time;
	
		}

		else if ($download_type == "fact") {

			$post_title = $download_type . ' - ' .  $fundType . ' - ' . $time . ' - ' . $monthpublished . '-' . $year_published_fact ;
	
		}

		else {
			$post_title = $download_type . ' - ' .  $fundType . ' - ' . $time  . '-' . $year_published_annual;

		}

		
	
		// unhook this function so it doesn't loop infinitely
		remove_action('save_post', 'change_title');
	
		// update the post, which calls save_post again
		wp_update_post(array('ID' => $post_id, 'post_title' => $post_title));
	
		// re-hook this function
		add_action('save_post', 'change_title');

	}

   
}  

add_action('save_post', 'change_title');


// Register Custom Taxonomy
function philequity_forms() {

	$labels = array(
		'name'                       => _x( 'Forms', 'Taxonomy General Name', 'philequity_form_type' ),
		'singular_name'              => _x( 'Form', 'Taxonomy Singular Name', 'philequity_form_type' ),
		'menu_name'                  => __( 'Forms', 'philequity_form_type' ),
		'all_items'                  => __( 'All forms', 'philequity_form_type' ),
		'parent_item'                => __( 'Parent Item', 'philequity_form_type' ),
		'parent_item_colon'          => __( 'Parent Item:', 'philequity_form_type' ),
		'new_item_name'              => __( 'New Item Form', 'philequity_form_type' ),
		'add_new_item'               => __( 'Add New Form', 'philequity_form_type' ),
		'edit_item'                  => __( 'Edit Form', 'philequity_form_type' ),
		'update_item'                => __( 'Update Form', 'philequity_form_type' ),
		'view_item'                  => __( 'View Form', 'philequity_form_type' ),
		'separate_items_with_commas' => __( 'Separate forms with commas', 'philequity_form_type' ),
		'add_or_remove_items'        => __( 'Add or remove forms', 'philequity_form_type' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'philequity_form_type' ),
		'popular_items'              => __( 'Popular Forms', 'philequity_form_type' ),
		'search_items'               => __( 'Search forms', 'philequity_form_type' ),
		'not_found'                  => __( 'Not Found', 'philequity_form_type' ),
		'no_terms'                   => __( 'No forms', 'philequity_form_type' ),
		'items_list'                 => __( 'Forms list', 'philequity_form_type' ),
		'items_list_navigation'      => __( 'Forms list navigation', 'philequity_form_type' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'Form', array( 'download_url' ), $args );

}
add_action( 'init', 'philequity_forms', 0 );



if(isset($_POST['submitProspectus'])) {


	$prospectus = $_POST["prospectus"];
	if($prospectus){


		$args = array(
			'post_per_page' => 1,
			'post_type' => 'download_url',
			'orderby' => 'desc',
			'meta_query'	=> array(
				'relation'		=> 'AND',
				array(
					'key'	 	=> 'download_type',
					'value'	  	=> 'prospectus',
					'compare' 	=> '=',
				),
				array(
					'key'	  	=> 'fund_type',
					'value'	  	=> $prospectus,
					'compare' 	=> '=',
				)

				),
		);

		$query = new WP_Query($args); 
		if( $query->have_posts()): 
		while( $query->have_posts()): $query->the_post(); {

		
			$file = get_field('pdf_file',the_ID());
		if ($file) {

			$len = filesize($file);
			$filename = basename($file);
			$file_extension = strtolower(substr(strrchr($filename,"."),1));
			$ctype="application/pdf"; 
			//Begin writing headers
			header("Pragma: public");
			header("Expires: 0");
			header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
			header("Cache-Control: public");
			header("Content-Description: File Transfer");
			header("Content-Type: $ctype");


			//Force the download
		    $header="Content-Disposition: attachment; filename=".$filename.";";
		    header($header );
		    header("Content-Transfer-Encoding: binary");
		    header("Content-Length: ".$len);
		    @readfile($file);
			exit;  
			}

		

		}

		
		wp_reset_postdata(); 
		endwhile; 
		else:
		endif;
	
		 
		}	
	else{
	  $errorMsg = '<b>File not found!</b>';
		}
	}




	if(isset($_POST['submitAnnual'])) {



		$annual_type = $_POST["annualType"];
		$annual_year = $_POST["annualYear"];
	
		if($annual_type){
	
			$args = array(
				'post_per_page' => 1,
				'post_type' => 'download_url',
				'orderby' => 'desc',
				'meta_query'	=> array (
					'relation'		=> 'AND',
					array(
						'key'	 	=> 'download_type',
						'value'	  	=> 'annual',
						'compare' 	=> '=',
					),
					array(
						'key'	  	=> 'fund_type',
						'value'	  	=> $annual_type,
						'compare' 	=> '=',
					),
					array(
						'key'	  	=> 'year_published_annual',
						'value'	  	=> $annual_year,
						'compare' 	=> '=',
					),
	
					),
			);
	
			$query = new WP_Query($args); 
			if( $query->have_posts()): 
			while( $query->have_posts()): $query->the_post(); {
	
			
				$file = get_field('pdf_file',the_ID());
			if ($file) {
	
				$len = filesize($file);
				$filename = basename($file);
				$file_extension = strtolower(substr(strrchr($filename,"."),1));
				$ctype="application/pdf"; 
				//Begin writing headers
				header("Pragma: public");
				header("Expires: 0");
				header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
				header("Cache-Control: public");
				header("Content-Description: File Transfer");
				header("Content-Type: $ctype");
	
	
				//Force the download
				$header="Content-Disposition: attachment; filename=".$filename.";";
				header($header );
				header("Content-Transfer-Encoding: binary");
				header("Content-Length: ".$len);
				@readfile($file);
				exit;  
				}
	
			
	
			}
	
			
			wp_reset_postdata(); 
			endwhile; 
			else:
			endif;
			 
			}	
		else{
		  $errorMsg = '<b>File not found!</b>';
			}
		}



		

if(isset($_POST['submitFactSheets'])) {



	$fact_type = $_POST["factType"];
	$fact_month = $_POST["factMonth"];
	$fact_year = $_POST["factYear"];

	if($fact_type){
	
		$args = array(
			'post_per_page' => 1,
			'post_type' => 'download_url',
			'orderby' => 'desc',
			'meta_query'	=> array (
				'relation'		=> 'AND',
				array(
					'key'	 	=> 'download_type',
					'value'	  	=> 'fact',
					'compare' 	=> '=',
				),
				array(
					'key'	  	=> 'fund_type',
					'value'	  	=> $fact_type,
					'compare' 	=> '=',
				),
				array(
					'key'	  	=> 'year_published_fact',
					'value'	  	=> $fact_year,
					'compare' 	=> '=',
				),

				array(
					'key'	  	=> 'month_published',
					'value'	  	=> $fact_month,
					'compare' 	=> '=',
				),	

				),
		);

		$query = new WP_Query($args); 
		if( $query->have_posts()): 
		while( $query->have_posts()): $query->the_post(); {

		
			$file = get_field('pdf_file',the_ID());
		if ($file) {

			$len = filesize($file);
			$filename = basename($file);
			$file_extension = strtolower(substr(strrchr($filename,"."),1));
			$ctype="application/pdf"; 
			//Begin writing headers
			header("Pragma: public");
			header("Expires: 0");
			header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
			header("Cache-Control: public");
			header("Content-Description: File Transfer");
			header("Content-Type: $ctype");


			//Force the download
		    $header="Content-Disposition: attachment; filename=".$filename.";";
		    header($header );
		    header("Content-Transfer-Encoding: binary");
		    header("Content-Length: ".$len);
		    @readfile($file);
			exit;  
			}

		

		}

		
		wp_reset_postdata(); 
		endwhile; 
		else:
		endif;
		 
		}	
	else{
	  $errorMsg = '<b>File not found!</b>';
		}
	}




	// return calculator

	if(isset($_POST['computeReturn'])) {

		$mutual_day = $_POST["mutual_day"];
		$mutual_month = $_POST["mutual_month"];
		$mutual_year = $_POST["mutual_year"];
		$mutualFund = $_POST["mutualFund"];


	}



	if(isset($_FILES['uploadfile']['name'])) {





		// print_r($_FILES);

		// global $wpdb;

    // $navs_type = $_POST['navps_type'];
    // $navs_URL = $_POST['nav_data_URL'];
    // $author_navps = "admin";


//     $wpdb->insert("navps_data", array(
//         'navps_type' =>  "pefi",
//        'nav_data_URL' => "http://localhost:8888/phil/wp-content/themes/philequity/assets/data/PDIF_NAVPS.csv",
//        'date_created' => '2019-02-18 00:30:48',
//        'date_updated' => "2019-02-18",
//        'author' => "admin"
// ));


 if ( !function_exists('wp_handle_upload')) {
	 require_once( ABSPATH . 'wp-admin/includes/file.php');
 }

		$fileupload = $_FILES['uploadfile'];
		$upload_overrides = array('test_form' => false);
		$movefile = wp_handle_upload($fileupload, $upload_overrides);
		if ($movefile && ! isset($movefile['error'])) {


			if ($_POST['navps_add_submit']) { 
				$navs_type = $_POST['navps_type'];
				$nav_final_URL = $movefile['url'];
				get_currentuserinfo();
				$author = $current_user->user_login;

				global $wpdb;

				$navs_type = $_POST['navps_type'];
				$navs_URL = $nav_final_URL;
    // $author_navps = $author;


			$wpdb->insert("navps_data", array(
					'navps_type' =>  $navs_type,
				'nav_data_URL' => $navs_URL,
				'date_created' => '2019-02-18 00:30:48',
				'date_updated' => "2019-02-18",
				'author' => $author
				));
		}

			

		}
		else {
			echo $movefile['error'];
		}

	
	

		}






/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// pagination links
?>

<?php

if ( ! function_exists( 'philequity_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 * Based on paging nav function from Twenty Fourteen
 */

function philequity_paging_nav() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}

	$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
	$pagenum_link = html_entity_decode( get_pagenum_link() );
	$query_args   = array();
	$url_parts    = explode( '?', $pagenum_link );

	if ( isset( $url_parts[1] ) ) {
		wp_parse_str( $url_parts[1], $query_args );
	}

	$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
	$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

	$format  = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
	$format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';


		// Set up paginated links.
		$links = paginate_links( array(
			'base'     => $pagenum_link,
			'format'   => $format,
			'total'    => $GLOBALS['wp_query']->max_num_pages,
			'current'  => $paged,
			'mid_size' => 3,
			'add_args' => array_map( 'urlencode', $query_args ),
			'prev_text' => __( '&laquo;', 'philequity' ),
			'next_text' => __( '&raquo;', 'philequity' ),
			'type'      => 'list',
		) );

		

	if ( $links ) :

	?>

	<nav class="navigation paging-navigation" role="navigation">
		<!-- <h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'yourphilequitytheme' ); ?></h1> -->
			<?php echo $links; ?>
	</nav><!-- .navigation -->
	

	<?php
	endif;
}
endif;


?>



