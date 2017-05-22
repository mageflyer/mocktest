<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Option'), ['action' => 'edit', $option->option_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Option'), ['action' => 'delete', $option->option_id], ['confirm' => __('Are you sure you want to delete # {0}?', $option->option_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Options'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Option'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Options'), ['controller' => 'Options', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Option'), ['controller' => 'Options', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="options view large-9 medium-8 columns content">
    <h3><?= h($option->option_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Option') ?></th>
            <td><?= $option->has('option') ? $this->Html->link($option->option->option_id, ['controller' => 'Options', 'action' => 'view', $option->option->option_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($option->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Q Id') ?></th>
            <td><?= h($option->q_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C Id') ?></th>
            <td><?= $this->Number->format($option->c_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($option->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($option->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified At') ?></th>
            <td><?= h($option->modified_at) ?></td>
        </tr>
    </table>
</div>
