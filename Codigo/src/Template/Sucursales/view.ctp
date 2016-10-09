<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sucursale'), ['action' => 'edit', $sucursale->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sucursale'), ['action' => 'delete', $sucursale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sucursale->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sucursales'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sucursale'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sucursales view large-9 medium-8 columns content">
    <h3><?= h($sucursale->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Sucursal') ?></th>
            <td><?= h($sucursale->sucursal) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($sucursale->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Ciudad') ?></th>
            <td><?= $this->Number->format($sucursale->ciudad) ?></td>
        </tr>
        <tr>
            <th><?= __('Empresa') ?></th>
            <td><?= $this->Number->format($sucursale->empresa) ?></td>
        </tr>
    </table>
</div>
