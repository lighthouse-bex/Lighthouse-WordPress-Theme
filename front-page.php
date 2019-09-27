<?php get_header(); ?>

<main>
  <?php while (have_posts()) : the_post(); ?>

    <?php include(locate_template('src/template_parts/hero.php')) ?>

    <?php $globalBlocksServiceGroup = getPostMeta('blocks_service_group') ?>
    <?php $globalBlocksServiceLayout = getPostMeta('blocks_service_layout') ?>
    <?php include(locate_template('src/template_parts/block_section_services.php')) ?>

    <?php include(locate_template('src/template_parts/contact_us_banner.php')) ?>

    <?php $globalCaseStudyIds = getPostMeta('case_study_list') ?>
    <?php include(locate_template('src/template_parts/block_section_case_study_large.php')) ?>

  <?php endwhile; ?>
</main>

<?php get_footer(); ?>