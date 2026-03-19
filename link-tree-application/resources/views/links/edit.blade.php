<div>
    <h1>
        Editar um Link :: {{ $link->id }}
    </h1>

    @if($message = session()->get('message'))
    ->save()
    @endif

    <form action={{ route('links.edit', $link) }} method='post'>
        @csrf
        @method('PUT')

        <div>            
            <input type="text" name="name" placeholder="Digite seu nome" value='{{ old('name', $link->name) }}'/>
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>            
            <input type="text" name="link" value='{{ old('link', $link->link) }}'/>
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <button>Salvar</button>
    </form>
</div>
