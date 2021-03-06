<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('cake.css') ?>
	
	<?= $this->Html->script('jquery-3.1.0.min.js');?> 
	<?= $this->Html->script('jquery-ui/jquery-ui.js');?> 

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
	
</head>
<body class='back'>
    <div class="left-bar-menu ">
        <?=  $this->Html->image('back/lateralCerrado.png', ['alt' => 'menu']); ?>
    </div>
    <div class="tituloback">
            <h3><?= strtoupper($this->fetch('title')) ?></h3>
            <?=  $this->Html->image('back/linea.png', ['alt' => 'menu']); ?>
    </div>
     <div class="menuconfig">
            <ul>  
                <li><?= $this->Html->link(__('Front'), ['controller'=>'clientes','action' => 'index']) ?> </li>
            </ul>
    </div>
    <div style="clear:both"></div>
	<?= $this->element('menu') ?>
 
	<?= $this->Flash->render() ?>
    <div style="clear: both"></div>
    <div class="maincontent">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
    <?= $this->Html->script('back.js');?> 
</body>
</html>
