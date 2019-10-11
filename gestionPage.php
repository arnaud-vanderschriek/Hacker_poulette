<?php

$FirstName = "";
$LastName = "";
$Email = "";
$Subject = "";
$TextArea = "";

$errorFirstName="";
$errorLastName="";
$errorEmail="";
$errorSubject="";
$errorTextArea="";

$boolFirstName = false;
$boolLastName = false;
$boolMail = false;
$boolSubject = false;
$boolTextArea = false;



//Firstname --------------------------------------------------------------------------------------------------------------

if ($_SERVER["REQUEST_METHOD"] == "POST") {


if (isset($_POST["firstname"]) AND !empty($_POST["firstname"])) {
    
    $FirstName= htmlspecialchars($_POST["firstname"]);

    if(!preg_match("#[a-zA-Z]#",$FirstName)){ 
        
        $errorFirstName = 'le prenom n\'est pas valide !';
   } 
else {

    $errorFirstName = 'Il faut renseigner un prénom !';

}

//Lastname --------------------------------------------------------------------------------------------------------------------


if (isset($_POST["lastname"]) AND !empty($_POST["lastname"])) {
    
    $LastName = htmlspecialchars($_POST["lastname"]);

    if(preg_match("#[a-zA-Z-?]#",$LastName)){ 
        
        $errorLastName = 'le nom de famille n\'est pas valide!';

    } 
else {

    $errorLastName = 'Il faut renseigner un nom de famille!';
    
}
}

//mail ---------------------------------------------------------------------------------------------------------------------------


    if (isset($_POST['email']) AND !empty($_POST['email'])) {
        
        $Email = htmlspecialchars($_POST['email']); 

        if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$Email))
            {
            $errorEmail = 'L\'adresse ' . $Email . ' n\'est pas valide, recommencez !';
            
            }
    }
    else{
        
        $errorEmail = "Il faut renseigner une adresse mail!";
        
    }

}


// subject ---------------------------------------------------------------------------------------------------------------------------


if (isset($_POST['subject']) AND !empty($_POST['subject'])) {
    
    $Subject= htmlspecialchars($_POST['subject']);

    if(preg_match("#[a-zA-Z-?]#",$Subject)){ 

         $errorSubject = 'le sujet n\'est pas valide!';
    }
    

else {

    $errorSubject = 'Il faut renseigner un sujet!';

}
}

// Text_area ------------------------------------------------------------------------------------------------------------------------------------------------


    if (isset($_POST['text_area']) AND !empty($_POST['text_area'])) {
    
        $TextArea = htmlspecialchars($_POST['text_area']);
    
        if(preg_match("#[a-zA-Z-?]#",$TextArea)){ 
            
            $errorTextArea = 'le text n\'est pas valide!';
           
        }
        
    } 
    else {
    
        $errorTextArea = 'Vous n\'avez pas rempli le champs!';
        
    

}
}