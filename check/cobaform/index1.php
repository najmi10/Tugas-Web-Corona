<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes Covid-19</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    
    
</head>
<style>
body{
    min-height: 100vh;
    background-image: linear-gradient(to bottom, #84c4d6, #a1cde3, #bdd7ec, #d5e1f3, #eaedf8, #ebf1fb, #ecf5fd, #eef9ff, #d1f9ff, #affaff, #88fbff, #5ffbf1);
    margin: 0;
    padding: 0;
}

#heading{
    color: black;
    /* font-weight: bold; */
}

.middle{
    position: relative;
    display: inline-block;
    text-align: center;
    width: 900px;
    align-content: center;
    background: #f1f1f1;
    height: 400px;
    padding: 130px 50px;
    border-radius: 10px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
}



.btn1{
    font-family: "montserrat", sans-serif;
    font-size: 20px;
    font-weight: 500;
    color: rgb(95, 243, 50);
    display: inline-block;
    width: 200px;
    background-color: none;
    border: 2px solid rgb(95, 243, 50);
    border-radius: 50px;
    text-transform: uppercase;
}

.btn2{
    margin-left: 2em;
    font-family: "montserrat", sans-serif;
    font-size: 20px;
    font-weight: 500;
    color: rgb(236, 20, 20);
    display: inline-block;
    width: 200px;
    background-color: none;
    border: 2px solid rgb(236, 20, 20);
    border-radius: 50px;
    text-transform: uppercase;
}

.btn2:hover {
    background-color: rgb(236, 20, 20);
    color: #fff;
}

.btn1:hover {
    background-color: rgb(95, 243, 50);
    color: #fff;
}

*{
    margin: 0;
    padding: 0;
    text-decoration: none;
    /* font-family: "montserrat", sans-serif; */
    box-sizing: border-box;
  }
  
 
  
</style>
<body>
    <div class="box">
    <div class="middle">
        <h4 id="heading">Apakah anda mengalami kesulitan bernafas yang cukup parah?</h4><br>
        <a href="resiko.php"><button class="btn btn1">Iya</button></a>
        <a href="index2.php"><button class="btn btn2">Tidak</button></a>
    </div>
    </div>
    
    <!-- Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>