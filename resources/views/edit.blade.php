@extends('layouts.app')

@section('title','form')

@section('content')
<form action="{{ url('/tasks',$task->id)}}" method="post">
<input type="hidden" name="_token" value="{{ csrf_token()}}">
<input type="hidden" name="_method" value="PATCH">
 <h1>Edit Task</h1>
   <div class="form-group">
    <label for="type">type</label>
    <select class ="form-control" name="type">
        <option value="" hidden selected> เลือกประเภทงาน </option>
        @foreach($types as $type)
            @if (old('type',$task->type)== $type['id'])
                <option value="{{$type['id']}}" selected> {{$type['name']}}</option>
            @else
                <option value="{{$type['id']}}" > {{$type['name']}}</option>
            @endif
            @endforeach

            <!-- @foreach($types as $type)
                <option value="{{$type['id']}}" > {{$type['name']}}</option>
            @endforeach -->
    </select>
  </div>
  <div class="form-group">
    <label for="name">name</label>
    <input type="text" class="form-control" name="name" value="{{old('name',$task->name)}}">
  </div>
  <div class="form-group">
    <label for="detail">detail</label>
    <input type="text" class="form-control" name="detail" placeholder="detail" value="{{old('detail',$task->detail)}}">
  </div>
    @foreach($status as $status1)
        @if (old('completed',$task->completed)== $status1['id'])
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="completed" value="{{ $status1['id']}}" checked>
                <label class="form-check-label" for="inlineRadio1">{{ $status1['name']}}</label>
            </div>
        @else
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="completed" value="{{ $status1['id']}}">
                <label class="form-check-label" for="inlineRadio1">{{ $status1['name']}}</label>
            </div>
        @endif
    @endforeach
  <div>
  </div>
  <!-- <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection