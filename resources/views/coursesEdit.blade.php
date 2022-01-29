@extends('layouts.master')
@section('content')
    <form method="post" name="register" action="coursesChange.php" enctype="multipart/form-data"
          style="direction: rtl;text-align: right">
        <div class="col-12">
            <div class="col-5" style="float: right">
                <input type="text" name="id" readonly="true" value="41" style="border: none">
            </div>
            <div class="col-12">
                عنوان آموزش
            </div>
            <div class="col-5" style="float: right">
                <textarea class="input" name="name" type="text">1</textarea>
            </div>
            <div class="col-12">
                قیمت
            </div>
            <div class="col-5" style="float: right">
                <input class="input" name="price" type="text" value="1">
            </div>
            <div class="col-12">
                زمان آموزش
            </div>
            <div class="col-5" style="float: right">
                <input class="input" name="time" type="text" value="1">
            </div>
            <div class="col-12">
                حجم آموزش
            </div>
            <div class="col-5" style="float: right">
                <input class="input" name="size" type="text" value="1">
            </div>
            <div class="col-12">
                استاد
                <select name="idProfessor_fk">
                    <option value="1">1</option>
                    <option value="1">1</option>
                </select>
            </div>

            <div class="col-12">
                توضیحات
            </div>
            <div class="col-5" style="float: right">
                <textarea class="input" name="description" type="text">1</textarea>
            </div>
            <div class="col-12">
                مقطع آموزش
            </div>
            <div class="col-5" style="float: right">
                <input class="input" name="degreeOfEducation" type="text" value="1">
            </div>
            <div class="col-12">
                وضعیت آموزش
            </div>
            <div class="col-5" style="float: right">
                <input class="input" name="state" type="text" value="1">
            </div>
            <div class="col-12">
                رشته مربوط
                <select name="idMajor_fk">
                    <option value="1">بدون تغییر</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-12">
                سرفصل ها
            </div>
            <div class="col-5" style="float: right">
                <textarea class="input" name="titles" type="text"
                          style="text-align: right;direction: initial">1</textarea>
            </div>
            <div class="col-12">
                گروه آموزش
                <select name="idGroup_fk">
                    <option value="1">بدون تغییر</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-12">
                گرایش مربوط به آموزش
                <select name="idGrayesh_fk">
                    <option value="1">بدون تغییر</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-12">
                <p style="color: red">حذف عکس</p>
                <input type="checkbox" name="delPic">
            </div>
            <div class="col-12">
                Select image to upload:

                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
            <div class="col-12">
                <input class="submit" name="editCourse" type="submit" value="ویرایش">
            </div>
        </div>
    </form>
    </div>
@endsection
