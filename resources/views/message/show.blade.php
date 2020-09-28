@extends('message.content')
@section('pagination')
    @parent
    <div v-for="note in notes" class="note">
        <p>
            <span class="date">@{{ note.created_at | formatDate}}</span>
            <span class="name">@{{ note.author }}</span>
        </p>
        <p>
            @{{ note.text }}
        </p>
    </div>
    @parent
@endsection