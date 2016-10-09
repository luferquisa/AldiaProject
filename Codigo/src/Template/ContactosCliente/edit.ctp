<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contactosCliente->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contactosCliente->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contactos Cliente'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="contactosCliente form large-9 medium-8 columns content">
    <?= $this->Form->create($contactosCliente) ?>
    <fieldset>
        <legend><?= __('Edit Contactos Cliente') ?></legend>
        <?php
            echo $this->Form->input('titulo');
            echo $this->Form->input('nombre');
            echo $this->Form->input('telefono');
            echo $this->Form->input('extension');
            echo $this->Form->input('celular');
            echo $this->Form->input('correo');
            echo $this->Form->input('cargo');
            echo $this->Form->input('ciudad');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
