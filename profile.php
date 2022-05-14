<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

<!DOCTYPE html>
<html>
<head>
	<title>FriendsBooks</title>
     <link rel="stylesheet" type = "text/css"  href="profilestyle.css">    
</head>

<body>
     <div class="Nav">
     <div style=" margin: auto; font-size: 30px; 	font-family: cursive;">
     &nbsp FriendsBooks &nbsp  <input type="text" class="searchBox" placeholder="Search for friends">  
     <a href="logout.php">
          <span style="font-size:15px; float:right; margin:22px">Logout</span>    
     </a>
     <img src="profile.jpg" style="width: 50px; height:50px; float: right;">
     <p style="float: right; font-size: 20px;"> &nbsp  <?php echo $_SESSION['name']; ?></p>
     </div>
     </div>
     <br>

<!-- cover-->
<div style="width:800px; margin:auto; min-height:400px;">
    <div style="background-color:white; text-align:center; color:#405d9d" >
<img src="cover.jpg" style="width:750px;height:300px;">
    <img id="profile_pic" src="profile.jpg"><br>
    <div style="font-size: 30px;"> <?php echo $_SESSION['name']; ?></div>
<br>
     <div id="menu_button">About</div> 
     <div id="menu_button">Friends</div> 
     <div id="menu_button">Posts</div>
     <div id="menu_button">Setting</div>
      
</div>

<!--below cover-->
<div style="display: flex;">
     <!--friend-->
     <div style=" min-height: 400px;flex: 1;">
          <div id="friends_bar">
               Friends
               <br>
               <div id="friends">
               <img id="friends_img" src="user1.jpg">
               <br> user 1
          </div>
         
     <div id="friends">
          <img id="friends_img" src="user1.jpg"><br> user 2 
    </div>

    <div id="friends">
        <img id="friends_img" src="user1.jpg"> <br> user 3
</div>
<div id="friends">
        <img id="friends_img" src="user1.jpg"> <br> user 4
</div>
</div> 
</div>

<!--posts area-->
     <div style="min-height:500px; flex:2.5; padding:20px; padding-right:0px;">
     <div style="border: solid thin #aaa; padding:10px; background-color:white;">
     <form action="post">
          <textarea name="content" id="content" placeholder="Whats on your mind?"></textarea>
          <input id="post_button" type="submit" value="post">
          <br>
     </form>
     </div>

     <!--posts-->
     <div id="post_bar">
          <!--post1-->
         <div id="post">
              <div>
               <img src="user1.jpg" style="width:90px; margin-right:5px">
             </div>
             <div>
               <div style="font-weight:bold; color:rgb(36, 45, 205);">user 1</div>
               <div> Hello, Its a post</div>
               <br/><br/> 
               <a href="">Like </a> . <a href="">  Comment</a>  .<span style="color: #999;"> April 1 2022</span>
          </div>
         </div> 

     <!--post2-->
         <div id="post">
            <div>
               <img src="user1.jpg"style="width:90px; margin-right:5px">
          </div>
          <div>
               <div style="font-weight:bold;color: rgb(36, 45, 205);">user 2</div>
               <div> hello</div>
               <br/><br/> 
               <a href="">Like </a> . <a href="">  Comment</a>  .<span style="color: #999;"> mar 31 2022</span>
          </div>
     </div>

    
        </div> 
        </div>
    </div>
</div>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>