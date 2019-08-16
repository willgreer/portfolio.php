<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link href="https://fonts.googleapis.com/css?family=Work+Sans:100&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.css" type="text/css" media="all">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php the_title(); ?> -WG</title>
	<?php wp_head();?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
	
	<div class="container">
	<a href="#"><img src="https://lh3.googleusercontent.com/XzC6rpjEfpaZn0RW3dHpimsYzK4Q6cHZLnHemUEhJPdmSIHPzRYaVFivcvXGplYnHl6L8i7Ki1YoRiV2a0d2VY0ndXQuPQiIA-bYtgfnuOegPEImLyNuuyBE2wIbcvGE4BzQQz2rQ2H0nCZr9rS-6TCrAlBd0H_cYhHFWDPbGu_fjI9V3dH5KfvVJq4W0co7orjOtGsvUpcmwdC6z5UGRubLGflDbMHWb19w-edeC5y_I5IETabUY-Df4N26CbcOvINkcPzY1QbIV5Ksg0TsG-tZbdSKHkC7MVlaYIWtzguonKeP6YZrXS7UvAW8sLe5MLte3wDIFBhAAS9bPK7GIlkk26DIeY8PThnnpkNgC0m0C_bVMPyfsATjQixVL9sh0Y2yLCcpgg-cTNs8BHNC1JXMwC_TTi3qgIcSyWwRZigTRX1H63XsleNdShu-VnIr3JrVlyvUmUu9miK0FkHzmknI2Ee1UN69e2iQ9e8NCKLJDWN77bYcpecGw1li9UknzjdMcCdLdWJBbL7kfOs20aTxiNWRTclBQUenv70b7ZA3I4sK2Nivxg09EImAKE_YO4hta7gwAVPXFeTNRnBUwwlazjVvS7Jt9fP0xqNmEpv7vsTksNJ9VeRAAUiK1z8OLlrCez5oAnhT_bYcRCO2FwHOBgL7ELs=w589-h898-no" class='profile-pic'></a>
	<a href="#"><img src="https://lh3.googleusercontent.com/8thvwHpyW2zqVZzkJNv_cqXWP1rL-TY9wXHB3bDXiKaCHJ-YrSXdnQuNRKefAgLkxKhjVnZ-o4TsUaxC06z6mwxIMAvq8JaIOYpaLnyJz-YGz6f_6_LIRoRwMQcD6gDhLRNKmEjfp29cHFfmgueZ9l6X1ZN9BszZtzcvzjDh4fznbDJw38h-gzev1SaHmCe1KZG83utvHf0HDSeWAzHQTft_wn2AlpatISZ_sUMRnmQajFRpnqckgakz_TLAs4U1kxM1Uii3ZaZiMODY9532hM3ZOggtX4CQ3oT9ymmYLzjNfOcV3S77KuwGewZEINn2hOTciCBw8-65hhhyg00PqoxeD1qylfFTfkoN_jiVQ2h3Z46e8bIwpdOlhi_XUK2kWDTUCxo0OJNbdPga4fF6b40o1CUujcBZPOF9qmCB4SQuyGJhqNHDW1n9BrcUBWTAalGdq8rACY03bwRH9VrsZ3y8oWM9KNC0lXL6vLr1OrpqE-UlWjyTbHRje9zipHcbXxf8OfY6a7syGZc4OXmojP2hSniqa0STOSwVOehid5WRz5Yrqzltx94PCClObFb8qhu5NhLbG_H6OxzZo0StbZfUp8QWAOaq9ZfnglV80tiaBzi5kHHxPXV1ItIb4Ko8tTGAsB2aaLTkDJatwMbflBkK80VidHM=w1096-h565-no" class="logo"></a>
	
	  <nav class="site-nav">
          
		  <?php 

		  $args = array(
			'theme-location' => 'primary'
		  );

		  ?>

		  <?php wp_nav_menu($args); ?>
	  </nav>
	  
  </div>
  <div class="bar"></div>
  <div class="bar2"></div>
</body>

<?php get_footer();?>



 

