<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- กรอบนี่ห้ามลบ -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="https://media.discordapp.net/attachments/973917082737606656/1164219411490689094/39454474_299038827524506_5768489232871981056_n.png?ex=65426ad1&is=652ff5d1&hm=faaac91db6e67c4ff4f74d149454aa1b406310a80305a03cdfdb6696bdab6f79&=&width=994&height=559" alt="Image" height="10%" width="10%"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">หน้าแรก <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="std_time.php">ตารางเรียน</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="info_std.php">กรอกข้อมูล</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="contact.php">ติดต่อคุณครู</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- กรอบนี่ห้ามลบ -->

    <!-- กรอบ -->
    <div class="container">
        <h1>ข้อมูลของครู</h1>
        <p>ต้องการติดต่อครูติดต่อตามข้อมูลด้านล่างเลยครับ :</p>
        <p>Line Discord ครูจะตอบไวเพราะเปิดตลอด :</p>
        <div class="alert alert-info">
            <strong>ชื่อ - นามสกุล :</strong> ทีปกร ทองหล่ออนันต์ 
        </div>
        <div class="alert alert-info">
            <strong>อีเมล (ไว้ส่งงานเท่านั้น):</strong> ktpk1937@gmail.com 
        </div>
        <div class="alert alert-info">
            <strong>Line :</strong> kongtpk_
        </div>
        <div class="alert alert-info">
            <strong>IG :</strong> kongtpklikeyou17
        </div>
        <div class="alert alert-info">
            <strong>Discord :</strong> kongz1july
        </div>
        <!-- คุณสามารถเพิ่มข้อมูลเพิ่มเติมตรงนี้ -->
    </div>

    <!-- สคริปต์สำหรับ Bootstrap และ jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
      <img src="https://media.discordapp.net/attachments/973917082737606656/1164219411490689094/39454474_299038827524506_5768489232871981056_n.png?ex=65426ad1&is=652ff5d1&hm=faaac91db6e67c4ff4f74d149454aa1b406310a80305a03cdfdb6696bdab6f79&=&width=994&height=559" alt="#" width="60" height="60">
      </a>
      <p id="datetime">วันที่และเวลา</p>
    </div>
    <p>&copy; Copyright 2023 Nisit Teepakorn Thonglhoanan. All Rights Reserved</p>
    </div>
  </footer>
  
</div>
<script>
        function updateDateTime() {
            const dateTimeElement = document.getElementById("datetime");
            const now = new Date();
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit' };
            const formattedDateTime = now.toLocaleDateString('en-US', options);
            dateTimeElement.textContent = " " + formattedDateTime;
        }

        // อัปเดตวันที่และเวลาทุกวินาที
        setInterval(updateDateTime, 1000);
        
        // ให้อัปเดตวันที่และเวลาครั้งแรกเมื่อหน้าเว็บโหลด
        updateDateTime();
    </script>
</body>
</html>
