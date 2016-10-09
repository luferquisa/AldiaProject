<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $area->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $area->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Areas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="areas form large-9 medium-8 columns content">
    <?= $this->Form->create($area) ?>
    <fieldset>
        <legend><?= __('Edit Area') ?></legend>
        <?php
            echo $this->Form->input('area');
            echo $this->Form->input('empresa');
            echo $this->Form->input('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
