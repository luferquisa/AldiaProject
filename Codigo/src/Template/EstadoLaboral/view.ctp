<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Estado Laboral'), ['action' => 'edit', $estadoLaboral->int]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Estado Laboral'), ['action' => 'delete', $estadoLaboral->int], ['confirm' => __('Are you sure you want to delete # {0}?', $estadoLaboral->int)]) ?> </li>
        <li><?= $this->Html->link(__('List Estado Laboral'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estado Laboral'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="estadoLaboral view large-9 medium-8 columns content">
    <h3><?= h($estadoLaboral->int) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Estado') ?></th>
            <td><?= h($estadoLaboral->estado) ?></td>
        </tr>
        <tr>
            <th><?= __('Int') ?></th>
            <td><?= $this->Number->format($estadoLaboral->int) ?></td>
        </tr>
    </table>
</div>
