using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MySql.Data.MySqlClient;

namespace WindowsFormsApplication1
{
    class AcessoDb
    {
        private static string confi = "  Server=mysql4.gear.host;Database=ifit;Uid=ifit;Pwd=123japones*";    
        private MySqlConnection connection = new MySqlConnection(confi);
        string status;
        public  MySqlConnection OpenConnetion() {
            
            try
            {
                connection.Open();
                status = "conectado";
            }
            catch {
                status = "Banco não foi conectado";

            }
            return connection;
        }
        public string closeConnetion() {
            try
            {
                connection.Close();
                status = "Conexão fechada";
            }
            catch {
               status = "Não foi possivel fechar a conecxão";
            }

            return status;
        }
    }
}
