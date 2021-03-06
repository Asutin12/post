@extends('layouts.helloapp')
<style>
    .pagination{font-size: 10pt;}
    .pagination li{display: inline-block;}
    tr th a:link{color: white;}
    tr th a:visited{color: white;}
    tr th a:hover{color: white;}
    tr th a:active{color: white;}
    .slider{padding-top: 30px;}
</style>
@section('title','Index')

@section('menubar')
    @parent
    ユーザーページ
@endsection

@section('content')
    @if (Auth::check())
    <p>USER: {{$user->name . '(' . $user->email . ')'}}</p>
    @else
    <p>※ログインしていません(<a href="/login">ログイン</a>|<a href="/register">登録</a>)</p>
    @endif
    <table>
       <tr><th><a href="/hello?sort=name">Name</a> </th>
        <th><a href="/hello?sort=mail"> Mail</a></th>
        <th><a href="/hello?sort=age"> Age</a></th></tr>
       @foreach($items as $item)
       <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->mail}}</td>
        <td>{{$item->age}}</td>
       </tr>
       @endforeach
    </table>
      <div class="slider">{{$items->appends(['sort'=>$sort])->links()}}</div>
@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection
