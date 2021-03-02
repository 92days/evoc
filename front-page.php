<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>


<section class="one">
    <div class="container">
        <div class="homme">
            <h1><?php the_field('zag1') ?></h1>
            <h2><?php the_field('pod1') ?></h2>
            <div class="callme">Вызвать эвакуатор</div>
        </div>
        <div class="more"><img src="/wp-content/themes/evoc/img/more.png" alt=""></div>
    </div>
</section>


<section class="two">
    <div class="container">
        <div class="titled"><?php the_field('zag2') ?></div>
        <div class="subtitled"><?php the_field('pod2') ?></div>

            <?php the_field('table') ?>

        <div class="two-bottom">
           <span><?php the_field('under') ?></span> <div class="callme2">Вызвать эвакуатор</div>
        </div>
    </div>
</section>


<section class="three">
    <div class="container">
    <div class="titled"><?php the_field('zag3') ?></div>
        <div class="subtitled"><?php the_field('pod3') ?></div>

        <div class="hows">
            <?php
                // Check rows exists.
                if( have_rows('dey') ):

                    // Loop through rows.
                    while( have_rows('dey') ) : the_row();

                        // Load sub field value.
                        $img = get_sub_field('img');
                        $text = get_sub_field('text');

                        echo '<div class="how">
                                <img src="'.$img.'" alt="">
                                <span>'.$text.'</span>
                            </div>';
                        // Do something...

                    // End loop.
                    endwhile;

                // No value.
                else :
                    // Do something...
                endif;
                ?>


        </div>
    </div>
</section>


<section class="four">
    <div class="container">
    <div class="titled"><?php the_field('zag4') ?></div>
        <div class="subtitled"><?php the_field('pod4') ?></div>
        <p><?php the_field('kratko') ?></p>

        <div class="whys">

            <?php
                // Check rows exists.
                if( have_rows('why') ):

                    // Loop through rows.
                    while( have_rows('why') ) : the_row();

                        // Load sub field value.
                        $img = get_sub_field('img');
                        $jir = get_sub_field('jir');
                        $prost = get_sub_field('prost');

                        echo '<div class="why">
                                <img src="'.$img.'" alt="">
                                <span><strong>'.$jir.'</strong>
                                '.$prost.'</span>
                            </div>';
                        // Do something...

                    // End loop.
                    endwhile;

                // No value.
                else :
                    // Do something...
                endif;
                ?>


        </div>
    </div>
</section>


<section class="faq">
    <div class="container">
    <div class="titled"><?php the_field('zag5') ?></div>
        <div class="subtitled"><?php the_field('pod5') ?></div>

        <div class="faqs">
            <div class="faq-left">
                <ul>

                    <?php
                        // Check rows exists.
                        if( have_rows('faq') ):

                            // Loop through rows.
                            while( have_rows('faq') ) : the_row();
                            $cc++;

                                // Load sub field value.
                                $quest = get_sub_field('quest');

                                if($cc == 1) {
                                    echo '<li class="active" data-id="f'.$cc.'">'.$quest.'</li>';
                                } else {
                                    echo '<li data-id="f'.$cc.'">'.$quest.'</li>';
                                }

                            // End loop.
                            endwhile;

                        // No value.
                        else :
                            // Do something...
                        endif;
                        ?>


                </ul>
            </div>
            <div class="faq-right">

            <?php
                        // Check rows exists.
                        if( have_rows('faq') ):

                            // Loop through rows.
                            while( have_rows('faq') ) : the_row();
                            $dd++;

                                // Load sub field value.
                                $answer = get_sub_field('answer');
                                
                                if($dd== 1) {
                                    echo '<p class="f'.$dd.' active">'.$answer.'</p>';
                                } else {
                                    echo '<p class="f'.$dd.'">'.$answer.'</p>';
                                }

                            // End loop.
                            endwhile;

                        // No value.
                        else :
                            // Do something...
                        endif;
                        ?>


    

            </div>
        </div>
    </div>
</section>

<section class="five">
    <div class="container">
    <div class="titled"><?php the_field('zag6') ?></div>
        <div class="subtitled"><?php the_field('pod6') ?></div>
            <?php the_field('fulltext') ?>
        <a href="#" class="read-more">читать далее</a>

    </div>
</section>

<section class="six">
    <div class="container">
    <div class="titled"><?php the_field('zag7') ?></div>
        <div class="subtitled"><?php the_field('pod7') ?></div>
        <div class="testimonials">

            <?php

            // Check rows exists.
            if( have_rows('testimon') ):

                // Loop through rows.
                while( have_rows('testimon') ) : the_row();

                    // Load sub field value.
                    $name = get_sub_field('name');
                    $test = get_sub_field('test');

                    echo '<div class="testimonial">
                            <span>'.$name.'</span>
                            <p>'.$test.'</p>
                        </div>';
                    // Do something...

                // End loop.
                endwhile;

            // No value.
            else :
                // Do something...
            endif;
            ?>

        </div>
    </div>
</section>

<section class="seven">
    <div class="container">
    <div class="titled"><?php the_field('zag8') ?></div>
        <div class="subtitled"><?php the_field('pod8') ?></div>
    </div>
    <div class="map">
        <?php the_field('map') ?>
    </div>
</section>



<?php get_footer(); // подключаем footer.php ?>