<!DOCTYPE html>

<html>

<head>
</head>

<body>

<table class="demo-table">

    <tbody>

    <tr>

    <th><strong>Tutorials</strong></th>

    </tr>

    <?php

    if(!empty($result)) {

    $ip_address = $_SERVER['REMOTE_ADDR'];

    foreach ($result as $tutorial) {

    ?>

    <tr>

    <td valign="top">

        <div class="feed_title"><?php echo $tutorial["title"]; ?></div>

        <div id="tutorial-<?php echo $tutorial["id"]; ?>">

        <input type="hidden" id="likes-<?php echo $tutorial["id"]; ?>" value="<?php echo $tutorial["likes"]; ?>">

        <?php

        $query ="SELECT * FROM ipaddress_likes_map WHERE tutorial_id = '" . $tutorial["id"] . "' and ip_address = '" . $ip_address . "'";

        $count = $db_handle->numRows($query);

        $str_like = "like";

        if(!empty($count)) {

        $str_like = "unlike";

        }

        ?>

        <div class="btn-likes"><input type="button" title="<?php echo ucwords($str_like); ?>" class="<?php echo $str_like; ?>" onClick="addLikes(<?php echo $tutorial["id"]; ?>,'<?php echo $str_like; ?>')" /></div>

        <div class="label-likes"><?php if(!empty($tutorial["likes"])) { echo $tutorial["likes"] . " Like(s)"; } ?></div>

        </div>

        <div class="desc"><?php echo $tutorial["description"]; ?></div>

    </td>

    </tr>

    <?php     

    }

    }

    ?>

    </tbody>

</table>

<script type="text/javascript">
    <?php if(!empty($_POST["id"])) { require_once("dbcontroller.php"); $db_handle = new DBController(); switch($_POST["action"]){ case "like":    
     $query = "INSERT INTO ipaddress_likes_map (ip_address,tutorial_id) VALUES ('" . $_SERVER['REMOTE_ADDR'] . "','" . $_POST["id"] . "')";     $result = $db_handle->insertQuery($query);     if(!empty($result)) {       
         
     $query ="UPDATE tutorial SET likes = likes + 1 WHERE id='" . $_POST["id"] . "'";        
    
    $result = $db_handle->updateQuery($query); 
} 
     break; 

      case "unlike":   
     $query = "DELETE FROM ipaddress_likes_map WHERE ip_address = '" . $_SERVER['REMOTE_ADDR'] . "' and tutorial_id = '" . $_POST["id"] . "'";     $result = $db_handle->deleteQuery($query);     if(!empty($result)) {    
    $query ="UPDATE tutorial SET likes = likes - 1 WHERE id='" . $_POST["id"] . "' and likes > 0";       
      $result = $db_handle->updateQuery($query);    
     } break; } } <\pre>