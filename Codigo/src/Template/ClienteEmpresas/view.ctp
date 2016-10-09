<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cliente Empresa'), ['action' => 'edit', $clienteEmpresa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cliente Empresa'), ['action' => 'delete', $clienteEmpresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clienteEmpresa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cliente Empresas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente Empresa'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clienteEmpresas view large-9 medium-8 columns content">
    <h3><?= h($clienteEmpresa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($clienteEmpresa->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Empresa') ?></th>
            <td><?= $this->Number->format($clienteEmpresa->empresa) ?></td>
        </tr>
        <tr>
            <th><?= __('Ciudad') ?></th>
            <td><?= $this->Number->format($clienteEmpresa->ciudad) ?></td>
        </tr>
        <tr>
            <th><?= __('Division') ?></th>
            <td><?= $this->Number->format($clienteEmpresa->division) ?></td>
        </tr>
        <tr>
            <th><?= __('Comercial') ?></th>
            <td><?= $this->Number->format($clienteEmpresa->comercial) ?></td>
        </tr>
    </table>
</div>
