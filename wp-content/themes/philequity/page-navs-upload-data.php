<?php

/**
 * The template for Mutual Funds Page
 *

 */


 get_header();  ?>

 <?php 
 require_once("template-parts/content-dbconn.php");

//  $navs_type = $_POST['navps_type'];
//  print_r($navs_type);
//  die;



// $navs_type   = $_GET["navps_type"];

//  die;

//  $totalAnnnualIncome = $_POST["totalAnnnualIncome"];
//  $totalSavings       = $_POST["totalSavings"];
//  $variable = $_POST['data'];



//    if ($_POST['navps_add_submit']) {
//     global $wpdb;

//     $navs_type = $_POST['navps_type'];
//     $navs_URL = $_POST['nav_data_URL'];
//     $author_navps = "admin";


//     $wpdb->insert("navps_data", array(
//         'navps_type' =>  $navs_type,
//        'nav_data_URL' => "http://localhost:8888/phil/wp-content/themes/philequity/assets/data/PDIF_NAVPS.csv",
//        'date_created' => '2019-02-18 00:30:48',
//        'date_updated' => "2019-02-18",
//        'author' => $author_navps
// ));


//  }

// if(isset($_FILES['uploadfile']['name'])) {

// print_r($_FILES);
// die;

// }


//  if ($_POST['navps_add']) {
//     //   echo 'SUCCESS';
//      global $wpdb;

//      $navs_type = $_POST['navps_type'];
//      $navs_URL = $_POST['nav_data_URL'];
//      $author_navps = "admin";


//      $wpdb->insert('navps_data', array(
//         'navps_type' =>  "pefi",
//         'nav_data_URL' => "http://localhost:8888/phil/wp-content/themes/philequity/assets/data/PDIF_NAVPS.csv",
//         'date_created' => '2019-02-18 00:30:48',
//         'date_updated' => "2019-02-18",
//         'author' => "author"
//     ));

//  }
    // if ($wpdb->insert('navps_data', array(
    //     'navps_type' =>  "pefi",
    //     'nav_data_URL' => "http://localhost:8888/phil/wp-content/themes/philequity/assets/data/PDIF_NAVPS.csv",
    //     'date_created' => '2019-02-18 00:30:48',
    //     'date_updated' => "2019-02-18",
    //     'author' => "author"
    // )) == false ) wp_die('Databse Insertion Failed!!!'); 
    //     else {
    //            echo "Data Inserted successfully";
    //         }

    //     }
 ?>
 


<section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/pg-title/aboutus-img.jpg'); ?>) center center/cover no-repeat local;">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                    <h2 style="color:#fff;"><?php the_title(); ?></h2>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo $navs_type; ?>"><?php echo $navs_type; ?></a></li>
                            <!-- <li>Investing FAQ's</li> -->
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
 </section>        
        <!-- end page-title -->




<section style="padding:30px" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="contact-form">
                            <form action="" method="post" id="SUBMIT_NAVPS"  enctype="multipart/form-data" class="form row contact-validation-active">
                                <div class="col col-sm-10 col-lg-12">
                                    
                                    <div class="form-group">
                                    <label for="navps_type">Select type of fund:</label>
                                    <select name="navps_type" class="form-control" id="navps_type">
                                        <option value="pefi">Philequity Fund</option>
                                        <option value="ppse">Philequity PSE Index Fund</option>
                                        <option value="pdif">Philequity Dollar Income Fund</option>
                                        <option value="ppbf">Philequity Peso Bond Fund</option>
                                        <option value="pdyf" >Philequity Dividend Yield Fund</option>
                                    </select>
                                    </div>
                                </div>


                               
                              
                                    <div class="form-group">
                                        <div style="margin-left:auto; margin-right: auto;" class="col col-sm-10 col-lg-6 ">
                                            <label  ame="navs_URL"  for="uploadfile">Upload .csv file format </label>
                                            <input type="file" class="form-control" id="file" name="uploadfile">
                                        </div>
                                    </div>
                                
                             
                                <div style="margin-top:10px" class="col col-xs-12 submit-btn  ">
                                  <button class="btn btn-primary btn-default" id="navps_add" value="navps_add_submit" name="navps_add_submit" type="submit">Save</button>
                                    <div id="loader">
                                        <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                    </div>
                                </div>
                                <div class="error-handling-messages">
                                    <div id="success">Thank you</div>
                                    <div id="error"> Error occurred while sending email. Please try again later. </div>
                                </div>
                            </form>
                        </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
