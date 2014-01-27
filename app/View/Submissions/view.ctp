<div class="submissions view">
<h2><?php echo __('Submission'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company Id'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['company_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agen Id'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['agen_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reporter Id'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['reporter_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service Id'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['service_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tanggal'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['tanggal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flag'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['flag']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Submission'), array('action' => 'edit', $submission['Submission']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Submission'), array('action' => 'delete', $submission['Submission']['id']), null, __('Are you sure you want to delete # %s?', $submission['Submission']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('action' => 'add')); ?> </li>
	</ul>
</div>
