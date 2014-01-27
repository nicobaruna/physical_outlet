<div class="submissions form">
<?php echo $this->Form->create('Submission'); ?>
	<fieldset>
		<legend><?php echo __('Add Submission'); ?></legend>
	<?php
		echo $this->Form->input('company_id',array('empty'=>'Choose One'));
		echo $this->Form->hidden('agen_id',array('value'=>$this->Session->read('Auth.User.agen_id')));
		echo $this->Form->input('reporter_id',array('empty'=>'Choose One'));
		echo $this->Form->input('service_id',array('empty'=>'Choose One'));
		// echo $this->Form->input('tanggal');
		echo $this->Form->input('note');
		echo $this->Form->input('status', array('options' => array('open'=>'Open', 'close'=>'Close')));
		// echo $this->Form->input('flag');
	?>
	</fieldset>
	<fieldset>
		<legend><?php echo __('Masukan Berkas (Jika Ada)'); ?></legend>
	<?php
		echo $this->Form->file('Dokumen.0.link_gambar',array('required'=>FALSE));
		echo $this->Form->input('Dokumen.0.deskripsi',array('required'=>FALSE));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Submissions'), array('action' => 'index')); ?></li>
	</ul>
</div>
