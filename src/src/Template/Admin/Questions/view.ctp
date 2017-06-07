<?php
/**
  * @var \App\View\AppView $this
  */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?php echo __('Actions') ?></li>
        <li><?php //echo $this->Html->link(__('Edit Question'), ['action' => 'edit', $question->q_id]) ?> </li>
        <li><?php //echo $this->Form->postLink(__('Delete Question'), ['action' => 'delete', $question->q_id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->q_id)]) ?> </li>
        <li><?php //echo $this->Html->link(__('List Questions'), ['action' => 'index']) ?> </li>
        <li><?php //echo $this->Html->link(__('New Question'), ['action' => 'add']) ?> </li>
    </ul>
</nav>-->
<!--<div class="questions view large-9 medium-8 columns content">
    <h3><?php //echo h($question->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?php echo __('Title') ?></th>
            <td><?php echo nl2br(htmlspecialchars($question->title)) ?><br /><?php //echo h($question->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?php echo __('Course name') ?></th>
            <td><?php echo $question->courses['name'] ?></td>
        </tr>
        <tr>
            <th scope="row"><?php echo __('Status') ?></th>
            <td><?php echo $this->Number->format($question->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?php echo __('Correct Option Id') ?></th>
            <td><?php echo $question->correct_option_id ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>-->
<?php //pr($question);?>
<div class="question">
	<div class="callout callout-info question-title">
        <?php echo nl2br(htmlspecialchars($question->title)); ?>
    </div>
	<div class="options table-responsive no-padding">
		<table class="table table-hover">
			<?php foreach($question['options'] as $option):?>
			<tr>
				<td class="option"><?php echo $option->description;?></td>
			</tr>
			<?php endforeach;?>
		</table>
	</div>
</div>

    
