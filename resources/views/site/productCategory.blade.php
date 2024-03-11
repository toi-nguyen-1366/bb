@extends('layouts.frontend')
@section('content')
@include('module.breadcumb')
<hr>
<section class="sidebar-left sanp p-b-20 p-t-20">
  <div class="container">
    <div class="row">
      <div class="col-md-9 matchHeight">
        <div class="heading m-b-10">
          <h1 class="m-b-5 text-left">{!!$title!!}</h1>
          <p class="text-left m-b-0">{!!(isset($s['desc'])) ? strip_tags($s['desc'],'<br><b><i><span><strong><em>') : ''!!}</p>
        </div>
        @if(empty($postList))
        <blockquote class="blockquote-color text-light"><p>Hiện chưa có villa nào!</p></blockquote>
        @endif
        <div class="row">
          @foreach($postList as $p)
          <div class="col-md-4">
            @include('module.eachProduct')
          </div>
          @endforeach
        </div>
        @include('module.paging')
        @if(empty(Request::get('from')) && empty(Request::get('to')))
        @php($i=0) @foreach($category as $c) @if($c['parent']==2 && $c['id']!=$s['id'])
        @php($i++) 
        <div id="c{!!$c['id'] or ''!!}" class="@if($i%2==1) background-grey @endif p-20 ">
          <div class="heading">
            <h2 class="m-b-20">{!!$c['title'] or ''!!}</h2>
            <p class="text-center">{!!(isset($c['desc'])) ? strip_tags($c['desc'],'<br><b><i><span><strong><em>') : ''!!}</p>
            </div>
            <div class="row">
              @php($j=0) @foreach($post as $p) @if(in_array($c['id'], $p['categoryParent']) && $j++<10)
              <div class="col-md-4">
                @include('module.eachProduct')
              </div>
              @endif @endforeach
            </div>
          </div>
          <hr class="m-0">
          @endif @endforeach
          @endif
      </div>
        @include('module.postSidebar')

      {{-- <div class="col-md-4 matchHeight">
        <div class="pinBox" id="datphong" style="height: 100%">
          @include('module.datphong')
        </div>
      </div> --}}
    </div>
  </div>
</section>
@endsection