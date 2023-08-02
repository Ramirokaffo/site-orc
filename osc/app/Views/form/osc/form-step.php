<div class="form-step">
    <?php for ($i = 1; $i <= 5; $i++) { ?>
        <?php if ($i <= $step) { ?>
            <?php if ($i == 5 && $step == 5) { ?>
                <div class="valid-step"><?= esc($i) ?></div>
            <?php continue;
            } else if ($i == $step) { ?>
                <div class="valid-step"><?= esc($i) ?></div>
                <div class="valid-step-line">
                    <p class="semi-line-step"></p>
                </div>
            <?php } else { ?>
                <div class="valid-step"><?= esc($i) ?></div>
                <div class="valid-step-line">
                    <p class="complete-line-step"></p>
                </div>
            <?php } ?>
        <?php } else if ($i == 5) { ?>
            <div class="invalid-step"><?= esc($i)  ?></div>
        <?php } else { ?>
            <div class="invalid-step"><?= esc($i) ?></div>
            <div class="invalid-step-line"></div>
    <?php  }
    } ?>
</div>