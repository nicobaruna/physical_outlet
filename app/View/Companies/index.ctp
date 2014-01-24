<div class="companies index">
	<h2><?php echo __('Companies'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nama_perusahaan'); ?></th>
			<th><?php echo $this->Paginator->sort('npwp'); ?></th>
			<th><?php echo $this->Paginator->sort('alamat'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('tingkat_organisasi'); ?></th>
			<th><?php echo $this->Paginator->sort('alamat_penagihan'); ?></th>
			<th><?php echo $this->Paginator->sort('masa_berlaku'); ?></th>
			<th><?php echo $this->Paginator->sort('no_telepon'); ?></th>
			<th><?php echo $this->Paginator->sort('group_usaha'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($companies as $company): ?>
	<tr>
		<td><?php echo h($company['Company']['id']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['nama_perusahaan']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['npwp']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['alamat']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['email']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['tingkat_organisasi']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['alamat_penagihan']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['masa_berlaku']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['no_telepon']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['group_usaha']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $company['Company']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $company['Company']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $company['Company']['id']), null, __('Are you sure you want to delete # %s?', $company['Company']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Company'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Company Responsibles'), array('controller' => 'company_responsibles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Responsible'), array('controller' => 'company_responsibles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Services'), array('controller' => 'company_services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Service'), array('controller' => 'company_services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Staffs'), array('controller' => 'company_staffs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Staff'), array('controller' => 'company_staffs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
