<script type="text/javascript">
    $(window).load(function() {
    // The slider being synced must be initialized first
        $('#carousel-revitalift').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemMargin: 5,
        asNavFor: '#slider-revitalift'
        });

        $('#slider-revitalift').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel-revitalift"
        });
    });
</script>

<div id="carousel-revitalift" class="flexslider carousel-container">
    <ul class="slides">
        <li class="flex-active-slide">
            <a href="#">
                <h2>Inicio</h2>
            </a>
        </li>
        <li>
            <a href="#">
                <h2>Tendencia</h2>
            </a>
        </li>
        <li>
            <a href="#">
                <h2>Novedad</h2>
            </a>
        </li>
        <li>
            <a href="#">
                <h2>Estudio</h2>
            </a>
        </li>
        <li>
            <a href="#">
                <h2>Gama</h2>
            </a>
        </li>
    </ul>
</div>





<div id="slider-revitalift" class="flexslider slider-container">
  <ul class="slides">

  	<!-- INICIO - ENTREVISTA -->
    <li class="inicio">

		<div class="tabbable revitalift">

			<ul class="nav nav-tabs">
				<li class="active"><a href="#inicio1" data-toggle="tab"><h4>Inicio</h4></a></li>
				<li><a href="#inicio2" data-toggle="tab"><h4>Entrevista</h4></a></li>
			</ul>
		
			<div class="tab-content">
		
				<!-- INICIO -->
				<div class="tab-pane active" id="inicio1">
					<p>Hola soy el inicio</p>
				</div>
		
				<!-- revitalift 2 -->
				<div class="tab-pane active" id="inicio2">
					<p>Hola soy una Entrevista</p>
				</div>
		
			</div>

		</div>
    </li>
    
  	<!-- TENDENCIA -->
    <li class="tendencia">

		<div class="tabbable revitalift">

			<ul class="nav nav-tabs">
				<li class="active"><a href="#tendencia1" data-toggle="tab"><h4>Tendencia</h4></a></li>
				<li><a href="#tendencia2" data-toggle="tab"><h4>Experto</h4></a></li>
			</ul>
		
			<div class="tab-content">
		
				<!-- INICIO -->
				<div class="tab-pane active" id="tendencia1">
					<p>Hola soy una tendencia</p>
				</div>
		
				<!-- revitalift 2 -->
				<div class="tab-pane active" id="tendencia2">
					<p>Hola soy un experto</p>
				</div>
		
			</div>

		</div>
    </li>


  </ul>
</div>
