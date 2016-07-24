<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head>
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<?php print $styles; ?>
<?php print $scripts; ?>
<!--[if lt IE 9]><script src="<?php print base_path() . drupal_get_path('theme', 'nexus') . '/js/html5.js'; ?>"></script><![endif]-->
<link rel="stylesheet" type="text/css" href="http://localhost/drupal/themes/nexus/css/CreativeLinkEffects/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="http://localhost/drupal/themes/nexus/css/CreativeLinkEffects/css/demo.css" />
<link rel="stylesheet" type="text/css" href="http://localhost/drupal/themes/nexus/css/CreativeLinkEffects/css/component.css" />
<link href='http://localhost/drupal/themes/nexus/css/main2.css' rel='stylesheet' />
<link rel="stylesheet" href="http://localhost/drupal/themes/nexus/css/main.css?v=0" />
<link rel="stylesheet" href="http://localhost/drupal/themes/nexus/style.css" />
<link rel="stylesheet" href="http://localhost/drupal/themes/nexus/css/bootstrap.min.css" />
<link rel="stylesheet" href="http://localhost/drupal/themes/nexus/css/flexslider.css" />
<script src="http://localhost/drupal/themes/nexus/js/CreativeLinkEffects/js/modernizr.custom.js"></script>
</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
<div id="container">
    <div id="main" role="main"></div>
</div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <script type="text/javascript" src="http://localhost/drupal/themes/nexus/js/jquery.js"></script>
	<script type="text/javascript" src="http://localhost/drupal/themes/nexus/js/Three.js"></script>
	<script type="text/javascript" src="http://localhost/drupal/themes/nexus/js/RequestAnimationFrame.js"></script>
	<script type="text/javascript" src="http://localhost/drupal/themes/nexus/js/starfield.js"></script>
	<script type="text/javascript" src="http://localhost/drupal/themes/nexus/js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="http://localhost/drupal/themes/nexus/js/slide.js"></script>
</body>
</html>