<?php
session_start();
 if(isset($_SESSION["id"])){
   include("inc/header.log.inc.php");
 }
 else{
   include("inc/header.inc.php");
 } 

 ?>


<div class="TITRE" id="NEWS" >Boutique</div>

<section class="news_list" >  

<div class="product">                    
    <div class="article">
       <div class="article1">
            <div class="overlay">
                    <button>VOIR L'ARTICLE</button>
            </div>
       </div>                              
    </div>                    
    <p>Trouver un coworking à Paris</p>  
</div>

<div class="product">
        <div class="article">
                <div class="article2"> 
                        <div class="overlay">
                                <button>VOIR L'ARTICLE</button>
                        </div>
                </div>                                  
        </div>
    <p>Les dernières nouveautés Mac</p>   
</div>

<div class="product">
        <div class="article">
                <div class="article3">
                        <div class="overlay">                                          
                                <button>VOIR L'ARTICLE</button>
                        </div>
                </div>                                  
        </div>
    <p>Mieux développer en Javascript</p>  
</div>

<div class="product">
        <div class="article">
                <div class="article4"> 
                        <div class="overlay">
                                <button>VOIR L'ARTICLE</button>
                        </div>
                </div>                                  
        </div>
    <p>Javascript & Jquery en pratique</p>  
</div>

<div class="product">
        <div class="article">
                <div class="article5"> 
                        <div class="overlay">
                                <button>VOIR L'ARTICLE</button>
                        </div>
                </div>                                  
            </div>
    <p>Travailler à la montagne</p>                       
</div>

<div class="product">
        <div class="article">
                <div class="article6"> 
                        <div class="overlay">
                                <button>VOIR L'ARTICLE</button>
                        </div>
                </div>                                   
            </div>
    <p>CSS, SASS & Javascript</p>                       
</div>

<div class="product">
        <div class="article">
                <div class="article7"> 
                        <div class="overlay">
                                <button>VOIR L'ARTICLE</button>
                        </div>
                </div>                                  
        </div>
    <p>Les start-up les plus influentes</p>                       
</div>

<div class="product">
        <div class="article">
                <div class="article8"> 
                        <div class="overlay">
                                <button>VOIR L'ARTICLE</button>
                        </div>
                </div>                                  
        </div>
    <p>Se faire embaucher en agence Web</p>                       
</div>
    
</section>  

<?php include("inc/footer.inc.php"); ?>