<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Actividad Economica'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="actividadEconomica form large-9 medium-8 columns content">
    <?= $this->Form->create($actividadEconomica) ?>
    <fieldset>
        <legend><?= __('Add Actividad Economica') ?></legend>
        <?php
            echo $this->Form->input('actividad');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
