<?php get_header('404'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center" style="padding:200px 0px;">
                <h1 class="title">Error 404 - Page / Asset Not Found</h1> 
                <p>To return home, please click the button below.</p>
                <p><a href="<?php bloginfo('url'); ?>" class="btn btn-block btn-primary w-25">Home</a></p>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>