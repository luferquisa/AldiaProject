<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contactos Cliente'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contactosCliente index large-9 medium-8 columns content">
    <h3><?= __('Contactos Cliente') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('telefono') ?></th>
                <th><?= $this->Paginator->sort('extension') ?></th>
                <th><?= $this->Paginator->sort('celular') ?></th>
                <th><?= $this->Paginator->sort('correo') ?></th>
                <th><?= $this->Paginator->sort('cargo') ?></th>
                <th><?= $this->Paginator->sort('ciudad') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contactosCliente as $contactosCliente): ?>
            <tr>
                <td><?= $this->Number->format($contactosCliente->id) ?></td>
                <td><?= h($contactosCliente->nombre) ?></td>
                <td><?= h($contactosCliente->telefono) ?></td>
                <td><?= h($contactosCliente->extension) ?></td>
                <td><?= h($contactosCliente->celular) ?></td>
                <td><?= h($contactosCliente->correo) ?></td>
                <td><?= h($contactosCliente->cargo) ?></td>
                <td><?= $this->Number->format($contactosCliente->ciudad) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contactosCliente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contactosCliente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contactosCliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactosCliente->id)]) ?>
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
