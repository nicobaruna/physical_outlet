<div class="issues view">
<h2><?php echo __('Issue'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($issue['Issue']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service'); ?></dt>
		<dd>
			<?php echo $this->Html->link($issue['Service']['id'], array('controller' => 'services', 'action' => 'view', $issue['Service']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company Id'); ?></dt>
		<dd>
			<?php echo h($issue['Issue']['company_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nama Pelapor'); ?></dt>
		<dd>
			<?php echo h($issue['Issue']['nama_pelapor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telepon'); ?></dt>
		<dd>
			<?php echo h($issue['Issue']['telepon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($issue['Issue']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deskripsi'); ?></dt>
		<dd>
			<?php echo h($issue['Issue']['deskripsi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link Gambar'); ?></dt>
		<dd>
			<?php echo h($issue['Issue']['link_gambar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tanggal Open'); ?></dt>
		<dd>
			<?php echo h($issue['Issue']['tanggal_open']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jam Open'); ?></dt>
		<dd>
			<?php echo h($issue['Issue']['jam_open']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tanggal Close'); ?></dt>
		<dd>
			<?php echo h($issue['Issue']['tanggal_close']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jam Close'); ?></dt>
		<dd>
			<?php echo h($issue['Issue']['jam_close']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($issue['Issue']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Counter'); ?></dt>
		<dd>
			<?php echo h($issue['Issue']['counter']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Issue'), array('action' => 'edit', $issue['Issue']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Issue'), array('action' => 'delete', $issue['Issue']['id']), null, __('Are you sure you want to delete # %s?', $issue['Issue']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Issues'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Issue'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Issue Histories'), array('controller' => 'issue_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Issue History'), array('controller' => 'issue_histories', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Issue Histories'); ?></h3>
	<?php if (!empty($issue['IssueHistory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Issue Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Tanggal'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($issue['IssueHistory'] as $issueHistory): ?>
		<tr>
			<td><?php echo $issueHistory['id']; ?></td>
			<td><?php echo $issueHistory['issue_id']; ?></td>
			<td><?php echo $issueHistory['user_id']; ?></td>
			<td><?php echo $issueHistory['tanggal']; ?></td>
			<td><?php echo $issueHistory['status']; ?></td>
			<td><?php echo $issueHistory['comment']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'issue_histories', 'action' => 'view', $issueHistory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'issue_histories', 'action' => 'edit', $issueHistory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'issue_histories', 'action' => 'delete', $issueHistory['id']), null, __('Are you sure you want to delete # %s?', $issueHistory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Issue History'), array('controller' => 'issue_histories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
