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
		<dt><?php echo __('Masa Berlaku'); ?></dt>
		<dd>
			<?php echo h($company['Company']['masa_berlaku']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Telepon'); ?></dt>
		<dd>
			<?php echo h($company['Company']['no_telepon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group Usaha'); ?></dt>
		<dd>
			<?php echo h($company['Company']['group_usaha']); ?>
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
		<li><?php echo $this->Html->link(__('List Company Areas'), array('controller' => 'company_areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Area'), array('controller' => 'company_areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Responsibles'), array('controller' => 'company_responsibles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Responsible'), array('controller' => 'company_responsibles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Services'), array('controller' => 'company_services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Service'), array('controller' => 'company_services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Staffs'), array('controller' => 'company_staffs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Staff'), array('controller' => 'company_staffs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Issues'), array('controller' => 'issues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Issue'), array('controller' => 'issues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Company Areas'); ?></h3>
	<?php if (!empty($company['CompanyArea'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Area Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($company['CompanyArea'] as $companyArea): ?>
		<tr>
			<td><?php echo $companyArea['id']; ?></td>
			<td><?php echo $companyArea['company_id']; ?></td>
			<td><?php echo $companyArea['area_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'company_areas', 'action' => 'view', $companyArea['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'company_areas', 'action' => 'edit', $companyArea['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'company_areas', 'action' => 'delete', $companyArea['id']), null, __('Are you sure you want to delete # %s?', $companyArea['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Company Area'), array('controller' => 'company_areas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
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
		<th><?php echo __('Tempat Lahir'); ?></th>
		<th><?php echo __('Tanggal Lahir'); ?></th>
		<th><?php echo __('Alamat'); ?></th>
		<th><?php echo __('No Telepon'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Tanda Pengenal'); ?></th>
		<th><?php echo __('Nomor Tanda Pengenal'); ?></th>
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
			<td><?php echo $companyResponsible['tempat_lahir']; ?></td>
			<td><?php echo $companyResponsible['tanggal_lahir']; ?></td>
			<td><?php echo $companyResponsible['alamat']; ?></td>
			<td><?php echo $companyResponsible['no_telepon']; ?></td>
			<td><?php echo $companyResponsible['email']; ?></td>
			<td><?php echo $companyResponsible['tanda_pengenal']; ?></td>
			<td><?php echo $companyResponsible['nomor_tanda_pengenal']; ?></td>
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
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($company['Customer'] as $customer): ?>
		<tr>
			<td><?php echo $customer['id']; ?></td>
			<td><?php echo $customer['user_id']; ?></td>
			<td><?php echo $customer['company_id']; ?></td>
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
<div class="related">
	<h3><?php echo __('Related Issues'); ?></h3>
	<?php if (!empty($company['Issue'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Agen Id'); ?></th>
		<th><?php echo __('Reporter Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('No Resi'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Link Gambar'); ?></th>
		<th><?php echo __('Tanggal'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Flag'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($company['Issue'] as $issue): ?>
		<tr>
			<td><?php echo $issue['id']; ?></td>
			<td><?php echo $issue['company_id']; ?></td>
			<td><?php echo $issue['agen_id']; ?></td>
			<td><?php echo $issue['reporter_id']; ?></td>
			<td><?php echo $issue['category_id']; ?></td>
			<td><?php echo $issue['no_resi']; ?></td>
			<td><?php echo $issue['note']; ?></td>
			<td><?php echo $issue['link_gambar']; ?></td>
			<td><?php echo $issue['tanggal']; ?></td>
			<td><?php echo $issue['status']; ?></td>
			<td><?php echo $issue['flag']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'issues', 'action' => 'view', $issue['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'issues', 'action' => 'edit', $issue['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'issues', 'action' => 'delete', $issue['id']), null, __('Are you sure you want to delete # %s?', $issue['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Issue'), array('controller' => 'issues', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Submissions'); ?></h3>
	<?php if (!empty($company['Submission'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Agen Id'); ?></th>
		<th><?php echo __('Reporter Id'); ?></th>
		<th><?php echo __('Service Id'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Flag'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($company['Submission'] as $submission): ?>
		<tr>
			<td><?php echo $submission['id']; ?></td>
			<td><?php echo $submission['company_id']; ?></td>
			<td><?php echo $submission['agen_id']; ?></td>
			<td><?php echo $submission['reporter_id']; ?></td>
			<td><?php echo $submission['service_id']; ?></td>
			<td><?php echo $submission['note']; ?></td>
			<td><?php echo $submission['status']; ?></td>
			<td><?php echo $submission['flag']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'submissions', 'action' => 'view', $submission['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'submissions', 'action' => 'edit', $submission['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'submissions', 'action' => 'delete', $submission['id']), null, __('Are you sure you want to delete # %s?', $submission['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
