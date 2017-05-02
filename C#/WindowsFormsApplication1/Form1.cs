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
            string nome = "b";
            string senha = "l";
            bool acesso = false;

            if (nomes.Equals(nome) && senhas.Equals(senha))
            {
                acesso = true;
                MessageBox.Show("Acesso Permitido");

            }
            else {
                MessageBox.Show("Acesso negado");
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
            string nome = txtNome.Text;
            string senha = txtSenha.Text;
            bool acesso;

            
            acesso = login(nome, senha);
            Form2 telaAcesso = new Form2();
            if (acesso == true)
            {
                System.Threading.Thread t = new System.Threading.Thread(new System.Threading.ThreadStart(ThreadProc));
                t.Start();
                this.Close();

            }
           
         }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void button1_Click_1(object sender, EventArgs e)
        {
            AcessoDb acDb= new AcessoDb();
            MySqlConnection con = new MySqlConnection();
            con = acDb.OpenConnetion();
            FitDao fit = new FitDao(con);
            Aluno al = new Aluno();
            al.setNome("lorena");
            al.setNomeAcademia("falcon");
            al.setIdade("20");
            al.setSexo("m");
            al.setEmail("nobru");
            al.setSenha("llllll");
            string status =  fit.inserir(al);
            MessageBox.Show(status);
               
        }
    }
}
