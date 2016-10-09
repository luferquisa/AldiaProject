<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Division'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="division index large-9 medium-8 columns content">
    <h3><?= __('Division') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('division') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($division as $division): ?>
            <tr>
                <td><?= $this->Number->format($division->id) ?></td>
                <td><?= h($division->division) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $division->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $division->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $division->id], ['confirm' => __('Are you sure you want to delete # {0}?', $division->id)]) ?>
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
