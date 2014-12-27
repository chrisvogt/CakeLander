<div class="endpoints form">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Edit Endpoint'); ?></h1>
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
                            <li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Endpoint.id')), array('escape' => false), __('Are you sure you want to delete %s?', $this->Form->value('Endpoint.name'))); ?></li>
                        </ul>
                    </div>
                </div>
            </div>			
        </div><!-- end col md 2 -->
        <div class="col-md-10">
            <?php echo $this->Form->create('Endpoint', array('role' => 'form')); ?>

            <div class="form-group">
                <?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('content_id', array('class' => 'form-control', 'placeholder' => 'Content Id')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('url', array('class' => 'form-control', 'placeholder' => 'Url')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
            </div>

            <?php echo $this->Form->end() ?>

        </div><!-- end col md 12 -->
    </div><!-- end row -->
</div>
