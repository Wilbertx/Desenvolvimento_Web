<?php
include "header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Fale conosco</h1>
            <div class="">
                <form action="" class="formulario" id="formCadastro">
                    <div>
                        <label for="nome">Digite seu nome</label>
                        <input type="text" name="nome" id="nome">
                    </div>
                    <div>
                        <label for="email">Digite seu e-mail</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div>
                        <label for="campoCpf">Digite seu CPF</label>
                        <input type="number" name="campoCpf" id="campoCpf">
                    </div>
                    <input type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>