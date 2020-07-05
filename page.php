<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */
get_header();
?>

<div class="content-area">
  <main>
    <div class="container">
      <div class="row">
        <?php
        //There are any posts
        if (have_posts()) :

          //Load posts loop
          while (have_posts()) {
            the_post();
        ?>
            <article>
              <h1><?php the_title() ?></h1>
              <div><?php the_content() ?></div>
            </article>
          <?php
          } else :
          ?>
          <p>Nothing to display</p>
        <?php
        endif;
        ?>
      </div>
    </div>
  </main>
</div>

<?php get_footer() ?>