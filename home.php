<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>FriendsBooks</title>
     <link rel="stylesheet" type = "text/css"  href="homestyle.css">    
</head>

<body>
    <div class="Nav">
        <div style=" margin: auto; font-size: 30px; font-family: cursive;">
        &nbsp FriendsBooks &nbsp  <input type="text" class="searchBox" placeholder="Search for friends">      
        <img src="profile.jpg" style="width: 50px; height:50px; float: right;">
        <p style="float: right; font-size: 20px;"> &nbsp  <?php echo $_SESSION['name']; ?> </p>
        </div>
    </div>
    <br>

<div style="display: flex;">
     <div style=" min-height:800px; flex: 0.5;">
          <div id="friends_bar">
       <img src="user1.jpg"> <br> user name
</div> 
</div>

<!--posts area-->
     <div style="min-height:500px; flex:1; padding:5px; padding-right:300px;">
     <div style="border: solid thin #aaa; padding:5px; background-color:white;">
          <textarea placeholder="Whats on your mind?"></textarea>
          <input id="post_button" type="Post" value="post">
          <br>
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