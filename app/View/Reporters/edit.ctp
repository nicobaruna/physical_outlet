<div class="reporters form">
<?php echo $this->Form->create('Reporter'); ?>
	<fieldset>
		<legend><?php echo __('Edit Reporter'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nama');
		echo $this->Form->input('email');
		echo $this->Form->input('no_telpon');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Reporter.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Reporter.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Reporters'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Issues'), array('controller' => 'issues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Issue'), array('controller' => 'issues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
