<div>
    <h1>
        Register - {{ auth()->id() }}
    </h1>

    @if($message = session()->get('message'))
        <span>{{ $message }}</span>
    @endif

    <form action="{{ route('register') }}" method="post">
        @csrf

        <div>            
            <input type="name" name="name" placeholder="Digite seu name." value='{{ old('name') }}'/>
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>            
            <input type="email" name="email" placeholder="Digite seu email." value='{{ old('email') }}'/>
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>            
            <input type="email_confirmation" name="email_confirmation" placeholder="Confirme seu email."/>
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
        <div>
            <input type="password_confirmation" name="password_confirmation" placeholder="***********"/>
            @error('password_confirmation')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <button>Registrar</button>
    </form>
</div>
