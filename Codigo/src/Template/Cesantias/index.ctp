<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cesantia'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cesantias index large-9 medium-8 columns content">
    <h3><?= __('Cesantias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('int') ?></th>
                <th><?= $this->Paginator->sort('cesantias') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cesantias as $cesantia): ?>
            <tr>
                <td><?= $this->Number->format($cesantia->int) ?></td>
                <td><?= h($cesantia->cesantias) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cesantia->int]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cesantia->int]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cesantia->int], ['confirm' => __('Are you sure you want to delete # {0}?', $cesantia->int)]) ?>
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
