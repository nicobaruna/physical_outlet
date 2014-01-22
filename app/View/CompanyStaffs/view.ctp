<div class="companyStaffs view">
<h2><?php echo __('Company Staff'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($companyStaff['CompanyStaff']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companyStaff['Company']['id'], array('controller' => 'companies', 'action' => 'view', $companyStaff['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nama'); ?></dt>
		<dd>
			<?php echo h($companyStaff['CompanyStaff']['nama']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jabatan'); ?></dt>
		<dd>
			<?php echo h($companyStaff['CompanyStaff']['jabatan']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alamat'); ?></dt>
		<dd>
			<?php echo h($companyStaff['CompanyStaff']['alamat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alamat Perusahaan'); ?></dt>
		<dd>
			<?php echo h($companyStaff['CompanyStaff']['alamat_perusahaan']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Company Staff'), array('action' => 'edit', $companyStaff['CompanyStaff']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Company Staff'), array('action' => 'delete', $companyStaff['CompanyStaff']['id']), null, __('Are you sure you want to delete # %s?', $companyStaff['CompanyStaff']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Staffs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Staff'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
