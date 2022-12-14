

<html>
<head>

    <title>Admin panel</title>
</head>
<style>
    body {
        background-image: url('/safin_part/post.jpg');
        background-size: cover;
        margin: 0;
    }
    table {
        border: 10px solid #FFFFFF;
        border-top: 0;
        color: blue;
        font-family: 'Monoton', cursive;
        height: 100vh;
        width: 100%;
    }
    a {
        color: #FFFFFF;
        font-size: 25px;
        text-decoration: none;
    }
    .header {
        border: 10px solid #FFFFFF;
        font-size: 75px;
        height: 30px;
        text-align: center;
    }
   
   
  
    form {
        text-align: center;
    }
    fieldset {
        background-color:gray;
        font-size: 25px;
        font-family: 'Open Sans', sans-serif;
        text-align: left;
    }
    input {
        width: 100%;
    }
    textarea {
        width: 100%;
        height: 150px;
    }
   
    input[type = 'submit'] {
        font-size: 30px;
        border: 5px solid gray;
        background-color: gray;
        color: blue;
    }
    input[type = 'submit']:hover {
        background-color:gray;
        color: black;
    }

</style>
<body>
    <table class="header">
        <tr>
            <td>TiffinBox</td>
        </tr>
</table>
<table>
        
            <td >
                <form action="upload.php" method="POST"  enctype="multipart/form-data" >
                    <fieldset>
                        <p class="subheader">Publish posts</p>
                        <hr>
                        <label for="caption">Caption : </label>
                        <hr>
                        <textarea name="caption" id="caption"></textarea>
                        <hr>
                        <label for="iamge">Image : </label>
                        <hr>
                        <input type="file" name="images" id="images">
                        <hr>
                        <input type="submit" value="Post">
                        <br>
                        <br>
                        <a href="home.php">Home</a>
                    </fieldset>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>
