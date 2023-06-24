<?php
include 'top.php';
?>

    <main class="box-1">
        <h1>Drawing</h1>
        <section class="box-2">
            <h2>Traditional</h2>
            <p>Drawing is the technique of applying pen, pencil, charcoal, or any other mark making tools (outside of paint) to create images. Unlike other mediums, drawing does not require a lot of materials and is a great stepping stone to explore other artistic forms, such as painting and printmaking. As well, drawing can be seen as a very forgiving medium, as an artist can sketch out and outline their ideas beforehand, and also erase any elements they wish to. There are different styles and approaches for drawing, and it is often best to both learn from others and find your own artistic style. For my pieces, I used graphite pencils, colored pencils, and charcoal.
            </p>

            <h2>Projects</h2>
            <!--Grid Images-->
                <figure class="digitalGrid">
                    <img class="grid" id="teapot" src="images/drawings/teapot.png" alt="teapot" style="width:100%" onclick="openImage();currentSlide(1)">
                    <img class="grid" id="rubix" src="images/drawings/rubix.png" alt="rubix" style="width:100%" onclick="openImage();currentSlide(2)">
                    <img class="grid" id="hourglass" src="images/drawings/hourglass.png" alt="hourglass" style="width:100%" onclick="openImage();currentSlide(3)">
                    <img class="grid" id="skeleton" src="images/drawings/skeleton.png" alt="skeleton" style="width:100%" onclick="openImage();currentSlide(4)">
                    <img class="grid" id="horse" src="images/drawings/horse.png" alt="horse" style="width:100%" onclick="openImage();currentSlide(5)">
                </figure>

            <!--Modal Images -->
            <div id="slideshow" class="slideshow">
                <span class="close">&times;</span>
                <div class="images">
                    <div class="slides">
                        <img id="teapot2" src="images/drawings/teapot.png" alt="teapot" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="rubix2" src="images/drawings/rubix.png" alt="rubix" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="hourglass2" src="images/drawings/hourglass.png" alt="hourglass" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="skeleton2" src="images/drawings/skeleton.png" alt="skeleton" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="horse2" src="images/drawings/horse.png" alt="horse" style="width:100%">
                    </div>
                    <a class="leftArrow" onclick="leftSlide()">＜</a>
                    <a class="rightArrow" onclick="rightSlide()">＞</a>
                </div>
            </div>
        </section>
    </main>
    <script src="digital.js"></script>

    
<?php
include 'footer.php'
?>