<?php
session_start();
// This file gets loaded in to the "select" div tag when the user
// clicks on "GO HOME" link
// Connecting to database
$conn=mysqli_connect('localhost','root','','musicapp');
$table=$_SESSION['usern']."songs";
?>
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