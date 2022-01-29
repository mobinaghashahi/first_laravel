@extends('layouts.master')
@section('content')
    <form method="post" name="register" action="coursesChange.php" enctype="multipart/form-data" style="direction: rtl;text-align: right">
    <div class="col-12">
        <div class="col-12">
            عنوان آموزش
        </div>
        <div class="col-5" style="float: right">
            <textarea class="input" name="name" type="text"></textarea>
        </div>
        <div class="col-12">
            قیمت
        </div>
        <div class="col-5" style="float: right">
            <input class="input" name="price" type="text" value="">
        </div>
        <div class="col-12">
            زمان آموزش
        </div>
        <div class="col-5" style="float: right">
            <input class="input" name="time" type="text" value="">
        </div>
        <div class="col-12">
            حجم آموزش
        </div>
        <div class="col-5" style="float: right">
            <input class="input" name="size" type="text" value="">
        </div>
        <div class="col-12">
            استاد
            <select name="idProfessor_fk" >
                <option value="1">مبین</option>
                <option value="1">علی</option>
            </select>
        </div>

        <div class="col-12">
            توضیحات
        </div>
        <div class="col-5" style="float: right">
            <textarea class="input" name="description" type="text"></textarea>
        </div>
        <div class="col-12">
            مقطع آموزش
        </div>
        <div class="col-5" style="float: right">
            <input class="input" name="degreeOfEducation" type="text" value="">
        </div>
        <div class="col-12">
            وضعیت آموزش
        </div>
        <div class="col-5" style="float: right">
            <input class="input" name="state" type="text" value="">
        </div>
        <div class="col-12">
            رشته مربوط
            <select name="idMajor_fk" >
                <option value="1">شیمی</option>
                <option value="2">ریاضی</option>
            </select>
        </div>
        <div class="col-12">
            سرفصل ها
        </div>
        <div class="col-5" style="float: right">
            <textarea class="input" name="titles" type="text"></textarea>
        </div>
        <div class="col-12">
            گروه آموزش
            <select name="idGroup_fk" >
                <option value="1">ریاضی</option>
                <option value="2">فیزیک</option>
            </select>
        </div>
        <div class="col-12">
            گرایش مربوط به آموزش
            <select name="idGrayesh_fk" >
                <option value="1">شیمی</option>
                <option value="1">شیمی</option>
            </select>
        </div>
        <div class="col-12">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
        </div>
        <div class="col-12">
            <input class="submit" name="addCourse" type="submit" value="اضاف کردن">
        </div>
    </div>
    </form>
@endsection
