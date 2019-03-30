<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    </head>
    <body>

        <div class="container">

            <div class="top">

                <table>
                    <td>ID</td><td>Książka</td><td>Wypożyczający</td><td>Data wypożyczenia</td><td>Data oddania</td>

                

                    <?php

                        $conn = new mysqli('127.0.0.1','root','','biblioteka');
                        $sql = "SELECT * FROM bibl_wyp,bibl_user,bibl_tytul WHERE bibl_wyp.id_book=bibl_tytul.id_tytul AND bibl_wyp.id_user=bibl_user.id_user";

                        $result = mysqli_query($conn,$sql);

                        while($row = mysqli_fetch_assoc($result)){
                            echo('<tr>');
                            echo('<td>' .$row['id_wyp']. '</td><td>' .$row['tytul']. '</td><td>' .$row['login']. '</td><td>' .$row['date_wyp']. '</td><td>' .$row['date_odd']. '</td><td>
                            
                                <form action="delete.php" method="POST">
                                    <input type="hidden" name="id_wyp" value='.$row["id_wyp"].'>
                                    <input type="submit" value="Usuń">
                                </form>

                            </td>');
                            echo('</tr>');
                        }

                    ?>
                </table>

            </div>
            <div class="left">

                <form action="insert.php" method="POST">
                    <input type="text" name="autor" placeholder="Podaj autora"><br />
                    <input type="submit" value="Dodaj">
                </form>

            </div>
            <div class="right">

                <table>
                    <td>ID</td><td>Autor</td>

                    <?php

                        $conn = new mysqli('127.0.0.1','root','','biblioteka');
                        $sql = "SELECT * FROM bibl_autor";

                        $result = mysqli_query($conn,$sql);

                        while($row = mysqli_fetch_assoc($result)){
                            echo('<tr>');
                            echo('<td>' .$row['id_autor']. '</td><td>' .$row['autor']. '</td>');
                            echo('</tr>');
                        }

                    ?>

                </table>

            </div>

        </div>
        
    </body>
</html>