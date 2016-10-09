<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Linea Producto'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lineaProducto index large-9 medium-8 columns content">
    <h3><?= __('Linea Producto') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('descripcion') ?></th>
                <th><?= $this->Paginator->sort('recurso') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lineaProducto as $lineaProducto): ?>
            <tr>
                <td><?= $this->Number->format($lineaProducto->id) ?></td>
                <td><?= h($lineaProducto->descripcion) ?></td>
                <td><?= $this->Number->format($lineaProducto->recurso) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $lineaProducto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lineaProducto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lineaProducto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lineaProducto->id)]) ?>
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
