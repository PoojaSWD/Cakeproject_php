-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 05:56 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sweetedition`
--

-- --------------------------------------------------------

--
-- Table structure for table `cake_shop_designer`
--

CREATE TABLE `cake_shop_designer` (
  `category_id` int(20) NOT NULL,
  `designer_cake` varchar(100) NOT NULL,
  `designer_image` varchar(200) NOT NULL,
  `subtype_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cake_shop_designer`
--

INSERT INTO `cake_shop_designer` (`category_id`, `designer_cake`, `designer_image`, `subtype_id`) VALUES
(1, 'Baby Shower Cake', 'babyshower.jpg', 13),
(2, 'Barbie Cakes', 'barbie.jpg', 14),
(3, 'Carton Cakes', 'cartoon.jpg', 15),
(4, 'Jungle Theme Cakes', 'nature.jpg', 16);

-- --------------------------------------------------------

--
-- Table structure for table `cake_shop_desserts`
--

CREATE TABLE `cake_shop_desserts` (
  `category_id` int(20) NOT NULL,
  `dessert_name` varchar(100) NOT NULL,
  `dessert_image` varchar(200) NOT NULL,
  `subtype_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cake_shop_desserts`
--

INSERT INTO `cake_shop_desserts` (`category_id`, `dessert_name`, `dessert_image`, `subtype_id`) VALUES
(1, 'Pastries', 'dessert1.jpg', 9),
(2, 'Cupcake', 'dessert2.jpg', 10),
(3, 'Personalized Jar Cakes', 'dessert3.jpg', 11),
(4, 'Jar Cakes', 'dessert5.jpg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `cake_shop_flavours`
--

CREATE TABLE `cake_shop_flavours` (
  `category_id` int(20) NOT NULL,
  `flavours` varchar(100) NOT NULL,
  `flavours_image` varchar(200) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `subtype_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cake_shop_flavours`
--

INSERT INTO `cake_shop_flavours` (`category_id`, `flavours`, `flavours_image`, `subtitle`, `subtype_id`) VALUES
(1, 'Chocolate Cakes', 'chocolate.jfif', 'For Choco Addicts', 1),
(2, 'Butterscotch Cakes', 'butterscotch.jfif', 'For Candy Fans', 2),
(3, 'Strawberry Cakes', 'stawberry.jfif', 'An ideal Complement', 3),
(4, 'Mango Cakes', 'exotics_pastry.jfif', 'Test of Fruit king', 4);

-- --------------------------------------------------------

--
-- Table structure for table `cake_shop_orders`
--

CREATE TABLE `cake_shop_orders` (
  `orders_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `delivery_date` varchar(100) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `total_amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cake_shop_orders`
--

INSERT INTO `cake_shop_orders` (`orders_id`, `users_id`, `delivery_date`, `payment_method`, `total_amount`) VALUES
(1, 25, '12-3-2021', 'cash', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `cake_shop_orders_detail`
--

CREATE TABLE `cake_shop_orders_detail` (
  `orders_detail_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `quantity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cake_shop_orders_detail`
--

INSERT INTO `cake_shop_orders_detail` (`orders_detail_id`, `orders_id`, `product_name`, `quantity`) VALUES
(1, 1, 'Rose theme cake 1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cake_shop_product`
--

CREATE TABLE `cake_shop_product` (
  `product_id` int(20) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_category` int(20) NOT NULL,
  `product_prize` int(100) NOT NULL,
  `product_description` varchar(700) NOT NULL,
  `product_image` varchar(300) NOT NULL,
  `product_brief_description` varchar(200) NOT NULL,
  `cake_weight` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cake_shop_product`
--

INSERT INTO `cake_shop_product` (`product_id`, `product_name`, `product_category`, `product_prize`, `product_description`, `product_image`, `product_brief_description`, `cake_weight`) VALUES
(1, 'Snicker Fuse Chocolate Cake', 1, 699, 'Award yourself with this rich chocolate cake wonderfully crammed with Cadbury Fuse and white chocolate chunks and draped lusciously with molten chocolate. This perfect work of art hides in every bite, the scrumptious flavours of heavily whipped chocolate cream and nutty bits of chocolate that is a l', 'snicker-chocolate-cake-A.jpg', 'Snickers snickers all around! Your super healthy dessert topped with molten chocolate and chocolate ', 1),
(2, 'Half Chocolate & Vanilla Cake', 1, 599, 'A toothsome treat for the sugar lovers who are just passionate about chocolate and relish the mushiness of cake. Made of two layers of impossibly moist chocolate filled with mushy rich cream, this cake carries the enticing aroma of Vanilla and sumptuousness of chocolate. On top of it, the cake is ga', 'chocolate-vanilla-cake-A (1).jpg', 'The perfect blend of tempting chocolate and irresistible vanilla flavours topped up with a cherry and some chocolate shavings.', 1),
(3, 'Dark Chocolate Round Cake', 1, 599, 'If you are a chocoholic then you must try this extravagant truffle cake. Our signature truffle cake is the combination of rich dark chocolate topped with white chocolate flakes, that will unleash an explosive flavour which cannot be ignored.', 'choco-truffle-cake-2-cake896choc-A.jpg', 'Taste of our round truffle cake topped with white chocolate garnish decorations and crunchy-chocolatey roll sticks.\r\n', 1),
(4, 'Chocolaty Creamy Cake', 1, 775, 'This round chocolaty cake is the perfect treat for someone who is absolutely in love with chocolate cakes. This cake covered in rich chocolate ganache and decorated with chocolate shavings is the best gift one can have on their special day.', 'chocolaty-creamy-round-cake-cake2160choc-A.jfif', 'This cake is the perfect treat for someone who is absolutely in love with chocolate cakes.', 1),
(5, 'Exotic Black Forest Cake', 1, 649, 'Are you cakeoholic? The chocolate shavings of this dainty black forest cake make it forgiving for those who are truly cake-obsessed. Dive in the delicious taste of this amazing and classic cake and make every celebration worth celebrating. An evergreen cake suitable for every occasion be it a birthday, anniversary or any house party.\r\nSKU: cake888blac', 'choco-black-forest-cake-cake888blac-A (1).jpg', 'Topped with chocolatey flakes on the top and sides, this classic delight is a dream for chocolate lovers.', 1),
(6, 'Kitkat Chocolate Cake', 1, 699, 'KitKat cake is not like other cakes; it has delicious crunch in every bite; it offers something new for the taste buds and satisfies them to the fullest. Order this yummylicious baked KitKat cake for a KitKat lover in your friend and family circle.', 'kitkat-chocolate-cake-cake1119choc-A.jpg', 'Layered with Inside- Chocolate Truffle With Chopped Kitkat and chunks which make this cake an irresistible one.', 1),
(7, 'Round Delicious Butterscotch Cake', 2, 649, 'Butterscotch cake is always considered a delicious dessert for any occasion, no matter how small or large. The buttery goodness of this delicious cake is sure to make your mouth water. All you need is the perfect treat for anyone who loves butterscotch.\r\n\r\n', 'delicious-butterscotch-cake-cake2282butt-A.jpg', '\r\n\r\nButterscotch cake is always considered a delicious dessert for any occasion, no matter how small or large', 1),
(8, 'HeartShaped Butterscotch Cake', 2, 799, 'Put your heartfelt and unsaid feelings on the table in the form of this heart shaped butterscotch cake that is tremendously tasty and full of flavor. This cake is made with the best quality of ingredients and best skill of baking. Our bakers also perfectionist when it comes to put the decoration on the cake. Buy this cake for your loved one and impress them forever.', 'heart-shaped-butterscotch-cake-3-cake0622hbut-A.jpg', 'Glazed with rich whipped cream and chocolate crownings with the only cherry making it an appealing affair.', 1),
(9, 'Buttery Delight Butterscotch Cake', 2, 649, 'Butterscotch is savoured by all age groups. Bakingo presents delicious butterscotch delight is crowned with buttercream ribbon curls toped with white chocolate. You can send butterscotch cakes online to your dear ones and bring a broad smile on their face.', 'round-buttery-delight-butterscotch-cake-cake2281butt-A.jpg', 'Delicious butterscotch delight is crowned with buttercream ribbon curls toped with white chocolate.', 1),
(10, 'Butterscotch Caramel Cake', 2, 599, 'Your next obsession the scrumptious butterscotch cake. The universal cake which is present in almost a birthday party, an anniversary celebration, you name it and you will find a butterscotch cake. If you are a butterscotch fan then this is the right place to explore the all-new butterscotch cake topped with cherries, white chocolate, and whipped cream. A delicious choice for every celebration.', 'round-shaped-butterscotch-cake-4-cake892butt-A.jpg', 'The layers of this cake are smeared with whipped cream, caramel, and butterscotch crush.The top is loaded with chocolate garnishing,cherry and butterscotch crunch.', 1),
(11, 'Round Shape Butterscotch Cake', 2, 499, 'Always and Forever Delight! This three layered moist and smooth cake filled with butterscotch chips and Vanilla cream is something not to be missed! Topped with Butterscotch glaze and brown chocolate flakes, adorned with scrumptious caramel dressing on the sides, it\'s time to feel the crunch!', 'butterscotch-cake-A.jpg', 'Chunks of butterscotch mixed with smooth caramel is what makes this flavour amazing amongst butterscotch-lovers.', 1),
(12, 'Magical Strawberry Cake', 3, 699, 'Stir sweetness on their special day with swirls of happiness and deliciousness. Embossed with intricate swirls of cream, the decadence vibrantly sparks the love in the purity of white, soft pink, and affectionate green color. Wait no more, shop this one and get everyone line up for more.\r\nSKU: cake0752crem', 'white-polka-cream-cake-cake0752flav-A.jpg', 'The mouth-watering cake is topped with vanilla and strawberry whipped cream all over with a green leaf. The pretty appearance and taste of the cake will rule your day.', 1),
(13, 'Rosy Red Delight', 3, 1099, 'Make way for the Heavens Exclusive Delicacy infused with luscious strawberry flavor and a dash of infatuation. This super love-filled cake with strawberry glaze and fondant rose is all that you need to make indelible expressions of love.Perfect for occasions like anniversary, Valentine\'s or your sweetheart\'s birthday, this cake is sure to please hearts and make memories cherishable.', 'vanilla-strawberry-cake-A.jpg', 'Topped with fondant roses and white chocolate shavings,this delicate cake is sandwiched with a smooth vanilla base and glazed with strawberry jelly for a sweet', 1),
(14, 'Round Soulful Strawberry Cake', 3, 599, 'Because you need a delicious revival, we\'ve brought to you this tantalizing strawberry cake studded with delicious chocolates. This cake has been baked with an utmatched creative instinct by our skilled bakers just to make your special occasions happier. Embellished with strawberry jelly, whipped cream, cherries, and chocolate carvings on the top, this cake is studded with choco chunks by the sides.', 'strawberry-round-shaped-cake-4-cake0642stra-A.jpg', 'he heavenly flavour and soulful creamy strawberry frosting, along with chocolate shavings, create a delicious symphony.', 1),
(15, 'Pretty Strawberry Cake', 3, 649, 'This toothsome strawberry rose is a divine three-layered dessert filled with rich strawberry cream and crushed strawberries. With roses carved on its contours and strawberry cream icing, why give the same old bouquet to your loved ones when you can be one step ahead with this ambrosial strawberry!', 'strawberry-rose-cake-A.jpg', 'This cake dolled up in rose swirls and whipped strawberry cream,this delicious cake spreads \r\nhappiness with its uttermost beauty!', 1),
(16, 'Strawberry Creamy Cake', 3, 699, 'Dive Deep Into The World Of Real Strawberries As You Delight Yourself And All Your Loved Ones With This Scrumptious Baked Strawberry Cake. Topped Up With Tiny Fondant White Flowers And Some Chocolate Drizzle, This Strawberry Cake Is No Less Than A Dream For Every Strawberry Cake Lover Out There.', 'scrumptious-strawberry-cake-cake2069stra-A.jpg', 'Topped Up With Tiny Fondant White Flowers And Some Chocolate Drizzle,This Strawberry Cake Is No Less Than A Dream For Every Strawberry Cake Lover Out There.', 1),
(17, 'Scrumptious Real Mango Cake N Chocolate', 4, 775, 'Get Over Basic Vanilla Cakes And Catch Hold Of This Amazing Mango Cake With More Flavours Than Your Mouth Can Handle. It Is A Beyond Compare Mango Cake With A Real Mango Placed On Top Cut Into Little Cubes, Lined With Chocolate Leaves Too. The Swirls All Around Will Steal Your Heart, And The Icing And Pool Of Mango Cream On Top Are To Die For.', 'scrumptious-real-mango-cake-n-chocolate-cake2115mang-A.jpg', 'A Real Mango Placed On Top Cut Into Little Cubes,Lined With Chocolate Leaves too.', 1),
(18, 'Mango Cheese Cake', 4, 1075, 'Taste the terrific tropic mango cake with a zesty blend of mango and mushy rich cream. Made of three rich cream layers and mango fillings, this cake is a tantalizing treat. The crest that is frosted with white chocolate shavings offers mango glaze which is made from fresh mango pulp. So, next time when life gives you lemons, throw it back and say \"I said l wanted mango!\"', 'mango-cheese-cake-A.jpg', 'Taste the terrific tropic mango cake with a zesty blend of mango and mushy rich cream. Made of three rich cream layers and mango fillings, this cake is a tantalizing treat.', 1),
(19, '\r\nTopical Mango delight', 4, 599, 'Taste the terrific tropic mango cake with a zesty blend of mango and mushy rich cream. Made of three rich cream layers and mango fillings, this cake is a tantalizing treat. The crest that is frosted with white chocolate shavings offers mango glaze which is made from fresh mango pulp. So, next time when life gives you lemons, throw it back and say \"I said l wanted mango!\"', 'mango-cake-A.jpg', 'Made of three rich cream layers and mango fillings,this cake is a tantalizing treat.The crest that is frosted with white chocolate shavings offers mango glaze.', 1),
(20, 'Round Luscious Mango Cake', 4, 699, 'Who doesn\'t love Mangoes? Literally Nobody. To make the birthday or anniversary more special and beautiful, we have bought you a delicious delight. Treat you best delicious mango cakes in the world....you\'ll love it! Trust us, it\'s finger-licking good!', 'mango-cake-1-a.jpg', 'Experience the mango inside and mango outside taste with this fluffy cake.Glazed with mango pulp, pistachio,and mango slices makes it a toothsome treat for mango lovers.', 1),
(21, 'Birthday Photo Cake 16 Round Shape', 5, 599, 'Birthday comes only once in a year and is celebrated with loads of gifts, lovely people, but is incomplete without the delicious cake. An impeccable part of a celebration, it surprises the birthday girl/boy, and the bonanza is when this cake is a personalised photo cake having their picture and name. Show how much you love them and care for them. Avoid placing the photo and poster cake in a refrigerator as the chilled droplets can spoil the photo on the top of the cake.', 'phtocake1.jpg', 'this cake is a personalised photo cake having their picture and name. Show how much you love them and care for them.', 1),
(22, 'Tom N Jerry Poster Cake', 5, 799, 'Birthday comes only once in a year and is celebrated with loads of gifts, lovely people, but is incomplete without the delicious cake. An impeccable part of a celebration, it surprises the birthday girl/boy, and the bonanza is when this cake is a personalised photo cake having their picture and name. Show how much you love them and care for them. Avoid placing the photo and poster cake in a refrigerator as the chilled droplets can spoil the photo on the top of the cake', 'tom-n-jerry-poster-cake-phot1344flav-A.jpg', 'This cake is a personalised photo cake having their picture and name. Show how much you love them and care for them.', 1),
(23, 'Multi Flavoured Heart Shaped Photo Cake', 5, 999, 'Get something unique and amazing for your beloved partner.This love-shaped multi flavour cake will instantly level up the romantic vibes. This soft and creamy cake has a photo print over it and also decked up with a soothing floral design on the top. Order this delightful cake right away.', 'multi-flavoured-heart-shaped-photo-cake-phot2180flav-A.jpg', 'This soft and creamy cake has a photo print over it and also decked up with a soothing floral design on the top.', 1),
(24, 'The Iconic Money Heist Poster Cake', 5, 775, 'Make the best impressions on your loved ones on special occasions with the enticing and lip-smacking Money Heist poster cake. This heart-melting cake is decorated with the iconic Money Heist crew poster with creamy white and pink fondant on the sides.', 'the-iconic-money-heist-poster-cake-phot2266flav-AA.jpg', 'This heart-melting cake is decorated with the iconic Money Heist crew poster with creamy white and pink fondant on the sides.', 1),
(25, 'Pull Me Up Choco Truffle Cake', 6, 1549, 'Double the surprise and celebrations with a rich, moist and super decadent truffle pull me up cake. Layered on top with a thick chocolate ganache. Pull up the protective film, watch the rich chocolate ganache cascade and cover the lip-smacking truffle base. Pull-me-up cakes are a treat to both your taste buds and the eye!\r\n', 'pullmeupcake.jpg', 'Double the surprise and celebrations with a rich, moist and super decadent truffle pull me up cake. Layered on top with a thick chocolate ganache. ', 1),
(27, 'Rainbow Flowing Pull me Up Cake', 6, 1549, 'Pull Me Up Cakes has become a new sensation these days. This deliciously looking Pull Me Up Rainbow Cake is a unique and beautiful cake that is sure to add color to any occasion. A beautiful blend of colors will start dripping down the cake making it pleasant to the eyes. Order now!', 'rainbow-flowing-pull-me-up-cake-pulm2306exot-A.jpg', 'This deliciously looking Pull Me Up Rainbow Cake is a unique and beautiful cake that is sure to add color to any occasion.', 1),
(28, 'Blue Frozen Pull Me Up Chocolate Cake', 6, 1399, 'Does your daughter or little sister love the Frozen princess character? If yes, this beautiful and delicious barbie doll pull-me-up cake is the sweet treat that she definitely deserves whether it is her birthday or any special occasion when she must feel extra special.', 'barbie.jpg', 'This beautiful and delicious barbie doll pull-me-up cake is the sweet treat for birthday or any special occasion.', 1),
(29, 'Minnie Mouse Strawberry Pull Me Up Cake', 6, 1549, 'Surround your kiddo with his/her favourite cartoon friend Minnie Mouse as you opt for this beautiful yet delicious pull me up cake. This pull me up strawberry cake is sure to brighten up your little one\'s life and leave him/her impressed with your cake gifting gesture.', 'minnie-mouse-strawberry-pull-me-up-cake-pulm2304stra-A.jpg', 'This cake is sure to brighten up your little one\'s life and leave him/her impressed with your cake gifting gesture.', 1),
(30, 'Luscious Heart Shaped Fruit Topped Cake', 7, 1299, 'This sinfully delicious heart-shaped fruitcake has been baked with fresh vanilla cream. Garnished with freshly sliced seasonal fruits, this cake has been given a chocolaty punch with choco chips on the top.', 'heart-shaped-fruit-cake-1-cake0740frui-A_0.jpg', 'Filled with custard cream with chopped fruits and covered in thick white whipped cream icing,caramelised nuts..', 1),
(31, 'Heart Shape Vanilla Cake', 7, 799, 'Love is a beautiful thing you\'d ever come across in your life. And once you do, you would need an equivalent expression that would be as beautiful as the love of your life. A perfect flawless expression of love and beauty, this vanilla cake is specially baked in heart-shaped so as to heighten the pent-up emotions and feelings. Embellished with fondant mini hearts, this heart is perfect to for your soulmate.', 'heartshapedcake.jpg', 'This tasty vanilla cake is baked in the shape of a heart.The cake is decorated with little fondant hearts on the frosting of white whipped cream.', 1),
(32, 'Heart Shaped Rosy Red Delight', 7, 1099, 'Make way for the Heavens Exclusive Delicacy infused with luscious strawberry flavor and a dash of infatuation. This super love-filled cake with strawberry glaze and fondant rose is all that you need to make indelible expressions of love.Perfect for occasions like anniversary, Valentine\'s or your sweetheart\'s birthday, this cake is sure to please hearts and make memories cherishable.', 'vanilla-strawberry-cake-A.jpg', 'This delicate cake is sandwiched with a smooth vanilla base and glazed with strawberry jelly for a sweet, tangy bite!', 1),
(33, 'Multi Flavoured Heart Shaped Photo Cake', 7, 999, 'Get something unique and amazing for your beloved partner. This love-shaped multi flavour cake will instantly level up the romantic vibes. This soft and creamy cake has a photo print over it and also decked up with a soothing floral design on the top. Order this delightful cake right away.', 'multi-flavoured-heart-shaped-photo-cake-phot2180flav-A.jpg', 'This soft and creamy cake has a photo print over it and also decked up with a soothing floral design on the top...', 1),
(34, 'Blue Sphere Avenger Pineapple Pinata Cake ', 8, 1849, 'Celebrate the Avengers in yourself over a toothsome delight. Have that hammer of Thor in your hand and break the delicious shield to reach the baked cream and pineapple topped cake. There is a covering of the Avengers logo and reb ribbon to make it look like a packed surprise.\r\n', 'pintacske.jpg', 'Have that hammer of Thor in your hand and break the delicious shield to reach the baked cream and pineapple topped cake. ', 950),
(35, 'Birthday Chocolate Overload Pinata Cake', 8, 1599, 'Grab the most special birthday cake for celebrations of your loved one’s birthday this year with a gorgeous chocolate pinata cake! Crack this fun filled delight to get a bite off of a dense chocolate cake topped with colourful gems, two kitkat and two Ferrero Rochers. This year crack the cake open instead of cutting it! Note: Hammer will be given with the cake.', 'birthday-chocolate-overload-pinata-cake-750gm-pina2163choc-A.jpg', 'Crack this fun filled delight to get a bite off of a dense chocolate cake topped with colourful gems,kitkat and Ferrero Rochers.', 750),
(36, 'Romantic Pinata Pineapple Cake', 8, 1649, 'Have a smashing anniversary party with just the two of you as you smash this gorgeous white pinata cake! It is a tempting round white shell with several little red hearts on it. The presentation and the taste are both romantic. It\'s as satisfying as it gets, we promise! Note: Hammer will be given with the cake.', 'romantic-pinata-pineapple-cake-850gm-pina2164pine-F.jpg', 'It is a tempting round white shell with several little red hearts on it. The presentation and the taste are both romantic', 850),
(37, 'Pineapple Pinata Cake ', 8, 1075, 'Love is flavoursome, just like this cake a diamond-heart pinata cake in pineapple flavour. Inside the pinata, there is a heart-shaped sponge cake layered with whipped cream and drizzled with pineapple syrup. Break into sweet love and happiness on any celebration of yours. Note: Hammer will be given with the cake.\r\nSKU: pina2265pine', 'pineapple-pinata-cake-450gm-pina2265pine-A.jpg', 'Inside the pinata, there is a heart-shaped sponge cake layered with whipped cream and drizzled with pineapple syrup', 450),
(38, 'Choco Chip Pastries', 9, 299, 'It\'s time to fall in luxury..in love with this delish pastries loaded with choco chips and white chocolate crown to satiate your chocolate desires. The mushy base with a delicious chocolate topping is something you would have a hard time saying \'No\' to.', 'overwhelming-choco-chip-pastries-past0208choc-D.jpg', 'This delish pastries are loaded with choco chips and white chocolate crown to satiate your chocolate desires.', 300),
(39, 'Chocolate truffle Pastry', 9, 189, 'This pastry is all about perfection. Made from the finest quality of chocolate, this delicious pastry proudly boasts lips-smacking chocolate covering and cherry decoration. This pastry has been given an awesome touch with the liquid chocolate cream.', 'dessert1.jpg', 'Made from the finest quality of chocolate, this delicious pastry proudly boasts lips-smacking chocolate covering and cherry decoration.', 2),
(40, 'Mango Pastries', 9, 189, 'Award yourself with the delish flavours of mango pastries and lose yourself in their sumptuous appeal like never before. The mushy base enrobed with almond shavings and topped with mango glaze and chocolate crown are not only going to satiate your sweet tooth desires but also remind you of the summertime goodness!', 'satiating-mango-pastries-past0210mang-E.jpg', 'Award yourself with the delish flavours of mango pastries and lose yourself in their sumptuous appeal like never before.', 2),
(41, 'Red Velvet Pastry', 9, 201, 'This is a top to bottom dramatic looking pastry with its bright color of red which is sharply contrasted by a very fresh white cream frosting. This pastry can easily get you completely lost with the amazing flavor that derives when the pastry almost instantly melts in your mouth. Enjoy each bite of this scrumptious pastry.', 'mouth-watering-red-velvet-past0163redv-D.jpg', 'This is a top to bottom dramatic looking pastry with its bright color of red which is sharply contrasted by a very fresh white cream frosting', 2),
(42, 'Choco Vanilla Cupcake', 10, 199, 'Wow\' is the only word that naturally comes out of your mouth after seeing this cute sugary delight. Coming with chocolate cup cake base, whipped vanilla cream, chocolate sauce and the sprinkles of edible sugar candies, this set of 6 cup cake can easily hold a permanent space in anyone\'s heart.', 'dessert2.jpg', 'Coming with chocolate cup cake base, whipped vanilla cream, chocolate sauce and the sprinkles of edible sugar candies.', 2),
(43, 'Mango Cupcake', 10, 199, 'Who doesn\'t like mangoes? The goodness of this sweet and enticing fruit can now be enjoyed in a cupcake. The sponge cupcake base is siwrled with whipped vanilla icing with mango flavoured glazed. Relish the sweetness of mangoes and deliciousness of cake in every bite.', 'mango-cupcake-cupc2156mang-A.jpg', 'The sponge cupcake base is siwrled with whipped vanilla icing with mango flavoured glazed. ', 2),
(44, 'Minion Cup Cake Chocolate', 10, 299, 'Cuteness in a cupcake! Your beloved Minions have found their new home in our mouth-watering chocolate flavored cupcakes and are waiting to be devoured with a smile on your face. Gift this set to a Minion fan and see them beaming with a smile.', 'minion-cup-cake-cupc769flav.jpg', 'Cuteness in a cupcake! Your beloved Minions have found their new home in our mouth-watering chocolate flavored cupcakes..', 2),
(45, 'Romantic Red Velvet Anniversary Poster Jar Cakes', 11, 399, 'This Anniversary, Tell Your Partner How Much You Love Them With This Scrumptious Red Velvet Jar Cake. It Has The Most Delicate Layers Of Red And White Deliciousness. Everything About This Jar Cake Has Been Crafted To Perfection. What\'S More, Is That The Name Tags On This Lovely Red Velvet Cake Are Edible Too.', 'dessert3.jpg', 'It Has The Most Delicate Layers Of Red And White Deliciousness. Everything About This Jar Cake Has Been Crafted To Perfection', 200),
(46, 'Set Of Two Custom Chocolate Jar Cakes', 11, 399, 'Chocolate Always Seems To Do The Trick When It Comes To Impressing Your Loved Ones. But When It Comes To Making A Love Confession, A Set Of Two Scrumptious I Love You Personalised Chocolate Jar Cakes Seem To Melt Our Lover\'S Heart Into Tears, Effortlessly.', 'set-of-two-custom-chocolate-jar-cakes-jar2141choc-A.jpg', 'A Set Of Two Scrumptious I Love You Personalised Chocolate Jar Cakes Seem To Melt Our Lover\'S Heart Into Tears, Effortlessly.', 200),
(47, 'Chocochips And Oreo Jar Cake Combo', 12, 299, 'This is the combo to perfect to gratify your senses. With an amazing combo of choco chip and Oreo, these jar cakes are perfect for all chocolate addicts. This highly delectable combo includes one choco-chips jar cake and a mouth-watering Oreo Jar cake.', 'dessert5.jpg', 'With an amazing combo of choco chip and Oreo, these jar cakes are perfect for all chocolate addicts.', 200),
(48, 'Fruit Single Jar Cake', 12, 149, 'Satiate your taste buds with a no cheat dessert that is healthy and yet tempting. We all love the freshly baked smell of cakes, and when it comes in a compact size like this jar cake, then the taste enhances in itself. Treat yourself or a sweet tooth buddy with this delicately made jar cake.', '04E-Fruit-Jar-Cake.jpg', 'Satiate your taste buds with a no cheat dessert that is healthy and yet tempting. We all love the freshly baked smell of cakes..', 200),
(49, 'Baby Girl Baby Boy Cake', 13, 949, 'Baby girl or baby boy? Baby showers are real fun and so is this fresh, delicious, designer cake. Make the baby show of mother to be real fun and surprise her with this beautiful and elegant cake to make it special for her as she is going to bring a whole new life to this world.', 'baby-girl-baby-boy-cake-cake1432vani_0 (1).jfif', 'Baby girl or baby boy? Baby showers are real fun and so is this fresh, delicious, designer cake.', 1),
(50, 'Baby Shower Theme Cake', 13, 1599, 'Tie or Tutus? Whatever it will be, it is a blessing from heaven. Celebrate the arrival of the little prince or princess over a theme cake. A scrumptious baby shower cake decorated with cute ballerinas and boots will infuse cheers and sweetness in the moment.', 'Theme-2.jpg', 'Tie or Tutus? Whatever it will be, it is a blessing from heaven. Celebrate the arrival of the little prince or princess over a theme cake.', 1),
(51, 'Rose Theme Cake 1', 13, 799, 'Do you know what Beauty looks like? This cake gives you a perfect example. The intricately designed rose cream over the mushy cake base is a perfect choice to define all your celebrations from baby shower to the little princess\'s birthday. Note: This cake is available in 6 flavors namely Chocolate, Butterscotch, Vanilla, Strawberry, Black forest and Pineapple', 'sumptuous-gala-them0308flav-030118.jpg', 'Do you know what Beauty looks like? This cake gives you a perfect example. The intricately designed rose cream over the mushy cake base is a perfect choice', 1),
(52, 'Blue Barbie Cream Cake', 14, 1599, 'The timeless beauty of a Barbie doll has baked magnificently into this mouth watering cake that will add the perfect pomp and show to your daughter\'s birthday. To ensure a bright smile on your little angel\'s face, get this gorgeous birthday Barbie cake that is available in six flavors: chocolate, butterscotch, vanilla, pineapple, black forest, and strawberry.', 'barbie-bash-them0328flav-030118.jpg', 'The timeless beauty of a Barbie doll has baked magnificently into this mouth watering cake that will add the perfect pomp and show to your daughter\'s birthday.', 1),
(53, 'Barbie Doll Cream Cake', 14, 1499, 'Show your unconditional love to your little princess on her birthday by surprising her with this astounding Princess Barbie Cake. This adorable cake is dressed in the blue cream, which will drivel the taste buds of all the party attendees and, most importantly of your little princess.', 'barbie-doll-cream-cake-them1045flav-A_0.jpg', 'Show your unconditional love to your little princess on her birthday by surprising her with this astounding Princess Barbie Cake', 1),
(54, 'Barbie Theme Cake 1', 14, 1299, 'There are some surprises the memories of which are meant to last forever. And this Barbie shaped scrumptious surprise is sure to elate your little princess beyond words.', 'barbie.jpg', 'There are some surprises the memories of which are meant to last forever. And this Barbie shaped scrumptious surprise is sure to elate your little princess beyond words.', 1),
(56, 'Doraemon Cream Cake', 15, 999, 'Doraemon has been the most loved animation character for each kid for quite a while now. So think about their reaction when they see their most loved animation character on their birthday cake. They will start jumping with excitement. So just order this delicious cake and surprise them on their special day.', 'cartoon.jpg', 'Doraemon has been the most loved animation character for each kid for quite a while now. So think about their reaction when they see this cake..', 1),
(57, 'Mickey Mouse Themed Cake', 15, 899, 'Baked with love - this colourful mickey mouse cake will become a shining star of the party for a huge fan of the \"Mickey mouse and the clubhouse\" show. Moreover, this cake is not only perfectly designed, but it tastes amazing as well. This cake will surprise the little fans and will bring a priceless smile on their face.', 'mickeymouse.jpg', 'this cake is not only perfectly designed, but it tastes amazing as well. This cake will surprise the little fans', 1),
(58, 'Jungle Fondant Cake', 16, 1099, 'You cannot gift your child something better than this jungle inspired cake on his birthday. This incredible cake has been baked with utmost perfection that brought all the jungle characters alive in this cake. Grab this scrumptious cake available in six flavors: chocolate, pineapple, strawberry, vanilla butterscotch, and black forest.', 'the-jungle-safari-them0303flav-030118.jpg', 'This incredible cake has been baked with utmost perfection that brought all the jungle characters alive in this cake.', 1),
(59, 'Nature Cream Cake', 16, 1099, 'We baked you this Paradisiacal nature cake with utmost creativity that will brighten up the celebrations for a Nature lover. Adorned with trees and snow, this two-tiered delicious cake is signifying the true essence of nature. You can grab this cake in six delicious flavors: chocolate, vanilla, butterscotch, strawberry, pineapple, and black forest.\r\n', 'nature.jpg', 'We baked you this Paradisiacal nature cake with utmost creativity that will brighten up the celebrations for a Nature lover.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cake_shop_type`
--

CREATE TABLE `cake_shop_type` (
  `category_id` int(20) NOT NULL,
  `cake_type` varchar(100) NOT NULL,
  `type_image` varchar(200) NOT NULL,
  `subtype_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cake_shop_type`
--

INSERT INTO `cake_shop_type` (`category_id`, `cake_type`, `type_image`, `subtype_id`) VALUES
(1, 'Photo Cakes', 'phtocake1.jpg', 5),
(2, 'Pull Me Up Cakes', 'pullmeupcake.jpg', 6),
(3, 'Heart Shaped Cakes', 'heartshapedcake.jpg', 7),
(4, 'Pinata Cakes', 'pintacske.jpg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `cake_shop_users_registrations`
--

CREATE TABLE `cake_shop_users_registrations` (
  `users_id` int(20) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_firstname` varchar(100) NOT NULL,
  `user_lastname` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_repassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cake_shop_users_registrations`
--

INSERT INTO `cake_shop_users_registrations` (`users_id`, `user_username`, `user_firstname`, `user_lastname`, `user_email`, `user_password`, `user_repassword`) VALUES
(25, 'Abc', 'Abc', 'Abc', 'abc124@gmail.com', 'Abc@1234', 'Abc@1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cake_shop_designer`
--
ALTER TABLE `cake_shop_designer`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `cake_shop_desserts`
--
ALTER TABLE `cake_shop_desserts`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `cake_shop_flavours`
--
ALTER TABLE `cake_shop_flavours`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `cake_shop_orders`
--
ALTER TABLE `cake_shop_orders`
  ADD PRIMARY KEY (`orders_id`);

--
-- Indexes for table `cake_shop_orders_detail`
--
ALTER TABLE `cake_shop_orders_detail`
  ADD PRIMARY KEY (`orders_detail_id`);

--
-- Indexes for table `cake_shop_product`
--
ALTER TABLE `cake_shop_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `cake_shop_type`
--
ALTER TABLE `cake_shop_type`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `cake_shop_users_registrations`
--
ALTER TABLE `cake_shop_users_registrations`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cake_shop_orders`
--
ALTER TABLE `cake_shop_orders`
  MODIFY `orders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cake_shop_orders_detail`
--
ALTER TABLE `cake_shop_orders_detail`
  MODIFY `orders_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cake_shop_users_registrations`
--
ALTER TABLE `cake_shop_users_registrations`
  MODIFY `users_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
