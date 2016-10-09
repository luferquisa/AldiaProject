<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
       <!--<li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $paise->codigo],
                ['confirm' => __('Are you sure you want to delete # {0}?', $paise->codigo)]
            )
        ?></li> -->
        <li><?= $this->Html->link(__('Lista de departamentos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="paises form large-9 medium-8 columns content">
    <?= $this->Form->create($departamento) ?>
    <fieldset>
        <legend><?= __('Editar Departamento') ?></legend>
        <?php
			echo $this->Form->input('id');
            echo $this->Form->input('departamento');
			echo $this->Form->input('pais',array('options'=>$paises));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
