<div class="submissions view">
<h2><?php echo __('Submission'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($submission['Company']['id'], array('controller' => 'companies', 'action' => 'view', $submission['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agen'); ?></dt>
		<dd>
			<?php echo $this->Html->link($submission['Agen']['id'], array('controller' => 'agens', 'action' => 'view', $submission['Agen']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reporter'); ?></dt>
		<dd>
			<?php echo $this->Html->link($submission['Reporter']['id'], array('controller' => 'reporters', 'action' => 'view', $submission['Reporter']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service'); ?></dt>
		<dd>
			<?php echo $this->Html->link($submission['Service']['id'], array('controller' => 'services', 'action' => 'view', $submission['Service']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flag'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['flag']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Submission'), array('action' => 'edit', $submission['Submission']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Submission'), array('action' => 'delete', $submission['Submission']['id']), null, __('Are you sure you want to delete # %s?', $submission['Submission']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Dokumens'); ?></h3>
	<?php if (!empty($submission['Dokumen'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Submission Id'); ?></th>
		<th><?php echo __('Link Gambar'); ?></th>
		<th><?php echo __('Deskrpisi'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($submission['Dokumen'] as $dokumen): ?>
		<tr>
			<td><?php echo $dokumen['id']; ?></td>
			<td><?php echo $dokumen['submission_id']; ?></td>
			<td><?php echo $dokumen['link_gambar']; ?></td>
			<td><?php echo $dokumen['deskrpisi']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dokumens', 'action' => 'view', $dokumen['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dokumens', 'action' => 'edit', $dokumen['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dokumens', 'action' => 'delete', $dokumen['id']), null, __('Are you sure you want to delete # %s?', $dokumen['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dokumen'), array('controller' => 'dokumens', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
