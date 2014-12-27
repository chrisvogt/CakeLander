<div class="contents view">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Content'); ?></h1>
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
                            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Content'), array('action' => 'edit', $content['Content']['id']), array('escape' => false)); ?> </li>
                            <li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Content'), array('action' => 'delete', $content['Content']['id']), array('escape' => false), __('Are you sure you want to delete %s?', $content['Content']['title'])); ?> </li>
                        </ul>
                    </div><!-- end body -->
                </div><!-- end panel -->
            </div><!-- end actions -->
        </div><!-- end col md 3 -->

        <div class="col-md-10">			
            <table cellpadding="0" cellspacing="0" class="table table-striped">
                <tbody>
                    <tr>
                        <th><?php echo __('Title'); ?></th>
                        <td>
                            <?php echo h($content['Content']['title']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Logo'); ?></th>
                        <td>
                            <?php if ($content['Content']['logo_href']) : ?>
                            <?php if (!empty($content['Content']['logo_href'])) :
                                    echo '<img src="' . h($content['Content']['logo_href']) . '" />';
                                endif; ?>
                            <?php endif; ?>&nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Slider'); ?></th>
                        <td>
                            <pre class="prettyprint lang-html"><?php echo h($content['Content']['slider']); ?> </pre>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Social'); ?></th>
                        <td>
                            <pre class="prettyprint lang-html"><?php echo h($content['Content']['social']); ?> </pre>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Headline'); ?></th>
                        <td>
                            <?php echo h($content['Content']['headline']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Subhead'); ?></th>
                        <td>
                            <?php echo h($content['Content']['subhead']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Body'); ?></th>
                        <td>
                            <pre class="prettyprint lang-html"><?php echo h($content['Content']['body']); ?> </pre>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Created'); ?></th>
                        <td>
                            <?php echo h($content['Content']['created']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Modified'); ?></th>
                        <td>
                            <?php echo h($content['Content']['modified']); ?>
                            &nbsp;
                        </td>
                    </tr>
                </tbody>
            </table>

        </div><!-- end col md 9 -->

    </div>
</div>

<div class="related row">
    <div class="col-md-12">
        <h3><?php echo __('Related Endpoints'); ?></h3>
        <?php if (!empty($content['Endpoint'])): ?>
            <table cellpadding = "0" cellspacing = "0" class="table table-striped">
                <thead>
                    <tr>
                        <th><?php echo __('Id'); ?></th>
                        <th><?php echo __('Content Id'); ?></th>
                        <th><?php echo __('Name'); ?></th>
                        <th><?php echo __('Url'); ?></th>
                        <th><?php echo __('Created'); ?></th>
                        <th><?php echo __('Modified'); ?></th>
                        <th class="actions"></th>
                    </tr>
                <thead>
                <tbody>
                    <?php foreach ($content['Endpoint'] as $endpoint): ?>
                        <tr>
                            <td><?php echo $endpoint['id']; ?></td>
                            <td><?php echo $endpoint['content_id']; ?></td>
                            <td><?php echo $endpoint['name']; ?></td>
                            <td><?php echo $endpoint['url']; ?></td>
                            <td><?php echo $endpoint['created']; ?></td>
                            <td><?php echo $endpoint['modified']; ?></td>
                            <td class="actions">
                                <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'endpoints', 'action' => 'view', $endpoint['id']), array('escape' => false)); ?>
                                <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'endpoints', 'action' => 'edit', $endpoint['id']), array('escape' => false)); ?>
                                <?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'endpoints', 'action' => 'delete', $endpoint['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $endpoint['id'])); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>

        <div class="actions">
            <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Endpoint'), array('controller' => 'endpoints', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
        </div>
    </div><!-- end col md 12 -->
</div>
<div class="related row">
    <div class="col-md-12">
        <h3><?php echo __('Related Menus'); ?></h3>
        <?php if (!empty($content['Menu'])): ?>
            <table cellpadding = "0" cellspacing = "0" class="table table-striped">
                <thead>
                    <tr>
                        <th><?php echo __('Id'); ?></th>
                        <th><?php echo __('Content Id'); ?></th>
                        <th><?php echo __('Html'); ?></th>
                        <th><?php echo __('Location'); ?></th>
                        <th><?php echo __('Element'); ?></th>
                        <th><?php echo __('Created'); ?></th>
                        <th><?php echo __('Modified'); ?></th>
                        <th class="actions"></th>
                    </tr>
                <thead>
                <tbody>
                    <?php foreach ($content['Menu'] as $menu): ?>
                        <tr>
                            <td><?php echo $menu['id']; ?></td>
                            <td><?php echo $menu['content_id']; ?></td>
                            <td><?php echo $menu['html']; ?></td>
                            <td><?php echo $menu['location']; ?></td>
                            <td><?php echo $menu['element']; ?></td>
                            <td><?php echo $menu['created']; ?></td>
                            <td><?php echo $menu['modified']; ?></td>
                            <td class="actions">
                                <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'menus', 'action' => 'view', $menu['id']), array('escape' => false)); ?>
                                <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'menus', 'action' => 'edit', $menu['id']), array('escape' => false)); ?>
                                <?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'menus', 'action' => 'delete', $menu['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $menu['id'])); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>

        <div class="actions">
            <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Menu'), array('controller' => 'menus', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
        </div>
    </div><!-- end col md 12 -->
</div>