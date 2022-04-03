<h1>Fornecedor</h1>

@isset($fornecedores)

  @forelse ( $fornecedores as $indice => $fornecedor )
      Fornecedor: {{ $fornecedor['nome'] }}
    <br>
      Status: {{ $fornecedor['status'] }}
    <br>
      CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não preenchido' }}
    <br>
      Telefone: {{($fornecedor['ddd']) ?? ''}} {{$fornecedor['telefone'] ?? ''}}
    <hr>
    @empty
      Não existem fornecedores cadastrados.
  @endforelse

@endisset