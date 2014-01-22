<div class="serviceSubs form">
<?php echo $this->Form->create('ServiceSub'); ?>
	<fieldset>
		<legend><?php echo __('Add Service Sub'); ?></legend>
	<?php
		echo $this->Form->input('service_id');
		echo $this->Form->input('nama_sub_layanan');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Service Subs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
	</ul>
</div>
