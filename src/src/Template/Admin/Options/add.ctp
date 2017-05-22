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
			<div class="form-group">
				<?php /*echo  $this->Form->input('c_id', array(
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
                                                 ));*/?>
            </div>
			<div class="form-group">
				<?php /*echo  $this->Form->input('q_id', array(
												'label'=>array('class'=>'col-sm-2 control-label','text'=>'Question'),
                                               'type' => 'select',
                                               'legend' => 'false',
                                               'class'=>'form-control',
											   'required' => true,
                                               'empty' => 'Please select a question',
											   'templates' => [
																'inputContainer' => '<div class="{{type}}{{required}}">{{content}}</div>',
																'formGroup' => '{{label}}<div class="col-sm-10 {{type}}{{required}}">{{input}}</div>'
																]
                                                 ));*/?>
            </div>
			<?php for($i=0;$i<4;$i++):?>
			<div class="form-group">
				<?php echo $this->Form->control('description', 
						array(	'required' => true,
								'name'=>'description[]',
								'id'=>'description[]',
								'label'=>array('class'=>'col-sm-2 control-label','text'=>'Option'.($i+1)),
								'placeholder'=>"Add description here",'class'=>'form-control',
								'templates' => array(
									'inputContainer' => '<div class="{{type}}{{required}}">{{content}}</div>',
									'formGroup' => '{{label}}<div class="col-sm-10 {{type}}{{required}}">{{input}}</div>'
							)));?>
			</div>
			<?php endfor;?>
			<div class="form-group">
				<?php /*echo $this->Form->input('status', array( 
								'required' => false,
								'type'=>'checkbox',
								'label'=>array('class'=>'col-sm-2 control-label'),
								'templates' => array(
									'inputContainer' => '<div class="{{type}}">{{label}}{{content}}</div>',
									'formGroup' => '<div class="col-sm-10 {{type}}">{{input}}</div>' )));*/ ?>
			</div>
		</div>
		<div class="box-footer">
			<?php echo $this->Form->button(__('Submit'),array('class'=>'btn btn-info pull-right')) ?>
		</div>
		<?php echo $this->Form->end() ?>
	</div>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>


