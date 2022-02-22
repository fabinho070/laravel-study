<h1>Fornecedor</h1>

{{-- estilo de comentário do blade --}}

@php

@endphp

@dd($fornecedores)

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
  <h3>Existem alguns fornecedores</h3>
@elseif(count($fornecedores) > 10)
  <h3>Existem vários fornecedores</h3>
@else
  <h3>Não existem fornecedores cadastrados</h3>