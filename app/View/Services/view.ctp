<div class="services view">
<h2><?php echo __('Service'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($service['Service']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nama Layanan'); ?></dt>
		<dd>
			<?php echo h($service['Service']['nama_layanan']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deskripsi Layanan'); ?></dt>
		<dd>
			<?php echo h($service['Service']['deskripsi_layanan']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Service'), array('action' => 'edit', $service['Service']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Service'), array('action' => 'delete', $service['Service']['id']), null, __('Are you sure you want to delete # %s?', $service['Service']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Issues'), array('controller' => 'issues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Issue'), array('controller' => 'issues', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Issues'); ?></h3>
	<?php if (!empty($service['Issue'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Service Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Nama Pelapor'); ?></th>
		<th><?php echo __('Telepon'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Deskripsi'); ?></th>
		<th><?php echo __('Link Gambar'); ?></th>
		<th><?php echo __('Tanggal Open'); ?></th>
		<th><?php echo __('Jam Open'); ?></th>
		<th><?php echo __('Tanggal Close'); ?></th>
		<th><?php echo __('Jam Close'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Counter'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($service['Issue'] as $issue): ?>
		<tr>
			<td><?php echo $issue['id']; ?></td>
			<td><?php echo $issue['service_id']; ?></td>
			<td><?php echo $issue['company_id']; ?></td>
			<td><?php echo $issue['nama_pelapor']; ?></td>
			<td><?php echo $issue['telepon']; ?></td>
			<td><?php echo $issue['email']; ?></td>
			<td><?php echo $issue['deskripsi']; ?></td>
			<td><?php echo $issue['link_gambar']; ?></td>
			<td><?php echo $issue['tanggal_open']; ?></td>
			<td><?php echo $issue['jam_open']; ?></td>
			<td><?php echo $issue['tanggal_close']; ?></td>
			<td><?php echo $issue['jam_close']; ?></td>
			<td><?php echo $issue['status']; ?></td>
			<td><?php echo $issue['counter']; ?></td>
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
