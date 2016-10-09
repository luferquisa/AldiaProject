<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sucursale'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sucursales index large-9 medium-8 columns content">
    <h3><?= __('Sucursales') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('sucursal') ?></th>
                <th><?= $this->Paginator->sort('ciudad') ?></th>
                <th><?= $this->Paginator->sort('empresa') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sucursales as $sucursale): ?>
            <tr>
                <td><?= $this->Number->format($sucursale->id) ?></td>
                <td><?= h($sucursale->sucursal) ?></td>
                <td><?= $this->Number->format($sucursale->ciudad) ?></td>
                <td><?= $this->Number->format($sucursale->empresa) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sucursale->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sucursale->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sucursale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sucursale->id)]) ?>
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
