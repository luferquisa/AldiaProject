<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contactos Cliente'), ['action' => 'edit', $contactosCliente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contactos Cliente'), ['action' => 'delete', $contactosCliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactosCliente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contactos Cliente'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contactos Cliente'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contactosCliente view large-9 medium-8 columns content">
    <h3><?= h($contactosCliente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($contactosCliente->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefono') ?></th>
            <td><?= h($contactosCliente->telefono) ?></td>
        </tr>
        <tr>
            <th><?= __('Extension') ?></th>
            <td><?= h($contactosCliente->extension) ?></td>
        </tr>
        <tr>
            <th><?= __('Celular') ?></th>
            <td><?= h($contactosCliente->celular) ?></td>
        </tr>
        <tr>
            <th><?= __('Correo') ?></th>
            <td><?= h($contactosCliente->correo) ?></td>
        </tr>
        <tr>
            <th><?= __('Cargo') ?></th>
            <td><?= h($contactosCliente->cargo) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($contactosCliente->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Ciudad') ?></th>
            <td><?= $this->Number->format($contactosCliente->ciudad) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Titulo') ?></h4>
        <?= $this->Text->autoParagraph(h($contactosCliente->titulo)); ?>
    </div>
</div>
