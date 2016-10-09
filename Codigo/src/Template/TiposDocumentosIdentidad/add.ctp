<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tipos Documentos Identidad'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tiposDocumentosIdentidad form large-9 medium-8 columns content">
    <?= $this->Form->create($tiposDocumentosIdentidad) ?>
    <fieldset>
        <legend><?= __('Add Tipos Documentos Identidad') ?></legend>
        <?php
            echo $this->Form->input('tipo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
