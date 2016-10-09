<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Actividad Economica'), ['action' => 'edit', $actividadEconomica->codigo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Actividad Economica'), ['action' => 'delete', $actividadEconomica->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $actividadEconomica->codigo)]) ?> </li>
        <li><?= $this->Html->link(__('List Actividad Economica'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Actividad Economica'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="actividadEconomica view large-9 medium-8 columns content">
    <h3><?= h($actividadEconomica->codigo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Codigo') ?></th>
            <td><?= h($actividadEconomica->codigo) ?></td>
        </tr>
        <tr>
            <th><?= __('Actividad') ?></th>
            <td><?= h($actividadEconomica->actividad) ?></td>
        </tr>
    </table>
</div>
