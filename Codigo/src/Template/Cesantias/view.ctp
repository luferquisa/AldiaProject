<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cesantia'), ['action' => 'edit', $cesantia->int]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cesantia'), ['action' => 'delete', $cesantia->int], ['confirm' => __('Are you sure you want to delete # {0}?', $cesantia->int)]) ?> </li>
        <li><?= $this->Html->link(__('List Cesantias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cesantia'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cesantias view large-9 medium-8 columns content">
    <h3><?= h($cesantia->int) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Cesantias') ?></th>
            <td><?= h($cesantia->cesantias) ?></td>
        </tr>
        <tr>
            <th><?= __('Int') ?></th>
            <td><?= $this->Number->format($cesantia->int) ?></td>
        </tr>
    </table>
</div>
