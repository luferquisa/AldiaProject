<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Division'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="division form large-9 medium-8 columns content">
    <?= $this->Form->create($division) ?>
    <fieldset>
        <legend><?= __('Add Division') ?></legend>
        <?php
            echo $this->Form->input('division');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
