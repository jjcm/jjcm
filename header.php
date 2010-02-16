<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title> 
<?php bloginfo('name'); ?>
<?php if ( is_single() ) { ?>
&raquo; Blog Archive 
<?php } ?>
<?php wp_title(); ?>
</title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<!-- leave this for stats -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<style type="text/css">
	.story .details .read-on{ background:url(<?php bloginfo('stylesheet_directory'); ?>/images/readon_black.gif) 100% 60% no-repeat; }
	#comments .pingback cite .author{ background:url(<?php bloginfo('stylesheet_directory'); ?>/images/trackback_pingback.gif) 100% 0 no-repeat; }
	#footer .inside{ background:url(<?php bloginfo('stylesheet_directory'); ?>/images/footer_black.gif) 50% 0 repeat-x; ?>
</style>
<?php wp_head(); ?>
</head>
<body>
<div id="header"> 
  <div class="inside"> 
    <h2><a href="<?php echo get_settings('home'); ?>/"> 
      <?php bloginfo('name'); ?>
      </a></h2>
    <p class="description"> 
      <?php bloginfo('description'); ?>
    </p>
  </div>
</div>
<!-- [END] #header -->
