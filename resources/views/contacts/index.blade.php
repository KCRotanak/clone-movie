@extends('layouts.dashboard.dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">

        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Subject</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($contacts as $contact)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->phone }}</td>
            <td>{{ $contact->subject }}</td>
            {{-- <td>{{ $contact->name }}</td> --}}

            <td>
                <form action="{{ route('contacts.destroy',$contact->id) }}" method="POST">
      
                    <a class="btn btn-primary" href="{{ route('contacts.show',$contact->id) }}">Show</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div style="position: fixed; bottom: 50;">
        {!! $contacts->links() !!}
        </div>
    

@endsection