<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="questions index large-9 medium-8 columns content">
    <h3><?php echo __('Questions') ?></h3>
	<div class="row">
        <div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Data Table With Full Features</h3>
				</div>
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th scope="col"><?php echo $this->Paginator->sort('q_id',array('Sr No')) ?></th>
								<th scope="col"><?php echo $this->Paginator->sort('c_id',array('Course')) ?></th>
								<th scope="col"><?php echo $this->Paginator->sort('title') ?></th>
								<th scope="col"><?php echo $this->Paginator->sort('status') ?></th>
								<th scope="col"><?php echo $this->Paginator->sort('updated_at') ?></th>
								<th scope="col" class="actions"><?php echo __('Actions') ?></th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($questions as $question): ?>
						<tr>
							<td><?php echo $this->Number->format($question->q_id) ?></td>
							<td><?php echo $question->courses['name'] ?></td>
							<td><?php echo h($question->title) ?></td>
							<td><?php echo $this->Number->format($question->status) ?></td>
							<td><?php echo h(date('d/m/Y h:i:s',strtotime($question->updated_at))) ?></td>
							<td class="actions">
							
							<?php echo $this->Html->link(__('<i class="fa fa-fw fa-eye"></i>'), ['action' => 'view', $question->q_id],array('escape' => false,'title'=>'View')) ?>
							
							<?php echo $this->Html->link(__('<i class="fa fa-fw fa-edit"></i>'), 
							['action' => 'edit', $question->q_id],array('escape' => false,'title'=>'Edit')) ?>
							
							<?php echo $this->Form->postLink('<i class="fa fa-fw fa-remove"></i>', ['action' => 'delete', $question->q_id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->q_id),
							'escape' => false,'title'=>'Remove']) ?>
							
							<?php echo $this->Html->link(__('Add Options'), ['action' => 'edit', $question->q_id]) ?>
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
								<th scope="col"><?php echo $this->Paginator->sort('updated_at') ?></th>
								<th scope="col" class="actions"><?php echo __('Actions') ?></th>
							</tr>
						</tfoot>
					</table>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div><!-- /.col -->
	</div><!-- /.row -->
    
		<div class="paginator">
			<ul class="pagination">
				<?php echo $this->Paginator->first('<< ' . __('first')) ?>
				<?php echo $this->Paginator->prev('< ' . __('previous')) ?>
				<?php echo $this->Paginator->numbers() ?>
				<?php echo $this->Paginator->next(__('next') . ' >') ?>
				<?php echo $this->Paginator->last(__('last') . ' >>') ?>
			</ul>
			<p><?php echo $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
		</div>
</div>
