<?php
/*
Template Name: Blank
*/
?>
<?php get_header(); ?>
<div id="primary"> 
  <div class="inside "> 
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
    <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
    <?php endwhile; endif; ?>
  </div>
</div>
<style type="text/css">
.inside{
width: 100%;
background-color: #000;

}
.inside img{
padding: 3px;
}
</style>
<?php get_footer(); ?>

