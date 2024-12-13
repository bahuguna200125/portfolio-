<?php
/**
 * Template Name: Portfolio-WP Page
 */
?>

<?php get_header(); ?>

<div class="container w-75 ">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb mt-5 container w-75 ml-5">
    <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
    <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' )."#projects" ); ?>">Projects</a></li>
    <li class="breadcrumb-item active" aria-current="page">Wordpress-Portfolio</li>
  </ol>
</nav>
   
    <div class="heading container w-75">
        <h1>PORTFOLIO SITE USING WORDPRESS</h1>
    </div>

    <main>
        <div class="content container w-75 mb-5">
            
            <p><strong>WordPress Portfolio Website Overview:</strong></p>
            <p>My <strong>WordPress Portfolio Website</strong> is a comprehensive and interactive platform designed to provide detailed insights about me and my work.</p>
            
         
            <ol class="wp-block-list">
                <li><strong>About Me:</strong>
                    <ul>
                        <li>A dedicated section where visitors can learn about my background, skills, interests, and professional journey.</li>
                    </ul>
                </li>
                <li><strong>Projects Showcase:</strong>
                    <ul>
                        <li>Displays the projects I have worked on, complete with descriptions, technologies used, and links to explore them further.</li>
                    </ul>
                </li>
                <li><strong>Education and Achievements:</strong>
                    <ul>
                        <li>Highlights my academic qualifications, certifications, and key accomplishments.</li>
                    </ul>
                </li>
                <li><strong>Blog or Updates Section (Optional):</strong>
                    <ul>
                        <li>A space to share thoughts, articles, or updates about my work and interests.</li>
                    </ul>
                </li>
            </ol>
        
            <p>This portfolio website is not just a showcase of my work but also a reflection of my personality and capabilities. Built with WordPress, it’s designed to be visually appealing, responsive, and easy to navigate, making it a powerful tool to connect with potential collaborators or employers.</p>
          
            <figure class="wp-block-image size-large">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portfoliousingwp.png'); ?>" alt="Portfolio Website" class="img mb-5">
            </figure>
            
  
            <p><strong>Projects Section Overview:</strong></p>
            <p>The <strong>Projects Section</strong> of my portfolio highlights the work I’ve done and the skills I bring to the table.</p>
            
            <ol class="wp-block-list">
                <li><strong>Showcasing My Work:</strong>
                    <ul>
                        <li>Displays all my key projects with detailed descriptions, including the purpose, features, and technologies used.</li>
                    </ul>
                </li>
                <li><strong>Interactive Previews and Links:</strong>
                    <ul>
                        <li>Provides links to live projects or repositories, allowing visitors to explore my work directly.</li>
                    </ul>
                </li>
                <li><strong>Diverse Project Categories:</strong>
                    <ul>
                        <li>Covers a range of projects, from web development and result management systems to innovative tools and creative solutions.</li>
                    </ul>
                </li>
            </ol>
            
           
            <figure class="wp-block-image size-large">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/projects.png'); ?>" alt="Portfolio Website" class="img mb-5">
        </div>
    </main>
</div>

<?php get_footer(); ?>
