<div class="routes view">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Route'); ?></h1>
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
                            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Route'), array('action' => 'edit', $route['Route']['id']), array('escape' => false)); ?> </li>
                            <li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Route'), array('action' => 'delete', $route['Route']['id']), array('escape' => false), __('Are you sure you want to delete %s?', $route['Route']['name'])); ?> </li>
                        </ul>
                    </div><!-- end body -->
                </div><!-- end panel -->
            </div><!-- end actions -->
        </div><!-- end col md 2 -->

        <div class="col-md-10">			
            <table cellpadding="0" cellspacing="0" class="table table-striped">
                <tbody>
                    <tr>
                        <th><?php echo __('Name'); ?></th>
                        <td>
                            <?php echo h($route['Route']['name']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Content'); ?></th>
                        <td>
                            <?php echo $this->Html->link($route['Content']['title'], array('controller' => 'contents', 'action' => 'view', $route['Content']['id'])); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Url'); ?></th>
                        <td>
                            <?php echo h($route['Route']['domain']); ?>
                            <a href="<?php echo h($route['Route']['domain']); ?>" title="<?php echo h($route['Route']['name']); ?>" target="_new"><i class="glyphicon glyphicon-new-window">&nbsp;</i></a>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Created'); ?></th>
                        <td>
                            <?php echo h($route['Route']['created']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Modified'); ?></th>
                        <td>
                            <?php echo h($route['Route']['modified']); ?>
                            &nbsp;
                        </td>
                    </tr>
                </tbody>
            </table>

        </div><!-- end col md 9 -->

    </div>
</div>

