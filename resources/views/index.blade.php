@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-12 toppic">
            <h1>بزرگترین مرکز آموزش دانشگاهی، توانمندی های ورود به بازار کار و مشاوره شغلی</h1>
            <p style="font-size: 30px;line-height: 40px">آموزش کلیه نرم افزارهای تخصصی توسط متخصصین حوزه صنعت به هدف
                حداکثر رساندن توانمندی ها در حوزه ورود به بازار کار و آموزشهای تخصصی دروس رشته های مختلف ،مقاله
                نویسی،پایان نامه و مشاوره تحصیلی و شغلی</p>
        </div>
    </div>



    <div class="showBoxCourses">

        <div class="col-3 boxCourse">
            <div class="col-12" style="display: flex;justify-content: center">
                <img src="logo/not%20found.jpg" width="100" height="100">
            </div>
            <h1 style="text-align: right; direction: rtl">
                <span> 200 تومان</span>
            </h1>
            <h1 style="text-align: right; direction: rtl">مدرس: مبین</h1>
            <h1 style="text-align: right; direction: rtl"> مدت زمان آموزش: 2 ساعت</h1>
            <div class="col-12">
                <form method="get" name="enter" action="coursesChange.php" style="display: inline">
                    <input type="text" name="id" readonly="true" value="2" style="border: none; display: none">
                    <input class="submit" name="deleteCourse" type="submit" value="حذف" style="width: 30%">
                </form>
                <form method="get" name="enter" action="coursesEdit.php" style="display: inline">
                    <input type="text" name="id" readonly="true" value="2" style="border: none; display: none">
                    <input class="submit" name="editCourse" type="submit" value="ویرایش" style="width: 30%">
                </form>
            </div>
            <a href="showDetailCourse.php?id=2" class="submitCourse"> شروع آموزش</a>
            <a class="submitCourse">درحال آماده سازی دوره</a>
        </div>
    </div>



    <div class="content" style="text-align: center">
        <ul>
            <li><a>خانه</a>
                <ul>
                    <li><a href="home.php?id=1">نیازمندی های بازار کار مهندسی</a></li>
                    <li><a href="home.php?id=2">خلاءهای موجود در دانشگاه</a></li>
                    <li><a href="home.php?id=4">راهکارهایی جهت بهبود بازارکار <br> رشته های مهندسی</a></li>
                    <li><a href="home.php?id=5"> آزمون های نظام مهندسی </a></li>
                </ul>
            </li>
            <li><a>آموزش تخصصی نرم افزار</a>
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
            <li><a>آموزش دروس دانشگاه</a>
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
            <li><a>مقاله و پایان نامه نویسی</a>
                <ul>
                    <li><a href="showCourses.php?id=24">مقاله داخلی</a></li>
                    <li><a href="showCourses.php?id=25">مقاله ISI</a></li>
                    <li><a href="showCourses.php?id=26">پروپوزال نویسی</a></li>
                    <li><a href="showCourses.php?id=27">پایان نامه کارشناسی</a></li>
                    <li><a href="showCourses.php?id=28">پایان نامه ارشد</a></li>
                    <li><a href="showCourses.php?id=29">همانندجویی مقالات</a></li>
                </ul>
            </li>
            <li><a>دوره های حضوری و آنلاین</a>
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
            <li><a>دوره های عمومی</a>
                <ul>
                    <li><a href="showCourses.php?id=38">دوره جامع آموزش Word</a></li>
                    <li><a href="showCourses.php?id=39">دوره جامع آموزش Power Point</a></li>
                    <li><a href="showCourses.php?id=40">دوره جامع آموزش فن بیان</a></li>
                    <li><a href="showCourses.php?id=41">دوره جامع آزمون های تافل و آیلتس</a></li>
                    <li><a href="showCourses.php?id=42">دوره جامع آموزش رزومه نویسی</a></li>
                    <li><a href="showCourses.php?id=43">دوره آموزش جامع و پیشرفته بورس</a></li>
                </ul>
            </li>
        </ul>

    </div>
@endsection
