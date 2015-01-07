<div class="landingPages form">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Edit Landing Page'); ?></h1>
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
                            <li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('LandingPage.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('LandingPage.id'))); ?></li>
                        </ul>
                    </div>
                </div>
            </div>			
        </div><!-- end col md 2 -->
        <div class="col-md-10">
            <?php echo $this->Form->create('LandingPage', array('role' => 'form')); ?>

            <div class="form-group">
                <?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('title', array('class' => 'form-control', 'placeholder' => 'Title')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('domain', array('class' => 'form-control', 'placeholder' => 'Domain')); ?>
            </div>
            <div class="row">
                <div class="col-md-10 form-group">
                    <?php echo $this->Form->input('logo', array('class' => 'form-control', 'placeholder' => 'Logo')); ?>
                </div>
                <div class="col-md-2">
                    <?php
                    if ($this->request->data['LandingPage']['logo']) {
                        echo $this->Html->image($this->request->data['LandingPage']['logo']);
                    } ?>
                </div>
            </div>
            <div class="form-group">
                <?php echo $this->Wysiwyg->input('Menu.html', array('placeholder' => 'Menu content', 'label' => 'Menu HTML'), $editorOptions); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Wysiwyg->input('social', array('class' => 'markitup', 'placeholder' => 'Social HTML', 'label' => 'Social HTML'), $editorOptions); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('headline', array('class' => 'form-control', 'placeholder' => 'Headline')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('subhead', array('class' => 'form-control', 'placeholder' => 'Subhead')); ?>
            </div>
            <div class="form-group">
                <label>Body HTML</label>
                <?php echo $this->Wysiwyg->textarea('body', array('class' => 'markitup', 'placeholder' => 'Body'), $editorOptions); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
            </div>

            <?php echo $this->Form->end() ?>

        </div><!-- end col md 10 -->
    </div><!-- end row -->
</div>
<?php echo $this->Js->buffer('$(".markitup").markItUp(mySettings);'); ?>
