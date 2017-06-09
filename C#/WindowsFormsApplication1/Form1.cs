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
    public partial class Form1 : Form
    {
        public static bool login(string nomes , string senhas ) {
            string nome = "Admin";
            string senha = "123456";
            bool acesso = false;

            if (nomes.Equals(nome) && senhas.Equals(senha))
            {
                acesso = true;
            }
            else {
                acesso = false;
            }
            return acesso;            
        }
        public static void ThreadProc()
        {
            Application.Run(new Form2());
        }
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            Aluno user = new Aluno();
            AcessoDb acDb = new AcessoDb();
            MySqlConnection con = new MySqlConnection();
            con = acDb.OpenConnetion();
            FitDao fit = new FitDao(con);
            user.setNome(txtNome.Text)  ;
            user.setSenha(txtSenha.Text);
            bool acessoLocal = login(txtNome.Text, txtSenha.Text);
            bool acesso;


            acesso = fit.logar(user);
            Form2 telaAcesso = new Form2();
            if (acesso == true  || acessoLocal == true)
            {
                MessageBox.Show("logado","Login",MessageBoxButtons.OK,MessageBoxIcon.Asterisk);
                System.Threading.Thread t = new System.Threading.Thread(new System.Threading.ThreadStart(ThreadProc));
                t.Start();
                this.Close();

            }
            else {
                MessageBox.Show("Verificar usuario ou senha","Acesso negado",MessageBoxButtons.OK,MessageBoxIcon.Error);
            }
           
         }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void button1_Click_1(object sender, EventArgs e)
        {
           
               
        }
    }
}
