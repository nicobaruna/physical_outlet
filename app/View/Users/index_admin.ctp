<div class="users index">
	<h2><?php echo __('Admin page'); ?></h2>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Agen'), array('action' => 'add_agen')); ?></li>
		<li><?php echo $this->Html->link(__('Category'), array('controller' => 'categories','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Service'), array('controller' => 'services','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Areas'), array('controller' => 'areas','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Logout'), array('controller'=>'users','action' => 'logout')); ?></li>
	</ul>
</div>
