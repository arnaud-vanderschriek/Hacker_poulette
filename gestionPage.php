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


    if (isset($_POST["firstname"]) AND empty($_POST["firstname"])){
        
        $errorFirstName = 'Il faut renseigner un prénom !';
    }
    else {
    
        $FirstName= htmlspecialchars($_POST["firstname"]);

        if(!preg_match("#[a-zA-Z]#",$FirstName)){ 
        
            $errorFirstName = 'le prenom n\'est pas valide !';
        }     
    }

//Lastname --------------------------------------------------------------------------------------------------------------------


    if (isset($_POST["lastname"]) AND empty($_POST["lastname"])) {
        $errorLastName = 'Il faut renseigner un nom de famille!';
    
    } 
    else {

        $LastName = htmlspecialchars($_POST["lastname"]);

        if(!preg_match("#[a-zA-Z-?]#",$LastName)){ 
        
            $errorLastName = 'le nom de famille n\'est pas valide!';
        }
    }

//mail ---------------------------------------------------------------------------------------------------------------------------


    if (isset($_POST['email']) AND empty($_POST['email'])) {
        
        $errorEmail = "Il faut renseigner une adresse mail!";
        
    }
    else{
        
        $Email = htmlspecialchars($_POST['email']); 

        if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$Email))
            {
            $errorEmail = 'L\'adresse ' . $Email . ' n\'est pas valide, recommencez !';
        
        }   

    }


// subject ---------------------------------------------------------------------------------------------------------------------------


if (isset($_POST['subject']) AND empty($_POST['subject'])) {
    
    $errorSubject = 'Il faut renseigner un sujet!';
    
}
else {

    $Subject= htmlspecialchars($_POST['subject']);

    if(!preg_match("#[a-zA-Z-?]#",$Subject)){ 

         $errorSubject = 'le sujet n\'est pas valide!';
    }

}


// Text_area ------------------------------------------------------------------------------------------------------------------------------------------------


    if (isset($_POST['text_area']) AND empty($_POST['text_area'])) {
        
        $errorTextArea = 'Vous n\'avez pas rempli le champs!';
        
        
    } 
    else {
    
       
        
        $TextArea = htmlspecialchars($_POST['text_area']);
    
        if(!preg_match("#[a-zA-Z-?]#",$TextArea)){ 
            
            $errorTextArea = 'le text n\'est pas valide!';
           
        }

}
}