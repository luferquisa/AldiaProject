<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Recursos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="recursos form large-9 medium-8 columns content">
    <?= $this->Form->create($recurso) ?>
    <fieldset>
        <legend><?= __('Add Recurso') ?></legend>
        <?php
            echo $this->Form->input('apellido1');
            echo $this->Form->input('apellido2');
            echo $this->Form->input('nombre1');
            echo $this->Form->input('nombre2');
            echo $this->Form->input('tipo_documento',array('options'=>$tipod));
            echo $this->Form->input('documento');
            echo $this->Form->input('ciuda_exp',array('options'=>$ciudades));
            echo $this->Form->input('fecha_nac', ['empty' => true]);
            echo $this->Form->input('ciudad_nac',array('options'=>$ciudades));
            echo $this->Form->input('genero',array('options'=>array('Femenino','Masculino')));
            echo $this->Form->input('libreta_mil');
            echo $this->Form->input('clase_lib_mil',array('options'=>array('No aplica','Primera','Segunda')));
            echo $this->Form->input('dis_mil');
            echo $this->Form->input('grupo_san',array('options'=>array('A','B','AB','O')));
            echo $this->Form->input('rh',array('options'=>array('+','-')));
            echo $this->Form->input('estado_civil',array('options'=>$estados));
            echo $this->Form->input('nacionalidad',array('options'=>array('Colombiano','Extrangero','Doble')));
            echo $this->Form->input('direccion_res');
            echo $this->Form->input('ciudad_res',array('options'=>$ciudades));
            echo $this->Form->input('telefono_res');
            echo $this->Form->input('personas_cargo');
            echo $this->Form->input('fecha_ingreso', ['empty' => true]);
            echo $this->Form->input('fecha_egreso', ['empty' => true]);
            echo $this->Form->input('empresa');
            echo $this->Form->input('sucursal',array('options'=>$sucursales));
            echo $this->Form->input('cco');
            echo $this->Form->input('cargo');
            echo $this->Form->input('tipo_cont');
            echo $this->Form->input('estado_lab');
            echo $this->Form->input('fondo_riesgo');
            echo $this->Form->input('fondo_pension');
            echo $this->Form->input('eps');
            echo $this->Form->input('cesantias');
            echo $this->Form->input('caja_compensacion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
