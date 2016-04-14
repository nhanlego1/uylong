<!--.page -->
<div role="document" class="page">

    <!--.l-header -->
    <header role="banner" class="l-header">

        <?php if ($top_bar): ?>
            <!--.top-bar -->
            <?php if ($top_bar_classes): ?>
                <div class="<?php print $top_bar_classes; ?>">
                <?php endif; ?>
                <nav class="top-bar" data-topbar <?php print $top_bar_options; ?>>
                    <ul class="title-area">
                        <li class="name"><h1><?php print $linked_site_name; ?></h1></li>
                        <li class="toggle-topbar menu-icon">
                            <a href="#"><span><?php print $top_bar_menu_text; ?></span></a></li>
                    </ul>
                    <section class="top-bar-section">

                        <?php if ($top_bar_main_menu) : ?>
                            <?php print $top_bar_main_menu; ?>
                        <?php endif; ?>
                        <?php if ($top_bar_secondary_menu) : ?>
                            <?php print $top_bar_secondary_menu; ?>
                        <?php endif; ?>
                    </section>
                </nav>
                <?php if ($top_bar_classes): ?>
                </div>
            <?php endif; ?>
            <!--/.top-bar -->
        <?php endif; ?>

        <!-- Title, slogan and menu -->

        <?php if ($alt_header): ?>
            <section class="row header-content <?php print $alt_header_classes; ?>">
                <div class="small-4 medium-3 large-4 columns">
                    <?php if ($linked_logo): print $linked_logo;
                    endif; ?>
                </div>

    <?php if (!empty($page['header'])): ?>
                    <!--.l-header-region -->
                    <div class="l-header-region small-8 medium-9 large-8 columns">
        <?php print render($page['header']); ?>
                    </div>
                    <!--/.l-header-region -->
    <?php endif; ?>

            </section>
<?php endif; ?>
        <!-- End title, slogan and menu -->



    </header>
    <!--/.l-header -->

<?php if (!empty($page['featured'])): ?>
        <!--.l-featured -->
        <section class="l-featured">
            <div class="row">
                <div class="columns">
    <?php print render($page['featured']); ?>
                </div>
            </div>
        </section>
        <!--/.l-featured -->
    <?php endif; ?>
<?php if (!empty($page['banner'])): ?>
        <!--.l-featured -->
        <section class="l-banner">
            <div class="row">
                <div class="columns">
    <?php print render($page['banner']); ?>
                </div>
            </div>
        </section>
        <!--/.l-featured -->
    <?php endif; ?>

<?php if ($messages && !$zurb_foundation_messages_modal): ?>
        <!--.l-messages -->
        <section class="l-messages row">
            <div class="columns">
    <?php if ($messages): print $messages;
    endif; ?>
            </div>
        </section>
        <!--/.l-messages -->
    <?php endif; ?>

<?php if (!empty($page['help'])): ?>
        <!--.l-help -->
        <section class="l-help row">
            <div class="columns">
    <?php print render($page['help']); ?>
            </div>
        </section>
        <!--/.l-help -->
<?php endif; ?>

    <!--.l-main -->
    <main role="main" class="row l-main">
        <!-- .l-main region -->
        <div class="<?php print $main_grid; ?> main columns">
                <?php if (!empty($page['highlighted'])): ?>
                <div class="highlight panel callout">
                <?php print render($page['highlighted']); ?>
                </div>
<?php endif; ?>

            <a id="main-content"></a>

            <?php if ($breadcrumb): print $breadcrumb;
            endif; ?>

            <?php if (!empty($tabs)): ?>
                <?php print render($tabs); ?>
                <?php if (!empty($tabs2)): print render($tabs2);
                endif; ?>
                <?php endif; ?>

            <?php if ($action_links): ?>
                <ul class="action-links">
                <?php print render($action_links); ?>
                </ul>
<?php endif; ?>

        <?php print render($page['content']); ?>
        </div>
        <!--/.l-main region -->

        <?php if (!empty($page['sidebar_first'])): ?>
            <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
            <?php print render($page['sidebar_first']); ?>
            </aside>
            <?php endif; ?>

        <?php if (!empty($page['sidebar_second'])): ?>
            <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar">
    <?php print render($page['sidebar_second']); ?>
            </aside>
    <?php endif; ?>
    </main>
    <!--/.l-main -->

            <?php if (!empty($page['triptych_first']) || !empty($page['triptych_middle']) || !empty($page['triptych_last'])): ?>
        <!--.triptych-->
        <section class="l-triptych row">
            <div class="triptych-first medium-4 columns">
    <?php print render($page['triptych_first']); ?>
            </div>
            <div class="triptych-middle medium-4 columns">
    <?php print render($page['triptych_middle']); ?>
            </div>
            <div class="triptych-last medium-4 columns">
        <?php print render($page['triptych_last']); ?>
            </div>
        </section>
        <!--/.triptych -->
        <?php endif; ?>

            <?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn']) || !empty($page['footer_thirdcolumn']) || !empty($page['footer_fourthcolumn'])): ?>
        <!--.footer-columns -->
        <section class="row l-footer-columns">
            <?php if (!empty($page['footer_firstcolumn'])): ?>
                <div class="footer-first medium-3 columns">
                    <?php print render($page['footer_firstcolumn']); ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($page['footer_secondcolumn'])): ?>
                <div class="footer-second medium-3 columns">
                    <?php print render($page['footer_secondcolumn']); ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($page['footer_thirdcolumn'])): ?>
                <div class="footer-third medium-3 columns">
                    <?php print render($page['footer_thirdcolumn']); ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($page['footer_fourthcolumn'])): ?>
                <div class="footer-fourth medium-3 columns">
            <?php print render($page['footer_fourthcolumn']); ?>
                </div>
    <?php endif; ?>
        </section>
        <!--/.footer-columns-->
        <?php endif; ?>

    <!--.l-footer -->
    <footer class="l-footer panel" role="contentinfo">
        <?php if (!empty($page['footer'])): ?>
            <div class="footer columns">
            <?php print render($page['footer']); ?>
            </div>
<?php endif; ?>

        <?php if ($site_name) : ?>
            <div class="copyright columns">
                &copy; <?php print date('Y') . ' ' . $site_name . ' ' . t('All rights reserved.'); ?>
            </div>
    <?php endif; ?>
    </footer>
    <!--/.l-footer -->

<?php if ($messages && $zurb_foundation_messages_modal): print $messages;
endif; ?>
</div>
<!--/.page -->
