<div class="landingPages form">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Add Landing Page'); ?></h1>
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
                            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Landing Pages'), array('action' => 'index'), array('escape' => false)); ?></li>
                        </ul>
                    </div>
                </div>
            </div>			
        </div><!-- end col md 2 -->
        <div class="col-md-10">
            <?php echo $this->Form->create('LandingPage', array('role' => 'form')); ?>

            <div class="form-group">
                <?php echo $this->Form->input('title', array('class' => 'form-control', 'placeholder' => 'Title')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('domain', array('class' => 'form-control', 'placeholder' => 'Domain')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('logo', array('class' => 'form-control', 'placeholder' => 'Logo')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Wysiwyg->input('Menu.html', array('placeholder' => 'Menu content'), $editorOptions); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Wysiwyg->input('social', array('class' => 'markitup', 'placeholder' => 'Social', 'label' => 'Social HTML'), $editorOptions); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('headline', array('class' => 'form-control', 'placeholder' => 'Headline')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('subhead', array('class' => 'form-control', 'placeholder' => 'Subhead')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Wysiwyg->input('body', array('class' => 'markitup', 'placeholder' => 'Body', 'label' => 'Body HTML'), $editorOptions); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-success')); ?>
            </div>

            <?php echo $this->Form->end() ?>

        </div><!-- end col md 10 -->
    </div><!-- end row -->
</div>
<?php echo $this->Js->buffer('$(".markitup").markItUp(mySettings);'); ?>