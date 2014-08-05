<div class='container'>
	<h1>Projects</h1>
	<p class='lead'>The S3 Summit application is in BETA, and our load times have not yet been optimized. Please be patient while your project loads. This may take up to 30 seconds.</p>
	<div class="row">
		<?php 
			$i = 0;
			foreach($projects as $project) { 
			if($i == 4) {
				echo "</div><div class='row'>";
				$i = 0;
			}
		?>
			<a href="project/<?php echo $project->id; ?>"><div class="col-md-3 project">
				<h2><?php echo $project->name; ?></h2>
			</div></a>
		<?php } ?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>