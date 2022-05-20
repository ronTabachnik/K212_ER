<?
include('session.php');
include('db.php');

?><!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="This is web app for recycling electronic devices. here you can find ways to recycle and even companies who is interested in your garbage">
  <meta name="author" content="Ron Tabachnik and Farid Kemyakov">

  <title>Homepage - ER</title>
  <link rel="icon" type="image/x-icon" href="styles/images/ProductLogo.ico">
  <link rel="icon" href="styles/images/ProductLogo.png">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <link href="styles/base.css" rel="stylesheet">
  <link href="styles/nav.css" rel="stylesheet">
  <!-- <link href="styles/sign.css" rel="stylesheet"> -->
  <link href="styles/product.css" rel="stylesheet">
</head>

<body>
<? include('nav_header.php'); ?>
  <br>
  <br>


  <main class="container">
    <div class="p-5 p-md-6 mb-4 text-black border rounded-3 bg-light">
      <div class="col-md-6 px-0">
        <h1 class="display-4 fst-italic">About our goal</h1>
        <p class="lead my-3">Outdated technology doesn’t have to end up in a landfill. So when it’s time to upgrade your laptops and printers or replace your old tv
          Visit our website to find the right place to recycle it responsibly...</p>
        <p class="lead mb-0"><a href="about.php" class="text-black fw-bold">Read more...</a></p>
      </div>
    </div>

    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Recycling company</strong>
            <h3 class="mb-0">The goal</h3>
            <p class="card-text mb-auto">Electronic waste is the waste generated from surplus, broken, and obsolete electronic devices that have no further ability to be reused or repurposed..</p>
            <a href="recycling.php" class="stretched-link">Read more...</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img width="200" height="250 "src="https://cdn.pixabay.com/photo/2021/11/27/11/55/business-6827797_1280.png" alt="">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Electronic waste disposal</strong>
            <h3 class="mb-0">What is E-waste</h3>
            <p class="mb-auto">When the word “recycling” gets mentioned, people often think of soda cans, water bottles, cardboard boxes, or newspapers – common household items..</p>
            <a href="recycling.php" class="stretched-link">Read more..</a>
          </div>
          <div class="col-auto d-none d-lg-block">
          <img width="200" height="250" src="styles/images/Ewaste.png" alt="">

          </div>
        </div>
      </div>
    </div>
    <div class="b-example-divider"></div>
    <div class="row g-5">

      <div class="col-md-8">

        <h3 class="pb-4 mb-4 fst-italic border-bottom">

        </h3>

        <article class="blog-post">
          <!-- <h2 class="blog-post-title">Benefits of electronics recycling</h2>
          <p class="blog-post-meta">by <a href="#">Ron Tabachnik</a></p>

          <p>Daug kas galvoja, kad Lorem Ipsum - tai vien tik atsitiktinai surinktas tekstas, bet taip nėra. Jo šaknis galima rasti klasikiniame Lotynų kalba parašytame kūrinyje, išleistame 45 pr. m. e., t.y. prieš du tūkstančius metų. Richard McClintock, lotynų kalbos profesorius Hampden-Sydney (JAV) koledže, išrinko vieną iš neaiškesnių žodžių iš Lorem Ipsum ištraukos - „consectetur“, ir ėmėsi ieškoti jo klasikinėje lotynų kalbos literatūroje. Tokiu būdu jis rado neabejotiną šio žodžio ir Lorem Ipsum šaltinį knygos „de Finibus Bonorum et Malorum“ (Apie gėrio ir blogio ribas) 1.10.32 ir 1.10.33 pastraipose. Kūrinio autorius – Ciceronas, parašęs jį 45 pr. m. e. Šis etikos teorijos traktatas buvo labai populiarus Renesanso laikais. Pirmoji Lorem Ipsum teksto eilutė, „Lorem ipsum dolor sit amet..“ sukurta remiantis 1.10.32 pastraipa.
          <p>Klasikinį Lorem Ipsum teksto pavyzdį, naudojamą nuo XVI a., galima pamatyti svetainės apačioje. Taip pat pateikiamos 1.10.32 ir 1.10.33 pastraipos is Cicerono knygos „de Finibus Bonorum et Malorum“, ir jų vertimai į anglų kalbą H.Rackham 1914m. .</p> -->
          <hr>
          <h2>Benefits of electronics recycling</h2>
          <br>
          <dl>
            <dt>Cleaner Environment</dt>
            <dd>Recycling the waste from electronics saves space in the landfills and prevents the environmental pollution caused by the toxins. Recycling also reduces the need for landfills in the first place.</dd>
            <dt>Recycling is good for the economy</dt>
            <dd>Goods made from recycled materials use less water, create less pollution, and uses less energy. Recycling also reduces the production costs of goods by avoiding manufacturing components from scratch.</dd>
            <dt>Reuse of resources</dt>
            <dd>Electronics contain a lot of components that can be re-utilized sometimes without any processing, saving resources and energy required for initial manufacturing. A lot of big companies like Apple have their own recycling facility
              where they dispose of electronics for future reuse and this is something that all big companies should strive for.</dd>
          </dl>

          <hr>

          <h3>How to avoid online shopping scam</h3>
          <br>
          <dl>
            <dt>Too good to be true rule</dt>
            <dd>If you’re shopping online and find that one specific item for a price that seems too good to be true, chances are it’s scam. Online scammers pick popular items and list them at discount prices to lure in customers. A customer thinks
              they’re getting a deal, when really they are providing someone with their payment information. Always check the website URL for misspellings and look for secure checkouts when finalizing your purchase.</dd>
            <dt>Research new and sketchy websites</dt>
            <dd>Let’s say you find that perfect gift online but it’s on a website in which you’ve never purchased anything. It’s always best to research the website before making a final purchase. Today’s scammers create mock websites that are almost
              identical to online retailer websites, all with the intent to confuse you and steal your information. Always check the website URL to make sure it’s not misspelled. Also, a good rule of thumb is to do a quick online search. If other
              customers have fallen for online traps, then chances are likely someone wrote a review online about their experience. A little research could potentially save you money and heartache.</dd>
            <dt>Don't use the same password for every account</dt>
            <dd>It’s always said, but it needs to be said again – do not use the same password for every online account. Once an online scammer figures out one password, then it’s easy for them to turn around and try it on all of your accounts. If
              you had one password for every account then you just gave the scammer free access to all of your information. Using different passwords prevents you from falling victim to these practices. Also, don’t worry if you have a hard time
              remembering all of your passwords. Most retailers now have that capability to instantly verify your identity so you can quickly reset your password each time you sign in.</dd>
          </dl>
        </article>
      </div>

      <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
          <div class="p-4 mb-3 bg-light rounded">
            <h4 class="fst-italic">Some random fact</h4>
            <p class="mb-0">This UI was designed by the best Farid.</p>
          </div>

          <div class="p-4">
            <h4 class="fst-italic">Reach us</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">KTU</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </main>
  <br>
  <br>
  <div class="b-example-divider"></div>


  <div class="container">
    <footer class="py-5">
      <div class="row">
        <div class="col-2">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 text-muted">About us</a></li>
            <li class="nav-item mb-2"><a href="recycling.php" class="nav-link p-0 text-muted">Recycling</a></li>
            <li class="nav-item mb-2"><a href="market.php" class="nav-link p-0 text-muted">Market</a></li>
            <li class="nav-item mb-2"><a href="contact.php" class="nav-link p-0 text-muted">Contact us</a></li>
          </ul>
        </div>

        <div class="col-4 offset-1">
          <form>
            <h5>Subscribe to our newsletter</h5>
            <div class="d-flex w-100 gap-2">
              <label for="newsletter1" class="visually-hidden">Email address</label>
              <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
              <button class="btn btn-primary" type="button">Subscribe</button>
            </div>
          </form>
        </div>
      </div>

      <div class="d-flex justify-content-between py-4 my-4 border-top">
        <p>&copy; 2021 Company, Inc. All rights reserved.</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                <use xlink:href="#twitter" />
              </svg></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                <use xlink:href="#instagram" />
              </svg></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                <use xlink:href="#facebook" />
              </svg></a></li>
        </ul>
      </div>
    </footer>



</body>

</html>