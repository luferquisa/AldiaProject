<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Recurso'), ['action' => 'edit', $recurso->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Recurso'), ['action' => 'delete', $recurso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recurso->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Recursos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recurso'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="recursos view large-9 medium-8 columns content">
    <h3><?= h($recurso->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Apellido1') ?></th>
            <td><?= h($recurso->apellido1) ?></td>
        </tr>
        <tr>
            <th><?= __('Apellido2') ?></th>
            <td><?= h($recurso->apellido2) ?></td>
        </tr>
        <tr>
            <th><?= __('Nombre1') ?></th>
            <td><?= h($recurso->nombre1) ?></td>
        </tr>
        <tr>
            <th><?= __('Nombre2') ?></th>
            <td><?= h($recurso->nombre2) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo Documento') ?></th>
            <td><?= h($recurso->tipo_documento) ?></td>
        </tr>
        <tr>
            <th><?= __('Documento') ?></th>
            <td><?= h($recurso->documento) ?></td>
        </tr>
        <tr>
            <th><?= __('Libreta Mil') ?></th>
            <td><?= h($recurso->libreta_mil) ?></td>
        </tr>
        <tr>
            <th><?= __('Dis Mil') ?></th>
            <td><?= h($recurso->dis_mil) ?></td>
        </tr>
        <tr>
            <th><?= __('Direccion Res') ?></th>
            <td><?= h($recurso->direccion_res) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefono Res') ?></th>
            <td><?= h($recurso->telefono_res) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($recurso->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Ciuda Exp') ?></th>
            <td><?= $this->Number->format($recurso->ciuda_exp) ?></td>
        </tr>
        <tr>
            <th><?= __('Ciudad Nac') ?></th>
            <td><?= $this->Number->format($recurso->ciudad_nac) ?></td>
        </tr>
        <tr>
            <th><?= __('Estado Civil') ?></th>
            <td><?= $this->Number->format($recurso->estado_civil) ?></td>
        </tr>
        <tr>
            <th><?= __('Ciudad Res') ?></th>
            <td><?= $this->Number->format($recurso->ciudad_res) ?></td>
        </tr>
        <tr>
            <th><?= __('Personas Cargo') ?></th>
            <td><?= $this->Number->format($recurso->personas_cargo) ?></td>
        </tr>
        <tr>
            <th><?= __('Empresa') ?></th>
            <td><?= $this->Number->format($recurso->empresa) ?></td>
        </tr>
        <tr>
            <th><?= __('Sucursal') ?></th>
            <td><?= $this->Number->format($recurso->sucursal) ?></td>
        </tr>
        <tr>
            <th><?= __('Cco') ?></th>
            <td><?= $this->Number->format($recurso->cco) ?></td>
        </tr>
        <tr>
            <th><?= __('Cargo') ?></th>
            <td><?= $this->Number->format($recurso->cargo) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo Cont') ?></th>
            <td><?= $this->Number->format($recurso->tipo_cont) ?></td>
        </tr>
        <tr>
            <th><?= __('Estado Lab') ?></th>
            <td><?= $this->Number->format($recurso->estado_lab) ?></td>
        </tr>
        <tr>
            <th><?= __('Fondo Riesgo') ?></th>
            <td><?= $this->Number->format($recurso->fondo_riesgo) ?></td>
        </tr>
        <tr>
            <th><?= __('Fondo Pension') ?></th>
            <td><?= $this->Number->format($recurso->fondo_pension) ?></td>
        </tr>
        <tr>
            <th><?= __('Eps') ?></th>
            <td><?= $this->Number->format($recurso->eps) ?></td>
        </tr>
        <tr>
            <th><?= __('Cesantias') ?></th>
            <td><?= $this->Number->format($recurso->cesantias) ?></td>
        </tr>
        <tr>
            <th><?= __('Caja Compensacion') ?></th>
            <td><?= $this->Number->format($recurso->caja_compensacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Nac') ?></th>
            <td><?= h($recurso->fecha_nac) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Ingreso') ?></th>
            <td><?= h($recurso->fecha_ingreso) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Egreso') ?></th>
            <td><?= h($recurso->fecha_egreso) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Genero') ?></h4>
        <?= $this->Text->autoParagraph(h($recurso->genero)); ?>
    </div>
    <div class="row">
        <h4><?= __('Clase Lib Mil') ?></h4>
        <?= $this->Text->autoParagraph(h($recurso->clase_lib_mil)); ?>
    </div>
    <div class="row">
        <h4><?= __('Grupo San') ?></h4>
        <?= $this->Text->autoParagraph(h($recurso->grupo_san)); ?>
    </div>
    <div class="row">
        <h4><?= __('Rh') ?></h4>
        <?= $this->Text->autoParagraph(h($recurso->rh)); ?>
    </div>
    <div class="row">
        <h4><?= __('Nacionalidad') ?></h4>
        <?= $this->Text->autoParagraph(h($recurso->nacionalidad)); ?>
    </div>
</div>
