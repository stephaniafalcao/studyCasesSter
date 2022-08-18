SELECT 
    FORNECEDOR.NOME_FORNECEDOR AS FORNECEDOR,
    PECA.PRECO
FROM FORNECIMENTO 
INNER JOIN FORNECEDOR ON FORNECIMENTO.CODIGO_FORNECEDOR = FORNECEDOR.CODIGO_FORNECEDOR AND FORNECEDOR.CIDADE = "VITORIA"
INNER JOIN PECA ON FORNECIMENTO.CODIGO_PECA = PECA.CODIGO_PECA AND PECA.NOME_PEÇA = "MOTOR" 
INNER JOIN CARRO ON FORNECIMENTO.CODIGO_CARRO = CARRO.CODIGO_CARRO AND CARRO.NOME_CARRO = "KOMBI" 
ORDER BY PECA.PRECO, ASC
