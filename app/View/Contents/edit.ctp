<div class="contents form">
<?php echo $this->Form->create('Content'); ?>
	<fieldset>
		<legend><?php echo __('Edit Content'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('menu_id');
		echo $this->Form->input('slider');
		echo $this->Form->input('social');
		echo $this->Form->input('headline');
		echo $this->Form->input('subhead');
		echo $this->Form->input('body');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Content.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Content.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Contents'), array('action' => 'index')); ?></li>
	</ul>
</div>
