<section class="p-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?=$titleProduct?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="storage/app/product/<?=$id.".jpg"?>" alt="">
            </div>
            <div class="col-md-6">
                <p><?=$descriptionProduct?></p>
                <form action="/index.php?action=cart" method="post">
                    <div>
                        <label for="quantity">Quantité</label>
                        <input type="number" id="quantity" name="quantity" value="0" required>
                    </div>
                    <div>
                        <p><?=vatApply($price,$vat)?> €</p>
                    </div>
                    <div>
                        <input type="hidden" name="id" value="<?=$id?>"/>
                        <button type="submit" id="cart" name="cart">Ajouter au panier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
