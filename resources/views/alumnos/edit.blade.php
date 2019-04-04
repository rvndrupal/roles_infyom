@extends('admin.layout')

@section('content')
    <section class="content-header">
        <h1>
            Alumnos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($alumnos, ['route' => ['alumnos.update', $alumnos->id], 'method' => 'patch']) !!}

                        @include('alumnos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
