<?php 
include("header.php");
?>
<?php
include("connect.php");


        if(isset($_POST['submit'])){

                $matricule = $_POST["matricule"];
                $nom = $_POST["nom"];
                $prenom = $_POST["prenom"];
                $datedenaissance = $_POST["date"];
                $departement = $_POST["departement"];
                $salaire = $_POST["salaire"];
                $fonction = $_POST["fonction"];
                $photo = $_POST["photo"];
                $sql = "INSERT INTO employe VALUES ('$matricule','$nom','$prenom','$datedenaissance','$departement','$salaire','$fonction','$photo')";

                $insert = mysqli_query($conn,$sql); 
                if($insert){
                    header('location:index.php');
                }
               
            }
            ?>
            

<div class="container mt-5">
<form  method="POST">
        <div class="mb-1">
            <label for="Matricule" class="form-label">Matricule</label>
            <input type="text" class="form-control" id="matricule" name="matricule">
        </div>

        <div class="mb-3">
            <label for="Nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" >
        </div>

        <div class="mb-3">
            <label for="Prenom" class="form-label">Prenom</label>
            <input type="text" class="form-control" id="prenom" name="prenom">
        </div>

        <div class="mb-3">
            <label for="DateNaissance" class="form-label">Date Naissance</label>
            <input type="date" class="form-control" id="datenaissance" name="date">
        </div>

        <div class="mb-3">
            <label for="Departement" class="form-label">Departement</label>
            <input type="text" class="form-control" id="departement" name="departement">
        </div>

        <div class="mb-3">
            <label for="Salaire" class="form-label">Salaire</label>
            <input type="number" class="form-control" id="salaire" name="salaire">
        </div>

        <div class="mb-3">
            <label for="Fonction" class="form-label">Fonction</label>
            <input type="text" class="form-control" id="fonction" name="fonction">
        </div>


                <div class="mb-3">
                    <label for="Photo" class="form-label">Photo</label>
                    <input type="file" class="form-control" id="photo" name="photo">
                </div>


        <button type="submit" name="submit" class="btn btn-primary" style="margin=10px">Submit</button>
</form>

</div>
 
