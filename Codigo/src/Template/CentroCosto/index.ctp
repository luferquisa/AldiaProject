<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Centro Costo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="centroCosto index large-9 medium-8 columns content">
    <h3><?= __('Centro Costo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('centro_costo') ?></th>
                <th><?= $this->Paginator->sort('empresa') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($centroCosto as $centroCosto): ?>
            <tr>
                <td><?= $this->Number->format($centroCosto->id) ?></td>
                <td><?= h($centroCosto->centro_costo) ?></td>
                <td><?= $this->Number->format($centroCosto->empresa) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $centroCosto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $centroCosto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $centroCosto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $centroCosto->id)]) ?>
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
