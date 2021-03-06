<?php
/*
  Plugin Name: Chapter 2 - Plugin Page Header Output
  Plugin URI:
  Description: Declares a plugin that will be visible in the Wordpress Admin
  interface
  Version: 1.0
  Author: Stephen Punwasi
  License: GPLv2
*/


add_action('wp_head', 'ch2pho_page_header_output');
function ch2pho_page_header_output() {?>
  <script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol ) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js'
    \n\ type='text/javascript'%3E%3C/script%3E"));
  </script>
  <script type="text/javascript">
    try {
      var pageTracker = _gat.getTracker("UA-xxxxxx-x");
      pageTracker._trackPageview();
    } catch(err){}
  </script>
<?php }

?>
