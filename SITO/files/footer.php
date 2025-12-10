<div class="col-md-4">
    <br>
    <h3>
        <?php if (!empty($footer)) { foreach ($footer as $footerItem) { ?>
            <?php if (!empty($footerItem['label1'])) echo htmlspecialchars($footerItem['label1']); ?>
        <?php } } ?>
    </h3>
</div>

<div class="col-md-4">
    <br><h3></h3>
</div>

<div class="col-md-4">
    <br>
    <h3>
        <?php if (!empty($footer)) { foreach ($footer as $footerItem) { ?>
            <?php if (!empty($footerItem['label2'])) echo htmlspecialchars($footerItem['label2']); ?>
        <?php } } ?>
    </h3>
</div>
