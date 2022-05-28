<?php
// This code is executed when the user logs in

// This code is to display the song that was listened to last 
// (in the previous login session) by the user in the audio player

    // Connecting to database
    $conn=mysqli_connect('localhost','root','','musicapp');
    $table=$_SESSION['usern']."songs";
    $recents="select * from $table";
    $res=mysqli_query($conn,$recents);
    while($row=mysqli_fetch_array($res,MYSQLI_ASSOC)){
        $recentplays[$row['SongNum']]=$row['Last_Listened'];
    }
    rsort($recentplays);
    $lastlistened=$recentplays[0];
    $res1=mysqli_query($conn,"select * from $table where Last_Listened=$lastlistened");
    $arr=mysqli_fetch_array($res1,MYSQLI_ASSOC);
    echo "<script>document.getElementById('poster').setAttribute('src','$arr[imgpath]')</script>";
    echo "<script>document.getElementById('playingtitle').innerHTML='$arr[Title]'</script>";
    echo "<script>document.getElementById('playingartist').innerHTML='$arr[Artist]'</script>";
    echo "<script>document.getElementById('playing').setAttribute('src','$arr[audiopath]')</script>";
    if($arr['Liked']==1){
        echo "<script>document.getElementById('playlike').setAttribute('class','fa fa-heart fa-2x');</script>";
        }
    else{
        echo "<script>document.getElementById('playlike').setAttribute('class','fa fa-heart-o fa-2x');</script>";
        }
     ?>