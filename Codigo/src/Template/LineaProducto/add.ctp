<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Linea Producto'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="lineaProducto form large-9 medium-8 columns content">
    <?= $this->Form->create($lineaProducto) ?>
    <fieldset>
        <legend><?= __('Add Linea Producto') ?></legend>
        <?php
            echo $this->Form->input('descripcion');
            echo $this->Form->input('recurso');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
