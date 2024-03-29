<div class="articles index">
        <h2><?php echo __('Articles'); ?></h2>
        <table cellpadding="2" cellspacing="2" border="1" width="100%" class="lightDottedGrid">
                <tr>
                        <th><?php echo $this->Paginator->sort('feed_id'); ?></th>
                        <th><?php echo $this->Paginator->sort('name'); ?></th>
                        <th><?php echo $this->Paginator->sort('published'); ?></th>
                        <th><?php echo $this->Paginator->sort('created'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php foreach ($articles as $article): ?>
                        <tr>
                                <td>
                                        <?php echo $this->Html->link($article['Feed']['name'], array('controller' => 'feeds', 'action' => 'view', $article['Feed']['id'])); ?>
                                </td>
                                <td><?php echo h($article['Article']['name']); ?>&nbsp;</td>
                                <td><?php echo h($article['Article']['published']); ?>&nbsp;</td>
                                <td><?php echo h($article['Article']['created']); ?>&nbsp;</td>
                                <td class="actions">
                                        <?php echo $this->Html->link(__('View'), array('action' => 'view', $article['Article']['id'])); ?>
                                        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $article['Article']['id'])); ?>
                                        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $article['Article']['id']), null, __('Are you sure you want to delete # %s?', $article['Article']['id'])); ?>
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
                echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
                echo $this->Paginator->numbers(array('separator' => ''));
                echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
                ?>
        </div>
</div>
<div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>
                <li><?php echo $this->Html->link(__('New Article'), array('action' => 'add')); ?></li>
        </ul>
</div>
