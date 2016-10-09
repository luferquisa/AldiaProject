<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cliente Empresas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="clienteEmpresas form large-9 medium-8 columns content">
    <?= $this->Form->create($clienteEmpresa) ?>
    <fieldset>
        <legend><?= __('Add Cliente Empresa') ?></legend>
        <?php
            echo $this->Form->input('empresa');
            echo $this->Form->input('ciudad');
            echo $this->Form->input('division');
            echo $this->Form->input('comercial');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
