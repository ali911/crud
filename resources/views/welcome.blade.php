{{-- {{ $photos }} --}}
<h1><a href="photos/create">Add new Photo</a></h1>
<style>
.photo-listed {
    display: flex;
}
.edit-del a {
    padding: 20px;
}
.photo-listed li {
    padding-top: 5px;
}
</style>

<ul>
    @forelse($photos as $photo)
    <div class="photo-listed">
        <li><a href="/photos/{{ $photo->id }}"> {{ $photo->name }}</a></li>
        <div class="edit-del">
          
            <a href="photos/{{ $photo->id }}/edit" >Edit</a>
            <form method="POST" action="photos/{{ $photo->id }}">
                @method('delete')
                @csrf
                <button>Delete</button>
            </form>
            {{-- <a href="photos/{{ $photo->id }}" >Delete</a> --}}
        </div>
    </div>
    @empty
    <li>Empty No Record Found.</li>
    @endforelse
</ul>