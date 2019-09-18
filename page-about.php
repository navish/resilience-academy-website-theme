<?php
wp_enqueue_style('about-page', get_template_directory_uri() . '/css/about.css');
get_header();

?>

<section id="banner">
    <div class="section-wrapper">
        <h2>
            <small>OUR FOCUS</small>
            Why <a href="#">Resilience?</a>
        </h2>

        <div class="image">
            <img src="https://images.unsplash.com/photo-1532251632967-758f04b1c338?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="">
        </div>

        <div id="whyResilience" class="layout">
            <div class="text">
                <p>
                    Over the next 20 years, 95% of global urban growth will occur
                    in developing and emerging countries.
                </p>
                <p>
                    This will dramatically increase the concentration of people
                    and assets exposed to climate risk.
                </p>
                <p>
                    There is a need for improved action globally to identify,
                    reduce, and respond to risk.
                </p>
                <p>
                    This begins with education.
                </p>
            </div>

            <div class="image">
                <img src="https://images.unsplash.com/photo-1554208396-10c024d76fc2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="">
            </div>
        </div>
    </div>
</section>

<section id="aboutResilience">
    <div class="section-wrapper">
        <div>
            <h2>The Resilience Academy</h2>
            <p>
                We equip young people with the
                <span class="text-italic">tools, knowledge, and skills </span>
                to address the world’s most pressing urban challenges and
                <span class="text-italic">ensure resilient urban development</span>.
            </p>

            <p>
                An initiative led by dedicated faculty of five academic institutions: Ardhi University (Tanzania),
                University of Dar es Salaam (Tanzania), Sokoine University of Agriculture (Tanzania), State University of Zanzibar (Zanzibar),
                and University of Turku (Finland)Supported by the Tanzania Urban Resilience Program (TURP), a partnership between the
                Government of Tanzania, the World Bank, and the UK Department for International Development
            </p>

            <div id="moreAbout" class="layout center-justified wrap">
                <div>
                    <div class="decorated-inset-box blue-bg">
                        <div>
                            <h3>Team</h3>
                            <p>Get to know us</p>
                            <a href="#" class="button">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="decorated-inset-box green-bg">
                        <div>
                            <h3>Institutions</h3>
                            <p>Meet our members</p>
                            <a href="#" class="button">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="decorated-inset-box yellow-bg">
                        <div>
                            <h3>Partners</h3>
                            <p>Meet our partners</p>
                            <a href="#" class="button">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="methods">
    <div class="section-wrapper position-relative">
        <div class="overflow-hidden" style="background: #d2d2d2;">
            <h1 class="section-subtitle text-center">OUR METHODS</h1>
            <div id="methodTabList">
                <div class="layout center">
                    <a href="#" onclick="moveMethodsTo(event, 0)" class="active method-tab flex text-center">1. DIGITAL</a>
                    <a href="#" onclick="moveMethodsTo(event, 1)" class="method-tab flex text-center">2. SKILLS</a>
                    <a href="#" onclick="moveMethodsTo(event, 2)" class="method-tab flex text-center">3. ACTION</a>
                    <a href="#" onclick="moveMethodsTo(event, 3)" class="method-tab flex text-center">4. UNDERSTANDING</a>
                    <a href="#" onclick="moveMethodsTo(event, 4)" class="method-tab flex text-center">5. SUSTAINABILITY</a>
                </div>
            </div>
            <div id="methodsScroller" class="layout center">
                <div class="method-item layout">
                    <h2>
                        Using digital tools which are open,
                        affordable and locally attainable to
                        collect risk information.
                    </h2>

                    <div class="image">
                        <img src="https://images.unsplash.com/photo-1436918671239-a2b72ace4880?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="">
                    </div>
                </div>
                <div class="method-item layout">
                    <h2>
                        Using available skillsets which are open,
                        affordable and locally attainable to
                        collect risk information.
                    </h2>

                    <div class="image">
                        <img src="https://images.unsplash.com/photo-1436918671239-a2b72ace4880?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="">
                    </div>
                </div>
                <div class="method-item layout">
                    <h2>
                        Make prompt action for tools which are open,
                        affordable and locally attainable to
                        collect risk information.
                    </h2>

                    <div class="image">
                        <img src="https://images.unsplash.com/photo-1436918671239-a2b72ace4880?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="">
                    </div>
                </div>
                <div class="method-item layout">
                    <h2>
                        Create acute understanding of tools which are open,
                        affordable and locally attainable to
                        collect risk information.
                    </h2>

                    <div class="image">
                        <img src="https://images.unsplash.com/photo-1436918671239-a2b72ace4880?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="">
                    </div>
                </div>
                <div class="method-item layout">
                    <h2>
                        Ensure long term sustainability using tools which are open,
                        affordable and locally attainable to
                        collect risk information.
                    </h2>

                    <div class="image">
                        <img src="https://images.unsplash.com/photo-1436918671239-a2b72ace4880?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div id="methodsMover" class="position-absolute pin-all pointer-events-none layout center justified">
            <button onclick="moveMethods(-1)" class="action-button pointer-events-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
            </button>

            <button onclick="moveMethods(1)" class="action-button pointer-events-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </button>
        </div>
    </div>
</section>

<script>
    var methodsScroller = document.querySelector("#methodsScroller");
    var methodsSlideIndex = 0;
    var methodItems = document.querySelectorAll('.method-item');
    var methodTabs = document.querySelectorAll('.method-tab');
    function moveMethods(dir){
        var newIndex = methodsSlideIndex + dir;
        var canGoForward = newIndex >= 0 && dir === -1;
        var canGoBack = newIndex < methodItems.length && dir === 1;

        if(canGoBack || canGoForward){
            doMethodsMovement(newIndex);
        }
    }

    function doMethodsMovement(newIndex){
        methodsSlideIndex = newIndex;
        methodsScroller.style.transform = "translateX("+(-100 * newIndex)+"%)";

        document.querySelector('.method-tab.active').classList.remove('active');
        methodTabs[newIndex].classList.add('active');
    }

    function moveMethodsTo(e, index){
        e.preventDefault();
        doMethodsMovement(index);
    }
</script>

<?php get_footer(); ?>