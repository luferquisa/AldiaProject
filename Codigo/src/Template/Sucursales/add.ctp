<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sucursales'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="sucursales form large-9 medium-8 columns content">
    <?= $this->Form->create($sucursale) ?>
    <fieldset>
        <legend><?= __('Add Sucursale') ?></legend>
        <?php
            echo $this->Form->input('sucursal');
            echo $this->Form->input('ciudad');
            echo $this->Form->input('empresa');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
