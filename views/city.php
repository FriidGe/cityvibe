<div id="primary" class="content-area">
    <main id="main" class="site-main">


        <article id="post-608" class="post-608 page type-page status-publish hentry">


            <div class="entry-content">
                <div class="elementor elementor-608">
                    <div class="elementor-inner">
                        <div class="elementor-section-wrap">
                            <section data-id="e24379d"
                                     class="elementor-element elementor-element-e24379d elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                     data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div data-id="b6e796c"
                                             class="elementor-element elementor-element-b6e796c elementor-column elementor-col-100 elementor-top-column"
                                             data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <section data-id="a0557c9"
                                                             class="elementor-element elementor-element-a0557c9 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section"
                                                             data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-row">
                                                                <div data-id="1180803"
                                                                     class="elementor-element elementor-element-1180803 elementor-column elementor-col-100 elementor-inner-column"
                                                                     data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div data-id="1fbe455"
                                                                                 class="elementor-element elementor-element-1fbe455 elementor-widget elementor-widget-heading"
                                                                                 data-element_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h2 class="elementor-heading-title elementor-size-default">
                                                                                        The best
                                                                                        of <?php echo $currentCity["city"] ?></h2>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section data-id="86e5482"
                                                             class="elementor-element elementor-element-86e5482 elementor-section-full_width elementor-hidden-phone elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section"
                                                             data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-row">
                                                                <div data-id="6bc29ce"
                                                                     class="elementor-element elementor-element-6bc29ce elementor-column elementor-col-100 elementor-inner-column"
                                                                     data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div data-id="b4278ea"
                                                                                 class="elementor-element elementor-element-b4278ea elementor-widget elementor-widget-divider"
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


                                                    <section data-id="92be9a9"
                                                             class="elementor-element elementor-element-92be9a9 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section"
                                                             data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-row">
                                                                <?php

                                                                    $i = 0;
                                                                    foreach ($categorys as $category) {


                                                                        echo '
                                                            <div onclick="location.href=\'' . $category["cityurl"] . '/' . $category["categoryurl"] . '\';" style="cursor: pointer;" data-id="352a8d0" class="elementor-element elementor-element-352a8d0 elementor-column elementor-col-33 elementor-inner-column" data-element_type="column">
                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div data-id="87aee12" class="elementor-element elementor-element-87aee12 elementor-widget elementor-widget-image" data-element_type="image.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-image">
                                                                                            <img width="399" height="221" 
                                                                                            src="' . $category["officialImg"] . '">		
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div data-id="85d35fa" class="elementor-element elementor-element-85d35fa elementor-widget elementor-widget-heading" data-element_type="heading.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <h2 class="elementor-heading-title elementor-size-default">
                                                                                                                                                                      
                                                                                        ' . $category["category"] . '
                                                                                        
                                                                                        </h2>		</div>
                                                                                </div>
                                                                                <div data-id="a78ae0c" class="elementor-element elementor-element-a78ae0c elementor-widget elementor-widget-heading" data-element_type="heading.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <p class="elementor-heading-title elementor-size-default">One city , two continents : never a dull moment</p>		</div>
                                                                                </div>
                                                                                <div data-id="132ea61" class="elementor-element elementor-element-132ea61 elementor-align-center elementor-widget elementor-widget-button" data-element_type="button.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-button-wrapper">
                                                                                            <a href="/' . $category["cityurl"] . '/' . $category["categoryurl"] . '/" class="elementor-button-link elementor-button elementor-size-sm" role="button">
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
                                                            
                                                            ';

                                                                        if ($i == 2) {
                                                                            $i = 0;
                                                                            echo '
                                                                                </div>
                                                                            </div>
                                                                    </section>
                                                                ';
                                                                        }
                                                                    }

                                                                ?>


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


        </article><!-- #post-608 -->

    </main><!-- #main -->
</div><!-- #primary -->