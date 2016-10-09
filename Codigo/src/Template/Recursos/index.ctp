<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nuevo Recurso'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="recursos index large-9 medium-8 columns content">
    <h3><?= __('Recursos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('apellido1') ?></th>
                <th><?= $this->Paginator->sort('apellido2') ?></th>
                <th><?= $this->Paginator->sort('nombre1') ?></th>
                <th><?= $this->Paginator->sort('nombre2') ?></th>
                <th><?= $this->Paginator->sort('tipo_documento') ?></th>
                <th><?= $this->Paginator->sort('documento') ?></th>
                <th><?= $this->Paginator->sort('empresa') ?></th>
                <th><?= $this->Paginator->sort('cargo') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recursos as $recurso): ?>
            <tr>
                <td><?= $this->Number->format($recurso->id) ?></td>
                <td><?= h($recurso->apellido1) ?></td>
                <td><?= h($recurso->apellido2) ?></td>
                <td><?= h($recurso->nombre1) ?></td>
                <td><?= h($recurso->nombre2) ?></td>
                <td><?= h($recurso->tipo_documento) ?></td>
                <td><?= h($recurso->documento) ?></td>
                <td><?= $this->Number->format($recurso->empresa) ?></td>
                <td><?= $this->Number->format($recurso->cargo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $recurso->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $recurso->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $recurso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recurso->id)]) ?>
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
