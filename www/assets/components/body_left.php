<?php

    echo
        "<div class='custom_body_links'>",
                "<div class='custom_body_links_box'>",
                    "<form action='#'>", 
                            "<button class='custom_button_2' type='submit'>",
                            "<span><img class='custom_smallicon' src='assets/images/heim.png' alt='home'>  FÜR DICH</span>",
                            "</button>",
                    "</form>",
                    "<form action='#'>", 
                            "<button class='custom_button_2' type='submit'>",
                            "<span><img class='custom_smallicon' src='assets/images/benutzer.png' alt='user'> FOLGE ICH</span>",
                            "</button>",
                    "</form>",
                    "<form action='#'>", 
                            "<button class='custom_button_2' type='submit'>",
                            "<span><img class='custom_smallicon' src='assets/images/videokamera-alt.png' alt='videocam'>  LIVE  </span>",
                            "</button>",
                   "</form>",

                "</div>",

                "<div class='custom_body_links_box'>",
                    "<p>Melde dich an, um Erstellern zu folgen,<br> Videos Likes zu geben und Kommentare anzuzeigen.</p> <br>",
                    "<form action='#'>", 
                        "<button class='custom_button_3' type='submit'>",
                        "<span>  Anmelden</span>",
                        "</button>",
                    "</form>",
                "</div>",

                "<div class='custom_body_links_box'>",
                    "<p class='custom_p'>Vorgeschlagene Konten</p>";
               
                        foreach($posts as $key => $post ){
                            echo "<a href='?user=NICKNAME'>",
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

                                    "</div>",
                                "</a>";
                        }
              
                echo "</div>",

                "<div class='custom_body_links_box'>",
                    "<p class='custom_p'> Entdecken</p>";
   
                        foreach($posts as $key => $post ){
                           
                        foreach($post['post_tags'] as $tag => $hash){
                            echo "<a href='/?tag=TAGNAME' >#".$hash." </a>";     
                        }}

                echo
                "</div>",

                "<div class='custom_body_links_box'>",
                    "<div class='custom_small_link'>",
                       "<a href='#'>Info</a>",
                        "<a href='#'>Browse</a>",
                        "<a href='#'>Nachrichten</a>",
                        "<a href='#'>Kontakt</a>",
                        "<a href='#'>Karriere</a>",
                        "<br>",
                        "<a href='#'>Werbung</a>",
                        "<a href='#'>Developers</a>",
                        "<a href='#'>Transparency</a>",
                        "<br>",
                        "<a href='#'>Hilfe</a>",
                        "<a href='#'>Sicherheit</a>",
                        "<a href='#'>Bedingungen</a>",
                        "<a href='#'>Datenschutz</a>",
                        "<a href='#'>Community-Richtlinien</a>",
                        "<a href='#'>Urheberecht</a>",
                        "<br>",
                        "<a href='#'>Mehr</a>",
                    "</div>",
                "</div>",
      "</div>";
      ?>