<div class="companyStaffs index">
	<h2><?php echo __('Company Staffs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('company_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nama'); ?></th>
			<th><?php echo $this->Paginator->sort('jabatan'); ?></th>
			<th><?php echo $this->Paginator->sort('alamat'); ?></th>
			<th><?php echo $this->Paginator->sort('alamat_perusahaan'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($companyStaffs as $companyStaff): ?>
	<tr>
		<td><?php echo h($companyStaff['CompanyStaff']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($companyStaff['Company']['id'], array('controller' => 'companies', 'action' => 'view', $companyStaff['Company']['id'])); ?>
		</td>
		<td><?php echo h($companyStaff['CompanyStaff']['nama']); ?>&nbsp;</td>
		<td><?php echo h($companyStaff['CompanyStaff']['jabatan']); ?>&nbsp;</td>
		<td><?php echo h($companyStaff['CompanyStaff']['alamat']); ?>&nbsp;</td>
		<td><?php echo h($companyStaff['CompanyStaff']['alamat_perusahaan']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $companyStaff['CompanyStaff']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $companyStaff['CompanyStaff']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $companyStaff['CompanyStaff']['id']), null, __('Are you sure you want to delete # %s?', $companyStaff['CompanyStaff']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Company Staff'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
