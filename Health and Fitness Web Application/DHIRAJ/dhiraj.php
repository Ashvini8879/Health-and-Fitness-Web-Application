<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Slider</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body{
      background-color: whitesmoke;
    }
    .card {
      width: 100%;
    }
    #imageSlider {
       width: 100%;
       height: 300px;
       overflow: hidden;
      
    }
    #imageSlider .carousel-item img {
      width: 100%;
      height: auto;

    }
    .category-sublink {
      display: none;
    }
    .nav-item:hover .category-sublink {
      display: block;
    }

    .navbar-nav .nav-link {
  padding: 0.5rem 1rem;
  transition: background-color 0.3s ease;
}

.navbar-nav .nav-link:hover{
  color: black;
}

.dropdown-menu {
  border-radius: 0;
  border: none;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
}

.dropdown-item {
  padding: 0.5rem 1rem;
  transition: background-color 0.3s ease;
}

.dropdown-item:hover {
  background-color: gray;
  color: #fff;
}

.best{
  text-align: center;
  
  color: white;
}

.edition{
  padding-left: 100px;
  background-color: #151e3e;
  color: darkgray;
  padding-right: 100px;
}

  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<img src="shopping.jpg" alt="Logo" class="shop" style="height: 30px; width:30px;">&nbsp;
  <a class="navbar-brand" href="dhiraj.php">
  <b>H&F</b> Store
  
</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link" href="dhiraj.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="product.php">Products</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Category
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="men.php">Men</a>
          <a class="dropdown-item" href="women.php">Women</a>
          <a class="dropdown-item" href="tread.php">Cardio</a>
          <a class="dropdown-item" href="cycle.php">Cycles</a>
          <a class="dropdown-item" href="health.php">Supplements</a>
          <a class="dropdown-item" href="Accessories.php">Accessories</a>
        </div>
        </div>
      </li>
    </ul>
  </div>
</nav>

<div id="imageSlider" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image1.png" class="d-block w-200" alt="Image 1">
    </div>
    <div class="carousel-item">
      <img src="image2.png" class="d-block w-200" alt="Image 2">
    </div>
    <div class="carousel-item">
      <img src="image3.png" class="d-block w-200" alt="Image 2">
    </div>
    <!-- Add more carousel items as needed -->
  </div>
  <a class="carousel-control-prev" href="#imageSlider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#imageSlider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container mt-5">
  <h4 style="margin-bottom: 15px;"><b>TREADMILLS</b> <a href="tread.php" style="font-size: smaller; margin-left: 20px; text-decoration: none;">View All</a></h4>
  <br>
  <div id="treadCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <?php
      require 'treadmils.php';
      $sql="SELECT * FROM treadmils";
      $result=mysqli_query($conn,$sql);
      $total_products = mysqli_num_rows($result);
      $chunks = array_chunk(mysqli_fetch_all($result, MYSQLI_ASSOC), 4);
      foreach($chunks as $index => $chunk) {
      ?>
      <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
        <div class="row">
          <?php foreach($chunk as $product) { ?>
          <div class="col-lg-3">
            <div class="card border-info p-2">
              <img src="<?= $product['product_image']; ?>" class="card-img-top" height="320"> 
              <h6 class="card-title">Product Name: <?= $product['product_name']; ?></h6>
              <h6>Price: ₹<?= number_format($product['product_price']); ?></h6>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
      <?php } ?>
    </div>
    <a class="carousel-control-prev" href="#treadCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#treadCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div class="container mt-5">
<h4 style="margin-bottom: 15px;"><b>Footwear</b> <a href="footwear.php" style="font-size: smaller; margin-left: 20px; text-decoration: none;">View All</a></h4>
   <br>
  <div id="productCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php
    require 'treadmils.php';
    $sql="SELECT * FROM footwear";
    $result=mysqli_query($conn,$sql);
    ?>
      <?php
      $total_products = mysqli_num_rows($result);
      $chunks = array_chunk(mysqli_fetch_all($result, MYSQLI_ASSOC), 4);
      foreach($chunks as $index => $chunk) {
      ?>
      <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
        <div class="row">
          <?php foreach($chunk as $product) { ?>
          <div class="col-lg-3">
            <div class="card border-info p-2">
              <img src="<?= $product['product_image']; ?>" class="card-img-top" height="320"> 
              <h6 class="card-title">Product Name: <?= $product['product_name']; ?></h6>
              <h6>Price: ₹<?= number_format($product['product_price']); ?></h6>
          
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
      <?php } ?>
    </div>
    <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="container mt-5">
<h4 style="margin-bottom: 15px;"><b>CYCLES</b> <a href="cycle.php" style="font-size: smaller; margin-left: 20px; text-decoration: none;">View All</a></h4>
   <br>
  <div id="footwear" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php
    require 'treadmils.php';
    $sql="SELECT * FROM cycle";
    $result=mysqli_query($conn,$sql);
    ?>
      <?php
      $total_products = mysqli_num_rows($result);
      $chunks = array_chunk(mysqli_fetch_all($result, MYSQLI_ASSOC), 4);
      foreach($chunks as $index => $chunk) {
      ?>
      <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
        <div class="row">
          <?php foreach($chunk as $product) { ?>
          <div class="col-lg-3">
            <div class="card border-info p-2">
              <img src="<?= $product['product_image']; ?>" class="card-img-top" height="320"> 
              <h6 class="card-title">Product Name: <?= $product['product_name']; ?></h6>
              <h6>Price: ₹<?= number_format($product['product_price']); ?></h6>
          
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
      <?php } ?>
    </div>
    <a class="carousel-control-prev" href="#footwear" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#footwear" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="container mt-5">
<h4 style="margin-bottom: 15px;"><b>HEALTH & NUTRITION</b> <a href="health.php" style="font-size: smaller; margin-left: 20px; text-decoration: none;">View All</a></h4>
   <br>
  <div id="Fitness" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php
    require 'treadmils.php';
    $sql="SELECT * FROM health";
    $result=mysqli_query($conn,$sql);
    ?>
      <?php
      $total_products = mysqli_num_rows($result);
      $chunks = array_chunk(mysqli_fetch_all($result, MYSQLI_ASSOC), 4);
      foreach($chunks as $index => $chunk) {
      ?>
      <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
        <div class="row">
          <?php foreach($chunk as $product) { ?>
          <div class="col-lg-3">
            <div class="card border-info p-2">
              <img src="<?= $product['product_image']; ?>" class="card-img-top" height="320"> 
              <h6 class="card-title">Product Name: <?= $product['product_name']; ?></h6>
              <h6>Price: ₹<?= number_format($product['product_price']); ?></h6>
          
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
      <?php } ?>
    </div>
    <a class="carousel-control-prev" href="#Fitness" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#Fitness" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<img src="getwell.png" style="width: 100%; height: 100%;">
<div class="edition">
<div class="best">
  <br>
<h3>H&F Store - One-Stop Shopping Destination for Gym Equipment &<br> Sportswear
</h3>
</div>

<br>
<br>



Staying fit and active is key to leading a healthy life with all ailments at bay. But do you seem to lack the enthusiasm to hit the gym? How about <br>
transforming your home into a fitness center with high-quality gym equipment? Setting up a home gym will no longer be a distant dream with
<br> H&F Store at your service.
<br>
<br>
We also aim to ensure that you can burn calories and pass the fit-check vibe in the trendiest clothing. With an enormous collection of sportswear,
<br> we aim to awaken the inner athlete in you. Stay focused and feel comfortable while keeping your fitness game strong.
<br>
<br>
<b>Best Online Shopping Site for Gym Accessories and Health Products</b><br><br>
Getting fit and healthy goes beyond going to the gym daily. You can improve your health even at home when you have the right equipment at your 
<br>disposal. From gym equipment and clothes to accessories and health supplements, you need it all for a comprehensive fitness routine.
<br>
<br>
H&F Store is your one-stop destination to find it all online. Check out our overall collection to understand how we can aid you.
<br><br>

<b>Sportswear for men</b><br><br>
Whether it 's the gym or a workout session at home, get ready to sweat it out in our trendy and comfy men's gym wear. Check out our exquisite 
<br>collection of men's sportswear to channel out your inner athlete while reflecting your fashionable side.<br><br>
<u>T-Shirt:</u> At H&F Store, you will come across a wide range of men's t-shirts with moisture-wicking technology. Whether you plan to hit the running 
<br>tracks or burn some calories on the cardio machine, we have the right fit for you. From workout t-shirts to polo running t-shirts, you will get it all
<br> from us. Try our full-sleeve t-shirts with thumb openings to show off your skills on a basketball court, or wear our football jerseys and hit the post
<br> in style.<br><br>

<u>Shorts:</u> Have all the lunges and squats finally paid off, and you want to show off your toned-out calf muscles? H&F Store shorts in their vibrant hues
<br> can help you with it. Whether you want to bring your A-game to the field or make the most out of your leg day, our breathable and high-performance shorts will come to your rescue.
<br><br>

<u>Footwear:</u> The right footwear brings out your athletic spirit and makes you high on energy. Our running shoes are designed to improve your training experience. You can
 also sport our gym shoes for men throughout the day and navigate through different corners of the city with utmost comfort. You can also check out our slides and flip
flops to ooze out a casual and easy-breezy appeal from your side.<br><br>


<u> Joggers and Trackpants: </u>Joggers and track pants are perfect on days when you want to keep it cool and comfy. Whether you are hitting the track or going out, joggers
 and track pants will help you add that wow factor to your casual look. You can also get into our stretchy yoga pants and jump around in them all day long.
 <br><br>

<u>Jackets and Sweatshirts:</u> Planning to turn on the heat this winter? Let our collection of jackets and sweatshirts make heads turn. From co-ord tracksuits and printed 
tsweatshirts to windcheaters, our collection will always help you exude your fun and sporty personality.<br><br>

<b>Sportswear for women</b><br><br>
Getting into women's gym wear will instantly make you feel energized. There's something about comfy workout clothes that inspires you to level up your fitness game. 
Level up your fitness routine and show off your dressing game with our collection.<br><br>
<u>T-shirt:</u> Getting stylish t-shirts to wear at the gym is a must. In case your regular wardrobe seems to hold nothing to show off your inner stylist, our gym-wear t-shirts 
will come to your rescue. Available in different shades and sleeve types, H&F Store women's t-shirts always help you bring your A-game in terms of styling.<br><br>

<u>Sports Bra: </u>Getting yourself a sports bra is the first step to becoming ready for a workout session or day on the field. Provide your breasts with the much-needed support 
and prevent pain and discomfort while delivering your best at the gym.<br><br>

<u>Tights:</u> A pair of tights will help you see improved results from your workouts. Once you start wearing our tights, you won't think about switching back to leggings or
jeggings. From ombre to floral prints, our tights are the true epitome of comfortable fashion.<br><br>

<u>Shorts:</u> Our active shorts are your perfect companion for a workout session during the scorching summers. With cute prints and neutral shades, our shorts always look dapper. If you feel uncomfortable in regular shorts, you can check out our collection of shorts with Inner tights.
<br><br>
<u>Joggers: </u>Joggers are a versatile element to add to your fashion closet. Whether it 's an intense workout session or running to the supermarket, get into a pair of joggers, and you will be all good to go.<br><br>
<u>Footwear:</u> Ditch your heels to stun everyone in our attractive pairs of running shoes. Available in different hues, our gym shoes for women will help you go miles without
making your feet sacrifice comfort.<br><br>
<u>Jacket and Sweatshirts: </u>Look uber cool in our collection of sporty sweatshirts and outdoor jackets. Ooze out all the hotness on chilly days with our fancy collection of cropped sweatshirts.<br><br>
<b>Cardio Equipment</b><br><br>
Having the right gym products at your disposal is mandatory to begin your cardio training. Get into an intense cardio session with full motivation and strengthen your heart and lungs. If you are worried about setting up our cardio equipment at home, you should know that they come with an easy installation technique. Check out our high-end models of cardio equipment to make worthy Investments for Improving your health.<br><br>
<u>Spinbikes: </u>Irrespective of where you stand in your fitness journey, a spin bike is always a worthwhile investment. A spin bike usually resembles a traditional road bike and ensures that you can carry on with customized workouts with coasting and acceleration. With Bluetooth technology, our spin bikes are here to aid you in having smart workout sessions.<br><br>
<u>Treadmills:</u> Looking for the best weight loss products for your home gym? Our treadmills are the finest to level up your cardiovascular workouts. Did you know that a few minutes on the treadmill can also positively impact your mental health? Treadmill workouts are also the best for giving your memory a boost. Besides, you will also be able to improve your insulin sensitivity and catch better sleep at night.<br><br>
<u>Rowers:</u> Looking for the best equipment to increase your strength and develop endurance? Our rowers are your best bet. It tones your arms and also offers some surprising benefits to your heart. From weight loss to sports training, our rowers can help you with everything.

<br><br>
<b>Outdoor Cycles</b><br><br>
Want to keep your fitness game strong amidst nature? Hoping on your cycle for an adventurous day out is a unique way of improving your overall health, Check out our amazing collection of outdoor cycles to breathe in fresh air while burning some calories,<br><br>
<u>Single Speed Cycle:</u> A single-speed cycle comes with a single gear. With no additional gears, the gear ratio of these bikes always remains constant. Get on our single- speed cycles to ride on a freewheel mechanism. You will be able to free-roll without having to pedal the bike. Take our single-speed cycles on a ride in rough terrain and get ready to work out really hard<br><br>
<u>Geared Cycle:</u> If you prefer going uphills, a geared cycle from H&F Store should be your ultimate choice. Even on difficult pathways, a geared cycle will ensure a smooth
ride. Run along the road at lightning speed on a geared cycle from us.<br><br>
<u>Kids Cycle:</u> The packed routine of kids these days leaves no time for physical activities. Get a cycle for kids from H&F Store and give your little one the opportunity to be fit amidst nature. Arrange a family bike ride on weekends and let your kids have some fun.<br><br>
<b>Nutrition & Wellness</b>
<br><br>Apart from exercising and fitness training, you also need to concentrate on nutrition and wellness to improve your overall health, H&F Store is here for you to offer a wide range of nutrition and wellness products to meet your needs.
Personal Care Our range of personal care Items includes everything from face washes to body scrubs. If chafing thighs is giving you trouble, try out anti-chafing cream. Our foot cream is the best product to get rid of cracks and dryness. From body acne cream to underarm lightening gel, we help you take personal care seriously. We even have different hair care products to get thick and luscious locks.
<br><br><u>Protein:</u> Can't seem to get enough protein from your dally diet? Try our protein powders and shakes today. Even if you are vegan, we have the right protein solution for you. Whether you need a pre-workout drink or something to burn calories, our collection includes everything.
<br><br><u>Snacks:</u> Feel hungry in between meals? Ditch oily and spicy snacks for our healthy yet delicious alternatives. Oatmeal, chia seeds, muesli, you name it, and we have it in our collection of healthy snacks.


<br><br><u>Vitamins:</u> Meet your daily dose of nutritional requirements with our vitamin and mineral supplements. If boring vitamin capsules are not your thing, you can try our gummies filled with essential nutrients. Our vitamin and mineral supplements can relieve PMS symptoms, promote better sleep, Improve hair and skin quality and do more
<br><br><u>Weight loss:</u> Your search for the best weight loss supplements ends at H&F Store. We have gummies, powders, and capsules to aid your weight loss journey. Whether it 's our apple cider gummies or multigrain flakes, our weight loss products are always safe for your overall health.
<br><br><u>Immunity:</u> Boosting your immunity is no longer a problem with H&F Store supplements. From flaxseed oil to omega-3 fish oil capsules, we have it all for enhancing your Immunity. Let your strong immune system protect you from diseases and infections, regulate your body weight, and improve your overall quality of life.
<br><br><u>Muscle Recovery: </u>Need your sore muscles to recover fast? Our muscle recovery supplements are here to aid you. Equipped with a high protein content, our muscle recovery powders and drinks are great before or after an intense workout routine.

<br><br><b>Gym Essentials Right at Your Doorsteps</b>
<br><br>With H&F Store at your service, you will get all gym accessories, equipment, and apparel at your doorstep. Order from us today to get high-quality gym products delivered to your doorstep now.
<br><br>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>