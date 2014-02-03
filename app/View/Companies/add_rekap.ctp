<div class="row featurette" id="registrationform">	
	<div class="col-md-1"></div>
	<div class="col-md-10" id="registrationbox">
		<img src="<?php echo $this->base; ?>/img/pin.png" class="pull-right" />
		<h2>Registration</h2>
		<?php echo $this->Form->create('Company'); ?>
		  <table class="table table-hovered">
			<tr>
				<td>Pelayanan yang diinginkan</td>
				<td>:</td>
				<td>
					<div class="control-group">
					  <div class="controls">
						<?php foreach($services as $key=>$item) : ?> 
						<?php if ($item['Service']['parent_id'] == NULL) {?>
						<?php echo $this->Form->checkbox('CompanyService.'.$key.'.service_id',array('value'=>$item['Service']['id']));?>
						<?php echo $this->Form->label($item['Service']['nama_layanan']) ?>
						<?php } ?>
						<?php endforeach; ?>
					  </div>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="3"><h3 class="judul_tabel">Data Perusahaan</h3></td>
			</tr>
			<tr>
				<td>Nama Perusahaan</td>
				<td>:</td>
				<td><?php echo $this->Form->input('nama_perusahaan',array('label'=>false,'style'=>'width:100%','placeholder'=>'Nama Perusahaan'));?></td>
			</tr>
			<tr>
				<td>NPWP</td>
				<td>:</td>
				<td><?php echo $this->Form->input('npwp',array('label'=>false,'style'=>'width:100%','placeholder'=>'NPWP'));?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><?php echo $this->Form->textarea('alamat',array('label'=>false,'style'=>'width:100%','placeholder'=>'Alamat'));?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><?php echo $this->Form->input('email',array('label'=>false,'style'=>'width:100%','placeholder'=>'Email'));?></td>
			</tr>
			<tr>
				<td>Tingkat Organisasi</td>
				<td>:</td>
				<td><?php echo $this->Form->input('tingkat_organisasi',array('label'=>false,'style'=>'width:100%','placeholder'=>'Pusat / Cabang'));?></input></td>
			</tr>
			<tr>
				<td>Alamat Penagihan</td>
				<td>:</td>
				<td><?php echo $this->Form->textarea('alamat_penagihan',array('label'=>false,'style'=>'width:100%','placeholder'=>'Alamat Penagihan'));?></td>
			</tr>
			<tr>
				<td>Masa Berlaku</td>
				<td>:</td>
				<td><?php echo $this->Form->date('masa_berlaku',array('label'=>false,'placeholder'=>'Masa Berlaku','class'=>'dp4'));?></td>
			</tr>
			<tr>
				<td>No Telepon</td>
				<td>:</td>
				<td><?php echo $this->Form->input('no_telepon',array('label'=>false,'style'=>'width:100%','placeholder'=>'Nomor Telepon'));?></td>
			</tr>
			<tr>
				<td>Group Usaha</td>
				<td>:</td>
				<td><?php echo $this->Form->input('group_usaha',array('label'=>false,'style'=>'width:100%','placeholder'=>'Group Usaha'));?></td>
			</tr>
			<tr>
				<td>Bidang Usaha</td>
				<td>:</td>
				<td>
					<div class="control-group">
					  <div class="controls">
						<?php foreach($areas as $key=>$item) : ?> 
						<?php echo $this->Form->checkbox('CompanyArea.'.$key.'.area_id',array('value'=>$item['Area']['id']));?>
						<?php echo $this->Form->label($item['Area']['nama']) ?>
						<?php endforeach; ?>
					  </div>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="3" ><h3 class="judul_tabel">Data Penanggung Jawab</h3></td>
			</tr>
			<tr>
				<td>Nama Pimpinan Perusahaan</td>
				<td>:</td>
				<td><?php echo $this->Form->input('CompanyResponsible.0.nama_pimpinan',array('label'=>false,'style'=>'width:100%','placeholder'=>'Nama Penanggung Jawab'));?></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>:</td>
				<td><?php echo $this->Form->input('CompanyResponsible.0.jabatan',array('label'=>false,'style'=>'width:100%','placeholder'=>'Jabatan'));?></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td>:</td>
				<td>
					  <?php echo $this->Form->input('CompanyResponsible.0.tempat_lahir',array('label'=>false,'style'=>'width:100%','placeholder'=>'Tempat Lahir'));?>
					 
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td>  
					<?php echo $this->Form->date('CompanyResponsible.0.tanggal_lahir',array('label'=>false));?>
				</td>
			</tr>
			<tr>
				<td><span class="fg-green">Alamat Rumah</span> <br /><span style="font-size: 12px;">(sesuai tanda pengenal)</span></td>
				<td>:</td>
				<td><?php echo $this->Form->textarea('CompanyResponsible.0.alamat',array('label'=>false,'style'=>'width:100%','placeholder'=>'Alamat'));?></td>
			</tr>
			<tr>
				<td><span class="fg-green">No Telepon</span></td>
				<td>:</td>
				<td><?php echo $this->Form->input('CompanyResponsible.0.no_telepon',array('label'=>false,'style'=>'width:100%','placeholder'=>'No Telepon'));?></td>
			</tr>
			<tr>
				<td><span class="fg-green">Email</span></td>
				<td>:</td>
				<td><?php echo $this->Form->input('CompanyResponsible.0.email',array('label'=>false,'style'=>'width:100%','placeholder'=>'Email'));?></td>
			</tr>
			<!--<tr>
				<td><span class="fg-green">Telepon Rumah</span></td>
				<td>:</td>
				<td><?php //echo $this->Form->input('CompanyResponsible.0.nama_pimpinan',array('label'=>false,'style'=>'width:100%','placeholder'=>'Telepon'));?></input></td>
			</tr>
			<tr>
				<td><span class="fg-cyan">Alamat Kantor</span></td>
				<td>:</td>
				<td><textarea rows="3" style="width:100%;"></textarea></td>
			</tr>
			<tr>
				<td><span class="fg-cyan">Kota</span></td>
				<td>:</td>
				<td><input type="text" placeholder="City" style="width:100%;"></input></td>
			</tr>
			<tr>
				<td><span class="fg-cyan">Kode Pos</span></td>
				<td>:</td>
				<td><input type="text" placeholder="Postal Code" style="width:100%;"></input></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="email" placeholder="Email" style="width:100%;"></input></td>
			</tr>-->
			<tr>
				<td><strong>Tanda Pengenal</strong></td>
				<td>:</td>
				<td>
					<div class="control-group">
					  <div class="controls">
						<!--<label class="radio-inline">
						  <input type="radio" name="" id="ktpcheck" value="">
						  KTP
						</label>
						<label class="radio-inline">
						  <input type="radio" name="" id="simcheck" value="">
						  SIM
						</label>
						<label class="radio-inline">
						  <input type="radio" name="" id="passportcheck" value="">
						  Passport
						</label>
						<label class="radio-inline">
						  <input type="radio" name="" id="lainnyacheck" value="">
						  Lainnya
						</label>-->
						<input type="hidden" name="data[CompanyResponsible][0][tanda_pengenal]" id="CompanyResponsible0TandaPengenal_" value />
						<input type="checkbox" name="data[CompanyResponsible][0][tanda_pengenal]" id="ktpcheck" value="KTP" required="false" />
						<label for="ktpcheck" >KTP</label>
						<input type="checkbox" name="data[CompanyResponsible][0][tanda_pengenal]" id="simcheck" value="SIM" required="false" />
						<label for="simcheck" >SIM</label>
						<input type="checkbox" name="data[CompanyResponsible][0][tanda_pengenal]" id="passportcheck" value="Passport" required="false" />
						<label for="passportcheck" >Passport</label>
						<input type="checkbox" name="data[CompanyResponsible][0][tanda_pengenal]" id="lainnyacheck" value="Lainnya" required="false" />
						<label for="lainnyacheck" >Lainnya</label>
						<?php //echo $this->Form->input('CompanyResponsible.0.tanda_pengenal',array('label'=>false,'options'=>array(0=>'Please select','KTP'=>'KTP','SIM'=>'SIM','PASSPORT'=>'PASSPORT')));?>
					  </div>
					</div>
				</td>
			</tr>
			<tr id="ktp" style="display:none">
				<td><span style="margin-left: 40px;">No. KTP</span></td>
				<td>:</td>
				<td><input name="data[CompanyResponsible][0][nomor_tanda_pengenal]" style="width:100%" type="text" id="CompanyResponsible0NomorTandaPengenal" required="required" placeholder="KTP Number" /></td>
			</tr>
			<tr id="sim" style="display:none">
				<td><span style="margin-left: 40px;">No. SIM</span></td>
				<td>:</td>
				<td><input name="data[CompanyResponsible][0][nomor_tanda_pengenal]" style="width:100%" type="text" id="CompanyResponsible0NomorTandaPengenal" required="required" placeholder="Driver Number" /></td>
			</tr>
			<tr id="passport" style="display:none">
				<td><span style="margin-left: 40px;">No. Passport</span></td>
				<td>:</td>
				<td><input name="data[CompanyResponsible][0][nomor_tanda_pengenal]" style="width:100%" type="text" id="CompanyResponsible0NomorTandaPengenal" required="required" placeholder="Passport Number" /></td>
			</tr>
			<tr id="lainnya" style="display:none">
				<td><span style="margin-left: 40px;">Lainnya</span></td>
				<td>:</td>
				<td><input name="data[CompanyResponsible][0][nomor_tanda_pengenal]" style="width:100%" type="text" id="CompanyResponsible0NomorTandaPengenal" required="required" placeholder="Lainnya Number" /></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<div class="control-group">
					  <div class="controls">
						<?php echo $this->Form->radio('CompanyResponsible.0.jenis_kelamin',array('M' => 'Laki - Laki', 'F' => 'Perempuan'),array('legend'=>false)); ?>
					  </div>
					</div>
				</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<td>
					<div class="control-group">
					  <div class="controls">
						<?php echo $this->Form->radio('CompanyResponsible.0.agama',array('Islam'=>'Islam','Kristen'=>'Kristen','Katolik'=>'Katolik','Buddha'=>'Buddha','Hindu'=>'Hindu'),array('legend'=>false)); ?>
					  </div>
					</div>
				</td>
			</tr>
		  </table>
		  <h3 class="judul_tabel">Pengurus Perusahaan</h3>
		  <table class="table table-striped" id="pengurus">
			<thead>
				<tr class="bg-olive fg-white">
					<th>No</th>
					<th>Nama</th>
					<th>Jabatan</th>
					<th>Alamat</th>
					<th>Alamat Perusahaan</th>
				</tr>
			</thead>
			<tbody>
				<?php for($x = 0 ; $x<4 ;$x++) { ?>
	   			<tr>
	   				<td><?php echo $x+1 ?></td>
			   		<td><?php echo $this->Form->input('CompanyStaff.'.$x.'.nama',array('label'=>false, 'required'=>false)); ?></td>
			   		<td><?php echo $this->Form->input('CompanyStaff.'.$x.'.jabatan',array('label'=>false, 'required'=>false));  ?></td>
			   		<td><?php echo $this->Form->input('CompanyStaff.'.$x.'.alamat',array('label'=>false, 'required'=>false)); ?></td>
			   		<td><?php echo $this->Form->input('CompanyStaff.'.$x.'.alamat_perusahaan',array('label'=>false, 'required'=>false));  ?></td>
			   	</tr>
	   			<?php } ?>
			</tbody>
		  </table>
		  <!--
		  <h3 class="judul_tabel" style="margin-top:80px;">Kontrak</h3>
		  <table class="table table-hovered">
			<tr>
				<td>Alamat Penagihan</td>
				<td>:</td>
				<td><textarea rows="3" style="width:100%;"></textarea></td>
			</tr>
			<tr>
				<td>Masa Berlaku Kontrak</td>
				<td>:</td>
				<td><input class="span2" size="16" type="text" value="" id="dp4"> </td>
			</tr>
		  </table>
		  <div class="control-group" style="margin-top:30px; padding-bottom:20px;">
			<div class="controls pull-right">
			  <button type="submit" class="btn bg-cyan">Submit</button>
			</div>
		  </div>
		</form>-->
		<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</div>

<script>
	$('#dp3').datepicker({
		viewMode: 'years',
		format:'dd-mm-yyyy'});
	$('#dp4').datepicker({
		viewMode: 'years',
		format:'dd-mm-yyyy'});
	
</script>
<script>
	var now = 3;
	var nextrow = 4;
	
	function addRow(){
		
		
		$("#pengurus > tbody:last").append('<tr>'+
										   '<td>'+ nextrow +'</td>'+
										   '<td><input type="text" placeholder="Nama"></td>'+
										   '<td><input type="text" placeholder="Jabatan"></td>'+
										   '<td><textarea rows="2"></textarea></td>'+
										   '<td><textarea rows="2"></textarea></td>'+
										   '</tr>');
		nextrow = nextrow + 1;
	}
	function deleteRow(){
		$("#pengurus > tbody > tr:last").remove();
		nextrow = nextrow - 1;
		if(nextrow <= 0){
			nextrow = 1;
		}
	}
</script>
<script>
	$("#ktpcheck").change(function() {
			if(this.checked) {
				$("#ktp").show();
			}
			else{
				$("#ktp").hide();
			}
	});
	$("#simcheck").change(function() {
			if(this.checked) {
				$("#sim").show();
			}
			else{
				$("#sim").hide();
			}
	});
	$("#passportcheck").change(function() {
			if(this.checked) {
				$("#passport").show();
			}
			else{
				$("#passport").hide();
			}
	});
	$("#lainnyacheck").change(function() {
			if(this.checked) {
				$("#lainnya").show();
			}
			else{
				$("#lainnya").hide();
			}
	});
</script>