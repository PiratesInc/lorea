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
		
				<!-- inicio -->
				<div class="tab-pane active" id="inicio1">
					<p>Hola soy el inicio</p>
				</div>
		
				<!-- entrevista -->
				<div class="tab-pane active" id="inicio2">
					<p>Hola soy una Entrevista</p>
				</div>
		
			</div>

		</div>
    </li>
    
  	<!-- TENDENCIA LASER CO2 FRACCIONADO -->
    <li class="tendencia">

		<div class="tabbable revitalift">

			<ul class="nav nav-tabs">
				<li class="active"><a href="#tendencia1" data-toggle="tab"><h4>Tendencia</h4></a></li>
				<li><a href="#tendencia2" data-toggle="tab"><h4>Experto</h4></a></li>
			</ul>
		
			<div class="tab-content">
		
				<!-- tendencias -->
				<div class="tab-pane active" id="tendencia1">
					<p>Hola soy una tendencia</p>
				</div>
		
				<!-- expertos -->
				<div class="tab-pane active" id="tendencia2">
					<p>Hola soy un experto</p>
				</div>
		
			</div>

		</div>
    </li>
    
  	<!-- NOVEDAD PROXYLANE -->
    <li class="novedad">

		<div class="tabbable revitalift">

			<ul class="nav nav-tabs">
				<li class="active"><a href="#novedad1" data-toggle="tab"><h4>Novedad</h4></a></li>
				<li><a href="#novedad2" data-toggle="tab"><h4>Proxylane</h4></a></li>
				<li><a href="#novedad3" data-toggle="tab"><h4>X-1</h4></a></li>
				<li><a href="#novedad4" data-toggle="tab"><h4>X-2</h4></a></li>
				<li><a href="#novedad5" data-toggle="tab"><h4>X-3</h4></a></li>
			</ul>
		
			<div class="tab-content">
		
				<!-- novedad -->
				<div class="tab-pane active" id="novedad1">
					<p>Hola soy una novedad</p>
				</div>
		
				<!-- proxylane -->
				<div class="tab-pane active" id="novedad2">
					<p>Hola soy proxylane</p>
				</div>

				<!-- proxylane x1 -->
				<div class="tab-pane active" id="novedad3">
					<p>Proxylane X1</p>
				</div>

				<!-- proxylane x2 -->
				<div class="tab-pane active" id="novedad4">
					<p>Proxylane X2</p>
				</div>

				<!-- proxylane x3 -->
				<div class="tab-pane active" id="novedad5">
					<p>Proxylane X3</p>
				</div>
		
			</div>

		</div>
    </li>
    
  	<!-- ESTUDIO REVITALIFT LASER -->
    <li class="estudio">

		<div class="tabbable revitalift">

			<ul class="nav nav-tabs">
				<li class="active"><a href="#estudio1" data-toggle="tab"><h4>Inicio</h4></a></li>
				<li><a href="#estudio2" data-toggle="tab"><h4>Vs Laser CO2</h4></a></li>
				<li><a href="#estudio3" data-toggle="tab"><h4>Estudio Cl’nico</h4></a></li>
			</ul>
		
			<div class="tab-content">
		
				<!-- inicio -->
				<div class="tab-pane active" id="estudio1">
					<p>Estudio Inicio</p>
				</div>
		
				<!-- vs -->
				<div class="tab-pane active" id="estudio2">
					<p>Hola soy un versus</p>
				</div>
				
				<!-- vs -->
				<div class="tab-pane active" id="estudio3">
					<p>Hola soy un Estudio Cl’nico</p>
				</div>
		
			</div>

		</div>
    </li>
    

  	<!-- CONOCE LA GAMA -->
    <li class="gama">

		<div class="tabbable revitalift">

			<ul class="nav nav-tabs">
				<li class="active"><a href="#gama1" data-toggle="tab"><h4>Revitalift Laser X3</h4></a></li>
				<li><a href="#gama2" data-toggle="tab"><h4>SŽrum Efecto Piel Nueva</h4></a></li>
				<li><a href="#gama3" data-toggle="tab"><h4>Cuidado de Ojos</h4></a></li>
				<li><a href="#gama4" data-toggle="tab"><h4>Protocolo de Uso</h4></a></li>
			</ul>
		
			<div class="tab-content">
		
				<!-- revitalift laser x3 -->
				<div class="tab-pane active" id="gama1">
					<p>Revitalift Laser X3</p>
				</div>
		
				<!-- serœm -->
				<div class="tab-pane active" id="gama2">
					<p>Hola soy un serum efecto piel nueva</p>
				</div>
				
				<!-- cuidado de ojos -->
				<div class="tab-pane active" id="gama3">
					<p>Hola soy un cuidado de ojos</p>
				</div>
				
				<!-- cuidado de ojos -->
				<div class="tab-pane active" id="gama4">
					<p>Hola soy un Protocolo de uso</p>
				</div>
		
			</div>

		</div>
    </li>

    
    
    
    


  </ul>
</div>
