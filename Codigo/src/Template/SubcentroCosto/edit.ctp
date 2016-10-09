<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $subcentroCosto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $subcentroCosto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Subcentro Costo'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="subcentroCosto form large-9 medium-8 columns content">
    <?= $this->Form->create($subcentroCosto) ?>
    <fieldset>
        <legend><?= __('Edit Subcentro Costo') ?></legend>
        <?php
            echo $this->Form->input('subcentros_costos');
            echo $this->Form->input('centro_costo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
