<?php
include 'top.php';
?>
    <main>
        <h1>SQL</h1>
        <h2>Create table 1</h2>

        <pre>
        CREATE TABLE tblMediumsUsed(
            pmkMediumsUsedId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            fldDigitalArt varchar(30),
            fldDrawing varchar(30),
            fldPainting varchar(30),
            fldPhotography varchar(30),
            fldComputerProgramming varchar(30)
        )
        </pre>

        <h2>Insert Data 1</h2>
        <pre>
        INSERT INTO tblMediumsUsed (fldDigitalArt, fldDrawing, fldPainting, fldPhotography, fldComputerProgramming) VALUES
        ('Adobe Illustrator', 'Graphite', 'Acrylic', 'Nikon D5500', 'HTML'),
        ('Adobe Photoshop', 'Charcoal', 'Oil Paint', 'Canon Vixia', 'CSS'),
        ('Adobe Design', 'Crayon', 'Watercolor', 'iPhone', 'Python')
        
        </pre>

        <h2>Select records 1</h2>
        <pre>
        SELECT fldDigitalArt, fldDrawing, fldPainting, fldPhotography,
        fldComputerProgramming FROM tblMediumsUsed
        </pre>

    <!-- second table -->

        <h2>Create table 2</h2>
        <pre>
        CREATE TABLE tblFeedback (
            pmkFeedbackId int(15) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            fldFirstName varchar(30),
            fldLastName varchar(30),
            fldEmail varchar(50) DEFAULT NULL,
            fldVisit varchar(15),
            fldFilm tinyint(1),
            fldClothing tinyint(1),
            fldAnimation tinyint(1),
            fldFavoriteMedium VARCHAR(40),
            fldComments TEXT
        )
        </pre>

        <h2>Insert Data 2</h2>
        <pre>
        INSERT INTO tblFeedback (pmkFeedbackId, fldFirstName, fldLastName,
        fldEmail, fldVisit, fldFilm, fldClothing, fldAnimation, fldFavoriteMedium,
        fldComments)
        VALUES
        ('Pearl', 'Sutton', 'psutton1@uvm.edu', 'Yes', 0, 1, 1, 'Painting' 'great')
        </pre>

        <h2>Select records 2</h2>
        <pre>
        SELECT fldFirstName, fldLastName, fldEmail, fldVisit, fldFilm, fldClothing, fldAnimation, fldFavoriteMedium, 
        fldFavoriteMedium FROM tblFeedback
        </pre>
</main>
<?php
include 'footer.php'
?> 
