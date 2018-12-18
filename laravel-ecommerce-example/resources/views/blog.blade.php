<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
  font-family: Arial;
  padding: 20px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
</style>
</head>
<body>

<div class="header"><div class="fakeimg">
  <h2><a href="/">Ecommerce</a></h2>
</div>
</div>
<div class="row">
  <div class="leftcolumn">
     <div class="card">
      <h2>BLACK FRIDAY!</h2>
      <h5>Only 1 Day of BLACK FRIDAY Sale!, Dec 21, 2018</h5>
      <img src="img/6p2p0003sr6786224o18.jpg" alt="black friday image">
      <p>All of things 50% off!!!</p>
      <p>The BLACK FRIDAY specials are finally here.</p>
    </div>

    <div class="card">
      <h2>Boxing Day!</h2>
      <h5>Only This Day, Dec 19, 2018</h5>
       <img src="img/eb-games-boxing-week-2014.png" alt="boxing image">
      <p>Boxing Day-Trade 5 game gets $100 to buy a new PS4 console.</p>
      <p>Boxing Day offers that game fans are looking forward to have been released! All goods can be purchased through the official storefront.<br>

It can be purchased online through the official website or through the official storefront, but the time of the two purchases varies.<br>

To purchase through the official website, you can start buying immediately on the 26th.<br>


Offer cannot be mixed with other offers.<br>

TRADE IN 5 Games can get $100 and is used to purchase the PS4.</p>
    </div>
    <div class="card">
      <h2>Xmas Best Deals!</h2>
      <h5>FINAL 1 WEEK of Xmas On All Our Best Deals!, Dec 17, 2018</h5>
      <img src="img/5c0df54be763a752705727.jpg" alt="xmas image">
      <p>Last Chance! Ultimate Christmas Gift Guide.</p>
      <p>The long-awaited Christmas specials are finally here. This wave of killing did not disappoint everyone!</p>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Ecommerce</div>
      <p>A Shopping website.</p>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg">BLACK FRIDAY!</div><br>
      <div class="fakeimg">Boxing Day!</div><br>
      <div class="fakeimg">Xmas Best Deals!</div>
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div>
  </div>
</div>

<div class="footer">
  <h2>Footer</h2>
</div>

</body>
</html>
