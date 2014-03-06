<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	
<?php echo $this->Html->script(array('http://code.jquery.com/jquery-1.11.0.min.js',
										'//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js')); ?>

	<?php


		echo $this->Html->meta('icon');
		echo $this->Html->css(array('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css',
									'style'));
		echo $this->fetch('meta');
	?>
</head>
<body>
	<div id="container" class="container-fluid">
		<div id="header">

			

			<nav class="navbar navbar-inverse" role="navigation">
				<ul class="nav nav-pills">
					<?php foreach ($cat as $c) { ?>			
						<li><?php echo $this->Html->link($c['Category']['name'],array(
											'controller'=>'sites',$c['Category']['id'],$c['Category']['name']));?></li>
					<?php }?>
				</ul>
		
</nav>

		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
	


<script>

a = Array.prototype.slice.call(document.querySelectorAll('nav li a'));

a.forEach(function(link){
	if(link.pathname === location.pathname){
		link.parentNode.className = link.className + "active" 
	}
});

</script>

</body>
</html>
