<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipos Documento'), ['action' => 'edit', $tiposDocumento->codigo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipos Documento'), ['action' => 'delete', $tiposDocumento->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposDocumento->codigo)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipos Documentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipos Documento'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<?php


?>
<div class="tiposDocumentos view large-9 medium-8 columns content">
    <h3><?= h($tiposDocumento->codigo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre Documento') ?></th>
            <td><?= h($tiposDocumento->nombre_documento) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($tiposDocumento->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Grupo Documento') ?></th>
            <td><?= $this->Number->format($tiposDocumento->grupo_documento) ?></td>
        </tr>
    </table>
	<table>
	<h3>Campos definidos por el usuario</h3>
	<tr><th>Nombre</th><th>Tipo</th></tr>
	<?php
	foreach($campos as $c){
		echo "<tr><td>".$c['nombre']."</td></tr>";
	}
	?>
	</table>
	</table>
    <div class="row">
        <h4><?= __('Estado') ?></h4>
        <?= $this->Text->autoParagraph(h($tiposDocumento->estado)); ?>
    </div>
</div>
