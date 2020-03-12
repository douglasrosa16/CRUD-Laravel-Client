@extends('layouts.app')

@section('title','Clientes')

@section('content')
<div class="mb-4">
    <a href="{{route('Client.create')}}" class="btn btn-xl btn-outline-primary">
        <i data-feather="user-plus"></i>
        Novo Cliente
    </a>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm table-dark">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Idade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clients as $c)                                
            <tr>
                <td>{{$c->id}}</td>
                <td>{{$c->name}}</td>                
                <td>{{$c->mail}}</td>                
                <td>{{$c->age}}</td>
                <td>
                    <form action="{{route('Client.destroy',$c->id)}}" method="POST">

                        <a href="{{ route('Client.edit',$c->id) }}" class="btn btn-sm">
                            <i class="text-primary  feather-16"  data-feather="edit" ></i>
                        </a>
                        <a href="{{ route('Client.show',$c->id) }}" class="btn btn-sm">
                            <i class="text-info feather-16"  data-feather="eye" ></i>
                        </a>                        
                        <a href="" class="btn btn-sm">
                            <i class="text-info feather-16"  data-feather="mail" ></i>
                        </a>

                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-link">
                            <i class="text-danger feather-16" data-feather="trash-2"></i>
                        </button>

                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>




@endsection