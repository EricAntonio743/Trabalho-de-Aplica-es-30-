<!--TELA EM DESENVOLVIMENTO-->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Criar Tarefa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col">
        <h1 class="text-center">Criar Tarefa</h1>
        <form>
          <div class="mb-3">
            <label for="descricao" class="form-label">Descrição:</label>
            <input type="text" class="form-control" id="descricao" required>
          </div>
          <div class="mb-3">
            <label for="prazo" class="form-label">Prazo:</label>
            <input type="date" class="form-control" id="prazo" required>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status:</label>
            <select class="form-select" id="status" required>
              <option value="" selected disabled>Selecione o status</option>
              <option value="Em andamento">Em andamento</option>
              <option value="Concluída">Concluída</option>
              <option value="Pendente">Pendente</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="prioridade" class="form-label">Prioridade:</label>
            <select class="form-select" id="prioridade" required>
              <option value="" selected disabled>Selecione a prioridade</option>
              <option value="Alta">Alta</option>
              <option value="Média">Média</option>
              <option value="Baixa">Baixa</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Criar Tarefa</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>