<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css">

        <title>Cadastro - Review TDAH</title>

    </head>
    

    <body>
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            <div>
                <p>Para logar clique <a href="{{route('login')}}">aqui</a></p>
            </div>
        @endif
        
        <h1>CADASTRO DE USUÁRIO</h1>

        <form method="POST" action="{{route('create_user');}}">
            {{ csrf_field()}}
            <div class="form-group">
                <label for="InputNome">Nome</label>
                <input type="text" class="form-control" id="InputNome" name="nome" value="{{ old('nome') }}" placeholder="José da Silva"/>  
                @if ($errors->has('nome'))
                    <p class="">{{ $errors->first('nome') }}</p>
                @endif     
            </div>

            <div class="form-group">
                <label for="InputUsername">E-mail</label>
                <input type="text" class="form-control" id="InputUsername" name="username" value="{{ old('username') }}" placeholder="José da Silva"/>       
                @if ($errors->has('username'))
                    <p class="">{{ $errors->first('username') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="InputPassword">Password</label>
                <input type="password" class="form-control" id="InputPassword" name="password" value="{{ old('password') }}" placeholder="José da Silva"/>
                @if ($errors->has('password'))
                    <p class="">{{ $errors->first('password') }}</p>
                @endif      
            </div>

            <div class="form-group">
                <label for="InputDataNasc">Data de nascimento</label>
                <input type="date" class="form-control" id="InputDataNasc" name="datanascimento" value="{{ old('datanascimento') }}" placeholder="dd/mm/YY"/> 
                @if ($errors->has('datanascimento'))
                    <p class="">{{ $errors->first('datanascimento') }}</p>
                @endif   
            </div>

            <div class="form-group">
                <label for="InputCPF">CPF</label>
                <input type="text" class="form-control" id="InputCPF" name="cpf" value="{{ old('cpf') }}" placeholder="000.000.000-00"/>
                @if ($errors->has('cpf'))
                    <p class="">{{ $errors->first('cpf') }}</p>
                @endif 
            </div>

            <div class="form-group">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" id="cep" name="cep" value="{{ old('cep') }}" placeholder="Ex:00.000-000"/>
            </div>

            <div class="form-group">
                <label for="logradouro">Logradouro</label>
                <input type="text" class="form-control" id="logradouro" name="logradouro" value="{{ old('logradouro') }}" placeholder=""/>
            </div>

            <div class="form-group">
                <label for="complemento">Complemento</label>
                <input type="text" class="form-control" id="complemento" name="complemento" value="{{ old('complemento') }}" placeholder=""/>
            </div>

            <div class="form-group">
                <label for="numero">Número</label>
                <input type="text" class="form-control" id="numero" name="numero" value="{{ old('numero') }}" placeholder=""/>
            </div>

            <div class="form-group">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" value="{{ old('bairro') }}" placeholder=""/>
            </div>

            <div class="form-group">
                <label for="localidade">Cidade</label>
                <input type="text" class="form-control" id="localidade" name="cidade" value="{{ old('cidade') }}" placeholder=""/>
            </div>

            <div class="form-group">
                <label for="uf">Estado</label>
                    <select id="uf" name="uf">
                    </select>
            </div>

            <div class="form-group">
                <label for="pais">País</label>
                <input type="text" class="form-control" id="pais" name="pais" placeholder=""/>
            </div>
            
            <div class="form-group">
                <input type="submit" value="Cadastrar" id="botao_cadastrar" name="botao_cadastrar"/>
            </div>
        </form> 

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
                            console.log(index, value);
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
