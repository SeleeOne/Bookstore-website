<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "php/head.php"; ?>
        <?php include "php/database.php"; ?>
        <?php include "php/db_getAllBooks.php"; ?>
    </head>
    <body>
        <?php include "php/header.php"; ?>
        <section>
            <table class="main">
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Publication year</th>
                    <th>Price   </th>
                </tr>
                <?php include "php/db_printTable.php" ?>
            </table>
        </section>
        <?php include "php/footer.php"; ?>
    </body>
</html>