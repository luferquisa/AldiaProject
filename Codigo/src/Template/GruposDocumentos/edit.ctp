<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $gruposDocumento->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $gruposDocumento->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Grupos Documentos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="gruposDocumentos form large-9 medium-8 columns content">
    <?= $this->Form->create($gruposDocumento) ?>
    <fieldset>
        <legend><?= __('Edit Grupos Documento') ?></legend>
        <?php
            echo $this->Form->input('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
