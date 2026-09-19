<?php
global $Wcms;

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

$coffeeCatalog = [
    ['id' => 'espresso', 'name' => 'Espresso', 'category' => 'Coffee', 'description' => 'A bold, concentrated shot with a rich crema.', 'price' => 3.50, 'stock' => 50, 'image' => 'https://images.unsplash.com/photo-1510591509098-f4fdc6d0ff04?w=900&q=85'],
    ['id' => 'americano', 'name' => 'Americano', 'category' => 'Coffee', 'description' => 'Espresso lengthened with hot water for a clean finish.', 'price' => 4.50, 'stock' => 50, 'image' => 'https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=900&q=85'],
    ['id' => 'cappuccino', 'name' => 'Cappuccino', 'category' => 'Coffee', 'description' => 'Espresso, velvety steamed milk, and a cloud of foam.', 'price' => 5.50, 'stock' => 50, 'image' => 'https://images.unsplash.com/photo-1572442388796-11668a67e53d?w=900&q=85'],
    ['id' => 'latte', 'name' => 'Latte', 'category' => 'Coffee', 'description' => 'Smooth espresso and steamed milk, made for slow mornings.', 'price' => 5.75, 'stock' => 50, 'image' => 'https://images.unsplash.com/photo-1541167760496-1628856ab772?w=900&q=85'],
    ['id' => 'mocha', 'name' => 'Mocha', 'category' => 'Coffee', 'description' => 'Espresso and chocolate finished with creamy milk.', 'price' => 6.25, 'stock' => 50, 'image' => 'https://images.unsplash.com/photo-1578314675249-a6910f80cc4e?w=900&q=85'],
    ['id' => 'macchiato', 'name' => 'Macchiato', 'category' => 'Coffee', 'description' => 'A punchy espresso marked with a little steamed milk.', 'price' => 4.75, 'stock' => 50, 'image' => 'https://images.unsplash.com/photo-1485808191679-5f86510681a2?w=900&q=85'],
    ['id' => 'cold-brew', 'name' => 'Cold Brew', 'category' => 'Coffee', 'description' => 'Slow-steeped coffee served chilled and naturally sweet.', 'price' => 5.50, 'stock' => 50, 'image' => 'https://images.unsplash.com/photo-1517701604599-bb29b565090c?w=900&q=85'],
    ['id' => 'iced-coffee', 'name' => 'Iced Coffee', 'category' => 'Coffee', 'description' => 'Bright chilled coffee over ice for an easy pick-me-up.', 'price' => 5.00, 'stock' => 50, 'image' => 'https://images.unsplash.com/photo-1461023058943-07fcbe16d735?w=900&q=85'],
    ['id' => 'hot-chocolate', 'name' => 'Hot Chocolate', 'category' => 'Non-Coffee Drinks', 'description' => 'Velvety cocoa with a warm, chocolate finish.', 'price' => 5.25, 'stock' => 50, 'image' => 'https://images.unsplash.com/photo-1542990253-0d0f5be5f0ed?w=900&q=85'],
    ['id' => 'matcha-latte', 'name' => 'Matcha Latte', 'category' => 'Non-Coffee Drinks', 'description' => 'Earthy ceremonial matcha whisked with creamy milk.', 'price' => 6.00, 'stock' => 50, 'image' => 'https://images.unsplash.com/photo-1515823064-d6e0c04616a7?w=900&q=85'],
    ['id' => 'chai-latte', 'name' => 'Chai Latte', 'category' => 'Non-Coffee Drinks', 'description' => 'Spiced black tea blended with steamed milk.', 'price' => 5.75, 'stock' => 50, 'image' => 'https://images.unsplash.com/photo-1571934811356-5cc061b6821f?w=900&q=85'],
    ['id' => 'milk-tea', 'name' => 'Milk Tea', 'category' => 'Non-Coffee Drinks', 'description' => 'Silky black tea with a gentle creamy sweetness.', 'price' => 5.50, 'stock' => 50, 'image' => 'https://images.unsplash.com/photo-1558857563-b371033873b8?w=900&q=85'],
    ['id' => 'fruit-tea', 'name' => 'Fruit Tea', 'category' => 'Non-Coffee Drinks', 'description' => 'Refreshing tea brightened with seasonal fruit.', 'price' => 5.25, 'stock' => 50, 'image' => 'https://images.unsplash.com/photo-1556679343-c7306c1976bc?w=900&q=85'],
    ['id' => 'lemonade', 'name' => 'Lemonade', 'category' => 'Non-Coffee Drinks', 'description' => 'Fresh lemon, chilled water, and just enough sweetness.', 'price' => 4.75, 'stock' => 50, 'image' => 'https://images.unsplash.com/photo-1621263764928-df1444c5e859?w=900&q=85'],
    ['id' => 'smoothies', 'name' => 'Smoothies', 'category' => 'Non-Coffee Drinks', 'description' => 'A cool, fruity blend made fresh to order.', 'price' => 6.50, 'stock' => 50, 'image' => 'https://images.unsplash.com/photo-1502741224143-90386d7f8c82?w=900&q=85'],
    ['id' => 'croissant', 'name' => 'Croissant', 'category' => 'Pastries and Baked Goods', 'description' => 'Buttery, flaky layers baked golden and crisp.', 'price' => 4.25, 'stock' => 30, 'image' => 'https://images.unsplash.com/photo-1555507036-ab1f4038808a?w=900&q=85'],
    ['id' => 'muffin', 'name' => 'Muffin', 'category' => 'Pastries and Baked Goods', 'description' => 'Soft, tender crumb with a generous bakery top.', 'price' => 4.00, 'stock' => 30, 'image' => 'https://images.unsplash.com/photo-1607958996333-41aef7caefaa?w=900&q=85'],
    ['id' => 'donut', 'name' => 'Donut', 'category' => 'Pastries and Baked Goods', 'description' => 'Light, sweet, and finished with a simple glaze.', 'price' => 3.50, 'stock' => 30, 'image' => 'https://images.unsplash.com/photo-1551024506-0bccd828d307?w=900&q=85'],
    ['id' => 'cinnamon-roll', 'name' => 'Cinnamon Roll', 'category' => 'Pastries and Baked Goods', 'description' => 'Warm cinnamon swirls under a soft vanilla glaze.', 'price' => 5.00, 'stock' => 30, 'image' => 'https://images.unsplash.com/photo-1509365465985-25d11c17e812?w=900&q=85'],
    ['id' => 'banana-bread', 'name' => 'Banana Bread', 'category' => 'Pastries and Baked Goods', 'description' => 'Moist banana loaf with a toasted, home-baked aroma.', 'price' => 4.50, 'stock' => 30, 'image' => 'https://images.unsplash.com/photo-1606101273945-e9eba91c0b7c?w=900&q=85'],
    ['id' => 'cookies', 'name' => 'Cookies', 'category' => 'Pastries and Baked Goods', 'description' => 'Crisp edges, soft centers, and plenty of comfort.', 'price' => 3.25, 'stock' => 30, 'image' => 'https://images.unsplash.com/photo-1499636136210-6f4ee915583e?w=900&q=85'],
    ['id' => 'brownies', 'name' => 'Brownies', 'category' => 'Pastries and Baked Goods', 'description' => 'Dense chocolate squares with a fudgy center.', 'price' => 4.25, 'stock' => 30, 'image' => 'https://images.unsplash.com/photo-1551024601-bec78aea704b?w=900&q=85'],
    ['id' => 'cheesecake', 'name' => 'Cheesecake', 'category' => 'Pastries and Baked Goods', 'description' => 'Creamy cheesecake on a delicate biscuit base.', 'price' => 6.00, 'stock' => 30, 'image' => 'https://images.unsplash.com/photo-1565958011703-44f9829ba187?w=900&q=85'],
    ['id' => 'sandwiches', 'name' => 'Sandwiches', 'category' => 'Food', 'description' => 'Freshly made layers between warm, toasted bread.', 'price' => 8.50, 'stock' => 25, 'image' => 'https://images.unsplash.com/photo-1528735602780-2552fd46c7af?w=900&q=85'],
    ['id' => 'toast', 'name' => 'Toast', 'category' => 'Food', 'description' => 'Golden toast with your choice of cafe toppings.', 'price' => 5.00, 'stock' => 25, 'image' => 'https://images.unsplash.com/photo-1484723091739-30a097e8f929?w=900&q=85'],
    ['id' => 'pasta', 'name' => 'Pasta', 'category' => 'Food', 'description' => 'Comforting pasta tossed in a rich house sauce.', 'price' => 10.50, 'stock' => 25, 'image' => 'https://images.unsplash.com/photo-1473093295043-cdd812d0e601?w=900&q=85'],
    ['id' => 'salads', 'name' => 'Salads', 'category' => 'Food', 'description' => 'Crisp greens, bright vegetables, and a fresh dressing.', 'price' => 8.00, 'stock' => 25, 'image' => 'https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=900&q=85'],
    ['id' => 'breakfast-meals', 'name' => 'Breakfast Meals', 'category' => 'Food', 'description' => 'A satisfying plate to start your day right.', 'price' => 11.00, 'stock' => 25, 'image' => 'https://images.unsplash.com/photo-1533089860892-a7c6f0a88666?w=900&q=85'],
    ['id' => 'waffles', 'name' => 'Waffles', 'category' => 'Food', 'description' => 'Crisp-edged waffles served warm with sweet toppings.', 'price' => 8.50, 'stock' => 25, 'image' => 'https://images.unsplash.com/photo-1562376552-0d160a2f238d?w=900&q=85'],
    ['id' => 'pancakes', 'name' => 'Pancakes', 'category' => 'Food', 'description' => 'Fluffy stacks with syrup and a little morning joy.', 'price' => 8.50, 'stock' => 25, 'image' => 'https://images.unsplash.com/photo-1528207776546-365bb710ee93?w=900&q=85'],
    ['id' => 'fries', 'name' => 'French Fries', 'category' => 'Fast Food', 'description' => 'Crisp-edged fries, salted hot and served fast.', 'price' => 4.50, 'stock' => 40, 'image' => 'https://images.unsplash.com/photo-1630384060421-cb20d0e0649d?w=900&q=85'],
    ['id' => 'loaded-cheese-fries', 'name' => 'Loaded Cheese Fries', 'category' => 'Fast Food', 'description' => 'Fries piled with melted cheese and a savory drizzle.', 'price' => 6.50, 'stock' => 35, 'image' => 'https://images.unsplash.com/photo-1630384060421-cb20d0e0649d?w=900&q=85'],
    ['id' => 'margherita-pizza', 'name' => 'Margherita Pizza', 'category' => 'Fast Food', 'description' => 'Classic tomato, mozzarella, and basil on a thin crust.', 'price' => 9.00, 'stock' => 25, 'image' => 'https://images.unsplash.com/photo-1516383934460-fc1c6e50d7b1?w=900&q=85'],
    ['id' => 'pepperoni-pizza', 'name' => 'Pepperoni Pizza', 'category' => 'Fast Food', 'description' => 'A house favorite loaded with crisp, spiced pepperoni.', 'price' => 9.50, 'stock' => 25, 'image' => 'https://images.unsplash.com/photo-1516383934460-fc1c6e50d7b1?w=900&q=85'],
    ['id' => 'cheeseburger', 'name' => 'Classic Cheeseburger', 'category' => 'Fast Food', 'description' => 'A juicy beef patty, melted cheese, and all the fixings.', 'price' => 7.50, 'stock' => 30, 'image' => 'https://images.unsplash.com/photo-1553979459-d2229ba7433b?w=900&q=85'],
    ['id' => 'bacon-double-burger', 'name' => 'Bacon Double Burger', 'category' => 'Fast Food', 'description' => 'Two patties, crisp bacon, and a stack of toppings.', 'price' => 8.50, 'stock' => 25, 'image' => 'https://images.unsplash.com/photo-1553979459-d2229ba7433b?w=900&q=85'],
    ['id' => 'hot-dog', 'name' => 'Classic Hot Dog', 'category' => 'Fast Food', 'description' => 'A grilled sausage in a soft bun with your choice of toppings.', 'price' => 5.50, 'stock' => 30, 'image' => 'https://images.unsplash.com/photo-1619538189873-3f511db5fec6?w=900&q=85'],
    ['id' => 'buffalo-wings', 'name' => 'Buffalo Wings', 'category' => 'Fast Food', 'description' => 'Crispy wings tossed in a tangy, spicy buffalo glaze.', 'price' => 8.00, 'stock' => 30, 'image' => 'https://images.unsplash.com/photo-1608039755401-742074f0548d?w=900&q=85'],
    ['id' => 'extra-espresso-shot', 'name' => 'Extra Espresso Shot', 'category' => 'Add-ons', 'description' => 'Add another shot of our house espresso.', 'price' => 1.50, 'stock' => 100, 'image' => 'https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?w=900&q=85'],
    ['id' => 'whipped-cream', 'name' => 'Whipped Cream', 'category' => 'Add-ons', 'description' => 'A soft, sweet finish for your favorite drink.', 'price' => 0.75, 'stock' => 100, 'image' => 'https://images.unsplash.com/photo-1579954115545-a95591f28bfc?w=900&q=85'],
    ['id' => 'caramel-syrup', 'name' => 'Caramel Syrup', 'category' => 'Add-ons', 'description' => 'Buttery caramel sweetness in every sip.', 'price' => 0.75, 'stock' => 100, 'image' => 'https://images.unsplash.com/photo-1606313564200-e75d5e30476b?w=900&q=85'],
    ['id' => 'vanilla-syrup', 'name' => 'Vanilla Syrup', 'category' => 'Add-ons', 'description' => 'A fragrant vanilla lift for coffee and tea.', 'price' => 0.75, 'stock' => 100, 'image' => 'https://images.unsplash.com/photo-1594631252845-29fc4cc8cde9?w=900&q=85'],
    ['id' => 'chocolate-syrup', 'name' => 'Chocolate Syrup', 'category' => 'Add-ons', 'description' => 'Deep chocolate flavor for an extra-indulgent cup.', 'price' => 0.75, 'stock' => 100, 'image' => 'https://images.unsplash.com/photo-1548907040-4d42fcaa4f3e?w=900&q=85'],
    ['id' => 'alternative-milk', 'name' => 'Alternative Milk', 'category' => 'Add-ons', 'description' => 'Choose oat, almond, or soy milk for your drink.', 'price' => 1.00, 'stock' => 100, 'image' => 'https://images.unsplash.com/photo-1550583724-b2692b85b150?w=900&q=85'],
    ['id' => 'ice-cream', 'name' => 'Ice Cream', 'category' => 'Add-ons', 'description' => 'A cool scoop to pair with dessert or coffee.', 'price' => 2.50, 'stock' => 50, 'image' => 'https://images.unsplash.com/photo-1563805042-7684c019e1cb?w=900&q=85'],
    ['id' => 'coffee-beans', 'name' => 'Coffee Beans', 'category' => 'Merchandise', 'description' => 'Freshly roasted beans to brew your cafe ritual at home.', 'price' => 18.00, 'stock' => 30, 'image' => 'https://images.unsplash.com/photo-1447933601403-0c6688de566e?w=900&q=85'],
    ['id' => 'ground-coffee', 'name' => 'Ground Coffee', 'category' => 'Merchandise', 'description' => 'Ready-to-brew grounds with a rich roasted aroma.', 'price' => 16.00, 'stock' => 30, 'image' => 'https://images.unsplash.com/photo-1511081692775-05d0f180a065?w=900&q=85'],
    ['id' => 'drip-coffee-packs', 'name' => 'Drip Coffee Packs', 'category' => 'Merchandise', 'description' => 'Simple single-serve brewing for busy coffee days.', 'price' => 14.00, 'stock' => 30, 'image' => 'https://images.unsplash.com/photo-1498804103079-a6351b050096?w=900&q=85'],
    ['id' => 'tumblers', 'name' => 'Tumblers', 'category' => 'Merchandise', 'description' => 'Keep your coffee close and your hands comfortably cool.', 'price' => 22.00, 'stock' => 20, 'image' => 'https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?w=900&q=85'],
    ['id' => 'mugs', 'name' => 'Mugs', 'category' => 'Merchandise', 'description' => 'A favorite cafe cup for slow mornings at home.', 'price' => 15.00, 'stock' => 20, 'image' => 'https://images.unsplash.com/photo-1514228742587-6b1558fcf93a?w=900&q=85'],
    ['id' => 'reusable-cups', 'name' => 'Reusable Cups', 'category' => 'Merchandise', 'description' => 'A lighter footprint for every takeaway coffee.', 'price' => 12.00, 'stock' => 20, 'image' => 'https://images.unsplash.com/photo-1544787219-7f47ccb76574?w=900&q=85'],
];

$storefrontRead = static function () use ($Wcms, $coffeeCatalog): array {
    $data = $Wcms->get('config', 'storefront');
    if (!is_object($data) && !is_array($data)) {
        $data = [];
    }
    $data = json_decode(json_encode($data), true) ?: [];
    if (empty($data['products']) || count($data['products']) < count($coffeeCatalog)) $data['products'] = $coffeeCatalog;
    $data['users'] = $data['users'] ?? [];
    $data['orders'] = $data['orders'] ?? [];
    return $data;
};

$storefrontSave = static function (array $data) use ($Wcms): void {
    $Wcms->set('config', 'storefront', $data);
};

$storefrontToken = static function (): string {
    if (empty($_SESSION['storefront_token'])) {
        $_SESSION['storefront_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['storefront_token'];
};

$storefrontValidToken = static function () use ($storefrontToken): bool {
    return isset($_POST['storefront_token'], $_SESSION['storefront_token'])
        && hash_equals($_SESSION['storefront_token'], $_POST['storefront_token']);
};

$storefrontRedirect = static function (string $page): void {
    header('Location: ' . Wcms::url($page));
    exit;
};

$storefrontData = $storefrontRead();
$storefrontChanged = false;
foreach ($storefrontData['products'] as $index => $storedProduct) {
    if ((float)($storedProduct['price'] ?? 0) < 100) {
        $storefrontData['products'][$index]['price'] = max(100, round((float)$storedProduct['price'] * 50, 2));
        $storefrontChanged = true;
    }
}
if (($storefrontData['products'][0]['id'] ?? '') !== 'espresso') {
    $storefrontData['products'] = $coffeeCatalog;
    $storefrontChanged = true;
}
if (empty($storefrontData['users'])) {
    $storefrontData['users'][] = [
        'id' => 'demo-customer',
        'name' => 'Demo Customer',
        'email' => 'jennyroseberedo4@gmail.com',
        'password' => password_hash('jennyrose04', PASSWORD_DEFAULT),
    ];
    $storefrontChanged = true;
}

// Roles + free subscription: give every stored user a role/subscription shape, and make sure
// at least one admin account exists so the store has its own admin login (separate from the
// WonderCMS backend login).
foreach ($storefrontData['users'] as $storefrontUserIndex => $storefrontExistingUser) {
    if (!array_key_exists('role', $storefrontExistingUser)) { $storefrontData['users'][$storefrontUserIndex]['role'] = 'user'; $storefrontChanged = true; }
    if (!array_key_exists('subscribed', $storefrontExistingUser)) { $storefrontData['users'][$storefrontUserIndex]['subscribed'] = false; $storefrontChanged = true; }
    if (!array_key_exists('plan', $storefrontExistingUser)) { $storefrontData['users'][$storefrontUserIndex]['plan'] = 'free'; $storefrontChanged = true; }
    if (!array_key_exists('subscribed_since', $storefrontExistingUser)) { $storefrontData['users'][$storefrontUserIndex]['subscribed_since'] = null; $storefrontChanged = true; }
}
$storefrontHasAdmin = false;
foreach ($storefrontData['users'] as $storefrontExistingUser) {
    if (($storefrontExistingUser['role'] ?? '') === 'admin') { $storefrontHasAdmin = true; break; }
}
if (!$storefrontHasAdmin) {
    $storefrontData['users'][] = [
        'id' => 'wonderbrew-admin',
        'name' => 'WonderBrew Admin',
        'email' => 'owner.wonderbrew@protonmail.com',
        'password' => password_hash('Kf9vLp2Qx7mTz45!', PASSWORD_DEFAULT),
        'role' => 'admin',
        'subscribed' => false,
        'plan' => 'free',
        'subscribed_since' => null,
    ];
    $storefrontChanged = true;
}
if ($storefrontChanged) $storefrontSave($storefrontData);
$storefrontAction = $_POST['storefront_action'] ?? $_GET['storefront_action'] ?? '';
// True when the visitor is allowed to manage products/orders/users: either logged into the
// WonderCMS backend, or logged into the store as a storefront account with role "admin".
$storefrontIsAdmin = $Wcms->loggedIn || ((($_SESSION['storefront_role'] ?? '') === 'admin') && !empty($_SESSION['storefront_user']));
$storefrontRoutes = ['store', 'store-login', 'store-register', 'store-cart', 'store-account', 'store-success', 'store-admin', 'coffee-blog', 'coffee-photo', 'coffee-education', 'coffee-about'];
if (in_array($Wcms->currentPage, $storefrontRoutes, true)) {
    $Wcms->currentPageExists = true;
    $Wcms->headerResponse = 'HTTP/1.0 200 OK';
}
if ($Wcms->currentPage === $Wcms->get('config', 'login')) {
    $Wcms->currentPageExists = true;
    $Wcms->headerResponse = 'HTTP/1.0 200 OK';
}

if ($storefrontAction === 'register' && $_SERVER['REQUEST_METHOD'] === 'POST' && $storefrontValidToken()) {
    $email = strtolower(trim($_POST['email'] ?? ''));
    $password = (string)($_POST['password'] ?? '');
    $name = trim($_POST['name'] ?? '');
    $existing = array_filter($storefrontData['users'], static fn (array $user): bool => strtolower(trim($user['email'] ?? '')) === $email);
    if ($existing) {
        $_SESSION['storefront_error'] = 'An account already exists for this email. Please log in with your existing password.';
        $storefrontRedirect('store-login');
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($password) < 8 || $name === '') {
        $_SESSION['storefront_error'] = 'Please enter a name, a valid email, and a password of at least 8 characters.';
        $storefrontRedirect('store-register');
    }
    $storefrontData['users'][] = [
        'id' => bin2hex(random_bytes(8)),
        'name' => $name,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT),
        // Signups are always regular customer accounts. Admin accounts are seeded and managed from
        // the admin dashboard so a random visitor is not able to sign up as an admin.
        'role' => 'user',
        'subscribed' => false,
        'plan' => 'free',
        'subscribed_since' => null,
    ];
    $storefrontSave($storefrontData);
    $_SESSION['storefront_user'] = $email;
    $_SESSION['storefront_role'] = 'user';
    $storefrontRedirect('store-account');
}

if ($storefrontAction === 'login' && $_SERVER['REQUEST_METHOD'] === 'POST' && $storefrontValidToken()) {
    $email = strtolower(trim($_POST['email'] ?? ''));
    $password = (string)($_POST['password'] ?? '');
    foreach ($storefrontData['users'] as $user) {
        if (strtolower(trim($user['email'] ?? '')) === $email && password_verify($password, $user['password'])) {
            $userRoleOnLogin = $user['role'] ?? 'user';
            $_SESSION['storefront_user'] = strtolower(trim($user['email']));
            $_SESSION['storefront_role'] = $userRoleOnLogin;
            $storefrontRedirect($userRoleOnLogin === 'admin' ? 'store-admin' : 'store-account');
        }
    }
    $_SESSION['storefront_error'] = 'Incorrect email or password. Don\'t have an account yet? Create a new one.';
    $storefrontRedirect('store-login');
}

if ($storefrontAction === 'logout') {
    unset($_SESSION['storefront_user'], $_SESSION['storefront_cart'], $_SESSION['storefront_role']);
    $storefrontRedirect('store');
}

if ($storefrontAction === 'subscribe' && $_SERVER['REQUEST_METHOD'] === 'POST' && $storefrontValidToken()) {
    $subscriberEmail = $_SESSION['storefront_user'] ?? '';
    if ($subscriberEmail === '') $storefrontRedirect('store-login');
    foreach ($storefrontData['users'] as $index => $user) {
        if (strtolower(trim($user['email'] ?? '')) === $subscriberEmail) {
            $storefrontData['users'][$index]['subscribed'] = true;
            $storefrontData['users'][$index]['plan'] = 'free';
            $storefrontData['users'][$index]['subscribed_since'] = date('c');
            break;
        }
    }
    $storefrontSave($storefrontData);
    $_SESSION['storefront_notice'] = 'You\'ve joined the WonderBrew Club (Free Plan) — no charge, just promos and updates.';
    $storefrontRedirect('store-account');
}

if ($storefrontAction === 'unsubscribe' && $_SERVER['REQUEST_METHOD'] === 'POST' && $storefrontValidToken()) {
    $subscriberEmail = $_SESSION['storefront_user'] ?? '';
    if ($subscriberEmail === '') $storefrontRedirect('store-login');
    foreach ($storefrontData['users'] as $index => $user) {
        if (strtolower(trim($user['email'] ?? '')) === $subscriberEmail) {
            $storefrontData['users'][$index]['subscribed'] = false;
            break;
        }
    }
    $storefrontSave($storefrontData);
    $_SESSION['storefront_notice'] = 'Your subscription has been cancelled. You can subscribe again anytime — it\'s always free.';
    $storefrontRedirect('store-account');
}

if ($storefrontAction === 'toggle_role' && $_SERVER['REQUEST_METHOD'] === 'POST' && $storefrontIsAdmin
    && (($Wcms->loggedIn && $Wcms->hashVerify($_POST['token'] ?? '')) || (($_SESSION['storefront_role'] ?? '') === 'admin' && $storefrontValidToken()))
) {
    $targetEmail = strtolower(trim($_POST['user_email'] ?? ''));
    foreach ($storefrontData['users'] as $index => $user) {
        if (strtolower(trim($user['email'] ?? '')) === $targetEmail) {
            $storefrontData['users'][$index]['role'] = (($user['role'] ?? 'user') === 'admin') ? 'user' : 'admin';
            break;
        }
    }
    $storefrontSave($storefrontData);
    $storefrontRedirect('store-admin');
}

if ($storefrontAction === 'add' && $_SERVER['REQUEST_METHOD'] === 'POST' && $storefrontValidToken()) {
    $productId = trim($_POST['product_id'] ?? '');
    foreach ($storefrontData['products'] as $product) {
        if ($product['id'] === $productId && (int)$product['stock'] > 0) {
            $_SESSION['storefront_cart'][$productId] = min(99, (int)($_SESSION['storefront_cart'][$productId] ?? 0) + 1);
            break;
        }
    }
    $storefrontRedirect('store-cart');
}

if ($storefrontAction === 'checkout' && $_SERVER['REQUEST_METHOD'] === 'POST' && $storefrontValidToken()) {
    $customerName = trim($_POST['customer_name'] ?? '');
    $customerEmail = strtolower(trim($_POST['customer_email'] ?? ''));
    $customerPhone = trim($_POST['customer_phone'] ?? '');
    $customerAddress = trim($_POST['customer_address'] ?? '');
    $paymentMethod = trim($_POST['payment_method'] ?? '');
    $allowedPayments = ['Cash on Delivery', 'GCash', 'Bank Transfer', 'Pay at store'];
    if ($customerName === '' || !filter_var($customerEmail, FILTER_VALIDATE_EMAIL) || $customerPhone === '' || $customerAddress === '' || !in_array($paymentMethod, $allowedPayments, true)) {
        $_SESSION['storefront_error'] = 'Please enter your name, a valid email, phone number, delivery address, and payment method.';
        $storefrontRedirect('store-cart');
    }
    $cart = $_SESSION['storefront_cart'] ?? [];
    $items = [];
    $total = 0;
    foreach ($storefrontData['products'] as $index => $product) {
        $quantity = min((int)$product['stock'], (int)($cart[$product['id']] ?? 0));
        if ($quantity > 0) {
            $items[] = ['name' => $product['name'], 'quantity' => $quantity, 'price' => (float)$product['price']];
            $total += $quantity * (float)$product['price'];
            $storefrontData['products'][$index]['stock'] -= $quantity;
        }
    }
    if ($items) {
        $storefrontData['orders'][] = [
            'id' => 'ORD-' . strtoupper(bin2hex(random_bytes(4))),
            'email' => $customerEmail,
            'customer_name' => $customerName,
            'phone' => $customerPhone,
            'address' => $customerAddress,
            'items' => $items,
            'total' => round($total, 2),
            'payment_method' => $paymentMethod,
            'status' => 'Received',
            'created' => date('c'),
        ];
        $storefrontSave($storefrontData);
        unset($_SESSION['storefront_cart']);
        $_SESSION['storefront_order_confirmation'] = [
            'id' => $storefrontData['orders'][array_key_last($storefrontData['orders'])]['id'],
            'total' => round($total, 2),
            'payment_method' => $paymentMethod,
        ];
    }
    $storefrontRedirect('store-success');
}

$storefrontAdminActionAuthorized = static function () use ($Wcms, $storefrontValidToken): bool {
    if ($Wcms->loggedIn && $Wcms->hashVerify($_POST['token'] ?? '')) return true;
    return (($_SESSION['storefront_role'] ?? '') === 'admin') && !empty($_SESSION['storefront_user']) && $storefrontValidToken();
};

if ($storefrontAction === 'save_product' && $storefrontIsAdmin && $_SERVER['REQUEST_METHOD'] === 'POST' && $storefrontAdminActionAuthorized()) {
    $name = trim($_POST['product_name'] ?? '');
    $price = max(100, (float)($_POST['product_price'] ?? 0));
    $stock = max(0, (int)($_POST['product_stock'] ?? 0));
    if ($name !== '') {
        $storefrontData['products'][] = ['id' => bin2hex(random_bytes(6)), 'name' => $name, 'description' => trim($_POST['product_description'] ?? ''), 'price' => $price, 'stock' => $stock];
        $storefrontSave($storefrontData);
    }
    $storefrontRedirect('store-admin');
}

if ($storefrontAction === 'delete_product' && $storefrontIsAdmin && $storefrontAdminActionAuthorized()) {
    $id = trim($_POST['product_id'] ?? '');
    $storefrontData['products'] = array_values(array_filter($storefrontData['products'], static fn (array $product): bool => $product['id'] !== $id));
    $storefrontSave($storefrontData);
    $storefrontRedirect('store-admin');
}

$storefrontEsc = static fn ($value): string => htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
$storefrontMoney = static fn ($value): string => '₱' . number_format(max(100, (float)$value), 2);
$storefrontPage = static function (string $page) use ($storefrontData, $storefrontEsc, $storefrontMoney, $storefrontToken, $Wcms, $storefrontIsAdmin): string {
    $error = $_SESSION['storefront_error'] ?? '';
    $notice = $_SESSION['storefront_notice'] ?? '';
    unset($_SESSION['storefront_error'], $_SESSION['storefront_notice']);
    $userEmail = $_SESSION['storefront_user'] ?? '';
    $userRole = $_SESSION['storefront_role'] ?? '';
    $currentUser = null;
    if ($userEmail !== '') {
        foreach ($storefrontData['users'] as $storefrontUser) {
            if (strtolower(trim($storefrontUser['email'] ?? '')) === $userEmail) { $currentUser = $storefrontUser; break; }
        }
    }
    $products = $storefrontData['products'];
    $cart = $_SESSION['storefront_cart'] ?? [];
    $confirmation = $_SESSION['storefront_order_confirmation'] ?? null;
    unset($_SESSION['storefront_order_confirmation']);
    $html = '<div class="storefront-shell">';
    if ($error) $html .= '<div class="store-alert store-alert-error">' . $storefrontEsc($error) . '</div>';
    if ($notice) $html .= '<div class="store-alert store-alert-success">' . $storefrontEsc($notice) . '</div>';

    if ($page === 'store-login' || $page === 'store-register') {
        $register = $page === 'store-register';
        $html .= '<div class="auth-layout reveal">';
        $html .= '<div class="auth-visual"><img src="https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?w=1200&q=85" alt="Warm cafe interior"><div class="auth-visual-copy"><h2>' . $storefrontEsc($Wcms->get('config', 'siteTitle')) . '</h2><p>Save your favorites, follow your orders, and check out faster next time.</p></div></div>';
        $html .= '<div class="auth-form-side"><h1>' . ($register ? 'Create your account' : 'Welcome back') . '</h1><p class="auth-lead">' . ($register ? 'Takes a minute, and it stays free.' : 'Sign in to pick up where you left off.') . '</p>';
        $html .= '<form class="auth-form" method="post"><input type="hidden" name="storefront_token" value="' . $storefrontToken() . '"><input type="hidden" name="storefront_action" value="' . ($register ? 'register' : 'login') . '">';
        if ($register) $html .= '<label>Name<input name="name" autocomplete="name" placeholder="Juan dela Cruz" required></label>';
        $html .= '<label>Email<input name="email" type="email" autocomplete="email" placeholder="you@email.com" required></label>';
        $html .= '<label>Password<input name="password" type="password" minlength="8" autocomplete="' . ($register ? 'new-password' : 'current-password') . '" placeholder="At least 8 characters" required></label>';
        $html .= '<button class="store-button auth-submit" type="submit">' . ($register ? 'Create account' : 'Sign in') . '</button></form>';
        $html .= '<p class="auth-switch"><a href="' . Wcms::url($register ? 'store-login' : 'store-register') . '">' . ($register ? 'Already have an account? Sign in' : 'New here? Create a free account') . '</a></p>';
        $html .= '<p class="auth-guest">No account needed to order — you can also <a href="' . Wcms::url('store') . '">check out as a guest</a>.</p>';
        $html .= '</div></div>';
    } elseif ($page === 'coffee-blog') {
        $journalPosts = [
            ['kicker' => 'Brew guide', 'title' => 'How to taste coffee like a barista', 'text' => 'Start with the aroma, take a small sip, and notice how sweetness, acidity, and body shift as the cup cools. Ten minutes with one cup teaches more than ten recipes.', 'image' => 'https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=1400&q=85', 'read' => '4 min read'],
            ['kicker' => 'Behind the bar', 'title' => 'The quiet rhythm of a morning shift', 'text' => 'Before the first guest arrives, the espresso gets dialled in and the pastries go warm.', 'image' => 'https://images.unsplash.com/photo-1442512595331-e89e73853f31?w=1000&q=85', 'read' => '3 min read'],
            ['kicker' => 'Origin stories', 'title' => 'Why roast level changes the cup', 'text' => 'Light, medium, and dark each reveal a different balance of aroma, sweetness, and texture.', 'image' => 'https://images.unsplash.com/photo-1498804103079-a6351b050096?w=1000&q=85', 'read' => '5 min read'],
            ['kicker' => 'At home', 'title' => 'A pour-over routine worth keeping', 'text' => 'Same grinder, same ratio, same kettle. Consistency is what makes a good cup repeatable.', 'image' => 'https://images.unsplash.com/photo-1447933601403-0c6688de566e?w=1000&q=85', 'read' => '6 min read'],
            ['kicker' => 'Menu notes', 'title' => 'What goes into our chocolate drinks', 'text' => 'Real cocoa, less sugar, and milk steamed just short of scalding.', 'image' => 'https://images.unsplash.com/photo-1542990253-0d0f5be5f0ed?w=1000&q=85', 'read' => '3 min read'],
        ];
        $featuredPost = array_shift($journalPosts);
        $html .= '<header class="page-head reveal"><p class="store-kicker">From the journal</p><h1>Coffee notes &amp; cafe stories</h1><p>Short reads about craft, community, and the small rituals that make a coffee shop feel like home.</p></header>';
        $html .= '<article class="journal-feature reveal" style="--i:1"><div class="journal-feature-img"><img src="' . $storefrontEsc($featuredPost['image']) . '" alt="' . $storefrontEsc($featuredPost['title']) . '"></div><div class="journal-feature-copy"><p class="store-kicker">' . $storefrontEsc($featuredPost['kicker']) . '</p><h2>' . $storefrontEsc($featuredPost['title']) . '</h2><p>' . $storefrontEsc($featuredPost['text']) . '</p><span class="journal-meta">' . $storefrontEsc($featuredPost['read']) . '</span></div></article>';
        $html .= '<div class="journal-grid">';
        $postIndex = 2;
        foreach ($journalPosts as $journalPost) {
            $html .= '<article class="journal-card reveal" style="--i:' . $postIndex . '"><img src="' . $storefrontEsc($journalPost['image']) . '" alt="' . $storefrontEsc($journalPost['title']) . '" loading="lazy"><div><p class="store-kicker">' . $storefrontEsc($journalPost['kicker']) . '</p><h3>' . $storefrontEsc($journalPost['title']) . '</h3><p>' . $storefrontEsc($journalPost['text']) . '</p><span class="journal-meta">' . $storefrontEsc($journalPost['read']) . '</span></div></article>';
            $postIndex++;
        }
        $html .= '</div>';
    } elseif ($page === 'coffee-photo') {
        $photos = [
            ['Morning pour', 'The first cup of the day', 'https://images.unsplash.com/photo-1447933601403-0c6688de566e?w=1200&q=85'],
            ['The espresso bar', 'Where every order begins', 'https://images.unsplash.com/photo-1511081692775-05d0f180a065?w=1200&q=85'],
            ['A table for two', 'Long conversations welcome', 'https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?w=1200&q=85'],
            ['Pastry hour', 'Straight from the oven', 'https://images.unsplash.com/photo-1555507036-ab1f4038808a?w=1200&q=85'],
            ['Slow afternoon', 'Books, laptops, refills', 'https://images.unsplash.com/photo-1512568400610-62da28bc8a13?w=1200&q=85'],
            ['Coffee to go', 'For the walk back to work', 'https://images.unsplash.com/photo-1521305916504-4a1121188589?w=1200&q=85'],
            ['House blend', 'Roasted in small batches', 'https://images.unsplash.com/photo-1498804103079-a6351b050096?w=1200&q=85'],
            ['Iced and ready', 'Our warm-weather regular', 'https://images.unsplash.com/photo-1461023058943-07fcbe16d735?w=1200&q=85'],
        ];
        $html .= '<header class="page-head reveal"><p class="store-kicker">The visual diary</p><h1>Life around the coffee shop</h1><p>Warm light, careful hands, and shared tables — photographed on ordinary days.</p></header>';
        $html .= '<div class="gallery">';
        $photoIndex = 1;
        foreach ($photos as $photo) {
            $html .= '<figure class="gallery-item reveal" style="--i:' . $photoIndex . '"><img src="' . $storefrontEsc($photo[2]) . '" alt="' . $storefrontEsc($photo[0]) . '" loading="lazy"><figcaption><strong>' . $storefrontEsc($photo[0]) . '</strong><span>' . $storefrontEsc($photo[1]) . '</span></figcaption></figure>';
            $photoIndex++;
        }
        $html .= '</div>';
    } elseif ($page === 'coffee-education') {
        $lessons = [
            ['Bean to cup', 'Coffee cherries are harvested, processed, dried, roasted, ground, and brewed. Every step leaves a mark on the final flavor.'],
            ['Extraction basics', 'Water pulls flavor out of the grounds. Grind size, water temperature, contact time, and ratio decide whether the cup lands balanced, sour, or bitter.'],
            ['Milk and texture', 'Steaming folds air into milk to build a glossy microfoam. Heat it past about 65°C and the sweetness starts to disappear.'],
            ['Responsible sourcing', 'Ask where the coffee comes from, how producers are paid, and how a cafe cuts waste through reusable cups and thoughtful brewing.'],
        ];
        $ratios = [
            ['Espresso', '1:2', '25–30 seconds'],
            ['Pour-over', '1:16', '3 minutes'],
            ['French press', '1:15', '4 minutes'],
            ['Cold brew', '1:8', '12–18 hours'],
        ];
        $html .= '<header class="page-head reveal"><p class="store-kicker">Learn with every cup</p><h1>Coffee education</h1><p>A friendly starting point for students, curious guests, and future baristas.</p></header>';
        $html .= '<ol class="lesson-list">';
        $lessonIndex = 1;
        foreach ($lessons as $lesson) {
            $html .= '<li class="lesson reveal" style="--i:' . $lessonIndex . '"><span class="lesson-step">' . $lessonIndex . '</span><div><h2>' . $storefrontEsc($lesson[0]) . '</h2><p>' . $storefrontEsc($lesson[1]) . '</p></div></li>';
            $lessonIndex++;
        }
        $html .= '</ol>';
        $html .= '<div class="ratio-card reveal"><h2>Starting ratios</h2><p>Use these as a first attempt, then adjust to taste.</p><table class="ratio-table"><thead><tr><th>Method</th><th>Coffee to water</th><th>Time</th></tr></thead><tbody>';
        foreach ($ratios as $ratio) $html .= '<tr><td>' . $storefrontEsc($ratio[0]) . '</td><td>' . $storefrontEsc($ratio[1]) . '</td><td>' . $storefrontEsc($ratio[2]) . '</td></tr>';
        $html .= '</tbody></table></div>';
        $html .= '<div class="study-note reveal"><h2>For classroom use</h2><p>These notes work as an introduction for class discussions, cafe training, or your own tasting journal. Coffee is a practical lesson in agriculture, chemistry, design, hospitality, and sustainability all at once.</p></div>';
    } elseif ($page === 'coffee-about') {
        $html .= '<div class="about-hero reveal"><div class="about-copy"><p class="store-kicker">Our little corner</p><h1>A coffee shop made for lingering.</h1><p>We put together thoughtful drinks, honest food, and a place to pause. The details matter to us, but they should never feel complicated to you.</p><p>Come for the espresso, stay for the conversation, the study session, or a quiet afternoon by the window.</p><a class="store-button about-cta" href="' . Wcms::url('store') . '">See the menu</a></div><img src="https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?w=1200&q=85" alt="Warm coffee shop interior"></div>';
        $values = [
            ['Small batches', 'We roast and bake in amounts we can finish the same week, so nothing sits around waiting for you.'],
            ['Fair pricing', 'Honest prices for both our guests and the farms we buy from. No surprises at the counter.'],
            ['Room to stay', 'Free refills on drip coffee, outlets at most tables, and no rush to give up your seat.'],
        ];
        $html .= '<div class="value-grid">';
        $valueIndex = 1;
        foreach ($values as $value) {
            $html .= '<article class="value-card reveal" style="--i:' . $valueIndex . '"><h2>' . $storefrontEsc($value[0]) . '</h2><p>' . $storefrontEsc($value[1]) . '</p></article>';
            $valueIndex++;
        }
        $html .= '</div>';
        $html .= '<div class="visit-strip reveal"><div><h3>Open daily</h3><p>7:00 AM – 10:00 PM</p></div><div><h3>Kitchen</h3><p>Breakfast until 11:00 AM</p></div><div><h3>Delivery</h3><p>Within the city, 30–45 minutes</p></div></div>';
    } elseif ($page === 'store-success') {
        $html .= '<div class="store-panel order-success reveal"><p class="store-kicker">Order received</p><h1>Thank you for your order.</h1>' . ($confirmation ? '<p>Order number: <strong>' . $storefrontEsc($confirmation['id']) . '</strong></p><p>Total: <strong>' . $storefrontMoney($confirmation['total']) . '</strong><br>Payment: <strong>' . $storefrontEsc($confirmation['payment_method']) . '</strong></p>' : '<p>Order details are no longer available in this session.</p>') . '<p><a class="store-button" href="' . Wcms::url('store') . '">Continue shopping</a></p></div>';
    } elseif ($page === 'store-cart') {
        $total = 0;
        $itemCount = 0;
        $cartLines = '';
        foreach ($products as $product) {
            $quantity = (int)($cart[$product['id']] ?? 0);
            if (!$quantity) continue;
            $line = $quantity * (float)$product['price'];
            $total += $line;
            $itemCount += $quantity;
            $cartLines .= '<div class="cart-item"><img src="' . $storefrontEsc($product['image'] ?? '') . '" alt="' . $storefrontEsc($product['name']) . '" loading="lazy"><div class="cart-item-body"><strong>' . $storefrontEsc($product['name']) . '</strong><span>' . $storefrontMoney($product['price']) . ' · qty ' . $quantity . '</span></div><strong class="cart-item-total">' . $storefrontMoney($line) . '</strong></div>';
        }
        $html .= '<header class="page-head reveal"><p class="store-kicker">Your basket</p><h1>Ready when you are.</h1></header>';
        if (!$total) {
            $html .= '<div class="cart-empty reveal"><p>Your basket is empty.</p><a class="store-button" href="' . Wcms::url('store') . '">Browse the menu</a></div>';
        } else {
            $html .= '<div class="cart-layout">';
            $html .= '<section class="cart-items reveal"><h2>' . $itemCount . ' item' . ($itemCount === 1 ? '' : 's') . '</h2>' . $cartLines . '<div class="cart-total"><span>Total</span><strong>' . $storefrontMoney($total) . '</strong></div><a class="cart-back" href="' . Wcms::url('store') . '">Add something else</a></section>';
            $html .= '<aside class="cart-checkout reveal" style="--i:2"><h2>Delivery details</h2><p class="checkout-note">Guest checkout is available — signing in is optional.</p><form class="checkout-form" method="post"><input type="hidden" name="storefront_token" value="' . $storefrontToken() . '"><input type="hidden" name="storefront_action" value="checkout"><label>Name<input name="customer_name" autocomplete="name" required></label><label>Email<input name="customer_email" type="email" autocomplete="email" required></label><label>Phone<input name="customer_phone" type="tel" autocomplete="tel" required></label><label>Delivery address<textarea name="customer_address" rows="3" required></textarea></label><label>Payment method<select name="payment_method" required><option value="">Choose payment method</option><option>Cash on Delivery</option><option>GCash</option><option>Bank Transfer</option><option>Pay at store</option></select></label><button class="store-button checkout-submit" type="submit">Place order · ' . $storefrontMoney($total) . '</button></form></aside>';
            $html .= '</div>';
        }
    } elseif ($page === 'store-account') {
        $html .= '<div class="store-panel reveal"><p class="store-kicker">Account</p><h1>Your orders</h1>';
        if (!$userEmail) $html .= '<p><a class="store-button" href="' . Wcms::url('store-login') . '">Sign in</a></p>';
        else {
            $roleLabel = $userRole === 'admin' ? 'Admin' : 'Customer';
            $html .= '<p class="store-role-badge">Signed in as <strong>' . $storefrontEsc($userEmail) . '</strong> · ' . $storefrontEsc($roleLabel) . ($userRole === 'admin' ? ' · <a href="' . Wcms::url('store-admin') . '">Go to admin dashboard</a>' : '') . '</p>';
            $isSubscribed = (bool)($currentUser['subscribed'] ?? false);
            $html .= '<div class="store-subscribe-box"><h2>WonderBrew Club</h2>';
            if ($isSubscribed) {
                $sinceLabel = !empty($currentUser['subscribed_since']) ? ' since ' . $storefrontEsc(date('M j, Y', strtotime($currentUser['subscribed_since']))) : '';
                $html .= '<p>You\'re subscribed to the <strong>Free Plan</strong>' . $sinceLabel . '. No charge — just updates on promos and new products.</p><form method="post"><input type="hidden" name="storefront_token" value="' . $storefrontToken() . '"><input type="hidden" name="storefront_action" value="unsubscribe"><button class="store-link-button" type="submit">Cancel subscription</button></form>';
            } else {
                $html .= '<p>Join the WonderBrew Club — free, no charge. You\'ll receive updates on promos and new menu items.</p><form method="post"><input type="hidden" name="storefront_token" value="' . $storefrontToken() . '"><input type="hidden" name="storefront_action" value="subscribe"><button class="store-button" type="submit">Subscribe (Free)</button></form>';
            }
            $html .= '</div>';
            $found = false; $customerOrderCount = 0; foreach (array_reverse($storefrontData['orders']) as $order) if ($order['email'] === $userEmail) { $found = true; $customerOrderCount++; $html .= '<div class="store-line"><span>' . $storefrontEsc($order['id']) . ' · ' . $storefrontEsc($order['status']) . ' · ' . $storefrontEsc($order['payment_method'] ?? 'Payment pending') . '</span><strong>' . $storefrontMoney($order['total']) . '</strong></div>'; }
            if (!$found) $html .= '<p>No orders yet.</p>'; else $html = str_replace('<h1>Your orders</h1>', '<h1>Your orders <span class="order-count">' . $customerOrderCount . '</span></h1>', $html);
            $html .= '<p><a href="' . Wcms::url('storefront?storefront_action=logout') . '">Sign out</a></p>';
        }
        $html .= '</div>';
    } elseif ($page === 'store-admin' && $storefrontIsAdmin) {
        $wcmsToken = $Wcms->loggedIn ? $Wcms->getToken() : '';
        $storeToken = $storefrontToken();

        // ---- Dashboard data -----------------------------------------------------------
        $totalOrders = count($storefrontData['orders']);
        $totalRevenue = 0.0;
        foreach ($storefrontData['orders'] as $order) $totalRevenue += (float)($order['total'] ?? 0);

        $totalCustomers = 0;
        $subscriberCount = 0;
        foreach ($storefrontData['users'] as $storeUserCount) {
            if (($storeUserCount['role'] ?? 'user') !== 'admin') $totalCustomers++;
            if (!empty($storeUserCount['subscribed'])) $subscriberCount++;
        }

        // Ring stat #1: share of the catalog still in stock.
        $inStockCount = 0;
        foreach ($products as $p) if ((int)($p['stock'] ?? 0) > 0) $inStockCount++;
        $stockHealthPct = count($products) > 0 ? (int)round($inStockCount / count($products) * 100) : 0;

        // Ring stat #2: WonderBrew Club subscription rate among customers.
        $subscriptionPct = $totalCustomers > 0 ? (int)round($subscriberCount / $totalCustomers * 100) : 0;

        // Ring stat #3: customers who have ordered more than once.
        $ordersByEmail = [];
        foreach ($storefrontData['orders'] as $order) {
            $em = $order['email'] ?? '';
            if ($em === '') continue;
            $ordersByEmail[$em] = ($ordersByEmail[$em] ?? 0) + 1;
        }
        $uniqueOrderingCustomers = count($ordersByEmail);
        $repeatCustomers = 0;
        foreach ($ordersByEmail as $emailOrderCount) if ($emailOrderCount >= 2) $repeatCustomers++;
        $repeatPct = $uniqueOrderingCustomers > 0 ? (int)round($repeatCustomers / $uniqueOrderingCustomers * 100) : 0;

        // Ring stat #4: orders paid through a digital method (GCash / bank transfer).
        $digitalPaymentsCount = 0;
        foreach ($storefrontData['orders'] as $order) {
            if (in_array($order['payment_method'] ?? '', ['GCash', 'Bank Transfer'], true)) $digitalPaymentsCount++;
        }
        $digitalPaymentsPct = $totalOrders > 0 ? (int)round($digitalPaymentsCount / $totalOrders * 100) : 0;

        // Orders per day (Month view) and per month (Year view).
        $dailyOrdersRaw = [];
        foreach ($storefrontData['orders'] as $order) {
            $dayKey = date('Y-m-d', strtotime($order['created'] ?? 'now'));
            $dailyOrdersRaw[$dayKey] = ($dailyOrdersRaw[$dayKey] ?? 0) + 1;
        }
        ksort($dailyOrdersRaw);
        $dailyOrdersRaw = array_slice($dailyOrdersRaw, -30, null, true);
        $dailyLabels = [];
        $dailyValues = [];
        foreach ($dailyOrdersRaw as $dayKey => $count) { $dailyLabels[] = date('M j', strtotime($dayKey)); $dailyValues[] = $count; }

        $monthlyOrdersRaw = [];
        foreach ($storefrontData['orders'] as $order) {
            $monthKey = date('Y-m', strtotime($order['created'] ?? 'now'));
            $monthlyOrdersRaw[$monthKey] = ($monthlyOrdersRaw[$monthKey] ?? 0) + 1;
        }
        ksort($monthlyOrdersRaw);
        $monthlyOrdersRaw = array_slice($monthlyOrdersRaw, -12, null, true);
        $monthlyLabels = [];
        $monthlyValues = [];
        foreach ($monthlyOrdersRaw as $monthKey => $count) { $monthlyLabels[] = date('M Y', strtotime($monthKey . '-01')); $monthlyValues[] = $count; }

        // Tiny 7-day sparkline shown next to each ring stat.
        $sparkValues = array_values(array_slice($dailyOrdersRaw, -7, null, true));
        if (!$sparkValues) $sparkValues = [0];
        $sparkMax = max(1, max($sparkValues));

        // Revenue grouped by product category, for the donut chart.
        $categoryByName = [];
        foreach ($products as $p) $categoryByName[$p['name']] = $p['category'] ?? 'Other';
        $revenueByCategory = [];
        foreach ($storefrontData['orders'] as $order) {
            foreach (($order['items'] ?? []) as $item) {
                $cat = $categoryByName[$item['name'] ?? ''] ?? 'Other';
                $revenueByCategory[$cat] = ($revenueByCategory[$cat] ?? 0) + ((float)($item['price'] ?? 0) * (int)($item['quantity'] ?? 0));
            }
        }
        arsort($revenueByCategory);

        // Latest 6 orders, for the events feed.
        $latestOrders = array_slice(array_reverse($storefrontData['orders']), 0, 6);
        $timeAgo = static function (string $iso): string {
            $diff = time() - strtotime($iso);
            if ($diff < 60) return 'Just now';
            if ($diff < 3600) return (int)floor($diff / 60) . 'm ago';
            if ($diff < 86400) return (int)floor($diff / 3600) . 'h ago';
            if ($diff < 604800) return (int)floor($diff / 86400) . 'd ago';
            return date('M j', strtotime($iso));
        };
        // ---- End dashboard data --------------------------------------------------------

        $html .= '<div class="store-panel dash-panel"><p class="store-kicker">Store administration</p><h1>Dashboard</h1><div class="dash-wrap">';

        $dashStatCards = [
            ['label' => 'Orders', 'value' => $totalOrders, 'color' => '#f6c879', 'anchor' => 'storeAdminOrders'],
            ['label' => 'Products', 'value' => count($products), 'color' => '#e2a86b', 'anchor' => 'storeAdminCatalog'],
            ['label' => 'Customers', 'value' => $totalCustomers, 'color' => '#c9835f', 'anchor' => 'storeAdminAccounts'],
            ['label' => 'Subscribers', 'value' => $subscriberCount, 'color' => '#9c6b4f', 'anchor' => 'storeAdminAccounts'],
        ];
        $html .= '<div class="dash-stats-row">';
        foreach ($dashStatCards as $card) {
            $html .= '<div class="dash-stat-card"><div class="dash-stat-top"><span class="dash-dot" style="background:' . $card['color'] . '"></span><span>' . $storefrontEsc($card['label']) . '</span></div><div class="dash-stat-bottom"><strong>' . number_format((int)$card['value']) . '</strong><a class="dash-view-all" href="#' . $card['anchor'] . '">View All</a></div></div>';
        }
        $html .= '</div>';

        $html .= '<div class="dash-main-grid">';
        $html .= '<div class="dash-card dash-chart-card"><div class="dash-chart-head"><h3>Orders</h3><div class="dash-toggle" id="dashRangeToggle"><button type="button" class="dash-toggle-btn is-active" data-range="month">Month</button><button type="button" class="dash-toggle-btn" data-range="year">Year</button></div></div>';
        $html .= $totalOrders > 0 ? '<canvas id="dashOrdersChart" height="230"></canvas>' : '<p class="stats-empty">No orders yet — the chart will fill in once orders start coming in.</p>';
        $html .= '</div>';

        $html .= '<div class="dash-card dash-events-card"><h3>Latest orders</h3><div class="dash-event-list">';
        if ($latestOrders) {
            foreach ($latestOrders as $order) {
                $orderName = $order['customer_name'] ?? $order['email'] ?? '?';
                $initial = strtoupper(substr($orderName, 0, 1));
                $itemNames = array_map(static fn (array $i): string => $i['name'] ?? '', array_slice($order['items'] ?? [], 0, 2));
                $itemsSummary = implode(', ', $itemNames);
                if (count($order['items'] ?? []) > 2) $itemsSummary .= '…';
                $html .= '<div class="dash-event"><span class="dash-event-avatar">' . $storefrontEsc($initial) . '</span><div class="dash-event-body"><strong>' . $storefrontEsc($orderName) . '</strong><span>' . $storefrontEsc($itemsSummary) . '</span></div><div class="dash-event-meta"><span>' . $storefrontEsc($timeAgo($order['created'] ?? 'now')) . '</span><strong>' . $storefrontMoney($order['total']) . '</strong></div></div>';
            }
        } else {
            $html .= '<p class="stats-empty">No orders yet.</p>';
        }
        $html .= '</div></div>';
        $html .= '</div>'; // dash-main-grid

        $html .= '<div class="dash-lower-grid">';
        $html .= '<div class="dash-card dash-ring-card"><h3>Statistics</h3>';
        $ringMetrics = [
            ['label' => 'Stock health', 'value' => $inStockCount, 'pct' => $stockHealthPct, 'color' => '#33c2a0'],
            ['label' => 'Club subscribers', 'value' => $subscriberCount, 'pct' => $subscriptionPct, 'color' => '#f6c879'],
            ['label' => 'Repeat customers', 'value' => $repeatCustomers, 'pct' => $repeatPct, 'color' => '#6c8cf5'],
            ['label' => 'Digital payments', 'value' => $digitalPaymentsCount, 'pct' => $digitalPaymentsPct, 'color' => '#e46a6a'],
        ];
        foreach ($ringMetrics as $metric) {
            $html .= '<div class="dash-ring-row"><div class="dash-ring" style="--pct:' . $metric['pct'] . ';--ring-color:' . $metric['color'] . '"><span>' . $metric['pct'] . '%</span></div><div class="dash-ring-info"><span class="dash-ring-label">' . $storefrontEsc($metric['label']) . '</span><strong>' . number_format((int)$metric['value']) . '</strong></div><div class="dash-spark">';
            foreach ($sparkValues as $sparkValue) {
                $barHeight = max(4, (int)round(($sparkValue / $sparkMax) * 24));
                $html .= '<span style="height:' . $barHeight . 'px;background:' . $metric['color'] . '"></span>';
            }
            $html .= '</div></div>';
        }
        $html .= '</div>';

        $html .= '<div class="dash-card dash-donut-card"><h3>Revenue by category</h3>';
        if ($revenueByCategory) {
            $html .= '<div class="dash-donut-wrap"><canvas id="dashRevenueDonut" height="220"></canvas><div class="dash-donut-center"><strong>' . $storefrontMoney($totalRevenue) . '</strong><span>Total</span></div></div><div class="dash-legend">';
            $donutColors = ['#f6c879', '#e2865f', '#6c8cf5', '#33c2a0', '#c9835f', '#9c6b4f', '#e46a6a', '#8a5a44'];
            $colorIndex = 0;
            foreach ($revenueByCategory as $categoryName => $categoryAmount) {
                $legendColor = $donutColors[$colorIndex % count($donutColors)];
                $html .= '<div class="dash-legend-item"><span style="background:' . $legendColor . '"></span>' . $storefrontEsc($categoryName) . '<strong>' . $storefrontMoney($categoryAmount) . '</strong></div>';
                $colorIndex++;
            }
            $html .= '</div>';
        } else {
            $html .= '<p class="stats-empty">No sales yet.</p>';
        }
        $html .= '</div>';
        $html .= '</div>'; // dash-lower-grid

        if ($totalOrders > 0) {
            $dashPayload = json_encode([
                'monthLabels' => $dailyLabels,
                'monthValues' => $dailyValues,
                'yearLabels' => $monthlyLabels,
                'yearValues' => $monthlyValues,
                'donutLabels' => array_keys($revenueByCategory),
                'donutValues' => array_values($revenueByCategory),
            ], JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
            $html .= '<script id="dashData" type="application/json">' . $dashPayload . '</script>';
        }

        $html .= '</div></div>'; // dash-wrap, dash-panel

        $html .= '<div class="store-panel"><p class="store-kicker">Catalog</p><h1>Products and orders</h1><p class="order-summary">Total orders received: <strong>' . $totalOrders . '</strong></p><form class="store-admin-form" method="post"><input type="hidden" name="token" value="' . $wcmsToken . '"><input type="hidden" name="storefront_token" value="' . $storeToken . '"><input type="hidden" name="storefront_action" value="save_product"><input name="product_name" placeholder="Product name" required><input name="product_price" type="number" min="100" step="0.01" placeholder="Price in PHP (minimum ₱100)" required><input name="product_stock" type="number" placeholder="Stock" required><input name="product_description" placeholder="Short description"><button class="store-button" type="submit">Add product</button></form>';
        $html .= '<h2 id="storeAdminCatalog">Products (' . count($products) . ')</h2>';
        foreach ($products as $product) $html .= '<div class="store-line"><span>' . $storefrontEsc($product['name']) . ' · ' . $storefrontMoney($product['price']) . ' · ' . (int)$product['stock'] . ' in stock</span><form method="post"><input type="hidden" name="token" value="' . $wcmsToken . '"><input type="hidden" name="storefront_token" value="' . $storeToken . '"><input type="hidden" name="storefront_action" value="delete_product"><input type="hidden" name="product_id" value="' . $storefrontEsc($product['id']) . '"><button class="store-link-button" type="submit">Delete</button></form></div>';
        $html .= '<h2 id="storeAdminOrders">Orders (' . $totalOrders . ')</h2>'; foreach (array_reverse($storefrontData['orders']) as $order) $html .= '<div class="store-line"><span>' . $storefrontEsc($order['id']) . ' · ' . $storefrontEsc($order['email']) . ' · ' . $storefrontEsc($order['payment_method'] ?? 'Payment pending') . '</span><strong>' . $storefrontMoney($order['total']) . '</strong></div>';
        $html .= '<h2 id="storeAdminAccounts">Accounts &amp; WonderBrew Club (' . count($storefrontData['users']) . ' accounts · ' . $subscriberCount . ' free subscribers)</h2>';
        foreach ($storefrontData['users'] as $storeUser) {
            $isSub = !empty($storeUser['subscribed']);
            $roleTag = ($storeUser['role'] ?? 'user') === 'admin' ? 'Admin' : 'User';
            $html .= '<div class="store-line"><span>' . $storefrontEsc($storeUser['name'] ?? $storeUser['email']) . ' &lt;' . $storefrontEsc($storeUser['email']) . '&gt; · ' . $roleTag . ($isSub ? ' · Free subscriber' : '') . '</span><form method="post"><input type="hidden" name="token" value="' . $wcmsToken . '"><input type="hidden" name="storefront_token" value="' . $storeToken . '"><input type="hidden" name="storefront_action" value="toggle_role"><input type="hidden" name="user_email" value="' . $storefrontEsc($storeUser['email']) . '"><button class="store-link-button" type="submit">Make ' . ($roleTag === 'Admin' ? 'User' : 'Admin') . '</button></form></div>';
        }
        $html .= '</div>';
    } elseif ($page === 'store-admin') {
        $html .= '<div class="store-panel reveal"><p class="store-kicker">Store administration</p><h1>Admins only</h1><p>You need to log in with an admin account to view this page.</p><p><a class="store-button" href="' . Wcms::url('store-login') . '">Sign in</a></p></div>';
    } else {
        // Featured drink shown inside the big round hero disc: Mocha if available, else the first product.
        $featuredProduct = null;
        foreach ($products as $product) { if ($product['id'] === 'mocha') { $featuredProduct = $product; break; } }
        if (!$featuredProduct && $products) $featuredProduct = $products[0];

        // Four small round shortcuts under the call to action.
        $heroPicks = [];
        foreach ($products as $product) {
            if ($featuredProduct && $product['id'] === $featuredProduct['id']) continue;
            $heroPicks[] = $product;
            if (count($heroPicks) === 4) break;
        }

        $html .= '<section class="owl-hero">';
        $html .= '<div class="owl-hero-grid">';

        $html .= '<div class="owl-hero-copy">';
        $html .= '<h1>Your Perfect<br>Cup, Every Time</h1>';
        $html .= '<p class="owl-hero-sub">Hand-selected beans. Roasted to perfection.<br>Delivered to your door.</p>';
        $html .= '<a class="owl-cta" href="#store-grid-start">Shop Coffee</a>';
        if ($heroPicks) {
            $html .= '<div class="owl-thumbs">';
            foreach ($heroPicks as $pick) {
                $html .= '<a class="owl-thumb" href="#product-' . $storefrontEsc($pick['id']) . '" title="' . $storefrontEsc($pick['name']) . '"><img src="' . $storefrontEsc($pick['image'] ?? '') . '" alt="' . $storefrontEsc($pick['name']) . '" loading="lazy"></a>';
            }
            $html .= '</div>';
        }
        $html .= '</div>';

        $html .= '<div class="owl-hero-visual">';
        $html .= '<span class="owl-disc" aria-hidden="true"></span>';
        if ($featuredProduct) {
            $html .= '<img class="owl-hero-drink" src="' . $storefrontEsc($featuredProduct['image'] ?? '') . '" alt="' . $storefrontEsc($featuredProduct['name']) . '">';
        }
        $beanImage = 'https://images.unsplash.com/photo-1447933601403-0c6688de566e?w=200&q=80';
        foreach (['owl-bean-1', 'owl-bean-2', 'owl-bean-3', 'owl-bean-4'] as $beanClass) {
            $html .= '<span class="owl-bean ' . $beanClass . '" aria-hidden="true"><img src="' . $beanImage . '" alt="" loading="lazy"></span>';
        }
        $html .= '</div>';

        $html .= '</div>'; // owl-hero-grid

        $html .= '<ul class="owl-promises">'
            . '<li><span aria-hidden="true">🌱</span>Sustainably sourced</li>'
            . '<li><span aria-hidden="true">🔥</span>Freshly roasted</li>'
            . '<li><span aria-hidden="true">☕</span>Tailored for you</li>'
            . '</ul>';

        $html .= '</section>';

        $html .= '<div class="store-grid" id="store-grid-start">';
        $activeCategory = '';
        foreach ($products as $product) {
            if (($product['category'] ?? '') !== $activeCategory) {
                $activeCategory = $product['category'] ?? 'Menu';
                $html .= '<h2 class="store-category-title">' . $storefrontEsc($activeCategory) . '</h2>';
            }
            $image = $storefrontEsc($product['image'] ?? '');
            $html .= '<article class="store-product" id="product-' . $storefrontEsc($product['id']) . '"><button class="store-image-button" type="button" onclick="openProductZoom(this)" data-name="' . $storefrontEsc($product['name']) . '" data-image="' . $image . '" aria-label="Zoom ' . $storefrontEsc($product['name']) . '"><img src="' . $image . '" alt="' . $storefrontEsc($product['name']) . '" loading="lazy"></button><span class="store-product-number">' . $storefrontEsc(strtoupper(substr($product['name'], 0, 1))) . '</span><h2>' . $storefrontEsc($product['name']) . '</h2><p>' . $storefrontEsc($product['description']) . '</p><div class="store-product-foot"><strong>' . $storefrontMoney($product['price']) . '</strong>' . ((int)$product['stock'] > 0 ? '<form method="post"><input type="hidden" name="storefront_token" value="' . $storefrontToken() . '"><input type="hidden" name="storefront_action" value="add"><input type="hidden" name="product_id" value="' . $storefrontEsc($product['id']) . '"><button class="store-button add-to-cart-btn" type="submit"><span class="cart-icon" aria-hidden="true">🛒</span>Add to cart</button></form>' : '<span class="sold-out-badge">Sold out</span>') . '</div></article>';
        }
        $html .= '<div id="productZoom" class="product-zoom" onclick="closeProductZoom(event)"><div class="product-zoom-content"><button type="button" onclick="closeProductZoom(event)" aria-label="Close">&times;</button><img id="productZoomImage" src="" alt=""><div class="zoom-controls"><button type="button" onclick="changeProductZoom(-.2,event)" aria-label="Zoom out">-</button><button type="button" onclick="changeProductZoom(.2,event)" aria-label="Zoom in">+</button></div><h2 id="productZoomName"></h2></div></div>';
        $html .= '</div>';
    }
    return $html . '</div>';
};

$Wcms->addListener('menu', static function (array $args) use ($Wcms): array {
    $cartCount = 0;
    foreach (($_SESSION['storefront_cart'] ?? []) as $qty) $cartCount += (int)$qty;
    $cartBadge = $cartCount > 0 ? '<span class="cart-count-badge">' . $cartCount . '</span>' : '';
    $args[0] .= '<li><a href="' . Wcms::url('store') . '">Shop</a></li><li><a class="basket-link" href="' . Wcms::url('store-cart') . '">Basket' . $cartBadge . '</a></li>';
    return $args;
});

$Wcms->addListener('page', static function (array $args) use ($storefrontPage, $Wcms): array {
    if (!in_array($Wcms->currentPage, ['store', 'store-login', 'store-register', 'store-cart', 'store-account', 'store-success', 'store-admin', 'coffee-blog', 'coffee-photo', 'coffee-education', 'coffee-about'], true)) return $args;
    if ($args[1] === 'title') $args[0] = $Wcms->get('config', 'siteTitle') . ' - Shop';
    if ($args[1] === 'description') $args[0] = 'Browse products and place an order.';
    if ($args[1] === 'keywords') $args[0] = 'shop, products, orders';
    if ($args[1] === 'content') $args[0] = $storefrontPage($Wcms->currentPage);
    return $args;
});

$Wcms->addListener('css', static function (array $args): array {
    $args[0] .= '<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Fraunces:opsz,wght@9..144,500;9..144,600&display=swap" rel="stylesheet">';
    $args[0] .= '<style>.storefront-shell{max-width:1100px;margin:0 auto;padding:2rem 0;font-family:"Poppins",-apple-system,BlinkMacSystemFont,sans-serif}.storefront-shell h1,.storefront-shell h2{font-family:"Fraunces",Georgia,serif}.store-hero{padding:2.5rem 0 2rem}.store-kicker{color:#f6c879;text-transform:uppercase;letter-spacing:.14em;font-size:.7rem;font-weight:600}.store-hero h1,.store-panel h1{font-size:clamp(1.7rem,3.4vw,2.6rem);line-height:1.15;margin:.5rem 0 1rem;font-weight:600}.store-hero p,.store-panel p{font-size:.95rem;line-height:1.6;color:#f1ddc0}.store-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:1.1rem}.store-product,.store-panel{background:rgba(45,23,18,.78);border:1px solid rgba(247,218,181,.22);padding:1.4rem;border-radius:16px;box-shadow:0 18px 45px rgba(33,15,10,.2);transition:transform .2s ease,box-shadow .2s ease}.store-product:hover{transform:translateY(-3px);box-shadow:0 22px 50px rgba(33,15,10,.28)}.store-product-number{display:grid;place-items:center;width:2.6rem;height:2.6rem;border-radius:50%;background:#f6c879;color:#3a2118;font-weight:700;font-size:.9rem}.store-product h2{margin:1.2rem 0 .35rem;font-size:1.15rem}.store-product p{min-height:3.2em;font-size:.85rem;opacity:.85}.store-product-foot,.store-line,.store-total{display:flex;justify-content:space-between;align-items:center;gap:1rem;border-top:1px solid rgba(247,218,181,.18);padding-top:1rem;margin-top:1rem}.store-button{background:#f6c879!important;color:#3a2118!important;border:0!important;border-radius:7px!important;line-height:2.6em!important;padding:0 1.1em!important;font-size:.78rem!important;font-weight:600!important;letter-spacing:.02em!important;font-family:"Poppins",sans-serif!important;cursor:pointer;transition:filter .15s ease,transform .15s ease}.store-button:hover{filter:brightness(1.06);transform:translateY(-1px)}.store-panel{max-width:720px;margin:2rem auto}.store-auth{max-width:440px}.store-auth h1{color:#f8dfbc}.store-panel label{display:block;margin:1rem 0;font-size:.85rem;color:#f1ddc0}.store-panel input{display:block;width:100%;padding:.75rem .85rem;border:1px solid rgba(247,218,181,.3);background:rgba(24,11,8,.35);color:#fff;border-radius:7px;font-size:.9rem;font-family:"Poppins",sans-serif;margin-top:.35rem}.store-alert{padding:.9rem 1rem;margin-bottom:1rem;border-radius:8px;font-size:.88rem}.store-alert-error{background:#8b3c48}.store-alert-success{background:#286653}.store-admin-form{display:grid;gap:.7rem}.store-link-button{border:0;background:none;color:#f6c879;cursor:pointer;font-size:.82rem;font-family:"Poppins",sans-serif}.store-panel h2{margin-top:2rem;font-size:1.2rem}.coffee-admin-login{max-width:460px;margin:4rem auto;padding:2.5rem;background:rgba(45,23,18,.84);border:1px solid rgba(247,218,181,.28);border-radius:18px;box-shadow:0 22px 55px rgba(25,10,6,.3);font-family:"Poppins",sans-serif}.coffee-admin-login h1{color:#f8dfbc;font-family:"Fraunces",serif;font-size:1.8rem}.coffee-admin-login .wform-control{width:100%;padding:.9rem;background:#fff8ed;border:0;border-radius:8px;color:#3a2118}.coffee-admin-login .wbtn{background:#f6c879;color:#3a2118;border:0;border-radius:8px;padding:.75rem 2rem;font-weight:600}@media(max-width:600px){.storefront-shell{padding:1rem}.store-hero{padding:1.5rem 0 1rem}}</style>';
    return $args;
});

$Wcms->addListener('css', static function (array $args): array {
    $args[0] .= '<style>'
        . '.owl-hero{position:relative;margin:0 0 2.5rem;padding:clamp(2rem,4.5vw,3.6rem) clamp(1.4rem,4vw,3.4rem) 1.6rem;background:#1c0e08;border:1px solid rgba(247,218,181,.12);border-radius:26px;overflow:hidden}'
        . '.owl-hero-grid{display:grid;grid-template-columns:minmax(0,1fr) minmax(0,1fr);align-items:center;gap:clamp(1.5rem,4vw,3rem);min-height:400px}'
        . '.owl-hero-copy{position:relative;z-index:2}'
        . '.owl-hero-copy h1{font-family:"Poppins",-apple-system,sans-serif;font-weight:700;font-size:clamp(2.3rem,5.2vw,4rem);line-height:1.08;letter-spacing:-.015em;color:#f6d6a6;margin:0 0 1rem}'
        . '.owl-hero-sub{font-size:clamp(.92rem,1.4vw,1.05rem);line-height:1.6;color:#e7cdaa;opacity:.82;margin:0 0 1.6rem;max-width:30ch}'
        . '.owl-cta{display:inline-block;background:#6d3b1c;color:#ffe6c4!important;border:0;border-radius:999px;padding:.85rem 1.9rem;font-size:.95rem;font-weight:600;text-decoration:none;transition:background .18s ease,transform .18s ease}'
        . '.owl-cta:hover{background:#82481f;color:#fff3e0!important;transform:translateY(-1px);border-bottom:0}'
        . '.owl-cta:focus-visible{outline:2px solid #f6c879;outline-offset:3px}'
        . '.owl-thumbs{display:flex;gap:1rem;margin-top:2.2rem;flex-wrap:wrap}'
        . '.owl-thumb{width:68px;height:68px;border-radius:50%;overflow:hidden;border:0;background:#7a441f;display:block;transition:transform .2s ease,box-shadow .2s ease}'
        . '.owl-thumb img{width:100%;height:100%;object-fit:cover;display:block}'
        . '.owl-thumb:hover{transform:translateY(-4px);box-shadow:0 12px 22px rgba(0,0,0,.45);border-bottom:0}'
        . '.owl-thumb:focus-visible{outline:2px solid #f6c879;outline-offset:3px}'
        . '.owl-hero-visual{position:relative;display:flex;align-items:center;justify-content:center;min-height:360px}'
        . '.owl-disc{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:min(360px,92%);aspect-ratio:1;border-radius:50%;background:radial-gradient(circle at 32% 26%,#a05e2c 0%,#7c451f 55%,#5d3117 100%)}'
        . '.owl-hero-drink{position:relative;z-index:2;width:min(300px,78%);aspect-ratio:3/4;object-fit:cover;border-radius:22px;box-shadow:0 26px 48px rgba(0,0,0,.55)}'
        . '.owl-bean{position:absolute;z-index:3;border-radius:50%;overflow:hidden;box-shadow:0 10px 20px rgba(0,0,0,.5)}'
        . '.owl-bean img{width:100%;height:100%;object-fit:cover;display:block}'
        . '.owl-bean-1{width:66px;height:66px;top:8%;left:6%}'
        . '.owl-bean-2{width:52px;height:52px;top:16%;right:4%}'
        . '.owl-bean-3{width:40px;height:40px;top:44%;left:0}'
        . '.owl-bean-4{width:34px;height:34px;bottom:14%;right:10%}'
        . '.owl-promises{display:flex;flex-wrap:wrap;justify-content:space-between;gap:.8rem 2rem;margin:2.4rem 0 0;padding:1.4rem 0 0;border-top:1px solid rgba(247,218,181,.14);list-style:none}'
        . '.owl-promises li{display:flex;align-items:center;gap:.55rem;color:#f2c98f;font-size:.86rem;font-weight:600}'
        . '.owl-promises span{font-size:1.05rem}'
        . '@keyframes owlFloat{0%,100%{transform:translateY(0)}50%{transform:translateY(-12px)}}'
        . '.owl-hero-drink{animation:owlFloat 5s ease-in-out infinite}'
        . '@media(prefers-reduced-motion:reduce){.owl-hero-drink{animation:none}}'
        . '@media(max-width:820px){'
        . '.owl-hero-grid{grid-template-columns:1fr;text-align:center;min-height:auto}'
        . '.owl-hero-copy{order:2}.owl-hero-visual{order:1;min-height:300px}'
        . '.owl-hero-sub{margin-left:auto;margin-right:auto}'
        . '.owl-thumbs{justify-content:center}'
        . '.owl-promises{justify-content:center;gap:.8rem 1.4rem}'
        . '}'
        . '</style>';
    return $args;
});

$Wcms->addListener('css', static function (array $args): array {
    $args[0] .= '<style>.store-category-title{grid-column:1/-1;margin:1.8rem 0 .2rem;color:#f6c879;border-bottom:1px solid rgba(247,218,181,.22);padding-bottom:.55rem;font-size:1.05rem;font-weight:600}.store-image-button{display:block;width:100%;height:170px;padding:0;border:0;background:none;cursor:zoom-in;overflow:hidden;border-radius:11px}.store-image-button img{width:100%;height:100%;object-fit:cover;transition:transform .35s ease}.store-image-button:hover img{transform:scale(1.08)}.store-product .store-button{line-height:2.3em!important;padding:0 .8em!important;font-size:.72rem!important;letter-spacing:.01em!important;border-radius:6px!important;display:inline-flex;align-items:center;gap:.4em}.cart-icon{font-size:.9em}.sold-out-badge{font-size:.78rem;color:#e8c493;opacity:.75;font-weight:500}.demo-login{margin:1rem 0;padding:.8rem 1rem;border:1px dashed rgba(247,218,181,.32);border-radius:9px;color:#f6d09b;font-size:.8rem;line-height:1.6}.checkout-form select{display:block;width:100%;padding:.75rem .85rem;border:1px solid rgba(247,218,181,.3);background:#2b1712;color:#fff;border-radius:7px;font-family:"Poppins",sans-serif;font-size:.9rem;margin-top:.35rem}.product-zoom{display:none;position:fixed;z-index:3000;inset:0;background:rgba(20,9,5,.88);align-items:center;justify-content:center;padding:1rem}.product-zoom.is-open{display:flex}.product-zoom-content{position:relative;max-width:850px;width:100%;text-align:center}.product-zoom-content img{max-width:100%;max-height:75vh;border-radius:12px;object-fit:contain;box-shadow:0 15px 50px #000;transition:transform .2s ease}.product-zoom-content h2{color:#f8dfbc;font-size:1.2rem}.product-zoom-content>button{position:absolute;right:0;top:-2.5rem;border:0;background:none;color:#fff;font-size:1.8rem;cursor:pointer}.zoom-controls{display:flex;justify-content:center;gap:.6rem;margin:.8rem}.zoom-controls button{width:2.3rem;height:2.3rem;border:0;border-radius:50%;background:#f6c879;color:#3a2118;font-size:1.2rem;font-weight:700;cursor:pointer}.basket-link{position:relative}.cart-count-badge{display:inline-flex;align-items:center;justify-content:center;min-width:1.15rem;height:1.15rem;padding:0 .3rem;margin-left:.35rem;background:#e46a6a;color:#fff;border-radius:999px;font-size:.62rem;font-weight:700;vertical-align:middle}@media(max-width:600px){.store-image-button{height:145px}.store-category-title{margin-top:1.3rem}}</style>';
    return $args;
});

$Wcms->addListener('css', static function (array $args): array {
    $args[0] .= '<style>'
        . '.dash-panel{max-width:1100px}'
        . '.dash-wrap{display:flex;flex-direction:column;gap:1.1rem;margin-top:1rem}'
        . '.dash-stats-row{display:grid;grid-template-columns:repeat(auto-fit,minmax(150px,1fr));gap:.9rem}'
        . '.dash-stat-card{background:#1b1210;border:1px solid rgba(247,218,181,.16);border-radius:14px;padding:1rem 1.1rem}'
        . '.dash-stat-top{display:flex;align-items:center;gap:.5rem;font-size:.78rem;color:#e8c493;opacity:.85;margin-bottom:.7rem}'
        . '.dash-dot{width:.55rem;height:.55rem;border-radius:50%;display:inline-block;flex:0 0 auto}'
        . '.dash-stat-bottom{display:flex;align-items:center;justify-content:space-between;gap:.5rem}'
        . '.dash-stat-bottom strong{font-size:1.4rem;color:#f8dfbc;font-family:"Fraunces",serif;font-weight:600}'
        . '.dash-view-all{font-size:.66rem;background:rgba(246,200,121,.14);color:#f6c879;padding:.3rem .65rem;border-radius:999px;text-decoration:none;white-space:nowrap}'
        . '.dash-main-grid{display:grid;grid-template-columns:2fr 1fr;gap:1.1rem}'
        . '.dash-lower-grid{display:grid;grid-template-columns:1fr 1fr;gap:1.1rem}'
        . '.dash-card{background:#1b1210;border:1px solid rgba(247,218,181,.16);border-radius:16px;padding:1.2rem}'
        . '.dash-card h3{margin:0 0 1rem;font-size:.84rem;color:#f6c879;letter-spacing:.01em;font-family:"Poppins",sans-serif;font-weight:600}'
        . '.dash-chart-head{display:flex;align-items:center;justify-content:space-between;margin-bottom:1rem}'
        . '.dash-chart-head h3{margin:0}'
        . '.dash-toggle{display:flex;gap:.25rem;background:rgba(255,255,255,.05);border-radius:999px;padding:.2rem}'
        . '.dash-toggle-btn{border:0;background:none;color:#e8c493;font-size:.68rem;padding:.35rem .75rem;border-radius:999px;cursor:pointer;font-family:"Poppins",sans-serif}'
        . '.dash-toggle-btn.is-active{background:#f6c879;color:#3a2118;font-weight:600}'
        . '.dash-event-list{display:flex;flex-direction:column;gap:.85rem;max-height:300px;overflow-y:auto}'
        . '.dash-event{display:flex;align-items:center;gap:.7rem}'
        . '.dash-event-avatar{width:2.1rem;height:2.1rem;flex:0 0 auto;border-radius:50%;background:#f6c879;color:#3a2118;font-weight:700;display:grid;place-items:center;font-size:.8rem}'
        . '.dash-event-body{display:flex;flex-direction:column;flex:1;min-width:0}'
        . '.dash-event-body strong{font-size:.8rem;color:#f8dfbc;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;font-weight:600}'
        . '.dash-event-body span{font-size:.7rem;color:#e8c493;opacity:.75;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}'
        . '.dash-event-meta{display:flex;flex-direction:column;align-items:flex-end;font-size:.7rem;color:#e8c493;flex:0 0 auto}'
        . '.dash-event-meta strong{color:#f6c879;font-size:.76rem}'
        . '.dash-ring-row{display:flex;align-items:center;gap:.9rem;padding:.6rem 0;border-top:1px solid rgba(247,218,181,.1)}'
        . '.dash-ring-row:first-of-type{border-top:0;padding-top:0}'
        . '.dash-ring{width:50px;height:50px;border-radius:50%;flex:0 0 auto;display:grid;place-items:center;background:conic-gradient(var(--ring-color) calc(var(--pct)*1%),rgba(255,255,255,.08) 0)}'
        . '.dash-ring span{background:#1b1210;width:37px;height:37px;border-radius:50%;display:grid;place-items:center;font-size:.58rem;font-weight:700;color:#f8dfbc}'
        . '.dash-ring-info{display:flex;flex-direction:column;flex:1}'
        . '.dash-ring-label{font-size:.7rem;color:#e8c493;opacity:.85}'
        . '.dash-ring-info strong{font-size:1rem;color:#f8dfbc;font-family:"Fraunces",serif;font-weight:600}'
        . '.dash-spark{display:flex;align-items:flex-end;gap:2px;height:26px;flex:0 0 auto}'
        . '.dash-spark span{width:4px;border-radius:2px;display:block}'
        . '.dash-donut-wrap{position:relative;display:flex;justify-content:center;margin-bottom:.8rem;max-width:220px;margin-left:auto;margin-right:auto}'
        . '.dash-donut-center{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);text-align:center}'
        . '.dash-donut-center strong{display:block;font-size:1rem;color:#f8dfbc;font-family:"Fraunces",serif}'
        . '.dash-donut-center span{font-size:.6rem;color:#e8c493;opacity:.8}'
        . '.dash-legend{display:flex;flex-direction:column;gap:.5rem;font-size:.74rem;color:#e8c493}'
        . '.dash-legend-item{display:flex;align-items:center;gap:.5rem}'
        . '.dash-legend-item span{width:.55rem;height:.55rem;border-radius:50%;display:inline-block;flex:0 0 auto}'
        . '.dash-legend-item strong{margin-left:auto;color:#f8dfbc}'
        . '.stats-empty{color:#e8c493;opacity:.85;font-size:.88rem}'
        . '@media(max-width:760px){.dash-main-grid,.dash-lower-grid{grid-template-columns:1fr}}'
        . '</style>';
    return $args;
});

$Wcms->addListener('js', static function (array $args): array {
    $args[0] .= '<script>var productZoomScale=1;function openProductZoom(button){var modal=document.getElementById("productZoom"),image=document.getElementById("productZoomImage");productZoomScale=1;image.style.transform="scale(1)";image.src=button.dataset.image;image.alt=button.dataset.name;document.getElementById("productZoomName").textContent=button.dataset.name;modal.classList.add("is-open");}function changeProductZoom(amount,event){event.stopPropagation();productZoomScale=Math.max(.6,Math.min(2,productZoomScale+amount));document.getElementById("productZoomImage").style.transform="scale("+productZoomScale+")";}function closeProductZoom(event){if(event.target.id==="productZoom"||event.target.tagName==="BUTTON"){document.getElementById("productZoom").classList.remove("is-open");}}document.addEventListener("keydown",function(event){if(event.key==="Escape"){var modal=document.getElementById("productZoom");if(modal)modal.classList.remove("is-open");}});</script>';
    return $args;
});

$Wcms->addListener('js', static function (array $args) use ($Wcms): array {
    if ($Wcms->currentPage !== 'store-admin') return $args;
    $args[0] .= '<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.4/dist/chart.umd.min.js"></script><script>(function(){'
        . 'var dataEl=document.getElementById("dashData");if(!dataEl)return;'
        . 'var d;try{d=JSON.parse(dataEl.textContent);}catch(e){return;}'
        . 'var ordersCanvas=document.getElementById("dashOrdersChart");var ordersChart=null;'
        . 'if(ordersCanvas&&window.Chart){ordersChart=new Chart(ordersCanvas,{type:"bar",data:{labels:d.monthLabels,datasets:[{label:"Orders",data:d.monthValues,backgroundColor:"#f6c879",borderRadius:4,maxBarThickness:26}]},options:{responsive:true,plugins:{legend:{display:false}},scales:{y:{beginAtZero:true,ticks:{color:"#e8c493",precision:0},grid:{color:"rgba(247,218,181,.1)"}},x:{ticks:{color:"#e8c493"},grid:{display:false}}}}});}'
        . 'var toggle=document.getElementById("dashRangeToggle");'
        . 'if(toggle&&ordersChart){toggle.addEventListener("click",function(ev){var btn=ev.target.closest(".dash-toggle-btn");if(!btn)return;toggle.querySelectorAll(".dash-toggle-btn").forEach(function(b){b.classList.remove("is-active");});btn.classList.add("is-active");var range=btn.dataset.range;ordersChart.data.labels=range==="year"?d.yearLabels:d.monthLabels;ordersChart.data.datasets[0].data=range==="year"?d.yearValues:d.monthValues;ordersChart.update();});}'
        . 'var donutCanvas=document.getElementById("dashRevenueDonut");'
        . 'if(donutCanvas&&window.Chart){var donutColors=["#f6c879","#e2865f","#6c8cf5","#33c2a0","#c9835f","#9c6b4f","#e46a6a","#8a5a44"];new Chart(donutCanvas,{type:"doughnut",data:{labels:d.donutLabels,datasets:[{data:d.donutValues,backgroundColor:d.donutLabels.map(function(_,i){return donutColors[i%donutColors.length];}),borderWidth:0}]},options:{responsive:true,cutout:"72%",plugins:{legend:{display:false}}}});}'
        . '})();</script>';
    return $args;
});

$Wcms->addListener('css', static function (array $args): array {
    $args[0] .= '<style>.checkout-form textarea{display:block;width:100%;padding:.75rem .85rem;border:1px solid rgba(247,218,181,.3);background:rgba(24,11,8,.35);color:#fff;border-radius:7px;resize:vertical;font-family:"Poppins",sans-serif;font-size:.9rem;margin-top:.35rem}.checkout-note{color:#f6c879;font-size:.85rem}.order-success{text-align:center}</style>';
    return $args;
});

$Wcms->addListener('css', static function (array $args): array {
    $args[0] .= '<style>'
        // Shared page pieces + one entrance animation used across the redesigned pages.
        . '@keyframes storeReveal{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}'
        . '.reveal{animation:storeReveal .7s cubic-bezier(.22,.61,.36,1) both;animation-delay:calc(var(--i,0)*.09s)}'
        . '@media(prefers-reduced-motion:reduce){.reveal{animation:none}}'
        . '.page-head{max-width:640px;padding:1rem 0 2.2rem}'
        . '.page-head h1{font-family:"Fraunces",Georgia,serif;font-size:clamp(2rem,4.6vw,3.2rem);line-height:1.08;color:#f8dfbc;margin:.5rem 0 .8rem}'
        . '.page-head p{color:#e7cdaa;opacity:.85;font-size:.98rem;line-height:1.65;margin:0}'

        // Journal
        . '.journal-feature{display:grid;grid-template-columns:1.15fr 1fr;gap:1.6rem;align-items:center;background:#1b0f0a;border:1px solid rgba(247,218,181,.16);border-radius:20px;overflow:hidden;margin-bottom:1.6rem}'
        . '.journal-feature-img{height:100%;min-height:280px}'
        . '.journal-feature-img img{width:100%;height:100%;min-height:280px;object-fit:cover;display:block}'
        . '.journal-feature-copy{padding:1.8rem 2rem 1.8rem 0}'
        . '.journal-feature-copy h2{font-family:"Fraunces",serif;font-size:clamp(1.5rem,2.8vw,2.1rem);color:#f8dfbc;margin:.4rem 0 .7rem;line-height:1.15}'
        . '.journal-feature-copy p{color:#e7cdaa;opacity:.85;line-height:1.7;font-size:.95rem;margin:0 0 1rem}'
        . '.journal-meta{font-size:.74rem;color:#f6c879;opacity:.85}'
        . '.journal-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(230px,1fr));gap:1.1rem}'
        . '.journal-card{background:#1b0f0a;border:1px solid rgba(247,218,181,.16);border-radius:16px;overflow:hidden;display:flex;flex-direction:column;transition:transform .25s ease,border-color .25s ease}'
        . '.journal-card:hover{transform:translateY(-5px);border-color:rgba(246,200,121,.45)}'
        . '.journal-card img{width:100%;height:160px;object-fit:cover;display:block}'
        . '.journal-card>div{padding:1.1rem 1.2rem 1.3rem}'
        . '.journal-card h3{font-family:"Fraunces",serif;font-size:1.1rem;color:#f8dfbc;margin:.4rem 0 .5rem;line-height:1.25}'
        . '.journal-card p{color:#e7cdaa;opacity:.82;font-size:.86rem;line-height:1.6;margin:0 0 .8rem}'

        // Gallery
        . '.gallery{columns:3 250px;column-gap:1rem}'
        . '.gallery-item{break-inside:avoid;position:relative;margin:0 0 1rem;border-radius:14px;overflow:hidden}'
        . '.gallery-item img{display:block;width:100%;transition:transform .5s ease}'
        . '.gallery-item:hover img{transform:scale(1.06)}'
        . '.gallery-item figcaption{position:absolute;inset:auto 0 0 0;padding:2.4rem 1rem .9rem;background:linear-gradient(to top,rgba(15,7,4,.92),rgba(15,7,4,0));display:flex;flex-direction:column;gap:.1rem;opacity:0;transform:translateY(10px);transition:opacity .3s ease,transform .3s ease}'
        . '.gallery-item:hover figcaption,.gallery-item:focus-within figcaption{opacity:1;transform:translateY(0)}'
        . '.gallery-item figcaption strong{color:#f8dfbc;font-size:.92rem}'
        . '.gallery-item figcaption span{color:#e7cdaa;opacity:.8;font-size:.78rem}'
        . '@media(hover:none){.gallery-item figcaption{opacity:1;transform:none}}'

        // Education
        . '.lesson-list{list-style:none;margin:0 0 1.4rem;padding:0;display:grid;gap:.9rem}'
        . '.lesson{display:flex;gap:1.1rem;align-items:flex-start;background:#1b0f0a;border:1px solid rgba(247,218,181,.16);border-radius:16px;padding:1.3rem 1.4rem}'
        . '.lesson-step{flex:0 0 auto;width:2.2rem;height:2.2rem;border-radius:50%;background:#f6c879;color:#3a2118;display:grid;place-items:center;font-weight:700;font-size:.9rem}'
        . '.lesson h2{font-family:"Fraunces",serif;font-size:1.15rem;color:#f8dfbc;margin:.2rem 0 .45rem}'
        . '.lesson p{color:#e7cdaa;opacity:.85;font-size:.9rem;line-height:1.65;margin:0}'
        . '.ratio-card{background:#1b0f0a;border:1px solid rgba(247,218,181,.16);border-radius:16px;padding:1.4rem;margin-bottom:1.1rem;overflow-x:auto}'
        . '.ratio-card h2{font-family:"Fraunces",serif;font-size:1.2rem;color:#f8dfbc;margin:0 0 .3rem}'
        . '.ratio-card>p{color:#e7cdaa;opacity:.8;font-size:.88rem;margin:0 0 1rem}'
        . '.ratio-table{width:100%;border-collapse:collapse;font-size:.88rem;min-width:380px}'
        . '.ratio-table th{text-align:left;color:#f6c879;font-weight:600;padding:.5rem .6rem;border-bottom:1px solid rgba(247,218,181,.22)}'
        . '.ratio-table td{color:#e7cdaa;padding:.6rem;border-bottom:1px solid rgba(247,218,181,.1)}'
        . '.study-note{background:#1b0f0a;border:1px solid rgba(247,218,181,.16);border-radius:16px;padding:1.5rem}'
        . '.study-note h2{font-family:"Fraunces",serif;font-size:1.2rem;color:#f8dfbc;margin:0 0 .5rem}'
        . '.study-note p{color:#e7cdaa;opacity:.85;font-size:.92rem;line-height:1.7;margin:0}'

        // About
        . '.about-hero{display:grid;grid-template-columns:1fr 1fr;align-items:center;gap:clamp(1.5rem,4vw,3rem);padding:1rem 0 2.5rem}'
        . '.about-hero h1{font-family:"Fraunces",serif;font-size:clamp(2.1rem,5vw,3.4rem);line-height:1.05;color:#f8dfbc;margin:.5rem 0 1rem}'
        . '.about-copy p{color:#e7cdaa;opacity:.85;line-height:1.75;font-size:.98rem;margin:0 0 1rem;max-width:46ch}'
        . '.about-cta{display:inline-block;margin-top:.5rem}'
        . '.about-hero>img{width:100%;height:min(460px,60vh);object-fit:cover;border-radius:18px;box-shadow:0 24px 50px rgba(0,0,0,.4)}'
        . '.value-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(230px,1fr));gap:1.1rem;margin-bottom:1.4rem}'
        . '.value-card{background:#1b0f0a;border:1px solid rgba(247,218,181,.16);border-radius:16px;padding:1.4rem}'
        . '.value-card h2{font-family:"Fraunces",serif;font-size:1.15rem;color:#f8dfbc;margin:0 0 .5rem}'
        . '.value-card p{color:#e7cdaa;opacity:.85;font-size:.89rem;line-height:1.65;margin:0}'
        . '.visit-strip{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:1rem;padding:1.4rem;border-radius:16px;background:linear-gradient(135deg,rgba(246,200,121,.14),rgba(45,23,18,.7));border:1px solid rgba(247,218,181,.2)}'
        . '.visit-strip h3{color:#f6c879;font-size:.76rem;font-weight:600;margin:0 0 .3rem}'
        . '.visit-strip p{color:#f8dfbc;font-size:1rem;margin:0}'

        // Sign in / sign up
        . '.auth-layout{display:grid;grid-template-columns:1fr 1fr;gap:0;max-width:900px;margin:1.5rem auto;background:#1b0f0a;border:1px solid rgba(247,218,181,.16);border-radius:20px;overflow:hidden}'
        . '.auth-visual{position:relative;min-height:420px}'
        . '.auth-visual img{width:100%;height:100%;object-fit:cover;display:block}'
        . '.auth-visual-copy{position:absolute;inset:auto 0 0 0;padding:3rem 1.6rem 1.6rem;background:linear-gradient(to top,rgba(15,7,4,.95),rgba(15,7,4,0))}'
        . '.auth-visual-copy h2{font-family:"Fraunces",serif;color:#f8dfbc;font-size:1.3rem;margin:0 0 .4rem}'
        . '.auth-visual-copy p{color:#e7cdaa;opacity:.85;font-size:.85rem;line-height:1.6;margin:0}'
        . '.auth-form-side{padding:clamp(1.6rem,3.5vw,2.6rem)}'
        . '.auth-form-side h1{font-family:"Fraunces",serif;font-size:clamp(1.6rem,3vw,2.1rem);color:#f8dfbc;margin:0 0 .4rem}'
        . '.auth-lead{color:#e7cdaa;opacity:.82;font-size:.92rem;margin:0 0 1.6rem}'
        . '.auth-form label{display:block;margin-bottom:1rem;font-size:.82rem;color:#e7cdaa}'
        . '.auth-form input{display:block;width:100%;margin-top:.4rem;padding:.8rem .9rem;border:1px solid rgba(247,218,181,.26);background:rgba(12,6,4,.5);color:#fff;border-radius:9px;font-size:.92rem;font-family:"Poppins",sans-serif;transition:border-color .2s ease,background .2s ease}'
        . '.auth-form input:focus{outline:0;border-color:#f6c879;background:rgba(12,6,4,.8)}'
        . '.auth-submit{width:100%;margin-top:.6rem;border-radius:999px!important;line-height:3em!important;font-size:.85rem!important}'
        . '.auth-switch{margin:1.3rem 0 .4rem;font-size:.88rem}'
        . '.auth-switch a{color:#f6c879;border-bottom:0}'
        . '.auth-guest{color:#e7cdaa;opacity:.75;font-size:.82rem;margin:0}'

        // Basket
        . '.cart-layout{display:grid;grid-template-columns:1.1fr 1fr;gap:1.2rem;align-items:start}'
        . '.cart-items,.cart-checkout,.cart-empty{background:#1b0f0a;border:1px solid rgba(247,218,181,.16);border-radius:18px;padding:1.5rem}'
        . '.cart-items h2,.cart-checkout h2{font-family:"Fraunces",serif;font-size:1.1rem;color:#f6c879;margin:0 0 1.1rem}'
        . '.cart-item{display:flex;align-items:center;gap:.9rem;padding:.75rem 0;border-bottom:1px solid rgba(247,218,181,.1)}'
        . '.cart-item img{width:56px;height:56px;border-radius:10px;object-fit:cover;flex:0 0 auto}'
        . '.cart-item-body{display:flex;flex-direction:column;flex:1;min-width:0}'
        . '.cart-item-body strong{color:#f8dfbc;font-size:.92rem}'
        . '.cart-item-body span{color:#e7cdaa;opacity:.75;font-size:.78rem}'
        . '.cart-item-total{color:#f6c879;font-size:.92rem;white-space:nowrap}'
        . '.cart-total{display:flex;justify-content:space-between;align-items:center;margin-top:1.2rem;padding-top:1.1rem;border-top:1px solid rgba(247,218,181,.22);color:#e7cdaa}'
        . '.cart-total strong{font-family:"Fraunces",serif;font-size:1.35rem;color:#f8dfbc}'
        . '.cart-back{display:inline-block;margin-top:1rem;color:#f6c879;font-size:.85rem;border-bottom:0}'
        . '.cart-checkout .checkout-note{color:#e7cdaa;opacity:.8;font-size:.84rem;margin:-.6rem 0 1.1rem}'
        . '.checkout-form label{display:block;margin-bottom:.9rem;font-size:.82rem;color:#e7cdaa}'
        . '.checkout-form input,.checkout-form textarea,.checkout-form select{display:block;width:100%;margin-top:.4rem;padding:.75rem .85rem;border:1px solid rgba(247,218,181,.26);background:rgba(12,6,4,.5);color:#fff;border-radius:9px;font-size:.9rem;font-family:"Poppins",sans-serif}'
        . '.checkout-form input:focus,.checkout-form textarea:focus,.checkout-form select:focus{outline:0;border-color:#f6c879}'
        . '.checkout-submit{width:100%;margin-top:.5rem;border-radius:999px!important;line-height:3em!important;font-size:.82rem!important}'
        . '.cart-empty{text-align:center;max-width:480px;margin:0 auto}'
        . '.cart-empty p{color:#e7cdaa;margin:0 0 1.2rem}'

        . '@media(max-width:820px){'
        . '.journal-feature{grid-template-columns:1fr}.journal-feature-copy{padding:0 1.4rem 1.6rem}.journal-feature-img,.journal-feature-img img{min-height:220px}'
        . '.about-hero{grid-template-columns:1fr}.about-hero>img{height:260px}'
        . '.auth-layout{grid-template-columns:1fr}.auth-visual{min-height:200px}'
        . '.cart-layout{grid-template-columns:1fr}'
        . '}'
        . '</style>';
    return $args;
});

// Show/hide password (eye icon)
$Wcms->addListener('css', static function (array $args): array {
    $args[0] .= '<style>'
        . '.pw-field{position:relative;display:block;margin-top:.4rem}'
        . '.pw-field input{margin-top:0!important;padding-right:2.8rem!important}'
        . '.pw-toggle{position:absolute!important;top:50%;right:.55rem;transform:translateY(-50%);width:2rem;height:2rem;display:grid!important;place-items:center;padding:0!important;margin:0!important;border:0!important;border-radius:6px!important;background:none!important;color:#e8c493!important;line-height:0!important;cursor:pointer;transition:color .15s ease,background .15s ease}'
        . '.pw-toggle:hover{color:#f6c879!important;background:rgba(246,200,121,.12)!important}'
        . '.pw-toggle:focus-visible{outline:2px solid #f6c879;outline-offset:1px}'
        . '.coffee-admin-login .pw-toggle{color:#3a2118!important}'
        . '.coffee-admin-login .pw-toggle:hover{color:#6d3b1c!important;background:rgba(58,33,24,.08)!important}'
        . '</style>';
    return $args;
});

$Wcms->addListener('js', static function (array $args): array {
    $args[0] .= '<script>(function(){'
        . 'var svgStart="<svg viewBox=\'0 0 24 24\' width=\'20\' height=\'20\' fill=\'none\' stroke=\'currentColor\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-linejoin=\'round\' aria-hidden=\'true\'>";'
        . 'var eye=svgStart+"<path d=\'M1 12s4-7 11-7 11 7 11 7-4 7-11 7S1 12 1 12z\'/><circle cx=\'12\' cy=\'12\' r=\'3\'/></svg>";'
        . 'var eyeOff=svgStart+"<path d=\'M17.94 17.94A10.94 10.94 0 0 1 12 19c-7 0-11-7-11-7a19.77 19.77 0 0 1 5.06-5.94M9.9 4.24A10.94 10.94 0 0 1 12 4c7 0 11 7 11 7a19.86 19.86 0 0 1-3.17 4.19M14.12 14.12a3 3 0 1 1-4.24-4.24\'/><line x1=\'1\' y1=\'1\' x2=\'23\' y2=\'23\'/></svg>";'
        . 'function init(){'
        .   'document.querySelectorAll(".auth-form input[type=password],.coffee-admin-login input[type=password]").forEach(function(input){'
        .     'if(input.parentNode.classList.contains("pw-field"))return;'
        .     'var wrap=document.createElement("span");wrap.className="pw-field";'
        .     'input.parentNode.insertBefore(wrap,input);wrap.appendChild(input);'
        .     'var btn=document.createElement("button");btn.type="button";btn.className="pw-toggle";'
        .     'btn.setAttribute("aria-label","Show password");btn.setAttribute("aria-pressed","false");btn.innerHTML=eye;'
        .     'btn.addEventListener("click",function(){'
        .       'var show=input.type==="password";'
        .       'input.type=show?"text":"password";'
        .       'btn.innerHTML=show?eyeOff:eye;'
        .       'btn.setAttribute("aria-label",show?"Hide password":"Show password");'
        .       'btn.setAttribute("aria-pressed",show?"true":"false");'
        .     '});'
        .     'wrap.appendChild(btn);'
        .   '});'
        . '}'
        . 'if(document.readyState==="loading")document.addEventListener("DOMContentLoaded",init);else init();'
        . '})();</script>';
    return $args;
});

$Wcms->addListener('loginView', static function (array $args): array {
    if (($args[0] ?? '') !== 'Login') {
        $args[0] = '<div class="coffee-admin-login reveal"><p class="store-kicker">Brewed for your business</p>' . $args[0] . '</div>';
    }
    return $args;
});
