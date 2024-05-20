@extends('layouts.app')


@section('content')
<div class="pagetitle">
  <h1>{{trans('lang.galary_list')}}</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">{{trans('lang.home')}}</a></li>
      <li class="breadcrumb-item">{{trans('lang.forms')}}</li>
      <li class="breadcrumb-item active">{{trans('lang.galary_list')}}</li>
    </ol>
  </nav>
</div>
  <section class="section">
<div class="row">
<div class="col-lg-12">
  <div class="card">
      <div class="card-body">
          <h5 class="card-title"></h5>
          <a class="btn btn-success" href="{{ route('galary.create') }}"> {{trans('lang.create_new')}}</a>
          @if ($message = Session::get('success'))
          <div class="alert alert-success">
            <p>{{ $message }}</p>
          </div>
          @endif


<table class="table table-bordered">
 <tr>
   <th>{{trans('lang.number')}}</th>
   <th>{{trans('lang.name')}}</th>
   <th>{{trans('lang.images')}}</th>
   <th width="280px">{{trans('lang.action')}}</th>
 </tr>
 @php
 $i =1;
 @endphp
 
 @foreach ($galary as $key => $item)
 <?php $images = json_decode($item->images, true); ?>
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $item->product_name }}</td>
    <td>
      @foreach ($images as $image)
        <img src="{{asset('images').'/'.$image}}" style="width:100px;height:100px" alt="">
        @endforeach
    </td>

    <td>
       <!-- <a class="btn btn-info" href="{{ route('category.show',$item->id) }}">Show</a> -->
       <!-- <a class="btn btn-primary" href="{{ route('category.edit',$item->id) }}">{{trans('lang.edit')}}</a>
       <a class="<?= $item->admin_choice == 1 ? "btn btn-success": 'btn btn-warning'?>" href="{{ route('category.edit',[$item->id, "choice" => $item->admin_choice, "id" => $item->id]) }}">{{trans('lang.like')}}</a> -->
        {!! Form::open(['method' => 'DELETE','route' => ['galary.destroy', $item->id],'style'=>'display:inline']) !!}
            {!! Form::submit(trans('lang.delete'), ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </td>
  </tr>
 @endforeach
</table>
{{ $galary->onEachSide(1)->links('vendor.pagination.default') }}



</div>
      </div>
    </div>
</div>
      </section>
@endsection