<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
    }
   
    #ul-id{
        display: flex;
        justify-content: flex-start;
        background-color: rgb(107, 20, 220);
        list-style: none;
        position:fixed;
        width: 100%;
    }
    .nav{
        font-size: 1.2em;
        padding: 1em;
        color: rgb(246, 250, 242);
        cursor: pointer;
    }
    #header{
        display: flex;
        justify-content: center;
    }
    #header h1{
        margin-top: 2em;
        font-family: sans-serif;
    }
    .nav:hover{
        background-color: rgb(212, 42, 19);
        color: black;
    }
    a{
      color: ghostwhite;
        text-decoration: none;
    }
    #notice{
      position: absolute;
      left: 1em;
  padding-left: 2em;
      width: 40%;
      height: 20em;
      font-size: 1.2em;
      font-family:serif ;
      line-height: 1.5em;
      overflow-y: scroll;
    }
    
.child-notice
{
    list-style: decimal;
}
    #contact{
        list-style: decimal;
     position: absolute;
     right:12%;

     padding: 1.5em;
     line-height: 2em;
     font-size: 1.3em;
    }
#contact #com-box{
    outline: none;
    display: block;
width: 20em;
height: 8em;
font-size: 1.2em;
color: rgb(252, 33, 25);
font-family: sans-serif;
}
#btn-comment{
    outline: none;
    color: ghostwhite;
    font-size: 1.3em;
    background-color: rgb(107, 20, 220);
font-family:'Segoe UI' Geneva, Verdana, sans-serif;
}
    #footer{
        background-color: rgb(17, 231, 142);
        width: 100%;
        height: 10em;
        margin-top: 25em;
    }
    #footer h2{
       
    text-align: center;
    }
    p{
        margin-top: 2.5em;
        margin-left: 3em;
    }
    h3 a{
        display: block;
        font-size: 1.5em;
        text-align: center;
    }

    /* MEDIA QUERY USED HERE  */

    @media screen and (min-width: 1500px ){
.child-notice
{
font-size: 1.3em;
line-height: 1.5em;
}
    }
    @media screen and (max-width: 1500px ){
.child-notice
{
font-size: 1.3em;
line-height: 1.5em;
}
    }
    @media screen and (max-width: 1250px ){
.child-notice
{
font-size: 1.3em;
line-height: 1.5em;
}
#contact{
    list-style: decimal;
     position: absolute;
     right:3%;
     padding: 1.5em;
     line-height: 2em;
     font-size: 1.2em;
    }

    }

    @media screen and (max-width: 1020px ){
        .child-notice
{
font-size: 1.2em;
line-height: 1.5em;
}
        #contact{
list-style: decimal;
position: absolute;
right:3%;
padding: 1.5em;
line-height: 2em;
font-size: 1.2em;
}
#contact #com-box{
    outline: none;
    display: block;
width: 15em;
height: 8em;
font-size: 1.2em;
color: rgb(252, 33, 25);
font-family: sans-serif;
}
#btn-comment{
    outline: none;
    color: ghostwhite;
    font-size: 1.2em;
    background-color: rgb(107, 20, 220);
font-family:'Segoe UI' Geneva, Verdana, sans-serif;
}
   
}
    @media screen and (max-width: 790px ){
.child-notice
{
font-size: 1.2em;
line-height: 1.5em;
}
        #contact{
position: absolute;
left: -1.5em;
top: 27em;
font-size: 1.2em;
}
#contact #com-box{
    outline: none;
    display: block;
width: 13em;
height: 5em;
font-size: 1.2em;

}

#footer{
        background-color: rgb(17, 231, 142);
        width: 100%;
        height: 10em;
        margin-top: 45em;
    }
    #header h1{
        margin-top: 3em;
        font-family: sans-serif;
    }
    #notice{
        margin-top: 1em;
width: 80%;
    }
}

    /* END */
</style>
<body>
    
<div id="index">
    <ul id="ul-id">
        <li class="nav"><a href="index.php">Home</a></li>
        <li class="nav"><a href="about.php">About</a></li>
        <li class="nav"><a href="contact.php">Contact Us</a></li>
        <li class="nav"><a href="form.php">Login Form</a></li>
    </ul>
</div>
<div id="header">
    <h1>CONTACT</h1>
</div>
    <ul id="notice">

        <h3>NOTICE:</h3>

        <li class="child-notice">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, minima? Corporis autem odio ratione quibusdam </li>

        <li class="child-notice">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, minima? Corporis autem odio ratione quibusdam </li>

        <li class="child-notice">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, minima? Corporis autem odio ratione quibusdam </li>

        <li class="child-notice">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, minima? Corporis autem odio ratione quibusdam </li>

        <li class="child-notice">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, minima? Corporis autem odio ratione quibusdam </li>

        <li class="child-notice">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, minima? Corporis autem odio ratione quibusdam </li> 

        <li class="child-notice">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, minima? Corporis autem odio ratione quibusdam </li>

        <li class="child-notice">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, minima? Corporis autem odio ratione quibusdam </li>

        <li class="child-notice">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, minima? Corporis autem odio ratione quibusdam </li>

        <li class="child-notice">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, minima? Corporis autem odio ratione quibusdam </li>
    </ul>

    <div id="contact">
        <li class="contact-item">

            MOBILE NO:</li>
            
            <li class="contact-item">GAMIL ACCOUNT:
               </li>
               <li class="contact-item"> LOCATION:</li>

<!-- <textarea name="comment" id="comment" cols="30" rows="10" placeholder="write somethig about yourself---"></textarea>
<input type="button" value="comment" name="coment" id="btn-comment"> -->
<form action="contact.php" method="POST">
    <textarea name="comment" id="com-box" cols="30" rows="10" placeholder="write somethig about yourself---"></textarea>

    <input type="submit" value="comment here" name="submit" id="btn-comment"></form>
    </div>
<div id="footer">
    <h2>Raju-Lodge</h2>
    <p>
        copyright @ 2020 powered by Raju-Lodge
        
    </p>
    <h3><a href="https://www.google.com/">Google search</a>
    </h3> 
</div>
<div id="powerd">
    <h2 style="text-align: center;">INITIATED BY RAJU LODGE</h2>
</div>
<!-- php code injected -->

<?php

    $server='localhost';
    $username="root";
    $password="";
    $con=mysqli_connect($server,$username,$password);

    if(!$con)
    {
        die('connection to databas eto failed due to '.mysqli_connect_error());
    }
    // echo 'suuceesfully connect to db';
   
     $comment=$_POST['comment'];

    $sql="INSERT INTO `student`.`student` (`comment`, `date`) VALUES ('$comment',current_timestamp())";

// echo $sql;
if($con->query($sql)==true)
{
    // echo "suceesfully inserted";
}
else{
    //  echo 'ERROR:$sql <br> $con->error';
    // echo "erroe inn docu";
}

    ?>
</body>
</html>