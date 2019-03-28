<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    </head>
    <body>

        <div class="container">

            <div class="top">

                <table>

                    

                    <td>Wypożyczający</td><td>Tytuł</td>

                    <?php

                        $conn = new mysqli('172.16.131.125','z_qwe','cvb','z_qwe');
                        $sql = "SELECT * FROM bibl_wyp,bibl_book,bibl_tytul,bibl_user WHERE idBook=idTytul AND idBook=id_book AND idUser=id_user";

                        $result = mysqli_query($conn,$sql);

                        while($row = mysqli_fetch_assoc($result)){
                            echo('<tr>');
                            echo('<td>' .$row['login']. '</td><td>' .$row['tytul']. '</td><td>
                                <form action="delete.php" method="POST">
                                <input type="hidden" name="id_wyp" value='.$row["id_wyp"].'>
                                <input type="submit" value="Usuń">
                                </form>
                            ');
                            echo('</tr>');
                        }
                    ?>

                </table>

            </div>
            <div class="left">

                <form action="insert.php" method="POST">

                    <input type="text" name="autor" placeholder="Podaj autora"> <br />
                    <input type="submit" value="Dodaj">

                </form>

            </div>
            <div class="right">

                <table>

                    <td>ID</td><td>Autor</td>

                    <?php

                        $conn = new mysqli('172.16.131.125','z_qwe','cvb','z_qwe');
                        $sql = "SELECT * FROM bibl_autor";

                        $result = mysqli_query($conn,$sql);

                        while($row = mysqli_fetch_assoc($result)){
                            echo('<tr>');
                            echo('<td>' .$row['idAutor']. '</td><td>' .$row['autor']. '</td>');
                            echo('</tr>');
                        }

                    ?>

                </table>

            </div>

        </div>
        
    </body>
</html>