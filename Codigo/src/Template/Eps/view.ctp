<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Eps'), ['action' => 'edit', $eps->int]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Eps'), ['action' => 'delete', $eps->int], ['confirm' => __('Are you sure you want to delete # {0}?', $eps->int)]) ?> </li>
        <li><?= $this->Html->link(__('List Eps'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Eps'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="eps view large-9 medium-8 columns content">
    <h3><?= h($eps->int) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Eps') ?></th>
            <td><?= h($eps->eps) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($eps->id) ?></td>
        </tr>
    </table>
</div>
