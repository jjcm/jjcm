<html>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title> 
<?php bloginfo('name'); ?>
<?php if ( is_single() ) { ?>
&raquo; Blog Archive 
<?php } ?>
<?php wp_title(); ?>
</title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<!-- leave this for stats -->
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/reset.css" type="text/css"> 
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/jquery-1.4.1.min.js"></script>
</head>
<body>
<div id="titlebar">
    <div id="jjcm">
        <a href="http://jjcm.org">
            <div id="black">jjc</div><div id="red">m</div>
        </a>
    </div>
    <nobr id="navigation">
        <a>services</a>
        <a>blog</a>
        <a>contact</a>
    </nobr>
</div>
<!-- [END] #header -->
