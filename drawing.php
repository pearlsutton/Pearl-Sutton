<?php
include 'top.php';
?>

    <main class="box-1">
        <h1>Drawing</h1>
            <section class="box-2">
            <h2>Traditional</h2>
            <p>Drawing is one of the first mediums I learned. In this study I used graphite, charcoal, colored pencils, pen, 
                and crayons to render differnt subjects and topics. These pieces were created in the spring of 2022 at the 
                Community College of Vermont.
            </p>

            <figure class="go-right">
                <img id="teapot" src="images/drawings/teapot.png" alt="teapot">
                <img id="rubix" src="images/drawings/rubix.png" alt="rubix">
                <img id="colored" src="images/drawings/colored.jpg" alt="colored">
                <img id="hourglass" src="images/drawings/hourglass.png" alt="hourglass">
                <img id="horse" src="images/drawings/horse.jpeg" alt="horse">
                <img id="abstract" src="images/drawings/abstract.jpg" alt="abstract">
                <img id="skeleton" src="images/drawings/skeleton.png" alt="skeleton">
            </figure>

        </section>

        <section class="box-2">
            <h2>Digital</h2>
            <p>Digital Art is a growing field in the artworld and is a creative and unique way to combine one's unique 
                vision with the technology at our fingertips. The programs I utilzied for the following digital pieces include
                Adobe Illutrator, Adobe Photoshop, and Adobe Design. These works were created in the fall of 2020 at the Community
                College of Vermont.
            </p>


            <!--<img id="jess" src="images/digital/jess.png" alt="jess" onclick="openImage()" style="width:100%"> -->
         
            <!-- <script src="oranges.js"></script> -->

            <div class="slideshow">
                <div class="slide">
                    <img id="pumpkins" src="images/paintings/pumpkins.png" alt="pumpkins" style="width: 100%">
                </div>
                <div class="slide">
                    <img id="starryblue" src="images/paintings/starryblue.jpeg" alt="starryblue" style="width: 100%">
                </div>
                <div class="slide">
                    <img id="starryred" src="images/paintings/starryred.jpeg" alt="starryred" style="width: 100%">
                </div>
            </div>

            <!--Clicking through slides-->
            <!--<script> 
                function oranges(){
                    alert("Press ok to continue.");
                }
            </script>-->
             <script src="oranges.js"></script> 


            <a class="leftArrow" onclick="oranges()">prev</a>
            <a class="rightArrow" onclick="oranges()">next</a>






        
        
        

<!-- 
            <div id="grid-container" class="row">
                <div class="column">
                    <img id="jess" src="images/digital/jess.png" alt="jess" onclick="openSlides();currentSlide(1)">
                </div>

                <div class="column">
                    <img id="card1" src="images/digital/card1.png" alt="card1" onclick="openSlides();currentSlide(1)">
                </div>

                <div class="column">
                    <img id="card2" src="images/digital/card2.png" alt="card2" onclick="openSlides();currentSlide(1)">
                </div>

                <div class="column">
                    <img id="flyer" src="images/digital/flyer.jpg" alt="flyer" onclick="openSlides();currentSlide(1)">
                </div>
            </div>
-->

            <!--<img id="jess" src="images/digital/jess.png" alt="jess" onclick="openImage()" style="width:100%"> -->
         
            <!--Slideshow
            <div id="slideshow">
                <div class="slide">
                    <img id="pumpkins" src="images/paintings/pumpkins.png" alt="pumpkins" style="width: 100%">
                </div>
                <div class="slide">
                    <img id="starryblue" src="images/paintings/starryblue.jpeg" alt="starryblue" style="width: 100%">
                </div>
                <div class="slide">
                    <img id="starryred" src="images/paintings/starryred.jpeg" alt="starryred" style="width: 100%">
                </div>
            </div>
            -->


            <!--Clicking through slides
            <figure class="go-right">
                <img id="jess" src="images/digital/jess.png" alt="jess" style="width: 100%">
                <img id="card1" src="images/digital/card1.png" alt="card1" style="width: 100%">
                <img id="card2" src="images/digital/card2.png" alt="card2" style="width: 100%">
                <img id="flyer" src="images/digital/flyer.jpg" alt="flyer" style="width: 100%">
            </figure>
            -->








        </section>

    </main>
<?php
include 'footer.php'
?>