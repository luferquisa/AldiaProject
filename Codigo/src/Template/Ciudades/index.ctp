<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nueva ciudad'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ciudades index large-9 medium-8 columns content">
    <h3><?= __('Ciudades') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
				<th><?= $this->Paginator->sort('codigo_siat') ?></th>
				<th><?= $this->Paginator->sort('Div Politica Admon') ?></th>
                <th><?= $this->Paginator->sort('ciudad') ?></th>
                <th><?= $this->Paginator->sort('departamento') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ciudades as $ciudade): ?>
            <tr>
                <td><?= $this->Number->format($ciudade->id) ?></td>
				<td><?= $this->Number->format($ciudade->codigo_siat) ?></td>
				<td><?= $this->Number->format($ciudade->dpa) ?></td>
                <td><?= h($ciudade->ciudad) ?></td>
                <td><?= h($departamentos[$ciudade->departamento]) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $ciudade->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $ciudade->id]) ?>
                   <!-- <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ciudade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ciudade->id)]) ?>-->
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
