<?php
include 'top.php';
?>

    <main class="box-1">
        <h1>Drawing</h1>
        <script> 
                let slideNumber = 1;
                displaySlide(slideNumber);

                function leftSlide(){
                    displaySlide(slideNumber -= 1);
                }

                function rightSlide(){
                    displaySlide(slideNumber += 1);
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


            <section class="box-2">
            <h2>Traditional</h2>
            <p>Drawing is one of the first mediums I learned. In this study I used graphite, charcoal, colored pencils, pen, 
                and crayons to render differnt subjects and topics. These pieces were created in the spring of 2022 at the 
                Community College of Vermont.
            </p>

            <div class="slideshow">

                <div class="slides">
                    <img id="rubix" src="images/drawings/rubix.png" alt="rubix" style="width:500%;max-width:600px;max-height:600">
                </div>
                <div class="slides">
                    <img id="colored" src="images/drawings/colored.jpg" alt="colored" style="width:500%;max-width:600px;max-height:600">
                </div>
                <div class="slides">
                    <img id="hourglass" src="images/drawings/hourglass.png" alt="hourglass" style="width:500%;max-width:600px;max-height:600">
                </div>
                <div class="slides">
                    <img id="horse" src="images/drawings/horse.jpeg" alt="horse" style="width:500%;max-width:600px;max-height:600">
                </div>
                <div class="slides">
                    <img id="abstract" src="images/drawings/abstract.jpg" alt="abstract" style="width:500%;max-width:600px;max-height:600">
                </div>
                <div class="slides">
                    <img id="skeleton" src="images/drawings/skeleton.png" alt="skeleton" style="width:500%;max-width:600px;max-height:600">
                </div>
                <div class="slides">
                    <img id="teapot" src="images/drawings/teapot.jpg" alt="teapot" style="width:500%;max-width:600px;max-height:600">
                </div>
            </div>

            <a class="leftArrow" onclick="leftSlide()">prev</a>
            <a class="rightArrow" onclick="rightSlide()">next</a>

        </section>

    </main>
<?php
include 'footer.php'
?>