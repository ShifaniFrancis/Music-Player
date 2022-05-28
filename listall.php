<?php
// This file gets loaded in to the "select" div tag when the user
// clicks on "LIST ALL SONGS" link
session_start();
// Connecting to database
$conn=mysqli_connect('localhost','root','','musicapp');
$table=$_SESSION['usern']."songs";
?>
<nav>
        <ul>
                <li><a id="link" onclick="check(1)">GO HOME</a></li>
            </ul>
            
            <div>
                <!-- Logout button -->
            <input onclick="logout();" class="logout" type="button" value="Log Out">
            </div>
        </nav>
        <!-- This section contains all the songs present in the music player -->
        <section>
  <h1>All Songs</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th class="imgcolumn"></th>
          <th>Title</th>
          <th>Artist</th>
          <th></th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <?php 
        $list="select SongNum,Title,Artist,Liked,imgpath from $table";
        $res=mysqli_query($conn,$list);
        while($arr=mysqli_fetch_array($res,MYSQLI_ASSOC)){
        ?>
        <tr onclick="playmusic(this.id);" id=<?php echo $arr['SongNum'];?> class="songrow">
          <td class="imgcolumn"><img width="40" height="40" src=<?php echo $arr['imgpath']; ?>></td>
          <td><?php echo $arr['Title']; ?></td>
          <td><?php echo $arr['Artist']; ?></td>
          <td onclick='event.stopPropagation();return false;'>
          <!-- Like button for each song -->
          <?php
           if($arr['Liked']==1){
          ?>
          <i id=<?php echo "songlike".$arr['SongNum'];?> onclick="songlike(this.id);"  class="fa fa-heart fa-2x" >
          <?php
           }
           else{
           ?>
          <i id=<?php echo "songlike".$arr['SongNum'];?> onclick="songlike(this.id);"  class="fa fa-heart-o fa-2x" >
            <?php
           }
            ?>
           </td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</section>