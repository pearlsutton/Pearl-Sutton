<?php
include 'top.php';
?>

<body>
    <main class="box-1">
        <h1>Photography</h1>
            <section class="photographyBox">
            <h2>Through my Lens</h2>
                <p>Photography is the art of taking photos with a camera. Like all art mediums, photography is a very expressive form of art that allows great creativity and personality in imagery and composition.  Photography is, personally, my favorite medium to use because of the timelessness and uniqueness of it. Photographs are created from capturing moments in time, evidence of life and a window to our past.
                </p>
                <p>These photographs were taken throughout the past five years on a Nikon D5500 camera, with a 18-55mm and 70-200mm lens. As well, these photos are a combination of raw photos (not edited in any way) and edited photos. The softwares I use for editing are Adobe Photoshop, Adobe Lightroom, Apple Photos, and VSCO.
                </p>
                <p>My primary focus and subjects are on nature and landscapes. However, I would like to begin exploring portrait photography. I would also like to try my hand at film photography.
                </p>

        <h2>Photographs</h2>        
        <!--Grid Images-->
            <figure class="go-right">
                <img class="grid" id="circle" src="images/photography/circle.png" alt="circle" style="width:100%" onclick="openImage();currentSlide(1)">
                <img class="grid" id="mountains" src="images/photography/mountains.jpeg" alt="mountains" style="width:100%" onclick="openImage();currentSlide(2)">
                <img class="grid" id="rainbow" src="images/photography/rainbow.png" alt="rainbow" style="width:100%" onclick="openImage();currentSlide(3)">
                <img class="grid" id="stars" src="images/photography/stars.jpeg" alt="stars" style="width:100%" onclick="openImage();currentSlide(4)">
                <img class="grid" id="bee" src="images/photography/bee.png" alt="bee" style="width:100%" onclick="openImage();currentSlide(5)">
                <img class="grid" id="rust" src="images/photography/rust.png" alt="rust" style="width:100%" onclick="openImage();currentSlide(6)">
                <img class="grid" id="sun" src="images/photography/sun.jpeg" alt="sun" style="width:100%" onclick="openImage();currentSlide(7)">
            </figure>

        <!--Modal Images -->
        <div id="slideshow" class="slideshow">
                <span class="close">&times;</span>
                <div class="images">
                    <div class="slides">
                        <img id="card1" src="images/photography/circle.png" alt="card1" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="card2" src="images/photography/mountains.jpeg" alt="card2" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="flyer" src="images/photography/rainbow.png" alt="flyer" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="jess" src="images/photography/stars.jpeg" alt="jess" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="jess" src="images/photography/bee.png" alt="jess" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="jess" src="images/photography/rust.png" alt="jess" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="jess" src="images/photography/sun.jpeg" alt="jess" style="width:100%">
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