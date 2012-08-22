<div class="row">
	<div class=" well span10">
		<div class="row">
			<h4 class="span8"><?=$project_title?></h4>
			<span class="span2">
				<button class="btn btn-primary btn-small btn-pressable" data-submission-id="<?=$id?>"><i class="icon-ok"></i>OK</button>
				<button class="btn btn-warning btn-small btn-pressable" data-submission-id="<?=$id?>"><i class="icon-remove"></i>Deny</button>
			</span>
		</div>
		<div class="row">
			<p class="span3">
				<?=$author_name?><br>
				via <a href="mailto:<?=$submitter_email?>?subject=feedback" title="email"><?=$submitter_name?></a>
			</p>
			<p class="span4">
				<?=$keywords?>
			</p>
			<p class="span3">
				<?=$file?>
			</p>
		</div>
	</div>
</div>