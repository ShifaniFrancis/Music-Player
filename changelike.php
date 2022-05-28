 <?php
//  To change the like/unlike status of a song.
//  Here unlike refers to removing the liked status from a song
session_start();
$arr1=json_decode($_POST['arr']);
$audpath=$arr1[0];
// Connecting to database
$conn=mysqli_connect('localhost','root','','musicapp');
$table=$_SESSION['usern']."songs";
$res=mysqli_query($conn,"select * from $table where audiopath='$audpath'");
$a=mysqli_fetch_array($res,MYSQLI_ASSOC);
$songnum=$a['SongNum'];
$prior=$a['Priority'];
$genre=$a['Genre'];
$artist=$a['Artist'];

// if user likes the song
if($arr1[1]==0){
$newprior=$prior+1;
// Changing liked status of the song
$access="update $table set Liked=1 where audiopath='$audpath'";
$res1=mysqli_query($conn,$access);
if($prior<30){
    if($newprior>30){
        $newprior=30;
        }
//Updating priority of the song 
$priorchange="update $table set Priority=$newprior where audiopath='$audpath'";
}
$res2=mysqli_query($conn,$priorchange);
$q=mysqli_query($conn,"select * from $table");
$allrows=mysqli_fetch_all($q,MYSQLI_ASSOC);
foreach($allrows as $index=>$row){
    $num=$row['SongNum'];
    // Changing priority of the songs having same artist or same genre or both
    // as the song that was liked 
    if($row['Artist']==$artist && $row['Genre']==$genre ){
        // If both artist and genre match increase priority of song by 8
        $p=$row['Priority'];
        $n=$p+8;
        if($p<30){
            if($n>30){
            $n=30;
            }
            $k=mysqli_query($conn,"update $table set Priority=$n where SongNum=$num");
        }
    }
    else if($row['Artist']==$artist){
        // If only artist matches increase priority of song by 4
        $p=$row['Priority'];
        $n=$p+4;
        if($p<30){
            if($n>30){
            $n=30;
            }
            $k=mysqli_query($conn,"update $table set Priority=$n where SongNum=$num");
        }
    }
    else if($row['Genre']==$genre){
        // If only genre matches increase priority of song by 4
        $p=$row['Priority'];
        $n=$p+4;
        if($p<30){
            if($n>30){
            $n=30;
            }
            $k=mysqli_query($conn,"update $table set Priority=$n where SongNum=$num");
        }
    }
    if($row['Genre']!=$genre && $row['Artist']!=$artist){
        // If both artist and genre don't match decrease priority of song by 1
        $p=$row['Priority'];
        $n=$p-1;
        if($p>-25){
            if($n<-25){
            $n=-25;
            }
            $k=mysqli_query($conn,"update $table set Priority=$n where SongNum=$num");
        }
    }
}
}
// if user unlikes the song
else{
$newprior=$prior-1;
$access="update $table set Liked=0 where audiopath='$audpath'";
$res1=mysqli_query($conn,$access);   
if($prior>-25){
    if($newprior<-25){
        $newprior=-25;
        }
//Updating priority of the song 
$priorchange="update $table set Priority=$newprior where audiopath='$audpath'";
}
$res2=mysqli_query($conn,$priorchange);
$q=mysqli_query($conn,"select * from $table");
$allrows=mysqli_fetch_all($q,MYSQLI_ASSOC);
foreach($allrows as $index=>$row){
    // Changing priority of the songs having same artist or same genre or both
    // as the song that was liked 
    $num=$row['SongNum'];
    if($row['Artist']==$artist && $row['Genre']==$genre){
        // If both artist and genre match decrease priority of song by 7
        $p=$row['Priority'];
        $n=$p-7;
        if($p>-25){
            if($n<-25){
            $n=-25;
            }
            $k=mysqli_query($conn,"update $table set Priority=$n where SongNum=$num");
        }
    }
    else if($row['Artist']==$artist){
        // If only artist matches decrease priority of song by 3
        $p=$row['Priority'];
        $n=$p-3;
        if($p>-25){
            if($n<-25){
            $n=-25;
            }
            $k=mysqli_query($conn,"update $table set Priority=$n where SongNum=$num");
        }
    }
    else if($row['Genre']==$genre){
        // If only genre matches decrease priority of song by 3
        $p=$row['Priority'];
        $n=$p-3;
        if($p>-25){
            if($n<-25){
            $n=-25;
            }
            $k=mysqli_query($conn,"update $table set Priority=$n where SongNum=$num");
        }
    }
}
}
echo $songnum;
?>