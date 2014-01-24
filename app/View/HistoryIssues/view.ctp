<div class="historyIssues view">
<h2><?php echo __('History Issue'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($historyIssue['HistoryIssue']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Issue'); ?></dt>
		<dd>
			<?php echo $this->Html->link($historyIssue['Issue']['id'], array('controller' => 'issues', 'action' => 'view', $historyIssue['Issue']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agen'); ?></dt>
		<dd>
			<?php echo $this->Html->link($historyIssue['Agen']['id'], array('controller' => 'agens', 'action' => 'view', $historyIssue['Agen']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tanggal'); ?></dt>
		<dd>
			<?php echo h($historyIssue['HistoryIssue']['tanggal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($historyIssue['HistoryIssue']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($historyIssue['HistoryIssue']['comment']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit History Issue'), array('action' => 'edit', $historyIssue['HistoryIssue']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete History Issue'), array('action' => 'delete', $historyIssue['HistoryIssue']['id']), null, __('Are you sure you want to delete # %s?', $historyIssue['HistoryIssue']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List History Issues'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History Issue'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Issues'), array('controller' => 'issues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Issue'), array('controller' => 'issues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Agens'), array('controller' => 'agens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agen'), array('controller' => 'agens', 'action' => 'add')); ?> </li>
	</ul>
</div>
