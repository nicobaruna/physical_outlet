<div class="companies form">
<?php echo $this->Form->create('Company'); ?>
	
	<fieldset>
		<legend>Pelayanan Yang diinginkan</legend>
		<?php foreach($services as $key=>$item) : ?> 
		<?php if ($item['Service']['parent_id'] == NULL) {?>
		<?php echo $this->Form->checkbox('CompanyService.'.$key.'.service_id',array('value'=>$item['Service']['id']));?>
		<?php echo $this->Form->label($item['Service']['nama_layanan']) ?>
		<?php } ?>
		<?php endforeach; ?>
	</fieldset>

	<fieldset>
		<legend><?php echo __('Kelengkapan Data Perusahaan'); ?></legend>
	<?php
		echo $this->Form->input('nama_perusahaan');
		echo $this->Form->input('npwp');
		echo $this->Form->input('alamat');
		echo $this->Form->input('email');
		echo $this->Form->input('tingkat_organisasi');
		echo $this->Form->input('alamat_penagihan');
		echo $this->Form->input('masa_berlaku');
		echo $this->Form->input('no_telepon');
		echo $this->Form->input('group_usaha');
	?>
	</fieldset>

	<fieldset>
		<legend>Bidang Usaha</legend>
		<?php foreach($areas as $key=>$item) : ?> 
		<?php echo $this->Form->checkbox('CompanyArea.'.$key.'.area_id',array('value'=>$item['Area']['id']));?>
		<?php echo $this->Form->label($item['Area']['nama']) ?>
		<?php endforeach; ?>
	</fieldset>

	<fieldset>
		<legend><?php echo __('Penanggung Jawab Perusahaan') ?></legend>
		<?php 
			echo $this->Form->input('CompanyResponsible.0.nama_pimpinan');
			echo $this->Form->input('CompanyResponsible.0.jabatan');
			echo $this->Form->input('CompanyResponsible.0.tempat_lahir');
			echo $this->Form->input('CompanyResponsible.0.tanggal_lahir');
			echo $this->Form->input('CompanyResponsible.0.alamat');
			echo $this->Form->input('CompanyResponsible.0.no_telepon');
			echo $this->Form->input('CompanyResponsible.0.email');
			echo $this->Form->input('CompanyResponsible.0.tanda_pengenal',array('options'=>array(0=>'Please select','KTP'=>'KTP','SIM'=>'SIM','PASSPORT'=>'PASSPORT')));
			echo $this->Form->input('CompanyResponsible.0.nomor_tanda_pengenal');
			echo $this->Form->radio('CompanyResponsible.0.jenis_kelamin',array('M' => 'Male', 'F' => 'Female'),array('legend' => 'Jenis Kelamin'));
			echo $this->Form->radio('CompanyResponsible.0.agama',array('Islam'=>'Islam','Kristen'=>'Kristen','Katolik'=>'Katolik','Buddha'=>'Buddha','Hindu'=>'Hindu'));
		?>
	</fieldset>
	<fieldset>
		<legend><?php echo __('Pengurus Perusahaan') ?></legend>
		<table>
			<thead>
				<th>Nama</th>
				<th>Jabatan</th>
				<th>Alamat</th>
				<th>Alamat Perusahaan</th>
			</thead>
		
		<?php
		for($x = 0 ; $x<4 ;$x++) {
	   ?>
	   <tr>
	   		<td><?php echo $this->Form->input('CompanyStaff.'.$x.'.nama',array('label'=>false)); ?></td>
	   		<td><?php echo $this->Form->input('CompanyStaff.'.$x.'.jabatan',array('label'=>false));  ?></td>
	   		<td><?php echo $this->Form->input('CompanyStaff.'.$x.'.alamat',array('label'=>false)); ?></td>
	   		<td><?php echo $this->Form->input('CompanyStaff.'.$x.'.alamat_perusahaan',array('label'=>false));  ?></td>
	   </tr>
	   <?php } ?>
	   </table>
	</fieldset>
	
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Company.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Company.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('action' => 'index')); ?></li>
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
