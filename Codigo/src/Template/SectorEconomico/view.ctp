<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sector Economico'), ['action' => 'edit', $sectorEconomico->codigo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sector Economico'), ['action' => 'delete', $sectorEconomico->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $sectorEconomico->codigo)]) ?> </li>
        <li><?= $this->Html->link(__('List Sector Economico'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sector Economico'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sectorEconomico view large-9 medium-8 columns content">
    <h3><?= h($sectorEconomico->codigo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Codigo') ?></th>
            <td><?= h($sectorEconomico->codigo) ?></td>
        </tr>
        <tr>
            <th><?= __('Sector') ?></th>
            <td><?= h($sectorEconomico->sector) ?></td>
        </tr>
    </table>
</div>
