# Sistema de Controle de Estoque

Sistema simples para gerenciamento de estoque desenvolvido com PHP e MySQL.

## 📋 Pré-requisitos

- XAMPP (Apache + MySQL + PHP)
- Navegador web moderno

## 🚀 Instalação e Configuração

### 1. Configurar o XAMPP

1. Abra o Painel de Controle do XAMPP
2. Inicie os módulos:
   - Apache (clique em "Start")
   - MySQL (clique em "Start")
3. Verifique se os módulos estão rodando (devem ficar com fundo verde)

### 2. Criar o Banco de Dados

1. Abra o navegador e acesse: http://localhost/phpmyadmin
2. Clique na aba "SQL"
3. Cole e execute o seguinte código SQL:

```sql
CREATE DATABASE IF NOT EXISTS db_estoque;
USE db_estoque;

CREATE TABLE IF NOT EXISTS tb_produtos (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    produto VARCHAR(100) NOT NULL,
    marca VARCHAR(100) NOT NULL,
    quantidade INT NOT NULL,
    valor DECIMAL(10,2) NOT NULL
);
```

### 3. Acessar o Sistema

1. Abra o navegador
2. Acesse: http://localhost/projeto_estoque/cadastro.html

## 📝 Uso

1. Preencha os campos do formulário:
   - Produto: Nome do produto
   - Marca: Marca do produto
   - Quantidade: Quantidade em estoque
   - Valor: Preço unitário do produto
2. Clique em "Cadastrar Produto"
3. Aguarde a mensagem de confirmação

## ⚠️ Solução de Problemas

### Erro de Conexão com Banco

Se aparecer erro de conexão:
1. Verifique se o MySQL está rodando no XAMPP
2. Confirme se o banco `db_estoque` existe
3. Verifique se a tabela `tb_produtos` foi criada corretamente

### Erro ao Cadastrar

1. Certifique-se de preencher todos os campos
2. Valores numéricos não devem conter vírgulas (use ponto para decimais)
3. Verifique se o Apache está rodando no XAMPP

## 🛠️ Tecnologias Utilizadas

- PHP
- MySQL
- HTML
- CSS