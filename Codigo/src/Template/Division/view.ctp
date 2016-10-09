<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Division'), ['action' => 'edit', $division->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Division'), ['action' => 'delete', $division->id], ['confirm' => __('Are you sure you want to delete # {0}?', $division->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Division'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Division'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="division view large-9 medium-8 columns content">
    <h3><?= h($division->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Division') ?></th>
            <td><?= h($division->division) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($division->id) ?></td>
        </tr>
    </table>
</div>
