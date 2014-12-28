<div class="contents form">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Edit Content'); ?></h1>
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
                            <li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Content.id')), array('escape' => false), __('Are you sure you want to delete %s?', $this->Form->value('Content.title'))); ?></li>
                        </ul>
                    </div>
                </div>
            </div>			
        </div><!-- end col md 2 -->
        <div class="col-md-10">
            <?php echo $this->Form->create('Content', array('role' => 'form')); ?>

            <div class="form-group">
                <?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('title', array('class' => 'form-control', 'placeholder' => 'Title')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('logo_href', array('class' => 'form-control', 'placeholder' => 'Logo URL', 'label' => 'Logo URL')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Wysiwyg->input('slider', array('class' => 'markitup')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Wysiwyg->input('social', array('class' => 'markitup')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('headline', array('class' => 'form-control', 'placeholder' => 'Headline')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Wysiwyg->input('subhead', array('class' => 'markitup')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Wysiwyg->input('body', array('class' => 'markitup')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
            </div>
            <?php echo $this->Form->end() ?>
        </div><!-- end col md 10 -->
    </div><!-- end row -->
</div>
