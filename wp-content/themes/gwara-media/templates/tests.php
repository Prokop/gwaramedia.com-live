<?php
/*
	Template Name: Tests
*/

get_header() ?>


<main class="main page-short">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb d-flex align-items-center">
                        <?php if (function_exists('bcn_display_list')) {
                            bcn_display();
                        } ?>
                    </ol>
                </nav>
            </div>
        </div>
    </div>



    <section class="category">
        <div class="container">
            <div class="category-list">
                <?php
                $args = array(
                	'posts_per_page' => 6,
                    'post_type' => 'test'
                ); 
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) {
                	while ( $query->have_posts() ) {
                		$query->the_post();
                		$bgrd = get_field('background'); ?>
                        <div class="category-item">
                            <a class="category-info" href="<?php the_permalink() ?>" style="background: <?php echo $bgrd ? $bgrd : '#EBFF00' ?>;">
                                <div class="category-info-top">
                                    <span><?php esc_html_e('Test', 'gm') ?></span>
                                    <i><?php echo get_the_date() ?></i>
                                </div>

                                <h2 class="category-title"><?php the_title() ?></h2>

                                <div class="category-bottom">
                                    <span><?php esc_html_e('Author', 'gm') ?>:</span>
                                    <i><?php the_author() ?></i>
                                </div>
                            </a>
                        </div>
                	<?php }
                }
                wp_reset_postdata(); ?>
            </div>
        </div>
    </section>

    

</main>


<style>

    .category-list{
        display: flex;
        flex-wrap: wrap;
        margin: 0 -10px
    }
    
    .category-item{
        flex-basis: 33.33%;
        padding: 10px;
    }

    .category-info{
        padding: 30px 40px;
        display: block;
        box-shadow: none;
        transition: box-shadow .3s ease;
    }

    @media(min-width: 1024px){
        .category-info:hover{
            box-shadow: 0 10px 20px rgba(0,0,0,.3);
            transition: box-shadow .3s ease;
        }
    }

    .category-info-top{
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 30px;
    }

    .category-info-top span{
        font-weight: 500;
        font-size: 16px;
        letter-spacing: 0.25em;
        text-transform: uppercase;
        color: #000000;
    }

    .category-info-top i{
        font-style: normal;
        font-weight: 300;
        font-size: 12px;
        color: #000000;
    }

    .category-title{
        font-style: normal;
        font-weight: 900;
        font-size: 24px;
        line-height: 29px;
        text-transform: uppercase;
        color: #000000;
    }

    .category-bottom{
        margin-top: 50px;
        display: flex;
    }


    .category-bottom span, .category-bottom i{
        font-weight: 700;
        font-size: 16px;
        line-height: 21px;
        letter-spacing: 0.25em;
        text-transform: uppercase;
        color: #000000;
    }

    .category-bottom i{
        font-weight: 500;
        font-style: normal;
    }

 


    @media(max-width:1024px){
        .category-item{
            flex-basis: 50%;
        }

        .category-bottom{
            flex-direction: column;
        }
    }


    @media(max-width:767px){
        .category-item{
            flex-basis: 100%;
        }

        .category-info{
            padding: 30px 20px;
        }

        .category-bottom{
            margin-top: 30px;
        }

        .category-info-top{
            margin-bottom: 20px;
        }

    }


  
</style>



<?php get_footer() ?>