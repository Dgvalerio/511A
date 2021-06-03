<?php require_once 'header.php' ?>
    <title>IFortecs -</title>
    <?php

    ?>
    <link rel="stylesheet" type="text/css" href="_esc/plugin/css/style.css">
    <script type="text/javascript" src="_esc/demo/js/jquery-1.6.1.min.js"></script>
    <script type="text/javascript" src="_esc/plugin/jquery-jplayer/jquery.jplayer.js"></script>
    <script type="text/javascript" src="_esc/plugin/ttw-music-player-min.js"></script>
    <script type="text/javascript">

        $(document).ready(function(){

            var myPlaylist = [

                {
                    mp3:'_media/America.mp3',
                    rating:5,
                    title:"America",
                    duration:'4:33',
                    artist:'Imagine Dragons',
                    cover:'_media/Cover.jpg'
                },

                {
                    mp3:'_media/Amsterdam.mp3',
                    rating:5,
                    title:"Amsterdam",
                    duration:'4:01',
                    artist:'Imagine Dragons',
                    cover:'_media/Cover.jpg'
                },

                {
                    mp3:'_media/Its_Time.mp3',
                    rating:5,
                    title:"It's Time",
                    duration:'4:00',
                    artist:'Imagine Dragons',
                    cover:'_media/Cover.jpg'

                },

                {
                    mp3:'_media/On_Top_Of_The_World.mp3',
                    rating:5,
                    title:"On Top Of The World",
                    duration:'3:12',
                    artist:'Imagine Dragons',
                    cover:'_media/Cover.jpg'
                },

                {
                    mp3:'_media/Radioactive.mp3',
                    rating:5,
                    title:"Radioactive",
                    duration:'3:06',
                    artist:'Imagine Dragons',
                    cover:'_media/Cover.jpg'
                },
                
                {
                    mp3:'_media/Tiptoe.mp3',
                    rating:5,
                    title:"Tiptoe",
                    duration:'3:14',
                    artist:'Imagine Dragons',
                    cover:'_media/Cover.jpg'
                }


            ];

            $(document.getElementById('music')).ttwMusicPlayer(myPlaylist, {


                ratingCallback:function(index, playlistItem, rating){
                        //some logic to process the rating, perhaps through an ajax call
                },
                autoPlay:false,

                jPlayer:{} //override default jPlayer options here. This accepts the same structure as the standalone jPlayer
            });
        });
    </script>
</head>

<?php include_once'nav_menu.php' ?>

<section>
    <div id="music"></div>
</section>

<!-- infortecs -->

<?php include_once'footer.php' ?>