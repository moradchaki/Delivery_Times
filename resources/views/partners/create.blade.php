@extends('layouts.app')

@section('content')


<div class="container">
      <div class="row">
          <div class="col-md-12">
            <h1 class="title">Create new partner</h1>
          <form action="{{ url('partners')}}" method="post">

               @csrf
               <br>
               <div class="control">
                    <input class="input is-rounded" type="text" name="title" placeholder="Enter the title" value="{{ old('title') }}">
                    </div><br>
               <div class="control">
                    <input class="input is-rounded" type="text" name="delivery"  placeholder="Enter the delivery" value="{{ old('delivery')}}">
                    </div><br>
               <div class="control">
                    <input class="input is-rounded" type="text" name="slug"  placeholder="Enter the slug" value="{{ old('slug') }}">
                    </div><br>
                @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
                <div class="control">
                 <input type="submit" class="button is-fullwidth is-link"  value="Save">
                </div>
          </form>


       </div>
   </div>
</div>



@endsection
