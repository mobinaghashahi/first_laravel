@extends('layouts.master')
@section('content')
    <div class="row login">
        <form method="post" name="enter" action="validation.php">
            <div class="col-5"  >
                <div class="col-12" >
                    نام کاربری
                </div>
                <div class="col-12">
                    <input class="input" name="username" type="email">
                </div>
                <div class="col-12">
                    رمز عبور
                </div>
                <div class="col-12">
                    <input class="input" name="password" type="password">
                </div>
                <div class="col-12">
                    <input class="submit" name="enter" type="submit" value="ورود" >
                </div>
            </div>
        </form>
        <form method="post" name="register" action="validation.php">
            <div class="col-5">
                <div class="col-12">
                    ایمیل
                </div>
                <div class="col-12">
                    <input class="input" name="username" type="email">
                </div>
                <div class="col-12">
                    نام
                </div>
                <div class="col-12">
                    <input class="input" name="name" type="text">
                </div>
                <div class="col-12">
                    نام خانوادگی
                </div>
                <div class="col-12">
                    <input class="input" name="family" type="text">
                </div>
                <div class="col-12">
                    شماره تماس
                </div>
                <div class="col-12">
                    <input class="input" name="number" type="text">
                </div>
                <div class="col-12">
                    رمز عبور
                </div>
                <div class="col-12">
                    <input class="input" name="password" type="password">
                </div>
                <div class="col-12">
                    تایید گذرواژه
                </div>
                <div class="col-12">
                    <input class="input" name="repassword" type="password">
                </div>
                <div class="col-12">
                    <input class="submit" name="register" type="submit" value="ثبت نام">
                </div>
            </div>
        </form>
    </div>
@endsection
