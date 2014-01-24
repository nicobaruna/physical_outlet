<div class="reporters view">
<h2><?php echo __('Reporter'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($reporter['Reporter']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nama'); ?></dt>
		<dd>
			<?php echo h($reporter['Reporter']['nama']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($reporter['Reporter']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Telpon'); ?></dt>
		<dd>
			<?php echo h($reporter['Reporter']['no_telpon']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reporter'), array('action' => 'edit', $reporter['Reporter']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Reporter'), array('action' => 'delete', $reporter['Reporter']['id']), null, __('Are you sure you want to delete # %s?', $reporter['Reporter']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Reporters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reporter'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Issues'), array('controller' => 'issues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Issue'), array('controller' => 'issues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Issues'); ?></h3>
	<?php if (!empty($reporter['Issue'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Agen Id'); ?></th>
		<th><?php echo __('Reporter Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('No Resi'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Link Gambar'); ?></th>
		<th><?php echo __('Tanggal'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Flag'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($reporter['Issue'] as $issue): ?>
		<tr>
			<td><?php echo $issue['id']; ?></td>
			<td><?php echo $issue['company_id']; ?></td>
			<td><?php echo $issue['agen_id']; ?></td>
			<td><?php echo $issue['reporter_id']; ?></td>
			<td><?php echo $issue['category_id']; ?></td>
			<td><?php echo $issue['no_resi']; ?></td>
			<td><?php echo $issue['note']; ?></td>
			<td><?php echo $issue['link_gambar']; ?></td>
			<td><?php echo $issue['tanggal']; ?></td>
			<td><?php echo $issue['status']; ?></td>
			<td><?php echo $issue['flag']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'issues', 'action' => 'view', $issue['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'issues', 'action' => 'edit', $issue['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'issues', 'action' => 'delete', $issue['id']), null, __('Are you sure you want to delete # %s?', $issue['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Issue'), array('controller' => 'issues', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Submissions'); ?></h3>
	<?php if (!empty($reporter['Submission'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Agen Id'); ?></th>
		<th><?php echo __('Reporter Id'); ?></th>
		<th><?php echo __('Service Id'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Flag'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($reporter['Submission'] as $submission): ?>
		<tr>
			<td><?php echo $submission['id']; ?></td>
			<td><?php echo $submission['company_id']; ?></td>
			<td><?php echo $submission['agen_id']; ?></td>
			<td><?php echo $submission['reporter_id']; ?></td>
			<td><?php echo $submission['service_id']; ?></td>
			<td><?php echo $submission['note']; ?></td>
			<td><?php echo $submission['status']; ?></td>
			<td><?php echo $submission['flag']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'submissions', 'action' => 'view', $submission['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'submissions', 'action' => 'edit', $submission['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'submissions', 'action' => 'delete', $submission['id']), null, __('Are you sure you want to delete # %s?', $submission['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
