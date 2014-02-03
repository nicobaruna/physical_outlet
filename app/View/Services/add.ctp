<div class="services form">
<?php echo $this->Form->create('Service'); ?>
	<fieldset>
		<legend><?php echo __('Add Service'); ?></legend>
	<?php
		echo $this->Form->input('nama_layanan');
		echo $this->Form->input('deskripsi_layanan');
		echo $this->Form->input('parent_id', array('required' => FALSE, 'empty' => '', 'options' =>$parent_id));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?></li>
	</ul>
</div>
