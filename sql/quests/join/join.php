<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../includes/head.html';
        ?>
        <link rel="stylesheet" href="./style.css">
        <title>SQL Join</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../includes/navbar.php';
        include '../../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>SQL Join - Quest</h1>
        <h2>Join</h2>
        <pre>
            <h3>Insert</h3>
            <?php
                include 'includes/insert.sql';
            ?>
            <h3>Join</h3>
            <?php
                include 'includes/join.sql';
            ?>
        </pre>
    </body>
</html>
