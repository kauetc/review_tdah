<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
        <title>Cadastro - Review TDAH</title>

    </head>

    <body>
        
        <h1>CADASTRO DE USUÁRIO</h1>

        <div class="container">
            <form method="POST" action="{{route('create_user');}}">
                {{ csrf_field()}}
                <div class="form-group">
                    <div class="column-1">
                        <label for="InputNome">Nome</label>
                        <input type="text" class="form-control" id="InputNome" name="nome" placeholder="José da Silva"/>       
                    </div>
                    </div>

                <div class="form-group">
                    <div class="column-2">
                        <label for="InputUsername">Usuário</label>
                        <input type="text" class="form-control" id="InputUsername" name="username" placeholder="José da Silva"/>       
                    </div>
                    </div>
                <div class="form-group">
                    <label for="InputPassword">Senha</label>
                    <input type="password" class="form-control" id="InputPassword" name="password" placeholder="José da Silva"/>       
                </div>

                <div class="form-group">
                    <label for="InputDataNasc">Data de Nascimento</label>
                    <input type="date" class="form-control" id="InputDataNasc" name="datanascimento" placeholder="01/01/2001"/>
                </div>

                <div class="form-group">
                    <label for="InputCPF">CPF</label>
                    <input type="text" class="form-control" id="InputCPF" name="cpf" placeholder="000.000.000-00"/>
                </div>
            
                <div class="form-group">
                    <label for="cep">CEP</label>
                    <input type="text" class="form-control" id="cep" name="cep" placeholder="Ex:00.000-000"/>
                </div>

                <div class="form-group">
                    <label for="logradouro">Logradouro</label>
                    <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder=""/>
                </div>
                
                <div class="form-group">
                    <label for="complemento">Complemento</label>
                    <div class="column-1">
                        <input type="text" class="form-control" id="complemento" name="complemento" placeholder=""/>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="numero">Número</label>
                    <div class="column-2">
                        <input type="text" class="form-control" id="numero" name="numero" placeholder=""/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="bairro">Bairro</label>
                    <input type="text" class="form-control" id="bairro" name="bairro" placeholder=""/>
                </div>

                <div class="form-group">
                    <label for="localidade">Cidade</label>
                    <input type="text" class="form-control" id="localidade" name="cidade" placeholder=""/>
                </div>

                <div class="form-group">
                    <label for="uf">Estado</label>
                        <select id="uf" name="uf">
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
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
        </div>     

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
		</script>
    </body>
</html>
