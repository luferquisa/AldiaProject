<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cliente Empresa'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clienteEmpresas index large-9 medium-8 columns content">
    <h3><?= __('Cliente Empresas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('empresa') ?></th>
                <th><?= $this->Paginator->sort('ciudad') ?></th>
                <th><?= $this->Paginator->sort('division') ?></th>
                <th><?= $this->Paginator->sort('comercial') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clienteEmpresas as $clienteEmpresa): ?>
            <tr>
                <td><?= $this->Number->format($clienteEmpresa->id) ?></td>
                <td><?= $this->Number->format($clienteEmpresa->empresa) ?></td>
                <td><?= $this->Number->format($clienteEmpresa->ciudad) ?></td>
                <td><?= $this->Number->format($clienteEmpresa->division) ?></td>
                <td><?= $this->Number->format($clienteEmpresa->comercial) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $clienteEmpresa->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $clienteEmpresa->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $clienteEmpresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clienteEmpresa->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
