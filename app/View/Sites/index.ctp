<div class="row col-md-8">

<?php foreach ($content['Content'] as $c) { ?>


	<h4><?=ucfirst($c['title']);?></h4>

	<?php if(isset($c['subtitle']) && $c['subtitle'] != ''){  ?>

    <blockquote>

    <p><small><?=ucfirst($c['subtitle']);?></small><p/>
	
    </blockquote>
	
	<?php }?>



	<p><?=ucfirst($c['description']);?><p/>

		<hr/>


<?php } ?>

</div>