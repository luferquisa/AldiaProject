<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $producto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Productos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="productos form large-9 medium-8 columns content">
    <?= $this->Form->create($producto) ?>
    <fieldset>
        <legend><?= __('Edit Producto') ?></legend>
        <?php
            echo $this->Form->input('descipcion');
            echo $this->Form->input('pais');
            echo $this->Form->input('empresa');
            echo $this->Form->input('recurso');
            echo $this->Form->input('activo_desde', ['empty' => true]);
            echo $this->Form->input('activo_hasta', ['empty' => true]);
            echo $this->Form->input('estado');
            echo $this->Form->input('anulado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
