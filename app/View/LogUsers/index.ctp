<div class="logUsers index">
	<h2><?php echo __('Log Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tanggal_log'); ?></th>
			<th><?php echo $this->Paginator->sort('action'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($logUsers as $logUser): ?>
	<tr>
		<td><?php echo h($logUser['LogUser']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($logUser['User']['username'], array('controller' => 'users', 'action' => 'view', $logUser['User']['id'])); ?>
		</td>
		<td><?php echo h($logUser['LogUser']['tanggal_log']); ?>&nbsp;</td>
		<td><?php echo h($logUser['LogUser']['action']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $logUser['LogUser']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $logUser['LogUser']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $logUser['LogUser']['id']), null, __('Are you sure you want to delete # %s?', $logUser['LogUser']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Log User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
