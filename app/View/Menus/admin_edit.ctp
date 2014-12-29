<div class="menus form">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Edit Menu'); ?></h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="actions">
                <div class="panel panel-default">
                    <div class="panel-heading">Actions</div>
                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
                            <li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Menu.id')), array('escape' => false), __('Are you sure you want to delete the menu for %s?', $contents[1])); ?></li>
                        </ul>
                    </div>
                </div>
            </div>			
        </div><!-- end col md 3 -->
        <div class="col-md-9">
            <?php echo $this->Form->create('Menu', array('role' => 'form')); ?>

            <div class="form-group">
                <?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('content_id', array('class' => 'form-control', 'placeholder' => 'Content Id')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Wysiwyg->input('html', array('class' => 'markitup'), $editorOptions); ?>
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

        </div><!-- end col md 12 -->
    </div><!-- end row -->
</div>
<?php echo $this->Js->buffer('$(".markitup").markItUp(mySettings);'); ?>