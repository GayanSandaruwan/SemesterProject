@extends('layouts.master')

@section('title')
    Confirmation Page
@endsection
<style>
    #content{

        position: absolute;
        top:30%;
        left:20%;
    }



</style>

@section('contain')

    <div id="content">

        {{--<h3>{{$messege}}</h3>--}}
    <h4>Please Enter your password to cancel the order</h4>


        <form action="{{route('confirmpassword')}}" method="post">
            <input type="password" class="materialize-textarea"
                       name="password" id="password" >
            <input type="hidden" value="{{Session::token()}}" name="_token">
            <a href="{{route('back')}}" id="back" class="waves-effect green btn" type="submit">Back </a>
            <input type="hidden" name="btn_id" value="{{$btn_id}}">
             <button href="{{route('confirmpassword')}}" id="OK" class="waves-effect red btn" type="submit">OK.Cancel The Order</button>
        </form>

    </div>

@endsection