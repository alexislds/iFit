using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace WindowsFormsApplication1
{
    class Aluno
    {
        private string id;
        private string nome ;
        private string nomeAcademia;
        private string idade;
        private string sexo;
        private string email;
        private string senha;

        public string getId() {
            return this.id;
        }
        public void setId(string id){
            this.id = id;
        }
        public void setNome(string nome) {
            this.nome = nome;

        }
        public string getNome() {
            return this.nome;
        }
        public void setNomeAcademia(string nomeAcademia) {
            this.nomeAcademia = nomeAcademia;
        }
        public string getNomeAcademia() {
            return this.nomeAcademia;
        }
        public void setIdade(string idade) {
            this.idade = idade;

        }
        public string getIdade() {
            return this.idade;
        }
        public void setSexo(string sexo) {
            this.sexo = sexo;
        }
        public string getSexo() {
            return this.sexo;
        }
        public void setEmail(string email) {
            this.email = email;
        }
        public string getEmail() {
            return this.email;
        }
        public void setSenha(string senha) {
            this.senha = senha;
        }
        public string getSenha() {
            return this.senha;
        }
    }
}
