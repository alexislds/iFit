using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MySql.Data.MySqlClient;

namespace WindowsFormsApplication1
{
    class FitDao
    {
        public MySqlConnection con;
        public FitDao(MySqlConnection con) {
            setCon(con);
        }
        public void setCon(MySqlConnection con) {
            this.con = con;
        }
        public MySqlConnection getCon() {
            return this.con;
        }
        public string inserir(Aluno aluno) {
            string insert = "INSERT INTO alunos (nome , nome_Academia , Idade , Sexo , Email , Senha) values ('"+aluno.getNome()+"','"+aluno.getNomeAcademia()+"','"+aluno.getIdade()+"','"+aluno.getSexo()+ "','" +aluno.getEmail()+ "','" +aluno.getSenha()+ "')";
            
            try {
                MySqlCommand comandos = new MySqlCommand(insert, con);
                comandos.ExecuteNonQuery();
                return "inserido";
            }
            catch{
                return "Erro ao inserir ";
               
            }
            
        }
    }
}
