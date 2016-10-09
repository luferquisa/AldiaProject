<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Estados Civiles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="estadosCiviles form large-9 medium-8 columns content">
    <?= $this->Form->create($estadosCivile) ?>
    <fieldset>
        <legend><?= __('Add Estados Civile') ?></legend>
        <?php
            echo $this->Form->input('estado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
