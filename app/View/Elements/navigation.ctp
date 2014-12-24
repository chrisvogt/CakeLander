    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php echo $this->Html->link('LanderSWC', '/', array('class' => 'navbar-brand')); ?> 
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><?php
                echo $this->Html->link(
                    'Endpoints',
                    '/endpoints',
                    array('class' => 'button')
                ); ?></li>
            <li><?php
                echo $this->Html->link(
                    'Contents',
                    '/contents',
                    array('class' => 'button')
                ); ?></li>
            <li><?php
                echo $this->Html->link(
                    'Menus',
                    '/menus',
                    array('class' => 'button')
                ); ?></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>