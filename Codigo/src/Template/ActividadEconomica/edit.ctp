<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $actividadEconomica->codigo],
                ['confirm' => __('Are you sure you want to delete # {0}?', $actividadEconomica->codigo)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Actividad Economica'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="actividadEconomica form large-9 medium-8 columns content">
    <?= $this->Form->create($actividadEconomica) ?>
    <fieldset>
        <legend><?= __('Edit Actividad Economica') ?></legend>
        <?php
            echo $this->Form->input('actividad');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
