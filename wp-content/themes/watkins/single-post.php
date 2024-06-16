<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Watkins
 */

get_header();
?>


    <section class="container">
        <div class="post-container">
            <aside>
                <h2 class="color-black">Our news</h2>
                <nav>
                    <ul class="post-filter">
						<?php
						$categories = get_categories();
						foreach($categories as $category) {
							if($category->name == 'Uncategorized') {
								continue;
							}
							echo '<li>';
							echo '<a href="'.get_category_link($category->term_id).'">';
							echo '<img src="'.get_template_directory_uri().'/assets/images/heart.png" alt="heart-icon" />';
							echo '<span>'.$category->name.'</span>';
							echo '</a>';
							echo '</li>';
						}
						?>

                    </ul>
                </nav>
            </aside>
            <section class="post-details">
	            <?php
	            while ( have_posts() ) :
		            the_post();

		            get_template_part( 'template-parts/content', 'blog' );

	            endwhile; // End of the loop.
	            ?>

                <?php $related_posts = get_field('related_posts') ;?>
                <?php if($related_posts) : ?>
                    <div class="related-articles fade-in">
                        <p>Related articles</p>
                        <ul>
                            <?php foreach($related_posts as $article) : $post_article = ( ! empty( $article['article'] ) ) ? $article['article'] : null;  ?>
                                <li>
                                    <img src="<?php echo get_the_post_thumbnail_url($post_article->ID) ;?>" alt="" />
                                    <h3 class="color-green">
                                        <?php echo get_the_title($post_article->ID) ;?>
                                    </h3>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

            </section>
        </div>


    </section><!-- #main -->

<?php
get_sidebar();
get_footer();
