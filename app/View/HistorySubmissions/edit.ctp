<div class="historySubmissions form">
<?php echo $this->Form->create('HistorySubmission'); ?>
	<fieldset>
		<legend><?php echo __('Edit History Submission'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('submission_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('HistorySubmission.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('HistorySubmission.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List History Submissions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Agens'), array('controller' => 'agens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agen'), array('controller' => 'agens', 'action' => 'add')); ?> </li>
	</ul>
</div>
