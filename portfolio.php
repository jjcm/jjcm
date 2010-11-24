<?php
/*
Template Name: Portfolio
*/
?>
<?php get_header(); ?>
<div id="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>
<script type="text/javascript">
    $(".example").toggle(
        function(){
            img = $(this).find(".img");
            img_height = img.attr("height");
            $(this).animate({height: img_height}); 
            //offset the image by the proper height. Do this so we can hold this variable;
            $(this).find(".imageOffset").animate({top: img.css("top").replace('-','')});
            $(this).find(".overlay").animate({opacity: 0.25});
            desc = $(this).find(".description");
            desc.fadeIn(1000);
        }, 
        function(){
            var parentDiv = $(this);
            $(this).find(".description").fadeOut(250, function(){closePreview(parentDiv)}
            );
        }
    );
    function closePreview(parentDiv){
        parentDiv.animate({height: '72px'});
        parentDiv.find(".imageOffset").animate({top: '0px'});
        parentDiv.find(".overlay").animate({opacity: 1});
    }

</script>
<?php get_footer(); ?>
