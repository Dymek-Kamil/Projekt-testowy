<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="elo.css">
</head>
<body>
    <div class="con">
    <div class="item a">
        <h1>Kamil Dymek nr 5</h1>
        <h2>Zadanie 1 SELECT * FROM pracownicy</h2>   <div class="">     
    <?php
        $conn= new mysqli("localhost","root","","nauka1");
        $sql= ('SELECT * FROM pracownicy');
        $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
    ?>
   </div>
    </div>
    <div class="item b">  
    <h2>Zadanie 2 'SELECT avg(zarobki) as zarobcie , nazwa_dzial FROM pracownicy, organizacja where id_org=dzial group by dzial'</h2>
    <div class="">
    <?php
        $conn= new mysqli("localhost","root","","nauka1");
        $sql= ('SELECT avg(zarobki) as zarobcie , nazwa_dzial FROM pracownicy, organizacja where id_org=dzial group by dzial');
        $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>avg zarobki</th>");
        echo("<th>dzial</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["zarobcie"]."</td><td>".$row["nazwa_dzial"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
    ?> 
    </div>   
    </div>
    <div class="item c">    
    <?php
        $conn= new mysqli("localhost","root","","nauka1");
        $result=$conn->query('SELECT * FROM pracownicy');
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
    ?></div>
    <div class="item d">    
    <?php
        $conn= new mysqli("localhost","root","","nauka1");
        $result=$conn->query('SELECT * FROM pracownicy');
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
    ?>  
    </div>
    </div>
    
</body>
</html>