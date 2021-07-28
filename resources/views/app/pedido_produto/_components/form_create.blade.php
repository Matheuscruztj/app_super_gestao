<form method="post" action="{{ route('pedido-produto.store', ['pedido' => $pedido->id]) }}">
    @csrf
    <select name="produto_id">
        <option>-- Selecione um Produto --</option>

        @foreach($produtos as $produto)
            <option value="{{ $produto->id }}" {{ old('produto_id') == $produto->id ? 'selected' : '' }}>{{ $produto->nome }}</option>
        @endforeach
    </select>
    {{ $errors->has('produto_id') ? $errors->first('produto_id') : '' }}

<<<<<<< HEAD
    <input type="number" name="quantidade" value="{{ old('quantidade') ? old('quantidade') : '' }}" placeholder="Quantidade" class="borda-preta">
    {{ $errors->has('quantidade') ? $errors->first('quantidade') : '' }}

=======
>>>>>>> 0e25cbb5097444191008f077a0af117429763bce
    <button type="submit" class="borda-preta">Cadastrar</button>
</form>
