<div class="table-responsive">
    <table class="table" id="historialoperaciones-table">
        <thead>
        <tr>
            <th>Tipooperacion</th>
        <th>Usuario</th>
        <th>Expediente</th>
        <th>Id Expediente</th>
        <th>Codigo Reparticion Destino</th>
        <th>Reparticion Usuario</th>
        <th>Destinatario</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($historialoperaciones as $historialoperaciones)
            <tr>
                <td>{{ $historialoperaciones->TIPO_OPERACION }}</td>
            <td>{{ $historialoperaciones->USUARIO }}</td>
            <td>{{ $historialoperaciones->EXPEDIENTE }}</td>
            <td>{{ $historialoperaciones->ID_EXPEDIENTE }}</td>
            <td>{{ $historialoperaciones->CODIGO_REPARTICION_DESTINO }}</td>
            <td>{{ $historialoperaciones->REPARTICION_USUARIO }}</td>
            <td>{{ $historialoperaciones->DESTINATARIO }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['historialoperaciones.destroy', $historialoperaciones->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('historialoperaciones.show', [$historialoperaciones->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('historialoperaciones.edit', [$historialoperaciones->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
