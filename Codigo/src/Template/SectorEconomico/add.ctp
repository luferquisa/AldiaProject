<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sector Economico'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="sectorEconomico form large-9 medium-8 columns content">
    <?= $this->Form->create($sectorEconomico) ?>
    <fieldset>
        <legend><?= __('Add Sector Economico') ?></legend>
        <?php
            echo $this->Form->input('sector');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
