<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

get_header();
?>

	<main id="primary" class="site-main mt-5 ">
	<div class="container-lg d-flex justify-content-center "> 
  <div class="row   shadow p-3 mb-5 bg-white rounded">
    <div class="col-lg-6 col-md-6 col-sm-12 ">
    <div class="row fs-1 fw-bold text-center ms-5 "> Hello There!</div>
	<div class="row fs-1 fw-bold text-center ms-5 "> I'm Amit Bahuguna. </div>
	 <div class="row  fs-4 mt-5 ms-5">I'm a Full Stack developer Intern.</div>   
     <div class="row  fs-5 mt-5 ms-5"></div>   
    </div>
   
 

   
    <div class="col-lg-6  col-md-6 col-sm-12 d-flex justify-content-center">
	<img src="<?php echo get_template_directory_uri()."/assets/images/myimage.jpg"; ?> " height="50" class="img-fluid  rounded" alt="amit profile photo">
    </div>
  </div>
  </div>
    
    <div class="container-fluid "> 

    <div class="row fs-3 fw-bold justify-content-center"> My Project's</div>

      <div class="row justify-content-between p-5"> 
      <div class=" row col-lg-3 col-md-5 col-sm-8 d-flex justify-content-center shadow-lg  p-3 mb-5 bg-white rounded  ">
      <img src="<?php echo get_template_directory_uri()."/assets/images/resultmanagement.jpg"; ?> " height="50" class=" rounded" alt="amit profile photo">
      <div class="row fs-5 fw-bold  justify-content-center " > Result Management System</div>
      <div class="row fs-5 "> This project is a simple and user-friendly Result Management System built using PHP, HTML, CSS, and MySQL for the database.

 </div>
      </div>

   
      <div class=" row col-lg-3 col-md-5 col-sm-8 d-flex justify-content-center  shadow-lg p-3 mb-5 bg-white rounded  ">
      <img src="<?php echo get_template_directory_uri()."/assets/images/resultmanagement.jpg"; ?> " height="50" class=" rounded" alt="amit profile photo">
     <div class="row fs-5 fw-bold  justify-content-center "> portfolio site </div>
     <div class="row fs-5 ">This is a simple personal website created using HTML, CSS, and PHP. It serves as a basic introduction to my work . </div>
      </div>
      <div class=" row col-lg-3 col-md-5 col-sm-8 d-flex justify-content-center shadow-lg p-3 mb-5 bg-white rounded  ">
      <img src="<?php echo get_template_directory_uri()."/assets/images/resultmanagement.jpg"; ?> " height="50" class=" rounded" alt="amit profile photo">
      <div class="row fs-5 fw-bold  justify-content-center"> portfolio site using wordpress</div>
      <div class="row fs-5 ">  This is a portfolio website built using WordPress. It highlights my projects and provides a detailed overview of my work.</div>
      </div>
      


      </div>
    </div>

	</main><!-- #main -->

<?php
get_footer();
