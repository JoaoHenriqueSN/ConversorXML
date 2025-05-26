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
