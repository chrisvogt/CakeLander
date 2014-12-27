<div class="contents form">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Add Content'); ?></h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?php echo $this->Form->create('Content', array('role' => 'form')); ?>

            <div class="form-group">
                <?php echo $this->Form->input('title', array('class' => 'form-control', 'placeholder' => 'Title')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('logo_href', array('class' => 'form-control', 'placeholder' => 'Logo URL', 'label' => 'Logo URL')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('slider', array('class' => 'form-control', 'placeholder' => 'Slider')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('social', array('class' => 'form-control', 'placeholder' => 'Social')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('headline', array('class' => 'form-control', 'placeholder' => 'Headline')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('subhead', array('class' => 'form-control', 'placeholder' => 'Subhead')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('body', array('class' => 'form-control', 'placeholder' => 'Body')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
            </div>
            <?php echo $this->Form->end() ?>
        </div><!-- end col md 12 -->
    </div><!-- end row -->
</div>
