<div id="fundo" class="container-fluid bg-dark fundo animated">
    <div class="row justify-content-center h-100 text-white text-center">
        <div class="col-12 align-self-center " style="">
             <img id="logo" src="../assets/img/logorosa.png" class="animated">

        </div>
    </div>
</div>

<div id="corpo" class="animated">
    <div class="container-fluid bg-white" style="min-height:100vh; padding-top: 80px; padding-bottom: 80px;">
        <div class="row justify-content-center  text-white">
            <div class="col-md-10 align-self-center" style="">
                <h1 class="text-center" style="color: #e91e63; font-weight: bold;">Cadastre-se</h1>
                <div class="row">
                    <input type="text" id="nome" class="form-control mb-4 " placeholder="Nome">
                </div> 
                <div class="row">
                    <input type="date" id="nascimento" class="form-control mb-4 col-4" placeholder="Nascimento">
                    <input type="number" id="expe" class="form-control mb-4 col-4" placeholder="tempo de experiência(em anos)">
                    <input type="text" id="natural" class="form-control mb-4 col-4" placeholder="Naturalidade">
                </div>
                <div class="row">
                    <input type="text" id="end" class="form-control mb-4 col-6" placeholder="Endereço">
                    <input type="text" id="est" class="form-control mb-4 col-6" placeholder="Estado">
                </div>
                <div class="row">
                    <input type="text" id="prof" class="form-control mb-4" placeholder="Profissão">
                </div>
                <div class="row">
                    <input type="email" id="email" class="form-control mb-4" placeholder="Email">
                </div> 
                <div class="row">
                    <input type="text" id="senha1" class="form-control mb-4" placeholder="Crie uma senha">
                    <input type="text" id="senha2" class="form-control mb-4" placeholder="Confirme a senha">
                </div> 
                <div class="row justify-content-center">   
                    <button class="col-5 btn btn-large bg-white float-left" style="color: #e91e63; font-weight: bold; border-radius: 15px" onclick="cadastra()">CADASTRAR</button>
                </div>

            </div>
        </div>
    </div>


    <script type="text/javascript">

        function cadastra(){
            var nome = $("#nome").val();
            var senha = $("#senha1").val();
            var senha2 = $("#senha2").val();
            var email = $("#email").val();
            var nasc = $("#nascimento").val();
            var expe = $("#expe").val();
            var natural = $("#natural").val();
            var end = $("#end").val();
            var est = $("#est").val();
            var prof = $("#prof").val();
            var email = $("#email").val();


            alert("teste");
            $.ajax({
                url: "Cadastra_artista/cad_artista",
                type: "POST",
                dataType: "json",
                data: {'senha': senha,
                'senha2':senha2,
                'nome': nome,
                'email':email,
                'nasc': nasc,
                'expe': expe,
                'prof': prof,
                'natural':natural,
                'end': end,
                'est': est},
                success: function (data) {
                    
                    if(data == 1){
                        swal({
                          title: "Algo de errado aconteceu?!",
                          text: "",
                          icon: "warning",
                      });
                    }else{
                        swal({
                          title: "Usuário ou senha incorreto!",
                          text: "",
                          icon: "success",
                      });
                    }

                },
                beforeSend: function () {
                    swal({
                        title: "Aguarde!",
                        text: "Buscando dados...",
                        showConfirmButton: false
                    });
                },
                error: function (data_error) {
                    sweetAlert("Oops...", "Erro ao procurar os produtos!", "error");
                }
            });
        }

    </script>