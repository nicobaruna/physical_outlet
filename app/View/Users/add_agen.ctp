<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add Agen'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('status');
	?>
	</fieldset>
	<fieldset>
		<legend><?php echo __('Add Agen'); ?></legend>
	<?php
		echo $this->Form->input('Agen.0.nama');
		echo $this->Form->input('Agen.0.alamat');
		echo $this->Form->input('Agen.0.tempat_lahir');
		echo $this->Form->date('Agen.0.tanggal_lahir');
		echo $this->Form->input('Agen.0.no_telepon');
		echo $this->Form->input('Agen.0.email');
		echo $this->Form->input('Agen.0.level', array('options' => array('empty'=>'Choose One','1'=>'CSR', '2'=>'Back Room', '3'=>'Admin','4'=>'indexer')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Home'), array('action' => 'index_admin')); ?></li>
		<li><?php echo $this->Html->link(__('List Agen'), array('action' => 'list_user')); ?></li>
	</ul>
</div>
