<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cesantia->int],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cesantia->int)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cesantias'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cesantias form large-9 medium-8 columns content">
    <?= $this->Form->create($cesantia) ?>
    <fieldset>
        <legend><?= __('Edit Cesantia') ?></legend>
        <?php
            echo $this->Form->input('cesantias');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
