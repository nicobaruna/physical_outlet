<div class="logCustomers form">
<?php echo $this->Form->create('LogCustomer'); ?>
	<fieldset>
		<legend><?php echo __('Add Log Customer'); ?></legend>
	<?php
		echo $this->Form->input('customer_id');
		echo $this->Form->input('tanggal_log');
		echo $this->Form->input('jam_log');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Log Customers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
