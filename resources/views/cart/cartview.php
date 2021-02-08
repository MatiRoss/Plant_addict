<?php include 'resources/views/layouts/header.php'; ?>

<section class="p-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-4">
                <h1>Votre panier</h1>
            </div>
        </div>
        <form action="index.php?action=cart" method="POST" class="row">
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
                            <td><input type="number" id="quantity" name="quantity" value="<?= $row['quantity']; ?>"
                                       min="0" max="<?= $maxStock['stock']; ?>" required></td>
                            <td><?= $row['priceTtc']; ?>€ <a href="index.php?action=cart&delete=<?= $row['infoProduct']['id'] ?>">X</a> </td>
                            <td><?= $row['totalPriceQteTtc']; ?>€</td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
                <tr>
                    <th scope="row"></th>
                    <td class="text-right" colspan="5">Total : <?= $cartProducts['totalCardPrice'] ?> €</td>
                </tr>
                </tbody>
            </table>
            <div class="col-md-12">
                <p class="text-right">
                    <input name="reset" type="submit" value="Vider le panier" class="btn bg-dark text-light"/>
                    <input name="modify" type="submit" value="Mettre à jour le panier"
                           class="btn bg-warning text-light"/>
                    <input name="validate" type="submit" value="Valider le panier" class="btn bg-success text-light"/>
                </p>
            </div>
        </form>
    </div>
</section>

<?php include 'resources/views/layouts/footer.php'; ?>



