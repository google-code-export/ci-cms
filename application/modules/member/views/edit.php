<!-- [Left menu] start -->
<div class="leftmenu">

	<h1 id="pageinfo"><?php echo __("Navigation", $this->template['module'])?></h1>
	
	<ul id="tabs" class="quickmenu">
		<li><a href="#one">General settings</a></li>
	</ul>
	<div class="quickend"></div>

</div>
<!-- [Left menu] end -->

<!-- [Content] start -->
<div class="content slim">

<h1 id="settings"><?php echo __("Edit a user", $this->template['module'])?></h1>



<form class="settings" action="<?php echo site_url('admin/member/edit')?>" method="post" accept-charset="utf-8">
		
		<ul>
			<li><input type="submit" name="submit" value="<?php echo __("Save", $this->template['module'])?>" class="input-submit" /></li>
			<li><a href="<?php echo site_url('admin/member/listall')?>" class="input-submit last"><?php echo __("Cancel", $this->template['module'])?></a></li>
		</ul>
		
		<br class="clearfloat" />

		<hr />
		<?php echo $this->validation->error_string; ?>
		<div id="one">
		
			<label for="username"><?php echo __("Username", $this->template['module'])?>: </label>
			<input name="username" type='hidden' value='<?php echo $member['username']?>' />
			<input id="username" type='text' value='<?php echo $member['username']?>' class="input-text" disabled/>
			<br />
			<label for="password"><?php echo __("Password", $this->template['module'])?>:</label>
			<input type="password" name="password" value="" id="password" class="input-text" /><br />

			<label for="passconf"><?php echo __("Confirm", $this->template['module'])?>:</label>
			<input type="password" name="passconf" value="" id="" class="input-text" /><br />			
			<label for="email"><?php echo __("Email", $this->template['module'])?>:</label>
			<input type="text" name="email" value="<?php echo $member['email']?>" id="email" class="input-text" /><br />
			
			<label for="status"><?php echo __("Status", $this->template['module'])?>:</label>
				<select name="status" class="input-select" id="status">
					<option value='active' <?php if ($member['status'] == 'active'):?>selected='selected' <?php endif;?>><?php echo __("Active", $this->template['module'])?></option>
					<option value='disabled' <?php if ($member['status'] == 'disabled'):?>selected='selected' <?php endif;?>><?php echo __("Disabled", $this->template['module'])?></option>
				</select><br />

					
		</div>
	</form>
<script>

  $(document).ready(function(){
    $("#tabs").tabs();
  });

</script>
</div>
<!-- [Content] end -->
