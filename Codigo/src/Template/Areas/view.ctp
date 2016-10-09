<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Area'), ['action' => 'edit', $area->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Area'), ['action' => 'delete', $area->id], ['confirm' => __('Are you sure you want to delete # {0}?', $area->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Areas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Area'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="areas view large-9 medium-8 columns content">
    <h3><?= h($area->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Area') ?></th>
            <td><?= h($area->area) ?></td>
        </tr>
        <tr>
            <th><?= __('Descripcion') ?></th>
            <td><?= h($area->descripcion) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($area->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Empresa') ?></th>
            <td><?= $this->Number->format($area->empresa) ?></td>
        </tr>
    </table>
</div>
