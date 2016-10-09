<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lineaProducto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lineaProducto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Linea Producto'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="lineaProducto form large-9 medium-8 columns content">
    <?= $this->Form->create($lineaProducto) ?>
    <fieldset>
        <legend><?= __('Edit Linea Producto') ?></legend>
        <?php
            echo $this->Form->input('descripcion');
            echo $this->Form->input('recurso');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
