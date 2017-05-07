  <div id="tabs">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Всички филми</a></li>
		<li role="presentation"><a href="#imax" aria-controls="imax" role="tab" data-toggle="tab">IMAX</a></li>
		<li role="presentation"><a href="#4dx" aria-controls="4dx" role="tab" data-toggle="tab">4DX</a></li>
		<li role="presentation"><a href="#3d" aria-controls="3d" role="tab" data-toggle="tab">3D</a></li>
		<li role="presentation"><a href="#subtitle" aria-controls="subtitle" role="tab" data-toggle="tab">Със субтритри</a></li>
		<li role="presentation"><a href="#dub" aria-controls="dub" role="tab" data-toggle="tab">Дублирани</a></li>
		<li role="presentation"><a href="#new" aria-controls="new" role="tab" data-toggle="tab">Скоро на екран</a></li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane fade in active" id="home">
			<div  id="tab-section">
				<?php include "inc/allmovie.php"; ?>
			</div> <!-- tab-section -->		        	
		</div>
		<div role="tabpanel" class="tab-pane fade" id="imax">
			<div  id="tab-section">
				<?php include "inc/imax.php"; ?>
			</div> <!-- tab-section -->	
		</div>
		<div role="tabpanel" class="tab-pane fade" id="4dx">
			<div  id="tab-section">
				<?php include "inc/dx.php"; ?>
			</div> <!-- tab-section -->	
		</div>
		<div role="tabpanel" class="tab-pane fade" id="3d">
			<div  id="tab-section">
				<?php include "inc/3d.php"; ?>
			</div> <!-- tab-section -->	
		</div>
		<div role="tabpanel" class="tab-pane fade" id="subtitle">
			<div  id="tab-section">
				<?php include "inc/subtitle.php"; ?>
			</div> <!-- tab-section -->	
		</div>
		<div role="tabpanel" class="tab-pane fade" id="dub">
			<div  id="tab-section">
				<?php include "inc/duplicate.php"; ?>
			</div> <!-- tab-section -->	
		</div>
		<div role="tabpanel" class="tab-pane fade" id="new">
			<div  id="tab-section">
				<?php include "inc/soon.php"; ?>
			</div> <!-- tab-section -->	
		</div>
	</div> <!-- class="tab-content" -->
</div>
