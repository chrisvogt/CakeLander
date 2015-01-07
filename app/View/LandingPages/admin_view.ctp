<div class="landingPages view">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Landing Page'); ?></h1>
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
                            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Landing Page'), array('action' => 'edit', $landingPage['LandingPage']['id']), array('escape' => false)); ?> </li>
                            <li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Landing Page'), array('action' => 'delete', $landingPage['LandingPage']['id']), array('escape' => false), __('Are you sure you want to delete the page for %s?', $landingPage['LandingPage']['title'])); ?> </li>
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
                            <?php echo h($landingPage['LandingPage']['title']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Domain'); ?></th>
                        <td>
                            <?php echo h($landingPage['LandingPage']['domain']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Logo'); ?></th>
                        <td>
                            <img src="<?php echo h($landingPage['LandingPage']['logo']); ?>" />
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Social'); ?></th>
                        <td>
                            <pre class="prettyprint lang-html"><?php echo h($landingPage['LandingPage']['social']); ?></pre>
                            &nbsp;
                        </td>
                    </tr>
                    <?php /**
                    <tr>
                        <th><?php echo __('Menu HTML'); ?></th>
                        <td>
                            <pre class="prettyprint lang-html"><?php echo h($landingPage['Menu']['html']); ?></pre>
                        </td>
                    </tr> */ ?>
                    <tr>
                        <th><?php echo __('Headline'); ?></th>
                        <td>
                            <?php echo h($landingPage['LandingPage']['headline']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Subhead'); ?></th>
                        <td>
                            <?php echo h($landingPage['LandingPage']['subhead']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Body'); ?></th>
                        <td>
                            <pre class="prettyprint lang-html"><?php echo h($landingPage['LandingPage']['body']); ?></pre>
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Created'); ?></th>
                        <td>
                            <?php echo h($landingPage['LandingPage']['created']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Modified'); ?></th>
                        <td>
                            <?php echo h($landingPage['LandingPage']['modified']); ?>
                            &nbsp;
                        </td>
                    </tr>
                </tbody>
            </table>

        </div><!-- end col md 9 -->

    </div>
</div>

<div class="related row">
    <div class="col-md-10 col-md-offset-2">
        <h3><?php echo __('Slides'); ?></h3>
        <?php if (!empty($landingPage['Slide'])): ?>
            <table cellpadding = "0" cellspacing = "0" class="table table-striped">
                <thead>
                    <tr>
                        <th><?php echo __('Image'); ?></th>
                        <th><?php echo __('Title'); ?></th>
                        <th><?php echo __('Byline'); ?></th>
                        <th><?php echo __('Weight'); ?></th>
                        <th class="actions"></th>
                    </tr>
                <thead>
                <tbody>
                    <?php foreach ($landingPage['Slide'] as $slide): ?>
                        <tr>
                            <td><?php echo $slide['image']; ?></td>
                            <td><?php echo $slide['title']; ?></td>
                            <td><?php echo $slide['byline']; ?></td>
                            <td><?php echo ($slide['weight']) ? $slide['weight'] : '<label class="label label-warning">NONE</label>'; ?></td>
                            <td class="actions">
                                <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'slides', 'action' => 'view', $slide['id']), array('escape' => false)); ?>
                                <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'slides', 'action' => 'edit', $slide['id']), array('escape' => false)); ?>
                                <?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'slides', 'action' => 'delete', $slide['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $slide['id'])); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>

        <div class="actions">
            <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Slides'), array('controller' => 'slides', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
        </div>
    </div><!-- end col md 12 -->
</div>
