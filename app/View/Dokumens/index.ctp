<div class="dokumens index">
	<h2><?php echo __('Dokumens'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('submission_id'); ?></th>
			<th><?php echo $this->Paginator->sort('link_gambar'); ?></th>
			<th><?php echo $this->Paginator->sort('deskrpisi'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dokumens as $dokumen): ?>
	<tr>
		<td><?php echo h($dokumen['Dokumen']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dokumen['Submission']['id'], array('controller' => 'submissions', 'action' => 'view', $dokumen['Submission']['id'])); ?>
		</td>
		<td><?php echo h($dokumen['Dokumen']['link_gambar']); ?>&nbsp;</td>
		<td><?php echo h($dokumen['Dokumen']['deskrpisi']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dokumen['Dokumen']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dokumen['Dokumen']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dokumen['Dokumen']['id']), null, __('Are you sure you want to delete # %s?', $dokumen['Dokumen']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Dokumen'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
