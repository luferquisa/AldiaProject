<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tipos Contrato'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tiposContratos index large-9 medium-8 columns content">
    <h3><?= __('Tipos Contratos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('tipo') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tiposContratos as $tiposContrato): ?>
            <tr>
                <td><?= $this->Number->format($tiposContrato->id) ?></td>
                <td><?= h($tiposContrato->tipo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tiposContrato->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tiposContrato->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tiposContrato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposContrato->id)]) ?>
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
