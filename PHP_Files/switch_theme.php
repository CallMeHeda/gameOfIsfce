<!--Changement de theme-->
<?php
if (isset($_SESSION['login']) && $_SESSION['login'] === 'bob_1040') {
    ?>
    <form class="form_switch fixed" action="#" method="GET" style="margin-left: 300px;">
        <div class="custom-control custom-switch">
            <input id="switch1" type="checkbox" class="custom-control-input" name="switch1" value="" onclick="fonction_switch()">
            <label class="custom-control-label" for="switch1"></label>
        </div>
    </form>
    <?php
} else {
    ?>
    <form class="form_switch fixed" action="#" method="GET" style="margin-left: 100px;">
        <div class="custom-control custom-switch">
            <input id="switch1" type="checkbox" class="custom-control-input" name="switch1" value="" onclick="fonction_switch()">
            <label class="custom-control-label" for="switch1"></label>
        </div>
    </form>
<?php } ?>

