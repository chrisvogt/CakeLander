<div class="row">
    <div class="col-xs-6 col-md-3">
        <div class="panel status panel-success">
            <div class="panel-heading">
                <?php
                echo $this->Html->link(
                    '<i class="glyphicon glyphicon-cloud"></i>',
                    '/admin/routes',
                    array(
                        'escape' => false,
                        'class' => 'btn btn-default btn-lg btn-block panel-title'
                )); ?> 
            </div>
            <div class="panel-body text-center">
                <strong><?php echo $counts['routes']; ?> routes</strong>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-3">
        <div class="panel status panel-info">
            <div class="panel-heading">
                <?php
                echo $this->Html->link(
                    '<i class="glyphicon glyphicon-edit"></i>',
                    '/admin/contents',
                    array(
                        'escape' => false,
                        'class' => 'btn btn-default btn-lg btn-block panel-title'
                )); ?> 
            </div>
            <div class="panel-body text-center">
                <strong><?php echo $counts['contents']; ?> contents</strong>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-3">
        <div class="panel status panel-default">
            <div class="panel-heading">
                <?php
                echo $this->Html->link(
                    '<i class="glyphicon glyphicon-th-list"></i>',
                    '/admin/menus',
                    array(
                        'escape' => false,
                        'class' => 'btn btn-default btn-lg btn-block panel-title'
                )); ?> 
            </div>
            <div class="panel-body text-center">
                <strong><?php echo $counts['menus']; ?> menus</strong>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-3">
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
                <strong><?php echo $counts['users']; ?> users</strong>
            </div>
        </div>
    </div>
</div>
