
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<style>
    .center {
        margin: auto;
        width: 50%; 
        margin-top: 10%;
}
    .cn{
        display: grid;
        place-items: center;
    }
    body{
        background-image: url('lukasz-szmigiel-jFCViYFYcus-unsplash.jpg');
    }
    /* div {
  opacity: 0.5;
} */
</style>
    <title>Secret Diary</title>
  </head>
  <body>
      <div class="center container ">
          <h1 class="text-center fw-bold" style="color: white;" >Secret Diary</h1>
          <p class="text-center fw-bold" style="color: white;">Store your thoughts permanently and securely.</p>
          <p class="text-center " style="color: white;">Interested? SignUp Now.</p>
    <form action="validation.php" method="post">
        <div class="cn mb-3">          
          <input type="email" name="email" style="width: 50%;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Email" required>         
        </div>
        <div class="cn mb-3">
            <input type="password" name="password" style="width: 50%;" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
        </div>
        <div class=" mb-3 form-check" style="width: 25%; margin: auto;">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" style="color: white;" for="exampleCheck1">Stay logged in</label>
          </div>
          <button type="submit" class="btn btn-success d-grid col-2x mx-auto">LogIn</button>
      </form>
      <a class="cn mt-2" href="signup.php">SignUp</a>
      </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>