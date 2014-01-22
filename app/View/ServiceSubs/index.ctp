<div class="serviceSubs index">
	<h2><?php echo __('Service Subs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('service_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nama_sub_layanan'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($serviceSubs as $serviceSub): ?>
	<tr>
		<td><?php echo h($serviceSub['ServiceSub']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($serviceSub['Service']['id'], array('controller' => 'services', 'action' => 'view', $serviceSub['Service']['id'])); ?>
		</td>
		<td><?php echo h($serviceSub['ServiceSub']['nama_sub_layanan']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $serviceSub['ServiceSub']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $serviceSub['ServiceSub']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $serviceSub['ServiceSub']['id']), null, __('Are you sure you want to delete # %s?', $serviceSub['ServiceSub']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Service Sub'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
	</ul>
</div>
