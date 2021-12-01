<?php 
/* Template Name: Full width */


get_header(); ?>

      <div id="content">

        <div id="inner-content" class="wrap cf">

            <main id="main" class="m-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

<?php
// Check rows exists.
if( have_rows('two_column_text_image') ):

    // Loop through rows.
    while( have_rows('two_column_text_image') ) : the_row();

        // Load sub field value.
        $image = get_sub_field('image');
        $content = get_sub_field('content');
        $extra = get_sub_field('extra_full_width_content', false, false);
        // Do something...


        echo '<div class="two-column-intro o-grid-layout o-grid-layout--columns-two-default gap-2rem">';
          echo '<div class="content">' . $content . '</div>';
          // check if left or right
          if( get_sub_field('left_right') ) {
            echo '<img style="grid-column: 1; grid-row: 1" src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" />';
          } else {
            echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" />';
          }
          echo '</div>';

          if( $extra ) {
            echo '<hr class="blank-space" /><div class="intro-full-width">' . $extra . '</div>';
          }

    // End loop.
    endwhile;
endif;
?>

                <section class="entry-content cf" itemprop="articleBody">
                  <?php
                    the_content();
                  ?>
                </section>

              </article>

              <?php endwhile; endif; ?>

            </main>

        </div>

      </div>

<?php get_footer(); ?>

