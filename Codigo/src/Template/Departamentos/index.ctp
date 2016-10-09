<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nuevo departamento'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paises index large-9 medium-8 columns content">
    <h3><?= __('Departamentos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
				<th><?= $this->Paginator->sort('departamento') ?></th>
                <th><?= $this->Paginator->sort('pais') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($departamentos as $departamento): ?>
            <tr>
                <td><?= h($departamento->id) ?></td>
				<td><?= h($departamento->departamento) ?></td>
                <td><?= h($paises[$departamento->pais]) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $departamento->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $departamento->id]) ?>
                    <!--<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $departamento->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $paise->codigo)]) ?>-->
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
