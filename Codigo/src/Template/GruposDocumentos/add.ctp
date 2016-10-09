<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Grupos Documentos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="gruposDocumentos form large-9 medium-8 columns content">
    <?= $this->Form->create($gruposDocumento) ?>
    <fieldset>
        <legend><?= __('Add Grupos Documento') ?></legend>
        <?php
            echo $this->Form->input('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
