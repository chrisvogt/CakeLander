<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            <?php echo $title_for_layout; ?>
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <?php
        echo $this->Html->meta('icon');
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
        <?php echo $this->Html->css(['bootstrap.min', 'prettify-github', 'admin']); ?>
        <?php echo $this->Html->script('vendor/jquery-1.11.1.min'); ?>
        <?php echo $this->Html->script(['vendor/bootstrap.min', 'vendor/run_prettify'], array('block' => 'scriptBottom')); ?>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
          <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
            body, .navbar-brand { padding: 0; }
            .navbar-static-top { margin-bottom: 0; }
            #flashMessage { margin-top: 14px; }
        </style>
    </head>
    <body<?php echo ' ' . $bodyId; ?>>
        <?php echo $this->Element('admin_navigation'); ?>
        <div class="container-fluid">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>
        </div><!-- /.container -->
        <?php echo $this->fetch('scriptBottom'); ?>
        <?php echo $this->Js->writeBuffer(); ?>
    </body>
</html>
