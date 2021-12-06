<h3>Fornecedores</h3>



@php
/*
    if (isset($variavel)) {} //executa enquanto o retorno for true
    */
@endphp


{{-- @unless executa se o retorno for false --}}

@isset($fornecedores)

    @forelse ($fornecedores as $indice =>$fornecedor)
        Iteração atual:{{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['CNPJ'] ?? 'Dado não foi preenchido' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <br>
        @if ($loop->first)
            Primeira Iteração do Loop
        @endif

        @if ($loop->last)
            Última Iteração do Loop
        @endif
        <hr>
        <br>
        Total de Registros: {{ $loop->count}}
    @empty
        Não existem fornecedores cadastrados.

    @endforelse
@endisset
