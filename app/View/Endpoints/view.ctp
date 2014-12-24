<div class="endpoints view">
<h2><?php echo __('Endpoint'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($endpoint['Endpoint']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($endpoint['Endpoint']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($endpoint['Endpoint']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content Id'); ?></dt>
		<dd>
			<?php echo h($endpoint['Endpoint']['content_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($endpoint['Endpoint']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($endpoint['Endpoint']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Endpoint'), array('action' => 'edit', $endpoint['Endpoint']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Endpoint'), array('action' => 'delete', $endpoint['Endpoint']['id']), array(), __('Are you sure you want to delete # %s?', $endpoint['Endpoint']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Endpoints'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Endpoint'), array('action' => 'add')); ?> </li>
	</ul>
</div>
