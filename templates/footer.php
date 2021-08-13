<?php
// Obteniendo datos del footer //
$footer = $db->getSiteFooter('all');
?>

<footer id="footer">
    <div class="left-part text-left px-5 py-3">
        <h4><?= $footer[0]['info_title'] ?></h4>
        <p><?= $footer[0]['info_description'] ?></p>
    </div>
    <div class="center-part text-center">
        <img alt="logo" width="170px" src=<?php if ($posicion_coincidencia == true) {
            echo '.'.$footer[0]['info_image'];
        } else {
            echo $footer[0]['info_image'];
        }?>>
        <p class="mt-1 fw-light"><?= $footer[0]['info_footer'] ?></p>
    </div>
    <div class="right-part text-end px-5 py-3">
        <p><a href="<?= $footer[0]['button1_link'] ?>"><?= $footer[0]['button1'] ?></a></p>
        <p><a href="<?= $footer[0]['button2_link'] ?>"><?= $footer[0]['button2'] ?></a></p>
        <p><a href="<?= $footer[0]['button3_link'] ?>"><?= $footer[0]['button3'] ?></a></p>
        <p><a href="<?= $footer[0]['button4_link'] ?>"><?= $footer[0]['button4'] ?></a></p>
        <p><a href="<?= $footer[0]['button5_link'] ?>"><?= $footer[0]['button5'] ?></a></p>
    </div>
</footer>