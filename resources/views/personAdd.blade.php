@extends('template')
@section('title','人情報')

@section('css')
<link rel="stylesheet" href="{{ asset('css/personAdd.css') }}">
@endsection

@include('parts.header')

@section('content')
<div class="search_bg">
   <p>登録</p>
</div>
  <div class="whole_layout">
    <p>グループ</p>
     <input type="text" name="" list="group" autocomplete="off"/>
     <datalist id="group">
       <option value="グループ1">
       <option value="グループ2">
       <option value="グループ3">
     </datalist>
     <form method="post" action="/user/store" onsubmit="return false;">
       @csrf
       <p>名前</p>
       <input type="text" name="" list="group" autocomplete="off"/>
       <p>カナ</p>
       <input type="text" name="" list="group" autocomplete="off"/>
       <p>特徴</p>
       <input type="text" name="" list="group" autocomplete="off"/>
       <p>メモ</p>
       <input type="text" name="" list="group" autocomplete="off"/>
       <div style="display:flex; justify-content: space-between; margin-top:10px">
         <a style="margin-top:8px; width:45%; background-color: #0070C0; padding: 7px; 0; color: #FFFFFF; text-decoration: none;"href="/list">登録</a>
         <a style="margin-top:8px; width:45%; background-color: #0070C0; padding: 7px; 0; color: #FFFFFF; text-decoration: none;"href="/list">戻る</a>
       </div>
     </form>
  </div>

@endsection