<!-- 0 = +
1 = -
2 = *
3 = / -->
<!DOCTYPE html>
<html lang="en">
<head>
<!-- CSS -->
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</head>
<body>
<div class="container">
<h1>Calculator</h1>
    <div class="panel panel-primary">
    <div class="panel-heading">Calculator V.1.0.0</div>
    <div class="panel-body">
    <form name="CTF" method="GET" action="">
      <label>ตัวเลขตัวที่ 1</label>
        <input name="n1" class="form-control form-control-lg" placeholder="ตัวเลขตัวที่ 1" type="text" required>
        </br>
        <label>ตัวเลขตัวที่ 2</label>
        <input name="n2" class="form-control form-control-lg" placeholder="ตัวเลขตัวที่ 2" type="text" required>
        </br>
        <div class="container">
            <div class="row">
                <div class="col-sm-1">
                    <button type="submit" name="operation" value="0" class="btn btn-primary">บวก</button>  
                </div>
                <div class="col-sm-1">
                    <button type="submit" name="operation" value="1" class="btn btn-success">ลบ</button>  
                </div>
                <div class="col-sm-1">
                    <button type="submit" name="operation" value="2" class="btn btn-danger">คูณ</button>  
                </div>
                <div class="col-sm-1">
                    <button type="submit" name="operation" value="3" class="btn btn-warning">หาร</button>  
                </div>
            </div>
        <hr>
        
        </div>

      </form>
      <?php
        error_reporting(0);
        function dostuff() {
            $n1 = $_GET["n1"];
            $n2 = $_GET["n2"];
            $operation = $_GET["operation"];
            $is_num = is_numeric($n1) && is_numeric($n2);
            if($is_num) {
                switch($operation) {
                    case 0:
                        $result = number_format($n1 + $n2, 2);
                        echo '<div class="alert alert-success" role="alert">'.$result.'</div>';
                    break;
                    case 1:
                        $result = number_format($n1 - $n2, 2);
                        echo '<div class="alert alert-success" role="alert">'.$result.'</div>';
                    break;    
                    case 2:
                        $result = number_format($n1 * $n2, 2);
                        echo '<div class="alert alert-success" role="alert">'.$result.'</div>';
                    break;
                    case 3:
                        $result = number_format($n1 / $n2, 2);
                        echo '<div class="alert alert-success" role="alert">'.$result.'</div>';
                    break;
                }
            }else{
                echo '<div class="alert alert-danger" role="alert">'.'กรุณาใส่ตัวเลขที่ถูกต้อง'.'</div>';
            }
        }
        if(isset($_GET["operation"]) && isset($_GET["n1"]) && isset($_GET["n2"])) {
            dostuff();
        }
        ?>
    </div>
    </div>
</div>
</body>
</html>
