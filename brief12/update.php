<?php 
include("header.php");
?>
<?php 
include("connect.php");

            $matricule = $_GET['matricule'];
            $a = "SELECT * FROM employe WHERE Matricule='$matricule'";
            $data = mysqli_query($conn, $a);

            $row = mysqli_fetch_assoc($data);

            if(isset($_POST['submit'])){
               
              $nom = $_POST['nom'];
              $prenom = $_POST['prenom'];
              $date = $_POST['datenaissance'];
              $département = $_POST['departement'];
              $salaire = $_POST['salaire'];
              $fonction = $_POST['fonction'];

              $query = "UPDATE employe SET Nom='$nom',Prenom='$prenom',
              DateNaissance='$date',Departement='$département',Salaire='$salaire',Fonction='$fonction'
              WHERE Matricule='$matricule'";
            
            $result = mysqli_query($conn, $query);
            if($result){
                header('location:index.php');
            }
            }
          ?>
          <form method="POST">
       

                    <div class="mb-3">
                        <label for="Nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" value=<?php 
                        echo $row['Nom'];?>>
                    </div>

                    <div class="mb-3">
                        <label for="Prenom" class="form-label">Prenom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom"
                        value=<?php echo $row['Prenom'];?>
                        >
                    </div>

                    <div class="mb-3">
                        <label for="DateNaissance" class="form-label">Date Naissance</label>
                        <input type="date" class="form-control" id="datenaissance" name="date" 
                        value=<?php 
                        echo $row['DateNaissance'];?>
                        >
                    </div>

                    <div class="mb-3">
                        <label for="Departement" class="form-label">Departement</label>
                        <input type="text" class="form-control" id="departement" name="departement"
                        value=<?php 
                        echo $row['Departement'];?>
                        >
                    </div>

                    <div class="mb-3">
                        <label for="Salaire" class="form-label">Salaire</label>
                        <input type="number" class="form-control" id="salaire" name="salaire"
                        value=<?php 
                        echo $row['Salaire'];?>>
                    </div>

                    <div class="mb-3">
                        <label for="Fonction" class="form-label">Fonction</label>
                        <input type="text" class="form-control" id="fonction" name="fonction"
                        value=<?php 
                        echo $row['Fonction'];?>>
                    </div>


                            <div class="mb-3">
                                <label for="Photo" class="form-label">Photo</label>
                                <input type="file" class="form-control" id="photo" name="photo">
                            </div>
            

                    <button type="submit" name="submit" class="btn btn-primary" style="margin=10px">Submit</button>
    </form>
