<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <!--<li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $idioma->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $idioma->id)]
            )
        ?></li>-->
        <li><?= $this->Html->link(__('List Idiomas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="idiomas form large-9 medium-8 columns content">
    <?= $this->Form->create($idioma) ?>
    <fieldset>
        <legend><?= __('Edit Idioma') ?></legend>
        <?php
            echo $this->Form->input('idioma');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
