function prompt_Login(url){

    var objBody = document.getElementsByTagName('body').item(0);
    var objSombra = document.createElement('div');
    objSombra.setAttribute('id','sombra');
    objSombra.style.position='absolute';
    objSombra.style.background='#C3C3C3';
    objSombra.style.top = '0px';
    objSombra.style.left = '0px';
    objSombra.style.width='100%';
    objSombra.style.height='100%';
    objSombra.style.filter = 'alpha(Opacity=65,FinishOpacity=35, style=4)';//não funciona no mozila
    objSombra.style.Zindex = 5;
    objSombra.style.top = document.body.scrollTop;//no mozila naum funciona
    objSombra.style.height =document.body.scrollHeight;
    objSombra.style.visibility='visible';
    objSombra.style.display='inline';
    objBody.appendChild(objSombra);        
    
    //var objBody1 = document.getElementsByTagName("body")[0];
    var tela_renovar = document.createElement("div");
    tela_renovar.setAttribute('id','tela');
    tela_renovar.style.position="absolute";
    tela_renovar.style.background="#FFF";
    tela_renovar.style.color="#FFF";
    tela_renovar.style.fontSize="10px";
    tela_renovar.style.fontWeight="bold";
    tela_renovar.style.fontFamily="font-family: Arial, Helvetica, sans-serif";
    tela_renovar.style.left=(screen.width) ? (screen.width-350)/2 : 0;
    tela_renovar.style.top= document.documentElement.scrollTop+100;//ñ funciona no mozzila
    tela_renovar.style.width="360px";
    tela_renovar.style.height="150px";
    tela_renovar.style.Zindex = 999;
    tela_renovar.innerHTML='<div style="width:360px;height:150px;border-color:#666699; border-style:solid;border-width: 9px;" background-color:#FFF id="borda"><div style="font-size:3px;" >&nbsp;</div><div style="border-bottom-style:dotted;border-width:4px;border-color:#666699">      <li style="display:inline;padding-right: 150px;"><img src="../image/loginheelp.jpg" width="150px" height="26px" /></li><li style="display:inline" ><input type="image" src="../image/btfechardes.jpg" width="20px" height="20px" onclick="fechar()" title="Fechar [X]"/></li></div> <div style="font-size:3px;">&nbsp;</div><div style="font-size:10px;font-weight: bold;color: #666666;"><table> <tr> <td style="font-size:10px;"> Email: <input type="text" name="email" name="email" style="font-size:10px; color: #666666;" size="35" ></td> </tr> <tr> <td style="font-size:10px;">Senha: <input type="password" name="senha" name="senha" style="font-size:10px; color: #666666;" size="10"></td><td ><b id="aut_msg"><b>&nbsp;</td><td ><input type="image" id="autenticar" src="../image/btlogar.gif" width="70" height="21" align="right" onclick="autentic(\''+url+'\');" title="Efetuar Login"></td></tr></table></div><div style="font-size:8px;">&nbsp;</div> <div ><li style="float:left;margin-left: 30px "><img src="../image/seta_login.jpg" width="5" height="7" /> &nbsp;<a href="../cadastrar.php" onclick=" redir("cadastrar.php");" style="font-size:12px; color: #666666;">N&atilde;o sou cadastrado</a></li><li style="float:left;margin-left: 30px; "><img src="../image/seta_login.jpg" width="5" height="7" /> &nbsp;<a href="javascript:void(0)" onclick="remenber();" style="font-size:12px; color: #666666;">Esqueci minha senha</a></li></div></div>';
    
    objBody.appendChild(tela_renovar);
        document.getElementById("email").focus();
}
