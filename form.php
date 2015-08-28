<html>
    
    <head>
        
        <title>GETTING STARTED WITH BRACKETS</title>
          <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
    <body>
 <?php
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $contactchoise = $_POST['contact'];
            $phoneormemail = $_POST['phoneormemail'];
            $city = $_POST['city'];
            $comments = $_POST['comments'];
$fullname=$firstname.''.$lastname;
echo" <p>information submitted for:$fullname </p>";
echo"<p>your $contactchoise is $phoneormemail<br/>";
echo"and you are intarested in like $city </p>";
echo"our representive will review your comments below:";
echo"<textarea cols='60' rows='5' disable='disabled'>";
echo "class='text-disabled'>".$comments."</textarea>";

     ?>
     </body>
     </html>
 
      
 