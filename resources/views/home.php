<?php foreach ($AllProducts as $row) : ?>

    <h2><?= $row['title'] ?></h2>
    <img src="storage/app/product/<?=$row['id'].".jpg"?>" alt="">
    <p><?= vatApply($row['price'], $row['vat']) ?>€</p>

<?php endforeach; ?>

