
<div class="from-group col-md-8">
    {!! Form::label('name','Nombre') !!}

    {!! Form::text('name', null, ['class' => 'form-control']) !!}

</div>

<div class="from-group col-md-8">
        {!! Form::label('username','Nombre de usuario') !!}

        {!! Form::text('username', null, ['class' => 'form-control']) !!}

    </div>


<div class="from-group col-md-8">
    {!! Form::label('email','Email') !!}

    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>


<div class="from-group col-md-8">
    {!! Form::label('ur','UR - Unidad Responsable') !!}
    {{ Form::select('ur', array('Unidad 1' => 'Unidad 1', 'Unidad 2' => 'Unidad 2'), null, ['class' => 'form-control']) }}
</div>

<div class="from-group col-md-8">
        {!! Form::label('ue','UE - Unidad Ejecutora') !!}
        {{ Form::select('ue', array('Ejecutora 1' => 'Ejecutora 1', 'Ejecutora 2' => 'Ejecutora 2'), null, ['class' => 'form-control']) }}
    </div>


<div class="from-group col-md-8">
    {!! Form::label('password','Password') !!}

      {!! Form::password('password', array('class' => 'form-control')) !!}

</div>
<p>
<hr>


<div class="form-group col-md-12">
        <h3>Lista de roles</h3>
    <ul class="list-unstyled">
        @foreach ($roles as $role )
        <li>
            <label>
               {{   Form::checkbox('roles[]', $role->id, null) }}
               {{ $role->name }}
               <em>( {{ $role->description ?: 'N/A' }})</em>
            </label>
        </li>

        @endforeach

    </ul>
</div>


<div class="from-group col-md-2">

    {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}

</div>
