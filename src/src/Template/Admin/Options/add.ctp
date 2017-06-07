<?php
/**
  * @var \App\View\AppView $this
  */
  ?>
<div class="options form large-9 medium-8 columns content">
	<div class="box box-info">
		<div class="box-header with-border">
			<h3 class="box-title"><?php echo __('Add Option') ?></h3>
		</div>
		<?php echo $this->Form->create($option,array('class'=>'form-horizontal'));
			echo $this->Form->input('c_id', array('type' => 'hidden','value'=>$this->request->query('c_id')));
			echo $this->Form->input('q_id', array('type' => 'hidden','value'=>$this->request->query('q_id')));?>
		<div class="box-body">
			<?php for($i=0;$i<4;$i++):?>
			<div class="form-group">
				<?php echo $this->Form->control('description', 
						array(	'required' => true,
								'name'=>'description[]',
								'id'=>'description[]',
								'onBlur'=>'setactiveId(this)',
								'label'=>array('class'=>'col-sm-2 control-label','text'=>'Option'.($i+1)),
								'placeholder'=>"Add description here",'class'=>'form-control',
								'templates' => array(
									'inputContainer' => '<div class="{{type}}{{required}}">{{content}}</div>',
									'formGroup' => '{{label}}<div class="col-sm-10 {{type}}{{required}}">{{input}}</div>'
							)));?>
			
			</div>
			<?php endfor;?>
			<div class="form-groupd">
				<div class="col-sm-2"></div>
				<div class="col-sm-2 add-options">
					<button type="button" class="btn btn-block btn-warning btn-lg"><i class="fa fa-fw fa-plus"></i>Add options</button>
				</div>
				<div class="col-sm-3 remove-options">
					<button type="button" class="btn btn-block btn-warning btn-lg"><i class="fa fa-fw fa-trash"></i>Remove Option</button>
				</div>
			</div>
			<div class="form-groupd">
				<?php echo $this->Form->input('status', array( 
								'required' => false,
								'type'=>'checkbox',
								'label'=>array('class'=>'col-sm-2 control-label'),
								'templates' => array(
									'inputContainer' => '<div class="{{type}}">{{label}}{{content}}</div>',
									'formGroup' => '<div class="col-sm-10 {{type}}">{{input}}</div>' ))); ?>
			</div>
		</div>
		<div class="box-footer">
			<?php echo $this->Form->button(__('Submit'),array('class'=>'btn btn-info pull-right')) ?>
		</div>
		<?php echo $this->Form->end() ?>
	</div>
</div>
