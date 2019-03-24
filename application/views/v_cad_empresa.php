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
                    <h1 class="text-center" style="color: #e91e63; font-weight: bold;">Cadastre sua empresa</h1>
                    <div class="row">
                        <input type="text" id="emp" class="form-control mb-4 " placeholder="empresa">
                    </div>
                    <div class="row">
                    
                       <input type="email" id="email" class="form-control mb-4 " placeholder="E-mail"> 
                    </div>
                    <div class="row">
                        <input type="number" id="cnpj" class="form-control mb-4" placeholder="CNPJ">
                    </div>
                    <div class="row">
                        <input type="number" id="expe" class="form-control mb-4" placeholder="Anos de experência">
                    </div>
                    <div class="row">
                        <input type="text" id="usu" class="form-control mb-4" placeholder="Usuário">
                    </div> 
                    <div class="row">
                        <input type="text" id="end" class="form-control mb-4" placeholder="Endereço">
                    </div> 
                    <div class="row">
                        <input type="text" id="est" class="form-control mb-4" placeholder="Estado">
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
        var emp = $("#emp").val();
        var senha = $("#senha").val();
        var senha2 = $("#senha2").val();
        var email = $("#email").val();
        var expe = $("#expe").val();
        var cnpj = $("#cnpj").val();
        var end = $("#end").val();
        var est = $("#est").val();

        
             $.ajax({
                url: "Cadastra_empresa/cad_empresa",
                type: "POST",
                dataType: "json",
                data: {'emp': emp,
                       'email': email,
                        'cnpj':cnpj,
                        'expe': expe,
                        'end': end,
                        'est': est,
                        'senha':senha},
                success: function (data) {
                    if(data == 1){
                        swal({
                          title: "Algo de errado aconteceu?!",
                          text: "",
                          icon: "warning",
                      });
                    }else{
                        swal({
                          title: "Cadastrada!",
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