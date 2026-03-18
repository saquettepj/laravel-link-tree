<div>
    <h1>
        Criar um Link
    </h1>

    @if($message = session()->get('message'))
        <span>{{ $message }}</span>
    @endif

    <form action="{{ route('links.create') }}" method="post">
        @csrf

        <div>            
            <input type="text" name="name" placeholder="Digite seu nome" value='{{ old('name') }}'/>
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <input type="text" name="link"/>
            @error('link')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <button>Salvar</button>
    </form>
</div>
