<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      .mid {
        text-align: center;
        font-size: 100px;
      }

      .fieldset {
        display: inline-block;
        border: 5px solid;
      }
      body {
        background-image: url("../assets/images.png");
        background-size: cover;
      }
      .side {
        float: left;
      }

      a {
        font-size: large;
        color: tomato;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <div class="mid">Welcome Tiffinbox</div>

    <div class="side">
      <a href="../models/reg.php">Register New Admin</a>
      <hr />
      <a href="../views/post.php">Upcomming Announcements</a>
      <hr />
      <a href="../views/newsfeed.php">Admin newsfeed</a>
      <hr />
      <a href="../models/add_rider.php">Add Rider</a>
      <hr />
      <a href="../models/add_resturent.php">Add Resturent owner</a>
      <hr />
      <a href="../views/h_ajax.php">Available Restaurant</a>
      <hr />
      <a href="../views/Contact.php">Contact</a>
      <hr />

      <a href="out.php ">Logout</a> &nbsp;
    </div>
  </body>
</html>
