<div class="submissions form">
<?php echo $this->Form->create('Submission'); ?>
	<fieldset>
		<legend><?php echo __('Edit Submission'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('company_id');
		echo $this->Form->input('agen_id');
		echo $this->Form->input('reporter_id');
		echo $this->Form->input('service_id');
		echo $this->Form->input('tanggal');
		echo $this->Form->input('note');
		echo $this->Form->input('status');
		echo $this->Form->input('flag');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Submission.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Submission.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('action' => 'index')); ?></li>
	</ul>
</div>
