<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Estado Laboral'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="estadoLaboral index large-9 medium-8 columns content">
    <h3><?= __('Estado Laboral') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('int') ?></th>
                <th><?= $this->Paginator->sort('estado') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estadoLaboral as $estadoLaboral): ?>
            <tr>
                <td><?= $this->Number->format($estadoLaboral->int) ?></td>
                <td><?= h($estadoLaboral->estado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $estadoLaboral->int]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estadoLaboral->int]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estadoLaboral->int], ['confirm' => __('Are you sure you want to delete # {0}?', $estadoLaboral->int)]) ?>
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
