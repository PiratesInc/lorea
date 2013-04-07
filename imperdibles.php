<script type="text/javascript">
    $(window).load(function() {
    // The slider being synced must be initialized first
        $('#carousel-imperdibles').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemMargin: 5,
        asNavFor: '#slider-imperdibles'
        });

        $('#slider-imperdibles').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel-imperdibles"
        });
    });
</script>

<div id="carousel-imperdibles" class="flexslider carousel-container">
    <ul class="slides">
        <li class="flex-active-slide">
            <a href="#">
                <h2>imperible 1</h2>
            </a>
        </li>
        <li>
            <a href="#">
                <h2>imperdible 2</h2>
            </a>
        </li>
        <li>
            <a href="#">
                <h2>imperdible 3</h2>
            </a>
        </li>
    </ul>
</div>

<!-- Place somewhere in the <body> of your page -->
<div id="slider-imperdibles" class="flexslider slider-container">
  <ul class="slides">
  
  	<!-- imperdible 1 -->
    <li>
    	<div class="imperdible">
			<h3>Título del Imperdible 1</h3>
			<h4>No puedes dejar de hacer este imperdible</h4>
			<p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>
		
			<p>Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more</p>
    	</div>
    </li>
    
  	<!-- imperdible 2 -->
    <li>
    	<div class="imperdible">
			<h3>Título del Imperdible 2</h3>
			<h4>No puedes dejar de hacer este imperdible</h4>
			<p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>
		
			<p>Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more</p>
    	</div>
    </li>
    
  	<!-- imperdible 3 -->
    <li>
    	<div class="imperdible">
			<h3>Título del Imperdible 3</h3>
			<h4>No puedes dejar de hacer este imperdible</h4>
			<p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>
		
			<p>Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more</p>
    	</div>
    </li>
    

  </ul>
</div>
