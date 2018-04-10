<?php require_once('cabecalho.php'); ?>

<div id="container">
    <div class="table-responsive">
        <table class="table">
           <thead>
            <tr>
                <th> Políticas </th>
            </tr>    
           </thead>
           <tbody>  
             <?php
                $path = 'arquivos/politicas/';
                $diretorio = dir($path);
                while($arquivo = $diretorio -> read()){
                    if($arquivo != "." && $arquivo != ".." ){ 
                        echo utf8_encode("<tr><td><a href='".$path.$arquivo."'>".$arquivo."</a><br /><td></tr>");

                    }
                }     
            $diretorio -> close();
            ?>
            </tbody>    
            </thead>
        </table>
    </div>
</div>
<?php require_once('rodape.php'); ?>