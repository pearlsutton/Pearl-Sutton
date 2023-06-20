<?php
include 'top.php';
?>

    <main class="box-1">
        <h1>Drawing</h1>

        <section class="box-2">
            <h2>Digital</h2>
            <p>Digital Art is a growing field in the artworld and is a creative and unique way to combine one's unique 
                vision with the technology at our fingertips. The programs I utilzied for the following digital pieces include
                Adobe Illutrator, Adobe Photoshop, and Adobe Design. These works were created in the fall of 2020 at the Community
                College of Vermont.
            </p>

            <h2>Projects</h2>
            <!--Grid Images-->
                <figure class="go-right">
                    <img class="cafe1" id="card1" src="images/digital/card1.png" alt="card1" style="width:100%" >
                    <img class="cafe2" id="card2" src="images/digital/card2.png" alt="card2" style="width:100%" >
                    <img class="flyer1" id="flyer" src="images/digital/flyer.jpg" alt="flyer" style="width:100%">
                    <img class="jess1" id="jess" src="images/digital/jess.png" alt="jess" style="width:100%" onclick="currentSlide(4)">
                </figure>

            <!--Modal Images -->
            <div id="slideshow" class="slideshow">
                <div class="images">
                    <span class="close">&times;</span>
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

            <script>
                // Get the modal
                let slideshow = document.getElementById("slideshow");
                // Images are clickable
                let myImg = document.getElementById("card1");
                // <span> element
                let span = document.getElementsByClassName("close")[0];

                // Click on images to expand modal
                myImg.onclick = function() {
                    slideshow.style.display = "block";
                }

                let myImg2 = document.getElementById("card2");
                myImg2.onclick = function() {
                    slideshow.style.display = "block";
                }

                let myImg3 = document.getElementById("flyer");
                myImg3.onclick = function() {
                    slideshow.style.display = "block";
                }

                let myImg4 = document.getElementById("jess");
                myImg4.onclick = function() {
                    slideshow.style.display = "block";
                }

                // <span> closes modal
                span.onclick = function() {
                slideshow.style.display = "none";
                }

                // Outside clicks closes modal
                window.onclick = function(e) {
                if (e.target == slideshow) {
                    slideshow.style.display = "none";
                }
                }
            
                let slideNumber = 1;
                displaySlide(slideNumber);

                function leftSlide(){
                displaySlide(slideNumber -= 1);
                }

                function rightSlide(){
                displaySlide(slideNumber += 1);
                }

                function currentSlide(n) {
                    showSlides(slideIndex = n);
                }

                function displaySlide(n) {
                let index;
                let slides = document.getElementsByClassName("slides");

                if (n > slides.length) 
                {
                    slideNumber = 1;
                }    

                if (n < 1) 
                {
                    slideNumber = slides.length;
                }

                for (index = 0; index < slides.length; index++) {
                    slides[index].style.display = "none";  
                }
                slides[slideNumber-1].style.display = "block";  
                }
            </script>

        </section>

    </main>
<?php
include 'footer.php'
?>