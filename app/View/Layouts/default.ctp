<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>

	<?php $this->Html->css("bootstrap", null, array("inline"=>false)); ?>
	<?php $this->Html->css("color", null, array("inline"=>false)); ?>
	<?php $this->Html->css("site", null, array("inline"=>false)); ?>
	<?php $this->Html->css("carousel", null, array("inline"=>false)); ?>
	<?php $this->Html->css("jquery.jqplot.min", null, array("inline"=>false)); ?>
	<?php $this->Html->css("datepicker", null, array("inline"=>false)); ?>

	<?php $this->Html->script("bootstrap.min", array("inline"=>false)); ?>
	<?php $this->Html->script("bootstrap-datepicker", array("inline"=>false)); ?>
	<?php $this->Html->script("holder", array("inline"=>false)); ?>
	<?php $this->Html->script("jquery-1.10.2.min", array("inline"=>false)); ?>
	<?php $this->Html->script("jqplot.barRenderer.min", array("inline"=>false)); ?>
	<?php $this->Html->script("jqplot.categoryAxisRenderer.min", array("inline"=>false)); ?>
	<?php $this->Html->script("jqplot.pieRenderer.min", array("inline"=>false)); ?>
	<?php $this->Html->script("jqplot.pointLabels.min", array("inline"=>false)); ?>
	<?php $this->Html->script("jquery.jqplot", array("inline"=>false)); ?>
	<?php $this->Html->script("jquery.mousewheel", array("inline"=>false)); ?>



	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>: 
		<?php echo $title_for_layout; ?>
	</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script>
		var base = "<?php echo $this->base; ?>";
	</script>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

		<?php if($this->Session->read('Auth.User.id') == 0) { ?>

			<div id="header">
				<h1><?php //echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
			</div>
			<div id="content" class="container marketing bg-transparent">

				<?php echo $this->Session->flash(); ?>

				<?php echo $this->fetch('content'); ?>
			</div>

		<?php } else { ?>

			<div id="header">
				<h1><?php //echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
			</div>

			<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top bg-orange" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <?php if($this->Session->read('Auth.User.agen_level') == 1) { ?>
              	<?php echo $this->Html->link(__('CS-IPC'), array('controller'=>'users','action' => 'index'),array('class'=>"navbar-brand")); ?>
              <?php } else if($this->Session->read('Auth.User.agen_level') == 2) { ?>
              	<?php echo $this->Html->link(__('CS-IPC'), array('controller'=>'users','action' => 'index_backroom'),array('class'=>"navbar-brand")); ?>
              <?php } else if($this->Session->read('Auth.User.agen_level') == 3) { ?>
              	<?php echo $this->Html->link(__('CS-IPC'), array('controller'=>'users','action' => 'index_admin'),array('class'=>"navbar-brand")); ?>
              <?php } ?>

            </div>
            <div class="navbar-collapse collapse">
				  <?php if($this->Session->read('Auth.User.agen_level') != 3) { ?>
				  <ul class="nav navbar-nav">
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Complain Handling<b class="caret"></b></a>
					  <ul class="dropdown-menu">
					  	<?php if($this->Session->read('Auth.User.agen_level') == 1) { ?>
						<li><?php echo $this->Html->link(__('New Issue'), array('controller' => 'issues','action' => 'add')); ?></li>
						<?php } ?>
						<li><?php echo $this->Html->link(__('Issue Tracking'), array('controller' => 'issues','action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('My Issue'), array('controller' => 'issues','action' => 'index')); ?></li>
					  </ul>
					</li>
				  </ul>
				 
				 <ul class="nav navbar-nav">
				    <li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Filling Service<b class="caret"></b></a>
					  <ul class="dropdown-menu">
					  	<?php if($this->Session->read('Auth.User.agen_level') == 1) { ?>
							<li><?php echo $this->Html->link(__('New Filling'), array('controller' => 'submissions','action' => 'add')); ?></li>
						<?php } ?>
						<li><?php echo $this->Html->link(__('Filling Tracking'), array('controller' => 'submissions','action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('My Filling'), array('controller' => 'submissions','action' => 'index')); ?></li>
					  </ul>
					</li>
				 </ul>

				 <ul class="nav navbar-nav">
					<?php if($this->Session->read('Auth.User.agen_level') == 1) { ?>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registration<b class="caret"></b></a>
					  <ul class="dropdown-menu">
						<li><?php echo $this->Html->link(__('New Registration'), array('controller' => 'companies','action' => 'add')); ?></li>
						<li><?php echo $this->Html->link(__('Re-Registration'), array('controller' => 'companies','action' => 'index')); ?></li>
					  </ul>
					</li>
					<?php } else if($this->Session->read('Auth.User.agen_level') == 2) { ?>
						<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'companies','action' => 'add_customer')); ?></li>
					<?php } ?>
				 </ul>

				 <?php } else { ?>
				 <ul class="nav navbar-nav">
				 	<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Agen<b class="caret"></b></a>
					  <ul class="dropdown-menu">
						<li><?php echo $this->Html->link(__('New Agen'), array('controller' => 'users','action' => 'add_agen')); ?></li>
						<li><?php echo $this->Html->link(__('List Agen'), array('controller' => 'users','action' => 'list_user')); ?></li>
					  </ul>
					</li>
				</ul>
				 <?php } ?>
				 <?php if($this->Session->read('Auth.User.agen_level') == 1) { ?>
				  <ul class="nav navbar-nav">
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Information<b class="caret"></b></a>
					  <ul class="dropdown-menu">
						<li><a href="#">Link</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Business Process</a></li>
					  </ul>
					</li>
				  </ul>
				  <?php } else { ?>
				  <ul class="nav navbar-nav">
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category<b class="caret"></b></a>
					  <ul class="dropdown-menu">
						<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories','action' => 'add')); ?></li>
						<li><?php echo $this->Html->link(__('List Category'), array('controller' => 'categories','action' => 'index')); ?></li>
					  </ul>
					</li>
				  </ul>

				  <ul class="nav navbar-nav">
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Service<b class="caret"></b></a>
					  <ul class="dropdown-menu">
						<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services','action' => 'add')); ?></li>
						<li><?php echo $this->Html->link(__('List Service'), array('controller' => 'services','action' => 'index')); ?></li>
					  </ul>
					</li>
				  </ul>

				  <ul class="nav navbar-nav">
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Areas<b class="caret"></b></a>
					  <ul class="dropdown-menu">
						<li><?php echo $this->Html->link(__('New Areas'), array('controller' => 'areas','action' => 'add')); ?></li>
						<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas','action' => 'index')); ?></li>
					  </ul>
					</li>
				  </ul>

				  <?php } ?>


				  <ul class="nav navbar-nav">
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">CS Profile<b class="caret"></b></a>
					  <ul class="dropdown-menu">
					  	<li><?php echo $this->Html->link(__('Logout'), array('controller'=>'users','action' => 'logout')); ?></li>
						<li><a href="#">Change Password</a></li>
						<li><a href="#">Setting Profile</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li class="dropdown-header">Nav header</li>
						<li><a href="#">Separated link</a></li>
						<li><a href="#">One more separated link</a></li>
					  </ul>
					</li>
					
				  </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

			<div id="content" class="container marketing bg-transparent">

				<?php echo $this->Session->flash(); ?>

				<?php echo $this->fetch('content'); ?>
			</div>

		<?php } ?>
		
		
		<div id="footer">
			<?php //echo $this->Html->link(
				//	$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
				//	'http://www.cakephp.org/',
				//	array('target' => '_blank', 'escape' => false)
				//);
			?>
		</div>
	
	<?php //echo $this->element('sql_dump'); ?>
</body>

<script>
		$(document).ready(function(){
			var s1 = [8, 9, 6, 4, 3];
			var s2 = [7, 5, 3, 2, 1];
			var ticks = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
			 
			plot2 = $.jqplot('chart2', [s1, s2], {
				seriesColors:['#fa6800', '#a20025'],
				seriesDefaults: {
					renderer:$.jqplot.BarRenderer,
					pointLabels: { show: true }
				},
				 legend: {
					show:true,
					labels:['Complaints', 'Solved'],
					show: true,
					location: 'e',
					placement: 'inside'
				},
				axes: {
					xaxis: {
						renderer: $.jqplot.CategoryAxisRenderer,
						ticks: ticks
					}
				}
			});
		 
			$('#chart2').bind('jqplotDataHighlight', 
				function (ev, seriesIndex, pointIndex, data) {
					$('#info2').html('series: '+seriesIndex+', point: '+pointIndex+', data: '+data);
				}
			);
				 
			$('#chart2').bind('jqplotDataUnhighlight', 
				function (ev) {
					$('#info2').html('Nothing');
				}
			);
			
		});
	</script>

</html>
