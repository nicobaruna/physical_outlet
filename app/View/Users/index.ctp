<div class="users index">
	<h2><?php echo __('Customer Service page'); ?></h2>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Registration'), array('controller' => 'companies','action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Complain Handling'), array('controller' => 'issues','action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Complain Tracking'), array('controller' => 'issues','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Filling Service'), array('controller' => 'submissions','action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Filling Tracking'), array('controller' => 'submissions','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Logout'), array('controller'=>'users','action' => 'logout')); ?></li>
	</ul>
</div>
