<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >

    <link href="{{ url('/css/style.css') }}" rel="stylesheet">
    <title>بزرگ‌ترین مرکز آموزش دانشگاهی، توانمندی های ورود به بازار کار و مشاوره تحصیلی</title>
    <script src="jQuery.js"></script>
    <script type="text/javascript">
        //باز شدن ورودی های تغییر رمز عبور برای ویرایش اطلاعات
        function showPassbox() {
            if(document.getElementById("checkShowPassBox").checked==true)
                document.getElementById("passBox").style.display="inline";
            else
                document.getElementById("passBox").style.display="none";
        }
        function setLayer() {
            if(window.innerWidth<1086)
            {
                document.getElementById("right").style.position="static";
                document.getElementById("left").style.position="static";
                document.getElementById("right").style.left="19%";
                document.getElementById("name").style.display="none";
            }
        }
        function setPadding() {
            // window.pageYOffset
            //alert(window.pageYOffset);
            if(window.pageYOffset>270&&window.innerWidth>1086)
            {
                document.getElementById("left").style.position="fixed";
                document.getElementById("right").style.position="relative";
                document.getElementById("left").style.left="8%";
                document.getElementById("left").style.top="0%";
                document.getElementById("right").style.left="16.6%";
                document.getElementById("right").style.backgroundColor="white";
                document.getElementById("name").style.display="inline";
            }

            if (window.pageYOffset<270&&window.innerWidth>1086){
                document.getElementById("name").style.display="none";
                document.getElementById("left").style.position="relative";
                document.getElementById("right").style.position="relative";
                document.getElementById("left").style.left="0%";
                document.getElementById("left").style.top="0%";
                document.getElementById("right").style.left="0%";
                document.getElementById("right").style.backgroundColor="white";


            }

        }


    </script>

</head>
<body onscroll="setPadding();" onresize="setLayer();">

<!-- نوار بالا مخصوص لپ تاپ-->
<div class="header col-12 headHight">

    <div style="width: 9%;float: left;padding-top: 40px" >
        <?php
        if(isset($_SESSION['productCount']) and $_SESSION['productCount']!=0 )
        {
        ?>
        <a href="showCart.php" class="submitCourse" style="float: right;background-color: #4caf50">سبد خرید <?php echo $_SESSION['productCount'] ?></a>
        <?php
        }
        ?>
    </div>

    <div class="h" style="width: 81%;float: left;padding-top: 50px">
        <nav>
            <ul>
                <?php
                if(isset($_SESSION["name"]))
                {
                $connection = connect();
                $result = selectInformation($connection,$_SESSION['id']);
                $row = $result->fetch_assoc();
                ?>
                <li style="background-color: #33b5e5;border-radius: 5px;"><a href=""><?php
                        echo $row["name"];;
                        ?></a>
                    <ul>
                        <?php
                        if(selectAcces($connection,$_SESSION['id'])=='admin')
                        {
                        ?>
                        <li  style="background-color: yellow"><a href="addCurses.php">اضاف کردن دوره</a></li>
                        <li  style="background-color: yellow"><a href="addProfessor.php">اضاف کردن استاد</a></li>
                        <li  style="background-color: yellow"><a href="selectOptionExam.php">تنظیمات آزمون</a></li>
                        <?php
                        }
                        ?>
                        <li  style="background-color: white"><a href="showBuys.php">محصولات خریده شده</a></li>
                        <li  style="background-color: white"><a href="showExams.php">آزمون ها</a></li>
                        <li><a href="information.php">ویرایش اطلاعات</a></li>
                        <li style="background-color: #9c0000"><a href="logout.php">خروج</a></li>
                    </ul>
                </li>
                <?php
                }
                else{
                ?>
                <li style="background-color: #33b5e5;border-radius: 5px;"><a href="login.php">ورود/ثبت نام</a></li>
                <?php
                }
                ?>
                <li><a href="index.php">خانه</a>
                    <ul>
                        <li><a href="home.php?id=1">نیازمندی های بازار کار مهندسی</a></li>
                        <li><a href="home.php?id=2">خلاءهای موجود در دانشگاه</a></li>
                        <li><a href="home.php?id=4">راهکارهایی جهت بهبود بازارکار <br>    رشته های مهندسی</a></li>
                        <li><a href="home.php?id=5"> آزمون های نظام مهندسی </a></li>
                    </ul>
                </li>
                <li><a href="">آموزش تخصصی نرم افزار</a>
                    <ul>
                        <li><a href="showCourses.php?id=6">رشته مهندسی معدن</a></li>
                        <li><a href="showCourses.php?id=7">رشته مهندسی برق</a></li>
                        <li><a href="showCourses.php?id=8">رشته مهندسی عمران</a></li>
                        <li><a href="showCourses.php?id=9">رشته مهندسی کامپیوتر</a></li>
                        <li><a href="showCourses.php?id=10">رشته مهندسی مکانیک</a></li>
                        <li><a href="showCourses.php?id=11">رشته مهندسی صنایع</a></li>
                        <li><a href="showCourses.php?id=12">رشته مهندسی مواد</a></li>
                        <li><a href="showCourses.php?id=13">رشته حسابداری</a></li>
                    </ul>
                </li>
                <li><a href="">آموزش دروس دانشگاه</a>
                    <ul>
                        <li><a href="showCourses.php?id=14">دروس عمومی رشته ها</a></li>
                        <li><a href="showCourses.php?id=15">دروس تخصصی رشته برق</a></li>
                        <li><a href="showCourses.php?id=16">دروس تخصصی رشته معدن</a></li>
                        <li><a href="showCourses.php?id=17">دروس تخصصی رشته مکانیک</a></li>
                        <li><a href="showCourses.php?id=18">دروس تخصصی رشته عمران</a></li>
                        <li><a href="showCourses.php?id=19">دروس تخصصی رشته کامپیوتر</a></li>
                        <li><a href="showCourses.php?id=20">دروس تخصصی رشته مهندسی صنایع</a></li>
                        <li><a href="showCourses.php?id=21">دروس تخصصی رشته مهندسی مواد</a></li>
                        <li><a href="showCourses.php?id=22">دروس تخصصی رشته حسابداری</a></li>
                        <li><a href="showCourses.php?id=23">دروس تخصصی رشته معماری</a></li>
                    </ul>
                </li>
                <li><a href="">مقاله و پایان نامه نویسی</a>
                    <ul>
                        <li><a href="showCourses.php?id=24">مقاله داخلی</a></li>
                        <li><a href="showCourses.php?id=25">مقاله ISI</a></li>
                        <li><a href="showCourses.php?id=26">پروپوزال نویسی</a></li>
                        <li><a href="showCourses.php?id=27">پایان نامه کارشناسی</a></li>
                        <li><a href="showCourses.php?id=28">پایان نامه ارشد</a></li>
                        <li><a href="showCourses.php?id=29">همانندجویی مقالات</a></li>
                    </ul>
                </li>
                <li><a href="">دوره های حضوری و آنلاین</a>
                    <ul>
                        <li><a href="showCourses.php?id=30">رشته برق</a></li>
                        <li><a href="showCourses.php?id=31">رشته معدن</a></li>
                        <li><a href="showCourses.php?id=32">رشته عمران</a></li>
                        <li><a href="showCourses.php?id=33">رشته کامپیوتر</a></li>
                        <li><a href="showCourses.php?id=34">رشته مکانیک</a></li>
                        <li><a href="showCourses.php?id=35">رشته صنایع</a></li>
                        <li><a href="showCourses.php?id=36">رشته مواد</a></li>
                        <li><a href="showCourses.php?id=37">رشته حسابداری</a></li>
                    </ul>
                </li>
                <li><a href="">دوره های عمومی</a>
                    <ul>
                        <li><a href="showCourses.php?id=38">دوره جامع آموزش Word</a></li>
                        <li><a href="showCourses.php?id=39">دوره جامع آموزش Power Point</a></li>
                        <li><a href="showCourses.php?id=40">دوره جامع آموزش فن بیان</a></li>
                        <li><a href="showCourses.php?id=41">دوره جامع آزمون های تافل و آیلتس</a></li>
                        <li><a href="showCourses.php?id=42">دوره جامع آموزش رزومه نویسی</a></li>
                        <li><a href="showCourses.php?id=43">دوره آموزش جامع و پیشرفته بورس</a></li>
                    </ul>
                </li>
                <li><a href="about.php">درباره ما</a></li>

            </ul>
        </nav>
    </div>

    <div style="width: 8%;float: left;padding-top: 10px" >
        <img src="logo/logo.png" height="110" width="110" style="float: right">
    </div>
    <div class="col-12" style="display: flex;justify-content: center">
        <form action="showSearch.php" method="get">
            <input type="submit" name="btnSearch" value="جست و جو" class="submit" style="background-color: #0099cc;border: none">
            <input type="text" name="searchText" style="border-radius: 5px;height: 30px;direction: rtl;">
        </form>
    </div>
    <?php
    if(isset($_SESSION["id"])) {
    if (selectAcces($con,$_SESSION['id'])=="admin"){
    ?>
    <div style="float: right;direction: rtl;padding: 20px">بازدید امروز: <?php echo $viweThisDay;?></div>
    <div style="float: right;direction: rtl;padding: 20px">بازدید کل:  <?php echo $viweAll;?></div>
    <?php
    }
    }
    ?>
</div>

<!-- نوار بالا مخصوص موبایل-->
<div class="header1 col-12">
    <div style="width: 20%;float: left;padding-top: 40px;" >
        <?php
        if(isset($_SESSION['productCount']) and $_SESSION['productCount']!=0 )
        {
        ?>
        <a href="showCart.php" class="submitCourse" style="float: right;margin-left: 10px;background-color: #4caf50;text-align: center">سبد خرید <?php echo $_SESSION['productCount'] ?></a>
        <?php
        }
        ?>
    </div>
    <div style="width: 60%;float: left;padding-top: 50px">
        <nav>
            <ul>
                <?php
                if(isset($_SESSION["name"]))
                {
                $connection = connect();
                $result = selectInformation($connection,$_SESSION['id']);
                $row = $result->fetch_assoc();
                ?>
                <li style="background-color: #33b5e5;border-radius: 5px;"><a><?php
                        echo $row["name"];;
                        ?></a>
                    <ul>
                        <?php
                        if(selectAcces($connection,$_SESSION['id'])=='admin')
                        {
                        ?>
                        <li  style="background-color: yellow"><a href="addCurses.php">اضاف کردن دوره</a></li>
                        <li  style="background-color: yellow"><a href="addProfessor.php">اضاف کردن استاد</a></li>
                        <li  style="background-color: yellow"><a href="selectOptionExam.php">تنظیمات آزمون</a></li>
                        <li  style="background-color: white"><a href="showExams.php">آزمون ها</a></li>
                        <?php
                        }
                        ?>
                        <li  style="background-color: white"><a href="showBuys.php">محصولات خریده شده</a></li>
                        <li><a href="information.php">ویرایش اطلاعات</a></li>
                        <li style="background-color: #9c0000"><a href="logout.php">خروج</a></li>
                    </ul>
                </li>
                <?php
                }
                else{
                ?>
                <li style="background-color: #33b5e5;border-radius: 5px;"><a href="login.php">ورود/ثبت نام</a></li>
                <?php
                }
                ?>
                <li><a href="index.php">خانه</a></li>
                <li><a href="about.php">درباره ما</a></li>
            </ul>
        </nav>
    </div>

    <div style="width: 5%;float: left;display: flex; justify-content: center;padding-top: 10px;padding-left: 30px" >
        <img src="logo/logo.png" height="90" width="90" >
    </div>
    <div class="col-12" style="display: flex;justify-content: center">
        <form action="showSearch.php" method="get">
            <input type="submit" name="btnSearch" value="جست و جو" class="submit" style="background-color: #0099cc;border: none">
            <input type="text" name="searchText" style="border-radius: 5px;height: 30px;direction: rtl;">
        </form>
    </div>
    <?php
    if(isset($_SESSION["id"])) {
    if (selectAcces($con,$_SESSION['id'])=="admin"){
    ?>
    <div style="float: right;direction: rtl;padding: 20px">بازدید امروز: <?php echo $viweThisDay;?></div>
    <div style="float: right;direction: rtl;padding: 20px">بازدید کل:  <?php echo $viweAll;?></div>
    <?php
    }
    }
    ?>
</div>


<div class="row"></div>
<!----------------------- header ---------- -->



@yield('content')



<!-- قسمت پایین -->
<div class="footer col-12">
    <p style="font-size: large;font-weight: bolder">تماس با ما</p>
    <div class="col-3" style="float: left;">
        <img src="logo/instagram.png" width="50" height="50">
        <p><b>Instagram:</b> mohandes.sho<span style="font-family: Arial">3113</span></p>
    </div>
    <div class="col-3" style="float: left;">
        <img src="logo/email.png" width="50" height="50">
        <p><b>Email:</b> mohandes.sho<span style="font-family: Arial">3113</span>@gmail.com</p>
    </div>
    <div class="col-3" style="float: left;">
        <img src="logo/phone.png" width="50" height="50">
        <p><b>Phone:</b> 09129231997</p>
    </div>
    <di class="col-3" style="float: left;">
        <img src="logo/whatsapp.png" width="50" height="50">
        <p><b>Whatsapp:</b>09910448874</p>
    </di>

</div>
</body>
</html>
