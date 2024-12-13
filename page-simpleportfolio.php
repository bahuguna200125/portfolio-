<?php
/**
 * Template Name: Portfolio-Simple Page
 */
?>

<?php get_header(); ?>

<div class="container w-75">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb mt-5 container w-75 ml-5">
    <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
    <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' )."#projects" ); ?>">Projects</a></li>
    <li class="breadcrumb-item active" aria-current="page">Simple-Portfolio</li>
  </ol>
</nav>
    <div class="heading container w-75">
        <h1> SIMPLE PORTFOLIO SITE </h1>
    </div>

    <main>
        <div class="content container w-75 mb-5">
            <p><strong>Portfolio Website Overview:</strong></p>
            <p>This <strong>Portfolio Website</strong> is a platform to showcase my personal and professional details in a clean and organized way.</p>
            
            <ol>
                <li>
                    <strong>Contact Information:</strong>
                    <ul>
                        <li>Includes my email ID, GitHub account, and other relevant contact details to connect with me easily.</li>
                    </ul>
                </li>
                <li>
                    <strong>Education Details:</strong>
                    <ul>
                        <li>Highlights my academic background and achievements.</li>
                    </ul>
                </li>
            </ol>

            <p>The website is simple yet professional, designed to give visitors a quick overview of my skills, qualifications, and how they can reach out to me.</p>
            
            <figure class="wp-block-image size-large mb-5" style="margin-bottom: 50px;">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/simpleportfolio.jpeg'); ?>" alt="Portfolio Website" class="img mb-5">
            </figure>
        </div>
    </main>
</div>

<?php get_footer(); ?>
