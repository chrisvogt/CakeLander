<div class="contents view">
<h2><?php echo __('Content'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($content['Content']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endpoint Id'); ?></dt>
		<dd>
			<?php echo h($content['Content']['endpoint_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($content['Content']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Logo Href'); ?></dt>
		<dd>
			<?php echo h($content['Content']['logo_href']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slider'); ?></dt>
		<dd>
			<?php echo h($content['Content']['slider']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Social'); ?></dt>
		<dd>
			<?php echo h($content['Content']['social']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Headline'); ?></dt>
		<dd>
			<?php echo h($content['Content']['headline']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subhead'); ?></dt>
		<dd>
			<?php echo h($content['Content']['subhead']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($content['Content']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($content['Content']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($content['Content']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Content'), array('action' => 'edit', $content['Content']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Content'), array('action' => 'delete', $content['Content']['id']), array(), __('Are you sure you want to delete # %s?', $content['Content']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('action' => 'add')); ?> </li>
	</ul>
</div>
