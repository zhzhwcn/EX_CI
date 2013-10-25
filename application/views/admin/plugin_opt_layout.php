<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">EX_CI</a>
		</div>
		<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="#" id="nav-plugin-links" data-toggle="dropdown">Plugins <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu" aria-labelledby="nav-plugin-links">
						<li><a href="<?php echo site_url('admin/plugin_list')?>">Plugin list</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</header>
<div class="container">
	<?php echo form_open('admin/plugin_save/'.$plugin->name,array('class'=>'form-horizontal')); ?>
		<div class="form-group">
			<label class="col-sm-2 control-label"><?php echo lang('admin_label_plugin_name')?></label>
			<div class="col-sm-10">
				<p class="form-control-static"><?php echo $plugin->name;?></p>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label"><?php echo lang('admin_label_plugin_desc')?></label>
			<div class="col-sm-10">
				<p class="form-control-static"><?php echo $plugin->desc;?></p>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label"><?php echo lang('admin_label_plugin_status')?></label>
			<div class="col-sm-10">
				<div class="checkbox">
					<label>
						<input name="enabled" type="checkbox" <?php echo $plugin->enabled?'checked':'';?> value="1"> <?php echo $plugin->enabled?lang('admin_plugin_enabled'):lang('admin_plugin_disabled')?>
					</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="load_order" class="col-sm-2 control-label"><?php echo lang('admin_label_plugin_load_order')?></label>
			<div class="col-sm-2">
				<input type="text" class="form-control" id="load_order" name="load_order" value="<?php echo $plugin->load_order;?>">
			</div>
		</div>
		<?php foreach($plugin->config as $config_key=>$config_val){?>
		<div class="form-group">
			<label for="config[<?php echo $config_key;?>]" class="col-sm-2 control-label"><?php echo $config_key;?></label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="config[<?php echo $config_key;?>]" name="config[<?php echo $config_key;?>]" value="<?php echo $config_val;?>">
			</div>
		</div>
		<?php }?>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary"><?php echo lang('admin_label_submit')?></button>
				<a href="<?php echo site_url('admin/plugin_opt/'.$plugin->name.'/uninstall');?>" class="btn"><?php echo lang('admin_label_plugin_uninstall')?></a>
			</div>
        </div>
	</form>
</div>

<footer class="bs-footer" role="contentinfo">
	<div class="container">
		<p>Copyright &copy; Bravery 2012-<?php echo date('Y');?></p>
	</div>
</footer>