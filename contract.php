<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>SM TRAVEL EGENCY</title>
    <title>Bootstrap 4 Example</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"href="style.css">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><b><i><u>SM TRAVEL</u></i></b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gellary.php">Gellary</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contract.php">Contact</a>
      </li>

     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<nav class="pera">

<p style="margin:10px;">       <b>     When it comes to photography, few destinations in the world can equal the rich mix of opportunities that can be enjoyed in India. From its colorful street scenes with their numerous festivals and temples to its many majestic old palaces and fortresses, this dynamic country has more than found its mojo in recent decades.

<br>A nation of deep contrasts, where the modern coincides with the traditions of the past, India is one of those destinations that's perfect for those who enjoy slow travel. Take your time and savor – and photograph, of course – everything this incredible country has to offer.
</b></p>

</nav>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1>SM TRAVEL</h1>
    <p>PLANE YOUR TOUR NOW</p>
  </div>



  
  <section class="my-5">
  <div class="py-5">
    <h1 class="text-center"> Fill The Form</h1>

  </div>

  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      

      <div class="form-group">
        <label> User Name</label>
        <input type="text" name="User" autocomplete="off" class="form-control">

      </div>

      <div class="form-group">
        <label> Email Id</label>
        <input type="text" name="Email" autocomplete="off" class="form-control">

      </div>

      <div class="form-group">
        <label> Mobile No:</label>
        <input type="text" name="Mobile" autocomplete="off" class="form-control">

      </div>

      <div class="form-group">
        <label> Comments</label>
        <textarea class="form-control" name="comments"></textarea>

      </div>

      <button type="submit"  class="btn btn-success">Submit</button>
    </form>

  </div>

</section>

<footer class="p-3 bg-dark text-white ">
  <div class ="row" >
    <div class ="px-5" >

    <h4>SM Travel Egency</h4>
      
        <ul>about</ul>
        <ul>help</ul>
        <ul>contract us</ul>
        <ul>ask any question</ul>

      

    </div>

    


  </div>
</footer>


</div>
</body>
</html>