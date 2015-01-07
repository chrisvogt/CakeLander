<div class="row">
    <div class="col-xs-6 col-md-6">
        <div class="panel status panel-success">
            <div class="panel-heading">
                <?php
                echo $this->Html->link(
                    '<i class="glyphicon glyphicon-list-alt"></i>',
                    array('controller' => 'landing_pages', 'action' => 'index', 'admin' => true),
                    array(
                        'escape' => false,
                        'class' => 'btn btn-default btn-lg btn-block panel-title'
                )); ?> 
            </div>
            <div class="panel-body text-center">
                <strong><?php echo $counts['landing_pages']; ?> <?php echo __n('landing page', 'landing pages', $counts['landing_pages']); ?></strong>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-6">
        <div class="panel status panel-primary">
            <div class="panel-heading">
                <?php
                echo $this->Html->link(
                    '<i class="glyphicon glyphicon-user"></i>',
                    '/admin/users',
                    array(
                        'escape' => false,
                        'class' => 'btn btn-default btn-lg btn-block panel-title'
                )); ?> 
            </div>
            <div class="panel-body text-center">
                <strong><?php echo $counts['users']; ?> <?php echo __n('user', 'users', $counts['users']); ?></strong>
            </div>
        </div>
    </div>
</div>
