<?= $this->Html->script('idiomas/library.js');?> 
<div class="idiomas index large-9 medium-8 columns content">
    <h3><?= __('IDIOMAS') ?></h3>
    <table cellpadding="0" cellspacing="0" id="lista" >
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('idioma') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($idiomas as $idioma): ?>
            <tr>
                <td><?= $this->Html->link(__(h($idioma->idioma)), ['action' => 'edit', $idioma->id]) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $this->Form->button('Crear idioma',array('onclick' => 'crearIdioma()')) ?>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
