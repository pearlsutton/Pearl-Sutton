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
        )
        </pre>

        <h2>Insert Data 1</h2>
        <pre>
        INSERT INTO tblMediumsUsed (fldDigitalArt, fldDrawing, fldPainting, fldPhotography) VALUES
        ('Adobe Illustrator', 'Graphite', 'Acrylic', 'Nikon D5500'),
        ('Adobe Photoshop', 'Charcoal', 'Oil Paint', 'Canon Vixia'),
        ('Adobe Design', 'Crayon', 'Watercolor', 'iPhone')
        
        </pre>

        <h2>Select records 1</h2>
        <pre>
        SELECT fldDigitalArt, fldDrawing, fldPainting, fldPhotography,
        FROM tblMediumsUsed
        </pre>

    <!-- second table -->

        <h2>Create table 2</h2>
        <pre>
        CREATE TABLE tblContact (
            pmkContactInfo int(15) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            fldFirstName varchar(30),
            fldLastName varchar(30),
            fldEmail varchar(50) DEFAULT NULL,
            fldSubject varchar(30),
            fldComments TEXT,
            fldVisit varchar(15), 
        )
        </pre>

        <h2>Insert Data 2</h2>
        <pre>
        INSERT INTO tblContact (pmkContactInfo, fldFirstName, fldLastName,
        fldEmail, fldSubject, fldComments, fldVisit)
        VALUES
        ('Pearl', 'Sutton', 'psutton1@uvm.edu', 'Commission', 'great', 'Yes')
        </pre>

        <h2>Select records 2</h2>
        <pre>
        SELECT fldFirstName, fldLastName, fldEmail, fldSubject, fldComments,
        fldVisit FROM tblContact
        </pre>
</main>
<?php
include 'footer.php'
?> 
