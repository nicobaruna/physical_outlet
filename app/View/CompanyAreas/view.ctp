<div class="companyAreas view">
<h2><?php echo __('Company Area'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($companyArea['CompanyArea']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companyArea['Company']['id'], array('controller' => 'companies', 'action' => 'view', $companyArea['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nama'); ?></dt>
		<dd>
			<?php echo h($companyArea['CompanyArea']['nama']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Company Area'), array('action' => 'edit', $companyArea['CompanyArea']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Company Area'), array('action' => 'delete', $companyArea['CompanyArea']['id']), null, __('Are you sure you want to delete # %s?', $companyArea['CompanyArea']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Areas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Area'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
