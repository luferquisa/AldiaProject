<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pensiones'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pensiones form large-9 medium-8 columns content">
    <?= $this->Form->create($pensione) ?>
    <fieldset>
        <legend><?= __('Add Pensione') ?></legend>
        <?php
            echo $this->Form->input('pension');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
