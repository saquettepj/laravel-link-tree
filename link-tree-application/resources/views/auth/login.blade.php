<div>
    <h1>
        Login
    </h1>

    @if($message = session()->get('message'))
        <span>{{ $message }}</span>
    @endif

    <form action="{{ route('login') }}" method="post">
        @csrf

        <div>            
            <input type="email" name="email" placeholder="Digite seu email." value='{{ old('email') }}'/>
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <input type="password" name="password" placeholder="***********"/>
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <button>Logar</button>
    </form>
    <a href="{{ route('register') }}">
        Registrar
    </a>
</div>
