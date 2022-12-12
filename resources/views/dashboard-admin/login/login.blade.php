
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- link css -->
  <link rel="stylesheet" href="assets/css/login.css">

  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,700;1,300;1,400&display=swap" rel="stylesheet">

</head>
<body>
  <div class="hero">
    <div class="box">
        <div class="form">
            <form action="{{route('postlogin')}}" method="POST">
                @csrf
                <h2>Sign In</h2>
                <input name="username" type="text" placeholder="Email" required="required">
                <input name="password" type="password" placeholder="Password" required="required">
                <input name="submit" id="submit" type="submit" value="Sign In" required="required">
            </form>
          
        </div>
  </div>
</div>
</body>
</html>