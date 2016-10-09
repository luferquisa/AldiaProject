<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Subcentro Costo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subcentroCosto index large-9 medium-8 columns content">
    <h3><?= __('Subcentro Costo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('subcentros_costos') ?></th>
                <th><?= $this->Paginator->sort('centro_costo') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subcentroCosto as $subcentroCosto): ?>
            <tr>
                <td><?= $this->Number->format($subcentroCosto->id) ?></td>
                <td><?= h($subcentroCosto->subcentros_costos) ?></td>
                <td><?= $this->Number->format($subcentroCosto->centro_costo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $subcentroCosto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subcentroCosto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subcentroCosto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subcentroCosto->id)]) ?>
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
