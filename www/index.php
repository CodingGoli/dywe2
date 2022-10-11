
<?php
include 'post_data.php';
?>

<!doctype html>
<html>
<head>

    <link rel="stylesheet" href="assets/css/style.css">

</head>


<body>
    
        <div class="custom_navigation">
            <div class="custom_nav_logo">
                <a href="http://localhost:3310"> <img src="assets/images/geektok.png" alt="Logo"> </a>
            </div>

            <div class="custom_nav_button">
                <form action='#'>
                    <button type="submit" class="custom_hochladen_button">+ Hochladen</button>
                </form>
            </div>
            <div class="custom_nav_button_2">
                <form action='#'>  
                    <button type="submit" class="custom_anmelden_button">Anmelden</button>
                </form>
            </div>

            <div class="custom_nav_search">
                <label for="custom_suche"></label> 
                <input type="search" id="custom_suche" placeholder="&nbsp &nbsp &nbsp KONTO SUCHEN">      
            </div>
        </div>

    <div class="custom_body">

        <div class="custom_body_links">
                <div class="custom_body_links_box">
                    <form action='#'> 
                            <button class="custom_button_2" type="submit">
                            <span><img class="custom_smallicon" src="assets/images/heim.png" alt="home">  FÜR DICH</span>
                            </button>
                    </form>
                    <form action='#'> 
                            <button class="custom_button_2" type="submit">
                            <span><img class="custom_smallicon" src="assets/images/benutzer.png" alt="user">  FOLGE ICH</span>
                            </button>
                    </form>
                    <form action='#'> 
                            <button class="custom_button_2" type="submit">
                            <span><img class="custom_smallicon" src="assets/images/videokamera-alt.png" alt="videocam">  LIVE  </span>
                            </button>
                    </form>

                </div>

                <div class="custom_body_links_box">
                    <p>Melde dich an, um Erstellern zu folgen,<br> Videos Likes zu geben und Kommentare anzuzeigen.</p> <br>
                    <form action='#'> 
                        <button class="custom_button_3" type="submit">
                        <span>  Anmelden</span>
                        </button>
                    </form>
                </div>

                <div class="custom_body_links_box">
                    <p class="custom_p">Vorgeschlagene Konten</p>

                <?php   
               
                foreach($posts as $key => $post ){
                
                   
                     
                    echo"<a href='?user=NICKNAME'>",
                    "<div class='custom_others'>", 

                        "<div class='custom_other_users_picture'>",
                        $post['user_image'],
                        "</div>",

                        "<div class='custom_other_users'>",
                              $post['username'], 
                        "</div>",

                        "<div class='custom_other_realname'>",    
                        $post ['user_realname'], 
                        "</div>",

                    "</div>";
                 
                     }
                     "</a>";
                ?>        

                </div>

                <div class="custom_body_links_box">
                    <p class="custom_p"> Entdecken</p>

                    <?php   
                        foreach($posts as $key => $post ){
                           
                        foreach($post['post_tags'] as $tag => $hash){
                            echo "<a href='/?tag=TAGNAME' >#".$hash." </a>";      
                        }}

                    ?>

                </div>

                <div class="custom_body_links_box">
                    <div class="custom_small_link">
                        <a href="#">Info</a>
                        <a href="#">Browse</a>
                        <a href="#">Nachrichten</a>
                        <a href="#">Kontakt</a>
                        <a href="#">Karriere</a>
                        <br>
                        <a href="#">Werbung</a>
                        <a href="#">Developers</a>
                        <a href="#">Transparency</a>
                        <br>
                        <a href="#">Hilfe</a>
                        <a href="#">Sicherheit</a>
                        <a href="#">Bedingungen</a>
                        <a href="#">Datenschutz</a>
                        <a href="#">Community-Richtlinien</a>
                        <a href="#">Urheberecht</a>
                        <br>
                        <a href="#">Mehr</a>
                    </div>
                </div>
      </div>

        <div class="custom_body_rechts">

            <?php   
                foreach($posts as $key => $post ){
                                           

                    echo "<div class=custom_top_1>",

                        "<div class='custom_user_picture_box'>",
                            "<div class='custom_user_picture'>",
                            $post['user_image'],
                            "</div>",
                        "</div>",

                        "<div class='custom_content_info'>",

                            "<div class='custom_nickname'>",
                                "<a href='?user=NICKNAME'>". $post ['username'].  "</a>",  
                            "</div>",

                            "<div class='custom_realname'>",
                                $post ['user_realname'], 
                            "</div>",

                            "<div class='custom_tags'>",
                                $post ['post_text'],
                                "<br>";
                            
                                foreach($post['post_tags'] as $tag => $hash){
                                    echo "<a class='custom_tags_right' href='?=TAGNAME' >#".$hash." </a>";
                                }

                            echo "</div>",
                        "</div>",

                        "<div class='custom_follow_1'>",  
                            "<form action='#'>",
                                "<button type='submit' class='custom_followbutton_1'>Follow</button>",
                            "</form>",
                        "</div>",

                    "</div>",

                    "<div class='custom_top_2'>",    

                        "<div class='custom_video_box'>",
                            $post ['post_video_file'],
                        "</div>",

                        "<div class='custom_video_buttons'>",
                            "<form action='#'>",
                                "<button type='submit' class='custom_video_button'>like</button>",
                            "</form>",
                            "<form action='#'>",
                                "<button type='submit' class='custom_video_button' href='?=COMMENNT'>comment</button>",
                            "</form>",
                            "<form action='#'>",    
                                "<button type='submit' class='custom_video_button' href='?=SHARE'>share</button>",
                            "</form>",             
                        "</div>",
                    
                    "</div>";
                } 
            ?>                               
            
        </div>

    </div>
    
</body>

</html>