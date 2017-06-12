using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql.Data.MySqlClient;

namespace WindowsFormsApplication1
{
    public partial class Form2 : Form
    {
        int linhaSelec;
        string tipoListar;
        public Form2()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
           

        }

        private void dgListarUsuario_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }

        private void statusStrip1_ItemClicked(object sender, ToolStripItemClickedEventArgs e)
        {

        }

        private void toolStripMenuItem1_Click(object sender, EventArgs e)
        {
            
        }

        private void Form2_Load(object sender, EventArgs e)
        {

        }

        private void btnCadastrar_Click(object sender, EventArgs e)
        {
            Cadastro cadastro = new Cadastro();
            cadastro.Show();
        }

        private void btnLimparLista_Click(object sender, EventArgs e)
        {
            lblLista.Text = "";
            dgListarUsuario.Rows.Clear();
        }

        private void dgListarUsuario_SelectionChanged(object sender, EventArgs e)
        {
             linhaSelec = dgListarUsuario.CurrentRow.Index; // pega o indice da linha selecionada.
        }

        private void btnExcluir_Click(object sender, EventArgs e)
        {
            AcessoDb acDb = new AcessoDb();
            MySqlConnection con = new MySqlConnection();
            con = acDb.OpenConnetion();
            FitDao fit = new FitDao(con);
            Aluno user = new Aluno();
            if (!(dgListarUsuario.Rows[linhaSelec].Cells[5].Value == null))
            {
                user.setId(dgListarUsuario.Rows[linhaSelec].Cells[5].Value.ToString());
                bool msg = fit.excluir(user);
                if (msg == true)
                {
                    MessageBox.Show("Registro excluído", "Excluir", MessageBoxButtons.OK, MessageBoxIcon.Asterisk);
                    if (tipoListar.Equals("aluno")) listarAlunosToolStripMenuItem.PerformClick();
                    if (tipoListar.Equals("usuario")) listarUsuariosToolStripMenuItem.PerformClick();
                    if (tipoListar.Equals("professor")) listarUsuariosToolStripMenuItem.PerformClick();
                }
                else
                {

                    MessageBox.Show("Registro não foi exlcluído", "Excluir", MessageBoxButtons.OK, MessageBoxIcon.Error);
                }
            }
            else {
                MessageBox.Show("Não há regitros selecionados","Excluir" ,MessageBoxButtons.OK,MessageBoxIcon.Information);
            }
        }

        private void button1_Click_1(object sender, EventArgs e)
        {
            AcessoDb acDb = new AcessoDb();
            MySqlConnection con = new MySqlConnection();
            con = acDb.OpenConnetion();
            FitDao fit = new FitDao(con);
            Aluno user = new Aluno();
            if (!(dgListarUsuario.Rows[linhaSelec].Cells[0].Value == null))
            {
                user.setNome(dgListarUsuario.Rows[linhaSelec].Cells[0].Value.ToString());
                user.setIdade(dgListarUsuario.Rows[linhaSelec].Cells[1].Value.ToString());
                user.setSexo(dgListarUsuario.Rows[linhaSelec].Cells[2].Value.ToString());
                user.setEmail(dgListarUsuario.Rows[linhaSelec].Cells[3].Value.ToString());
                user.setNomeAcademia(dgListarUsuario.Rows[linhaSelec].Cells[4].Value.ToString());
                user.setId(dgListarUsuario.Rows[linhaSelec].Cells[5].Value.ToString());
                bool msg = fit.editar(user);
                if (msg == true)
                {
                    MessageBox.Show("Registro Editado", "Editar", MessageBoxButtons.OK, MessageBoxIcon.Asterisk);
                    if(tipoListar.Equals("aluno"))listarAlunosToolStripMenuItem.PerformClick();
                    if (tipoListar.Equals("usuario")) listarUsuariosToolStripMenuItem.PerformClick();
                    if (tipoListar.Equals("professor")) listarProfessoresToolStripMenuItem.PerformClick();
                }
                else
                {

                    MessageBox.Show("Não foi possível salvar as alteração", "Editar", MessageBoxButtons.OK, MessageBoxIcon.Error);
                }
            }
            else
            {
                MessageBox.Show("Não há regitros selecionados", "Excluir", MessageBoxButtons.OK, MessageBoxIcon.Information);
            }
        }

        private void adcionarUsuarioToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Cadastro cadastro = new Cadastro();
            cadastro.Show();
        }

        private void fichasToolStripMenuItem_Click(object sender, EventArgs e)
        {

        }

        private void listarUsuariosToolStripMenuItem_Click(object sender, EventArgs e)
        {
            lblLista.Text = "Lista de usuários";
            tipoListar = "usuario";
            AcessoDb acDb = new AcessoDb();
            MySqlConnection con = new MySqlConnection();
            con = acDb.OpenConnetion();
            FitDao fit = new FitDao(con);
            List<Aluno> listaUsuario = new List<Aluno>();
            listaUsuario = fit.litarUsuario();
            DataTable tb = new DataTable();



            if (listaUsuario != null)
            {
                dgListarUsuario.Rows.Clear();
                for (int i = 0; i < listaUsuario.Count; i++)
                {

                    dgListarUsuario.Rows.Add(listaUsuario[i].getNome(), listaUsuario[i].getIdade(), listaUsuario[i].getSexo(), listaUsuario[i].getEmail(), listaUsuario[i].getNomeAcademia(), listaUsuario[i].getId());
                }

            }
            else
            {
                MessageBox.Show("Não há dados");
            }
        }

        private void listarAlunosToolStripMenuItem_Click(object sender, EventArgs e)
        {
            lblLista.Text = "Lista de alunos";
            tipoListar = "aluno";
            AcessoDb acDb = new AcessoDb();
            MySqlConnection con = new MySqlConnection();
            con = acDb.OpenConnetion();
            FitDao fit = new FitDao(con);
            List<Aluno> listaAluno = new List<Aluno>();
            listaAluno = fit.litarAluno();
            DataTable tb = new DataTable();



            if (listaAluno != null)
            {
                dgListarUsuario.Rows.Clear();
                for (int i = 0; i < listaAluno.Count; i++)
                {

                    dgListarUsuario.Rows.Add(listaAluno[i].getNome(), listaAluno[i].getIdade(), listaAluno[i].getSexo(), listaAluno[i].getEmail(), listaAluno[i].getNomeAcademia(), listaAluno[i].getId());
                }

            }
            else
            {
                MessageBox.Show("Não há dados");
            }
        }

        private void listarProfessoresToolStripMenuItem_Click(object sender, EventArgs e)
        {
            lblLista.Text = "Lista de professores";
            tipoListar = "professor";
            AcessoDb acDb = new AcessoDb();
            MySqlConnection con = new MySqlConnection();
            con = acDb.OpenConnetion();
            FitDao fit = new FitDao(con);
            List<Aluno> listaProfessor = new List<Aluno>();
            listaProfessor = fit.litarProfesor();
            DataTable tb = new DataTable();



            if (listaProfessor != null)
            {
                dgListarUsuario.Rows.Clear();
                for (int i = 0; i < listaProfessor.Count; i++)
                {

                    dgListarUsuario.Rows.Add(listaProfessor[i].getNome(), listaProfessor[i].getIdade(), listaProfessor[i].getSexo(), listaProfessor[i].getEmail(), listaProfessor[i].getNomeAcademia(), listaProfessor[i].getId());
                }

            }
            else
            {
                MessageBox.Show("Não há dados");
            }
        }
    }
}
