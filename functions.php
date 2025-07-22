<?php

if ( ! function_exists( 'mygreentaste_include_tag_manager_head' ) ) {
	function mygreentaste_include_tag_manager_head() {
        echo "<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TWZPLJG6');</script>
<!-- End Google Tag Manager -->";
	}
}
add_action( 'wp_head', 'wpdocs_pingbackurl_example' );