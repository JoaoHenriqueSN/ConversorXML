
# Conversor de XML para DANFE (PDF)

Este é um projeto simples em PHP que permite ao usuário carregar um arquivo XML de nota fiscal eletrônica (NFe) e gerar automaticamente o PDF da DANFE (Documento Auxiliar da Nota Fiscal Eletrônica).

## 🔧 Funcionalidades

- Upload de arquivos `.xml` (NFe)
- Geração da DANFE em formato PDF
- Download automático do PDF gerado
- Suporte ao layout oficial da DANFE
- Integração com biblioteca [nfephp-org/sped-da](https://github.com/nfephp-org/sped-da)

---

## 💻 Pré-requisitos

- PHP 7.4 ou superior
- Composer
- Extensões PHP:
  - `mbstring`
  - `dom`
  - `gd`

---

## 🚀 Instalação

1. Clone o repositório:

```bash
git clone https://github.com/seu-usuario/seu-repositorio.git
cd seu-repositorio
```

2. Instale as dependências com o Composer:

```bash
composer install
```

3. Suba o projeto em um servidor local (como XAMPP ou PHP embutido):

```bash
php -S localhost:8000
```

4. Acesse o sistema no navegador:

```
http://localhost:8000
```

---

## 📁 Estrutura do Projeto

```bash
.
├── index.html         # Formulário de upload
├── main.php           # Lógica de conversão para DANFE
├── xml/               # Pasta sugerida para os arquivos XML
├── composer.json      # Dependências do projeto
├── vendor/            # Bibliotecas instaladas (ignorada no Git)
└── README.md
```

---

## 📦 Dependência Principal

- [nfephp-org/sped-da](https://github.com/nfephp-org/sped-da) – Utilizada para gerar o layout oficial da DANFE a partir do XML da NFe.

---

## 📝 Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

---

## 🙋‍♂️ Contribuições

Contribuições são bem-vindas! Sinta-se livre para abrir issues ou enviar pull requests.
