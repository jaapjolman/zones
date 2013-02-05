<section class="title">
	<h4><?php echo lang('zones:title:available_drivers'); ?></h4>
</section>

<section class="item">
<div class="content">

	<table class="table-list" id="shipping-drivers-table">

		<tr>
			<th><?php echo lang('zones:title:driver');?></th>
			<th><div class="alignright"><?php echo lang('zones:title:actions');?></div></th>
		</tr>

		<?php foreach($drivers as $slug=>$driver): ?>

			<tr>
				<td>
					<?php echo humanize($slug); ?> <em class="driver-slug">( <?php echo $slug; ?> )</em>
				</td>
				<td>
					<div class="buttons alignright">
						<?php if($driver['installed'] === false): ?>
							<?php echo anchor(site_url('admin/zones/shipping/install/'.$slug), lang('global:install'), 'class="btn button green"'); ?>
						<?php else: ?>
							<?php echo anchor(site_url('admin/settings#'.$slug), lang('zones:button:configure'), 'class="btn button orange"'); ?>
							<?php if($driver['enabled']): ?>
								<?php echo anchor(site_url('admin/zones/shipping/disable/'.$slug), lang('global:disable'), 'class="btn button gray"'); ?>
							<?php else: ?>
								<?php echo anchor(site_url('admin/zones/shipping/enable/'.$slug), lang('global:enable'), 'class="btn button gray"'); ?>
							<?php endif; ?>
							<?php echo anchor(site_url('admin/zones/shipping/uninstall/'.$slug), lang('global:uninstall'), 'class="btn button red"'); ?>
						<?php endif; ?>
					</div>
				</td>
			</tr>

		<?php endforeach; ?>

	</table>

</div>
</section>