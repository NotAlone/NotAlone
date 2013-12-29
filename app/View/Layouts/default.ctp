<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

//$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$notAloneDescription = __d('notAlone_dev', 'notAlone');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset();?>
	<title>
		<?php echo $notAloneDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php   
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
                echo $this->Html->css('mi');
                //echo $this->Html->css('bootstrap');
                //echo $this->Html->css('bootstrap.min');
               // echo $this->Html->css('bootstrap-theme');
                //echo $this->Html->css('bootstrap-theme.min');
                
                
		echo $this->fetch('meta');
		echo $this->fetch('css');
                
		echo $this->fetch('script');
                //echo $this->Html->script('bootstrap');
                //echo $this->Html->script('bootstrap.min');
	?>
</head>
<body>  
	<div id="container">
            <div class="header">
                <ul class="navbar">
                    <li class="titulo" >
                   <?php
                    echo $this->Html->link(
                        "<span style='color:black'>Not</span><span style='color:red'>Alone</span>",
                        array('controller'=>'posts','action'=>'index'),                     
                        array('escape'=>false)
                        );
                    ?>
                    </li>
                    
                    <li>
                    <?php
                    echo $this->Html->link("Posts",array('controller'
                    =>'posts','action'=>'index'));
                    ?>     
                    </li> 
                            
                    <li><a href="#">Fixed top</a></li>
                </ul>
                <!-- Derecha -->
                <ul class="navbar-right">
                    
 <?php if($authUser) { ?>
                    
                    <li class="perfil">
                        <b>Bienvenid@ </b>
                    <?php
                            echo $this->Html->link($authUser['username'],array('controller'
                            =>'users','action'=>'edit') );
                    ?>    
                    
                    </li>
                    <li>
                    <?php
                    echo $this->Html->link("Cerrar Sesión",array('controller'
                    =>'users','action'=>'logout'));
                    ?>   
                    </li>
                </ul>
            </div>  
            
            
 <?php } else { ?>
            
                    
                    <li class="active">
                    <?php
                            echo $this->Html->link("Iniciar Sesión",array('controller'
                            =>'users','action'=>'login'));
                    ?>    
                    
                    </li>
                    <li>
                    <?php
                    echo $this->Html->link("Registrarse",array('controller'
                    =>'users','action'=>'add'));
                    ?>   
                    </li>
                </ul>
            </div>  
    
            
            
  <?php } ?>      
            <div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $notAloneDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
