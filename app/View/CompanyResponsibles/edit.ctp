<div class="companyResponsibles form">
<?php echo $this->Form->create('CompanyResponsible'); ?>
	<fieldset>
		<legend><?php echo __('Edit Company Responsible'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('company_id');
		echo $this->Form->input('nama_pimpinan');
		echo $this->Form->input('jabatan');
		echo $this->Form->input('ttl');
		echo $this->Form->input('alamat');
		echo $this->Form->input('telepon');
		echo $this->Form->input('email');
		echo $this->Form->input('tanda_pengenal');
		echo $this->Form->input('jenis_kelamin');
		echo $this->Form->input('agama');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CompanyResponsible.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CompanyResponsible.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Company Responsibles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
