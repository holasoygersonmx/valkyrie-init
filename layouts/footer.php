<?php defined('_EXEC') or die; ?>

        <section data-ajax-loader>
            <div></div>
        </section>
        <footer class="p-tb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <p class="text-center text-md-left">Copyright © <strong><?php echo Configuration::$web_page; ?></strong> <br data-mobile-block> {$lang.website_development_by} <a href="https://codemonkey.com.mx" target="_blank">Code Monkey</a>.</p>
                    </div>
                    <div class="col-12 col-md-6 text-center text-md-right">
                        <a href="<?php echo Configuration::$vars['rrss']['facebook']['url']; ?>" class="m-lr-10 m-lr-md-0" target="_blank"><i class="fa-brands fa-facebook-square"></i></a>
                        <a href="<?php echo Configuration::$vars['rrss']['instagram']['url']; ?>" class="m-lr-10 m-lr-md-0 m-l-md-20" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="<?php echo Configuration::$vars['rrss']['whatsapp']['url']; ?>" class="m-lr-10 m-lr-md-0 m-l-md-20" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="{$path.js}jquery-3.4.1.min.js"></script>
        <script src="https://cdn.codemonkey.com.mx/js/valkyrie.js"></script>
        <script src="{$path.js}scripts.js?v=1.0"></script>
        <script src="https://kit.fontawesome.com/1a4cb37d83.js" crossorigin="anonymous"></script>
        {$dependencies.js}
        {$dependencies.other}
    </body>
</html>
