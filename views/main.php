<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <br>
        <br>
        <br>
        <br>н
        <a href="/admin">Admin Example</a>
        <a href="/paris/hotel">Hotel Slider Example</a>

        <article id="post-9" class="post-9 page type-page status-publish hentry">
            <div class="entry-content">
                <div class="elementor elementor-9">
                    <div class="elementor-inner">
                        <div class="elementor-section-wrap">
                            <section data-id="f9cf6f0"
                                     class="elementor-element elementor-element-f9cf6f0 elementor-section-full_width elementor-hidden-phone elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                     data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div data-id="05fef88"
                                             class="elementor-element elementor-element-05fef88 elementor-column elementor-col-100 elementor-top-column"
                                             data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <section data-id="f43ed9d"
                                                             class="elementor-element elementor-element-f43ed9d elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section"
                                                             data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-row">
                                                                <div data-id="1e054ba"
                                                                     class="elementor-element elementor-element-1e054ba elementor-column elementor-col-100 elementor-inner-column"
                                                                     data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div data-id="64b9d39"
                                                                                 class="elementor-element elementor-element-64b9d39 elementor-widget elementor-widget-image"
                                                                                 data-element_type="image.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="elementor-image">
                                                                                        <img width="1344"
                                                                                             height="245"
                                                                                             src="/images/banner.gif"
                                                                                             class="attachment-full size-full"
                                                                                             alt=""
                                                                                             data-pagespeed-url-hash="2222183942"
                                                                                             onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>


                            <?php


                                foreach ($regions as $region) {


                                    echo '
                                    
                                    
                                    
                                    
                                    
                                    
                                    <section data-id="4e45fdc"
                                     class="elementor-element elementor-element-4e45fdc elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                     data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div data-id="e77ed42"
                                             class="elementor-element elementor-element-e77ed42 elementor-column elementor-col-100 elementor-top-column"
                                             data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <section data-id="56ea958"
                                                             class="elementor-element elementor-element-56ea958 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section"
                                                             data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-row">
                                                                <div data-id="9ebf508"
                                                                     class="elementor-element elementor-element-9ebf508 elementor-column elementor-col-50 elementor-inner-column"
                                                                     data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div data-id="8194a10"
                                                                                 class="elementor-element elementor-element-8194a10 elementor-widget elementor-widget-heading"
                                                                                 data-element_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h2 class="elementor-heading-title elementor-size-default">
                                                                                        ' . $region["name"] . '</h2></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-id="1e84d87"
                                                                     class="elementor-element elementor-element-1e84d87 elementor-column elementor-col-50 elementor-inner-column"
                                                                     data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div data-id="fd49871"
                                                                                 class="elementor-element elementor-element-fd49871 elementor-widget elementor-widget-html"
                                                                                 data-element_type="html.default">
                                                                                <div class="elementor-widget-container">

                                                                                    <div class="xs-hide sm-block">

                                                                                        <div class="city-picker city-picker--header sm-ml4 sm-flex sm-relative cond">
                                                                                            <input type="checkbox"
                                                                                                   id="expander_' . $region["name"] . '"
                                                                                                   class="city-picker__expander hidden"
                                                                                                   name="expander_' . $region["name"] . '">
                                                                                            <label class="city-picker__label cursor-pointer xs-text-white xs-hide sm-flex caps sm-items-center"
                                                                                                   for="expander_' . $region["name"] . '">
                                                                                                <span class="xs-border-bottom  border-2 xs-border-red xs-text-6">SEE MORE</span>
                                                                                                <i class="xs-ml2 arrow-down arrow-down"></i>
                                                                                            </label>

                                                                                            <div class="city-picker__body nowrap xs-border xs-fill-white xs-p4 sm-mt2 sm-z2 sm-l0 sm-absolute sm-t100">

                                                                                                <div class="city-picker__list-container xs-text-8">';


                                    foreach ($cities as $city) {

                                        if ($city["region"] == $region["name"]) {

                                            echo '
                                                                                                                <a class="xs-block xs-my2 decoration-none caps bold" href="/' . $city["url"] . '">
                                                                                                                    ' . $city["city"] . ' 
                                                                                                                </a>
                                                                                                                ';
                                        }

                                    }


                                    echo '

                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>

                                                    <!--Линия-->

                                                    <section data-id="48e1c52"
                                                             class="elementor-element elementor-element-48e1c52 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section"
                                                             data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-row">
                                                                <div data-id="e23f7e7"
                                                                     class="elementor-element elementor-element-e23f7e7 elementor-column elementor-col-100 elementor-inner-column"
                                                                     data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div data-id="351559f"
                                                                                 class="elementor-element elementor-element-351559f elementor-widget elementor-widget-divider"
                                                                                 data-element_type="divider.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="elementor-divider">
                                                                                        <span class="elementor-divider-separator"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <!--Карусель Европа-->
                                                    <div class="owl-carousel">';


                                    foreach ($cities as $city) {

                                        if ($city["region"] == $region["name"]) {

                                            echo '
                                                                    
                                                                    
                                                                    <div class="elementor elementor-377">
                                                                <div class="elementor-inner">
                                                                    <div class="elementor-section-wrap">
                                                                    <a href="' . $city["url"] . '">
                                                                        <section data-id="8c6b925"
                                                                                 class="elementor-element elementor-element-8c6b925 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                                                                 data-element_type="section">
                                                                            <div class="elementor-container elementor-column-gap-default">
                                                                                <div class="elementor-row">
                                                                                    <div data-id="2c418ed"
                                                                                         class="elementor-element elementor-element-2c418ed elementor-column elementor-col-100 elementor-top-column"
                                                                                         data-element_type="column">
                                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">
                                                                                             
                                                                                                <section
                                                                                                        data-id="033f8ea"
                                                                                                        class="elementor-element elementor-element-033f8ea elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section"
                                                                                                        data-element_type="section">
                                                                                                       
                                                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                                                    
                                                                                                        <div class="elementor-row">
                                                                                                        
                                                                                                            <div data-id="a054344"
                                                                                                                 class="elementor-element elementor-element-a054344 elementor-column elementor-col-100 elementor-inner-column"
                                                                                                                 data-element_type="column">
                                                                                                                 
                                                                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                                                                    <div class="elementor-widget-wrap">
                                                                                                                        <div data-id="f6a35d4"
                                                                                                                             class="elementor-element elementor-element-f6a35d4 elementor-widget elementor-widget-image"
                                                                                                                             data-element_type="image.default">
                                                                                                                            <div class="elementor-widget-container">
                                                                                                                                <div class="elementor-image">
                                                                                                                                    <img src="';

                                            $cityImg = '/images/Atlanta-Downtown-Centennial-Olympic-Park-Skyline-Sunset-o0gkebkamtat3w9duip0ny9166h6q4sh7pj7boz1tu.jpg';
                                            foreach ($offimg as $img) {

                                                if ($city["id"] == $img["id"]) {
                                                    if ($img["officialImg"] != null) {
                                                        $cityImg = $img["officialImg"];
                                                        break;
                                                    }
                                                }
                                            }


                                            echo $cityImg . '">' . '






                                                                                                                                    



                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div data-id="2bd0758"
                                                                                                                             class="elementor-element elementor-element-2bd0758 elementor-widget elementor-widget-heading"
                                                                                                                             data-element_type="heading.default">
                                                                                                                            <div class="elementor-widget-container">
                                                                                                                                <h2 class="elementor-heading-title elementor-size-default">
                                                                                                                                
                                                                                                                                ' . $city["city"] . '
                                                                                                                                    
                                                                                                                                    </h2>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div data-id="afe80ef"
                                                                                                                             class="elementor-element elementor-element-afe80ef elementor-widget elementor-widget-heading"
                                                                                                                             data-element_type="heading.default">
                                                                                                                            <div class="elementor-widget-container">
                                                                                                                                <p class="elementor-heading-title elementor-size-default">
                                                                                                                                    Bikes
                                                                                                                                    ,
                                                                                                                                    bongs
                                                                                                                                    ,
                                                                                                                                    beautiful
                                                                                                                                    buildings
                                                                                                                                    and
                                                                                                                                    all
                                                                                                                                    those
                                                                                                                                    canals</p>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div data-id="3309c0d"
                                                                                                                             class="elementor-element elementor-element-3309c0d elementor-align-center elementor-widget elementor-widget-button"
                                                                                                                             data-element_type="button.default">
                                                                                                                            <div class="elementor-widget-container">
                                                                                                                                <div class="elementor-button-wrapper">
                                                                                                                                    <a href="/' . $city["url"] . '"
                                                                                                                                       class="elementor-button-link elementor-button elementor-size-sm"
                                                                                                                                       role="button"
                                                                                                                                       tabindex="0">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">MORE</span>
		</span>
                                                                                                                                    </a>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    </div>
                                                                                                                
                                                                                                            </div>
                                                                                                            
                                                                                                        </div>
                                                                                                        
                                                                                                    </div>
                                                                                                  
                                                                                                </section>
                                                                                                 
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                         </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                    
                                                                    
                                                                    ';
                                        }

                                    }


                                    echo '
                                                      
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    ';


                                }


                            ?>

                            <!--Секция назначения-->
                            <section data-id="36c5e34"
                                     class="elementor-element elementor-element-36c5e34 elementor-section-full_width elementor-hidden-phone elementor-hidden-tablet elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                     data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"
                                     data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div data-id="84aad64"
                                             class="elementor-element elementor-element-84aad64 elementor-column elementor-col-100 elementor-top-column"
                                             data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <section data-id="e5b4e0e"
                                                             class="elementor-element elementor-element-e5b4e0e elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section"
                                                             data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-row">
                                                                <div data-id="54925db"
                                                                     class="elementor-element elementor-element-54925db elementor-column elementor-col-100 elementor-inner-column"
                                                                     data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div data-id="32c5139"
                                                                                 class="elementor-element elementor-element-32c5139 elementor-widget elementor-widget-heading"
                                                                                 data-element_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h2 class="elementor-heading-title elementor-size-default">
                                                                                        All Destinations</h2></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section data-id="918ebf5"
                                                             class="elementor-element elementor-element-918ebf5 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section"
                                                             data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-row">
                                                                <div data-id="bae1473"
                                                                     class="elementor-element elementor-element-bae1473 elementor-column elementor-col-100 elementor-inner-column"
                                                                     data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div data-id="33afc9e"
                                                                                 class="elementor-element elementor-element-33afc9e elementor-widget elementor-widget-divider"
                                                                                 data-element_type="divider.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="elementor-divider">
                                                                                        <span class="elementor-divider-separator"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section data-id="e47fc20"
                                                             class="elementor-element elementor-element-e47fc20 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section"
                                                             data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-row">
                                                                <div data-id="ef67fa8"
                                                                     class="elementor-element elementor-element-ef67fa8 elementor-column elementor-col-16 elementor-inner-column"
                                                                     data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div data-id="89168b0"
                                                                                 class="elementor-element elementor-element-89168b0 elementor-position-right elementor-vertical-align-middle elementor-widget elementor-widget-image-box"
                                                                                 data-element_type="image-box.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="elementor-image-box-wrapper">
                                                                                        <figure class="elementor-image-box-img">
                                                                                            <img width="1"
                                                                                                 height="157"
                                                                                                 src="/images/delim.png"
                                                                                                 class="attachment-full size-full"
                                                                                                 alt=""
                                                                                                 data-pagespeed-url-hash="4125030982"
                                                                                                 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                                        </figure>
                                                                                        <div class="elementor-image-box-content">
                                                                                            <h3 class="elementor-image-box-title">
                                                                                                Destination 1</h3>
                                                                                            <p class="elementor-image-box-description">
                                                                                                Name will come<br>
                                                                                                Dummy Name<br>
                                                                                                Text Here</p></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-id="3a30e8c"
                                                                     class="elementor-element elementor-element-3a30e8c elementor-column elementor-col-16 elementor-inner-column"
                                                                     data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div data-id="7f888da"
                                                                                 class="elementor-element elementor-element-7f888da elementor-position-right elementor-vertical-align-middle elementor-widget elementor-widget-image-box"
                                                                                 data-element_type="image-box.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="elementor-image-box-wrapper">
                                                                                        <figure class="elementor-image-box-img">
                                                                                            <img width="1"
                                                                                                 height="157"
                                                                                                 src="/images/delim.png"
                                                                                                 class="attachment-full size-full"
                                                                                                 alt=""
                                                                                                 data-pagespeed-url-hash="4125030982"
                                                                                                 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                                        </figure>
                                                                                        <div class="elementor-image-box-content">
                                                                                            <h3 class="elementor-image-box-title">
                                                                                                Destination 1</h3>
                                                                                            <p class="elementor-image-box-description">
                                                                                                Name will come<br>
                                                                                                Dummy Name<br>
                                                                                                Text Here</p></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-id="a495774"
                                                                     class="elementor-element elementor-element-a495774 elementor-column elementor-col-16 elementor-inner-column"
                                                                     data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div data-id="464d664"
                                                                                 class="elementor-element elementor-element-464d664 elementor-position-right elementor-vertical-align-middle elementor-widget elementor-widget-image-box"
                                                                                 data-element_type="image-box.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="elementor-image-box-wrapper">
                                                                                        <figure class="elementor-image-box-img">
                                                                                            <img width="1"
                                                                                                 height="157"
                                                                                                 src="/images/delim.png"
                                                                                                 class="attachment-full size-full"
                                                                                                 alt=""
                                                                                                 data-pagespeed-url-hash="4125030982"
                                                                                                 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                                        </figure>
                                                                                        <div class="elementor-image-box-content">
                                                                                            <h3 class="elementor-image-box-title">
                                                                                                Destination 1</h3>
                                                                                            <p class="elementor-image-box-description">
                                                                                                Name will come<br>
                                                                                                Dummy Name<br>
                                                                                                Text Here</p></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-id="983489e"
                                                                     class="elementor-element elementor-element-983489e elementor-column elementor-col-16 elementor-inner-column"
                                                                     data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div data-id="5c01b9d"
                                                                                 class="elementor-element elementor-element-5c01b9d elementor-position-right elementor-vertical-align-middle elementor-widget elementor-widget-image-box"
                                                                                 data-element_type="image-box.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="elementor-image-box-wrapper">
                                                                                        <figure class="elementor-image-box-img">
                                                                                            <img width="1"
                                                                                                 height="157"
                                                                                                 src="/images/delim.png"
                                                                                                 class="attachment-full size-full"
                                                                                                 alt=""
                                                                                                 data-pagespeed-url-hash="4125030982"
                                                                                                 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                                        </figure>
                                                                                        <div class="elementor-image-box-content">
                                                                                            <h3 class="elementor-image-box-title">
                                                                                                Destination 1</h3>
                                                                                            <p class="elementor-image-box-description">
                                                                                                Name will come<br>
                                                                                                Dummy Name<br>
                                                                                                Text Here</p></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-id="3b75250"
                                                                     class="elementor-element elementor-element-3b75250 elementor-column elementor-col-16 elementor-inner-column"
                                                                     data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div data-id="8901f9b"
                                                                                 class="elementor-element elementor-element-8901f9b elementor-position-right elementor-vertical-align-middle elementor-widget elementor-widget-image-box"
                                                                                 data-element_type="image-box.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="elementor-image-box-wrapper">
                                                                                        <figure class="elementor-image-box-img">
                                                                                            <img width="1"
                                                                                                 height="157"
                                                                                                 src="/images/delim.png"
                                                                                                 class="attachment-full size-full"
                                                                                                 alt=""
                                                                                                 data-pagespeed-url-hash="4125030982"
                                                                                                 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                                        </figure>
                                                                                        <div class="elementor-image-box-content">
                                                                                            <h3 class="elementor-image-box-title">
                                                                                                Destination 1</h3>
                                                                                            <p class="elementor-image-box-description">
                                                                                                Name will come<br>
                                                                                                Dummy Name<br>
                                                                                                Text Here</p></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-id="1a99939"
                                                                     class="elementor-element elementor-element-1a99939 elementor-column elementor-col-16 elementor-inner-column"
                                                                     data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div data-id="5446a77"
                                                                                 class="elementor-element elementor-element-5446a77 elementor-position-right elementor-vertical-align-middle elementor-widget elementor-widget-image-box"
                                                                                 data-element_type="image-box.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="elementor-image-box-wrapper">
                                                                                        <figure class="elementor-image-box-img">
                                                                                            <img width="1"
                                                                                                 height="157"
                                                                                                 src="/images/delim.png"
                                                                                                 class="attachment-full size-full"
                                                                                                 alt=""
                                                                                                 data-pagespeed-url-hash="4125030982"
                                                                                                 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                                        </figure>
                                                                                        <div class="elementor-image-box-content">
                                                                                            <h3 class="elementor-image-box-title">
                                                                                                Destination 1</h3>
                                                                                            <p class="elementor-image-box-description">
                                                                                                Name will come<br>
                                                                                                Dummy Name<br>
                                                                                                Text Here</p></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section data-id="0a7be82"
                                                             class="elementor-element elementor-element-0a7be82 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section"
                                                             data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-row">
                                                                <div data-id="328d0af"
                                                                     class="elementor-element elementor-element-328d0af elementor-column elementor-col-16 elementor-inner-column"
                                                                     data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div data-id="b32913b"
                                                                                 class="elementor-element elementor-element-b32913b elementor-position-right elementor-vertical-align-middle elementor-widget elementor-widget-image-box"
                                                                                 data-element_type="image-box.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="elementor-image-box-wrapper">
                                                                                        <figure class="elementor-image-box-img">
                                                                                            <img width="1"
                                                                                                 height="157"
                                                                                                 src="/images/delim.png"
                                                                                                 class="attachment-full size-full"
                                                                                                 alt=""
                                                                                                 data-pagespeed-url-hash="4125030982"
                                                                                                 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                                        </figure>
                                                                                        <div class="elementor-image-box-content">
                                                                                            <h3 class="elementor-image-box-title">
                                                                                                Destination 1</h3>
                                                                                            <p class="elementor-image-box-description">
                                                                                                Name will come<br>
                                                                                                Dummy Name<br>
                                                                                                Text Here</p></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-id="1f2c0dc"
                                                                     class="elementor-element elementor-element-1f2c0dc elementor-column elementor-col-16 elementor-inner-column"
                                                                     data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div data-id="809c6a6"
                                                                                 class="elementor-element elementor-element-809c6a6 elementor-position-right elementor-vertical-align-middle elementor-widget elementor-widget-image-box"
                                                                                 data-element_type="image-box.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="elementor-image-box-wrapper">
                                                                                        <figure class="elementor-image-box-img">
                                                                                            <img width="1"
                                                                                                 height="157"
                                                                                                 src="/images/delim.png"
                                                                                                 class="attachment-full size-full"
                                                                                                 alt=""
                                                                                                 data-pagespeed-url-hash="4125030982"
                                                                                                 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                                        </figure>
                                                                                        <div class="elementor-image-box-content">
                                                                                            <h3 class="elementor-image-box-title">
                                                                                                Destination 1</h3>
                                                                                            <p class="elementor-image-box-description">
                                                                                                Name will come<br>
                                                                                                Dummy Name<br>
                                                                                                Text Here</p></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-id="a6c3636"
                                                                     class="elementor-element elementor-element-a6c3636 elementor-column elementor-col-16 elementor-inner-column"
                                                                     data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div data-id="c4f903b"
                                                                                 class="elementor-element elementor-element-c4f903b elementor-position-right elementor-vertical-align-middle elementor-widget elementor-widget-image-box"
                                                                                 data-element_type="image-box.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="elementor-image-box-wrapper">
                                                                                        <figure class="elementor-image-box-img">
                                                                                            <img width="1"
                                                                                                 height="157"
                                                                                                 src="/images/delim.png"
                                                                                                 class="attachment-full size-full"
                                                                                                 alt=""
                                                                                                 data-pagespeed-url-hash="4125030982"
                                                                                                 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                                        </figure>
                                                                                        <div class="elementor-image-box-content">
                                                                                            <h3 class="elementor-image-box-title">
                                                                                                Destination 1</h3>
                                                                                            <p class="elementor-image-box-description">
                                                                                                Name will come<br>
                                                                                                Dummy Name<br>
                                                                                                Text Here</p></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-id="e42a929"
                                                                     class="elementor-element elementor-element-e42a929 elementor-column elementor-col-16 elementor-inner-column"
                                                                     data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div data-id="3bf1adb"
                                                                                 class="elementor-element elementor-element-3bf1adb elementor-position-right elementor-vertical-align-middle elementor-widget elementor-widget-image-box"
                                                                                 data-element_type="image-box.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="elementor-image-box-wrapper">
                                                                                        <figure class="elementor-image-box-img">
                                                                                            <img width="1"
                                                                                                 height="157"
                                                                                                 src="/images/delim.png"
                                                                                                 class="attachment-full size-full"
                                                                                                 alt=""
                                                                                                 data-pagespeed-url-hash="4125030982"
                                                                                                 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                                        </figure>
                                                                                        <div class="elementor-image-box-content">
                                                                                            <h3 class="elementor-image-box-title">
                                                                                                Destination 1</h3>
                                                                                            <p class="elementor-image-box-description">
                                                                                                Name will come<br>
                                                                                                Dummy Name<br>
                                                                                                Text Here</p></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-id="8f2a848"
                                                                     class="elementor-element elementor-element-8f2a848 elementor-column elementor-col-16 elementor-inner-column"
                                                                     data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div data-id="62ab379"
                                                                                 class="elementor-element elementor-element-62ab379 elementor-position-right elementor-vertical-align-middle elementor-widget elementor-widget-image-box"
                                                                                 data-element_type="image-box.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="elementor-image-box-wrapper">
                                                                                        <figure class="elementor-image-box-img">
                                                                                            <img width="1"
                                                                                                 height="157"
                                                                                                 src="/images/delim.png"
                                                                                                 class="attachment-full size-full"
                                                                                                 alt=""
                                                                                                 data-pagespeed-url-hash="4125030982"
                                                                                                 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                                        </figure>
                                                                                        <div class="elementor-image-box-content">
                                                                                            <h3 class="elementor-image-box-title">
                                                                                                Destination 1</h3>
                                                                                            <p class="elementor-image-box-description">
                                                                                                Name will come<br>
                                                                                                Dummy Name<br>
                                                                                                Text Here</p></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-id="db9051e"
                                                                     class="elementor-element elementor-element-db9051e elementor-column elementor-col-16 elementor-inner-column"
                                                                     data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div data-id="9cfd764"
                                                                                 class="elementor-element elementor-element-9cfd764 elementor-position-right elementor-vertical-align-middle elementor-widget elementor-widget-image-box"
                                                                                 data-element_type="image-box.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="elementor-image-box-wrapper">
                                                                                        <figure class="elementor-image-box-img">
                                                                                            <img width="1"
                                                                                                 height="157"
                                                                                                 src="/images/delim.png"
                                                                                                 class="attachment-full size-full"
                                                                                                 alt=""
                                                                                                 data-pagespeed-url-hash="4125030982"
                                                                                                 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                                        </figure>
                                                                                        <div class="elementor-image-box-content">
                                                                                            <h3 class="elementor-image-box-title">
                                                                                                Destination 1</h3>
                                                                                            <p class="elementor-image-box-description">
                                                                                                Name will come<br>
                                                                                                Dummy Name<br>
                                                                                                Text Here</p></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!--Секция назначения для мобил и планшетов-->
                            <section data-id="d5d7772"
                                     class="elementor-element elementor-element-d5d7772 elementor-section-full_width elementor-hidden-desktop elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                     data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"
                                     data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div data-id="1f69aab"
                                             class="elementor-element elementor-element-1f69aab elementor-column elementor-col-100 elementor-top-column"
                                             data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <section data-id="322cc21"
                                                             class="elementor-element elementor-element-322cc21 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section"
                                                             data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-row">
                                                                <div data-id="4a5e1ea"
                                                                     class="elementor-element elementor-element-4a5e1ea elementor-column elementor-col-100 elementor-inner-column"
                                                                     data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div data-id="ee3187c"
                                                                                 class="elementor-element elementor-element-ee3187c elementor-widget elementor-widget-heading"
                                                                                 data-element_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h2 class="elementor-heading-title elementor-size-default">
                                                                                        All Destinations in
                                                                                        Europe</h2></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section data-id="0f870ad"
                                                             class="elementor-element elementor-element-0f870ad elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section"
                                                             data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-row">
                                                                <div data-id="ea26376"
                                                                     class="elementor-element elementor-element-ea26376 elementor-column elementor-col-33 elementor-inner-column"
                                                                     data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div data-id="33c0b4a"
                                                                                 class="elementor-element elementor-element-33c0b4a elementor-widget elementor-widget-heading"
                                                                                 data-element_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h5 class="elementor-heading-title elementor-size-default">
                                                                                        Destination 1 </h5></div>
                                                                            </div>
                                                                            <div data-id="9d61588"
                                                                                 class="elementor-element elementor-element-9d61588 elementor-widget elementor-widget-heading"
                                                                                 data-element_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h5 class="elementor-heading-title elementor-size-default">
                                                                                        Destination 1 </h5></div>
                                                                            </div>
                                                                            <div data-id="3f0c3f5"
                                                                                 class="elementor-element elementor-element-3f0c3f5 elementor-widget elementor-widget-heading"
                                                                                 data-element_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h5 class="elementor-heading-title elementor-size-default">
                                                                                        Destination 1 </h5></div>
                                                                            </div>
                                                                            <div data-id="317596d"
                                                                                 class="elementor-element elementor-element-317596d elementor-widget elementor-widget-heading"
                                                                                 data-element_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h5 class="elementor-heading-title elementor-size-default">
                                                                                        Destination 1 </h5></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-id="e90415c"
                                                                     class="elementor-element elementor-element-e90415c elementor-column elementor-col-33 elementor-inner-column"
                                                                     data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div data-id="554dfb3"
                                                                                 class="elementor-element elementor-element-554dfb3 elementor-widget elementor-widget-heading"
                                                                                 data-element_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h5 class="elementor-heading-title elementor-size-default">
                                                                                        Destination 1 </h5></div>
                                                                            </div>
                                                                            <div data-id="5739cde"
                                                                                 class="elementor-element elementor-element-5739cde elementor-widget elementor-widget-heading"
                                                                                 data-element_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h5 class="elementor-heading-title elementor-size-default">
                                                                                        Destination 1 </h5></div>
                                                                            </div>
                                                                            <div data-id="1d7fda7"
                                                                                 class="elementor-element elementor-element-1d7fda7 elementor-widget elementor-widget-heading"
                                                                                 data-element_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h5 class="elementor-heading-title elementor-size-default">
                                                                                        Destination 1 </h5></div>
                                                                            </div>
                                                                            <div data-id="f29573b"
                                                                                 class="elementor-element elementor-element-f29573b elementor-widget elementor-widget-heading"
                                                                                 data-element_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h5 class="elementor-heading-title elementor-size-default">
                                                                                        Destination 1 </h5></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-id="d9d9f63"
                                                                     class="elementor-element elementor-element-d9d9f63 elementor-column elementor-col-33 elementor-inner-column"
                                                                     data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div data-id="3d5793e"
                                                                                 class="elementor-element elementor-element-3d5793e elementor-widget elementor-widget-heading"
                                                                                 data-element_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h5 class="elementor-heading-title elementor-size-default">
                                                                                        Destination 1 </h5></div>
                                                                            </div>
                                                                            <div data-id="ed6bc3e"
                                                                                 class="elementor-element elementor-element-ed6bc3e elementor-widget elementor-widget-heading"
                                                                                 data-element_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h5 class="elementor-heading-title elementor-size-default">
                                                                                        Destination 1 </h5></div>
                                                                            </div>
                                                                            <div data-id="e675678"
                                                                                 class="elementor-element elementor-element-e675678 elementor-widget elementor-widget-heading"
                                                                                 data-element_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h5 class="elementor-heading-title elementor-size-default">
                                                                                        Destination 1 </h5></div>
                                                                            </div>
                                                                            <div data-id="677f88d"
                                                                                 class="elementor-element elementor-element-677f88d elementor-widget elementor-widget-heading"
                                                                                 data-element_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h5 class="elementor-heading-title elementor-size-default">
                                                                                        Destination 1 </h5></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div><!-- .entry-content -->


        </article><!-- #post-9 -->

    </main><!-- #main -->
</div><!-- #primary -->