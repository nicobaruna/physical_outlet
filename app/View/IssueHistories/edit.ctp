<div class="issueHistories form">
<?php echo $this->Form->create('IssueHistory'); ?>
	<fieldset>
		<legend><?php echo __('Edit Issue History'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('issue_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('tanggal');
		echo $this->Form->input('status');
		echo $this->Form->input('comment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('IssueHistory.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('IssueHistory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Issue Histories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Issues'), array('controller' => 'issues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Issue'), array('controller' => 'issues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
