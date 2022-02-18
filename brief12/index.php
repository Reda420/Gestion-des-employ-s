<?php 
include("header.php");
?>

<div class="container mt-4">
    
<table class="table table-striped">
        <tr>
            <th>Matricule</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Date Naissance</th>
            <th>Departement</th>
            <th>Salaire</th>
            <th>Fonction</th>
            <th>Photo</th>
            <th>Edit</th>
        </tr>
          <?php 
          $SQL = "SELECT * FROM employe";
            $result = mysqli_query($conn, $SQL);
            
              while($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                <td>".$row["Matricule"]."</td>
                <td>".$row["Nom"]."</td>
                <td>".$row["Prenom"]."</td>
                <td>".$row["DateNaissance"]."</td>
                <td>".$row["Departement"]."</td>
                <td>".$row["Salaire"]."</td>
                <td>".$row["Fonction"]."</td>
                <td>".$row["Photo"]."</td>
                <td>
                    <a href='update.php?matricule=".$row['Matricule']."'><img src='Windows_Settings_app_icon.png' width=20px></a>
                    <a href='delete.php?matricule=".$row['Matricule']."'><img src='trash.png' width=20px></a>
                </td>

                </tr>";
                  
              }
            
          ?>
    </table>
</div>
</body>
</html>
