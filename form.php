<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
    }
    
    #ul-id {
        display: flex;
        justify-content: flex-start;
        background-color: rgb(107, 20, 220);
        list-style: none;
        position: fixed;
        width: 100%;
    }
    
    li {
        font-size: 1.2em;
        padding: 1em;
        color: rgb(246, 250, 242);
        cursor: pointer;
    }
    
    #content {
        display: flex;
        justify-content: center;
    }
    
    #content h1 {
        margin-top: 2.5em;
        font-family: sans-serif;
    }
    
    li:hover {
        background-color: rgb(212, 42, 19);
        color: black;
    }
    
    a {
        color: ghostwhite;
        text-decoration: none;
    }
    
    #form-control {
        position: absolute;
        left: 40%;
        top: 20%;
        line-height: 2.4em;
        outline: none;
        font-size: 1.5em;
    }
    
    .form {
        font-family: sans-serif;
        font-size: 1em;
        height: 1em;
    }
    
    #submit {
        font-size: 1em;
        background-color: white;
        font-family: sans-serif;
        outline: none;
    }
    
    #footer {
        background-color: rgb(17, 231, 142);
        width: 100%;
        height: 10em;
        margin-top: 25em;
    }
    
    #footer h2 {
        text-align: center;
    }
    
    p {
        margin-top: 2.5em;
        margin-left: 3em;
    }
    
    h3 a {
        display: block;
        font-size: 1.5em;
        text-align: center;
    }
    
    @media screen and (max-width: 800px) {
        #form-control {
            position: absolute;
            /* z-index: -1; */
            left: 15%;
            top: 23%;
            line-height: 2.2em;
            font-size: 1.5em;
        }
        #submit {
            font-size: 1em;
            margin-top: 2em;
            background-color: white;
            font-family: sans-serif;
            outline: none;
        }
    }
    
    @media screen and (max-width: 500px) {
        #form-control {
            position: absolute;
            z-index: 1;
            left: 15%;
            top: 23%;
            line-height: 2.2em;
            font-size: 1.5em;
        }
        #submit {
            margin-top: 0.5em;
        }
        #footer {
            margin-top: 27em;
        }
    }
    
    @media screen and (max-width: 427px) {
        #form-control {
            position: absolute;
            /* z-index: -1; */
            left: 15%;
            top: 23%;
            line-height: 2.2em;
            font-size: 1.5em;
        }
        #footer {
            margin-top: 35em;
        }
    }
    
    @media screen and (max-width: 381px) {
        #content h1 {
            margin-top: 4em;
            width: 1005;
            font-size: 1.5em;
        }
        #form-control {
            position: absolute;
            left: 8%;
        }
        #footer {
            margin-top: 35em;
        }
    }
</style>

<body>

    <div id="index">
        <ul id="ul-id">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="form.php">Login Form</a></li>
        </ul>
    </div>
    <div id="content">
        <h1>PLEASE FILL THE FORM </h1>
    </div>
    <form action="form.php" method="POST" id="form-control">
        <label>NAME:<input class="form" type="text" name="name"  placeholder="ENTER YOUR NAME"></label><br>
        <label>AGE:<input class="form" type="text" name="age" id="age" placeholder="ENTER YOU AGE"></label><br>
        <label>ADHAR NO:<input class="form" type="text" name="adhar" placeholder="ENTER YOUR ADHAR NUMBER"></label><br>
        <label>BLOOD GROUP:<input class="form" type="text" name="blood" id="blood-group" placeholder="BLOD GROUP"></label><br>
        <label>MALE<input  type="checkbox" name="gender" id="male"></label>
        <label>FEMALE<input  type="checkbox" name="gender" id="female" ></label><br>
        <input type="submit" id="submit" value="SUBMIT">
    </form>
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
if(isset($_POST['name']))
{
    $server='localhost';
    $username="root";
    $password="";
    $con=mysqli_connect($server,$username,$password);

    if(!$con)
    {
        die('connection to databas eto failed due to '.mysqli_connect_error());
    }
    // echo 'suuceesfully connect to db';
   
     $name=$_POST['name'];
    $age=$_POST['age'];
    $adhar=$_POST['adhar'];
    $blood=$_POST['blood'];
    $gender=$_POST['gender']; 

    $sql="INSERT INTO `student`.`student` (`name`, `age`, `adhar`, `blood`, `gender`, `date`) VALUES ('$name','$age', '$adhar', '$blood', '$gender',current_timestamp())";

echo $sql;

if($con->query($sql)==true)
{
    // echo "suceesfully inserted";
}
else{
     echo 'ERROR:$sql <br> $con->error';
    // echo "erroe inn docu";
}
}
    ?>
</body>
</html>