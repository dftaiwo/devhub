<div class="articles form">
<?php echo $this->Form->create('Article'); ?>
	<fieldset>
		<legend><?php echo __('Add Article'); ?></legend>
	<?php
		echo $this->Form->input('feed_id');
		echo $this->Form->input('name');
		echo $this->Form->input('slug');
		echo $this->Form->input('hash');
		echo $this->Form->input('description');
		echo $this->Form->input('article_type');
		echo $this->Form->input('published');
		echo $this->Form->input('date_published');
		echo $this->Form->input('external_link');
		echo $this->Form->input('sort_order');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Articles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Feeds'), array('controller' => 'feeds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feed'), array('controller' => 'feeds', 'action' => 'add')); ?> </li>
	</ul>
</div>
