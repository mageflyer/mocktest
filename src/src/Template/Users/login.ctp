<?php echo $this->Form->create() ?>
<fieldset>
	<legend><?php echo  __('Login') ?></legend>
	<?php echo $this->Form->input('username') ?>
	<?php echo $this->Form->input('password') ?>
	<?php echo $this->Form->submit(__('Login')) ?>
</fieldset>
<?php echo $this->Form->end() ?>