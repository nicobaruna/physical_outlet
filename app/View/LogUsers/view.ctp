<div class="logUsers view">
<h2><?php echo __('Log User'); ?></h2>
	<dl>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($logUser['User']['id'], array('controller' => 'users', 'action' => 'view', $logUser['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tanggal Log'); ?></dt>
		<dd>
			<?php echo h($logUser['LogUser']['tanggal_log']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jam Log'); ?></dt>
		<dd>
			<?php echo h($logUser['LogUser']['jam_log']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Log User'), array('action' => 'edit', $logUser['LogUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Log User'), array('action' => 'delete', $logUser['LogUser']['id']), null, __('Are you sure you want to delete # %s?', $logUser['LogUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Log Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
