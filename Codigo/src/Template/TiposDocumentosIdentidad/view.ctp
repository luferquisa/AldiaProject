<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipos Documentos Identidad'), ['action' => 'edit', $tiposDocumentosIdentidad->codigo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipos Documentos Identidad'), ['action' => 'delete', $tiposDocumentosIdentidad->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposDocumentosIdentidad->codigo)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipos Documentos Identidad'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipos Documentos Identidad'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tiposDocumentosIdentidad view large-9 medium-8 columns content">
    <h3><?= h($tiposDocumentosIdentidad->codigo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Codigo') ?></th>
            <td><?= h($tiposDocumentosIdentidad->codigo) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo') ?></th>
            <td><?= h($tiposDocumentosIdentidad->tipo) ?></td>
        </tr>
    </table>
</div>
