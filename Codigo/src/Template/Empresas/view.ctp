<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Empresa'), ['action' => 'edit', $empresa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Empresa'), ['action' => 'delete', $empresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="empresas view large-9 medium-8 columns content">
    <h3><?= h($empresa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Empresa') ?></th>
            <td><?= h($empresa->empresa) ?></td>
        </tr>
        <tr>
            <th><?= __('Descripcion') ?></th>
            <td><?= h($empresa->descripcion) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($empresa->id) ?></td>
        </tr>
    </table>
</div>
