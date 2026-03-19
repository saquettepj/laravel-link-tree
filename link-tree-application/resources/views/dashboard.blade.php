<div>
    <h1>Dashboard</h1>
    @if($message = session()->get('message'))
        <span>{{ $message }}</span>
    @endif
    <ul>
        @foreach ($links as $link)
            <li>
                <a href={{ route('links.edit', $link) }}>{{ $link->name }}</a>
                {{ $link->created_at }}
                <form action={{ route('links.destroy', $link) }} method='post' onsubmit=" return confirm('Tem certeza?')">
                    @csrf
                    @method('DELETE')

                    <button>Deletar</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
