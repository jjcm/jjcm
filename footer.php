<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
    var pageTracker = _gat._getTracker("UA-13057743-1");
    pageTracker._setDomainName(".jjcm.org");
    pageTracker._trackPageview();
} catch(err) {}

var presence = false;
$('#presence').click(function(){
    $('.mainlinks').animate({opacity: presence ? 1 : 0});
    $('.subnav').animate({width: presence ? 0 : 410}); 
    presence = !presence;
});
</script>
<?php wp_footer(); ?>
</body>
</html>
