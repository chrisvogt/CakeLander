<div class="endpoints form">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Add Endpoint'); ?></h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php echo $this->Form->create('Endpoint', array('role' => 'form')); ?>

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
