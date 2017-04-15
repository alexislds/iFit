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
    public partial class Form2 : Form
    {
        public Form2()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            int a=10, b=9, c=7;
            double delta, a1, a2;
            delta = (b * b) - (4 * a * b);

            a1 = (-b + Math.Sqrt(delta) / (2*a));
            
            string aux = Convert.ToString(a1);

            MessageBox.Show("aux :" +aux ,"Resultado A1");

        }
    }
}
