<h3>Fornecedor</h3>
@php 
   /*
   if(<condicao>) enquanto if retorna se o valor for true
   */
@endphp
@isset($fornecedores)
    @foreach ($fornecedores as $indice => $fornecedor)
    @dd($loop)
    Iteração atual: {{ $loop->iteration }}<br>
        Fornecedor: {{$fornecedor['nome']}}
        <br>
        Status: {{ $fornecedor['status']}}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Não especificado' }}
        <br>
        Telefone: ({{$fornecedor['ddd'] ?? ''}}) {{ $fornecedor['telefone'] }}
        <br>
        @if($loop->last)
         Ultima iteração
         <br>
         Total de registros: {{$loop->count}}
        @endif
        <hr>
        
        
     @endforeach
@endisset




{{-- Fica o comentario que sera descartador pelo interpretador do blade --}}