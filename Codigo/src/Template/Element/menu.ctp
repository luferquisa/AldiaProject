<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Geográfico') ?></li>
		<li><?= $this->Html->link(__('Paises'), ['controller'=>'paises','action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('Departamentos'), ['controller'=>'departamentos','action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Ciudades'), ['controller'=>'ciudades','action' => 'index']) ?> </li>
		
		<li class="heading"><?= __('Regional') ?></li>
        <li><?= $this->Html->link(__('Idiomas'), ['controller'=>'idiomas','action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('Moneda'), ['controller'=>'monedas','action' => 'index']) ?> </li>
		
		<li class="heading"><?= __('Parametros') ?></li>
        <li><?= $this->Html->link(__('Estado Civil'), ['controller'=>'estadosCiviles','action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('Sector economico'), ['controller'=>'sectorEconomico','action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('Actividad economica'), ['controller'=>'actividadEconomica','action' => 'index']) ?> </li>
		<li class="heading"><?= __('Recursos humanos') ?></li>
		<li><?= $this->Html->link(__('Cajas de compensación'), ['controller'=>'cajaCompensacion','action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('Fondo de Cesantias'), ['controller'=>'cesantias','action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('Fondo pensiones'), ['controller'=>'pensiones','action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('EPS'), ['controller'=>'eps','action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('Estados  laborales'), ['controller'=>'estadoLaboral','action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('Tipos de contrato'), ['controller'=>'tiposContratos','action' => 'index']) ?> </li>
		
		<li class="heading"><?= __('Empresas') ?></li>
		<li><?= $this->Html->link(__('Centros de costo'), ['controller'=>'centroCosto','action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('Subcentros de costo'), ['controller'=>'subcentroCosto','action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('Empresas'), ['controller'=>'empresas','action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('Division'), ['controller'=>'division','action' => 'add']) ?> </li>
        <li><?= $this->Form->postLink(__('Area'), ['controller'=>'areas','action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('Cargos'), ['controller'=>'cargos','action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('Sucursales'), ['controller'=>'sucursales','action' => 'add']) ?> </li>
		
    </ul>
</nav>