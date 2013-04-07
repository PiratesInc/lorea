
<script type="text/javascript" charset="utf-8">
    $(window).load(function() {
    // The slider being synced must be initialized first
        $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        itemMargin: 5,
        asNavFor: '#slider',
        randomize: false, 
        });

        $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        sync: "#carousel",
        });
    });
</script>

<div id="carousel" class="flexslider carousel-container">
    <ul class="slides">
        <li class="one"><h2>THUMB 1</h2></li>
        <li class="two"><h2>THUMB 2</h2></li>
        <li class="three"><h2>THUMB 3</h2></li>
        <li class="four"><h2>THUMB 4</h2></li>
    </ul>
</div>

<div id="slider" class="flexslider slider-container">
  <ul class="slides">
    <li><div class="video-wrapper">video 1</div></li>
    <li><div class="video-wrapper">video 2</div></li>
    <li><div class="video-wrapper">video 3</div></li>
    <li><div class="video-wrapper">video 4</div></li>
    <!-- items mirrored twice, total of 12 -->
  </ul>
</div>
