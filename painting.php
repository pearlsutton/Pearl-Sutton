<?php
include 'top.php';
?>

    <main class="box-1">
        <h1>Painting</h1>

        <section class="paintingBox">
            <h2>Painting</h2>
            <p>Painting is a very expressive medium that can be both abstract and technical. There are a variety of approaches, styles, techniques, and paints themselves that are available to painters. The works shown below were created between the fall of 2022 and the summer of 2023. 
            </p>
            <p>
            The ones created in 2022 were painted with acrylics using a limited color palette of the three primary colors: magenta, cyan, and yellow. The main focus of this approach was to study how color can be created using different saturation levels and values to form creative and expressive pieces. The focus was also directed towards understanding how these mixed colors may intertwine and interact with one another to create harmonious or striking relationships. 
            </p>
            <p> The watercolor pieces were completed in the summer of 2023. The watercolors were a surprising and challenging transition from acrylics. In this study, the curriculum followed more of learning the properties and characteristics of the watercolors, how they behaved and how we could use these to produce the ideas we wished. 
            </p>
            <h2>Projects</h2>
            <!--Grid Images-->
            <figure class="photographyGrid">
                <img class="grid" id="man" src="images/paintings/man.png" alt="man" style="width:100%" onclick="openImage();currentSlide(1)">
                <img class="grid" id="woman" src="images/paintings/woman.png" alt="woman" style="width:100%" onclick="openImage();currentSlide(2)">
                <img class="grid" id="greenVase" src="images/paintings/greenVase.png" alt="greenVase" style="width:100%" onclick="openImage();currentSlide(3)">
                <img class="grid" id="colorAbstract" src="images/paintings/colorAbstract.png" alt="colorAbstract" style="width:100%" onclick="openImage();currentSlide(4)">
                <img class="grid" id="flowersAbstract" src="images/paintings/flowersAbstract.jpeg" alt="flowersAbstract" style="width:100%" onclick="openImage();currentSlide(5)">
                <img class="grid" id="bluePitcher" src="images/paintings/bluePitcher.jpeg" alt="bluePitcher" style="width:100%" onclick="openImage();currentSlide(6)">
                <img class="grid" id="greenPitcher" src="images/paintings/greenPitcher.png" alt="greenPitcher" style="width:100%" onclick="openImage();currentSlide(7)">
                <img class="grid" id="openForm" src="images/paintings/openForm.jpeg" alt="openForm" style="width:100%" onclick="openImage();currentSlide(8)">
                <img class="grid" id="starryblue" src="images/paintings/starryblue.jpeg" alt="starryblue" style="width:100%" onclick="openImage();currentSlide(9)">
                <img class="grid" id="starryred" src="images/paintings/starryred.jpeg" alt="starryred" style="width:100%" onclick="openImage();currentSlide(10)">
                <img class="grid" id="eyes" src="images/paintings/eyes.png" alt="eyes" style="width:100%" onclick="openImage();currentSlide(11)">
                <img class="grid" id="pumpkins" src="images/paintings/pumpkins.png" alt="pumpkins" style="width:100%" onclick="openImage();currentSlide(12)">
                <img class="grid" id="alice" src="images/paintings/alice.jpeg" alt="alice" style="width:100%" onclick="openImage();currentSlide(13)">
                <img class="grid" id="pot" src="images/paintings/pot.png" alt="pot" style="width:100%" onclick="openImage();currentSlide(14)">
                <img class="grid" id="wave" src="images/paintings/wave.jpeg" alt="wave" style="width:100%" onclick="openImage();currentSlide(15)">
            </figure>

            <!--Modal Images -->
            <div id="slideshow" class="slideshow">
                <span class="close">&times;</span>
                <div class="images">
                    <div class="slides vertical">
                        <img id="man2" src="images/paintings/man.png" alt="man" style="width:100%">
                    </div>
                    <div class="slides vertical">
                        <img id="woman2" src="images/paintings/woman.png" alt="woman" style="width:100%">
                    </div>
                    <div class="slides vertical">
                        <img id="greenVase2" src="images/paintings/greenVase.png" alt="greenVase" style="width:100%">
                    </div>
                    <div class="slides vertical">
                        <img id="colorAbstract2" src="images/paintings/colorAbstract.png" alt="colorAbstract" style="width:100%">
                    </div>
                    <div class="slides vertical">
                        <img id="flowersAbstract2" src="images/paintings/flowersAbstract.jpeg" alt="flowersAbstract" style="width:100%">
                    </div>
                    <div class="slides vertical">
                        <img id="bluePitcher2" src="images/paintings/bluePitcher.jpeg" alt="bluePitcher" style="width:100%">
                    </div>
                    <div class="slides vertical">
                        <img id="greenPitcher2" src="images/paintings/greenPitcher.png" alt="greenPitcher" style="width:100%">
                    </div>
                    <div class="slides vertical">
                        <img id="openForm2" src="images/paintings/openForm.jpeg" alt="openForm" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="starryblue2" src="images/paintings/starryblue.jpeg" alt="starryblue" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="starryred2" src="images/paintings/starryred.jpeg" alt="starryred" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="eyes2" src="images/paintings/eyes.png" alt="eyes" style="width:100%">
                    </div>
                    <div class="slides">
                        <img id="pumpkins2" src="images/paintings/pumpkins.png" alt="pumpkins" style="width:100%">
                    </div>
                    <div class="slides vertical">
                        <img id="alice2" src="images/paintings/alice.jpeg" alt="alice" style="width:100%">
                    </div>
                    <div class="slides vertical">
                        <img id="pot2" src="images/paintings/pot.png" alt="pot" style="width:100%">
                    </div>
                    <div class="slides vertical">
                        <img id="wave2" src="images/paintings/wave.jpeg" alt="wave" style="width:100%">
                    </div>
                    <a class="leftArrow" onclick="leftSlide()">＜</a>
                    <a class="rightArrow" onclick="rightSlide()">＞</a>
                </div>
            </div>

            <div id="morePainting">
                <button type="button" onclick="loadPainting()">Click for More Painting!</button>
            </div>
        </section>
    </main>
    <script src="slideshow.js"></script>
    <script src="ajax.js"></script>
<?php
include 'footer.php'
?> 
