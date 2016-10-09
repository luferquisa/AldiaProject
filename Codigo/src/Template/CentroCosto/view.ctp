<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Centro Costo'), ['action' => 'edit', $centroCosto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Centro Costo'), ['action' => 'delete', $centroCosto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $centroCosto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Centro Costo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Centro Costo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="centroCosto view large-9 medium-8 columns content">
    <h3><?= h($centroCosto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Centro Costo') ?></th>
            <td><?= h($centroCosto->centro_costo) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($centroCosto->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Empresa') ?></th>
            <td><?= $this->Number->format($centroCosto->empresa) ?></td>
        </tr>
    </table>
</div>
