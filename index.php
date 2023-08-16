<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lerdsin Telaphone</title>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
    <?php  include ("connect.php");
           include ("func.php");
           $sql = "SELECT * FROM telephone order by id_tel asc" ;		
           $result = mysql_query($sql) or die ("ไม่สามารถ query คำสั่งได้ครับ") ; ?>
    <a id="button"></a>
    <div class="top">
    <div><img src="logo.jpg" alt="logo" width="120px"></div>
    <h2>ระบบค้นหาหมายเลขโทรศัพท์ โรงพยาบาลเลิดสิน</h2>
    </div>
    <div class="container">
        <div class="section">
            <div class="input">
                <input type="text" id="myInput" onkeyup="searchTable()"  placeholder="ค้นหา">
            </div>
            <table>
                <thead>
                    <tr>
                        <th>ลำดับ</th>
                        <th>เเผนก / หน่วยงาน</th>
                        <th>หมายเลขโทรศัพท์</th>
                        <th>ชั้น</th>
                        <th>อาคาร</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                     <?php while($dbarr = mysql_fetch_array($result)) {
				        $id_tel = $dbarr['id_tel'] ;
                        $department = $dbarr['department'];
                        $inner_line = $dbarr['inner_line'];
                        $floor = $dbarr['floor'];
                        $build = $dbarr['build'];
                     ?>
                    <tr>
                        <td><?php echo $id_tel; ?></td>
                        <td><?php echo $department; ?></td>
                        <td><?php echo $inner_line; ?></td>
                        <td><?php echo $floor; ?></td>
                        <td><?php echo build($build); ?></td>
                    </tr>
                    <?php }; ?>
                </tbody>
            </table>
            <footer>
                <p>&copy; copyright by Computer Center</p>
            </footer>
        </div>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script><script  src="./script.js"></script>
</body>
</html>