
<?php
$caption = $_POST['caption'];

$source = $_FILES['images']['tmp_name'];
$loc = "../assets/images/".$_FILES['images']['name'];
move_uploaded_file($source, $loc);

$postsFile = fopen('post.txt', 'a');
$posts = $caption."|".$loc."\n";
fwrite($postsFile, $posts);
header('Location: newsfeed.php');


?>