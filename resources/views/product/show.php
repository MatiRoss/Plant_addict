<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?=$titleProduct?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="storage/app/product/<?=$id.".jpg"?>" alt="<?=$descriptionImageProduct?>">
            </div>
            <div class="col-md-6">
                <p><?=$descriptionProduct?></p>
            </div>
        </div>
        <div class="row">
            <form action="/index.php?action=cart" method="post">
                <div>
                    <label for="quantity">Quantité</label>
                    <input type="number" id="quantity" name="quantity" required>
                </div>
                <div>
                    <p><?=$price?></p>
                </div>
                <div>
                    <label for="cart">Ajouter au panier</label>
                    <input type="submit" id="cart" name="cart"  required>
                </div>
            </form>
        </div>
    </div>
</section>
