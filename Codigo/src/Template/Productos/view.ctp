<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Producto'), ['action' => 'edit', $producto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Producto'), ['action' => 'delete', $producto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Productos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productos view large-9 medium-8 columns content">
    <h3><?= h($producto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Descipcion') ?></th>
            <td><?= h($producto->descipcion) ?></td>
        </tr>
        <tr>
            <th><?= __('Pais') ?></th>
            <td><?= h($producto->pais) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($producto->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Empresa') ?></th>
            <td><?= $this->Number->format($producto->empresa) ?></td>
        </tr>
        <tr>
            <th><?= __('Recurso') ?></th>
            <td><?= $this->Number->format($producto->recurso) ?></td>
        </tr>
        <tr>
            <th><?= __('Activo Desde') ?></th>
            <td><?= h($producto->activo_desde) ?></td>
        </tr>
        <tr>
            <th><?= __('Activo Hasta') ?></th>
            <td><?= h($producto->activo_hasta) ?></td>
        </tr>
        <tr>
            <th><?= __('Anulado') ?></th>
            <td><?= $producto->anulado ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Estado') ?></h4>
        <?= $this->Text->autoParagraph(h($producto->estado)); ?>
    </div>
</div>
