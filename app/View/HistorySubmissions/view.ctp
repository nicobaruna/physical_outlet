<div class="historySubmissions view">
<h2><?php echo __('History Submission'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($historySubmission['HistorySubmission']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Submission'); ?></dt>
		<dd>
			<?php echo $this->Html->link($historySubmission['Submission']['id'], array('controller' => 'submissions', 'action' => 'view', $historySubmission['Submission']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agen'); ?></dt>
		<dd>
			<?php echo $this->Html->link($historySubmission['Agen']['id'], array('controller' => 'agens', 'action' => 'view', $historySubmission['Agen']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tanggal'); ?></dt>
		<dd>
			<?php echo h($historySubmission['HistorySubmission']['tanggal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($historySubmission['HistorySubmission']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($historySubmission['HistorySubmission']['comment']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit History Submission'), array('action' => 'edit', $historySubmission['HistorySubmission']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete History Submission'), array('action' => 'delete', $historySubmission['HistorySubmission']['id']), null, __('Are you sure you want to delete # %s?', $historySubmission['HistorySubmission']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List History Submissions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History Submission'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Agens'), array('controller' => 'agens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agen'), array('controller' => 'agens', 'action' => 'add')); ?> </li>
	</ul>
</div>
