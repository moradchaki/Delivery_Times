@extends('layouts.app')

@section('content')


<div class="container">
      <div class="row">
          <div class="col-md-12">
          <h2 class="title">Listes</h2>
            <div class="pull-right">
               <a href="{{ url('partners/create') }}" class="button is-success">Add New partner</a>
             </div>
             <br><br>
          </div>
          <table class="table is-striped">
          <tr>
             <th>Title</th>
             <th>Delivery</th>
             <th>Slug</th>
             <th>Date</th>
           </tr>
            @foreach($partners as $partner)
              <tr>
              <td>{{ $partner->title }}</td>
              <td>{{ $partner->delivery }}</td>
              <td>{{ $partner->slug }}</td>
              <td>{{ $partner->created_at }}</td>
              <td>

               <form action="{{ url('partners/'.$partner->id) }}" method="post">
                 {{ csrf_field() }}
                 {{ method_field('DELETE') }}
               <a href="{{ route('partners.edit', ['partner' => $partner->id]) }}" class="button is-warning">Edit</a>
               <button type="submit" class="button is-danger">Delete</button>
               </form>
              </td>
              </tr>
            @endforeach
          </table>
          </div>
    </div>
</div>

@endsection
