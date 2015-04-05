
<?php $this->inc('elements/header.php'); ?>

<!-- ZONE DIAPORAMA -->
<div id="diaporama">
	<div id="zoneDiapo">
		<?php $a = new Area('contenu'); $a->display($c); ?>
	</div>

	

	<!-- ZONE CONTENU -->
	<div id="content_warp">
		<div id="content">
			<div class="block">
				<?php
				$a = new Area ('Col1');
				$a->display($c);
				?>
			</div>

			<div class="block">
				<?php
				$a = new Area ('Col2');
				$a->display($c);
				?>

			</div>

			<div class="block">
				<?php
				$a = new Area ('Col3');
				$a->display($c);
				?>
			</div>

			

			<!-- ZONE SOCIAL -->
			<div class="block">
				<?php
				$a = new Area ('Social');
				$a->display($c);
				?>
			</div>

			<div class="block">
				<?php
				$a = new Area ('Contact');
				$a->display($c);
				?>
			</div>

			<div class="block">
				<?php
				$a = new Area ('Actualité');
				$a->display($c);
				?>
			</div>
		</div>
	</div>


	<?php $this->inc('elements/footer.php'); ?>