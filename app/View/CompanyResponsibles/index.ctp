<div class="companyResponsibles index">
	<h2><?php echo __('Company Responsibles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('company_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nama_pimpinan'); ?></th>
			<th><?php echo $this->Paginator->sort('jabatan'); ?></th>
			<th><?php echo $this->Paginator->sort('ttl'); ?></th>
			<th><?php echo $this->Paginator->sort('alamat'); ?></th>
			<th><?php echo $this->Paginator->sort('telepon'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('tanda_pengenal'); ?></th>
			<th><?php echo $this->Paginator->sort('jenis_kelamin'); ?></th>
			<th><?php echo $this->Paginator->sort('agama'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($companyResponsibles as $companyResponsible): ?>
	<tr>
		<td><?php echo h($companyResponsible['CompanyResponsible']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($companyResponsible['Company']['id'], array('controller' => 'companies', 'action' => 'view', $companyResponsible['Company']['id'])); ?>
		</td>
		<td><?php echo h($companyResponsible['CompanyResponsible']['nama_pimpinan']); ?>&nbsp;</td>
		<td><?php echo h($companyResponsible['CompanyResponsible']['jabatan']); ?>&nbsp;</td>
		<td><?php echo h($companyResponsible['CompanyResponsible']['ttl']); ?>&nbsp;</td>
		<td><?php echo h($companyResponsible['CompanyResponsible']['alamat']); ?>&nbsp;</td>
		<td><?php echo h($companyResponsible['CompanyResponsible']['telepon']); ?>&nbsp;</td>
		<td><?php echo h($companyResponsible['CompanyResponsible']['email']); ?>&nbsp;</td>
		<td><?php echo h($companyResponsible['CompanyResponsible']['tanda_pengenal']); ?>&nbsp;</td>
		<td><?php echo h($companyResponsible['CompanyResponsible']['jenis_kelamin']); ?>&nbsp;</td>
		<td><?php echo h($companyResponsible['CompanyResponsible']['agama']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $companyResponsible['CompanyResponsible']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $companyResponsible['CompanyResponsible']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $companyResponsible['CompanyResponsible']['id']), null, __('Are you sure you want to delete # %s?', $companyResponsible['CompanyResponsible']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Company Responsible'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
