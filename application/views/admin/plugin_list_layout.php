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
	<table class="table table-condensed table-bordered table-hover">
		<thead>
            <tr>
				<th>#</th>
				<th><?php echo lang('admin_label_plugin_name')?></th>
				<th><?php echo lang('admin_label_plugin_desc')?></th>
				<th><?php echo lang('admin_label_plugin_status')?></th>
				<th><?php echo lang('admin_label_plugin_opt')?></th>
            </tr>
        </thead>
		<tbody>
			<?php foreach($plugins as $plugin_name => $plugin_info){?>
			<tr>
				<td><?php echo $plugin_info['plugin_id'];?></td>
				<td><?php echo $plugin_info['plugin_name'];?></td>
				<td><?php echo $plugin_info['desc'];?></td>
				<td><?php echo $plugin_info['enabled']?lang('admin_plugin_enabled'):lang('admin_plugin_disabled');?></td>
				<td><?php echo anchor('admin/plugin_opt/'.$plugin_info['plugin_name'],$plugin_info['plugin_id']?lang('admin_label_plugin_conf'):lang('admin_label_plugin_install'));?></td>
			</tr>
			<?php }?>
		</tbody>
	</table>
</div>

<footer class="bs-footer" role="contentinfo">
	<div class="container">
		<p>Copyright &copy; Bravery 2012-<?php echo date('Y');?></p>
	</div>
</footer>