<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Estados Civile'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="estadosCiviles index large-9 medium-8 columns content">
    <h3><?= __('Estados Civiles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('codigo') ?></th>
                <th><?= $this->Paginator->sort('estado') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estadosCiviles as $estadosCivile): ?>
            <tr>
                <td><?= h($estadosCivile->codigo) ?></td>
                <td><?= h($estadosCivile->estado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $estadosCivile->codigo]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estadosCivile->codigo]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estadosCivile->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $estadosCivile->codigo)]) ?>
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
