<?php get_header();
$bgrd = get_field('background');?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb d-flex align-items-center">
                    <?php if (function_exists('bcn_display_list')) {
                        bcn_display();
                    } ?>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<section class="section-quiz">
    <div class="container-fluid container-md">
        <div class="quiz-overlay"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/test-overlay.svg"
                                       alt="alt"></div>
        <div class="row">
            <div class="col-12 col-lg-8 col-xl-6 mx-auto">
                <form class="quiz">
                    <div class="quiz-wrapper bg--yellow d-flex flex-wrap" style="background: <?php echo $bgrd ? $bgrd : '#EBFF00' ?>;">
                        <div class="quiz-preview d-none" id="quiz-preview">
                            <div class="quiz-preview--heading row">
                                <div class="col-12 col-md-8 pr-md-4">
                                    <h1><?php the_title() ?></h1>
                                </div>
                                <div class="col-12 col-md-4 text-md--right mt-3 mt-md-0">
                                    <p><?php esc_html_e('Test', 'gm'); ?></p>
                                    <small><?php echo get_the_date() ?></small>
                                </div>
                            </div>
                            <div class="quiz-preview--body">
                                <?php the_content() ?>
                                <div class="row no-gutters">
                                    <div class="col-12 d-flex justify-content-center">
                                        <button class="button button--rose" type="button"
                                                id="quiz-start"><?php esc_html_e('Start test', 'gm'); ?></button>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-preview--footer">
                                <div class="text-sm--center">
                                    <div class="author"><span><?php esc_html_e('Author', 'gm'); ?>
                                            :</span><span><?php the_author() ?></span></div>
                                    <div class="mt-4">
                                        <div class="share py-0">
                                            <div class="icon icon--share">
                                                <svg preserveAspectRatio="none">
                                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.symbol.svg#share"></use>
                                                </svg>
                                            </div>
                                            <?php echo do_shortcode('[addtoany]') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="quiz-body" id="quiz-body">
                            <?php if ($tests = get_field('questions')) { ?>
                                <ul class="questions-list">
                                    <?php foreach ($tests as $index => $test) {
                                        $answer_id = '';
                                        foreach ($test['answers'] as $a_index => $item) {
                                            if ($item['is_answer']) {
                                                $answer_id = $index . '_' . $a_index;
                                            }
                                        }
                                        ?>
                                        <li class="question">
                                            <div class="quiz-question" data-ca="<?php echo $answer_id ?>"
                                                 id="q-<?php echo $index ?>">
                                                <p>
                                                    <?php echo $test['question'] ?>
                                                </p>
                                                <fieldset>
                                                    <?php foreach ($test['answers'] as $a_index => $item) { ?>
                                                        <div class="field-group">
                                                            <input type="radio" hidden
                                                                   value="<?php echo $index . '_' . $a_index ?>"
                                                                   name="q-<?php echo $index ?>"
                                                                   id="a-<?php echo $index . $a_index ?>">
                                                            <label for="a-<?php echo $index . $a_index ?>"><?php echo $item['answer'] ?></label>
                                                            <?php if (!$item['is_answer']) { ?>
                                                                <p><?php echo $item['error_text'] ?></p>
                                                            <?php } ?>
                                                        </div>
                                                    <?php } ?>
                                                </fieldset>
                                                <button class="button button--rose next-question" type="button">
                                                    <span><?php esc_html_e('next', 'gm'); ?></span><img
                                                            src="<?php echo get_template_directory_uri(); ?>/img/svg/btn-arrow.svg"
                                                            alt="стрілка"></button>
                                            </div>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </div>
                        <div class="quiz-result text--center d-none" id="quiz-result">
                            <h3><?php esc_html_e('Conclusion from the test', 'gm'); ?></h3>
                            <p><?php _e('You answered <span id="current">0</span>of<span id="total">0</span> questions', 'gm'); ?></p>
                            <div id="test-message"></div>
                            <div class="d-flex justify-content-center">
                                <button class="button button--rose reset-quiz" type="button"
                                        id="reset-quiz"><?php esc_html_e('repeat', 'gm'); ?>
                                </button>
                            </div>
                            <div class="quiz-preview--footer">
                                <div class="text-sm--center">
                                    <div class="author"><span><?php esc_html_e('Author', 'gm'); ?>
                                            :</span><span><?php the_author() ?></span></div>
                                    <div class="mt-4">
                                        <div class="share py-0">
                                            <div class="icon icon--share">
                                                <svg preserveAspectRatio="none">
                                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.symbol.svg#share"></use>
                                                </svg>
                                            </div>
                                            <?php echo do_shortcode('[addtoany]') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>
