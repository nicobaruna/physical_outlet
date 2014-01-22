<div class="companyStaffs form">
<?php echo $this->Form->create('CompanyStaff'); ?>
	<fieldset>
		<legend><?php echo __('Edit Company Staff'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('company_id');
		echo $this->Form->input('nama');
		echo $this->Form->input('jabatan');
		echo $this->Form->input('alamat');
		echo $this->Form->input('alamat_perusahaan');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CompanyStaff.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CompanyStaff.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Company Staffs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
