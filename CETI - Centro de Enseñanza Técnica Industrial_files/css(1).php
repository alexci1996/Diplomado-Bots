body{
	 background: #CCCCCC;
}

img {
	border: none;
}
.letraRoja{
	color: #ED1C24;
	font-weight: bold;
	font-size: 11px; 
}
.centrar{
	text-align: center
}
.banner{
	width: 1000px; 
	border: 0px;
	border-color: #0559B7;
	background: #FFFFFF;	
}
.barra_menu{
	color:#FFF; 
	font-family:Verdana; 
	font-size: 11px; 
	width:1000px; 
	height:30px;
}
.menu a{
	color:#2f2f2f;
	/*color:#FFFF;*/
	text-decoration: none;
}
.menu a:hover{
	color:#545454;
	/*color:#FFF;
	text-decoration: underline;*/
	text-decoration: none;
}

.naranja{
	background:#FFCA5B;
	font-weight:bold;
}

.azulrevision{
  background: #012751; 
  color: #FFF;
}
.azulinter{
 background: #04468f;
 color: #FFF;
}

.common_button{
background-image:url("../tecnologo/public/img/boton_a.png");
background-repeat:repeat x;
cursor:pointer;

border:solid 1px black;
border: 0px 0px 0px 0px;
height:24px;
color:black;
}
.common_button:hover{
background-image:url("../tecnologo/public/img/boton_b.png");
background-repeat:repeat x;
border:solid 1px black;
border: 0px 0px 0px 0px;
height:24px;
cursor:pointer;
color:black;

}


.grisClaro{
	background:#DDDDDD;
}

.gris{
	background:#BBBBBB;
}

.red{
	background:#fce3bc;
}

.blanco{
	background:#CCCCCC;
}

.azul{
	background:#1569C7;
	color:#FFFFFF;
}

.negro{
	background:#000000;
	color:#FFFFFF;
}

.verde{
	background:#00aa00;
}

.amarillo{
	background:#ffff00;
}

.rojo{
	background:#aa0000;
}

.bordeazul{
	border: solid 1px #003399;
}

.bordeazul th{
	border: solid 1px #003399;
}

.bordeazul td{
	border: solid 1px #003399;
}

.materias {
	font-size: 12px;
}

.materias a{
	text-decoration:none;
	font-weight: bold;
}

.materias a:hover{
	text-decoration:underline;
}

.apoyo *{
	font-size: 11px;
}
.formu{
    background-color: #FFC95C;
    color:  #333;
}

.formu table, .formu td{
    font-size: 10px;
    text-align: right;
}

.formu input, .formu select, .formu option{
    width: 100%;
   /*text-transform: uppercase;*/
    padding: 3px;
}

.ssppReporteAlta *{
    font-size: 11px;
    text-align: center;
}

.ssppReporteAlta .titulos td, .formu .titulos td{        
    font-size: 14px;
    font-weight: bold;
    text-align: center;
    padding: 3px 5px;
    background-color: #156AC7;
    color: #FFF;
    text-transform: uppercase;
}

.ssppReporteAlta .titulos a, .formu .titulos a{
    color: #FFF;
    text-decoration: none;
}

.ssppReporteAlta .titulos a:hover, .formu .titulos a:hover{
    color:  #FFC95C;
}

.ssppReporteAlta td{        
    padding: 0px 5px;                
    text-transform: uppercase;
}

.ssppReporteAlta tr:hover{        
    background-color: #888888;
    color: #FFF;
}

.ssppReporteAlta .anterior{
    text-align: left;    
    background-color: #156AC7;
    color: #fff;
    padding: 5px;
}

.ssppReporteAlta .siguiente{
    text-align: right;
    background-color: #156AC7;
    padding: 5px;
    color: #fff;
}
        
.ssppReporteAlta img{
    border: none;
}

.ssppReporteAlta .siguiente a, .ssppReporteAlta .anterior a{
    color: #fff;
    text-decoration: none;
}

.ssppReporteAlta .anterior a:hover, .ssppReporteAlta .siguiente a:hover{
    color:  #FFC95C;
}


.ssppReporte *{
    font-size: 11px;
    text-align: center;
}

.ssppReporte .titulos td, .formu .titulos td{        
    font-size: 14px;
    font-weight: bold;
    text-align: center;
    padding: 3px 5px;
    background-color: #156AC7;
    color: #FFF;
    text-transform: uppercase;
}

.ssppReporte .titulos a, .formu .titulos a{
    color: #FFF;
    text-decoration: none;
}

.ssppReporte .titulos a:hover, .formu .titulos a:hover{
    color:  #FFC95C;
}

.ssppReporte td{        
    padding: 0px 5px;                
    text-transform: uppercase;
}

.ssppReporte tr:hover{        
    background-color: #888888;
    color: #FFF;
}

.ssppReporte .anterior{
    text-align: left;    
    background-color: #156AC7;
    color: #fff;
    padding: 5px;
}

.ssppReporte .siguiente{
    text-align: right;
    background-color: #156AC7;
    padding: 5px;
    color: #fff;
}
        
.ssppReporte img{
    border: none;
}

.ssppReporte .siguiente a, .ssppReporte .anterior a{
    color: #fff;
    text-decoration: none;
}

.ssppReporte .anterior a:hover, .ssppReporte .siguiente a:hover{
    color:  #FFC95C;
}

.button {
	position: relative;
	background-color: #848484;
	border: none;
	font-size: 13px;
	color: #FFFFFF;
	padding: 3px;
	font-weight:bold;
	text-align: center;
	-webkit-transition-duration: 0.4s; /* Safari */
	transition-duration: 0.4s;
	text-decoration: none;
	overflow: hidden;
	cursor: pointer;
	border-radius: 8px;
}

.button:after {
	content: "";
	background: #f1f1f1;
	display: block;
	position: absolute;
	padding-top: 300%;
	padding-left: 350%;
	margin-left: -20px !important;
	margin-top: -120%;
	opacity: 0;
	transition: all 0.8s
}

.button:active:after {
	padding: 0;
	margin: 0;
	opacity: 1;
	transition: 0s
}

.tabla{
	border: 1px solid #b6b2b1;
	font-size:12px;
	border-radius: 4px;
}

.tabla select
{
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
	display: inline-block;
	margin: 1px 4px;
	padding: 2px 4px;
}

.tabla tr,.tabla td,.tabla th{
	border: 1px solid #ddd;
	border-radius: 4px;
}


.trnaranja td,.trnaranja th
{
	background:#FFCA5B;
	font-weight:bold;
	padding: 2px 4px;
}

.trazul td,.trazul th
{
	background:#1569C7;
	color:#FFFFFF;
	padding: 2px 4px;
}

.trgrisClaro td,.trgrisClaro td
{
	background:#DDDDDD;
	padding: 2px 4px;
}


.tablaSinBorde td,.tablaSinBorde th
{
	border: 1px solid #848484;
	border-radius: 4px;
}

.fila:nth-child(even) {
	background-color: #dddddd;
	border-radius: 4px;
}



.cajaTexto{
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
	display: inline-block;
	margin: 1px 0;
	padding: 3px 17px;
}

.botonSubmit
{
	background-color: #848484; /* Green */
    border: none;
    color: white;
    border-radius: 4px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
	padding: 2px;
	font-weight: bold;
}



.botomFont
{
	font-size: 12px;
	font-weight: bold;
}

.icon_move
{
	width:20px;
	height: 20px;
	cursor: pointer;
}

.icon_move_grd
{
	width: 38px;
	height: 38px;
	cursor: pointer;
}

.icon_move_off
{
	width:20px;
	height: 20px;
}

.disabled_button {
    opacity: 0.6;
    cursor: not-allowed;
}

.aboton {
	background-color: #848484;
	border: medium none;
	color: white;
	margin: 4px 2px;
	padding: 4px 6px;
	text-decoration: none;
	border-radius: 4px;
	font-weight: bold;
	font-size:11px;
}


/***/
.ssppAltaServicio *{
    font-size: 11px;
    text-align: center;
}

.ssppAltaServicio .titulos td, .formu .titulos td{        
    font-size: 14px;
    font-weight: bold;
    text-align: center;
    padding: 3px 5px;
    background-color: #156AC7;
    color: #FFF;
}

.ssppAltaServicio .titulos a, .formu .titulos a{
    color: #FFF;
    text-decoration: none;
}

.ssppAltaServicio .titulos a:hover, .formu .titulos a:hover{
    color:  #FFC95C;
}

.ssppAltaServicio td{        
    padding: 0px 5px;                
    
}

.ssppAltaServicio tr:hover{        
    background-color: #888888;
    color: #FFF;
}

.ssppAltaServicio .anterior{
    text-align: left;    
    background-color: #156AC7;
    color: #fff;
    padding: 5px;
}

.ssppAltaServicio .siguiente{
    text-align: right;
    background-color: #156AC7;
    padding: 5px;
    color: #fff;
}
        
.ssppAltaServicio img{
    border: none;
}

.ssppAltaServicio .siguiente a, .ssppAltaServicio .anterior a{
    color: #fff;
    text-decoration: none;
}

.ssppAltaServicio .anterior a:hover, .ssppAltaServicio .siguiente a:hover{
    color:  #FFC95C;
}

.submitEstilo {
    background-color: #848484; /* Green */
    border: none;
    color: white;
    border-radius: 4px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
	padding: 2px;
	font-weight: bold;
}

.submitEstilo {
    background-color: #848484;
    color: white;
    border: 2px solid #848484;
}

.submitEstilo:hover {
    background-color: #e7e7e7;
    color: black;
}

.InputText
{
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    display: inline-block;
    margin: 1px 0;
    padding: 3px 3px;
}


.fileUpload {
    position: relative;
    overflow: hidden;
    margin: 5px;
	color:#ffffff;
	padding: 2px;
	background-color:#337ab7;
	border-radius: 4px;
	font-size: 12px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}