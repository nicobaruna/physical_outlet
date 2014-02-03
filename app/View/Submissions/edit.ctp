<div class="submissions form">
<?php echo $this->Form->create('Submission'); ?>
	<fieldset>
		<legend><?php echo __('Edit Submission'); ?></legend>
	<?php

		echo 'Nama Perusahan : '.$this->request->data['Company']['nama_perusahaan']."<br />";
		echo 'CSR : '.$this->request->data['Agen']['nama']."<br />";
		echo 'Pelapor : '.$this->request->data['Reporter']['nama']."<br />";
		echo 'Service : '.$this->request->data['Service']['nama_layanan']."<br />";
		echo 'Catatan : '.$this->request->data['Submission']['note']."<br />";

		foreach($this->request->data['Dokumen'] as $dok){
			echo "Dokumen : ".$dok['link_gambar']."<br />";
			echo "Dokumen : ".$dok['deskrpisi']."<br />";
		}

		echo 'Status : '.$this->request->data['Submission']['status']."<br />";
		echo 'Tanggal Open : '.$this->request->data['Submission']['tanggal']."<br /><br />";

		echo $this->Form->input('id');
		// echo $this->Form->input('company_id');
		// echo $this->Form->input('agen_id');
		// echo $this->Form->input('reporter_id');
		// echo $this->Form->input('service_id');
		// echo $this->Form->input('tanggal');
		// echo $this->Form->input('note');
		// echo $this->Form->input('status');
		// echo $this->Form->input('flag');

		$i = 0;
		foreach($this->request->data['HistorySubmission'] as $his_sub){
			if($i >= 0){
				echo "Agen yang bertanggung jawab : ". $his_sub['Agen']['nama']."<br />";
				echo "Tanggal : ". $his_sub['tanggal']."<br />";
				echo "status : ". $his_sub['status']."<br />";
				echo "Catatan : ". $his_sub['comment']."<br /><br />";
			}
			$i++;
		}

		if($this->Session->read('Auth.User.agen_level') == 1){
			echo $this->Form->input('status',array('options' => array('closed'=>'Close', 'customer_pending'=>'Customer Pending','open'=>'Open Again')));
		}else if($this->Session->read('Auth.User.agen_level') == 2){
			echo $this->Form->input('status',array('options' => array('process'=>'Process', 'pending'=>'Pending' , 'done'=>'Done', 'ilcs_pending'=>'Ekskalasi ILCS')));
		}
		echo $this->Form->input('HistorySubmission.0.comment');

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?></li>
	</ul>
</div>
