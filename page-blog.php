<?php
    /**
    * Template Name: Blog Page
    */
?>
<?php 

get_header();


$args = array(
    'category_name' => 'blog', // Get posts from the specific category ID
    'posts_per_page' => 10, // Number of posts to show
);

// Custom query to fetch posts
$query = new WP_Query($args);

// The Loop
if ($query->have_posts()) : 
?>
<div class="container mt-4">
    <div class="row">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php the_permalink(); ?>" class="text-decoration-none"><?php the_title(); ?></a>
                        </h5>
                        <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Published on <?php echo get_the_date(); ?></small>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>
<?php
else :
    echo '<p class="text-center">No posts found in this category.</p>';
endif;

// Reset post data
wp_reset_postdata();







get_footer();

?>