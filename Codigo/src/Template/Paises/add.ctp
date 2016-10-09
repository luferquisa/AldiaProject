<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Lista Paises'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="paises form large-9 medium-8 columns content">
    <?= $this->Form->create($paise) ?>
    <fieldset>
        <legend><?= __('Agregar Pais') ?></legend>
        <?php
			echo $this->Form->input('codigo', array('type' => 'text'));
            echo $this->Form->input('pais');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
