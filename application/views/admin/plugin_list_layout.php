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