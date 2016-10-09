<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Moneda'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="monedas index large-9 medium-8 columns content">
    <h3><?= __('Monedas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('codigo') ?></th>
                <th><?= $this->Paginator->sort('moneda') ?></th>
                <th><?= $this->Paginator->sort('pais') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($monedas as $moneda): ?>
            <tr>
                <td><?= h($moneda->codigo) ?></td>
                <td><?= h($moneda->moneda) ?></td>
                <td><?= h($moneda->pais) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $moneda->codigo]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $moneda->codigo]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $moneda->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $moneda->codigo)]) ?>
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
