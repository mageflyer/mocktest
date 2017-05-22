<?php $this->assign('title', 'Mock Test Admin Area'); ?>
<div class="login-box">
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
	<?php echo $this->Form->create() ?>
	<?php echo $this->Form->control('username', ['required' => true,
												'label'=>false,
												'placeholder'=>"User Name",'class'=>'form-control',
												'templates' => [
        'inputContainer' => '<div class="form-group has-feedback {{type}}{{required}}">{{content}}<span class="glyphicon glyphicon-user form-control-feedback"></span></div>',
        'inputContainerError' => '<div class="col-md-4 input {{type}}{{required}} error">{{content}}{{error}}</div>'
    ]]);?>
	<?php echo $this->Form->control('password', ['required' => true,
												'label'=>false,
												'placeholder'=>"Password",'class'=>'form-control',
												'templates' => [
        'inputContainer' => '<div class="form-group has-feedback {{type}}{{required}}">{{content}}<span class="glyphicon glyphicon-lock form-control-feedback"></span></div>',
        'inputContainerError' => '<div class="col-md-4 input {{type}}{{required}} error">{{content}}{{error}}</div>'
    ]]);?>
		<div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <div class="icheckbox_square-blue" style="position: relative;" aria-checked="false" aria-disabled="false"><input style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div> Remember Me
            </label>
          </div>
        </div>
        <div class="col-xs-4">
		<?php 
		
		echo $this->Form->button('Login', array(	'type' => 'submit',
														'class'=>'btn btn-primary btn-block btn-flat',
														'div'=>array('class'=>'wer')));
														
														
		?>
		</div>
		</div>
    <?php echo $this->Form->end() ?>
	<div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>