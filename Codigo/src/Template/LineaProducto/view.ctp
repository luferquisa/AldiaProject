<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Linea Producto'), ['action' => 'edit', $lineaProducto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Linea Producto'), ['action' => 'delete', $lineaProducto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lineaProducto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Linea Producto'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Linea Producto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lineaProducto view large-9 medium-8 columns content">
    <h3><?= h($lineaProducto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Descripcion') ?></th>
            <td><?= h($lineaProducto->descripcion) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($lineaProducto->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Recurso') ?></th>
            <td><?= $this->Number->format($lineaProducto->recurso) ?></td>
        </tr>
    </table>
</div>
