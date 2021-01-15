<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
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
        color: rgb(235, 240, 231);
        cursor: pointer;
    }
    
    li:hover {
        background-color: rgb(212, 42, 19);
        color: black;
    }
    
    a {
        color: ghostwhite;
        text-decoration: none;
    }
    
    #content {
        display: flex;
        justify-content: center;
    }
    
    #content h1 {
        margin-top: 2em;
    }
    
    #card {
        display: flex;
        justify-content: space-between;
        flex-direction: row;
        flex-wrap: wrap;
    }
    
    .image {
        margin-top: 1em;
        padding: 1em;
        width: 20%;
        height: em;
    }
    
    #powerd {
        display: flex;
        justify-content: center;
    }
    
    #footer {
        background-color: rgb(17, 231, 142);
        width: 100%;
        height: 10em;
        margin-top: 15em;
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
    /* MEDIA QUERY USED HERE  */
    
    @media screen and (max-width:1250px) {
        #card {
            display: flex;
            /* justify-content:space-between; */
            /* flex-direction: row; */
            /* flex-wrap: wrap; */
        }
        .image {
            position: relative;
            z-index: -1;
            margin-top: 1em;
            padding: 1em;
            width: 30%;
            height: em;
        }
        #footer {
            display: flex;
            justify-content: center;
        }
        #footer {
            position: absolute;
            top: 43em;
        }
        #powerd {
            display: flex;
            justify-content: center;
            /* position: absolute;
      top: 43em; */
        }
        #powerd h2 {
            position: absolute;
            top: 46em;
        }
    }
    
    @media screen and (max-width:950px) {
        #card {
            display: flex;
            /* justify-content:space-between; */
            /* flex-direction: row; */
            /* flex-wrap: wrap; */
        }
        .image {
            position: relative;
            z-index: -1;
            margin-top: 1em;
            padding: 1em;
            width: 45%;
            height: em;
        }
        #footer {
            position: absolute;
            top: 58em;
        }
        #powerd {
            display: flex;
            justify-content: center;
            /* position: absolute;
      top: 43em; */
        }
        #powerd h2 {
            position: absolute;
            top: 56em;
        }
    }
    
    @media screen and (max-width:650px) {
        #card {
            display: flex;
            /* justify-content:space-between; */
            /* flex-direction: row; */
            /* flex-wrap: wrap; */
        }
        .image {
            position: relative;
            z-index: -1;
            margin-top: 1em;
            padding: 1em;
            width: 90%;
            left: 0.9em;
        }
        #footer {
            position: absolute;
            top: 220em;
        }
        #powerd {
            display: flex;
            justify-content: center;
            /* position: absolute;
      top: 43em; */
        }
        #powerd h2 {
            position: absolute;
            top: 164em;
        }
    }
    
    @media screen and (max-width:622px) {
        #content h1 {
            margin-top: 2.5em;
        }
        .image {
            position: relative;
            z-index: -1;
            margin-top: 0em;
            padding: 1em;
            width: 90%;
            height: 30em;
            left: 0.4em;
        }
        #footer {
            position: absolute;
            top: 633em;
        }
        #powerd {
            display: flex;
            justify-content: center;
            /* position: absolute;
      top: 43em; */
        }
        #powerd h2 {
            position: absolute;
            top: 439em;
        }
    }
    
    @media screen and (max-width:380px) {
        #content h1 {
            margin-top: 2.9em;
        }
        #footer {
            width: 101%;
        }
    }
</style>

<body>
    <div id="index">
        <ul id="ul-id">
            <li><a href='index.php'>Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="form.php">Login Form</a></li>
        </ul>
    </div>
    <div id="content">
        <h1>Raju Lodje</h1>
    </div>
    <div id="card">
        <!-- ./static/ with the help static-->
        <img src="image-hosting.jpg" alt="image lodge" id="image1" class="image">
        <img src="image-hosting.jpg" alt="image lodge" id="image2" class="image">
        <img src="image-hosting.jpg" alt="image lodge" id="image3" class="image">
        <img src="image-hosting.jpg" alt="image lodge" id="image1" class="image">
        <img src="image-hosting.jpg" alt="image lodge" id="image2" class="image">
        <img src="image-hosting.jpg" alt="image lodge" id="image2" class="image">
        <img src="image-hosting.jpg" alt="image lodge" id="image2" class="image">
        <img src="image-hosting.jpg" alt="image lodge" id="image2" class="image">
        <img src="image-hosting.jpg" alt="image lodge" id="image2" class="image">
        <img src="image-hosting.jpg" alt="image lodge" id="image2" class="image">
        <img src="image-hosting.jpg" alt="image lodge" id="image2" class="image">
        <img src="image-hosting.jpg" alt="image lodge" id="image2" class="image">
        <img src="image-hosting.jpg" alt="image lodge" id="image2" class="image">
        <img src="image-hosting.jpg" alt="image lodge" id="image2" class="image">
        <img src="image-hosting.jpg" alt="image lodge" id="image2" class="image">
        <img src="image-hosting.jpg" alt="image lodge" id="image2" class="image">
        <img src="image-hosting.jpg" alt="image lodge" id="image2" class="image">
        <img src="image-hosting.jpg" alt="image lodge" id="image2" class="image">
        <img src="image-hosting.jpg" alt="image lodge" id="image2" class="image">
        <img src="image-hosting.jpg" alt="image lodge" id="image2" class="image">
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
        <h2>INITIATED BY RAJU LODGE</h2>
    </div>

</body>

</html>