<div class="dokumens view">
<h2><?php echo __('Dokumen'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dokumen['Dokumen']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Submission'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dokumen['Submission']['id'], array('controller' => 'submissions', 'action' => 'view', $dokumen['Submission']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link Gambar'); ?></dt>
		<dd>
			<?php echo h($dokumen['Dokumen']['link_gambar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deskrpisi'); ?></dt>
		<dd>
			<?php echo h($dokumen['Dokumen']['deskrpisi']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dokumen'), array('action' => 'edit', $dokumen['Dokumen']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dokumen'), array('action' => 'delete', $dokumen['Dokumen']['id']), null, __('Are you sure you want to delete # %s?', $dokumen['Dokumen']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dokumens'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dokumen'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
