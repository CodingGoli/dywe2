<?php
    echo
        "<div class='custom_body_rechts'>";
 
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
            
        "</div>";
?>