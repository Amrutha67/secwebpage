<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


</head>
<body class="bgm">
    <nav class="navbar navbar-expand-sm bg-info navbar-dark">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Addition</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index2.php">Subtraction</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mul.php">Multiplication</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mul2.php">Division</a>
          </li>
        </ul>
      </nav>
       

    
    <p class="ler">Division</p>
    <table class="table">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-sm-12 col-md-12 col-lg-12"></div>
        <tr>
            <td><p class="paragraph" >First Number</p></td>
            <td><input type="text" class="form-control" name="" id="firstnum"></td>
        </tr>
        <tr>
            <td><p class="paragraph" >Second Number</p></td>
            <td><input type="text" class="form-control" name="" id="secnum"></td>
        </tr>
        
               
            <tr>
            <td></td>
            <td><button onclick="divnumbers()" class="btn btn-primary">Submit</button></td>
        </tr>
        <tr>
            <td></td>
            <td> <p id="res"></p></td>
        </tr>

    </table>
    </div>
</div>
</div>

    <script>
        function divnumbers()
        {
           var firstnum =parseInt(document.getElementById("firstnum").value );
           var secnum =parseInt(document.getElementById("secnum").value );
           var result= firstnum / secnum ;
           
           
document.getElementById("res").innerHTML=result
           console.log(result)
        }
    </script>
    
</body>
</html>