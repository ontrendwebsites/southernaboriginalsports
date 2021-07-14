<?php 
/* Template Name: Full width */


get_header(); ?>

      <div id="content">

        <div id="inner-content" class="wrap cf">

            <main id="main" class="m-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

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
