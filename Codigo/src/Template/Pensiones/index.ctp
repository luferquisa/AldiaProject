<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pensione'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pensiones index large-9 medium-8 columns content">
    <h3><?= __('Pensiones') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('int') ?></th>
                <th><?= $this->Paginator->sort('pension') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pensiones as $pensione): ?>
            <tr>
                <td><?= $this->Number->format($pensione->int) ?></td>
                <td><?= h($pensione->pension) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pensione->int]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pensione->int]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pensione->int], ['confirm' => __('Are you sure you want to delete # {0}?', $pensione->int)]) ?>
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
