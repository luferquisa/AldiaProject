<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lista">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('codigo_siat') ?></th>
                <th><?= $this->Paginator->sort('tipo_documento') ?></th>
                <th><?= $this->Paginator->sort('documento') ?></th>
                <th><?= $this->Paginator->sort('digito_verificacion') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('direccion') ?></th>
                <th><?= $this->Paginator->sort('telefono') ?></th>
                <th><?= $this->Paginator->sort('fax') ?></th>
                <th><?= $this->Paginator->sort('sector_economico') ?></th>
                <th><?= $this->Paginator->sort('actividad_economica') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= $this->Number->format($cliente->id) ?></td>
                <td><?= $this->Number->format($cliente->codigo_siat) ?></td>
                <td><?= h($cliente->tipo_documento) ?></td>
                <td><?= h($cliente->documento) ?></td>
                <td><?= $this->Number->format($cliente->digito_verificacion) ?></td>
                <td><?= h($cliente->nombre) ?></td>
                <td><?= h($cliente->direccion) ?></td>
                <td><?= h($cliente->telefono) ?></td>
                <td><?= h($cliente->fax) ?></td>
                <td><?= h($cliente->sector_economico) ?></td>
                <td><?= h($cliente->actividad_economica) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cliente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cliente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?>
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
