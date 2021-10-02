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
        // Do something...

        

        // check if left or right
        if( get_sub_field('left_right') ) {
          echo '<div class="two-column-intro o-grid-layout o-grid-layout--columns-two-default gap-2rem">';
          echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" />';
          echo '<div class="content">' . $content . '</div>';
          echo '</div>';
        } else {
          echo '<div class="two-column-intro o-grid-layout o-grid-layout--columns-two-default gap-2rem">';
          echo '<div class="content">' . $content . '</div>';
          echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" />';
          echo '</div>';
        }

    // End loop.
    endwhile;
endif;
?>

                <?php
                $hero = get_field('two_column_intro');
                if( $hero ): ?>
                    <div class="two-column-intro o-grid-layout o-grid-layout--columns-two-default gap-2rem">
                        <div class="content">
                            <h2 style="padding-bottom: 1rem;"><?php echo $hero['heading']; ?></h2>
                            <?php echo $hero['intro_content']; ?>
                        </div>
                        <img src="<?php echo esc_url( $hero['image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['image']['alt'] ); ?>" />
                    </div>
                <?php endif; ?>

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

