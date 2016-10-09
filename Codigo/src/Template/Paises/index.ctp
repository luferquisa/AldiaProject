 <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Nuevo pais'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paises index large-9 medium-8 columns content">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('codigo') ?></th>
                <th><?= $this->Paginator->sort('pais') ?></th>
                <th class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $this->Form->input('cod',array('label'=>false)) ?></td>
                <td><?= $this->Form->input('country',array('label'=>false)) ?></td>
            </tr>
            <?php foreach ($paises as $paise): ?>
            <tr>
                <td><?= h($paise->codigo) ?></td>
                <td><?= h($paise->pais) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $paise->codigo]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $paise->codigo]) ?>
                    <?= $this->Form->postLink(__('Borrar	'), ['action' => 'delete', $paise->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $paise->codigo)]) ?>
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
    <script>
     $("input").keyup(function(){
                codigo = !$("#cod").val()?'':$("#cod").val();
                pais = !$("#country").val()?'':$("#country").val();
                $.ajax({url: "index?r=1&codigo="+codigo+"&pais="+pais, success: function(result){
                    $(".maincontent").html(result);
                    $("#cod").val(codigo);
                    $("#country").val(pais);
                }});
            }); 
 //Cuando se carga la página
        $(document).ready(function(){
           

       
            
        });
</script>
</div>
