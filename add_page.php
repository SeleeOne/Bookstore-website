<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "php/head.php"; ?>
    </head>
    <body>
        <?php include "php/header.php"; ?>
        <section>
            <form action="add.php" method="get">
                <table>
                    <tr>
                        <td><label>Title:</label></td>
                        <td><input name="title" placeholder="Type title here..." /></td>
                    </tr>
                    <tr>
                        <td><label>Author:</label></td>
                        <td><input name="author" placeholder="Type author here..." /></td>
                    </tr>
                    <tr>
                        <td><label>Publication year:</label></td>
                        <td><input name="year" placeholder="Type publication year here..." /></td>
                    </tr>
                    <tr>
                        <td><label>Price:</label></td>
                        <td><input name="price" placeholder="Type price here..." /></td>
                    </tr>
                </table>
                <div id="buttons">
                    <button type="submit">Add book</button>
                    <button type="reset">Clear</button>
                </div>
            </form>
        </section>
        <?php include "php/footer.php"; ?>
    </body>
</html>