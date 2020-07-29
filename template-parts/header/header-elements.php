<?php

                    // Check rows exists.
                    if (have_rows('spartacus_front_page_header_elements')) :

                        // Loop through rows.
                        while (have_rows('spartacus_front_page_header_elements')) : the_row();

                            // Load sub field value.
                            $image = get_sub_field('header_element_image');
                            $name = get_sub_field('header_element_name');
                            $number = get_sub_field('header_element_number');
                            $link = get_sub_field('header_element_link');
                        // Do something...
                        
                        $result  = "<div class='single-block-el'>";
                        $result .= "<div class='elements-info-wrap'>";
                        $result .= "<div class='element-image'><a href='{$link}'><img src='{$image['url']}' alt='{$image['alt']}'></a></div>";
                        $result .= "<div class='element-name'><a href='{$link}'>{$name}</a></div>";
                        $result .= "<div class='element-number'><a href='{$link}'>{$number}</a></div>";
                        $result .= "</div>";
                        $result .= "</div>";
                        echo $result;

                        // End loop.
                        endwhile;
                    // Do something...
                    endif;
