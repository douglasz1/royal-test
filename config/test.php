<html>
<head>
</head>
<body>
<?php
	    
	echo "Read all / ler todos <br>";
    echo "<a href='http://localhost:8080/api_royal/product/read.php'>http://localhost:8080/api_royal/product/read.php</a><hr>";
	
	echo "Read one / ler um  <br>";
    echo "<a href='http://localhost:8080/api_royal/product/read_one.php?id=60'>http://localhost:8080/api_royal/product/read_one.php?id=60</a><hr>";
	
	echo "Search / Buscar  <br>";
    echo "<a href='http://localhost:8080/api_royal/product/search.php?s=shirt'>http://localhost:8080/api_royal/product/search.php?s=shirt</a><hr>";
	
	echo "Paging / Paginar <br>";
    echo "<a href='http://localhost:8080/api_royal/product/read_paging.php'>http://localhost:8080/api_royal/product/read_paging.php</a><hr>";
	
	echo "Read all category / ler todas categorias <br>"; 
    echo "<a href='http://localhost:8080/api_royal/category/read.php'>http://localhost:8080/api_royal/category/read.php</a><hr>";
	
	echo "Create / Criar produto <br>"; 
    echo "<a href='http://localhost:8080/api_royal/config/posts.php?operacao=create'>http://localhost:8080/api_royal/config/posts.php?operacao=create</a><hr>";
	
    echo "Update / Atualizar produto <br>"; 
    echo "<a href='http://localhost:8080/api_royal/config/posts.php?operacao=update'>http://localhost:8080/api_royal/config/posts.php?operacao=update</a><hr>";
	
	echo "Delete / Deletar produto <br>"; 
    echo "<a href='http://localhost:8080/api_royal/config/posts.php?operacao=delete'>http://localhost:8080/api_royal/config/posts.php?operacao=delete</a><hr>";
	
?>
</body>
</html>