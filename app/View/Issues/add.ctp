	<div class="issues form">
<?php echo $this->Form->create('Issue'); ?>
	<fieldset>
		<legend><?php echo __('Complain Handling'); ?></legend>
	<?php
		echo $this->Form->input('company_id', array('empty' => 'Pilih Perusahaan'));
		echo $this->Form->hidden('agen_id',array('value'=>$this->Session->read('Auth.User.agen_id')));
		echo $this->Form->input('reporter_id', array('empty' => 'Pilih Pelapor'));
		echo $this->Form->input('category_id', array('empty' => 'Pilih Category'));
		echo $this->Form->input('no_resi');
		echo $this->Form->input('note');
		echo $this->Form->file('link_gambar', array('required'=>FALSE));
		//echo $this->Form->hidden('tanggal',array('value'=>date("Y-m-d H:i:s")));
		echo $this->Form->input('status', array('options' => array('open'=>'Open', 'closed'=>'Close')));
		//echo $this->Form->input('flag');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Home'), array('controller'=>'users','action' => 'index')); ?></li>
	</ul>
</div>
