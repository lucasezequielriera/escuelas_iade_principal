<?php

foreach ($footer as $info_footer) { ?>

    <footer id="footer">
        <div class="left-part text-left px-5 py-3">
            <h4><?= $info_footer['info_title'] ?></h4>
            <p><?= $info_footer['info_description'] ?></p>
        </div>
        <div class="center-part text-center">
            <img alt="logo" width="170px" src=<?php if ($posicion_coincidencia == true) {
                echo '.'.$info_footer['imagen'];
            } else {
                echo $info_footer['imagen'];
            }?>>
            <p class="mt-1 fw-light"><?= $info_footer['info_footer'] ?></p>
        </div>
        <div class="right-part text-end px-5 py-3">
            <?php
            foreach ($footerButtons as $button) { ?>

            <p><a href="./<?= $button['link'] ?>"><?= $button['button'] ?></a></p>
            <p><a href="./<?= $button['link'] ?>"><?= $button['button'] ?></a></p>
            <p><a href="./<?= $button['link'] ?>"><?= $button['button'] ?></a></p>
            <p><a href="./<?= $button['link'] ?>"><?= $button['button'] ?></a></p>
            <p><a href="./<?= $button['link'] ?>"><?= $button['button'] ?></a></p>

            <?php } ?>
        </div>
    </footer>

<?php } ?>