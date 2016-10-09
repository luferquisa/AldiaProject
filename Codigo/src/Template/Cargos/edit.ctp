<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cargo->int],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cargo->int)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cargos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cargos form large-9 medium-8 columns content">
    <?= $this->Form->create($cargo) ?>
    <fieldset>
        <legend><?= __('Edit Cargo') ?></legend>
        <?php
            echo $this->Form->input('codigo_nova');
            echo $this->Form->input('cargo');
            echo $this->Form->input('estado');
            echo $this->Form->input('area');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
