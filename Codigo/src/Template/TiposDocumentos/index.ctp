<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tipos Documento'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tiposDocumentos index large-9 medium-8 columns content">
    <h3><?= __('Tipos Documentos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!--<th><?= $this->Paginator->sort('id') ?></th>-->
                <th><?= $this->Paginator->sort('grupo_documento') ?></th>
                <th><?= $this->Paginator->sort('nombre_documento') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tiposDocumentos as $tiposDocumento): ?>
            <tr>
               <!-- <td><?= $this->Number->format($tiposDocumento->id) ?></td>-->
                <td><?= $grupos[$this->Number->format($tiposDocumento->grupo_documento)] ?></td>
                <td><?= h($tiposDocumento->nombre_documento) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tiposDocumento->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tiposDocumento->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tiposDocumento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposDocumento->codigo)]) ?>
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
