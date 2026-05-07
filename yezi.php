<?php
session_start();

$produits = [
    [
        'id'          => 1,
        'nom'         => 'Veste en Jean Oversize',
        'description' => 'Coupe décontractée, denim épais, finitions surpiqûres.',
        'prix'        => 89.90,
        'prix_promo'  => 69.90,
        'stock'       => 12,
        'emoji'       => '🧥',
        'categorie'   => 'Vêtements',
    ],
    [
        'id'          => 2,
        'nom'         => 'Robe Fleurie Midi',
        'description' => 'Tissu léger imprimé floral, col V, manches courtes.',
        'prix'        => 59.90,
        'prix_promo'  => null,
        'stock'       => 8,
        'emoji'       => '👗',
        'categorie'   => 'Vêtements',
    ],
    [
        'id'          => 3,
        'nom'         => 'Sneakers Urbaines Blanches',
        'description' => 'Semelle épaisse, cuir synthétique, design épuré.',
        'prix'        => 79.00,
        'prix_promo'  => null,
        'stock'       => 20,
        'emoji'       => '👟',
        'categorie'   => 'Vêtements',
    ],
    [
        'id'          => 4,
        'nom'         => 'Pull Col Roulé Cachemire',
        'description' => 'Mélange cachemire et laine, ultra-doux, coupe slim.',
        'prix'        => 119.00,
        'prix_promo'  => 89.00,
        'stock'       => 5,
        'emoji'       => '🧶',
        'categorie'   => 'Vêtements',
    ],
    [
        'id'          => 5,
        'nom'         => 'Robot Mixeur 1200W',
        'description' => '6 vitesses, bol inox 2L, lames acier inoxydable.',
        'prix'        => 149.99,
        'prix_promo'  => 119.99,
        'stock'       => 7,
        'emoji'       => '🫙',
        'categorie'   => 'Électroménager',
    ],
    [
        'id'          => 6,
        'nom'         => 'Cafetière à Dosettes',
        'description' => 'Compatible Nespresso, chauffe en 25s, bac 1L amovible.',
        'prix'        => 89.90,
        'prix_promo'  => null,
        'stock'       => 15,
        'emoji'       => '☕',
        'categorie'   => 'Électroménager',
    ],
    [
        'id'          => 7,
        'nom'         => 'Aspirateur Robot Wi-Fi',
        'description' => 'Cartographie LiDAR, batterie 120 min, contrôle appli.',
        'prix'        => 349.00,
        'prix_promo'  => 279.00,
        'stock'       => 4,
        'emoji'       => '🤖',
        'categorie'   => 'Électroménager',
    ],
    [
        'id'          => 8,
        'nom'         => 'Grille-Pain Rétro 4 Fentes',
        'description' => 'Design vintage, 6 niveaux de brunissage, tiroir ramasse-miettes.',
        'prix'        => 49.99,
        'prix_promo'  => null,
        'stock'       => 18,
        'emoji'       => '🍞',
        'categorie'   => 'Électroménager',
    ],
    [
        'id'          => 9,
        'nom'         => 'Sérum Vitamine C 30ml',
        'description' => 'Éclat & anti-oxydant, 15% vitamine C pure stabilisée.',
        'prix'        => 38.00,
        'prix_promo'  => null,
        'stock'       => 30,
        'emoji'       => '🧴',
        'categorie'   => 'Beauté',
    ],
    [
        'id'          => 10,
        'nom'         => 'Palette Fards à Paupières',
        'description' => '12 teintes nude & smoky, longue tenue 24h, vegan.',
        'prix'        => 29.90,
        'prix_promo'  => 22.90,
        'stock'       => 25,
        'emoji'       => '💄',
        'categorie'   => 'Beauté',
    ],
    [
        'id'          => 11,
        'nom'         => 'Lisseur Céramique Pro',
        'description' => 'Plaques flottantes 230°C, chauffe rapide 60s, anti-statique.',
        'prix'        => 69.00,
        'prix_promo'  => null,
        'stock'       => 10,
        'emoji'       => '💇',
        'categorie'   => 'Beauté',
    ],
    [
        'id'          => 12,
        'nom'         => 'Crème Hydratante SPF50',
        'description' => 'Protection solaire haute, texture légère, sans parfum.',
        'prix'        => 24.50,
        'prix_promo'  => 19.50,
        'stock'       => 40,
        'emoji'       => '🌿',
        'categorie'   => 'Beauté',
    ],
    [
        'id'          => 13,
        'nom'         => 'Tapis de Yoga Antidérapant',
        'description' => 'Caoutchouc naturel, 6mm, lignes d\'alignement, sangle incluse.',
        'prix'        => 49.90,
        'prix_promo'  => null,
        'stock'       => 22,
        'emoji'       => '🧘',
        'categorie'   => 'Fitness',
    ],
    [
        'id'          => 14,
        'nom'         => 'Haltères Réglables 20kg',
        'description' => 'Système à molette 2–10kg par haltère, compact et sécurisé.',
        'prix'        => 189.00,
        'prix_promo'  => 149.00,
        'stock'       => 6,
        'emoji'       => '🏋️',
        'categorie'   => 'Fitness',
    ],
    [
        'id'          => 15,
        'nom'         => 'Corde à Sauter Intelligente',
        'description' => 'Compteur calories & sauts intégré, câble acier gainé.',
        'prix'        => 34.90,
        'prix_promo'  => null,
        'stock'       => 35,
        'emoji'       => '⚡',
        'categorie'   => 'Fitness',
    ],
    [
        'id'          => 16,
        'nom'         => 'Bandes de Résistance (5 niveaux)',
        'description' => 'Latex naturel, set 5 bandes de 5 à 30kg, sac de transport.',
        'prix'        => 27.90,
        'prix_promo'  => null,
        'stock'       => 50,
        'emoji'       => '🎽',
        'categorie'   => 'Fitness',
    ],
    [
        'id'          => 17,
        'nom'         => 'Lampe Suspension Rotin',
        'description' => 'Tressage artisanal, douille E27, câble tissu 1.5m, Ø40cm.',
        'prix'        => 79.00,
        'prix_promo'  => 59.00,
        'stock'       => 9,
        'emoji'       => '🏮',
        'categorie'   => 'Maison & Déco',
    ],
    [
        'id'          => 18,
        'nom'         => 'Plaid Polaire XL',
        'description' => 'Microfibre ultra-douce, 200×150cm, lavable en machine.',
        'prix'        => 39.90,
        'prix_promo'  => null,
        'stock'       => 28,
        'emoji'       => '🛋️',
        'categorie'   => 'Maison & Déco',
    ],
    [
        'id'          => 19,
        'nom'         => 'Ensemble Bougies Parfumées',
        'description' => 'Set de 3 bougies cire de soja, parfums vanille/lin/cèdre.',
        'prix'        => 32.00,
        'prix_promo'  => 25.00,
        'stock'       => 16,
        'emoji'       => '🕯️',
        'categorie'   => 'Maison & Déco',
    ],
    [
        'id'          => 20,
        'nom'         => 'Miroir Mural Arche 120cm',
        'description' => 'Cadre métal noir mat, forme arche, fixation murale incluse.',
        'prix'        => 129.00,
        'prix_promo'  => null,
        'stock'       => 3,
        'emoji'       => '🪞',
        'categorie'   => 'Maison & Déco',
    ],
];

$ordre_categories = ['Vêtements', 'Électroménager', 'Beauté', 'Fitness', 'Maison & Déco'];

$meta_categories = [
    'Vêtements'      => ['icon' => '👗', 'color' => '#E8D5C4', 'accent' => '#8B5E3C'],
    'Électroménager' => ['icon' => '⚡', 'color' => '#C8D8E8', 'accent' => '#2C5F8A'],
    'Beauté'         => ['icon' => '💄', 'color' => '#F0D6E8', 'accent' => '#8A2C6A'],
    'Fitness'        => ['icon' => '🏋️', 'color' => '#D0E8D0', 'accent' => '#2C6A3A'],
    'Maison & Déco'  => ['icon' => '🏡', 'color' => '#E8E4D0', 'accent' => '#6A5A2C'],
];

$par_categorie = [];
foreach ($produits as $p) {
    $par_categorie[$p['categorie']][] = $p;
}

$nb_panier = 0;
if (isset($_SESSION['panier'])) {
    foreach ($_SESSION['panier'] as $item) {
        $nb_panier += $item['qte'] ?? 1;
    }
}

function prix_fmt(float $p): string {
    return number_format($p, 2, ',', ' ') . ' €';
}

function echap(string $s): string {
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Catalogue — Notre Boutique</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
:root {
    --bg:         #FAFAF7;
    --surface:    #FFFFFF;
    --border:     #EBEBEB;
    --text:       #1C1C1A;
    --muted:      #888882;
    --accent:     #1C1C1A;
    --gold:       #B8974A;
    --danger:     #C0392B;
    --success:    #2E7D52;
    --radius:     14px;
    --radius-sm:  8px;
    --shadow:     0 2px 20px rgba(0,0,0,.06);
    --shadow-h:   0 8px 40px rgba(0,0,0,.13);
    --transition: .25s cubic-bezier(.4,0,.2,1);
    --font-title: 'Cormorant Garamond', Georgia, serif;
    --font-body:  'Jost', system-ui, sans-serif;
}

*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; }
body {
    background: var(--bg);
    font-family: var(--font-body);
    color: var(--text);
    font-size: 15px;
    line-height: 1.6;
}
a { color: inherit; text-decoration: none; }

.site-header {
    background: var(--surface);
    border-bottom: 1px solid var(--border);
    position: sticky; top: 0; z-index: 200;
}
.header-inner {
    max-width: 1280px; margin: 0 auto;
    padding: 0 32px;
    height: 70px;
    display: flex; align-items: center; justify-content: space-between;
}
.logo {
    font-family: var(--font-title);
    font-size: 1.8rem; font-weight: 700;
    letter-spacing: -.5px; color: var(--text);
    display: flex; align-items: center; gap: 10px;
}
.logo-dot {
    width: 8px; height: 8px; border-radius: 50%;
    background: var(--gold); display: inline-block;
}
.header-cart {
    display: flex; align-items: center; gap: 8px;
    background: var(--text); color: #fff;
    padding: 10px 20px; border-radius: 50px;
    font-size: .85rem; font-weight: 600;
    transition: opacity var(--transition);
    cursor: pointer;
}
.header-cart:hover { opacity: .8; }
.cart-badge {
    background: var(--gold); color: var(--text);
    border-radius: 50px; padding: 1px 7px;
    font-size: .72rem; font-weight: 700;
    min-width: 20px; text-align: center;
}

.hero {
    max-width: 1280px; margin: 0 auto;
    padding: 64px 32px 48px;
    display: flex; flex-direction: column; align-items: flex-start;
}
.hero-label {
    font-size: .72rem; font-weight: 600;
    text-transform: uppercase; letter-spacing: 2px;
    color: var(--muted); margin-bottom: 14px;
}
.hero-title {
    font-family: var(--font-title);
    font-size: clamp(2.8rem, 6vw, 5rem);
    font-weight: 700; line-height: 1.05;
    letter-spacing: -1px; margin-bottom: 20px;
}
.hero-title em { color: var(--gold); font-style: italic; }
.hero-desc {
    color: var(--muted); font-size: 1rem;
    max-width: 500px; margin-bottom: 36px;
}

.cat-nav {
    display: flex; flex-wrap: wrap; gap: 10px;
}
.cat-nav-btn {
    padding: 8px 18px; border-radius: 50px;
    border: 1.5px solid var(--border);
    font-size: .82rem; font-weight: 500;
    background: var(--surface); cursor: pointer;
    transition: all var(--transition);
    display: flex; align-items: center; gap: 6px;
}
.cat-nav-btn:hover {
    border-color: var(--text);
    background: var(--text); color: #fff;
}

.catalog-wrapper { max-width: 1280px; margin: 0 auto; padding: 0 32px 80px; }
.cat-section { margin-bottom: 72px; }
.cat-header {
    display: flex; align-items: flex-end; justify-content: space-between;
    margin-bottom: 28px;
    padding-bottom: 16px;
    border-bottom: 1px solid var(--border);
    gap: 12px; flex-wrap: wrap;
}
.cat-header-left { display: flex; align-items: center; gap: 14px; }
.cat-icon-badge {
    width: 48px; height: 48px; border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.5rem;
}
.cat-name {
    font-family: var(--font-title);
    font-size: clamp(1.6rem, 3vw, 2.2rem);
    font-weight: 700; letter-spacing: -.5px;
}
.cat-count {
    font-size: .8rem; color: var(--muted); font-weight: 400;
    display: block; margin-top: 2px;
}

.products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
    gap: 20px;
}

.product-card {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    overflow: hidden;
    display: flex; flex-direction: column;
    transition: box-shadow var(--transition), transform var(--transition);
    opacity: 0;
    transform: translateY(20px);
    animation: fadeUp .5s forwards;
}
@keyframes fadeUp {
    to { opacity: 1; transform: translateY(0); }
}
.product-card:hover {
    box-shadow: var(--shadow-h);
    transform: translateY(-3px);
}

.card-image {
    height: 180px;
    display: flex; align-items: center; justify-content: center;
    font-size: 4rem;
    position: relative;
    overflow: hidden;
}

.badge-promo {
    position: absolute; top: 12px; left: 12px;
    background: var(--danger); color: #fff;
    font-size: .68rem; font-weight: 700;
    padding: 4px 10px; border-radius: 50px;
    text-transform: uppercase; letter-spacing: .5px;
}

.badge-stock {
    position: absolute; top: 12px; right: 12px;
    background: #FFF3CD; color: #856404;
    font-size: .65rem; font-weight: 700;
    padding: 4px 8px; border-radius: 50px;
}

.card-body {
    padding: 16px 18px 18px;
    flex: 1; display: flex; flex-direction: column; gap: 8px;
}
.card-name {
    font-weight: 600; font-size: .97rem; line-height: 1.3;
    letter-spacing: -.1px;
}
.card-desc {
    font-size: .82rem; color: var(--muted); line-height: 1.5;
    flex: 1;
    display: -webkit-box; -webkit-line-clamp: 2;
    -webkit-box-orient: vertical; overflow: hidden;
}

.card-price {
    display: flex; align-items: baseline; gap: 8px; flex-wrap: wrap;
}
.price-current {
    font-family: var(--font-title);
    font-size: 1.25rem; font-weight: 700;
}
.price-old {
    font-size: .85rem; color: var(--muted);
    text-decoration: line-through;
}
.price-save {
    font-size: .72rem; font-weight: 700; color: var(--danger);
    background: #FDECEA; padding: 2px 7px; border-radius: 50px;
}

.card-stock-info {
    font-size: .75rem; font-weight: 500;
}
.in-stock  { color: var(--success); }
.low-stock { color: #D97706; }
.no-stock  { color: var(--danger); }

.btn-panier {
    display: flex; align-items: center; justify-content: center; gap: 8px;
    width: 100%; padding: 12px;
    background: var(--text); color: #fff; border: none;
    border-radius: var(--radius-sm);
    font-family: var(--font-body);
    font-size: .88rem; font-weight: 600; letter-spacing: .3px;
    cursor: pointer;
    transition: background var(--transition), transform var(--transition);
    margin-top: 4px;
}
.btn-panier:hover:not(:disabled) {
    background: #333;
    transform: translateY(-1px);
}
.btn-panier:disabled {
    background: #D0D0D0; cursor: not-allowed;
}
.btn-panier .icon { font-size: 1rem; }

#toast {
    position: fixed; bottom: 28px; right: 28px; z-index: 999;
    background: var(--text); color: #fff;
    padding: 14px 22px; border-radius: var(--radius-sm);
    font-size: .88rem; font-weight: 500;
    display: flex; align-items: center; gap: 10px;
    box-shadow: var(--shadow-h);
    opacity: 0; transform: translateY(12px);
    transition: opacity .3s, transform .3s;
    pointer-events: none;
}
#toast.show { opacity: 1; transform: translateY(0); }

.site-footer {
    background: var(--text); color: rgba(255,255,255,.55);
    padding: 36px 32px; text-align: center;
    font-size: .82rem; line-height: 2;
}
.site-footer strong { color: rgba(255,255,255,.9); }

@media (max-width: 640px) {
    .header-inner { padding: 0 18px; }
    .hero         { padding: 40px 18px 32px; }
    .catalog-wrapper { padding: 0 18px 60px; }
    .products-grid { grid-template-columns: 1fr 1fr; gap: 12px; }
    .cat-header { flex-direction: column; align-items: flex-start; }
}
@media (max-width: 400px) {
    .products-grid { grid-template-columns: 1fr; }
}
</style>
</head>
<body>
<header class="site-header">
    <div class="header-inner">
        <a href="index.php" class="logo">
            <span class="logo-dot"></span>
            Boutique
        </a>
        <a href="panier.php" class="header-cart">
            🛒 Mon panier
            <?php if ($nb_panier > 0): ?>
                <span class="cart-badge"><?= $nb_panier ?></span>
            <?php endif; ?>
        </a>
    </div>
</header>

<section class="hero">
    <p class="hero-label">Catalogue Produits</p>
    <h1 class="hero-title">
        Des produits<br>
        <em>sélectionnés</em> pour vous
    </h1>
    <p class="hero-desc">
        Découvrez notre sélection organisée par univers.
        Cliquez sur une catégorie pour y accéder directement.
    </p>
    <nav class="cat-nav" aria-label="Navigation par catégories">
        <?php foreach ($ordre_categories as $cat): ?>
            <?php $m = $meta_categories[$cat]; ?>
            <a href="#cat-<?= echap(strtolower(str_replace([' ', '&'], ['-', ''], $cat))) ?>"
               class="cat-nav-btn">
                <?= $m['icon'] ?> <?= echap($cat) ?>
            </a>
        <?php endforeach; ?>
    </nav>
</section>

<main class="catalog-wrapper">
    <?php foreach ($ordre_categories as $cat): ?>
        <?php
            if (empty($par_categorie[$cat])) continue;
            $produits_cat = $par_categorie[$cat];
            $m   = $meta_categories[$cat];
            $slug = strtolower(str_replace([' ', '&'], ['-', ''], $cat));
            $nb   = count($produits_cat);
        ?>
        <section class="cat-section" id="cat-<?= echap($slug) ?>">
            <div class="cat-header">
                <div class="cat-header-left">
                    <div class="cat-icon-badge"
                         style="background: <?= $m['color'] ?>;">
                        <?= $m['icon'] ?>
                    </div>
                    <div>
                        <h2 class="cat-name"><?= echap($cat) ?></h2>
                        <span class="cat-count"><?= $nb ?> produit<?= $nb > 1 ? 's' : '' ?></span>
                    </div>
                </div>
            </div>

            <div class="products-grid">
                <?php foreach ($produits_cat as $i => $p): ?>
                <?php
                    $prix_affiche = $p['prix_promo'] ?? $p['prix'];
                    $a_promo      = $p['prix_promo'] !== null;
                    $reduction    = $a_promo ? round((1 - $p['prix_promo'] / $p['prix']) * 100) : 0;
                    $hors_stock   = $p['stock'] <= 0;
                    $stock_faible = !$hors_stock && $p['stock'] <= 5;
                    $delay        = ($i % 4) * 80;
                ?>
                <article class="product-card"
                         style="animation-delay: <?= $delay ?>ms;">
                    <div class="card-image"
                         style="background: <?= $m['color'] ?>20;">
                        <span><?= $p['emoji'] ?></span>
                        <?php if ($a_promo): ?>
                            <span class="badge-promo">-<?= $reduction ?>%</span>
                        <?php endif; ?>
                        <?php if ($stock_faible): ?>
                            <span class="badge-stock">⚡ <?= $p['stock'] ?> restants</span>
                        <?php endif; ?>
                    </div>

                    <div class="card-body">
                        <h3 class="card-name"><?= echap($p['nom']) ?></h3>
                        <p class="card-desc"><?= echap($p['description']) ?></p>
                        <div class="card-price">
                            <span class="price-current"
                                  style="color: <?= $m['accent'] ?>;">
                                <?= prix_fmt($prix_affiche) ?>
                            </span>
                            <?php if ($a_promo): ?>
                                <span class="price-old"><?= prix_fmt($p['prix']) ?></span>
                                <span class="price-save">-<?= $reduction ?>%</span>
                            <?php endif; ?>
                        </div>
                        <p class="card-stock-info
                            <?php if ($hors_stock) echo 'no-stock';
                                  elseif ($stock_faible) echo 'low-stock';
                                  else echo 'in-stock'; ?>">
                            <?php if ($hors_stock): ?>
                                ✗ Rupture de stock
                            <?php elseif ($stock_faible): ?>
                                ⚡ Plus que <?= $p['stock'] ?> en stock
                            <?php else: ?>
                                ✓ En stock
                            <?php endif; ?>
                        </p>
                        <?php if (!$hors_stock): ?>
                        <button
                            class="btn-panier"
                            style="--btn-bg: <?= $m['accent'] ?>;"
                            onclick="ajouterPanier(<?= $p['id'] ?>, '<?= echap(addslashes($p['nom'])) ?>')"
                        >
                            <span class="icon">🛒</span>
                            Ajouter au panier
                        </button>
                        <?php else: ?>
                        <button class="btn-panier" disabled>
                            Indisponible
                        </button>
                        <?php endif; ?>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endforeach; ?>
</main>

<div id="toast" role="alert" aria-live="polite"></div>

<footer class="site-footer">
    <strong>Boutique</strong> — Catalogue produits<br>
    Projet TP PHP · <?= date('Y') ?>
</footer>

<script>
function ajouterPanier(id, nom) {
    fetch('panier.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: 'action=ajouter&produit_id=' + id + '&qte=1'
    })
    .then(r => {
        return r.text().then(html => {
            try {
                const data = JSON.parse(html);
                const badge = document.querySelector('.cart-badge');
                if (data.nb_panier !== undefined) {
                    if (badge) {
                        badge.textContent = data.nb_panier;
                    } else if (data.nb_panier > 0) {
                        const btn = document.querySelector('.header-cart');
                        const sp  = document.createElement('span');
                        sp.className   = 'cart-badge';
                        sp.textContent = data.nb_panier;
                        btn.appendChild(sp);
                    }
                }
            } catch(e) {}
        });
    })
    .catch(() => {});
    afficherToast('✓ « ' + nom + ' » ajouté au panier !');
}

function afficherToast(message) {
    const toast = document.getElementById('toast');
    toast.textContent = message;
    toast.classList.add('show');
    clearTimeout(window._toastTimer);
    window._toastTimer = setTimeout(() => toast.classList.remove('show'), 3000);
}

const observer = new IntersectionObserver(entries => {
    entries.forEach(e => {
        if (e.isIntersecting) {
            e.target.querySelectorAll('.product-card').forEach((card, i) => {
                card.style.animationDelay = (i % 4 * 80) + 'ms';
                card.style.animationPlayState = 'running';
            });
        }
    });
}, { threshold: 0.05 });

document.querySelectorAll('.cat-section').forEach(s => observer.observe(s));
</script>
</body>
</html>