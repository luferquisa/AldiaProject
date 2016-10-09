<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
       <!--<li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $paise->codigo],
                ['confirm' => __('Are you sure you want to delete # {0}?', $paise->codigo)]
            )
        ?></li> -->
        <li><?= $this->Html->link(__('List Paises'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="paises form large-9 medium-8 columns content">
    <?= $this->Form->create($paise) ?>
    <fieldset>
        <legend><?= __('Edit Paise') ?></legend>
        <?php
			echo $this->Form->input('codigo',array('type' => 'text', 'readonly'=>'true'));
            echo $this->Form->input('pais');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
