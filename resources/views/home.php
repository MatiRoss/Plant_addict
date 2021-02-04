<section class="p-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Notre boutique</h1>
            </div>
        </div>
        <div class="row">
            <?php foreach ($AllProducts as $row) : ?>
                <div class="col-md-4">
                    <h2><?= $row['title'] ?></h2>
                    <img src="storage/app/product/<?=$row['id'].".jpg"?>" alt="">
                    <p><?= vatApply($row['price'], $row['vat']) ?>€</p>
                    <a href="index.php?action=product&id=<?=$row['id']?>" class="btn bg-dark text-white">En savoir +</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>



