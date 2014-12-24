<div class="endpoints form">
<?php echo $this->Form->create('Endpoint'); ?>
	<fieldset>
		<legend><?php echo __('Edit Endpoint'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('url');
		echo $this->Form->input('content_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Endpoint.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Endpoint.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Endpoints'), array('action' => 'index')); ?></li>
	</ul>
</div>
