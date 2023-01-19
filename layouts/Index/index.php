<?php

defined('_EXEC') or die;

$this->dependencies->add(['css', '{$path.css}Index/index.css?v=1.0']);
$this->dependencies->add(['js', '{$path.js}Index/index.js?v=1.0']);
$this->dependencies->add(['css', '{$path.plugins}owl_carousel/assets/owl.carousel.min.css']);
$this->dependencies->add(['css', '{$path.plugins}owl_carousel/assets/owl.theme.default.min.css']);
$this->dependencies->add(['js', '{$path.plugins}owl_carousel/owl.carousel.min.js']);
$this->dependencies->add(['other', '<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLCea8Q6BtcTHwY3YFCiB0EoHE5KnsMUE&callback=map"></script>']);

?>

<main>
    <section class="hth-100vh">
        <div id="home-carousel" class="owl-carousel owl-theme hth-100vh">
            <div class="item hth-100vh" style="background-color:#E91E63;"></div>
            <div class="item hth-100vh" style="background-color:#ec407a;"></div>
            <div class="item hth-100vh" style="background-color:#9c27b0;"></div>
            <div class="item hth-100vh" style="background-color:#ab47bc;"></div>
            <div class="item hth-100vh" style="background-color:#673ab7;"></div>
            <div class="item hth-100vh" style="background-color:#7e57c2;"></div>
        </div>
    </section>
    <section id="map" class="hth-100vh" data-title="<?php echo Configuration::$web_page; ?>" data-lat="<?php echo Configuration::$vars['map']['lat']; ?>" data-lng="<?php echo Configuration::$vars['map']['lng']; ?>" data-zoom="18"></section>
    <section class="p-t-50">
        <div class="container">
            <form name="contact">
                <div class="row">
                    <div class="col-12 m-b-md-20">
                        <div class="label">
                            <label>
                                <h6 class="m-b-5">{$lang.fullname}</h6>
                                <input type="text" name="fulname">
                            </label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 m-b-md-20">
                        <div class="label">
                            <label>
                                <h6 class="m-b-5">{$lang.email}</h6>
                                <input type="email" name="email">
                            </label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 m-b-md-20">
                        <div class="label">
                            <label>
                                <h6 class="m-b-5">{$lang.phone}</h6>
                                <input type="text" name="phone">
                            </label>
                        </div>
                    </div>
                    <div class="col-12 m-b-20">
                        <div class="label">
                            <label>
                                <h6 class="m-b-5">{$lang.message}</h6>
                                <textarea name="message"></textarea>
                            </label>
                        </div>
                    </div>
                    <div class="col-12 text-right">
                        <button type="submit" class="btn btn-primary">{$lang.contact}</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>
