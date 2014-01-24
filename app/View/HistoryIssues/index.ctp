<div class="historyIssues index">
	<h2><?php echo __('History Issues'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('issue_id'); ?></th>
			<th><?php echo $this->Paginator->sort('agen_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tanggal'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('comment'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($historyIssues as $historyIssue): ?>
	<tr>
		<td><?php echo h($historyIssue['HistoryIssue']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($historyIssue['Issue']['id'], array('controller' => 'issues', 'action' => 'view', $historyIssue['Issue']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($historyIssue['Agen']['id'], array('controller' => 'agens', 'action' => 'view', $historyIssue['Agen']['id'])); ?>
		</td>
		<td><?php echo h($historyIssue['HistoryIssue']['tanggal']); ?>&nbsp;</td>
		<td><?php echo h($historyIssue['HistoryIssue']['status']); ?>&nbsp;</td>
		<td><?php echo h($historyIssue['HistoryIssue']['comment']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $historyIssue['HistoryIssue']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $historyIssue['HistoryIssue']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $historyIssue['HistoryIssue']['id']), null, __('Are you sure you want to delete # %s?', $historyIssue['HistoryIssue']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New History Issue'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Issues'), array('controller' => 'issues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Issue'), array('controller' => 'issues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Agens'), array('controller' => 'agens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agen'), array('controller' => 'agens', 'action' => 'add')); ?> </li>
	</ul>
</div>
