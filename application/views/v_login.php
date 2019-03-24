
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input id="usuario" type="text" class="form-control" placeholder="First name">
        </div>
        <div class="col">
            <!-- Last name -->
            <input id="senha" type="text" class="form-control" placeholder="Last name">
        </div>
    </div>
    <div class="col">
        <button class="btn btn-default" onclick="login()">login</button>
    </div>
  </div>
</div>



<script type="text/javascript">
    function login(){
        var usuario = $("#usuario").val();
        var senha = $("#senha").val();

        alert(senha);

        if((usuario == "")||(senha == "")){
            swal({
              title: "Preencha todos os campos!",
              text: "",
              icon: "warning",
            });
        }else{
            alert("teste");
             $.ajax({
                url: "login/loga",
                type: "POST",
                dataType: "json",
                data: {'senha': senha,
                       'usuario': usuario},
                success: function (data) {
                    alert(data);
                    if(data == 1){
                        swal({
                          title: "Logada!",
                          text: "",
                          icon: "success",
                        });
                    }else{
                        swal({
                          title: "Usuário ou senha incorreto!",
                          text: "",
                          icon: "warning",
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
    }
</script>
