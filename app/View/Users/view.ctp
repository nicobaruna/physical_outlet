<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nama'); ?></dt>
		<dd>
			<?php echo h($user['User']['nama']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nik'); ?></dt>
		<dd>
			<?php echo h($user['User']['nik']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Level'); ?></dt>
		<dd>
			<?php echo h($user['User']['level']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($user['User']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rekapitulations'), array('controller' => 'rekapitulations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rekapitulation'), array('controller' => 'rekapitulations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Rekapitulations'); ?></h3>
	<?php if (!empty($user['Rekapitulation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Issue Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Rekapitulation'] as $rekapitulation): ?>
		<tr>
			<td><?php echo $rekapitulation['issue_id']; ?></td>
			<td><?php echo $rekapitulation['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'rekapitulations', 'action' => 'view', $rekapitulation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'rekapitulations', 'action' => 'edit', $rekapitulation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'rekapitulations', 'action' => 'delete', $rekapitulation['id']), null, __('Are you sure you want to delete # %s?', $rekapitulation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Rekapitulation'), array('controller' => 'rekapitulations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
