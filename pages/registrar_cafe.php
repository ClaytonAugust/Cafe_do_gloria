<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Superhero Register</title>
    </head>
    <body>
        <h1>Superheroes</h1>
        <a href="#">Adicionar Superhero</a>
        <table border="1">
            <tbody>
            <thead>
                <th>ID</th>
                <th>Nome do usuário</th>
                <th>Nome do Café</th>
                <th>Descrisão do café</th>
                <th>Action</th>
            </thead>
            <?php
                $conn = new mysqli ("localhost","root","","db_aula2"); // A porta, nome do usuário padrão, password, nome do banco 
                if ($conn->connect_error){
                    die("Falha ao conectar o banco". $conn->connect_error);
                }
                $sql = 'SELECT*FROM cafe_registrados';// adicionar_superhero é o nome da tabela dentro do banco

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()){
                        echo"<tr>";
                        echo "<td>".$row["id"]."</td>";
                        echo "<td>".$row["NameDoUsuario"]."</td>";
                        echo "<td>".$row["nomeDoCafe"]."</td>";
                        echo "<td>".$row["descrisaoDoCafe"]."</td>";
                        echo "<td><a href='readByid.php?id='".$row[id].">Info</a>
                                <td><a href='update.php?id='".$row[id].">Edit</a>
                                <td><a href='update.php?id='".$row[id]."'onclick='return confirm'(\"Tem
                                certeza que deseja excluir o registro?\")>delete</a></td>";
                        echo"</tr>";
                    }

                }else{
                    echo "<tr><td colpan='7'>Nenhum Registro encontrado</td></tr>";

                }
                $conn->close();
            ?>
            </tboby>
        </table>
        
    </body>
</html>