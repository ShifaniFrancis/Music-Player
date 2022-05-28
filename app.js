// This function is to play songs from the recommendation page (when the image is clicked)
function playsong(a){
    var ipath=document.getElementById(a).getAttribute("src");
    var aud=document.getElementById("playing").getAttribute("src");
    var arr=[ipath,aud];
    $.ajax({
        url:"changemusic.php",
        method:"post",
        data:{arr: JSON.stringify(arr)},
        success:function(res){
            var obj=JSON.parse(res);
            document.getElementById('playing').setAttribute('src',obj[0]);
            document.getElementById('playing').play();
            document.getElementById('playingtitle').innerHTML=obj[1];
            document.getElementById('playingartist').innerHTML=obj[2];
            document.getElementById('poster').setAttribute('src',ipath);
            if(obj[3]==1){
            document.getElementById('playlike').setAttribute("class","fa fa-heart fa-2x");
            }
            else{
            document.getElementById('playlike').setAttribute("class","fa fa-heart-o fa-2x");
            }
        }
    })
}

// This function is to play music from the all songs list
function playmusic(a){
    var aud=document.getElementById("playing").getAttribute("src");
    var arr=[a,aud];
    $.ajax({
        url:"playmusic.php",
        method:"post",
        data:{arr: JSON.stringify(arr)},
        success:function(res){
            var obj=JSON.parse(res);
            document.getElementById('playing').setAttribute('src',obj[0]);
            document.getElementById('playing').play();
            document.getElementById('playingtitle').innerHTML=obj[1];
            document.getElementById('playingartist').innerHTML=obj[2];
            document.getElementById('poster').setAttribute('src',obj[4]);
            if(obj[3]==1)
            document.getElementById('playlike').setAttribute("class","fa fa-heart fa-2x");
            else
            document.getElementById('playlike').setAttribute("class","fa fa-heart-o fa-2x");
        }
    })
}

// This function is to play music from the liked songs list
function playmusicliked(a){
    var num=a.slice(5);
    playmusic(num);
}

// This function is to change liked status of a song
function changelike(audio,source){
    var cls=document.getElementById(source).className;
    if(cls=="fa fa-heart-o fa-2x"){
    document.getElementById(source).setAttribute("class","fa fa-heart fa-2x");
    var arr=[audio,0];
    $.ajax({
        url:"changelike.php",
        method:"post",
        data:{arr: JSON.stringify(arr)},
        success:function(res){
            songid="songlike"+res.trim();
            if(source=="playlike"){
                document.getElementById(songid).setAttribute("class","fa fa-heart fa-2x");
            }
        }
    })
    
    }
    else{
    document.getElementById(source).setAttribute("class","fa fa-heart-o fa-2x");
    var arr=[audio,1];
    $.ajax({
        url:"changelike.php",
        method:"post",
        data:{arr: JSON.stringify(arr)},
        success:function(res){
            songid="songlike"+res.trim();
            if(source=="playlike"){
                document.getElementById(songid).setAttribute("class","fa fa-heart-o fa-2x");
            }
        }
    })
    }
    $('#likedcontent').load(location.href + ' #likedcontent');
}

// This function is to change liked status of a song in the all songs list
function songlike(num){
    var a=num.slice(8);
    $.ajax({
        url:"returndetails.php",
        method:"post",
        data:{a: JSON.stringify(a)},
        success:function(res){
            var obj=JSON.parse(res);
            changelike(obj[0],num);
            if(document.getElementById("playing").getAttribute("src")==obj[0]){
                if(document.getElementById("playlike").getAttribute("class")=="fa fa-heart-o fa-2x"){
                    document.getElementById("playlike").setAttribute("class","fa fa-heart fa-2x");
                }
                else{
                    document.getElementById("playlike").setAttribute("class","fa fa-heart-o fa-2x");
                }
            }
        }
    })
}

// This function is to toggle between recommendations page 
//  and list all(all songs) page
function check(num){
    if(num==0){
        $('#select').load("listall.php");
    }
    else{
        $('#select').load("recommendations.php");
    }
}

// This function is called when user logs out
function logout(){
    var aud=document.getElementById("playing").getAttribute("src");
    $.ajax({
        url:"Logout.php",
        method:"post",
        data:{aud: JSON.stringify(aud)},
        success:function(res){
        window.location.href = 'index.php';
        }
    })
}
