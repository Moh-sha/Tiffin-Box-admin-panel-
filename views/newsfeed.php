<html>
<head>
    
    <title>Admin panel</title>
</head>
<style>
    body {
        background-image:url(/Master_Home.jpg) ;
        background-size: cover;
        margin: 0;
    }
    table {
        border: 10px solid #FFFFFF;
        border-top: 0;
        color: #FFFFFF;
        font-family: 'Monoton', cursive;
        height: 100vh;
        width: 100%;
        text-align: center;
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
 
   
    
    img {
        width: 25vw;
        border: 5px solid #000000;
    }
    .post {
        text-align: left;
        background-color: black;
        display: inline-block;
        font-family: 'Open Sans', sans-serif;
        padding-left: 25px;
        padding-right: 25px;
        border: 5px solid;
    }
    .post_header {
        text-align: left;
        font-weight: bold;
        font-size: 25px;
    }
</style>
<body>
    <table class="header">
        <tr>
            <td>TiffinBox</td>
        </tr>
</table>

            <td >
                <table>
                            <?php
                            $postFile = fopen('post.txt', 'r');
                            while (!feof($postFile))
                            {
                                $posts = fgets($postFile);
                                if ($posts == "") {
                                    break;
                                }
                                echo "<tr><td class='post'>";
                                $post = explode('|', $posts);
                                echo "<p class='post_header'>{$post[0]}</p>";
                                
                                echo "<br><img src='{$post[1]}'>";
                                echo "</tr></td>";
                            }
                            ?>
                            <a href="home.php">Home</a>
                </table>
            </td>
        </tr>
    </table>

      

</body>
</html>