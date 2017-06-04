﻿using System;
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
        public Form2()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            AcessoDb acDb = new AcessoDb();
            MySqlConnection con = new MySqlConnection();
            con = acDb.OpenConnetion();
            FitDao fit = new FitDao(con);
            List<Aluno> listaUsuario = new List<Aluno>();
            listaUsuario = fit.litarUsuario();
            DataTable tb = new DataTable();


           
            if (listaUsuario != null) {
                for (int i = 0; i < listaUsuario.Count; i++)
                {
                    dgListarUsuario.Rows.Add(listaUsuario[i].getId(), listaUsuario[i].getNome(), listaUsuario[i].getSexo(),listaUsuario[i].getNomeAcademia());
                }

            }
            else {
                MessageBox.Show("Não há dados");
            }

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
    }
}
