<div>
	<div>
		<div class="db">
			<div>
				<table cellpadding=2 cellspacing=0 border=0 class="db_control">
					<tr>
						<td class="db_label">
							Personal<br />Key
						</td>
					</tr>
					<tr>
						<td class="db_value">
							&nbsp;<?php echo($patron["personal_key"]); ?>&nbsp;
						</td>
					</tr>
				</table>
				<table cellpadding=2 cellspacing=0 border=0 class="db_control">
					<tr>
						<td class="db_label">
							Member<br />Count
						</td>
					</tr>
					<tr>
						<td class="db_value">
							<?php echo($team_member_count); ?>
						</td>
					</tr>
				</table>
				<table cellpadding=2 cellspacing=0 border=0 class="db_control">
					<tr>
						<td class="db_label">
							Position 1<br />Members
						</td>
					</tr>
					<tr>
						<td class="db_value">
							<?php echo($position1); ?>
						</td>
					</tr>
				</table>
				<table cellpadding=2 cellspacing=0 border=0 class="db_control">
					<tr>
						<td class="db_label">
							Position 2<br />Members
						</td>
					</tr>
					<tr>
						<td class="db_value">
							<?php echo($position2); ?>
						</td>
					</tr>
				</table>
				<table cellpadding=2 cellspacing=0 border=0 class="db_control">
					<tr>
						<td class="db_label">
							Position 3<br />Members
						</td>
					</tr>
					<tr>
						<td class="db_value">
							<?php echo($position3); ?>
						</td>
					</tr>
				</table>
				<table cellpadding=2 cellspacing=0 border=0 class="db_control">
					<tr>
						<td class="db_label">
							Position 4<br />Members
						</td>
					</tr>
					<tr>
						<td class="db_value">
							<?php echo($position4); ?>
						</td>
					</tr>
				</table>
				<table cellpadding=2 cellspacing=0 border=0 class="db_control">
					<tr>
						<td class="db_label">
							Contributions<br />Received
						</td>
					</tr>
					<tr>
						<td class="db_value">
							$<?php echo($total_received); ?>
						</td>
					</tr>
				</table>
				<table cellpadding=2 cellspacing=0 border=0 class="db_control">
					<tr>
						<td class="db_label">
							Current<br />Level
						</td>
					</tr>
					<tr>
						<td class="db_value">
							<?php echo($patron["level"]); ?>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>