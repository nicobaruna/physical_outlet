<div class="issueHistories view">
<h2><?php echo __('Issue History'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($issueHistory['IssueHistory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Issue'); ?></dt>
		<dd>
			<?php echo $this->Html->link($issueHistory['Issue']['id'], array('controller' => 'issues', 'action' => 'view', $issueHistory['Issue']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($issueHistory['User']['id'], array('controller' => 'users', 'action' => 'view', $issueHistory['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tanggal'); ?></dt>
		<dd>
			<?php echo h($issueHistory['IssueHistory']['tanggal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($issueHistory['IssueHistory']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($issueHistory['IssueHistory']['comment']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Issue History'), array('action' => 'edit', $issueHistory['IssueHistory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Issue History'), array('action' => 'delete', $issueHistory['IssueHistory']['id']), null, __('Are you sure you want to delete # %s?', $issueHistory['IssueHistory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Issue Histories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Issue History'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Issues'), array('controller' => 'issues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Issue'), array('controller' => 'issues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
