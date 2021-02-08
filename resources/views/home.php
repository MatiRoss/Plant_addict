<?php require 'resources/views/layouts/header.php'; ?>

<section class="p-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center p-4">
                <h1>Notre boutique</h1>
            </div>
        </div>
        <div class="row">
            <?php foreach ($AllProducts as $row) : ?>
                <div class="col-md-4 p-2">
                    <div class="p-4 border">
                        <h2><?= $row['title'] ?></h2>
                        <img src="storage/app/product/<?= $row['id'] . ".jpg" ?>" alt="">
                        <p class="text-center">Prix unitaire : <?= vatApply($row['price'], $row['vat']) ?>€</p>
                        <p class="text-center">
                            <a href="index.php?action=product&id=<?= $row['id'] ?>" class="btn bg-dark text-white">En
                                savoir +</a>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require 'resources/views/layouts/footer.php'; ?>



