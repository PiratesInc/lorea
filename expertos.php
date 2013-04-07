<script type="text/javascript">
    $(window).load(function() {
    // The slider being synced must be initialized first
        $('#carousel-expertos').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemMargin: 5,
        asNavFor: '#slider-expertos'
        });

        $('#slider-expertos').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel-expertos"
        });
    });
</script>

<div id="carousel-expertos" class="flexslider carousel-container">
    <ul class="slides">
        <li class="access">
            <a href="#">
                <h2>experto 1</h2>
            </a>
        </li>
        <li class="collaborate">
            <a href="#">
                <h2>experto 2</h2>
            </a>
        </li>
        <li class="share flex-active-slide">
            <a href="#">
                <h2>experto 3</h2>
            </a>
        </li>
    </ul>
</div>

<div id="slider-expertos" class="flexslider slider-container">
  <ul class="slides">
  	
  	<!-- Experto 1 -->
    <li>
    	<h2>Nombre<span>del Experto</span></h2>
    	<h3>Maquilladora de Yabel<span>Yabel</span></h3>
    	<a class="twitter" href="" target="_blank">@experta</a>
    	<p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles. Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues. Li nov lingua franca va esser plu simplic e regulari quam li existent Europan </p>
    	
    	<a class="vinculo" href="" target="_blank">www.esperto.com</a>
    </li>
    
  	<!-- Experto 2 -->
    <li>
    	<h2>Nombre<span>del Experto 2</span></h2>
    	<h3>Maquilladora de Yabel<span>Yabel</span></h3>
    	<a class="twitter" href="" target="_blank">@experta</a>
    	<p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles. Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues. Li nov lingua franca va esser plu simplic e regulari quam li existent Europan </p>
    	
    	<a class="vinculo" href="" target="_blank">www.esperto.com</a>
    </li>
    
  	<!-- Experto 3 -->
    <li>
    	<h2>Nombre<span>del Experto 3</span></h2>
    	<h3>Maquilladora de Yabel<span>Yabel</span></h3>
    	<a class="twitter" href="" target="_blank">@experta</a>
    	<p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles. Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues. Li nov lingua franca va esser plu simplic e regulari quam li existent Europan </p>
    	
    	<a class="vinculo" href="" target="_blank">www.esperto.com</a>
    </li>

  </ul>
</div>
