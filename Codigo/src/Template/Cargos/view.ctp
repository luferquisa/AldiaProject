<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cargo'), ['action' => 'edit', $cargo->int]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cargo'), ['action' => 'delete', $cargo->int], ['confirm' => __('Are you sure you want to delete # {0}?', $cargo->int)]) ?> </li>
        <li><?= $this->Html->link(__('List Cargos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cargo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cargos view large-9 medium-8 columns content">
    <h3><?= h($cargo->int) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Codigo Nova') ?></th>
            <td><?= h($cargo->codigo_nova) ?></td>
        </tr>
        <tr>
            <th><?= __('Cargo') ?></th>
            <td><?= h($cargo->cargo) ?></td>
        </tr>
        <tr>
            <th><?= __('Int') ?></th>
            <td><?= $this->Number->format($cargo->int) ?></td>
        </tr>
        <tr>
            <th><?= __('Area') ?></th>
            <td><?= $this->Number->format($cargo->area) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Estado') ?></h4>
        <?= $this->Text->autoParagraph(h($cargo->estado)); ?>
    </div>
</div>
