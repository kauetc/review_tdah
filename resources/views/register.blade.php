<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/register.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/structure.css') }}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body> 

    @if (session()->has('error'))
        <div class="alert alert-success">
            {{ session('error') }}
        </div>
    @endif
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <div class="container">
        <div class="register-background"></div>
        <div class="register-form">
            <form action="{{route("create_user")}}" method="POST" enctype="multipart/formdata" id='form_register'>
                {{ csrf_field()}}
                <h1>CADASTRO DE USUÁRIO</h1>
                <div class="form-items">
                    <div class="form-items--personal-info">
                        <div class="form-item name">
                            <label for="input-name">Nome</label>
                            <input type="text" class="form-control" id="input-name" name="nome" value="{{old('nome')}}" placeholder="José da Silva"/> <!--name-->      
                            <!--@if ($errors->has('nome'))
                            <p class="">{{ $errors->first('nome') }}</p>
                            @endif-->
                        </div>
                        <div class="form-item username">
                            <label for="input-username">Usuário</label>
                            <input type="text" class="form-control" id="input-username" name="username" value="{{old('username')}}" placeholder="José da Silva"/> <!--username-->       
                            <!--@if ($errors->has('username'))
                                <p class="">{{ $errors->first('username') }}</p>
                            @endif-->
                        </div>
                
                        <div class="form-item password">
                            <label for="input-password">Senha</label>
                            <input type="password" class="form-control" id="input-password" name="password" value="{{old('password')}}" placeholder="José da Silva"/>       
                            <!--@if ($errors->has('password'))
                                <p class="">{{ $errors->first('password') }}</p>
                            @endif-->
                        </div>

                        <div class="form-item birthdate">
                            <label for="input-birthdate">Data de Nascimento</label>
                            <input type="date" class="form-control" id="input-birthdate" name="datanascimento" value="{{old('datanascimento')}}" placeholder="01/01/2001"/>
                            <!--@if ($errors->has('datanascimento'))
                                <p class="">{{ $errors->first('datanascimento') }}</p>
                            @endif-->
                        </div>

                        <div class="form-item cpf">
                            <label for="input-cpf">CPF</label>
                            <input type="text" class="form-control" id="input-cpf" name="cpf" value="{{old('cpf')}}" placeholder="000.000.000-00"/>
                            <!--@if ($errors->has('cpf'))
                                <p class="">{{ $errors->first('cpf') }}</p>
                            @endif-->
                        </div>
                    </div>
                    <div class="form-items--address-info">
                        <div class="form-item cep">
                            <label for="cep">CEP</label>
                            <input type="text" class="form-control" id="cep" name="cep" value="{{old('cep')}}" placeholder="Ex:00.000-000"/>
                        </div>

                        <div class="form-item address">
                            <label for="logradouro">Logradouro</label>
                            <input type="text" class="form-control" id="logradouro" name="logradouro" value="{{old('logradouro')}}" placeholder=""/>
                        </div>
                        
                        <div class="form-item comp-address">
                            <label for="complemento">Complemento</label>
                            <input type="text" class="form-control" id="complemento" name="complemento" value="{{old('complemento')}}" placeholder=""/>
                        </div>
                        
                        <div class="form-item number">
                            <label for="numero">Número</label>
                            <input type="text" class="form-control" id="numero" name="numero" value="{{old('numero')}}" placeholder=""/>
                        </div>

                        <div class="form-item neighborhood">
                            <label for="bairro">Bairro</label>
                            <input type="text" class="form-control" id="bairro" name="bairro"value="{{old('bairro')}}" placeholder=""/>
                        </div>

                        <div class="form-item city">
                            <label for="localidade">Cidade</label>
                            <input type="text" class="form-control" id="localidade" name="cidade"value="{{old('cidade')}}" placeholder=""/>
                        </div>

                        <div class="form-item state">
                            <label for="uf">Estado</label>
                                <select id="uf" name="uf">
                                </select>
                        </div>

                        <div class="form-item country">
                            <label for="pais">País</label>
                            <input type="text" class="form-control" id="pais" name="pais"value="{{old('pais')}}" placeholder=""/>
                        </div>
                
                <div class="form-group">
                    <input type="submit" value="Cadastrar" id="botao_cadastrar" name="botao_cadastrar"/>
                </div>
            </form>
        </div>
    </div>    
    @include('_footer')
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script>
			$("#cep").blur(function(){
				var cep = this.value.replace(/[^0-9]/, "");
				if(cep.length != 8){
					return false;
				}
				var url = "https://viacep.com.br/ws/"+cep+"/json/";				
				$.getJSON(url, function(resposta){
					try{						
						$("#logradouro").val(resposta.logradouro);
                        $("#complemento").val(resposta.complemento);
                        $("#bairro").val(resposta.bairro);
                        $("#localidade").val(resposta.localidade);
                        $("#uf").val(resposta.uf);
                        $("#numero").focus();
                        $("#pais").val("Brasil")
					}catch(ex){}
				});
			});
            $('document').ready(function(){
                var url = "https://servicodados.ibge.gov.br/api/v1/localidades/estados?orderBy=nome";				
				$.getJSON(url, function(resposta){
					try{					
                        console.log('aoba');	
						var options = '';
                        $.each(resposta, function(index, value) {
                            var isSelected = (value.sigla === "{{ old('uf') }}") ? 'selected' : '';
                            options += '<option value="' + value.sigla + '" ' + isSelected + '>' + value.nome + '</option>';
                        });
                        $('#uf').html(options);
					}catch(ex){}
				});
            });
            

		</script>
</body>
</html>