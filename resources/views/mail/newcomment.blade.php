@component('mail::message')
    # New Comment

    Bonjour {{ $user->name }},
    Tu as bien postulé à cette annonce "{{ $post->titre }}
    @component('message::button', ['url' => route('posts.show', $post->id), 'color' => 'success'])
        {{ $text }}
    @endcomponent

@endcomponent