<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Question'), ['action' => 'edit', $question->q_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Question'), ['action' => 'delete', $question->q_id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->q_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questions view large-9 medium-8 columns content">
    <h3><?= h($question->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($question->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Q Id') ?></th>
            <td><?= $this->Number->format($question->q_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C Id') ?></th>
            <td><?= $this->Number->format($question->c_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($question->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($question->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($question->updated_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correct Option Id') ?></th>
            <td><?= $question->correct_option_id ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
