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

                <?php foreach ($cartProducts as $row) : ?>
                    <?php if (isset($row['infoProduct']['id'])) : ?>
                        <tr>
                            <th scope="row"><img src="storage/app/product/<?= $row['infoProduct']['id'] . ".jpg" ?>"
                                                 alt=""></th>
                            <td><?= $row['infoProduct']['title']; ?></td>
                            <td><?= $row['quantity']; ?></td>
                            <td><?= $row['priceTtc']; ?>€</td>
                            <td><?= $row['totalPriceQteTtc']; ?>€</td>
                        </tr>

                    <?php endif; ?>
                <?php endforeach; ?>
                <tr>
                    <th scope="row"></th>
                    <td class="text-right" colspan="5">Total : <?= $cartProducts['totalCardPrice'] ?> € </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-right">
                    <a class="btn bg-dark text-light">Annuler</a>
                    <a class="btn bg-success text-light">Valider panier</a>
                </p>
            </div>
        </div>
    </div>
</section>



