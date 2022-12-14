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
            <div id="del">
                <form action="delete.php" method="get">
                    <select name="delete">
                        <option value="default"></option>
                        <?php include "php/db_selectFill.php"; ?>
                    </select>

                    <button type="submit">Delete</button>
                </form>
                <?php include "php/footer.php"; ?>
            </div>
        </section>
    </body>
</html>