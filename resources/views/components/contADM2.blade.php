<form action="{{ route('subjectuser.vincular') }}" method="POST">
    @csrf
    <label for="usuario_id">Selecione o aluno:</label>
    <select name="usuario_id" id="usuario_id">
        @foreach($users as $usuario)
            <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
        @endforeach
    </select>
    <br>
    <label for="subject">Selecione as matérias:</label><br>
    @foreach($subjects as $subject)
        <input type="checkbox" name="subjects[]" value="{{ $subject->id }}"> {{ $subject->name }}<br>
    @endforeach
    <button type="submit">Vincular</button>
</form>
