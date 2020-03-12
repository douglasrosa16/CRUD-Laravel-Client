<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Info Cliente</title>
    <style>
      h1 {
        margin: 0px;
        border: 0px;
      }
      .h1{
        margin: 30px;
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
    <h3 class="h1">Dados do Cliente</h3>
    <form method="" action="{{route('Client.index')}}" id="div-center">
        @csrf 
        <div class="form-group">
          <div class="col-sm-5">
            <label for="staticEmail" class="col-sm-2 col-form-label">Nome:</label>            
                {{$client->name}}
          </div>
          <div class="col-sm-5">
            <label for="staticEmail" class="col-sm-2 col-form-label">Endereço</label>            
                {{$client->address}}                                
          </div>
          <div class="col-sm-5">
            <label for="staticEmail" class="col-sm-2 col-form-label" >Email</label>
                {{$client->mail}}            
          </div>
          <div class="col-sm-5">
            <label for="staticEmail" class="col-sm-2 col-form-label">Idade</label>            
                {{$client->age}}            
          </div>  
          
          <div class="col-sm-4">
            <div class="col-sm-8">
              <input style="margin: 10px" class="btn btn-primary" type="submit" value="Voltar">
            </div>  
          </div>
    
        </div>    
      </form>      
</body>
</html>


