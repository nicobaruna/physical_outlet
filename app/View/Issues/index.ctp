<div class="issues index">
	<h2><?php echo __('Issues'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('service_id'); ?></th>
			<th><?php echo $this->Paginator->sort('company_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nama_pelapor'); ?></th>
			<th><?php echo $this->Paginator->sort('telepon'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('deskripsi'); ?></th>
			<th><?php echo $this->Paginator->sort('link_gambar'); ?></th>
			<th><?php echo $this->Paginator->sort('tanggal_open'); ?></th>
			<th><?php echo $this->Paginator->sort('jam_open'); ?></th>
			<th><?php echo $this->Paginator->sort('tanggal_close'); ?></th>
			<th><?php echo $this->Paginator->sort('jam_close'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('counter'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($issues as $issue): ?>
	<tr>
		<td><?php echo h($issue['Issue']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($issue['Service']['id'], array('controller' => 'services', 'action' => 'view', $issue['Service']['id'])); ?>
		</td>
		<td><?php echo h($issue['Issue']['company_id']); ?>&nbsp;</td>
		<td><?php echo h($issue['Issue']['nama_pelapor']); ?>&nbsp;</td>
		<td><?php echo h($issue['Issue']['telepon']); ?>&nbsp;</td>
		<td><?php echo h($issue['Issue']['email']); ?>&nbsp;</td>
		<td><?php echo h($issue['Issue']['deskripsi']); ?>&nbsp;</td>
		<td><?php echo h($issue['Issue']['link_gambar']); ?>&nbsp;</td>
		<td><?php echo h($issue['Issue']['tanggal_open']); ?>&nbsp;</td>
		<td><?php echo h($issue['Issue']['jam_open']); ?>&nbsp;</td>
		<td><?php echo h($issue['Issue']['tanggal_close']); ?>&nbsp;</td>
		<td><?php echo h($issue['Issue']['jam_close']); ?>&nbsp;</td>
		<td><?php echo h($issue['Issue']['status']); ?>&nbsp;</td>
		<td><?php echo h($issue['Issue']['counter']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $issue['Issue']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $issue['Issue']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $issue['Issue']['id']), null, __('Are you sure you want to delete # %s?', $issue['Issue']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Issue'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Issue Histories'), array('controller' => 'issue_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Issue History'), array('controller' => 'issue_histories', 'action' => 'add')); ?> </li>
	</ul>
</div>
