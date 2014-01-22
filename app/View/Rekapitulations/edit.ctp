<div class="rekapitulations form">
<?php echo $this->Form->create('Rekapitulation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Rekapitulation'); ?></legend>
	<?php
		echo $this->Form->input('issue_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Rekapitulation.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Rekapitulation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Rekapitulations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Issues'), array('controller' => 'issues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Issue'), array('controller' => 'issues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
