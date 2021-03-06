<?php
/**
 * The template for Inhabitent front page.
 *
 * @package Inhabitent Theme
 */

get_header(); 

?>
<div id="primary" class="front-page-content-area">
    <header class="entry-header front-page-header custom-header">
        <h1 class="front-page-header-title"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inhabitent-logo-full.svg" /></h1>
    </header><!-- .entry-header -->
    <div class="front-page-sections">
        <section class="product-types">

            <h1 class="front-page-subtitle">Shop Stuff</h1>
            
            <div class="different-product-types">
        <?php
            $terms = get_terms(array(
                'order' => 'ASC',
                'taxonomy' => 'product-type')
            );

            foreach ( $terms as $term ) : ?>
                
                <div class="recent-product-entry">
                    <img  class="product-icons" 
                         src="<?php echo get_template_directory_uri() . '/images/icons/' . $term->slug . '.svg'; ?>" />
                    <p class='front-type-description'>
                        <?php echo $term->description; ?>
                    </p> 
                    <p class="special-button"><a href="<?php echo get_term_link( $term->slug, 'product-type' ); ?>">
                    <?php echo $term->name; ?></a></p>
                </div>
                
            <?php endforeach; wp_reset_postdata(); ?>
                
            </div>

        </section>

        <section class="latest-journal site-container">

            <h1 class="front-page-subtitle">Inhabitent Journal</h1>
            <div class="most-recent-journal">

        <?php

        $args = array(
            'order' => 'DESC',
            'posts_per_page' => 3,
            'post_type' => 'post',
            'orderby' => 'post_date',
        );

        $journal_posts = get_posts( $args ); // returns an array of posts

            foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
            <div class="recent-journal-entry">
                <a href="<?php echo get_permalink(); ?>" class="front-recent-thumbnail"><?php the_post_thumbnail('small'); ?></a>
                <div class="comments-title">
                    <div class = "front-recent-comments"><?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></div>
                    <a href="<?php echo get_permalink(); ?>" class="front-recent-title"><h2 class = "front-page-title"><?php the_title(); ?></h2></a>
                </div>
                <p class="general-button"><a href="<?php echo get_permalink(); ?>" class="front-read-more-button">Read more</a></p>
            </div>
        <?php endforeach; wp_reset_postdata(); ?>
        </div>
        </section>

        <section class="latest-adventures">
        
            <h1 class="front-page-subtitle">Latest Adventures</h1>
            <div class="most-recent-adventures">


              <!-- front page photos -->

            
            <style>
            .my-front-page-photos {
                width: 1120px;
                box-sizing: border-box;
                margin: 0 auto;
                align-content: center;
                display: flex}
                .three-images {
                    display: flex; width: 100%;
                    flex-direction: column;
                }
                #beach-bonfire {
                    flex-basis: 50%;
                }
                #canoe-girl {
                    width: 50%;
                    height: 50%;
                }
                #mountain-hikers {
                    width: 25%;
                }
                #nighy-sky {
                    width: 25%;
                }
                div#canoe-girl img {
                width: 100%;
            }
            #beach-bonfire {
                width: 100%;
            }
           .two-divs {
               display: flex;
               flex-direction: row;
           }
           div#canoe-girl img {
           height: 500px;}
           div#beach-bonfire img {
           width: 90%;
           height: 40%;
           margin-left: 15px;
           position: relative;
           }    
           #mountain-hikers img {
           width: 321px;
           height: 262px;
           } 
           .two-divs {
           display: flex;
           flex-direction: row;
           position: absolute;
           top: 2235px;
           left: 549px;
           width: 1100px;
           }
           div#night-sky img {
           width: 330px;
           height: 262px;
           }
           div#night-sky img {
           margin-left: 15px;
           }
           #mountain-hikers {
           width: 30%;
           }
            </style>    

             <div class="my-front-page-photos">

             <div id="canoe-girl">      
            <img width="100" height="100" src=<?php echo get_template_directory_uri() . '/images/canoe-girl.jpg'?>>
            <h3>Getting back to nature in a canoe</h3>
            <button id="readme">Read more</button>
            </div>

            <div class="three-images">
            <div id="beach-bonfire">
            <img width="100" height="100" src=<?php echo get_template_directory_uri() . '/images/beach-bonfire.jpg'?>>
            <h3>A night with friends at the beach</h3>
            <button id="readme">Read more</button>
            </div>

            <section class="two-divs">

            <div id="mountain-hikers">
            <img width="100" height="100" src=<?php echo get_template_directory_uri() . '/images/mountain-hikers.jpg'?>>
            <h3>Taking in the big view at big mountain</h3>
            <button id="readme">Read more</button>
            </div>

            <div id="night-sky">
            <img width="100" height="100" src=<?php echo get_template_directory_uri() . '/images/night-sky.jpg'?>>
            <h3>Star-gazing at the night sky</h3>
            <button id="readme">Read more</button>

            </section>

            
            </div>
            </div>
            </div>

            </div>

        <?php

        $args = array(
            'posts_per_page' => 5,
            'post_type' => 'adventures',
        );

        $adventure_posts = get_posts( $args ); 

            foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>
            <div class="recent-adventures">
                <div class="adventures-container">
                <img src="<?php echo CFS()->get( 'adventure_header_image' ) ?>" class="adventure-header-image" />
                <h2 class = "front-adventure-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p class="general-button"><a href="<?php echo get_permalink(); ?>" class="front-read-more-button">Read more</a></p>
                </div>
            </div>
        <?php endforeach; wp_reset_postdata(); ?>
        
        </div>
        <p class="special-button"><a href="<?php echo get_post_type_archive_link( 'adventures' ); ?>">More Adventures</a></p>
            
        </section>

    </div>
</div>

<?php get_footer(); ?>