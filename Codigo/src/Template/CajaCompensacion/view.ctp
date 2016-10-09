<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Caja Compensacion'), ['action' => 'edit', $cajaCompensacion->int]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Caja Compensacion'), ['action' => 'delete', $cajaCompensacion->int], ['confirm' => __('Are you sure you want to delete # {0}?', $cajaCompensacion->int)]) ?> </li>
        <li><?= $this->Html->link(__('List Caja Compensacion'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Caja Compensacion'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cajaCompensacion view large-9 medium-8 columns content">
    <h3><?= h($cajaCompensacion->int) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Caja') ?></th>
            <td><?= h($cajaCompensacion->caja) ?></td>
        </tr>
        <tr>
            <th><?= __('Int') ?></th>
            <td><?= $this->Number->format($cajaCompensacion->int) ?></td>
        </tr>
    </table>
</div>
