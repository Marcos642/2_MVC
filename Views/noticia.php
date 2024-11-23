Pagina de noticias <br>


<div class="noticia">
    <?php
        for ($i=0; $i < count($this->dados2); $i++) { 
    ?> 
        <a href="noticia/<?= $this->dados2[$i]['descricao']."/".$this->dados2[$i]['id_noticia'] ?>">
            <div> <!-- quadrado de noticia para rederecionar -->
               
                <img src="Midia/<?= $this->dados2[$i]['nome_imagem']; ?>" alt="">
            
                <h3><?= $this->dados2[$i]['titulo']; ?></h3>
            </div>
        </a>
    <?php       
        }
    ?>
</div> <!-- noticia -->


<pre>
    <?php
        print_r($this->dados2)
    ?>
</pre>