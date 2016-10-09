<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cliente->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="clientes form large-9 medium-8 columns content">
    <?= $this->Form->create($cliente) ?>
    <fieldset>
        <legend><?= __('Edit Cliente') ?></legend>
        <?php
            echo $this->Form->input('codigo_siat');
            echo $this->Form->input('tipo_documento');
            echo $this->Form->input('documento');
            echo $this->Form->input('digito_verificacion');
            echo $this->Form->input('nombre');
            echo $this->Form->input('direccion');
            echo $this->Form->input('telefono');
            echo $this->Form->input('fax');
            echo $this->Form->input('status');
            echo $this->Form->input('sector_economico');
            echo $this->Form->input('actividad_economica');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
