<div class="submissions index">
	<h2><?php echo __('Submissions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('company_id'); ?></th>
			<th><?php echo $this->Paginator->sort('agen_id'); ?></th>
			<th><?php echo $this->Paginator->sort('reporter_id'); ?></th>
			<th><?php echo $this->Paginator->sort('service_id'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('flag'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($submissions as $submission): ?>
	<tr>
		<td><?php echo h($submission['Submission']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($submission['Company']['id'], array('controller' => 'companies', 'action' => 'view', $submission['Company']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($submission['Agen']['id'], array('controller' => 'agens', 'action' => 'view', $submission['Agen']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($submission['Reporter']['id'], array('controller' => 'reporters', 'action' => 'view', $submission['Reporter']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($submission['Service']['id'], array('controller' => 'services', 'action' => 'view', $submission['Service']['id'])); ?>
		</td>
		<td><?php echo h($submission['Submission']['note']); ?>&nbsp;</td>
		<td><?php echo h($submission['Submission']['status']); ?>&nbsp;</td>
		<td><?php echo h($submission['Submission']['flag']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $submission['Submission']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $submission['Submission']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $submission['Submission']['id']), null, __('Are you sure you want to delete # %s?', $submission['Submission']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Submission'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Agens'), array('controller' => 'agens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agen'), array('controller' => 'agens', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reporters'), array('controller' => 'reporters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reporter'), array('controller' => 'reporters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dokumens'), array('controller' => 'dokumens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dokumen'), array('controller' => 'dokumens', 'action' => 'add')); ?> </li>
	</ul>
</div>
