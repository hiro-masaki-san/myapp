@extends('template')
@section('title','人情報')

@section('css')
<link rel="stylesheet" href="{{ asset('css/personManage.css') }}">
@endsection
;
@include('parts.header')

@section('content')
<div class="search_bg">
   <p>一覧</p>
</div>
<div style="display:flex; justify-content: space-between">
    <input id="n_search" type="search" placeholder="名前検索"/>
    <a style="margin-top:8px; background-color: #0070C0; padding: 7px; 0; color: #FFFFFF; text-decoration: none;"href="/add">追加</a>
</div>
<p>・グループ1</p>
<div class="grp_bg">
   <div class="name_margin">
    <div style="height:5px;"></div>
    <div class="person" >
      <a href="/list"></a>
      <p class="name_font">名前1</p>
      <p class="ruby_font">ruby1</p>
    </div>
    <hr>
    <div class="person" >
      <a href="/list"></a>
      <p class="name_font">名前2</p>
      <p class="ruby_font">ruby2</p>
    </div>
    <div style="height:10px;"></div>
</div>
@endsection