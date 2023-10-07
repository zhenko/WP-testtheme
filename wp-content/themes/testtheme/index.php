<?php get_header(); ?>
<main>
  <div class="content">
    Text content
    <div>

      <?php
            // Виведення контенту сторінки
            while (have_posts()) :
              the_post();
              the_content();
            endwhile;
            ?>
            </div>
  </div>
</main>
<?php get_footer(); ?>