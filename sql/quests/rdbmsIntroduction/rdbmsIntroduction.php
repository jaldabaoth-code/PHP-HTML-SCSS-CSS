<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../includes/head.html';
        ?>
        <link rel="stylesheet" href="./style.css">
        <title>SQL Introduction RDBMS</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../includes/navbar.php';
        include '../../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>SQL Introduction RDBMS - Quest</h1>
        <h2>Introduction RDBMS</h2>
        <pre>
            <h3>Create table</h3>
            <?php
                include 'includes/createTable.sql';
            ?>
            <h3>Exercices 1-2-3</h3>
            <?php
                include 'includes/rdbmsIntroduction.sql';
            ?>
        </pre>
    </body>
</html>
