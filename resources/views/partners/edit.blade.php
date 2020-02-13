@extends('layouts.app')

@section('content')


<div class="container">
      <div class="row">
          <div class="col-md-12">
            <h1 class="title">Create new partner</h1>
          <form action="{{ route('partners.update',['partner' => $partner->id])}}" method="post">

               @csrf
               @method('PUT')
               <br>
               <div class="control">
                    <input class="input is-rounded" type="text" name="title" placeholder="Enter the title" value="{{ $partner->title }}">
                    </div><br>
               <div class="control">
                    <input class="input is-rounded" type="text" name="delivery"  placeholder="Enter the delivery" value="{{ $partner->delivery}}">
                    </div><br>
               <div class="control">
                    <input class="input is-rounded" type="text" name="slug"  placeholder="Enter the slug" value="{{ $partner->slug }}">
                    </div><br>
                @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
                <div class="control">
                 <input type="submit" class="button is-fullwidth is-danger"  value="Update">
                </div>
          </form>


       </div>
   </div>
</div>



@endsection
