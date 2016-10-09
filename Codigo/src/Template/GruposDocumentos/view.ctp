<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Grupos Documento'), ['action' => 'edit', $gruposDocumento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Grupos Documento'), ['action' => 'delete', $gruposDocumento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gruposDocumento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Grupos Documentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupos Documento'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="gruposDocumentos view large-9 medium-8 columns content">
    <h3><?= h($gruposDocumento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Descripcion') ?></th>
            <td><?= h($gruposDocumento->descripcion) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($gruposDocumento->id) ?></td>
        </tr>
    </table>
</div>
