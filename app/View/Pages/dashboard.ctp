<a class="forkme" href="https://github.com/chrisvogt/CakeLander"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/365986a132ccd6a44c23a9169022c0b5c890c387/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67" alt="Fork CakeLander on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png"></a>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="page-header">
            <h1><i class="glyphicon glyphicon-dashboard">&nbsp;</i>Admin Dashboard </h1>
        </div>
    </div><!-- /headline -->
    <div class="col-md-8 col-md-offset-2">
        <?php echo $this->Element('dashboard/status_boxes'); ?>
    </div>
</div><!-- /.row -->
<div class="row">
    <div class="col-md-6 col-md-offset-2">
        <h2>Welcome to CakeLander!</h2>
        <p class="lead">Congratulations on choosing CakeLander for your next landing page project!
        <p>CakeLander was built as a quick and simple solution for managing landing pages and their contents. Attach <strong>contents</strong> to different <strong>routes</strong> to define the content presented on your pages. Build and connect <strong>menus</strong> to provide top navigation links away from your landing page.</p>
        <p>You are using CakeLander <label class="label label-warning">v0.0.0</label>. This is a prerelease! This version of CakeLander is intended to be self-hosted on your own server, and is built on the CakePHP framework. If you are interested in learning more or contributing to the project be sure to check out <a href="https://github.com/chrisvogt/CakeLander" title="CakeLander on Github">CakeLander on Github</a>.
    </div>
    <div class="col-md-2">
        <div class="sidebar-nav">
            <div class="well">
                <ul class="nav nav-list">
                  <li class="nav-header">Admin Menu</li>
                  <li class="active"><?php echo $this->Html->link('<i class="glyphicon glyphicon-dashboard"></i> Dashboard', '/admin', array('escape' => false)); ?></li>
                  <li><?php echo $this->Html->link('<i class="glyphicon glyphicon-list-alt"></i> Landing Pages <span class="badge badge-info">' . $counts['landing_pages'] . '</span>', array('controller' => 'landing_pages', 'action' => 'index', 'admin' => true), array('escape' => false)); ?></li>
                  <li><?php echo $this->Html->link('<i class="glyphicon glyphicon-user"></i> Users', '/admin/users', array('escape' => false)); ?></li>
                  <li class="divider"></li>
                  <li><?php echo $this->Html->link('<i class="glyphicon glyphicon-off"></i> Logout', '/logout', array('escape' => false)); ?></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- /.row -->