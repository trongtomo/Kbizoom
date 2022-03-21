<?php get_header(); ?>
<!-- <?php while (have_posts()) : the_post(); ?>
  <article class="<?php post_class(); ?>" id="post-<?php the_ID(); ?>">
    <h2 class="entry-title"><?php the_title(); ?></h2>
    <?php if (!is_page()):?>
      <section class="entry-meta">
      <p>Posted on <?php the_date();?> by <?php the_author();?></p>
      </section>
    <?php endif; ?>
    <section class="entry-content">
      <?php the_content(); ?>
    </section>
    <section class="entry-meta"><?php if (count(get_the_category())) : ?>
      <span class="category-links">
        Posted under: <?php echo get_the_category_list(', '); ?>
      </span>
    <?php endif; ?></section>
  </article>
<?php endwhile; ?> -->

<div class="row w-100">
        <div class="col position-relative" style="left: 330px">
          <div class="row">
            <div class="col-md-3">
              <img
                class="rounded mx-auto d-block"
                src="<?php echo get_template_directory_uri(); ?>/images/istockphoto-1331042722-170667a.jpg"
              />
            </div>
            <div class="col-md-3">
              <img
                class="rounded mx-auto d-block"
                src="<?php echo get_template_directory_uri(); ?>/images/panda-1236875__480.jpg"
              />
            </div>
          </div>
        </div>
        <div class="col-md-2 position-relative" style="right: 450px">
          <img
            class="rounded mx-auto d-block"
            src="<?php echo get_template_directory_uri(); ?>/images/istockphoto-1331042722-170667a.jpg"
          />
        </div>
        <!--End of Banner-->
      </div>
      <!--3 Block-->
      <div class="container_swiper">
        <div class="swiper mySwiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper" style="top: 20px">
            <!-- Slides -->
            <div class="swiper-slide">
              <img
                class="rounded mx-auto d-block"
                src="<?php echo get_template_directory_uri(); ?>/images/panda-3555554__340.jpg"
              />
            </div>
            <div class="swiper-slide">
              <img
                class="rounded mx-auto d-block"
                src="<?php echo get_template_directory_uri(); ?>/images/panda-g08b815a74_1920.jpg"
              />
            </div>
            <div class="swiper-slide">
              <img
                class="rounded mx-auto d-block"
                src="<?php echo get_template_directory_uri(); ?>/images/panda-g5e65010a0_1920.jpg"
              />
            </div>
            <div class="swiper-slide">
              <img
                class="rounded mx-auto d-block"
                src="<?php echo get_template_directory_uri(); ?>/images/panda-3555554__340.jpg"
              />
            </div>
            <div class="swiper-slide">
              <img
                class="rounded mx-auto d-block"
                src="<?php echo get_template_directory_uri(); ?>/images/panda-g08b815a74_1920.jpg"
              />
            </div>
            <div class="swiper-slide">
              <img
                class="rounded mx-auto d-block"
                src="<?php echo get_template_directory_uri(); ?>/images/panda-g5e65010a0_1920.jpg"
              />
            </div>
          </div>
          <!-- If we need pagination -->
          <div class="swiper-pagination"></div>
          <!--End of 3 block-->
        </div>
      </div>
      <!--Banner-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>