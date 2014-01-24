<div class="dokumens form">
<?php echo $this->Form->create('Dokumen'); ?>
	<fieldset>
		<legend><?php echo __('Add Dokumen'); ?></legend>
	<?php
		echo $this->Form->input('submission_id');
		echo $this->Form->input('link_gambar');
		echo $this->Form->input('deskrpisi');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Dokumens'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
