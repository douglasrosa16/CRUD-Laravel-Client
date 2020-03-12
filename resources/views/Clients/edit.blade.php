<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Editar Cliente</title>
    <style>
      h1 {
        margin: 0px;
        border: 0px;
      }
      .h1{
        margin: 50px;
      }

      #div-center{
        margin: 10px 2%;               
      }
      #div-btn{
        margin: 5px 1.52%;   
        border: 10cm;     
      }
    </style>
</head>
<body>   
  <h1 class="h1">Editar Cliente</h1>
  <form method="POST" action="{{ route('Client.update', $client->id) }}" id="div-center">
    @method('PUT')
    @csrf 
    <div class="form-group">
      <div class="col-sm-4">
        <label for="staticEmail" class="col-sm-2 col-form-label">Nome:</label>        
        <div class="col-sm-8">
            <input type="text" readonly class="form-control" name="name" value="{{$client->name}}">
        </div>
      </div>
      <div class="col-sm-4">
        <label for="staticEmail" class="col-sm-2 col-form-label">Endereço</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="address" value="{{$client->address}}">
        </div>  
      </div>
      <div class="col-sm-4">
        <label for="staticEmail" class="col-sm-2 col-form-label" >Email</label>
        <div class="col-sm-8">
          <input type="mail" class="form-control" id="staticEmail" name="mail" value="{{$client->mail}}">
        </div>
      </div>
      <div class="col-sm-4">
        <label for="staticEmail" class="col-sm-2 col-form-label">Idade</label>
        <div class="col-sm-8">
          <input type="number" class="form-control" name="age" value="{{$client->age}}">
        </div>        
      </div>  
      
      <div class="col-sm-4">
        <div class="col-sm-8">
          <input style="margin: 10px" class="btn btn-success" type="submit" value="Cadastrar">
        </div>  
      </div>

    </div>    
  </form>   
</body>
</html>
