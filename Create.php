<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$Identifiant = $mdp = $mdp_conf = "";
$Identifiant_err = $mdp_err = $mdp_conf_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_Identifiant = trim($_POST["Identifiant"]);
    if(empty($input_Identifiant)){
        $Identifiant_err = "Veuillez renseigner votre identifiant";
    } elseif(!filter_var($input_Identifiant, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $Identifiant_err = "Veuillez entrer un identifiant ne comprenant que des lettres";
    } else{
        $Identifiant = $Input_identifiant;
    }
    
    // Validate address
    $input_mdp = trim($_POST["Mot de passe"]);
    if(empty($input_mdp)){
        $mdp_err = "Entrez votre mot de passe";     
    } else{
        $mdp = $input_mdp;
    }
    
    // Validate salary
    $input_mdp_conf = trim($_POST["Confirmez votre mot de passe"]);
    if(empty($input_mdp_conf)){
        $mdp_conf_err = "Confirmez votre mot de passe";     
    } elseif($input_mdp_conf != $mdp){
        $mdp_conf_err = "Les mot de passes ne sont pas identiques";
    } else{
        $mdp_conf = $input_mdp_conf;
    }
    
    // Check input errors before inserting in database
    if(empty($Identifiant_err) && empty($mdp_err) && empty($salary_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO employees (Identifiant, Mot de Passe) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_Identifiant, $param_mdp, $param_mdp_conf);
            
            // Set parameters
            $param_Identifiant = $Identifiant;
            $param_mdp = $mdp;
            $param_mdp_conf = $mdp_conf;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>S'inscrire</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">S'inscrire</h2>
                    <p>Veuillez remplir ce formulaire pour vous inscrire</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Identifiant</label>
                            <input type="text" name="Identifiant" class="form-control <?php echo (!empty($Identifiant_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $Identifiant; ?>">
                            <span class="invalid-feedback"><?php echo $Identifiant_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Mot de passe</label>
                            <textarea name="Mor de Passe" class="form-control <?php echo (!empty($mdp_err)) ? 'is-invalid' : ''; ?>"><?php echo $mdp; ?></textarea>
                            <span class="invalid-feedback"><?php echo $mdp_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Confirmez votre mot de passe</label>
                            <input type="text" name="Mot de Passe confirmation" class="form-control <?php echo (!empty($mdp_conf_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $mdp_conf; ?>">
                            <span class="invalid-feedback"><?php echo $mdp_conf_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>