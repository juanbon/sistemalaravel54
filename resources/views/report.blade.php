@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">Dashboard</div>

    <div class="panel-body">
       <form action="" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="category_id">Categoria </label>
            <select name="category_id" class="form-control">
                <option value="0">General</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="severity">Severidad</label>
            <select name="severity" class="form-control">
                <option value="B">Bajo</option>
                <option value="N">Normal</option>
                <option value="A">Alto</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">T&iacute;tulo</label>
            <input type="text" name="title" class="form-control">
         </div>
        <div class="form-group">
            <label for="description">Descripci&oacute;n</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary"> Registrar Evento</button>
        </div>

       </form>
    </div>
</div>
@endsection
