<div class="issues form">
<?php echo $this->Form->create('Issue'); ?>
	<fieldset>
		<legend><?php echo __('Edit Issue'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('service_id');
		echo $this->Form->input('company_id');
		echo $this->Form->input('nama_pelapor');
		echo $this->Form->input('telepon');
		echo $this->Form->input('email');
		echo $this->Form->input('deskripsi');
		echo $this->Form->input('link_gambar');
		echo $this->Form->input('tanggal_open');
		echo $this->Form->input('jam_open');
		echo $this->Form->input('tanggal_close');
		echo $this->Form->input('jam_close');
		echo $this->Form->input('status');
		echo $this->Form->input('counter');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Issue.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Issue.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Issues'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Issue Histories'), array('controller' => 'issue_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Issue History'), array('controller' => 'issue_histories', 'action' => 'add')); ?> </li>
	</ul>
</div>
