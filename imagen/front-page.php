<?php
get_header();
?>

<div id="hero" class="section">
    <h1>The fastest way to 
        <br /> edit photos</h1>
    <p class="grey-text">
        AI-powered batch photo editing <span>desktop app</span> for <span>Adobe Lightroom Classic</span> workflows
    </p> 
    <p class="text-small grey-text">
        <strong>1,000 free AI edits included,</strong> No credit card needed! 
    </p>

    <div id="hero-content">

        <div class="form-container">
            <form>
                <div class="form-row">
                    <input placeholder="First Name" type="text" />
                </div>
                <div class="form-row">
                    <input placeholder="Last Name" type="text" />
                </div>
                <div class="form-row">
                    <input placeholder="Email" type="text" />
                </div>
                <div class="form-row term-row">
                    <input type="checkbox" />
                    <div>
                        I Agree to the Terms of use
                    </div>

                </div>
                <div class="form-row">
                    <button class="button">Free Download</button>
                </div>
            </form>
        </div>
        <div class="video-container">
            <div class="video-wrapper">
                <video class="responsive-video">
                    <source src="<?= get_template_directory_uri() ?>/assets/video/homepage-video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>

    </div>
</div>
<div id="featured">
    <div>
        <div class="grey-text">
            featured In
        </div>
        <i class="arrow-down"></i>
    </div>
    <div id="logos">
        <div>
            <img src="<?= get_template_directory_uri() ?>/assets/img/logos/shotkit.png" />
        </div>
        <div>
            <img src="<?= get_template_directory_uri() ?>/assets/img/logos/dpreview.png" />
        </div>
        <div>
            <img src="<?= get_template_directory_uri() ?>/assets/img/logos/shotkit.png" />
        </div>
        <div>
            <img src="<?= get_template_directory_uri() ?>/assets/img/logos/dpreview.png" />
        </div>
        <div>
            <img src="<?= get_template_directory_uri() ?>/assets/img/logos/petapixel.png" />
        </div>
    </div>
</div>
<div id="videoBig" class="section bg-light-grey">

    <div class="wrapper">
        <h2 class="text-white">
            What is ImagenAI?
        </h2>
        <div class="video-wrapper video-wrapper-2">
            <iframe class="responsive-video" src="https://www.youtube.com/embed/uxSQTkk9gtY" title="YouTube video player" frameborder="0"></iframe>
        </div>

    </div>

</div>

<div id="slider" class="section">
    <div class="wrapper">
        <?php get_template_part('template-parts/content-carousel'); ?>
    </div>
</div>
<div id="poweredby" class="section bg-light-grey">
    <div class="wrapper text-center grey-text">
        <div>
            <img class="venn" src="<?= get_template_directory_uri() ?>/assets/img/venn.png" />
        </div>
        <div>
            <h3>
                Your talent, powered by AI
            </h3>
            <p>
                ImagenAI never stops learning every parameter of your personal editing style. <br />
                Now you can use your unique point of view easily and quickly on your entire Adobe <br /> Lightroom catalogs.
            </p>
        </div>
        <div class="flex">
            <div>
                <div class="flex-title">
                    +10,000,000
                </div>
                <div class="flex-text">
                    Edits generated per <br />
                    month
                </div>
            </div>
            <div>
                <div class="flex-title">
                    +5,000
                </div>
                <div class="flex-text">
                    Unique profiles generated
                </div>
            </div>
            <div>
                <div class="flex-title">
                    100%
                </div>
                <div class="flex-text">
                    Client satisfaction 
                </div>
            </div>
            <div>
                <div class="flex-title">
                    4X
                </div>
                <div class="flex-text">
                    Productivity boost
                </div>
            </div>
            <div>
                <div class="flex-title">
                    1 Second
                </div>
                <div class="flex-text">
                    Average edit time per image
                </div>
            </div>
        </div>
    </div>
</div>
<div id="bottom" class="section text-center">
    <div class="wrapper ">
        <div>
            <img class="graph"  src="<?= get_template_directory_uri() ?>/assets/img/graph.png" />
        </div>
        <div>
            <h3>
                An Important question first!
            </h3>
        </div>
        <div>
            <div class="box box-first grey-text">
                Do you have more than 5k edited <br />
                photos available in LR catalogs?
            </div>
        </div>
        <div>
            <div class="line">

            </div>
        </div>

        <div>
            <div class="line-horz">
                <div class="yes">
                    <div class="realtive">
                        Yes
                        <div class="conent-box yes-cont">
                            Great! <br />
                            Create your own <br />
                            <span> creator </span> profile
                        </div>
                    </div>

                </div>


                <div class="no">
                    <div class="realtive">
                        no
                        <div class="conent-box no-cont">
                            Cool! Try <br />
                            our <span>talents</span> editing <br />
                            profiles
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="grey-text">
            You can switch between  TALENTS and CREATOR plans at any time
        </p>
    </div>
</div>
<?php
get_footer();
