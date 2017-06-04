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
            string insert = "INSERT INTO usuario (nome , academia , Idade , Sexo , Email , Senha) values ('"+aluno.getNome()+"','"+aluno.getNomeAcademia()+"','"+aluno.getIdade()+"','"+aluno.getSexo()+ "','" +aluno.getEmail()+ "','" +aluno.getSenha()+ "')";
            
            try {
                MySqlCommand comandos = new MySqlCommand(insert, con);
                comandos.ExecuteNonQuery();
                return "inserido";
            }
            catch{
                return "Erro ao inserir ";
               
            }
            
        }
        public List<Aluno> litarUsuario() {
            List<Aluno> todosAlunos = new List<Aluno>();
            string comandoSelect = "SELECT id_usuario ,email , senha , nome,academia ,sexo , idade FROM usuario;";
            try
            {
                MySqlCommand comandos = new MySqlCommand(comandoSelect, con);
                comandos.ExecuteNonQuery();


                MySqlDataReader leitor = comandos.ExecuteReader();
                if (leitor != null) {
                    while (leitor.Read())
                    {
                        //para cada iteração adiciono o nome usuario 
                        Aluno usuario = new Aluno();
                        usuario.setId(leitor.GetString(0));
                        usuario.setEmail(leitor.GetString(1));
                        usuario.setSenha(leitor.GetString(2));
                        usuario.setNome(leitor.GetString(3));
                        usuario.setNomeAcademia(leitor.GetString(4));
                        usuario.setSexo(leitor.GetString(5));
                        usuario.setIdade(leitor.GetString(6));

                        todosAlunos.Add(usuario);
                    }
            
                 }else{
                         return null;
                  }
       }catch
          {
                return null;
          }

            return todosAlunos;

        }


    }
}
