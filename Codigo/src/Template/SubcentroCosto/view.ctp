<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subcentro Costo'), ['action' => 'edit', $subcentroCosto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subcentro Costo'), ['action' => 'delete', $subcentroCosto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subcentroCosto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subcentro Costo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subcentro Costo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subcentroCosto view large-9 medium-8 columns content">
    <h3><?= h($subcentroCosto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Subcentros Costos') ?></th>
            <td><?= h($subcentroCosto->subcentros_costos) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($subcentroCosto->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Centro Costo') ?></th>
            <td><?= $this->Number->format($subcentroCosto->centro_costo) ?></td>
        </tr>
    </table>
</div>
