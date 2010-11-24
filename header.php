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
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/jquery.scrollTo-min.js"></script>
</head>
<body style="background-color: #1a1817;"> <!--load the bg color here so there's not a white flash while the css loads. Inline bg colors... the curse of a dark themed site --!>
<div id="header">
    <div class="content">
        <a href="http://jjcm.org">
            <h1><span>jjcm</span></h1>
        </a>
        <ul class="nav">
            <div style="float: left;" class="mainlinks">
                <li><a href="mailto:j+site@jjcm.org">contact</a></li>
                <li><a href="http://englishhard.com/">blog</a></li>
                <li><a href="#print" onclick="$.scrollTo('#cat_print', 400);">print design</a></li>
                <li><a href="#web" onclick="$.scrollTo('#cat_web', 400);">web design</a></li>
                <li><a href="#logo" onclick="$.scrollTo('#cat_logo', 400);">logo design</a></li>
            </div>
            <li><a id="presence" href="#">&lt; presence</a>
                <ul class="subnav">
                    <div class="altlinks">
                        <li><a href="http://facebook.com/pwnies">facebook</a></li>
                        <li><a href="http://pwnies.deviantart.com">deviantArt</a></li>
                        <li><a href="http://news.ycombinator.com/user?id=jjcm">Hacker News</a></li>
                        <li><a href="http://slashdot.org/~pwnies/">/.</a></li>
                        <li><a href="https://github.com/pwnies">github</a></li>
                    </div>
                </ul>

            </li>
    </div>
</div>
<!-- [END] #header -->
