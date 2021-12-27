<?php // Template name: About ?>
<?php get_header() ?>

<div class="page article--page">
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
    <article class="article">
        <div class="container">
            <div class="article-body">
                <main>
                    <div class="text-content mb-md-5 pb-3 px-md-0">
                        <h1><?php the_title() ?></h1>
                    </div>
                    <div class="text-content-wrapper">
                        <div class="text-content">
                            <?php the_field('block_1_text') ?>
                            <?php if ($contacts = get_field('block_2_contacts')) { ?>
                                <div class="contact mt-4 mt-lg-5 pt-lg-5 pt-2">
                                    <div class="as-h3 text-lg--center">
                                        <h2><?php the_field('block_2_title'); ?></h2>
                                    </div>
                                    <ul class="mt-5">
                                        <?php foreach ($contacts as $contact) { ?>
                                            <li class="contact-item d-md-flex justify-content-between row">
                                                <div class="col-12 col-lg-7 pb-2 pb-lg-0">
                                                    <b><?php echo $contact['key'] ?></b></div>
                                                <?php if ($contact['values']) { ?>
                                                <div class="col-12 col-lg-5">
                                                    <?php foreach ($contact['values'] as $index => $value) { 
                                                        if ($i > 0) {
                                                            echo '<br>';
                                                        }
                                                        ?>
                                                        <span><?php echo $value['value'] ?></span>
                                                    <?php } ?>
                                                </div>
                                                <?php } ?>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            <?php } ?>
                        </div>
                        <?php if ($team = get_field('block_3_team')) { ?>
                            <div class="team mt-5 pt-lg-5">
                                <div class="as-h3 text-md--center">
                                    <h2><?php the_field('block_3_title'); ?></h2>
                                </div>
                                <ul class="members-list row mt-3 pt-3">
                                    <?php foreach ($team as $employee) { ?>
                                        <li class="col-12 col-lg-6 mb-4 pb-2">
                                            <div class="member clearfix text--left">
                                                <?php if ($img = $employee['photo']) { ?>
                                                    <div class="member-avatar">
                                                        <?php echo wp_get_attachment_image($img, 'medium') ?>
                                                    </div>
                                                <?php } ?>
                                                <h3><?php echo $employee['key'] ?></h3>
                                                <p><?php echo $employee['value'] ?></p>
                                            </div>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        <?php } ?>
                        <?php if ($b4 = get_field('block_4_text')) { ?>
                            <div class="text-content mt-5 pt-lg-5 pb-5">
                                <div class="as-h3 text--center">
                                    <h2><?php the_field('block_4_title'); ?></h2>
                                </div>
                                <?php echo $b4 ?>
                            </div>
                        <?php } ?>
                    </div>
                </main>
            </div>
        </div>
    </article>
</div>

<?php get_footer() ?>
