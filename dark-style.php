<style>
    /* Dark Mode CSS */

    <?php
        if ($row['theme'] == "Dark") {
            $icon1="moon";
            $icon2="sun";
            $color1 = "#666";
            $color2 = "#ccc";
        } else {
            $icon1="sun";
            $icon2="moon";
            $color1 = "#ccc";
            $color2 = "#666";
        }
    ?>

    .<?php echo $icon1 ?> {
        font-size: 2em;
        position: absolute;
        color: <?php echo $color1 ?>;
        filter: drop-shadow(0 0 2px rgba(225, 225, 225, 0.5));
        transition: 1s ease;
        transform: scale(0);
    }

    #dark-chk:checked ~ .<?php echo $icon1 ?> {
        transition-delay: 0.8s;
        transform: scale(1) rotate(360deg);
    }

    .<?php echo $icon2 ?> {
        font-size: 2em;
        color: <?php echo $color2 ?>;
        filter: drop-shadow(0 0 2px rgba(0, 0, 0, 0.5));
        transition: 1s ease;
        transition-delay: 0.8s;
    }

    #dark-chk:checked ~ .<?php echo $icon2 ?> {
        transition-delay: 0s;
        transform: rotate(360deg) scale(0);
    }
</style>