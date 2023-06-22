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
            <figure class="photographyGrid">
                <img class="grid" id="circle" src="images/photography/circle.png" alt="circle" style="width:100%" onclick="openImage();currentSlide(1)">
                <img class="grid" id="mountains" src="images/photography/mountains.jpeg" alt="mountains" style="width:100%" onclick="openImage();currentSlide(2)">
                <img class="grid" id="rainbow" src="images/photography/rainbow.png" alt="rainbow" style="width:100%" onclick="openImage();currentSlide(3)">
                <img class="grid" id="stars" src="images/photography/stars.jpeg" alt="stars" style="width:100%" onclick="openImage();currentSlide(4)">
                <img class="grid" id="bee" src="images/photography/bee.png" alt="bee" style="width:100%" onclick="openImage();currentSlide(5)">
                <img class="grid" id="rust" src="images/photography/rust.png" alt="rust" style="width:100%" onclick="openImage();currentSlide(6)">
                <img class="grid" id="rustFlowers" src="images/photography/rustFlowers.png" alt="rustFlowers" style="width:100%" onclick="openImage();currentSlide(7)">
                <img class="grid" id="fall" src="images/photography/fall.png" alt="fall" style="width:100%" onclick="openImage();currentSlide(8)">
                <img class="grid" id="reflection" src="images/photography/reflection.png" alt="reflection" style="width:100%" onclick="openImage();currentSlide(9)">
                <img class="grid" id="bunny" src="images/photography/bunny.png" alt="bunny" style="width:100%" onclick="openImage();currentSlide(10)">
                <img class="grid" id="moonOrange" src="images/photography/moonOrange.png" alt="moonOrange" style="width:100%" onclick="openImage();currentSlide(11)">
                <img class="grid" id="blossoms1" src="images/photography/blossoms1.png" alt="blossoms1" style="width:100%" onclick="openImage();currentSlide(12)">
                <img class="grid" id="moonFlowers" src="images/photography/moonFlowers.png" alt="moonFlowers" style="width:100%" onclick="openImage();currentSlide(13)">
                <img class="grid" id="blossoms2" src="images/photography/blossoms2.png" alt="blossoms2" style="width:100%" onclick="openImage();currentSlide(14)">
                <img class="grid" id="blossoms3" src="images/photography/blossoms3.png" alt="blossoms3" style="width:100%" onclick="openImage();currentSlide(15)">
                <img class="grid" id="blossoms4" src="images/photography/blossoms4.png" alt="blossoms4" style="width:100%" onclick="openImage();currentSlide(16)">
                <img class="grid" id="blossoms5" src="images/photography/blossoms5.png" alt="blossoms5" style="width:100%" onclick="openImage();currentSlide(17)">
                <img class="grid" id="orange" src="images/photography/orange.png" alt="orange" style="width:100%" onclick="openImage();currentSlide(18)">
                <img class="grid" id="orange2" src="images/photography/orange2.png" alt="orange2" style="width:100%" onclick="openImage();currentSlide(19)">
                <img class="grid" id="purpleMountains" src="images/photography/purpleMountains.png" alt="purpleMountains" style="width:100%" onclick="openImage();currentSlide(20)">
                <img class="grid" id="sparkle" src="images/photography/sparkle.png" alt="sparkle" style="width:100%" onclick="openImage();currentSlide(21)">
                <img class="grid" id="snowMountains" src="images/photography/snowMountains.png" alt="snowMountains" style="width:100%" onclick="openImage();currentSlide(22)">
                <img class="grid" id="daffodils" src="images/photography/daffodils.png" alt="daffodils" style="width:100%" onclick="openImage();currentSlide(23)">
                <img class="grid" id="whiteDaffodil" src="images/photography/whiteDaffodil.png" alt="whiteDaffodil" style="width:100%" onclick="openImage();currentSlide(24)">
                <img class="grid" id="waterdroplets" src="images/photography/waterdroplets.png" alt="waterdroplets" style="width:100%" onclick="openImage();currentSlide(25)">
                <img class="grid" id="cross" src="images/photography/cross.png" alt="cross" style="width:100%" onclick="openImage();currentSlide(26)">
                <img class="grid" id="greenGalaxy" src="images/photography/greenGalaxy.png" alt="greenGalaxy" style="width:100%" onclick="openImage();currentSlide(27)">
                <img class="grid" id="purpleGalaxy" src="images/photography/purpleGalaxy.png" alt="purpleGalaxy" style="width:100%" onclick="openImage();currentSlide(28)">
                <img class="grid" id="galaxy" src="images/photography/galaxy.png" alt="galaxy" style="width:100%" onclick="openImage();currentSlide(29)">
                <img class="grid" id="rustFlowers" src="images/photography/rustFlowers.png" alt="rustFlowers" style="width:100%" onclick="openImage();currentSlide(30)">
                <img class="grid" id="leaves" src="images/photography/leaves.png" alt="leaves" style="width:100%" onclick="openImage();currentSlide(31)">
                <img class="grid" id="cloudsGrad" src="images/photography/cloudsGrad.png" alt="cloudsGrad" style="width:100%" onclick="openImage();currentSlide(32)">
            </figure>

        <!--Modal Images -->
        <div id="slideshow" class="slideshow">
                <span class="close">&times;</span>
                <div class="images">
                    <div class="slides">
                        <img id="circle" src="images/photography/circle.png" alt="circle" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="mountains" src="images/photography/mountains.jpeg" alt="mountains" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="rainbow" src="images/photography/rainbow.png" alt="rainbow" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="stars" src="images/photography/stars.jpeg" alt="stars" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="bee" src="images/photography/bee.png" alt="bee" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="rust" src="images/photography/rust.png" alt="rust" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="rustFlowers" src="images/photography/rustFlowers.png" alt="rustFlowers" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="fall" src="images/photography/fall.png" alt="fall" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="reflection" src="images/photography/reflection.png" alt="reflection"  style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="bunny" src="images/photography/bunny.png" alt="bunny" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="moonOrange" src="images/photography/moonOrange.png" alt="moonOrange"  style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="blossoms1" src="images/photography/blossoms1.png" alt="blossoms1" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="moonFlowers" src="images/photography/moonFlowers.png" alt="moonFlowers" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="blossoms2" src="images/photography/blossoms2.png" alt="blossoms2" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="blossoms3" src="images/photography/blossoms3.png" alt="blossoms3" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="blossoms4" src="images/photography/blossoms4.png" alt="blossoms4"   style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="blossoms5" src="images/photography/blossoms5.png" alt="blossoms5"   style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="orange" src="images/photography/orange.png" alt="orange" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="orange2" src="images/photography/orange2.png" alt="orange2" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="purpleMountains" src="images/photography/purpleMountains.png" alt="purpleMountains"  style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="sparkle" src="images/photography/sparkle.png" alt="sparkle" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="snowMountains" src="images/photography/snowMountains.png" alt="snowMountains"  style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="daffodils" src="images/photography/daffodils.png" alt="daffodils" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="whiteDaffodil" src="images/photography/whiteDaffodil.png" alt="whiteDaffodil"   style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="galaxy" src="images/photography/galaxy.png" alt="galaxy" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="waterdroplets" src="images/photography/waterdroplets.png" alt="waterdroplets" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="cross" src="images/photography/cross.png" alt="cross" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="greenGalaxy" src="images/photography/greenGalaxy.png" alt="greenGalaxy" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="purpleGalaxy" src="images/photography/purpleGalaxy.png" alt="purpleGalaxy" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="leaves" src="images/photography/leaves.png" alt="leaves" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="sun" src="images/photography/sun.jpeg" alt="sun" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="cloudsGrad" src="images/photography/cloudsGrad.png" alt="cloudsGrad"  style="width:100%">
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