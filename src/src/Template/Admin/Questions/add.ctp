<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="questions form large-9 medium-8 columns">
	<div class="box box-info">
		<div class="box-header with-border">
			<h3 class="box-title">Question Form</h3>
		</div>
		<?php echo $this->Form->create($question,array('class'=>'form-horizontal')) ?>
		<div class="box-body">
			<div class="form-group">
				<?php echo  $this->Form->input('c_id', array(
												'label'=>array('class'=>'col-sm-2 control-label','text'=>'Course name'),
                                               'type' => 'select',
                                               'legend' => 'false',
                                               'class'=>'form-control',
											   'required' => true,
                                               'empty' => 'Please select a course name',
											   'templates' => [
																'inputContainer' => '<div class="{{type}}{{required}}">{{content}}</div>',
																'formGroup' => '{{label}}<div class="col-sm-10 {{type}}{{required}}">{{input}}</div>'
																]
                                                 ));?>
            </div>
			<div class="form-group">
				<?php echo $this->Form->control('title', 
						array(	'required' => true,
								'label'=>array('class'=>'col-sm-2 control-label'),
								'placeholder'=>"Question title",'class'=>'form-control',
								'templates' => array(
									'inputContainer' => '<div class="{{type}}{{required}}">{{content}}</div>',
									'formGroup' => '{{label}}<div class="col-sm-10 {{type}}{{required}}">{{input}}</div>'
							
							)));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('status', array( 
								'required' => false,
								'type'=>'checkbox',
								'label'=>array('class'=>'col-sm-2 control-label'),
								'templates' => array(
									'inputContainer' => '<div class="{{type}}">{{label}}{{content}}</div>',
									'formGroup' => '<div class="col-sm-10 {{type}}">{{input}}</div>'
							
							)	
								)
								); ?>
				
			</div>
			<!--
				<?php 	/*echo $this->Form->control('created_at',array(
									'label'=>array('class'=>'col-sm-2 control-label'),
									'templates' => ['inputContainer' => '<div class="{{type}}{{required}}">{{content}}</div>','formGroup' => '{{label}}<div class="col-sm-10 {{type}}{{required}}">{{input}}</div>']));*/ ?>
			</div>
			<div class="form-group">
				<?php 	/*echo $this->Form->control('updated_at',array(
									'label'=>array('class'=>'col-sm-2 control-label'),
									'templates' => ['inputContainer' => '<div class="{{type}}{{required}}">{{content}}</div>','formGroup' => '{{label}}<div class="col-sm-10 {{type}}{{required}}">{{input}}</div>']));*/ ?>
				
			</div>-->
			
			
			
			
		</div>
		<div class="box-footer">
			<?php echo $this->Form->button(__('Submit'),array('class'=>'btn btn-info pull-right')) ?>
		</div>
		<?php echo $this->Form->end() ?>
	</div>
</div>
