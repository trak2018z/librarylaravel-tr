@extends('layout')
@section('content')
<div class="tab-v1">
<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#books" role="tab">Books</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#users" role="tab">Users</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#staff" role="tab">Staff</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane active" id="books" role="tabpanel">
          @include('admin.books.books')
    </div>
  <div class="tab-pane" id="users" role="tabpanel"></div>
  <div class="tab-pane" id="staff" role="tabpanel"></div>
</div>
</div>
@endsection