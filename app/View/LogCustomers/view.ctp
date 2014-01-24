<div class="logCustomers view">
<h2><?php echo __('Log Customer'); ?></h2>
	<dl>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($logCustomer['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $logCustomer['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tanggal Log'); ?></dt>
		<dd>
			<?php echo h($logCustomer['LogCustomer']['tanggal_log']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jam Log'); ?></dt>
		<dd>
			<?php echo h($logCustomer['LogCustomer']['jam_log']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Log Customer'), array('action' => 'edit', $logCustomer['LogCustomer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Log Customer'), array('action' => 'delete', $logCustomer['LogCustomer']['id']), null, __('Are you sure you want to delete # %s?', $logCustomer['LogCustomer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Log Customers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log Customer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
