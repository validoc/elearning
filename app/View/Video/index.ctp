<div class="content content_guia">
    <div class="box_video">
        <div class="embeddedVideo" style="text-align: center; padding-top: 30px;">
            <?php if($ERROR == '') :?>
                <video id="example_video_1"
                       class="video-js vjs-default-skin"
                       controls preload="none"
                       width="900"
                       height="500"
                       data-setup="{}"
                       poster="/images/<?= $imagen?>"
                    >
                    <source src="/resource/videos/<?= $nombre?>.mp4" type='video/mp4' />
                    <source src="/resource/videos/<?= $nombre?>.webm" type='video/webm' />
                    <source src="/resource/videos/<?= $nombre?>.ogv" type='video/ogg' />
                </video>
            <?php else: ?>
                <h1><?= $ERROR?></h1>
            <?php endif;?>
        </div>
    </div>
</div>