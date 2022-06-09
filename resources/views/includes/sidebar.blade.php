@section('sidebar')
    <aside>
        <ul class="list-group">
            <li class="list-group-item list-group-item-action"><a href="/posts" class="d-block">All posts</a></li>
            <li class="list-group-item list-group-item-action"><a href="/posts/create" class="d-block">Create Post</a></li>
            <li class="list-group-item list-group-item-action"><a href="/album" class="d-block">Create Album</a></li>
            <li class="list-group-item list-group-item-action"><a href="/albumIndex" class="d-block">Albums</a></li>
            <li class="list-group-item list-group-item-action"><a href="{{ route('press.index') }}" class="d-block">Press
            <li class="list-group-item list-group-item-action"><a href="{{ route('admin.faqs') }}" class="d-block">FAQS</a>
            </li>
            <li class="list-group-item list-group-item-action"><a>User settings</a></li>
            <li class="list-group-item list-group-item-action">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-outline-primary">Logout</button>
                </form>
            </li>
        </ul>
    </aside>
@endsection
