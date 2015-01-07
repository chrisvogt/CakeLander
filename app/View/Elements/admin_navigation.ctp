<div class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php
            echo $this->Html->link($this->Html->image('http://res.cloudinary.com/chrisvogt/image/upload/v1419898400/projects/cakelander/logo-cakelander.png'), '/', array(
                'class' => 'navbar-brand',
                'width' => '168',
                'height' => '60',
                'escape' => false
            ));
            ?>
        </div>
        <?php if ($this->Session->read('Auth.User')) : ?>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><?php echo $this->Html->link('Dashboard', '/admin'); ?> </li>  
                    <li><?php echo $this->Html->link('Landing Pages', array('controller' => 'landing_pages', 'action' => 'index', 'admin' => true)); ?> </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                                class="glyphicon glyphicon-user"></span>Admin <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span>My Account</a></li>
                            <li class="divider"></li>
                            <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-off"></span> Logout', '/logout', array('escape' => false)); ?></li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        <?php endif; ?>
    </div>
</div>
