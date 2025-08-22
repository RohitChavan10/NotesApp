<x-app-layout>
<div class="note-continer single-note">
  <div class="note-header">
    <h1>Note: {{$note->created_at}}</h1>
    <div class="note-button">
      <a href="{{route('note.edit',$note)}}" class="note-edit-button">Edit</a>
      <form action="{{ route('note.destroy', $note) }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="note-delete-button">Delete</button>
</form>
    </div>
  </div>
  <div class="note">
    <div class="note-body">
      {{$note->notes}}
    </div>
  </div>
</div>
</x-app-layout>
