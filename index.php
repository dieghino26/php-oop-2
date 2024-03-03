<?php
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/PetBed.php';

$dogsCategory = new Category('Cani');
$catsCategory = new Category('Gatti');

$allProducts = [];

$prodottoGenerico = new Product(
    'Prodotto Generico',
    'https://dt-petpassion.s3.amazonaws.com/s/user/500/250114/photo/127328/PRV/250114_127328_cane-american-staffordshire-terrier-femmina-3-anni-rose-in-adozione.jpg',
    7.99,
    30,
    'Un bel prodotto generico',
    $dogsCategory
);
$allProducts[] = $prodottoGenerico;

$frisbee = new Toy(
    'Frisbee',
    'Plastica',
    'https://dt-petpassion.s3.amazonaws.com/s/user/500/250114/photo/127328/PRV/250114_127328_cane-american-staffordshire-terrier-femmina-3-anni-rose-in-adozione.jpg',
    3.99,
    777,
    'Un bel frisbee',
    $dogsCategory
);
$allProducts[] = $frisbee;

$food = new Food(
    'Cibo',
    '04/12/2024',
    'https://dt-petpassion.s3.amazonaws.com/s/user/500/250114/photo/127328/PRV/250114_127328_cane-american-staffordshire-terrier-femmina-3-anni-rose-in-adozione.jpg',
    9.99,
    70,
    'Un bello spuntino',
    $dogsCategory
);
$allProducts[] = $food;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>
                        PHP OOP SHOP
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>
                        Prodotti
                    </h2>
                </div>
                <?php
                foreach ($allProducts as $singleProduct) {
                ?>
                    <div class="col-3">
                        <div class="card">
                            <img src="<?php echo $singleProduct->image; ?>" alt="">
                            <div class="card-body">
                                <h3>
                                    <?php echo $singleProduct->name; ?>
                                </h3>
                                <ul>
                                    <li>
                                        Categoria: <?php echo $singleProduct->category->name; ?>
                                    </li>
                                    <li>
                                        $ <?php echo $singleProduct->price; ?>
                                    </li>
                                    <li>
                                        Disponibili: <?php echo $singleProduct->quantity; ?>
                                    </li>
                                    <?php
                                    if (get_class($singleProduct) == 'Toy') {
                                    ?>
                                        <li>
                                            Materiale: <?php echo $singleProduct->material; ?>
                                        </li>
                                    <?php
                                    } else if (get_class($singleProduct) == 'Food') {
                                    ?>
                                        <li>
                                            Scadenza: <?php echo $singleProduct->exploration; ?>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                                <p>
                                    <?php echo $singleProduct->description; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </main>
</body>

</html>