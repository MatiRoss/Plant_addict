<section class="p-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-4">
                <h1>Votre panier</h1>
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
                    <?php foreach ($_SESSION['cart'] as $id=>$qt) : ?>
                        <?php $selectedProduct = getProductById($db, $id); ?>
                        <tr>
                            <th scope="row"><img src="storage/app/product/<?=$selectedProduct['id'].".jpg"?>" alt=""></th>
                            <td><?= $selectedProduct['title'] ?></td>
                            <td><?= $qt?></td>
                            <td><?= vatApply($selectedProduct['price'], $selectedProduct['vat']) ?>€</td>
                            <td><?= totalProductPrice($selectedProduct['price'], $selectedProduct['vat'], $qt) ?>€</td>
                        </tr>
                    <?php endforeach; ?>
                <tr>
                    <th scope="row"></th>
                    <td colspan="5 text-right">Total : </td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
</section>



