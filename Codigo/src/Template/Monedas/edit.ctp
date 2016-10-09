<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <!--<li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $moneda->codigo],
                ['confirm' => __('Are you sure you want to delete # {0}?', $moneda->codigo)]
            )
        ?></li>-->
        <li><?= $this->Html->link(__('List Monedas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="monedas form large-9 medium-8 columns content">
    <?= $this->Form->create($moneda) ?>
    <fieldset>
        <legend><?= __('Edit Moneda') ?></legend>
        <?php
            echo $this->Form->input('moneda');
            echo $this->Form->input('pais',array('options'=>$paises));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
