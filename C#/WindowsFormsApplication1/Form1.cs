using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

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
    }
}
