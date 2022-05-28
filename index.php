<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="table.css">
    <title>Music Player</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
<?php
session_start();
$_SESSION['prev']=$_SESSION['starttime'];
?>
<header>
    <!-- This division displays the songs liked by the user -->
    <div class="menu_side">
        <h1>Liked Songs</h1>
        <div class="tbl-header">
    <table id="liked" cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th class="imgcolumn"></th>
          <th>Title</th>
          <th>Artist</th>
        </tr>
      </thead>
    </table>
  </div>
  <div  style="height:500px;" class="tbl-content">
    <table id="likedcontent" cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <?php 
        // Connecting to database
        $conn=mysqli_connect('localhost','root','','musicapp');
        $table=$_SESSION['usern']."songs";
        $list="select SongNum,Title,Artist,Liked,imgpath from $table where Liked=1";
        $res=mysqli_query($conn,$list);
        while($arr=mysqli_fetch_array($res,MYSQLI_ASSOC)){
        ?>
          <tr onclick="playmusicliked(this.id);" id=<?php echo "liked".$arr['SongNum'];?> class="songrow">
          <td class="imgcolumn"><img width="40" height="40" src=<?php echo $arr['imgpath']; ?>></td>
          <td><?php echo $arr['Title']; ?></td>
          <td><?php echo $arr['Artist']; ?></td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    </div>
    </div>

    <div id="select" style="overflow-y:scroll;" class="song_side">    
        <nav>
            <ul>
                <li><a id="link" onclick="check(0)">LIST ALL SONGS</a></li>
            </ul>
            
            <div>
                <!-- Logout button -->
              <input onclick="logout();" class="logout" type="button" value="Log Out">
            </div>
        </nav>
       <div>
           <!-- This division displays the songs that were recently played -->
        <div class="popular_song">
            <div class="h4">
                <h4>Recently Played</h4>
            </div>
            <div class="pop_song">
                <?php
                $recentplays=array();
                $conn=mysqli_connect('localhost','root','','musicapp');
                $recents="select * from $table";
                $res=mysqli_query($conn,$recents);
                while($row=mysqli_fetch_array($res,MYSQLI_ASSOC)){
                    $recentplays[$row['SongNum']]=$row['Last_Listened'];
                }
                rsort($recentplays);
                $x=1;
                $num=0;
                foreach($recentplays as $songnum=>$lastlistened){
                if($lastlistened!=0){
                $num++;
                $res1=mysqli_query($conn,"select * from $table where Last_Listened=$lastlistened");
                $arr=mysqli_fetch_array($res1,MYSQLI_ASSOC);               
                ?>
                <li class="songItem">
                    <div class="img_play">
                        <img onclick="playsong(this.id);" id=<?php echo "recent".$x; ?> src=<?php echo $arr['imgpath'];  ?> alt="alan">
                    </div>
                    <h5><?php echo $arr['Title']; ?></h5>
                        <div class="subtitle"><?php echo $arr['Artist']; ?></div>
                </li>
                <?php
                if($x>9){
                break;
                }
            }
                $x++;
                }
                if($num==0){
                ?>
                <!-- If the user has not played any song yet, then this message will be displayed -->
                <h3>No recent songs yet</h3>
                <?php
                }
                ?>
            </div>
        </div>
        <!-- This division will recommend songs to the user based on the songs the user has liked -->
        <div class="popular_song">
        <div class="h4">
                <h4>Based On Songs You Liked</h4>
            </div>
        <div class="pop_song">
        <?php
                $recommended=array();
                $res=mysqli_query($conn,"select * from $table");
                $content=mysqli_fetch_all($res,MYSQLI_ASSOC);
                $columns = array_column($content, 'Priority');
                array_multisort($columns, SORT_DESC, $content);
                $x=1;
                foreach($content as $index=>$arr){    
                ?>
                <li class="songItem">
                    <div class="img_play">
                        <img onclick="playsong(this.id);" id=<?php echo "recommend".$x; ?> src=<?php echo $arr['imgpath'];?> alt="alan">
                    </div>
                    <h5><?php echo $arr['Title']; ?></h5>
                        <div class="subtitle"><?php echo $arr['Artist']; ?></div>
                </li>
                <?php
                if($x>9){
                break;
                }
                $x++;
                }
                ?>
            </div>
        </div>
        <!-- This division will recommend songs to the user based on their listening activity -->
    <div class="popular_song">
            <div class="h4">
                <h4>Based On Your Listening Activity</h4>
            </div>
            <div class="pop_song">
            <?php
                $recommended=array();
                $res=mysqli_query($conn,"select * from $table");
                $content=mysqli_fetch_all($res,MYSQLI_ASSOC);
                $columns = array_column($content, 'listenpriority');
                array_multisort($columns, SORT_DESC, $content);
                $x=1;
                foreach($content as $index=>$arr){    
                ?>
                <li class="songItem">
                    <div class="img_play">
                        <img onclick="playsong(this.id);" id=<?php echo "listenactivity".$x; ?> src=<?php echo $arr['imgpath'];?> alt="alan">
                    </div>
                    <h5><?php echo $arr['Title']; ?></h5>
                        <div class="subtitle"><?php echo $arr['Artist']; ?></div>
                </li>
                <?php
                if($x>9){
                break;
                }
                $x++;
                }
                ?>
            </div>
        </div>
        <!-- This division will recommend songs that the user has not listened to yet -->
    <div class="popular_song">
        <div class="h4">
                <h4>Try Something New</h4>
            </div>
        <div class="pop_song">
            <?php
                $recommended=array();
                $res=mysqli_query($conn,"select * from $table");
                $content=mysqli_fetch_all($res,MYSQLI_ASSOC);
                $columns = array_column($content, 'Last_Listened');
                array_multisort($columns, SORT_ASC, $content);
                $x=1;
                foreach($content as $index=>$arr){    
                ?>
                <li class="songItem">
                    <div class="img_play">
                        <img onclick="playsong(this.id);" id=<?php echo "trynew".$x; ?> src=<?php echo $arr['imgpath'];?> alt="alan">
                    </div>
                    <h5><?php echo $arr['Title']; ?></h5>
                        <div class="subtitle"><?php echo $arr['Artist']; ?></div>
                </li>
                <?php
                if($x>9){
                break;
                }
                $x++;
                }
                ?>
            </div>
        </div>
    </div>
    </div>
    
    <!-- This section contains the audio player  -->
<footer class="bottom">
    <table cellpadding="0" cellspacing="0" border="0" class="songdet">
        <tr>
        <td width="80" style="padding-left:30px;" ><img id="poster" width="40" height="40" src="img/1.jpg"></td>
        <td style="padding-left:3px; font-family:Verdana;" width="230">
        <h3 id="playingtitle">Shape Of You</h3>
        <h4 id="playingartist">Ed Sheeran</h4>
        </td>
        <td style="padding-top:4px;padding-bottom:70px;" width="800">
        <audio controls id="playing" name= "playing">
             <source id="s" src="">
        </audio>
        </td>
        <td>
            <!-- Like button -->
        <i id="playlike" onclick="changelike(document.getElementById('playing').getAttribute('src'),this.id);" class="fa fa-heart-o fa-2x" >
        </td>
    </table>
</footer>
    
</header>
<?php
    include "music.php";
    ?>
<script src="app.js"></script>
</body>
</html>