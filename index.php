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
            onclick="window.open('http://localhost:8080/wordpress/?page_id=78', '_blank');">
            <img src="<?php echo get_template_directory_uri().'/assets/images/admin-resultmanagement.jpg'; ?>" height="100" class="rounded" alt="Result Management System">
            <div class="row fs-5 fw-bold justify-content-center">Result Management System</div>
            <div class="row fs-5">This project is a simple and user-friendly Result Management System built using PHP, HTML, CSS, and MySQL for the database.</div>
        </div>

        <div class="link row col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center shadow-lg p-3 mb-5 bg-white rounded" 
            onclick="window.open('http://localhost:8080/wordpress/?page_id=80', '_blank');">
            <img src="<?php echo get_template_directory_uri().'/assets/images/simpleportfolio.jpeg'; ?>" height="100" class="rounded" alt="Simple Portfolio Site">
            <div class="row fs-5 fw-bold justify-content-center">Portfolio Site</div>
            <div class="row fs-5">This is a simple personal website created using HTML, CSS, and PHP. It serves as a basic introduction to my work.</div>
        </div>

        <div class="link row col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center shadow-lg p-3 mb-5 bg-white rounded" 
            onclick="window.open('http://localhost:8080/wordpress/?page_id=65', '_blank');">
            <img src="<?php echo get_template_directory_uri().'/assets/images/portfoliousingwp.png'; ?>" height="100" class="rounded" alt="Portfolio Site Using WordPress">
            <div class="row fs-5 fw-bold justify-content-center">Portfolio Site Using WordPress</div>
            <div class="row fs-5">This is a portfolio website built using WordPress. It highlights my projects and provides a detailed overview of my work.</div>
        </div>
    </div>
</div>
</section>

<section id="contact" class="py-5" style="background-color: #f9f9f9;">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="fw-bold mb-3">Contact Me</h2>
      <p class="text-muted">Feel free to get in touch for any inquiries or collaborations.</p>
    </div>
    <div class="row align-items-center">
     
      <div class="col-lg-6 order-lg-2">
        <div class="card shadow-sm border-0">
          <div class="card-body p-4">
            <h4 class="text-center mb-4">Send a Message</h4>
            <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
              <div class="mb-3">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" placeholder="Your first name">
              </div>
              <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" placeholder="Your last name">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Your email">
              </div>
              <div class="mb-3">
                <label for="subject" class="form-label">Message</label>
                <textarea class="form-control" id="subject" name="subject" rows="5" placeholder="Write your message here..."></textarea>
              </div>
              <input type="hidden" name="action" value="submit_contact_form">
        <?php wp_nonce_field('contact_form_nonce', 'contact_form_nonce_field'); ?>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-6 order-lg-1">
        <div class="text-center">
          <img src="<?php echo get_template_directory_uri()."/assets/images/contactbg.jpg"; ?>" class="img mb-4 rounded-circle" alt="Contact Us Illustration">
          <h5 class="fw-bold">Let’s Connect</h5>
          <p class="text-muted">Drop us a message, and we’ll get back to you shortly.</p>
        </div>
      </div>
    </div>
  </div>
</section>




	</main><!-- #main -->

<?php
get_footer();
