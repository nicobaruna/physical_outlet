<div class="agens index">
	<h2><?php echo __('Agens'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('employee_id'); ?></th>
			<th><?php echo $this->Paginator->sort('level'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($agens as $agen): ?>
	<tr>
		<td><?php echo h($agen['Agen']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($agen['User']['id'], array('controller' => 'users', 'action' => 'view', $agen['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($agen['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $agen['Employee']['id'])); ?>
		</td>
		<td><?php echo h($agen['Agen']['level']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $agen['Agen']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $agen['Agen']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $agen['Agen']['id']), null, __('Are you sure you want to delete # %s?', $agen['Agen']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Agen'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List History Issues'), array('controller' => 'history_issues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History Issue'), array('controller' => 'history_issues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List History Submissions'), array('controller' => 'history_submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History Submission'), array('controller' => 'history_submissions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Issues'), array('controller' => 'issues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Issue'), array('controller' => 'issues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
