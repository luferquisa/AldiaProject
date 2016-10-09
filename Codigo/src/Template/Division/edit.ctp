<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $division->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $division->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Division'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="division form large-9 medium-8 columns content">
    <?= $this->Form->create($division) ?>
    <fieldset>
        <legend><?= __('Edit Division') ?></legend>
        <?php
            echo $this->Form->input('division');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
