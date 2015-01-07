<!DOCTYPE html>
<html lang="en">
  <head>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php
		echo $this->Html->meta('icon');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
  	<?php echo $this->Html->css(['bootstrap.min', 'main']); ?>
    
    <?php if (isset($landing_page['LandingPage']['logo'])) : ?>
    <style>
        .navbar-brand {
            background: url('<?php echo $landing_page['LandingPage']['logo']; ?>');
        }
    </style>
    <?php endif; ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <?php echo $this->Element('navigation'); ?> 

    <?php echo $this->Element('masthead/jumbotron'); ?> 
      
    <?php echo $this->Element('masthead/social'); ?> 
      
    <div class="container">

        <?php echo $this->Session->flash(); ?> 

        <?php echo $this->fetch('content'); ?> 

    </div><!-- /.container -->

    <?php echo $this->Html->script(['vendor/jquery-1.11.1.min.js', 'vendor/bootstrap.min', 'plugins', 'main']); ?>     
  </body>
</html>
