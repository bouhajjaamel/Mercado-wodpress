<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php bloginfo('name'); ?> 
        <?php bloginfo('description'); ?>
    </title>

</head>
<body>
<header>
    <div>
</header>
</div>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/image/flow.png" witdh="120px"; height="55px";>
<?php wp_nav_menu( array( 'theme_location' => 'menu_principal' ) ); ?>
	

 <!-- ajout de ma nouvelle widget area -->
 <?php if ( is_active_sidebar( 'new-widget-area' ) ) : ?>
 <div id="header-widget-area" class="nwa-header-widget widget-area" role="complementary">
 <?php dynamic_sidebar( 'new-widget-area' ); ?>
 </div>
 <?php endif; ?>


 <!-- fin nouvelle widget area -->