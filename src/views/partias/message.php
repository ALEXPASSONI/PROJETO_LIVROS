<?php if ($_message) { ?>
    <div class="container-message">
        <?php foreach ($_message as $message) { ?>
            <div class="content-message <?= $message["type"] ?>-message">
                <?= $message["message"] ?>
            </div>

        <?php } ?>
    </div>

<?php } ?>

<script src="/PROJETO_LIVROS/public/js/message.js"></script>