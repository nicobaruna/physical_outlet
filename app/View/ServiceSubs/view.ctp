<div class="serviceSubs view">
<h2><?php echo __('Service Sub'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($serviceSub['ServiceSub']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service'); ?></dt>
		<dd>
			<?php echo $this->Html->link($serviceSub['Service']['id'], array('controller' => 'services', 'action' => 'view', $serviceSub['Service']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nama Sub Layanan'); ?></dt>
		<dd>
			<?php echo h($serviceSub['ServiceSub']['nama_sub_layanan']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Service Sub'), array('action' => 'edit', $serviceSub['ServiceSub']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Service Sub'), array('action' => 'delete', $serviceSub['ServiceSub']['id']), null, __('Are you sure you want to delete # %s?', $serviceSub['ServiceSub']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Service Subs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service Sub'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
	</ul>
</div>
