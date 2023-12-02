<div class="products-container">
    <ul>
        <?php include_once "php/session/conexao.php";

            // Verificando se não existe cadastro para o e-mail informado
            $query = "SELECT * FROM produto";
            $result = mysqli_query($conexao, $query);

            if ($result->num_rows > 0){ // Itens salvos no banco de dados
                while ($dados = $result->fetch_assoc()) {

                    $id_produto = $dados["id"];
                    $nome = $dados["nome"];
                    $foto_produto = $dados["foto_item"];

                    $preco = $dados["preco"];
                    $descricao = $dados["descricao"];
                    $quantidade = $dados["quantidade"];

                    echo "<li class='product-card'>
                            <img src='static/files/produtos/$foto_produto' alt='$nome'>
                            <div>
                                <h3>$nome</h3>
                                <p>$descricao</p>
                            <span>$quantidade unidades restantes</span>
                                <div>
                                    <span class='price'>R$ $preco</span>
                                    <input type='submit' value='Adicionar ao Carrinho'>
                                </div>
                            </div>
                        </li>";
                }
            }
        ?>

        <li class="product-card">
            <img src="/sis-rigelo/sis-rigelo/files/product-2,5kg.jpg" alt="Imagem do Produto">
            <div>
                <h3>Saco de gelo 2,5kg</h3>
                <p>Saco de 2,5kg (Dois quilos e meio) de gelo em cubos, apropriado para o uso de resfriamento ou consumo.</p>
            <span>Compra a cima de 20 unidades -</span>
                <div>
                    <span class="price">R$ 4,59</span>
                    <input type="submit" value="Adicionar ao Carrinho">
                </div>
            </div>
        </li>
        <li class="product-card">
            <img src="/sis-rigelo/sis-rigelo/files/product-5kg.png" alt="Imagem do Produto">
            <div>
                <h3>Saco de gelo 5kg</h3>
                <p>Saco de 5kg (Cinco quilos) de gelo em cubos, apropriado para o uso de resfriamento ou consumo.</p>
            <span>Compra a cima de 30 unidades -</span>
                <div>
                    <span class="price">R$ 5,99</span>
                    <input type="submit" value="Adicionar ao Carrinho">
                </div>
            </div>
        </li>
        <li class="product-card">
            <img src="/sis-rigelo/sis-rigelo/files/product-10kg.png" alt="Imagem do Produto">
            <div>
                <h3>Saco de gelo 10kg</h3>
                <p>Saco de 10kg (Dez quilos) de gelo em cubos, apropriado para o uso de resfriamento ou consumo.</p>
            <span>Compra a cima de 10</span>
                <div>
                    <span class="price">R$ 8,99</span>
                    <input type="submit" value="Adicionar ao Carrinho">
                </div>
            </div>
        </li>
        <li class="product-card">
            <img src="/sis-rigelo/sis-rigelo/files/product-12kg.png" alt="Imagem do Produto">
            <div>
                <h3>Saco de gelo 12kg</h3>
                <p>Saco de 12kg (Doze quilos) de gelo triturado, apropriado para o uso de resfriamentom, NÃO APROPRIADO PARA  CONSUMO.</p>
                <div>
                    <span class="price">R$ 19,99</span>
                    <input type="submit" value="Adicionar ao Carrinho">
                </div>
            </div>
        </li>
        <li class="product-card">
            <img src="" alt="Imagem do Produto">
            <div>
                <h3>Nome do Produto</h3>
                <p>Descrição do Produto: Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt dignissimos alias
                enim vero ducimus suscipit non, perferendis, cumque nemo veritatis, accusamus temporibus porro
                laudantium. Id ex neque distinctio quidem. At.</p>
                <div>
                    <span class="price">R$ 19,99</span>
                    <input type="submit" value="Adicionar ao Carrinho">
                </div>
            </div>
        </li>
        <li class="product-card">
            <img src="" alt="Imagem do Produto">
            <div>
                <h3>Nome do Produto</h3>
                <p>Descrição do Produto: Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt dignissimos alias
                enim vero ducimus suscipit non, perferendis, cumque nemo veritatis, accusamus temporibus porro
                laudantium. Id ex neque distinctio quidem. At.</p>
                <div>
                    <span class="price">R$ 19,99</span>
                    <input type="submit" value="Adicionar ao Carrinho">
                </div>
            </div>
        </li>
        <li class="product-card">
            <img src="" alt="Imagem do Produto">
            <div>
                <h3>Nome do Produto</h3>
                <p>Descrição do Produto: Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt dignissimos alias
                enim vero ducimus suscipit non, perferendis, cumque nemo veritatis, accusamus temporibus porro
                laudantium. Id ex neque distinctio quidem. At.</p>
                <div>
                    <span class="price">R$ 19,99</span>
                    <input type="submit" value="Adicionar ao Carrinho">
                </div>
            </div>
        </li>
        <li class="product-card">
            <img src="" alt="Imagem do Produto">
            <div>
                <h3>Nome do Produto</h3>
                <p>Descrição do Produto: Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt dignissimos alias
                enim vero ducimus suscipit non, perferendis, cumque nemo veritatis, accusamus temporibus porro
                laudantium. Id ex neque distinctio quidem. At.</p>
                <div>
                    <span class="price">R$ 19,99</span>
                    <input type="submit" value="Adicionar ao Carrinho">
                </div>
            </div>
        </li>
        <li class="product-card">
            <img src="" alt="Imagem do Produto">
            <div>
                <h3>Nome do Produto</h3>
                <p>Descrição do Produto: Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt dignissimos alias
                enim vero ducimus suscipit non, perferendis, cumque nemo veritatis, accusamus temporibus porro
                laudantium. Id ex neque distinctio quidem. At.</p>
                <div>
                    <span class="price">R$ 19,99</span>
                    <input type="submit" value="Adicionar ao Carrinho">
                </div>
            </div>
        </li>
        <li class="product-card">
            <img src="" alt="Imagem do Produto">
            <div>
                <h3>Nome do Produto</h3>
                <p>Descrição do Produto: Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt dignissimos alias
                enim vero ducimus suscipit non, perferendis, cumque nemo veritatis, accusamus temporibus porro
                laudantium. Id ex neque distinctio quidem. At.</p>
                <div>
                    <span class="price">R$ 19,99</span>
                    <input type="submit" value="Adicionar ao Carrinho">
                </div>
            </div>
        </li>
    </ul>
</div>