<!-- LOREAL VOYAGE -->

<?php include 'includes/head.php'; ?>

<div class="container">

	<div  class="tabbable tabs-left">

		<!-- sidebar con menu, clima, cambio, etc -->
		<?php include 'includes/sidebar.php'; ?>

		<div class="tab-content main">

			<div class="tab-pane active" id="lA">
				<?php include 'home.php'; ?>
			</div>

			<div class="tab-pane" id="lB">
				<?php include 'itinerario.php'; ?>
			</div>

			<div class="tab-pane" id="lC">
				<?php include 'imperdibles.php'; ?>
			</div>

			<div class="tab-pane" id="lD">
				<?php include 'revitalift.php'; ?>
			</div>

			<div class="tab-pane" id="lE">
				<?php include 'expertos.php'; ?>
			</div>

			<div class="tab-pane" id="lF">
				<?php include 'videos.php'; ?>
			</div>
			
			<div class="player">
				<h1>Reproductor de música</h1>
			</div>


		</div>

	</div><!-- fin tabbable -->
		
	
</div><!-- fin container -->

<?php include 'includes/footer.php'; ?>