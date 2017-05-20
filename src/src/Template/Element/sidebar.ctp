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
<section class="sidebar">
	<!-- Sidebar user panel (optional) -->
	<div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
		<!-- search form (Optional) -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search...">
				<span class="input-group-btn">
					<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</form>
		<!-- /.search form -->
		<!-- Sidebar Menu -->
		<ul class="sidebar-menu">
			<li class="header"><?= __('Actions') ?></li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>Dashboard</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu" >
					<li class=""><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
					<li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
				</ul>
			</li>
			<li class="treeview">
				<?php echo $this->Html->link(
					'<i class="fa fa-user"></i><span>User manager</span><span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
						</span>',
						array(
							'controller'=>'Users',
							'action'=>'index'),
						array(
							'rel'	=> 'tooltip',
							'data-placement'  => 'left',
							'data-original-title' => 'Edit',
							'class'  => '',
							'escape' => false  ));?>
				<ul class="treeview-menu">
					<li><?php echo $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
					<li><?php echo $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
					<li><?php echo $this->Html->link(__('List Groups'), ['controller' => 'groups', 'action' => 'index'])?></li>
					<li><?php echo $this->Html->link(__('Add Groups'), ['controller' => 'groups', 'action' => 'add']) ?></li>
				</ul>
			</li>
			<li><a href="#">
				<i class="fa fa-link"></i> <span>Another Link</span></a>
			</li>
			<li class="treeview">
				<a href="#"><i class="fa fa-link"></i> <span>Question Manager</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><?php echo $this->Html->link(__('List Courses'),['controller'=>'courses','action' => '/'])?></li>
					<li><?php echo $this->Html->link(__('Add Course'),['controller'=>'courses','action'=>'add'])?></li>
					<li><?php echo $this->Html->link(__('List Questions'),['controller'=>'questions','action' => '/'])?></li>
					<li><?php echo $this->Html->link(__('Add Questions'),['controller'=>'questions','action'=>'add'])?></li>
				</ul>
			</li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->