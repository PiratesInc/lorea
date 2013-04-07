
<script type="text/javascript">
    $(window).load(function() {
    // The slider being synced must be initialized first
        $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemMargin: 5,
        asNavFor: '#slider'
        });

        $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel"
        });
    });
</script>

<div id="carousel" class="flexslider carousel-container">
    <ul class="slides">
        <li class="access">
            <a href="#">
                <h2>THUMB 1</h2>
            </a>
        </li>
        <li class="collaborate">
            <a href="#">
                <h2>THUMB 2</h2>
            </a>
        </li>
        <li class="share flex-active-slide">
            <a href="#">
                <h2>THUMB 3</h2>
            </a>
        </li>
    </ul>
</div>

<div id="slider" class="flexslider slider-container">
  <ul class="slides">
    <li><div class="video-wrapper">video 1</div></li>
    <li><div class="video-wrapper">video 2</div></li>
    <li><div class="video-wrapper">video 3</div></li>
    <!-- items mirrored twice, total of 12 -->
  </ul>
</div>
