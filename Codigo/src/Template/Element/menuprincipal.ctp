<nav  id="actions-sidebar">
    <ul class="side-nav">	
    	<li style="margin-bottom:55px"><?=  $this->Html->image('front/opciones.png', ['alt' => 'opciones']); ?></li>
    	<li id='cliente'><?=  $this->Html->image('front/clientes.png', ['alt' => 'clientes']); ?></li>
    	<li id='empresa'><?=  $this->Html->image('front/empresas.png', ['alt' => 'empresas']); ?></li>
		<!--<li class="heading"><?= __('Empresas') ?></li>
		<li><?= $this->Form->postLink(__('Recursos'), ['controller'=>'recursos','action' => 'index']) ?> </li>
		-->
		
		<!--<li><?= $this->Html->link(__('Empresas del Cliente'), ['controller'=>'clienteEmpresas','action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('Contactos del cliente'), ['controller'=>'contactosCliente','action' => 'add']) ?> </li>
		
		<li class="heading"><?= __('Documentos') ?></li>
		<li><?= $this->Html->link(__('Grupos de documento'), ['controller'=>'gruposDocumentos','action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('Tipos de documento'), ['controller'=>'tiposDocumentos','action' => 'index']) ?> </li>
		-->
    </ul>



     <?=$this->Html->image('front/logoAldia.png', ['alt' => 'logoAldia','style'=>'bottom:5px;position:fixed;left:15px']); ?>
</nav>
<ul id="menucliente">
    	<li><?= $this->Html->link( $this->Html->image('front/clienteBlanco.png', ['alt' => 'empresas','style'=>'margin-right:8px'])." Clientes", ['controller'=>'clientes','action' => 'add'],['escape' => false]) ?> </li>
 </ul>
<div style="clear:both"></div>