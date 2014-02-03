<div class="agens form">
<?php echo $this->Form->create('Agen'); ?>
	<fieldset>
		<legend><?php echo __('Edit Agen'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('nama');
		echo $this->Form->input('alamat');
		echo $this->Form->input('tempat_lahir');
		echo $this->Form->input('tanggal_lahir');
		echo $this->Form->input('no_telepon');
		echo $this->Form->input('email');
		echo $this->Form->input('level');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Agen.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Agen.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Agens'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List History Issues'), array('controller' => 'history_issues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History Issue'), array('controller' => 'history_issues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List History Submissions'), array('controller' => 'history_submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History Submission'), array('controller' => 'history_submissions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Issues'), array('controller' => 'issues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Issue'), array('controller' => 'issues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
