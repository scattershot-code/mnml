<?php /* MNML 1.0 Theme Header */
<!DOCTYPE HTML> 

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

/*Always have wp_head() just before </head> otherwise plugins might break.*/
<?php wp_head(); ?>
</head>
<body>
<div id="page">