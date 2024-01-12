<?php 
include './inc/dp.php';
include './inc/form.php';
include './inc/select.php';






?>
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>اربح مع مشعل محمد الحصيني </title>
</head>

<body>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto">

        <h1 class="display-4 fw-normal">اربح مع مشعل</h1>
        <p class="lead fw-normal">للسحب على ربح نسخة مجانية من برنامج</p>
        <h4 id="countdown"></h4> 
    
    </div>
<br><br>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3>للدخول في السحب اتبع ما يلي:</h3>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">تابع البث المباشر على صفحتي على فيسبوك بالتاريخ المذكور أعلاه</li>
                    <li class="list-group-item">سأقوم ببث مباشر لمدة ساعة عبارة عن أسئلة وأجوبة حرة للجميع</li>
                    <li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك وإيميلك </li>
                    <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
                    <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برنامج كامتازيا </li>
                </ul>
            </div>
            <div class="col-6">
                <form action="" method="POST">
                <h3>الرجاء أدخل معلوماتك</h3>

                <div class="mb-3">
                    <label for="firstName" class="form-label">الاسم الأول</label>
                    <input type="text" name="firstName" id="firstName" class="form-control" value="">
                    <div class="form-text error"></div>
                </div>

                <div class="mb-3">
                    <label for="lastName" class="form-label">الاسم الأخير</label>
                    <input type="text" name="lastName" id="lastName" class="form-control" value="">
                    <div class="form-text error"></div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">البريد الالكتروني</label>
                    <input type="text" name="email" id="email" class="form-control" value="">
                    <div class="form-text error"></div>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
            </form>
            </div>
        </div>
        
        
       
    </div>
</div>



<div class="loader-con">
    <div id="loader">
        <canvas id="circularLoader" width="200" height="200"></canvas>
    </div>
</div>

<div class="d-grid gap-2 col-6 mx-auto my-5">
    <button type="button" id="winner" class="btn btn-primary">
        اختيار الرابح
    </button>
</div>


<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalLabel">الرابح في المسابقة  </h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
          
             
              
            <div class="modal-body">

            <?php foreach ($users as $users):?>
                                   <h1 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($users['firstName']).' '.htmlspecialchars($users['lastName']) ?>  </h1>
                                   <?php endforeach; ?>
                                  </div>

        </div>
    </div>
</div>



</div>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/loader.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>