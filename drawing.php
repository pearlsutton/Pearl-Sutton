<?php
include 'top.php';
?>

<body>
    <main class="box-1">
        <h1>Drawing</h1>
        <section class="box-2">
            <h2>Traditional</h2>
            <p>Drawing is one of the first mediums I learned. In this study I used graphite, charcoal, colored pencils, pen, 
                and crayons to render differnt subjects and topics. These pieces were created in the spring of 2022 at the 
                Community College of Vermont.
            </p>
            <h2>Projects</h2>
            <!--Grid Images-->
                <figure class="digitalGrid">
                    <img class="grid" id="card1" src="images/digital/card1.png" alt="card1" style="width:100%" onclick="openImage();currentSlide(1)">
                    <img class="grid" id="card2" src="images/digital/card2.png" alt="card2" style="width:100%" onclick="openImage();currentSlide(2)">
                    <img class="grid" id="flyer" src="images/digital/flyer.jpg" alt="flyer" style="width:100%" onclick="openImage();currentSlide(3)">
                    <img class="grid" id="jess" src="images/digital/jess.png" alt="jess" style="width:100%" onclick="openImage();currentSlide(4)">
                </figure>

            <!--Modal Images -->
            <div id="slideshow" class="slideshow">
                <span class="close">&times;</span>
                <div class="images">
                    <div class="slides">
                        <img id="card1" src="images/digital/card1.png" alt="card1" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="card2" src="images/digital/card2.png" alt="card2" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="flyer" src="images/digital/flyer.jpg" alt="flyer" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="jess" src="images/digital/jess.png" alt="jess" style="width:100%">
                    </div>
                    <a class="leftArrow" onclick="leftSlide()"><</a>
                    <a class="rightArrow" onclick="rightSlide()">></a>
                </div>
            </div>
        </section>

    </main>
    <script src="digital.js"></script>
<body>
    
<?php
include 'footer.php'
?>