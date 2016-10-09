<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Caja Compensacion'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cajaCompensacion form large-9 medium-8 columns content">
    <?= $this->Form->create($cajaCompensacion) ?>
    <fieldset>
        <legend><?= __('Add Caja Compensacion') ?></legend>
        <?php
            echo $this->Form->input('caja');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
