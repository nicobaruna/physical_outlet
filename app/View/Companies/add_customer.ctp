<div class="companies index">
	<h2><?php echo __('Add Customer'); ?></h2>
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
	<?php echo $this->Form->create('User'); ?>
	<tr>
		<td><?php echo h($company['Company']['id']); echo $this->Form->hidden('Company.0.id',array('value'=>$company['Company']['id']));?>&nbsp;</td>
		<td><?php echo h($company['Company']['nama_perusahaan']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['npwp']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['alamat']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['email']); 
			echo $this->Form->hidden('username',array('value'=>$company['Company']['email']));
			echo $this->Form->hidden('status',array('value'=>'1'));
		?>&nbsp;</td>
		<td><?php echo h($company['Company']['tingkat_organisasi']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['alamat_penagihan']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['masa_berlaku']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['no_telepon']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['group_usaha']); ?>&nbsp;</td>
		<td class="actions">
			<?php 
				if($company['Company']['user_id'] == NULL){
					echo $this->Form->end(__('Add'));
				}
			?>
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
		<li><?php echo $this->Html->link(__('Home'), array('controller'=>'users','action' => 'index_backroom')); ?></li>
	</ul>
</div>
