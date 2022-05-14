$user_id = $_SESSION['id'];
$query = "SELECT post.id, post.text, post.image, post.create_date, user.id as user_id, user.first_name, user.last_name from post\n" .
    "inner join user_info user on\n" .
    "user.id = post.user_id\n" .
    "where post.user_id = $user_id\n" .
    "order by post.create_date DESC";
$result = doSelectQuery($query);
$posts = $result['results'];

<?php
 if (isset($posts)) {
      foreach ($posts as $post) {
       printPost($post);
        } 
   }

?>

function printPost($post) {
    $post_id=$post['id'];
    $query = "SELECT * FROM post where id = $post_id;
    $result = doSelectQuery($query);
    $comments = $result['results'];
    $text = $post['text'];
    $image = $post['image'];
    $date_obj = date('D, d M Y', strtotime($post['create_date']));
    $user_full_name = $post['first_name'] . ' ' . $post['last_name'];
    if (isset($image) && !empty($image)) {
        $image_html = "<div class='image'><img src='$image' /></div>\n";
    } else {
        $image_html = '';
    }

     
    echo "<div class='post'>\n" .
        "<div class='post-header'>\n" .
        "    <div class='user-image'></div>\n" .
        "<div>\n" .
        "<div class='user-info'>$user_full_name</div>\n" .
        "<div class='post-time'>$date_obj</div>\n" .
        "</div>\n" .
        "</div>\n" .
        "<div class='body'>\n" .
        $image_html .
        "<div class='text'>$text</div>\n" .
        "</div>\n" .
        "</div>\n";
    "</div>";  
}