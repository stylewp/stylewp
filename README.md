

stylewp - Bootstrap Wordpress Starter Theme
===

Rename
-----------
1.stylewp to theme name
2.style css bower js names and description

Getting Started
---------------
1. npm install
2. bower install
3. gulp icons


What's next
---------------

What's next
- Style the comments
- General style
- Single Posts and Pages
- Archive
- 404
- Menu Style
- Header and Footer Style
- Screenshot



Final Step
----------

When you theme is 100% done navigate to /inc/scripts.php and change the call to your stylesheet to use the minified version that Gulp create with the following code:

wp_enqueue_style( 'strapped-style', get_template_directory_uri() . '/style.min.css' );
