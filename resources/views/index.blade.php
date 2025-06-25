<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <header>
        <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <img src="{{ asset('storage/imagens/logo.webp') }}" width="80" height="80" viewBox="0 0 54 54" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
            <strong class="px-4">Calculadora</strong>
          </a>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
              <div class="card mb-4 shadow-sm" style="width: 18rem;">
              <img class="card-img-top figure-img img-fluid rounded" src="{{asset('storage/imagens/soma.png') }}" alt="Imagem da soma">
                <div class="card-body text-center">
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modal1">
                      Somar
                    </button>
                </div>
              </div>
              </div>
              <div class="col-md-3">
              <div class="card mb-4 shadow-sm" style="width: 18rem;">
              <img class="card-img-top figure-img img-fluid rounded" src="{{asset('storage/imagens/subtracao.png') }}" alt="Imagem da subtração">
                <div class="card-body text-center">
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modal2">
                      Subtrair
                    </button>
                </div>
              </div>
              </div>
              <div class="col-md-3">
              <div class="card mb-4 shadow-sm" style="width: 18rem;">
              <img class="card-img-top figure-img img-fluid rounded" src="{{asset('storage/imagens/multiplicacao.png') }}" alt="Imagem da multiplicação">
                <div class="card-body text-center">
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modal3">
                      Multiplicar
                    </button>
                </div>
              </div>
              </div>
              <div class="col-md-3">
              <div class="card mb-4 shadow-sm" style="width: 18rem;">
              <img class="card-img-top figure-img img-fluid rounded" src="{{asset('storage/imagens/divisao.png') }}" alt="Imagem da divisão">
                <div class="card-body text-center">
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modal4">
                      Dividir
                    </button>
                </div>
              </div>
              </div>
            </div>
        </div>
        <!-- Modal -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informe a quantidade de números para a soma</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/somar">
          @csrf
          <input type="number" name="quantidade" min="2">
          <button type="submit" class="btn btn-sm btn-outline-primary">Enviar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informe a quantidade de números para a subtrair</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/subtrair">
          @csrf
          <input type="number" name="quantidade" min="2">
          <button type="submit" class="btn btn-sm btn-outline-primary">Enviar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informe a quantidade de números para a multiplicação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/multiplicar">
          @csrf
          <input type="number" name="quantidade" min="2">
          <button type="submit" class="btn btn-sm btn-outline-primary">Enviar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informe a quantidade de números para a divisão</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/dividir">
          @csrf
          <input type="number" name="quantidade" min="2">
          <button type="submit" class="btn btn-sm btn-outline-primary">Enviar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>