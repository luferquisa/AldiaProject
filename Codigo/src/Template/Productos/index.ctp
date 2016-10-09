<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productos index large-9 medium-8 columns content">
    <h3><?= __('Productos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('descipcion') ?></th>
                <th><?= $this->Paginator->sort('pais') ?></th>
                <th><?= $this->Paginator->sort('empresa') ?></th>
                <th><?= $this->Paginator->sort('recurso') ?></th>
                <th><?= $this->Paginator->sort('activo_desde') ?></th>
                <th><?= $this->Paginator->sort('activo_hasta') ?></th>
                <th><?= $this->Paginator->sort('anulado') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto): ?>
            <tr>
                <td><?= $this->Number->format($producto->id) ?></td>
                <td><?= h($producto->descipcion) ?></td>
                <td><?= h($producto->pais) ?></td>
                <td><?= $this->Number->format($producto->empresa) ?></td>
                <td><?= $this->Number->format($producto->recurso) ?></td>
                <td><?= h($producto->activo_desde) ?></td>
                <td><?= h($producto->activo_hasta) ?></td>
                <td><?= h($producto->anulado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $producto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $producto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $producto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id)]) ?>
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
