<div class="issues form">
<?php echo $this->Form->create('Issue'); ?>
	<fieldset>
		<legend><?php echo __('Edit Issue'); ?></legend>
	<?php
		echo 'Nama Perusahan : '.$this->request->data['Company']['nama_perusahaan']."<br />";
		echo 'CSR : '.$this->request->data['Agen']['nama']."<br />";
		echo 'Pelapor : '.$this->request->data['Reporter']['nama']."<br />";
		echo 'Kategori : '.$this->request->data['Category']['nama']."<br />";
		echo 'Nomor Resi : '.$this->request->data['Issue']['no_resi']."<br />";
		echo 'Catatan : '.$this->request->data['Issue']['note']."<br />";
		echo 'Dokumen : '.$this->request->data['Issue']['link_gambar']."<br />";
		echo 'Status : '.$this->request->data['Issue']['status']."<br />";
		echo 'Tanggal Open : '.$this->request->data['Issue']['tanggal']."<br /><br />";
		echo $this->Form->input('id');
		// echo $this->Form->input('company_id');
		// echo $this->Form->input('agen_id');
		// echo $this->Form->input('reporter_id');
		// echo $this->Form->input('category_id');
		// echo $this->Form->input('no_resi');
		// echo $this->Form->input('note');
		// echo $this->Form->input('link_gambar');
		// echo $this->Form->input('tanggal');
		$i = 0;
		foreach($this->request->data['HistoryIssue'] as $hist_issue){
			if($i >= 0){
				echo "Agen yang bertanggung jawab : ". $hist_issue['Agen']['nama']."<br />";
				echo "Tanggal : ". $hist_issue['tanggal']."<br />";
				echo "status : ". $hist_issue['status']."<br />";
				echo "Catatan : ". $hist_issue['comment']."<br /><br />";
			}
			$i++;
		}

		if($this->Session->read('Auth.User.agen_level') == 1){
			echo $this->Form->input('status',array('options' => array('closed'=>'Close', 'customer_pending'=>'Customer Pending','open'=>'Open Again')));
		}else if($this->Session->read('Auth.User.agen_level') == 2){
			echo $this->Form->input('status',array('options' => array('process'=>'Process', 'pending'=>'Pending' , 'done'=>'Done', 'ilcs_pending'=>'Ekskalasi ILCS')));
		}
		
		echo $this->Form->input('HistoryIssue.0.comment');
		// echo $this->Form->input('flag');
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
