<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initialscale=1">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head() ?>
  </head>

<body>
	<nav class="navbar navbar-dark bg-dark">
 		 <a class="navbar-brand" href="#">Mi Primer Tema</a>
 		<ul class="nav justify-content-end">
		  <li class="nav-item">
		    <a class="nav-link active" href="index.php">Home</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="page-blog.php">blog</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="index.php">Servicios</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="#">Contacto</a>
		  </li>
		</ul>
	</nav>

	