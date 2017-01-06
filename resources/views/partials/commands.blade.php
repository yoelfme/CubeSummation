<div class="col-lg-6 col-sm-6 col-12">
    <h3>Comandos</h3>
    @include('partials.inputs.file')

    <form id="commands-form" action="{{ url('/api/matrix/resolve') }}" method="POST">
        {!! csrf_field() !!}

        @include('partials.inputs.textarea', ['name' => 'commands', 'placeholder' => 'O escriba los comandos directamente'])

        <br>
        <button class="btn btn-success">Procesar</button>
    </form>
</div>
