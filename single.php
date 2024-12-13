<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package portfolio
 */

get_header();
?>

	<main id="primary" class="site-main">
		

	<div class="container w-75 ">

		<?php
		while ( have_posts() ) :
			the_post();?>
			<nav aria-label="breadcrumb">
			<ol class="breadcrumb mt-5 container w-75 ml-5">
			  <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
			  <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' )."?page_id=28" ); ?>">Blog</a></li>
			  <li class="breadcrumb-item active" aria-current="page"><?php   echo str_split(get_the_title(),14)[0]."...";
			  ?> 
			 
			  
			</li>
			</ol>
		  </nav>
<?php
			get_template_part( 'template-parts/content', get_post_type() );

			// the_post_navigation(
			// 	array(
			// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'portfolio' ) . '</span> <span class="nav-title">%title</span>',
			// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'portfolio' ) . '</span> <span class="nav-title">%title</span>',
			// 	)
			// );
			?>

			<!-- // If comments are open or we have at least one comment, load up the comment template. -->
			<div class="container w-75">
				<?php
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?></div>

</div>

	</main><!-- #main -->
	
<?php
get_footer();
