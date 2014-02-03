<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add Customer'); ?></legend>
	<?php

		// foreach ($companies as $key => $value) {
		// 	$select_companies[$key['id']] = $key['nama_perusahaan'];
		// }
		echo $this->Form->input('companies',array('empty'=>'Pilih Perusahaan'));
		// echo $this->Form->input('username',array('value'=>));
		// echo $this->Form->input('password');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
