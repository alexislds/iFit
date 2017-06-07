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
    public partial class Cadastro : Form
    {
        public Cadastro()
        {
            InitializeComponent();
        }

        public void limpar() {
            txtAcademia.Text = "";
            txtEmail.Text = "";
            txtIdade.Text = "";
            txtNome.Text = "";
            txtSenha.Text = "";
            txtSexo.Text = "";
        }
        public bool validaCampos() {
            if (txtNome.Text.Equals("")) {

                return false;
            }

            return true;
        }

        
        private void button1_Click(object sender, EventArgs e)
        {
            AcessoDb acDb = new AcessoDb();
            MySqlConnection con = new MySqlConnection();
            con = acDb.OpenConnetion();
            FitDao fit = new FitDao(con);
            Aluno al = new Aluno();

            al.setNome(txtNome.Text);
            al.setNomeAcademia(txtAcademia.Text);
            al.setIdade(txtIdade.Text);
            al.setEmail(txtEmail.Text);
            al.setSenha(txtSenha.Text);
            string status = fit.inserir(al);
            MessageBox.Show(status, "Salvar",MessageBoxButtons.OK, MessageBoxIcon.Asterisk);
            limpar();


        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void panel1_Paint(object sender, PaintEventArgs e)
        {

        }

        private void textBox5_TextChanged(object sender, EventArgs e)
        {

        }

        private void label1_Click_1(object sender, EventArgs e)
        {

        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {

        }

        private void lblSexo_Click(object sender, EventArgs e)
        {

        }

        private void textBox2_TextChanged(object sender, EventArgs e)
        {

        }

        private void label3_Click(object sender, EventArgs e)
        {

        }

        private void textBox4_TextChanged(object sender, EventArgs e)
        {

        }

        private void lblEmail_Click(object sender, EventArgs e)
        {

        }

        private void textBox3_TextChanged(object sender, EventArgs e)
        {

        }

        private void label2_Click(object sender, EventArgs e)
        {

        }
    }
}
