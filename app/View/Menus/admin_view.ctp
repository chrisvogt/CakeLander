<div class="menus view">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Menu'); ?></h1>
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
                            <li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Menu'), array('action' => 'delete', $menu['Menu']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $menu['Menu']['id'])); ?> </li>
                        </ul>
                    </div><!-- end body -->
                </div><!-- end panel -->
            </div><!-- end actions -->
        </div><!-- end col md 3 -->

        <div class="col-md-9">			
            <table cellpadding="0" cellspacing="0" class="table table-striped">
                <tbody>
                    <tr>
                        <th><?php echo __('Id'); ?></th>
                        <td>
                            <?php echo h($menu['Menu']['id']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Landing Page'); ?></th>
                        <td>
                            <?php echo $this->Html->link($menu['LandingPage']['title'], array('controller' => 'landing_pages', 'action' => 'view', $menu['LandingPage']['id'])); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Html'); ?></th>
                        <td>
                            <?php echo h($menu['Menu']['html']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Created'); ?></th>
                        <td>
                            <?php echo h($menu['Menu']['created']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Modified'); ?></th>
                        <td>
                            <?php echo h($menu['Menu']['modified']); ?>
                            &nbsp;
                        </td>
                    </tr>
                </tbody>
            </table>

        </div><!-- end col md 9 -->

    </div>
</div>

