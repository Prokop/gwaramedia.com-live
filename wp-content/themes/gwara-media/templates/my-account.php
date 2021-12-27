<?php // Template name: My account ?>
<?php get_header() ?>
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
<div class="container">
    <div class="row bordered-inputs">
        <div class="col-12 mb-5 pb-lg-5">
            <h1><?php the_title() ?></h1>
        </div>
        <div class="col-12 col-xl-3 mb-4 mb-xl-0">
            <nav class="account-navbar">
                <ul class="account-navbar-list">
                    <li class="account-navbar-list-item account-navbar-list-item--active"><a href="<?php echo get_permalink(MY_ACCOUNT) ?>"><?php esc_html_e('Personal data','gm');?></a></li>
                    <li class="account-navbar-list-item"><a href="<?php echo wp_logout_url(home_url()) ?>"><?php esc_html_e('Logout','gm');?></a></li>
                </ul>
            </nav>
        </div>
        <div class="col-12 col-xl-9">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <?php $user = get_userdata(get_current_user_id()); ?>
                    <form id="personal-data" class="personal-data">
                        <?php wp_nonce_field('ajax-update-user-nonce', 'user-data-security', true, true); ?>
                        <div class="input-inner">
                            <input type="text" name="first_name" placeholder="<?php esc_html_e('First name','gm');?>"  required value="<?php echo $user->first_name ?>">
                        </div>
                        <div class="input-inner">
                            <input type="text" name="last_name" placeholder="<?php esc_html_e('Last name','gm');?>" required value="<?php echo $user->last_name ?>">
                        </div>
                        <div class="input-inner">
                            <input type="email" name="email" placeholder="<?php esc_html_e('E-mail','gm');?>" required value="<?php echo $user->user_email ?>">
                        </div>
                        <div class="input-inner">
                            <input type="tel" name="phone" placeholder="<?php esc_html_e('Phone','gm');?>" value="<?php the_field('phone', 'user_'.$user->ID) ?>">
                        </div>
                        <div class="input-inner">
                            <input type="text" name="nova_poshta" placeholder="<?php esc_html_e('Nova poshta','gm');?>" value="<?php the_field('nova_poshta', 'user_'.$user->ID) ?>">
                        </div>
                        <div class="input-inner">
                            <input type="password" name="password" placeholder="<?php esc_html_e('New password','gm');?>">
                        </div>
                        <div class="input-inner">
                            <p class="status"></p>
                        </div>
                        <button class="button button--yellow" type="submit"><?php esc_html_e('Save','gm');?></button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>
