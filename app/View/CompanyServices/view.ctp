<div class="companyServices view">
<h2><?php echo __('Company Service'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($companyService['CompanyService']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companyService['Service']['id'], array('controller' => 'services', 'action' => 'view', $companyService['Service']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companyService['Company']['id'], array('controller' => 'companies', 'action' => 'view', $companyService['Company']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Company Service'), array('action' => 'edit', $companyService['CompanyService']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Company Service'), array('action' => 'delete', $companyService['CompanyService']['id']), null, __('Are you sure you want to delete # %s?', $companyService['CompanyService']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Services'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Service'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
