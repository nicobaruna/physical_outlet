<div class="companyResponsibles view">
<h2><?php echo __('Company Responsible'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($companyResponsible['CompanyResponsible']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companyResponsible['Company']['id'], array('controller' => 'companies', 'action' => 'view', $companyResponsible['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nama Pimpinan'); ?></dt>
		<dd>
			<?php echo h($companyResponsible['CompanyResponsible']['nama_pimpinan']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jabatan'); ?></dt>
		<dd>
			<?php echo h($companyResponsible['CompanyResponsible']['jabatan']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ttl'); ?></dt>
		<dd>
			<?php echo h($companyResponsible['CompanyResponsible']['ttl']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alamat'); ?></dt>
		<dd>
			<?php echo h($companyResponsible['CompanyResponsible']['alamat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telepon'); ?></dt>
		<dd>
			<?php echo h($companyResponsible['CompanyResponsible']['telepon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($companyResponsible['CompanyResponsible']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tanda Pengenal'); ?></dt>
		<dd>
			<?php echo h($companyResponsible['CompanyResponsible']['tanda_pengenal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jenis Kelamin'); ?></dt>
		<dd>
			<?php echo h($companyResponsible['CompanyResponsible']['jenis_kelamin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agama'); ?></dt>
		<dd>
			<?php echo h($companyResponsible['CompanyResponsible']['agama']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Company Responsible'), array('action' => 'edit', $companyResponsible['CompanyResponsible']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Company Responsible'), array('action' => 'delete', $companyResponsible['CompanyResponsible']['id']), null, __('Are you sure you want to delete # %s?', $companyResponsible['CompanyResponsible']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Responsibles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Responsible'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
