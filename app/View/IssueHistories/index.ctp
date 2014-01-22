<div class="issueHistories index">
	<h2><?php echo __('Issue Histories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('issue_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tanggal'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('comment'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($issueHistories as $issueHistory): ?>
	<tr>
		<td><?php echo h($issueHistory['IssueHistory']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($issueHistory['Issue']['id'], array('controller' => 'issues', 'action' => 'view', $issueHistory['Issue']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($issueHistory['User']['id'], array('controller' => 'users', 'action' => 'view', $issueHistory['User']['id'])); ?>
		</td>
		<td><?php echo h($issueHistory['IssueHistory']['tanggal']); ?>&nbsp;</td>
		<td><?php echo h($issueHistory['IssueHistory']['status']); ?>&nbsp;</td>
		<td><?php echo h($issueHistory['IssueHistory']['comment']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $issueHistory['IssueHistory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $issueHistory['IssueHistory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $issueHistory['IssueHistory']['id']), null, __('Are you sure you want to delete # %s?', $issueHistory['IssueHistory']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Issue History'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Issues'), array('controller' => 'issues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Issue'), array('controller' => 'issues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
