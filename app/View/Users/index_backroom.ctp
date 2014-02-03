<div class="users index">
	<h2><?php echo __('Backroom Service page'); ?></h2>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller'=>'companies','action' => 'add_customer')); ?></li>
		<li><?php echo $this->Html->link(__('Complain Tracking'), array('controller' => 'issues','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Filling Tracking'), array('controller' => 'submissions','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Category'), array('controller' => 'categories','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Service'), array('controller' => 'services','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Areas'), array('controller' => 'areas','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Logout'), array('controller'=>'users','action' => 'logout')); ?></li>
	</ul>
</div>
