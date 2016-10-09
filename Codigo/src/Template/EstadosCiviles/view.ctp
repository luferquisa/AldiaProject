<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Estados Civile'), ['action' => 'edit', $estadosCivile->codigo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Estados Civile'), ['action' => 'delete', $estadosCivile->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $estadosCivile->codigo)]) ?> </li>
        <li><?= $this->Html->link(__('List Estados Civiles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estados Civile'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="estadosCiviles view large-9 medium-8 columns content">
    <h3><?= h($estadosCivile->codigo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Codigo') ?></th>
            <td><?= h($estadosCivile->codigo) ?></td>
        </tr>
        <tr>
            <th><?= __('Estado') ?></th>
            <td><?= h($estadosCivile->estado) ?></td>
        </tr>
    </table>
</div>
