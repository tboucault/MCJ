<!-- toast -->
<?php if(isset($_SESSION['toast'])):?>
    <?php foreach($_SESSION['toast'] as $type => $message):?>
        <script>
            iziToast.<?= $type; ?>({
                title: '',
                message: '<?= $message; ?>',
            });
        </script>
    <?php endforeach; ?>
    <?php unset($_SESSION['toast']); ?>
<?php endif; ?>
<!-- / toast -->