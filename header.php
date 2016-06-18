
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

   <!-- <title>Blog Template for Bootstrap</title> -->

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_directory');?>/blog.css" /*to get full URL*/ rel="stylesheet">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Cabin:500' rel='stylesheet' type='text/css'>
	

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!--[endif]-->
	
	<?php wp_head(); ?>
  </head>
  
  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <?php wp_list_pages('&title_li='); ?>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title"> <a href="<?php bloginfo('wpurl');?>"> <?php echo get_bloginfo('name'); ?></a><span class="lead blog-description"><?php echo str_repeat('&nbsp;', 5) . get_bloginfo('description'); ?>.</span></h1>
      </div>