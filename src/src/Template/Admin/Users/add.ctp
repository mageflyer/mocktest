<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?php echo __('Actions') ?></li>
        <li><?php echo $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?php echo $this->Form->create($user) ?>
    <fieldset>
        <legend><?php echo __('Add User') ?></legend>
		<?php
            echo $this->Form->control('username');
			echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->input('group_id', ['options' => $groups]);?>
    </fieldset>
    <?php echo $this->Form->button(__('Submit')) ?>
    <?php echo $this->Form->end() ?>
</div>
