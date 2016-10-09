<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $centroCosto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $centroCosto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Centro Costo'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="centroCosto form large-9 medium-8 columns content">
    <?= $this->Form->create($centroCosto) ?>
    <fieldset>
        <legend><?= __('Edit Centro Costo') ?></legend>
        <?php
            echo $this->Form->input('centro_costo');
            echo $this->Form->input('empresa');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
