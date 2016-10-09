<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Eps'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="eps index large-9 medium-8 columns content">
    <h3><?= __('Eps') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('eps') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($eps as $eps): ?>
            <tr>
                <td><?= $this->Number->format($eps->id) ?></td>
                <td><?= h($eps->eps) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $eps->int]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $eps->int]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $eps->int], ['confirm' => __('Are you sure you want to delete # {0}?', $eps->int)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
