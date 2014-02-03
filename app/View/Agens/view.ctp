<div class="agens view">
<h2><?php echo __('Agen'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($agen['Agen']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($agen['User']['username'], array('controller' => 'users', 'action' => 'view', $agen['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nama'); ?></dt>
		<dd>
			<?php echo h($agen['Agen']['nama']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alamat'); ?></dt>
		<dd>
			<?php echo h($agen['Agen']['alamat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tempat Lahir'); ?></dt>
		<dd>
			<?php echo h($agen['Agen']['tempat_lahir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tanggal Lahir'); ?></dt>
		<dd>
			<?php echo h($agen['Agen']['tanggal_lahir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Telepon'); ?></dt>
		<dd>
			<?php echo h($agen['Agen']['no_telepon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($agen['Agen']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Level'); ?></dt>
		<dd>
			<?php echo h($agen['Agen']['level']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Agen'), array('action' => 'edit', $agen['Agen']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Agen'), array('action' => 'delete', $agen['Agen']['id']), null, __('Are you sure you want to delete # %s?', $agen['Agen']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Agens'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agen'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related History Issues'); ?></h3>
	<?php if (!empty($agen['HistoryIssue'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Issue Id'); ?></th>
		<th><?php echo __('Agen Id'); ?></th>
		<th><?php echo __('Tanggal'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($agen['HistoryIssue'] as $historyIssue): ?>
		<tr>
			<td><?php echo $historyIssue['id']; ?></td>
			<td><?php echo $historyIssue['issue_id']; ?></td>
			<td><?php echo $historyIssue['agen_id']; ?></td>
			<td><?php echo $historyIssue['tanggal']; ?></td>
			<td><?php echo $historyIssue['status']; ?></td>
			<td><?php echo $historyIssue['comment']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'history_issues', 'action' => 'view', $historyIssue['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'history_issues', 'action' => 'edit', $historyIssue['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'history_issues', 'action' => 'delete', $historyIssue['id']), null, __('Are you sure you want to delete # %s?', $historyIssue['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New History Issue'), array('controller' => 'history_issues', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related History Submissions'); ?></h3>
	<?php if (!empty($agen['HistorySubmission'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Submission Id'); ?></th>
		<th><?php echo __('Agen Id'); ?></th>
		<th><?php echo __('Tanggal'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($agen['HistorySubmission'] as $historySubmission): ?>
		<tr>
			<td><?php echo $historySubmission['id']; ?></td>
			<td><?php echo $historySubmission['submission_id']; ?></td>
			<td><?php echo $historySubmission['agen_id']; ?></td>
			<td><?php echo $historySubmission['tanggal']; ?></td>
			<td><?php echo $historySubmission['status']; ?></td>
			<td><?php echo $historySubmission['comment']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'history_submissions', 'action' => 'view', $historySubmission['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'history_submissions', 'action' => 'edit', $historySubmission['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'history_submissions', 'action' => 'delete', $historySubmission['id']), null, __('Are you sure you want to delete # %s?', $historySubmission['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New History Submission'), array('controller' => 'history_submissions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Issues'); ?></h3>
	<?php if (!empty($agen['Issue'])): ?>
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
	<?php foreach ($agen['Issue'] as $issue): ?>
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
	<?php if (!empty($agen['Submission'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Agen Id'); ?></th>
		<th><?php echo __('Reporter Id'); ?></th>
		<th><?php echo __('Service Id'); ?></th>
		<th><?php echo __('Tanggal'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Flag'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($agen['Submission'] as $submission): ?>
		<tr>
			<td><?php echo $submission['id']; ?></td>
			<td><?php echo $submission['company_id']; ?></td>
			<td><?php echo $submission['agen_id']; ?></td>
			<td><?php echo $submission['reporter_id']; ?></td>
			<td><?php echo $submission['service_id']; ?></td>
			<td><?php echo $submission['tanggal']; ?></td>
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
