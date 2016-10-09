<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Moneda'), ['action' => 'edit', $moneda->codigo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Moneda'), ['action' => 'delete', $moneda->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $moneda->codigo)]) ?> </li>
        <li><?= $this->Html->link(__('List Monedas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Moneda'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="monedas view large-9 medium-8 columns content">
    <h3><?= h($moneda->codigo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Codigo') ?></th>
            <td><?= h($moneda->codigo) ?></td>
        </tr>
        <tr>
            <th><?= __('Moneda') ?></th>
            <td><?= h($moneda->moneda) ?></td>
        </tr>
        <tr>
            <th><?= __('Pais') ?></th>
            <td><?= h($moneda->pais) ?></td>
        </tr>
    </table>
</div>
