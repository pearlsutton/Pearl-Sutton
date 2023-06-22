<?php
include 'top.php';
?>

<body>
    <main class="box-1">
        <h1>Digital</h1>
        <section class="box-2">
            <h2>Digital</h2>
            <p>Digital Art is considered to be art that is created in combination with one’s imagination and the use of digital devices or software. It is a growing field as the development of technology also advances. Today, there are countless programs and tools that are available to empower any individual to let their creativity unfold before them. With the use of these digital tools at our fingertips, everything is possible. 
            </p>
            <p> For the digital pieces below, I used the Adobe Creative Cloud software, particularly the Adobe Illustrator, Adobe Photoshop, and Adobe Design applications. These were created in the fall of 2020. I have also worked with Procreate, a raster graphic editor app.</p>

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
</body>

<?php
include 'footer.php'
?>