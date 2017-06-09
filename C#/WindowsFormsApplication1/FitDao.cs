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

        public bool excluir( Aluno aluno) {
            string delete = "DELETE FROM usuario where id_usuario='" + aluno.getId()+"'";
            try
            {
                MySqlCommand comando = new MySqlCommand(delete, con);
                comando.ExecuteNonQuery();
                return true;
            }
            catch {
                return false;
            }
    
        }

        public bool editar(Aluno aluno)
        {
            string up = "UPDATE usuario SET nome = '" + aluno.getNome() + "',academia ='" + aluno.getNomeAcademia() +"',Idade = '"+ aluno.getIdade() + "', sexo ='" + aluno.getSexo() + "',email = '" + aluno.getEmail() + "', senha ='"+aluno.getSenha()+ "' where id_usuario='"+aluno.getId() +"'";
            try
            {
                MySqlCommand comando = new MySqlCommand(up, con);
                comando.ExecuteNonQuery();
                return true;
            }
            catch
            {
                return false;
            }

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

        public List<Aluno> litarAluno()
        {
            List<Aluno> todosAlunos = new List<Aluno>();
            string comandoSelect = "SELECT usuario.id_usuario ,email , senha , nome,academia ,sexo , idade FROM usuario inner join aluno on aluno.id_aluno = usuario.id_usuario; ";
            try
            {
                MySqlCommand comandos = new MySqlCommand(comandoSelect, con);
                comandos.ExecuteNonQuery();


                MySqlDataReader leitor = comandos.ExecuteReader();
                if (leitor != null)
                {
                    while (leitor.Read())
                    {
                        //para cada iteração adiciono o nome usuario 
                        Aluno aluno = new Aluno();
                        aluno.setId(leitor.GetString(0));
                        aluno.setEmail(leitor.GetString(1));
                        aluno.setSenha(leitor.GetString(2));
                        aluno.setNome(leitor.GetString(3));
                        aluno.setNomeAcademia(leitor.GetString(4));
                        aluno.setSexo(leitor.GetString(5));
                        aluno.setIdade(leitor.GetString(6));

                        todosAlunos.Add(aluno);
                    }

                }
                else
                {
                    return null;
                }
            }
            catch
            {
                return null;
            }

            return todosAlunos;

        }

        public List<Aluno> litarProfesor()
        {
            List<Aluno> todosProfessor = new List<Aluno>();
            string comandoSelect = "SELECT usuario.id_usuario ,email , senha , nome,academia ,sexo , idade FROM usuario inner join professor on professor.id_usuario = usuario.id_usuario; ";
            try
            {
                MySqlCommand comandos = new MySqlCommand(comandoSelect, con);
                comandos.ExecuteNonQuery();


                MySqlDataReader leitor = comandos.ExecuteReader();
                if (leitor != null)
                {
                    while (leitor.Read())
                    {
                        //para cada iteração adiciono o nome usuario 
                        Aluno professor = new Aluno();
                        professor.setId(leitor.GetString(0));
                        professor.setEmail(leitor.GetString(1));
                        professor.setSenha(leitor.GetString(2));
                        professor.setNome(leitor.GetString(3));
                        professor.setNomeAcademia(leitor.GetString(4));
                        professor.setSexo(leitor.GetString(5));
                        professor.setIdade(leitor.GetString(6));

                        todosProfessor.Add(professor);
                    }

                }
                else
                {
                    return null;
                }
            }
            catch
            {
                return null;
            }

            return todosProfessor;

        }
        public bool logar(Aluno  aluno) {
            Aluno user = new Aluno();
            user = aluno;
            string comandoSelect = "SELECT senha , nome FROM usuario where senha = '"+user.getSenha()+"' AND  nome ='"+user.getNome()+"'" ;
            try
            {
                MySqlCommand comandos = new MySqlCommand(comandoSelect, con);
                comandos.ExecuteNonQuery();
                MySqlDataReader leitor = comandos.ExecuteReader();
                if (leitor != null)
                {
                    while (leitor.Read())
                    {
                        if ((user.getSenha().Equals(leitor.GetString(0)) && user.getNome().Equals(leitor.GetString(1)))){
                            return true;
                        }
                    }
                    return false;
                }
                else
                {
                    return false;
                }
            }
            catch
            {
                return false;
            }

            

        }


    }
}
