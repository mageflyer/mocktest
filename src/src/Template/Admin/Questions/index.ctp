<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?php echo __('Actions') ?></li>
        <li><?php echo $this->Html->link(__('New Questions'), ['action' => 'add','controller'=>'questions']) ?></li>
    </ul>
</nav>
<div class="questions index large-9 medium-8 columns content">
    <h3><?php echo __('Questions') ?></h3>
	 
	<div class="row">
        <div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Data Table With Full Features</h3>
					<div class="col-md-12 purple search_box">
					<?php 	echo $this->Form->create($questions, array('type' => 'get'));
							echo $this->Form->input('title',array('type'=>'text','value'=>"$search_term"));
							echo $this->Form->button('Search', array('class'=>'btn'));
							echo $this->Form->end();?>
    </div>
				
				</div>
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th scope="col"><?php echo $this->Paginator->sort('q_id',array('Sr No')) ?></th>
								<th scope="col"><?php echo $this->Paginator->sort('c_id',array('Course')) ?></th>
								<th scope="col"><?php echo $this->Paginator->sort('title') ?></th>
								<th scope="col"><?php echo $this->Paginator->sort('status') ?></th>
								<th scope="col" class="actions"><?php echo __('Actions') ?></th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($questions as $question): ?>
						<tr>
							<td><?php echo $this->Number->format($question->q_id) ?></td>
							<td><?php echo $question->courses['name'] ?></td>
							<td title="<?php echo h($question->title)?>" width="40%"><?php echo $this->Text->excerpt($question->title, 'method', 150, '...');

							//echo h($question->title) ?></td>
							<td><?php echo $this->Number->format($question->status) ?></td>
							<td class="actions">
							
							<?php echo $this->Html->link(__('<i class="fa fa-fw fa-eye" data-toggle="modal" data-target="#myModal"></i>'), ['action' => 'view', $question->q_id],array('escape' => false,'title'=>'View','class'=>'view')) ?>
							
							<?php echo $this->Html->link(__('<i class="fa fa-fw fa-edit"></i>'), 
							['action' => 'edit', $question->q_id],array('escape' => false,'title'=>'Edit')) ?>
							
							<?php echo $this->Form->postLink('<i class="fa fa-fw fa-remove"></i>', ['action' => 'delete', $question->q_id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->q_id),
							'escape' => false,'title'=>'Remove']) ?>
							  
							<?php echo $this->Html->link('<i class="fa fa-fw fa-external-link-square"></i>',[
															'controller'=>'options',
															'action' => 'add','?' => [
																		'c_id' => $question->c_id, 
																		'q_id' => $question->q_id]
																	],
															array('escape' => false,'title'=>'Add answers')); ?>
							<?php echo $this->Html->link('<i class="fa fa-fw fa-question-circle"></i>',[
															'controller'=>'options',
															'action' => 'correct','?' => [
																		'q_id' => $question->q_id]
																	],
															array('escape' => false,'title'=>'Correct answers')); ?>
							</td>
						</tr>
						<?php endforeach; ?>
						</tbody>
						<tfoot>
							<tr>
								<th scope="col"><?php echo $this->Paginator->sort('q_id',array('Sr No')) ?></th>
								<th scope="col"><?php echo $this->Paginator->sort('c_id',array('Course')) ?></th>
								<th scope="col"><?php echo $this->Paginator->sort('title') ?></th>
								<th scope="col"><?php echo $this->Paginator->sort('status') ?></th>
								
								<th scope="col" class="actions"><?php echo __('Actions') ?></th>
							</tr>
						</tfoot>
					</table>
					<div class="row">
						<div class="col-sm-5">
						<div class="dataTables_info pull-left"><?php echo $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></div>
						</div>
						<div class="col-sm-7">
							<div class="paginator pull-right">
								<ul class="pagination">
									<?php echo $this->Paginator->first('<< ' . __('first')) ?>
									<?php echo $this->Paginator->prev('< ' . __('previous')) ?>
									<?php echo $this->Paginator->numbers() ?>
									<?php echo $this->Paginator->next(__('next') . ' >') ?>
									<?php echo $this->Paginator->last(__('last') . ' >>') ?>
								</ul>
							</div>
						</div>
					
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div><!-- /.col -->
	</div><!-- /.row -->
    
		
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Question preview</h4>
      </div>
      <div class="modal-body">
        <button type="button" class="btn btn-default btn-lrg ajax" title="Ajax Request">
            <i class="fa fa-spin fa-refresh"></i>&nbsp; Get External Content
          </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
