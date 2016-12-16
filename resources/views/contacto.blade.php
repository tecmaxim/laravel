@extends('layouts.principal')
@section('content')
<div class="contact-content">
    <div class="top-header span_top">
        <div class="logo">
            <a href="index.html"><img src="images/logo.png" alt="" /></a>
            <p>Movie Theater</p>
        </div>
        <div class="search v-search">
            <form>
                <input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {
                            this.value = 'Search..';
                        }"/>
                <input type="submit" value="">
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
    <!---contact-->
    <div class="main-contact">
        <h3 class="head">CONTACT</h3>
        <p>WE'RE ALWAYS HERE TO HELP YOU</p>
        <div class="contact-form">
            <form>
                <div class="col-md-6 contact-left">
                    <input type="text" placeholder="Name" required/>
                    <input type="text" placeholder="E-mail" required/>
                    <input type="text" placeholder="Phone" required/>
                </div>
                <div class="col-md-6 contact-right">
                    <textarea placeholder="Message"></textarea>
                    <input type="submit" value="SEND"/>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
    <div class="footer">
        <h6>Disclaimer : </h6>
        <p class="claim">This is a freebies and not an official website, I have no intention of disclose any movie, brand, news.My goal here is to train or excercise my skill and share this freebies.</p>
        <a href="example@mail.com">example@mail.com</a>
        <div class="copyright">
            <p> Template by  <a href="http://w3layouts.com">  W3layouts</a></p>
        </div>
    </div>	
</div>
@stop