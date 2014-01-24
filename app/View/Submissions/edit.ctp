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
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Agens'), array('controller' => 'agens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agen'), array('controller' => 'agens', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reporters'), array('controller' => 'reporters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reporter'), array('controller' => 'reporters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dokumens'), array('controller' => 'dokumens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dokumen'), array('controller' => 'dokumens', 'action' => 'add')); ?> </li>
	</ul>
</div>
