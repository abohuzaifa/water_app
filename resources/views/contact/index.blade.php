@extends('layouts.app')


@section('content')
<div class="pagetitle">
  <h1>{{trans('lang.user_list')}}</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">{{trans('lang.home')}}</a></li>
      <li class="breadcrumb-item">{{trans('lang.forms')}}</li>
      <li class="breadcrumb-item active">{{trans('lang.elements')}}</li>
    </ol>
  </nav>
</div>
  <section class="section">
<div class="row">
<div class="col-lg-12">
  <div class="card">
      <div class="card-body">
          <h5 class="card-title"></h5>
            <!-- <a class="btn btn-success" href="{{ route('users.create') }}"> {{trans('lang.create_new_user')}}</a> -->
       


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered">
 <tr>
   <th>{{trans('lang.number')}}</th>
   <th>{{trans('lang.name')}}</th>
   <th>{{trans('lang.email')}}</th>
   <th>{{trans('lang.subject')}}</th>
   <th>{{trans('lang.message')}}</th>
   <th width="280px">{{trans('lang.action')}}</th>
 </tr>
 @php
 //echo "<pre>";print_r($perPage); exit;
 $page = $_GET['page'] ?? 1;
 $i = ($page*$perPage)-$perPage;
 @endphp
 @foreach ($contacts as $key => $contact)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $contact->name }}</td>
    <td>{{ $contact->email }}</td>
    <td>{{$contact->subject}}</td>
    <td>{{$contact->message}}<td>
        {!! Form::open(['method' => 'DELETE','route' => ['contact.destroy', $contact->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </td>
  </tr>
 @endforeach
</table>


{{ $contacts->onEachSide(1)->links('vendor.pagination.default') }}


        </div>
      </div>
    </div>
</div>
      </section>
@endsection