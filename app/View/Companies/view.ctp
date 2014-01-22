<div class="companies view">
<h2><?php echo __('Company'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($company['Company']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nama Perusahaan'); ?></dt>
		<dd>
			<?php echo h($company['Company']['nama_perusahaan']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Npwp'); ?></dt>
		<dd>
			<?php echo h($company['Company']['npwp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Telepon'); ?></dt>
		<dd>
			<?php echo h($company['Company']['no_telepon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alamat'); ?></dt>
		<dd>
			<?php echo h($company['Company']['alamat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($company['Company']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bidang Usaha'); ?></dt>
		<dd>
			<?php echo h($company['Company']['bidang_usaha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group Usaha'); ?></dt>
		<dd>
			<?php echo h($company['Company']['group_usaha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tingkat Organisasi'); ?></dt>
		<dd>
			<?php echo h($company['Company']['tingkat_organisasi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alamat Penagihan'); ?></dt>
		<dd>
			<?php echo h($company['Company']['alamat_penagihan']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Masa Berlaku Kotrak'); ?></dt>
		<dd>
			<?php echo h($company['Company']['masa_berlaku_kotrak']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Company'), array('action' => 'edit', $company['Company']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Company'), array('action' => 'delete', $company['Company']['id']), null, __('Are you sure you want to delete # %s?', $company['Company']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Company Responsibles'); ?></h3>
	<?php if (!empty($company['CompanyResponsible'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Nama Pimpinan'); ?></th>
		<th><?php echo __('Jabatan'); ?></th>
		<th><?php echo __('Ttl'); ?></th>
		<th><?php echo __('Alamat'); ?></th>
		<th><?php echo __('Telepon'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Tanda Pengenal'); ?></th>
		<th><?php echo __('Jenis Kelamin'); ?></th>
		<th><?php echo __('Agama'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($company['CompanyResponsible'] as $companyResponsible): ?>
		<tr>
			<td><?php echo $companyResponsible['id']; ?></td>
			<td><?php echo $companyResponsible['company_id']; ?></td>
			<td><?php echo $companyResponsible['nama_pimpinan']; ?></td>
			<td><?php echo $companyResponsible['jabatan']; ?></td>
			<td><?php echo $companyResponsible['ttl']; ?></td>
			<td><?php echo $companyResponsible['alamat']; ?></td>
			<td><?php echo $companyResponsible['telepon']; ?></td>
			<td><?php echo $companyResponsible['email']; ?></td>
			<td><?php echo $companyResponsible['tanda_pengenal']; ?></td>
			<td><?php echo $companyResponsible['jenis_kelamin']; ?></td>
			<td><?php echo $companyResponsible['agama']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'company_responsibles', 'action' => 'view', $companyResponsible['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'company_responsibles', 'action' => 'edit', $companyResponsible['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'company_responsibles', 'action' => 'delete', $companyResponsible['id']), null, __('Are you sure you want to delete # %s?', $companyResponsible['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Company Responsible'), array('controller' => 'company_responsibles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Company Services'); ?></h3>
	<?php if (!empty($company['CompanyService'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Service Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($company['CompanyService'] as $companyService): ?>
		<tr>
			<td><?php echo $companyService['id']; ?></td>
			<td><?php echo $companyService['service_id']; ?></td>
			<td><?php echo $companyService['company_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'company_services', 'action' => 'view', $companyService['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'company_services', 'action' => 'edit', $companyService['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'company_services', 'action' => 'delete', $companyService['id']), null, __('Are you sure you want to delete # %s?', $companyService['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Company Service'), array('controller' => 'company_services', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Company Staffs'); ?></h3>
	<?php if (!empty($company['CompanyStaff'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Nama'); ?></th>
		<th><?php echo __('Jabatan'); ?></th>
		<th><?php echo __('Alamat'); ?></th>
		<th><?php echo __('Alamat Perusahaan'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($company['CompanyStaff'] as $companyStaff): ?>
		<tr>
			<td><?php echo $companyStaff['id']; ?></td>
			<td><?php echo $companyStaff['company_id']; ?></td>
			<td><?php echo $companyStaff['nama']; ?></td>
			<td><?php echo $companyStaff['jabatan']; ?></td>
			<td><?php echo $companyStaff['alamat']; ?></td>
			<td><?php echo $companyStaff['alamat_perusahaan']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'company_staffs', 'action' => 'view', $companyStaff['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'company_staffs', 'action' => 'edit', $companyStaff['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'company_staffs', 'action' => 'delete', $companyStaff['id']), null, __('Are you sure you want to delete # %s?', $companyStaff['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Company Staff'), array('controller' => 'company_staffs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Customers'); ?></h3>
	<?php if (!empty($company['Customer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($company['Customer'] as $customer): ?>
		<tr>
			<td><?php echo $customer['id']; ?></td>
			<td><?php echo $customer['company_id']; ?></td>
			<td><?php echo $customer['username']; ?></td>
			<td><?php echo $customer['password']; ?></td>
			<td><?php echo $customer['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'customers', 'action' => 'view', $customer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'customers', 'action' => 'edit', $customer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'customers', 'action' => 'delete', $customer['id']), null, __('Are you sure you want to delete # %s?', $customer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
