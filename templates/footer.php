<?php

foreach ($footer as $info_footer) { ?>

<footer id="footer">
    <div class="left-part text-left px-5 py-3">
        <h4><?= utf8_encode($info_footer['info_title']) ?></h4>
        <p><?= utf8_encode($info_footer['info_description']) ?></p>
    </div>
    <div class="center-part text-center">
        <img alt="logo" width="170px" src="./images/<?= $info_footer['imagen'] ?>">
        <p class="mt-1 fw-light"><?= utf8_encode($info_footer['info_footer']) ?></p>
    </div>
    <div class="right-part text-end px-5 py-3">
        <?php foreach ($footerButtons as $button) { ?>

        <p><a href="./<?= $button['link'] ?>"><?= utf8_encode($button['button']) ?></a></p>

        <?php } ?>
    </div>
</footer>

<?php } ?>