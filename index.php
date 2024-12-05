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
    
  <section id="projects">
  <div class="container-fluid"> 
    
    <div class="row fs-3 fw-bold justify-content-center"> My Project's</div>
    <div class="row justify-content-between p-5"> 
        <div class="link row col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center shadow-lg p-3 mb-5 bg-white rounded" 
            onclick="window.open('http://localhost:8080/wordpress/index.php/2024/12/04/result-management-system/', '_blank');">
            <img src="<?php echo get_template_directory_uri().'/assets/images/resultmanagement.jpg'; ?>" height="100" class="rounded" alt="Result Management System">
            <div class="row fs-5 fw-bold justify-content-center">Result Management System</div>
            <div class="row fs-5">This project is a simple and user-friendly Result Management System built using PHP, HTML, CSS, and MySQL for the database.</div>
        </div>

        <div class="link row col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center shadow-lg p-3 mb-5 bg-white rounded" 
            onclick="window.open('http://localhost:8080/wordpress/index.php/2024/12/04/simple-portfolio-site/', '_blank');">
            <img src="<?php echo get_template_directory_uri().'/assets/images/simpleportfolio.jpeg'; ?>" height="100" class="rounded" alt="Simple Portfolio Site">
            <div class="row fs-5 fw-bold justify-content-center">Portfolio Site</div>
            <div class="row fs-5">This is a simple personal website created using HTML, CSS, and PHP. It serves as a basic introduction to my work.</div>
        </div>

        <div class="link row col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center shadow-lg p-3 mb-5 bg-white rounded" 
            onclick="window.open('http://localhost:8080/wordpress/index.php/2024/12/04/portfolio-site-using-wordpress/', '_blank');">
            <img src="<?php echo get_template_directory_uri().'/assets/images/portfoliousingwp.png'; ?>" height="100" class="rounded" alt="Portfolio Site Using WordPress">
            <div class="row fs-5 fw-bold justify-content-center">Portfolio Site Using WordPress</div>
            <div class="row fs-5">This is a portfolio website built using WordPress. It highlights my projects and provides a detailed overview of my work.</div>
        </div>
    </div>
</div>
</section>

<div class="container">
  <div style="text-align:center">
    <h2>Contact Me< h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="/w3images/map.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
          <option value="india">India</option>
          

        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>


	</main><!-- #main -->

<?php
get_footer();
