<h3>Fornecedor</h3>

Fornecedor: {{ $fornecedores[0]['nome'] }}
<br />
Status: {{ $fornecedores[0]['status'] }}
<br /> <br />

@unless ($fornecedores[0]['status'] == 'S')
    Fornecedor inativo
@endunless
