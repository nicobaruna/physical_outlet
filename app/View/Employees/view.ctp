<div class="employees view">
<h2><?php echo __('Employee'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nama'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['nama']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alamat'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['alamat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tempat Lahir'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['tempat_lahir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tanggal Lahir'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['tanggal_lahir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Telepon'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['no_telepon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employee'), array('action' => 'edit', $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employee'), array('action' => 'delete', $employee['Employee']['id']), null, __('Are you sure you want to delete # %s?', $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Agens'), array('controller' => 'agens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agen'), array('controller' => 'agens', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Agens'); ?></h3>
	<?php if (!empty($employee['Agen'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Level'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($employee['Agen'] as $agen): ?>
		<tr>
			<td><?php echo $agen['id']; ?></td>
			<td><?php echo $agen['user_id']; ?></td>
			<td><?php echo $agen['employee_id']; ?></td>
			<td><?php echo $agen['level']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'agens', 'action' => 'view', $agen['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'agens', 'action' => 'edit', $agen['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'agens', 'action' => 'delete', $agen['id']), null, __('Are you sure you want to delete # %s?', $agen['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Agen'), array('controller' => 'agens', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
