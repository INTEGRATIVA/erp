<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    <form action="{{ route('pessoa.store') }}" method="POST">
        @csrf
        Nome <br>
        <input type="text" name="nome" id="nome">
        <br>
        Outro dado. <br>
        <input type="text" name="outro" id="outro"><br>
        <input type="submit" value="Enviar">
    </form>
</div>
