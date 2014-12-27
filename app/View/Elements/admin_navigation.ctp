    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php echo $this->Html->link($this->Html->image('logo-cakelander'),
                  '/admin',
                  array(
                      'class'   => 'navbar-brand',
                      'width'   => '168',
                      'height'  => '60',
                      'escape'  => false
                  )); ?> 
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><?php echo $this->Html->link('Contents', '/admin/contents'); ?> </li>
            <li><?php echo $this->Html->link('Endpoints', '/admin/endpoints'); ?> </li>
            <li><?php echo $this->Html->link('Menus', '/admin/menus'); ?> </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>