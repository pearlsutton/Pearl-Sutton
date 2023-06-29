<?php
include 'top.php';
?>

    <main class="box-1">
        <h1>Photography</h1>
            <section class="photographyBox">
            <h2>Through my Lens</h2>
                <p>Photography is the art of taking photos with a camera. Like all art mediums, photography is a very expressive form of art that allows great creativity and personality in imagery and composition. Photography is, personally, my favorite medium to use because of the timelessness and uniqueness of it. Photographs are created from capturing moments in time, evidence of life and a window to our past.
                </p>
                <p>I’ve always had an interest in taking photos, but it was around the age of eleven that I began to take it up as a hobby. Over these past years, I have become more “serious” or knowledgeable in the art form, by learning and studying techniques and observing other artists’ works. 
                </p>
                <p>My primary focus and subjects are on nature and landscapes, however, I would like to begin exploring portrait photography, and film photography. The photos below are a combination of raw (unedited) and edited photos that I have taken in the past five years with my Nikon DSLR camera (equipment information below in 'More Photography').
                </p>

        <div class="buttons" id="buttonSet">
            <button class="button" onclick="showAll()">Show All</button>
            <button class="button" onclick="showNone();show18()">18-55mm Lens</button>
            <button class="button" onclick="showNone();show70()">70-300mm Lens</button>
            <button class="button" onclick="showNone();showCreatures()">Creatures</button>
            <button class="button" onclick="showNone();showSkies()">Skies</button>
        </div>       

        <h2>Photographs</h2>        
        <!--Grid Images-->
            <figure class="photographyGrid">
                <img class="grid 18mm" id="circle" src="images/photography/circle.png" alt="circle" style="width:100%" onclick="openImage();currentSlide(1)">
                <img class="grid 18mm" id="mountains" src="images/photography/mountains.jpeg" alt="mountains" style="width:100%" onclick="openImage();currentSlide(2)">
                <img class="grid 18mm sky" id="rainbow" src="images/photography/rainbow.png" alt="rainbow" style="width:100%" onclick="openImage();currentSlide(3)">
                <img class="grid 18mm sky" id="stars" src="images/photography/stars.jpeg" alt="stars" style="width:100%" onclick="openImage();currentSlide(4)">
                <img class="grid 18mm creatures" id="bee" src="images/photography/bee.png" alt="bee" style="width:100%" onclick="openImage();currentSlide(5)">
                <img class="grid 18mm" id="rust" src="images/photography/rust.png" alt="rust" style="width:100%" onclick="openImage();currentSlide(6)">
                <img class="grid 18mm" id="rustFlowers" src="images/photography/rustFlowers.png" alt="rustFlowers" style="width:100%" onclick="openImage();currentSlide(7)">
                <img class="grid 18mm" id="fall" src="images/photography/fall.png" alt="fall" style="width:100%" onclick="openImage();currentSlide(8)">
                <img class="grid 70mm" id="reflection" src="images/photography/reflection.png" alt="reflection" style="width:100%" onclick="openImage();currentSlide(9)">
                <img class="grid 70mm creatures" id="bunny" src="images/photography/bunny.png" alt="bunny" style="width:100%" onclick="openImage();currentSlide(10)">
                <img class="grid 70mm" id="moonOrange" src="images/photography/moonOrange.png" alt="moonOrange" style="width:100%" onclick="openImage();currentSlide(11)">
                <img class="grid 70mm" id="blossoms1" src="images/photography/blossoms1.png" alt="blossoms1" style="width:100%" onclick="openImage();currentSlide(12)">
                <img class="grid 70mm" id="moonFlowers" src="images/photography/moonFlowers.png" alt="moonFlowers" style="width:100%" onclick="openImage();currentSlide(13)">
                <img class="grid 70mm" id="blossoms2" src="images/photography/blossoms2.png" alt="blossoms2" style="width:100%" onclick="openImage();currentSlide(14)">
                <img class="grid 70mm" id="blossoms3" src="images/photography/blossoms3.png" alt="blossoms3" style="width:100%" onclick="openImage();currentSlide(15)">
                <img class="grid 70mm" id="blossoms4" src="images/photography/blossoms4.png" alt="blossoms4" style="width:100%" onclick="openImage();currentSlide(16)">
                <img class="grid 70mm" id="blossoms5" src="images/photography/blossoms5.png" alt="blossoms5" style="width:100%" onclick="openImage();currentSlide(17)">
                <img class="grid 70mm" id="orange" src="images/photography/orange.png" alt="orange" style="width:100%" onclick="openImage();currentSlide(18)">
                <img class="grid 70mm" id="orange2" src="images/photography/orange2.png" alt="orange2" style="width:100%" onclick="openImage();currentSlide(19)">
                <img class="grid 70mm" id="purpleMountains" src="images/photography/purpleMountains.png" alt="purpleMountains" style="width:100%" onclick="openImage();currentSlide(20)">
                <img class="grid 70mm" id="sparkle" src="images/photography/sparkle.png" alt="sparkle" style="width:100%" onclick="openImage();currentSlide(21)">
                <img class="grid 70mm" id="snowMountains" src="images/photography/snowMountains.png" alt="snowMountains" style="width:100%" onclick="openImage();currentSlide(22)">
                <img class="grid 70mm" id="daffodils" src="images/photography/daffodils.png" alt="daffodils" style="width:100%" onclick="openImage();currentSlide(23)">
                <img class="grid 70mm" id="whiteDaffodil" src="images/photography/whiteDaffodil.png" alt="whiteDaffodil" style="width:100%" onclick="openImage();currentSlide(24)">
                <img class="grid 18mm" id="waterdroplets" src="images/photography/waterdroplets.png" alt="waterdroplets" style="width:100%" onclick="openImage();currentSlide(25)">
                <img class="grid 18mm" id="cross" src="images/photography/cross.png" alt="cross" style="width:100%" onclick="openImage();currentSlide(26)">
                <img class="grid 18mm sky" id="greenGalaxy" src="images/photography/greenGalaxy.png" alt="greenGalaxy" style="width:100%" onclick="openImage();currentSlide(27)">
                <img class="grid 18mm sky" id="purpleGalaxy" src="images/photography/purpleGalaxy.png" alt="purpleGalaxy" style="width:100%" onclick="openImage();currentSlide(28)">
                <img class="grid 18mm sky" id="galaxy" src="images/photography/galaxy.png" alt="galaxy" style="width:100%" onclick="openImage();currentSlide(29)">
                <img class="grid 18mm sky" id="sun" src="images/photography/sun.jpeg" alt="sun" style="width:100%" onclick="openImage();currentSlide(30)">
                <img class="grid 70mm" id="leaves" src="images/photography/leaves.png" alt="leaves" style="width:100%" onclick="openImage();currentSlide(31)">
                <img class="grid 70mm sky" id="cloudsGrad" src="images/photography/cloudsGrad.png" alt="cloudsGrad" style="width:100%" onclick="openImage();currentSlide(32)">
            </figure>
        <!--Modal Images -->
        <div id="slideshow" class="slideshow">
                <span class="close">&times;</span>
                <div class="images">
                    <div class="slides horizontal">
                        <img id="circlei" src="images/photography/circle.png" alt="circle" style="width:100%">
                    </div>
                    <div class="slides horizontal">
                        <img id="mountainsi" src="images/photography/mountains.jpeg" alt="mountains" style="width:100%">
                    </div>
                    <div class="slides horizontal">
                        <img id="rainbowi" src="images/photography/rainbow.png" alt="rainbow" style="width:100%">
                    </div>
                    <div class="slides horizontal">
                        <img id="starsi" src="images/photography/stars.jpeg" alt="stars" style="width:100%">
                    </div>
                    <div class="slides vertical">
                        <img id="beei" src="images/photography/bee.png" alt="bee" style="width:100%">
                    </div>
                    <div class="slides vertical">
                        <img id="rusti" src="images/photography/rust.png" alt="rust" style="width:100%">
                    </div>
                    <div class="slides vertical">
                        <img id="rustFlowersi" src="images/photography/rustFlowers.png" alt="rustFlowers" style="width:100%">
                    </div>
                    <div class="slides vertical">
                        <img id="falli" src="images/photography/fall.png" alt="fall" style="width:100%">
                    </div>
                    <div class="slides horizontal">
                        <img id="reflectioni" src="images/photography/reflection.png" alt="reflection"  style="width:100%">
                    </div>
                    <div class="slides horizontal">
                        <img id="bunnyi" src="images/photography/bunny.png" alt="bunny" style="width:100%">
                    </div>
                    <div class="slides horizontal">
                        <img id="moonOrangei" src="images/photography/moonOrange.png" alt="moonOrange"  style="width:100%">
                    </div>
                    <div class="slides horizontal">
                        <img id="blossoms1i" src="images/photography/blossoms1.png" alt="blossoms1" style="width:100%">
                    </div>
                    <div class="slides vertical">
                        <img id="moonFlowersi" src="images/photography/moonFlowers.png" alt="moonFlowers" style="width:100%">
                    </div>
                    <div class="slides vertical">
                        <img id="blossoms2i" src="images/photography/blossoms2.png" alt="blossoms2" style="width:100%">
                    </div>
                    <div class="slides vertical">
                        <img id="blossoms3i" src="images/photography/blossoms3.png" alt="blossoms3" style="width:100%">
                    </div>
                    <div class="slides vertical">
                        <img id="blossoms4i" src="images/photography/blossoms4.png" alt="blossoms4"   style="width:100%">
                    </div>
                    <div class="slides horizontal">
                        <img id="blossoms5i" src="images/photography/blossoms5.png" alt="blossoms5"   style="width:100%">
                    </div>
                    <div class="slides horizontal">
                        <img id="orangei" src="images/photography/orange.png" alt="orange" style="width:100%">
                    </div>
                    <div class="slides horizontal">
                        <img id="orange2i" src="images/photography/orange2.png" alt="orange2" style="width:100%">
                    </div>
                    <div class="slides horizontal">
                        <img id="purpleMountainsi" src="images/photography/purpleMountains.png" alt="purpleMountains"  style="width:100%">
                    </div>
                    <div class="slides vertical">
                        <img id="sparklei" src="images/photography/sparkle.png" alt="sparkle" style="width:100%">
                    </div>
                    <div class="slides vertical">
                        <img id="snowMountainsi" src="images/photography/snowMountains.png" alt="snowMountains"  style="width:100%">
                    </div>
                    <div class="slides vertical">
                        <img id="daffodilsi" src="images/photography/daffodils.png" alt="daffodils" style="width:100%">
                    </div>
                    <div class="slides vertical">
                        <img id="whiteDaffodili" src="images/photography/whiteDaffodil.png" alt="whiteDaffodil"   style="width:100%">
                    </div>
                    <div class="slides vertical">
                        <img id="waterdropletsi" src="images/photography/waterdroplets.png" alt="waterdroplets" style="width:100%">
                    </div>
                    <div class="slides vertical">
                        <img id="crossi" src="images/photography/cross.png" alt="cross" style="width:100%">
                    </div>
                    <div class="slides vertical">
                        <img id="greenGalaxyi" src="images/photography/greenGalaxy.png" alt="greenGalaxy" style="width:100%">
                    </div>
                    <div class="slides vertical">
                        <img id="purpleGalaxyi" src="images/photography/purpleGalaxy.png" alt="purpleGalaxy" style="width:100%">
                    </div>
                    <div class="slides vertical">
                        <img id="galaxyi" src="images/photography/galaxy.png" alt="galaxy" style="width:100%">
                    </div>
                    <div class="slides horizontal">
                        <img id="suni" src="images/photography/sun.jpeg" alt="sun.jpeg" style="width:100%">
                    </div>
                    <div class="slides horizontal">
                        <img id="leavesi" src="images/photography/leaves.png" alt="leaves" style="width:100%">
                    </div>
                    <div class="slides horizontal">
                        <img id="cloudsGradi" src="images/photography/cloudsGrad.png" alt="cloudsGrad"  style="width:100%">
                    </div>

                    <a class="leftArrow" onclick="leftSlide()">＜</a>
                    <a class="rightArrow" onclick="rightSlide()">＞</a>
                </div>
            </div>

            <div id="morePhotography">
                <button type="button" onclick="loadPhotography()">Click for More Photography!</button>
            </div>
        </section>
    </main>
<script src="slideshow.js"></script>
<script src="ajax.js"></script>
<script src="photographyFilterArray.js"></script>
<?php
include 'footer.php'
?>