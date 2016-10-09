<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sector Economico'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sectorEconomico index large-9 medium-8 columns content">
    <h3><?= __('Sector Economico') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('codigo') ?></th>
                <th><?= $this->Paginator->sort('sector') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sectorEconomico as $sectorEconomico): ?>
            <tr>
                <td><?= h($sectorEconomico->codigo) ?></td>
                <td><?= h($sectorEconomico->sector) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sectorEconomico->codigo]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sectorEconomico->codigo]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sectorEconomico->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $sectorEconomico->codigo)]) ?>
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
