@extends('layouts.master')
@section('content')
<div class="col-12" style="text-align: right;direction: rtl">
    <p style="font-size: 30px;margin-right: 100px">نام درس</p>
</div>
<div class="col-12 con" >
    <div class="col-4 " id="left" style="" >
        <div class="col-12" style="float: right;background-color: white;text-align: right;direction: rtl;line-height: 60px;border-radius: 10px">
            <p style="font-size: 30px;" id="name">نام درس</p>
            <p> تعداد دانشجو 2 نفر</p>
            <p> هزینه آموزش 2000 تومان</p>
            <p>مدت زمان آموزش 2 ساعت</p>
            <p>حجم دانلود 200 مگابایت</p>
        </div>
        <div class="col-12" style="text-align: right;direction: rtl;padding: 0px;margin-top: 20px">
            <a href="addInCart.php?id=آیدی" class="submitAddCart" style="width: 100%;border: none">افزودن به سبد خرید</a>
        </div>
    </div>

    <div class="col-6 " id="right" >
        <div class="col-12">
            <img src="logo/not%20found.jpg" width="400" height="400" style="float: right;">
        </div>

        <p style="font-size: 30px">توضیحات</p>
        <p>این آموزش خوب است این آموزش خوب است.</p>
        <div style="line-height: 30px;margin: 20px">
            <p style="color: gray">مدرس</p>
            <div class="col-12">
                <img src="logo/not%20found.jpg" width="100" height="100" style="float: right;">
            </div>
            <p>نام و نام خانوادگی پروفسور</p>
            <p style="color: #a70101">مدرک استاد</p>
            <p style="color: darkslategrey">رزومه استاد</p>
        </div>
        <p style="font-size: 30px">فهرست سرفصل ها</p>
        <p style="line-height: 25px">سرفصل ها</p>
        <p style="margin-top: 30px">این آموزش برای فلانی مناسب است. </p>
    </div>
</div>
@endsection
