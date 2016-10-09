<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $estadoLaboral->int],
                ['confirm' => __('Are you sure you want to delete # {0}?', $estadoLaboral->int)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Estado Laboral'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="estadoLaboral form large-9 medium-8 columns content">
    <?= $this->Form->create($estadoLaboral) ?>
    <fieldset>
        <legend><?= __('Edit Estado Laboral') ?></legend>
        <?php
            echo $this->Form->input('estado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
