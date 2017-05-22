<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?php echo __('Actions') ?></li>
        <li><?php echo $this->Html->link(__('New Option'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="options index large-9 medium-8 columns content">
    <h3><?php echo __('Options') ?></h3>
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
								<th scope="col"><?php echo $this->Paginator->sort('option_id') ?></th>
								<th scope="col"><?php echo $this->Paginator->sort('description') ?></th>
								<th scope="col"><?php echo $this->Paginator->sort('q_id') ?></th>
								<th scope="col"><?php echo $this->Paginator->sort('c_id') ?></th>
								<th scope="col"><?php echo $this->Paginator->sort('status') ?></th>
								<th scope="col"><?php echo $this->Paginator->sort('created_at') ?></th>
								<th scope="col"><?php echo $this->Paginator->sort('modified_at') ?></th>
								<th scope="col" class="actions"><?php echo __('Actions') ?></th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($options as $option): //pr($option);die;?>
						<tr>
							
							<td><?php echo $this->Number->format($option->option_id); ?></td>
							<td><?php echo h($option->description) ?></td>
							<td><?php echo h($option->q_id) ?></td>
							<td><?php echo $this->Number->format($option->c_id) ?></td>
							<td><?php echo $this->Number->format($option->status) ?></td>
							<td><?php echo h($option->created_at) ?></td>
							<td><?php echo h($option->modified_at) ?></td>
							<td class="actions">
								<?php echo $this->Html->link(__('<i class="fa fa-fw fa-eye"></i>'), ['action' => 'view', $option->option_id],array('escape' => false,'title'=>'View')) ?>
								<?php echo $this->Html->link(__('<i class="fa fa-fw fa-edit"></i>'), ['action' => 'edit', $option->option_id],array('escape' => false,'title'=>'Edit')) ?>
								<?php echo $this->Form->postLink('<i class="fa fa-fw fa-remove"></i>', ['action' => 'delete', $option->option_id], ['confirm' => __('Are you sure you want to delete # {0}?', $option->option_id),'escape' => false,'title'=>'Remove']) ?>
							</td>
						</tr>
						<?php endforeach; ?>
						</tbody>
						<tfoot>
							<tr>
								<th scope="col"><?php echo $this->Paginator->sort('option_id') ?></th>
								<th scope="col"><?php echo $this->Paginator->sort('description') ?></th>
								<th scope="col"><?php echo $this->Paginator->sort('q_id') ?></th>
								<th scope="col"><?php echo $this->Paginator->sort('c_id') ?></th>
								<th scope="col"><?php echo $this->Paginator->sort('status') ?></th>
								<th scope="col"><?php echo $this->Paginator->sort('created_at') ?></th>
								<th scope="col"><?php echo $this->Paginator->sort('modified_at') ?></th>
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
