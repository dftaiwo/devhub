<div class="articles view">
<h2><?php  echo __('Article'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($article['Article']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Feed'); ?></dt>
		<dd>
			<?php echo $this->Html->link($article['Feed']['name'], array('controller' => 'feeds', 'action' => 'view', $article['Feed']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($article['Article']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($article['Article']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hash'); ?></dt>
		<dd>
			<?php echo h($article['Article']['hash']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($article['Article']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Article Type'); ?></dt>
		<dd>
			<?php echo h($article['Article']['article_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Published'); ?></dt>
		<dd>
			<?php echo h($article['Article']['published']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Published'); ?></dt>
		<dd>
			<?php echo h($article['Article']['date_published']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('External Link'); ?></dt>
		<dd>
			<?php echo h($article['Article']['external_link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($article['Article']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($article['Article']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sort Order'); ?></dt>
		<dd>
			<?php echo h($article['Article']['sort_order']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Article'), array('action' => 'edit', $article['Article']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Article'), array('action' => 'delete', $article['Article']['id']), null, __('Are you sure you want to delete # %s?', $article['Article']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Feeds'), array('controller' => 'feeds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feed'), array('controller' => 'feeds', 'action' => 'add')); ?> </li>
	</ul>
</div>
