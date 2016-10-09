<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pensione'), ['action' => 'edit', $pensione->int]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pensione'), ['action' => 'delete', $pensione->int], ['confirm' => __('Are you sure you want to delete # {0}?', $pensione->int)]) ?> </li>
        <li><?= $this->Html->link(__('List Pensiones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pensione'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pensiones view large-9 medium-8 columns content">
    <h3><?= h($pensione->int) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Pension') ?></th>
            <td><?= h($pensione->pension) ?></td>
        </tr>
        <tr>
            <th><?= __('Int') ?></th>
            <td><?= $this->Number->format($pensione->int) ?></td>
        </tr>
    </table>
</div>
