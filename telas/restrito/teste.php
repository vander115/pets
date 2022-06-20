<div id="modal<?php echo $user['id_user']; ?>" class="modal">
    <div class="modal-content">
        <form action="alterar_user.php" method="POST">
            <div class="cadprod">
                <input type="hidden" name="id_user" value="<?php echo $user['id_user']; ?>">
                <!--<input type="hidden" name="tipo_user" value="<?php echo $user['tipo_user']; ?>">-->
                <div class="form-duo">
                    <label for="desc">Nome *</label>
                    <input type="text" name="nome_user" value="<?php echo $user['nome_user']; ?>">
                </div>
                <div class="form-duo">
                    <label for="">Sobrenome</label>
                    <input type="text" name="sobrenome_user" value="<?php echo $user['sobnome_user']; ?>">
                </div>
            </div>
            <br>
            <div class="cadprod">
                <div class="form-duo">
                    <label for="desc">Usuario *</label>
                    <input type="text" name="login_user" value="<?php echo $user['login_user']; ?>">
                </div>
                <br>
                <div class="form-duo">
                    <label for="desc">Senha *</label>
                    <input type="password" name="pass_user" value="<?php echo $user['pass_user']; ?>">
                </div>
            </div>
            <br>
            <div class="cadprod">
                <div class="form-duo">
                <label for="">Endereço</label>
                <input type="text" name="end_user" value="<?php echo $user['end_user']; ?>"></input>
                </div>
            </div>
            <br>
            <div class="cadprod">
                <div class="form-duo">
                    <label for="">Tipo:</label>
                    <label>
                        <label>
                        <input class="with-gap" name="tipo_user" type="radio"  value="Cliente" <?php if($user['tipo_user'] == "Cliente"){echo 'checked';} ?>/>
                        <span>Cliente</span>
                        </label>
                        <label>
                        <input class="with-gap" name="tipo_user" type="radio" value="Secretário" <?php if($user['tipo_user'] == "Secretário"){echo 'checked';} ?> />
                        <span style="margin: 0 0 0 15px;">Secretário</span>
                        </label>
                        <label>
                        <input class="with-gap" name="tipo_user" type="radio" value="Admin" <?php if($user['tipo_user'] == "Admin"){echo 'checked';} ?> />
                        <span style="margin: 0 0 0 15px;">Admin</span>
                        </label>
                    </label>
                </div>
            </div>
            <br>
            <div class="form-field">
                <a class="btn  amber darken-4 borda modal-close" href="#"><i class="material-icons left white-text">chevron_left</i>Voltar</a>
                <button onclick = "return confirm('Deseja realmente alterar?');" class="btn roxo borda"><i class="material-icons left white-text">create</i>Alterar</button>
            </div>
        </form>
    </div>
</div>