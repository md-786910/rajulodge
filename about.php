<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
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
    
    li:hover {
        background-color: rgb(212, 42, 19);
        color: black;
    }
    
    a {
        color: ghostwhite;
        text-decoration: none;
    }
    
    li {
        font-size: 1.2em;
        padding: 1em;
        color: rgb(230, 236, 223);
        cursor: pointer;
    }
    
    #header {
        display: flex;
        justify-content: center;
    }
    
    #header h1 {
        margin-top: 2em;
        font-family: sans-serif;
        color: hsl(201deg, 70%, 20%);
    }
    
    #card {
        display: flex;
    }
    
    .image {
        margin-top: 1em;
        margin-left: 3em;
        padding: 1em;
        width: 30%;
        height: em;
    }
    
    #footer {
        background-color: rgb(17, 231, 142);
        width: 100%;
        height: 10em;
        margin-top: 10em;
    }
    
    #content {
        display: flex;
        justify-content: flex-end;
    }
    
    #lorem {
        margin-top: -26em;
        line-height: 1.5em;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        margin-right: 3em;
        width: 50%;
        height: 25em;
        /* border: 1em solid red; */
        overflow-y: scroll;
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
    /* MEDIA QUERY USED HERE */
    
    @media screen and (max-width: 1350px) {
        .image {
            margin-top: 2em;
            margin-left: 3em;
            width: 35%;
            height: 30em;
        }
        #lorem {
            margin-top: -22.5em;
            line-height: 1.5em;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            margin-right: 3em;
            width: 50%;
            height: 25em;
            font-size: 1.4em;
            overflow-y: scroll;
        }
    }
    
    @media screen and (max-width: 1000px) {
        .image {
            margin-top: 2em;
            margin-left: 3em;
            width: 40%;
            height: 30em;
        }
        #lorem {
            margin-top: -22.5em;
            line-height: 1.5em;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            margin-right: 3em;
            width: 40%;
            height: 25em;
            font-size: 1.4em;
            overflow-y: scroll;
        }
    }
    
    @media screen and (max-width: 705px) {
        .image {
            margin-top: 0.5em;
            margin-left: 0.5em;
            width: 90%;
            height: 30em;
        }
        #header h1 {
            margin-top: 2.5em;
        }
        #lorem {
            position: absolute;
            /* z-index: -1; */
            bottom: -26em;
            line-height: 1.5em;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            margin-right: 0.5em;
            width: 90%;
            height: 25em;
            font-size: 1.4em;
            overflow-y: scroll;
        }
        #footer {
            margin-top: 40em;
        }
    }
    
    @media screen and (max-width: 400px) {
        #footer {
            margin-top: 38em;
            width: 102%;
        }
        .image {
            margin-left: 0.2;
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
    <div id="header">
        <h1>ABOUT RAJU LODGE</h1>
    </div>
    <div id="card">
        <img src="./image/image-hosting.jpg" alt="image-lodge" id="image1" class="image">
</div>
    <div id="content">
        <p id="lorem">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore, rerum modi deleniti illum necessitatibus harum animi quibusdam fugit libero perferendis architecto repellendus quaerat. Minus, ea! Magnam, ipsa repudiandae. Corrupti dolores sint eius
            eos sit saepe alias voluptas ab expedita error quia optio tempora exercitationem, adipisci dolore inventore tenetur mollitia! Illum doloribus voluptate, deleniti consequatur neque provident doloremque dicta totam nisi fuga voluptatibus facere
            aliquam accusamus. Ipsum necessitatibus pariatur neque laborum debitis sint consequatur nam porro dolor dignissimos, itaque, nostrum delectus voluptatum saepe velit! Reprehenderit, exercitationem illo ex blanditiis repellendus doloribus cumque
            libero eligendi nihil molestiae veritatis reiciendis, tempora ea magni aperiam, dolor voluptate odit similique impedit totam ipsa magnam culpa. Impedit asperiores provident repellat eius exercitationem cumque iste, ea ipsum consectetur ducimus
            delectus a. Nisi atque quod veniam consequatur repudiandae et eum architecto vitae expedita pariatur, adipisci illum assumenda rem vel. Nesciunt ab, consectetur aliquam quisquam blanditiis quis ea ipsam illum doloribus illo sequi laudantium,
            fugit autem, dolore rem quaerat laborum voluptatibus quam corporis velit consequuntur? Totam recusandae ducimus adipisci rem iure dolor nisi dolore ipsa doloremque reiciendis illo suscipit sapiente, expedita in soluta porro saepe eius excepturi
            mollitia iste, esse similique! Quibusdam laudantium aut maxime exercitationem facilis consequuntur porro!
        </p>
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
        <h2 style="text-align:center;">INITIATED BY RAJU LODGE</h2>
    </div>

</body>

</html>