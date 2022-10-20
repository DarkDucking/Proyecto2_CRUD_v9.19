<x-template titulo="Show Pokemon">
    <div id="create-form">
        <div class="fieldset">
            <legend>{{ $pokemon->nombre }}</legend>
            <form>
                <h2>Numero en la pokedex: {{ $pokemon->numero }} </h2>
                <h2>Tipo primario: {{ $pokemon->tipo1 }} </h2>
                <h2>Tipo secundario: {{ $pokemon->tipo2 }} </h2>
                <h2>Grupo Huevo: {{ $pokemon->grupo_huevo }} </h2>
                <a><img src= {{ $pokemon->img }}></a>
            </form>
        </div>
    </div>
    
</x-template>