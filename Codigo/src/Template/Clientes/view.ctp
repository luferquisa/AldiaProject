<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clientes view large-9 medium-8 columns content">
    <h3><?= h($cliente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Tipo Documento') ?></th>
            <td><?= h($cliente->tipo_documento) ?></td>
        </tr>
        <tr>
            <th><?= __('Documento') ?></th>
            <td><?= h($cliente->documento) ?></td>
        </tr>
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($cliente->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Direccion') ?></th>
            <td><?= h($cliente->direccion) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefono') ?></th>
            <td><?= h($cliente->telefono) ?></td>
        </tr>
        <tr>
            <th><?= __('Fax') ?></th>
            <td><?= h($cliente->fax) ?></td>
        </tr>
        <tr>
            <th><?= __('Sector Economico') ?></th>
            <td><?= h($cliente->sector_economico) ?></td>
        </tr>
        <tr>
            <th><?= __('Actividad Economica') ?></th>
            <td><?= h($cliente->actividad_economica) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($cliente->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Codigo Siat') ?></th>
            <td><?= $this->Number->format($cliente->codigo_siat) ?></td>
        </tr>
        <tr>
            <th><?= __('Digito Verificacion') ?></th>
            <td><?= $this->Number->format($cliente->digito_verificacion) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Status') ?></h4>
        <?= $this->Text->autoParagraph(h($cliente->status)); ?>
    </div>
</div>
