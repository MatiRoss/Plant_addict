<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Panier</h1>
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered table-dark">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Produit</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Prix unitaire (TTC)</th>
                    <th scope="col">Total</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($variable as $row) : ?>
            <tr>
                <th scope="row"><img src="storage/app/product/<?=$row['id'].".jpg"?>" alt=""></th>
                <td><?= $row['title'] ?></td>
                <td><?= $row['quantity']?></td>
                <td><?= vatApply($row['price'], $row['vat']) ?>€</td>
                <td><?= $total ?>€</td>
            </tr>
            <?php endforeach; ?>
                <tr>
                    <th scope="row"></th>
                    <td colspan="5 text-right"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
