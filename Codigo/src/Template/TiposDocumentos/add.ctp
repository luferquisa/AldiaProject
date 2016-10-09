<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tipos Documentos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tiposDocumentos form large-9 medium-8 columns content">
    <?= $this->Form->create($tiposDocumento) ?>
    <fieldset>
        <legend><?= __('Add Tipos Documento') ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('grupo_documento',array('options'=>$grupos));
            echo $this->Form->input('nombre_documento');
            echo $this->Form->input('estado',array('options'=>array('Activo'=>'Activo','Inactivo'=>'Inactivo')));
			echo $this->Form->button('+',array('type'=>'button','id'=>'nuevo'));
        ?>
		<div class="contenedor">
		
		</div>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	<script>
		i=0;
		$("#nuevo").click(function(){
			i++;
			$( ".contenedor" ).append( "<div style='border-style:solid;padding:10px' id='"+i+"'><label>Nombre campo</label><input type='text' name='campos["+i+"][nombre]' id='nombre"+i+"'><label>Tipo</label><select id='tipo"+i+"' name='campos["+i+"][tipo]'><option value='Texto' >Texto</option><option value='Clientes' >Clientes</option><option value='Documentos' >Documentos</option><option value='Productos' >Productos</option><option value='Check' >Check</option><option value='Fecha' >Fecha</option><option value='Texto largo' >Texto largo</option></select><button type='button' class='quitar' onclick='quitar("+i+")' id='"+i+"'>-</button></div>" );
		});
		function quitar(i){
			alert(i);
			$("#"+i).remove();
		}
	</script>
</div>
