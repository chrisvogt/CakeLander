<div class="menus form">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Add Menu'); ?></h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <div class="actions">
                <div class="panel panel-default">
                    <div class="panel-heading">Actions</div>
                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
                            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Menus'), array('action' => 'index'), array('escape' => false)); ?></li>
                        </ul>
                    </div>
                </div>
            </div>			
        </div><!-- end col md 2 -->
        <div class="col-md-10">
            <?php echo $this->Form->create('Menu', array('role' => 'form')); ?>
            <div class="form-group">
                <?php echo $this->Form->input('content_id', array('class' => 'form-control', 'placeholder' => 'Content Id')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('html', array('class' => 'form-control', 'placeholder' => 'Html')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('location', array('class' => 'form-control', 'placeholder' => 'Location')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('element', array('class' => 'form-control', 'placeholder' => 'Element')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
            </div>
            <?php echo $this->Form->end() ?>
        </div><!-- end col md 10 -->
    </div><!-- end row -->
</div>
