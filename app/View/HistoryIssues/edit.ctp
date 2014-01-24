<div class="historyIssues form">
<?php echo $this->Form->create('HistoryIssue'); ?>
	<fieldset>
		<legend><?php echo __('Edit History Issue'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('issue_id');
		echo $this->Form->input('agen_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('HistoryIssue.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('HistoryIssue.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List History Issues'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Issues'), array('controller' => 'issues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Issue'), array('controller' => 'issues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Agens'), array('controller' => 'agens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agen'), array('controller' => 'agens', 'action' => 'add')); ?> </li>
	</ul>
</div>
