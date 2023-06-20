<nav>
    <a class="<?php if($pathParts['filename'] == 'index') {
        print 'activePage';
    }
    ?>" href="index.php">Home</a>

    <a class="<?php if($pathParts['filename'] == 'photography') {
        print 'activePage';
    }
    ?>" href="photography.php">Photography</a>

    <a class="<?php if($pathParts['filename'] == 'painting') {
        print 'activePage';
    }
    ?>" href="painting.php">Painting</a>

    <a class="<?php if($pathParts['filename'] == 'drawing') {
        print 'activePage';
    }
    ?>" href="drawing.php">Drawing</a>

    <a class="<?php if($pathParts['filename'] == 'about') {
            print 'activePage';
        }
    ?>" href="about.php">About</a>

    <a class="<?php if($pathParts['filename'] == 'contact') {
            print 'activePage';
        }
    ?>" href="contact.php">Contact</a>

</nav>