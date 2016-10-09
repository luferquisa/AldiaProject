<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tipos Documentos Identidad'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tiposDocumentosIdentidad index large-9 medium-8 columns content">
    <h3><?= __('Tipos Documentos Identidad') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('codigo') ?></th>
                <th><?= $this->Paginator->sort('tipo') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tiposDocumentosIdentidad as $tiposDocumentosIdentidad): ?>
            <tr>
                <td><?= h($tiposDocumentosIdentidad->codigo) ?></td>
                <td><?= h($tiposDocumentosIdentidad->tipo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tiposDocumentosIdentidad->codigo]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tiposDocumentosIdentidad->codigo]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tiposDocumentosIdentidad->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposDocumentosIdentidad->codigo)]) ?>
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
