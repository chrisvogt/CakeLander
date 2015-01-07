<?php if ($landing_page['Slide']) : ?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="flexslider">
        <ul class="slides">
            <?php foreach ($landing_page['Slide'] as $slide) : ?>
            <li>
                <img src="<?php echo h($slide['image']); ?>" width="1920" height="353" alt="<?php echo h($slide['title']); ?>" />
                <div class="slide_text">
                    <div class="slide_title"><?php echo h($slide['title']); ?> </div>
                    <div class="slide_byline"><?php echo $slide['byline']; ?> </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div><!-- /.jumbotron -->
<?php endif; ?>