<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Eps'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="eps form large-9 medium-8 columns content">
    <?= $this->Form->create($eps) ?>
    <fieldset>
        <legend><?= __('Add Eps') ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('eps');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
