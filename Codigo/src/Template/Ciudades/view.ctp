<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ciudade'), ['action' => 'edit', $ciudade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ciudade'), ['action' => 'delete', $ciudade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ciudade->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ciudades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ciudade'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ciudades view large-9 medium-8 columns content">
    <h3><?= h($ciudade->id) ?></h3>
    <table class="vertical-table">
		 <tr>
            <th><?= __('Codigo Siat') ?></th>
            <td><?= h($ciudade->codigo_siat) ?></td>
        </tr>
		<tr>
            <th><?= __('Div politica admon') ?></th>
            <td><?= h($ciudade->dpa) ?></td>
        </tr>
        <tr>
            <th><?= __('Ciudad') ?></th>
            <td><?= h($ciudade->ciudad) ?></td>
        </tr>
        <tr>
            <th><?= __('Pais') ?></th>
            <td><?= h($ciudade->pais) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($ciudade->id) ?></td>
        </tr>
    </table>
</div>
