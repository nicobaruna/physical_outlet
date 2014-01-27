<?php echo $this->Form->create('User',array('id'=>'validate')); ?>
<?php $this->Html->css("bootstrap", null, array("inline"=>true)); ?>
<?php $this->Html->css("color", null, array("inline"=>false)); ?>
<?php $this->Html->css("site", null, array("inline"=>false)); ?>
<?php $this->Html->css("carousel", null, array("inline"=>false)); ?>

<div class="container marketing bg-transparent" id="contents">
  <!-- START THE FEATURETTES -->
  <div class="row featurette" style="margin-top:30px; margin-bottom:30px;">
    <div class="col-md-5">
      <?php echo $this->Html->image('logopelindo.jpg', array('alt' => 'logo')); ?>
	</div>
	<div class="col-md-7 ">
      <h2 class="featurette-heading" style="font-size: 40px;">Welcome to IPC Customer Services</h2>
		<?php echo $this->Form->input('username',array('class'=>'validate[required] form-control','placeholder'=>'Username','label'=>false));  ?>
		<?php echo $this->Form->input('password',array('class'=>'validate[required] form-control','placeholder'=>'Password','label'=>false));?>
		<div class="control-group" style="margin-top:10px;">
			<div class="controls">
			  <input type="submit" class="btn bg-cyan" value="login" />
			</div>
		  </div>
    	</div>
  	</div>
</div>