<?php
remove_filter('the_content','wpautop');
function jjcm_gallery_dropdown($atts){
    extract(shortcode_atts(array(
        'title' => '',
        'description' => '',
        'offset' => '-10px',
        'url' => ''), $atts ));
?>

<div class="example">
    <div class="description">
        <hr>
        <strong><?php echo $atts['title']?></strong><br/>
<?php echo $atts['description']?>
    </div>
    <div class="imageShadowContrast">
        <div class="image imageShadow">
            <div class="imageOffset" style="position: relative;">
            <img class ="img" width="765px" style="position: relative; top: <?php echo $atts['offset']?>;" src="<?php echo $atts['url']?>">
            </div>
            <div class="overlay">
                <div class="gloss"> </div>
                <div class="shade"> </div>
            </div>
        </div>
    </div>
</div>
<?php }
add_shortcode('gallery_dropdown', 'jjcm_gallery_dropdown');

function jjcm_gallery_container_start($atts){
    extract(shortcode_atts(array(
        'title' => 'art'), $atts ));
?>

<div class="category" id="cat_<?php echo $atts['title']?>"> 
    <div class="background"> 
        <div class="label"> 
            <h2 class="catlabel"><?php echo $atts['title']?></h2> 
            <div class="top"> 
            </div> 
            <div class="bot"> 
            </div> 
        </div> 
        <div class="content"> 
            <div class="top"> 
            </div> 
            <div class="bot"> 
            </div> 
        </div> 
    </div> 
<div class="container"> 


<?php
}
add_shortcode('gallery_start', 'jjcm_gallery_container_start');

function jjcm_gallery_container_end($atts){ ?>
    </div> 
    </div> 
<?php
}
add_shortcode('gallery_end', 'jjcm_gallery_container_end');
?>
