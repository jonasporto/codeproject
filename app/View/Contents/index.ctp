<div class="row">
<div class="contents col-md-9">
	<h2><?php echo __('Contents'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-row">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('subtitle'); ?></th>
			<th><?php echo $this->Paginator->sort('category'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($contents as $content): ?>
	<tr>
		<td><?php echo h($content['Content']['id']); ?>&nbsp;</td>
		<td><?php echo h($content['Content']['title']); ?>&nbsp;</td>
		<td><?php echo h($content['Content']['subtitle']); ?>&nbsp;</td>


		<td>
			<?php foreach ($content['Category'] as $c){
				 echo h($c['name']); ?>&nbsp;<br/>
		<?php } ?>

				</td>
		<td><?php echo $this->Substr->limit($content['Content']['description'],70); ?>&nbsp;</td>
		<td><?php echo h($content['Content']['created']); ?>&nbsp;</td>
		<td><?php echo h($content['Content']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link($this->Html->tag('span','',array('class'=>'glyphicon glyphicon-eye-open','alt'=>__('View'))),array('action' => 'view', $content['Content']['id']),array('escape'=>false)); ?>
			<?php echo $this->Html->link($this->Html->tag('span','',array('class'=>'glyphicon glyphicon-edit','alt'=>__('Edit'))), array('action' => 'edit', $content['Content']['id']),array('escape'=>false)); ?>
		
			<?php echo $this->Form->postLink($this->Html->tag('span','',array('class'=>'glyphicon glyphicon-remove','alt'=>__('Remove'))), array('action' => 'delete', $content['Content']['id'],), array('escape'=>false), __('Are you sure you want to delete content # %s?', $content['Content']['title'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		if($this->Paginator->hasNext()){
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
		}
	?>
	</div>
</div>
<div class="actions col-md-2">
	<ul>
		<li class="glyphicon glyphicon-plus-sign"><?php echo $this->Html->link(__('New Content'), array('action' => 'add')); ?></li>
		<li class="glyphicon glyphicon-plus-sign"><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li class="glyphicon glyphicon-list"><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		
	</ul>
</div>
</div>