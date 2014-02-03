<div class="issues index">
	<h2><?php echo __('Issues'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('company_id'); ?></th>
			<th><?php echo $this->Paginator->sort('agen_id'); ?></th>
			<th><?php echo $this->Paginator->sort('reporter_id'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('no_resi'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('link_gambar'); ?></th>
			<th><?php echo $this->Paginator->sort('tanggal'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('flag'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($issues as $issue): ?>
	<tr>
		<td><?php echo h($issue['Issue']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($issue['Company']['id'], array('controller' => 'companies', 'action' => 'view', $issue['Company']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($issue['Agen']['id'], array('controller' => 'agens', 'action' => 'view', $issue['Agen']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($issue['Reporter']['id'], array('controller' => 'reporters', 'action' => 'view', $issue['Reporter']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($issue['Category']['id'], array('controller' => 'categories', 'action' => 'view', $issue['Category']['id'])); ?>
		</td>
		<td><?php echo h($issue['Issue']['no_resi']); ?>&nbsp;</td>
		<td><?php echo h($issue['Issue']['note']); ?>&nbsp;</td>
		<td><?php echo h($issue['Issue']['link_gambar']); ?>&nbsp;</td>
		<td><?php echo h($issue['Issue']['tanggal']); ?>&nbsp;</td>
		<td><?php echo h($issue['Issue']['status']); ?>&nbsp;</td>
		<td><?php echo h($issue['Issue']['flag']); ?>&nbsp;</td>
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
		<?php if($this->Session->read('Auth.User.agen_level') == 1) { ?>
			<li><?php echo $this->Html->link(__('Home'), array('controller'=>'users','action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New Issue'), array('action' => 'add')); ?></li>
		<?php } else if($this->Session->read('Auth.User.agen_level') == 2) { ?>
			<li><?php echo $this->Html->link(__('Home'), array('controller'=>'users','action' => 'index_backroom')); ?></li>
		<?php } ?>
	</ul>
</div>
