namespace WindowsFormsApplication1
{
    partial class Cadastro
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.btnSalvar = new System.Windows.Forms.Button();
            this.lblNome = new System.Windows.Forms.Label();
            this.lblEmail = new System.Windows.Forms.Label();
            this.lblIdade = new System.Windows.Forms.Label();
            this.txtSexo = new System.Windows.Forms.TextBox();
            this.txtEmail = new System.Windows.Forms.TextBox();
            this.txtSenha = new System.Windows.Forms.TextBox();
            this.lblSexo = new System.Windows.Forms.Label();
            this.lblSenha = new System.Windows.Forms.Label();
            this.txtNome = new System.Windows.Forms.TextBox();
            this.panel1 = new System.Windows.Forms.Panel();
            this.txtIdade = new System.Windows.Forms.TextBox();
            this.lblErroAcademia = new System.Windows.Forms.Label();
            this.lblErroSenha = new System.Windows.Forms.Label();
            this.lblErroEmail = new System.Windows.Forms.Label();
            this.lblerroSexo = new System.Windows.Forms.Label();
            this.lblErroIdade = new System.Windows.Forms.Label();
            this.lblErroNome = new System.Windows.Forms.Label();
            this.lblAcademia = new System.Windows.Forms.Label();
            this.txtAcademia = new System.Windows.Forms.TextBox();
            this.panel1.SuspendLayout();
            this.SuspendLayout();
            // 
            // btnSalvar
            // 
            this.btnSalvar.Location = new System.Drawing.Point(156, 243);
            this.btnSalvar.Name = "btnSalvar";
            this.btnSalvar.Size = new System.Drawing.Size(109, 27);
            this.btnSalvar.TabIndex = 0;
            this.btnSalvar.Text = "Salvar";
            this.btnSalvar.UseVisualStyleBackColor = true;
            this.btnSalvar.Click += new System.EventHandler(this.button1_Click);
            // 
            // lblNome
            // 
            this.lblNome.AutoSize = true;
            this.lblNome.Location = new System.Drawing.Point(50, 43);
            this.lblNome.Name = "lblNome";
            this.lblNome.Size = new System.Drawing.Size(35, 13);
            this.lblNome.TabIndex = 1;
            this.lblNome.Text = "Nome";
            this.lblNome.Click += new System.EventHandler(this.label1_Click);
            // 
            // lblEmail
            // 
            this.lblEmail.AutoSize = true;
            this.lblEmail.Location = new System.Drawing.Point(50, 140);
            this.lblEmail.Name = "lblEmail";
            this.lblEmail.Size = new System.Drawing.Size(32, 13);
            this.lblEmail.TabIndex = 3;
            this.lblEmail.Text = "Email";
            this.lblEmail.Click += new System.EventHandler(this.lblEmail_Click);
            // 
            // lblIdade
            // 
            this.lblIdade.AutoSize = true;
            this.lblIdade.Location = new System.Drawing.Point(50, 74);
            this.lblIdade.Name = "lblIdade";
            this.lblIdade.Size = new System.Drawing.Size(34, 13);
            this.lblIdade.TabIndex = 4;
            this.lblIdade.Text = "Idade";
            this.lblIdade.TextAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.lblIdade.Click += new System.EventHandler(this.label3_Click);
            // 
            // txtSexo
            // 
            this.txtSexo.Location = new System.Drawing.Point(119, 100);
            this.txtSexo.MaxLength = 1;
            this.txtSexo.Name = "txtSexo";
            this.txtSexo.Size = new System.Drawing.Size(178, 20);
            this.txtSexo.TabIndex = 5;
            this.txtSexo.TextChanged += new System.EventHandler(this.textBox2_TextChanged);
            // 
            // txtEmail
            // 
            this.txtEmail.Location = new System.Drawing.Point(119, 133);
            this.txtEmail.Name = "txtEmail";
            this.txtEmail.Size = new System.Drawing.Size(178, 20);
            this.txtEmail.TabIndex = 6;
            this.txtEmail.TextChanged += new System.EventHandler(this.textBox3_TextChanged);
            // 
            // txtSenha
            // 
            this.txtSenha.Location = new System.Drawing.Point(119, 169);
            this.txtSenha.Name = "txtSenha";
            this.txtSenha.Size = new System.Drawing.Size(178, 20);
            this.txtSenha.TabIndex = 7;
            this.txtSenha.TextChanged += new System.EventHandler(this.textBox4_TextChanged);
            // 
            // lblSexo
            // 
            this.lblSexo.AutoSize = true;
            this.lblSexo.Location = new System.Drawing.Point(50, 107);
            this.lblSexo.Name = "lblSexo";
            this.lblSexo.Size = new System.Drawing.Size(31, 13);
            this.lblSexo.TabIndex = 8;
            this.lblSexo.Text = "Sexo";
            this.lblSexo.TextAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.lblSexo.Click += new System.EventHandler(this.lblSexo_Click);
            // 
            // lblSenha
            // 
            this.lblSenha.AutoSize = true;
            this.lblSenha.Location = new System.Drawing.Point(50, 176);
            this.lblSenha.Name = "lblSenha";
            this.lblSenha.Size = new System.Drawing.Size(38, 13);
            this.lblSenha.TabIndex = 9;
            this.lblSenha.Text = "Senha";
            this.lblSenha.TextAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.lblSenha.Click += new System.EventHandler(this.label1_Click_1);
            // 
            // txtNome
            // 
            this.txtNome.Location = new System.Drawing.Point(119, 36);
            this.txtNome.Name = "txtNome";
            this.txtNome.Size = new System.Drawing.Size(180, 20);
            this.txtNome.TabIndex = 10;
            this.txtNome.TextChanged += new System.EventHandler(this.textBox5_TextChanged);
            // 
            // panel1
            // 
            this.panel1.Controls.Add(this.txtIdade);
            this.panel1.Controls.Add(this.lblErroAcademia);
            this.panel1.Controls.Add(this.lblErroSenha);
            this.panel1.Controls.Add(this.lblErroEmail);
            this.panel1.Controls.Add(this.lblerroSexo);
            this.panel1.Controls.Add(this.lblErroIdade);
            this.panel1.Controls.Add(this.lblErroNome);
            this.panel1.Controls.Add(this.lblAcademia);
            this.panel1.Controls.Add(this.txtAcademia);
            this.panel1.Controls.Add(this.txtNome);
            this.panel1.Controls.Add(this.btnSalvar);
            this.panel1.Controls.Add(this.lblSenha);
            this.panel1.Controls.Add(this.lblSexo);
            this.panel1.Controls.Add(this.txtSexo);
            this.panel1.Controls.Add(this.lblIdade);
            this.panel1.Controls.Add(this.txtSenha);
            this.panel1.Controls.Add(this.lblEmail);
            this.panel1.Controls.Add(this.txtEmail);
            this.panel1.Controls.Add(this.lblNome);
            this.panel1.Location = new System.Drawing.Point(35, 28);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(439, 292);
            this.panel1.TabIndex = 11;
            this.panel1.Paint += new System.Windows.Forms.PaintEventHandler(this.panel1_Paint);
            // 
            // txtIdade
            // 
            this.txtIdade.Location = new System.Drawing.Point(119, 67);
            this.txtIdade.MaxLength = 2;
            this.txtIdade.Name = "txtIdade";
            this.txtIdade.Size = new System.Drawing.Size(178, 20);
            this.txtIdade.TabIndex = 19;
            // 
            // lblErroAcademia
            // 
            this.lblErroAcademia.AutoSize = true;
            this.lblErroAcademia.ForeColor = System.Drawing.Color.Red;
            this.lblErroAcademia.Location = new System.Drawing.Point(315, 208);
            this.lblErroAcademia.Name = "lblErroAcademia";
            this.lblErroAcademia.Size = new System.Drawing.Size(99, 13);
            this.lblErroAcademia.TabIndex = 18;
            this.lblErroAcademia.Text = "informe a academia";
            this.lblErroAcademia.Visible = false;
            // 
            // lblErroSenha
            // 
            this.lblErroSenha.AutoSize = true;
            this.lblErroSenha.ForeColor = System.Drawing.Color.Red;
            this.lblErroSenha.Location = new System.Drawing.Point(315, 176);
            this.lblErroSenha.Name = "lblErroSenha";
            this.lblErroSenha.Size = new System.Drawing.Size(75, 13);
            this.lblErroSenha.TabIndex = 17;
            this.lblErroSenha.Text = "senha inválida";
            this.lblErroSenha.Visible = false;
            // 
            // lblErroEmail
            // 
            this.lblErroEmail.AutoSize = true;
            this.lblErroEmail.ForeColor = System.Drawing.Color.Red;
            this.lblErroEmail.Location = new System.Drawing.Point(315, 140);
            this.lblErroEmail.Name = "lblErroEmail";
            this.lblErroEmail.Size = new System.Drawing.Size(71, 13);
            this.lblErroEmail.TabIndex = 16;
            this.lblErroEmail.Text = "Email inválido";
            this.lblErroEmail.Visible = false;
            // 
            // lblerroSexo
            // 
            this.lblerroSexo.AutoSize = true;
            this.lblerroSexo.ForeColor = System.Drawing.Color.Red;
            this.lblerroSexo.Location = new System.Drawing.Point(315, 103);
            this.lblerroSexo.Name = "lblerroSexo";
            this.lblerroSexo.Size = new System.Drawing.Size(86, 13);
            this.lblerroSexo.TabIndex = 15;
            this.lblerroSexo.Text = "preencha o sexo";
            this.lblerroSexo.Visible = false;
            // 
            // lblErroIdade
            // 
            this.lblErroIdade.AutoSize = true;
            this.lblErroIdade.ForeColor = System.Drawing.Color.Red;
            this.lblErroIdade.Location = new System.Drawing.Point(315, 70);
            this.lblErroIdade.Name = "lblErroIdade";
            this.lblErroIdade.Size = new System.Drawing.Size(68, 13);
            this.lblErroIdade.TabIndex = 14;
            this.lblErroIdade.Text = "Idade Errada";
            this.lblErroIdade.Visible = false;
            // 
            // lblErroNome
            // 
            this.lblErroNome.AutoSize = true;
            this.lblErroNome.ForeColor = System.Drawing.Color.Red;
            this.lblErroNome.Location = new System.Drawing.Point(315, 39);
            this.lblErroNome.Name = "lblErroNome";
            this.lblErroNome.Size = new System.Drawing.Size(118, 13);
            this.lblErroNome.TabIndex = 13;
            this.lblErroNome.Text = "Preencha corretamente";
            this.lblErroNome.Visible = false;
            // 
            // lblAcademia
            // 
            this.lblAcademia.AutoSize = true;
            this.lblAcademia.Location = new System.Drawing.Point(50, 208);
            this.lblAcademia.Name = "lblAcademia";
            this.lblAcademia.Size = new System.Drawing.Size(54, 13);
            this.lblAcademia.TabIndex = 12;
            this.lblAcademia.Text = "Academia";
            this.lblAcademia.TextAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.lblAcademia.Click += new System.EventHandler(this.label2_Click);
            // 
            // txtAcademia
            // 
            this.txtAcademia.Location = new System.Drawing.Point(119, 201);
            this.txtAcademia.Name = "txtAcademia";
            this.txtAcademia.Size = new System.Drawing.Size(178, 20);
            this.txtAcademia.TabIndex = 11;
            // 
            // Cadastro
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(553, 332);
            this.Controls.Add(this.panel1);
            this.Name = "Cadastro";
            this.Text = "Cadastro";
            this.panel1.ResumeLayout(false);
            this.panel1.PerformLayout();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Button btnSalvar;
        private System.Windows.Forms.Label lblNome;
        private System.Windows.Forms.Label lblEmail;
        private System.Windows.Forms.Label lblIdade;
        private System.Windows.Forms.TextBox txtSexo;
        private System.Windows.Forms.TextBox txtEmail;
        private System.Windows.Forms.TextBox txtSenha;
        private System.Windows.Forms.Label lblSexo;
        private System.Windows.Forms.Label lblSenha;
        private System.Windows.Forms.TextBox txtNome;
        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.Label lblAcademia;
        private System.Windows.Forms.TextBox txtAcademia;
        private System.Windows.Forms.Label lblErroNome;
        private System.Windows.Forms.Label lblErroAcademia;
        private System.Windows.Forms.Label lblErroSenha;
        private System.Windows.Forms.Label lblErroEmail;
        private System.Windows.Forms.Label lblerroSexo;
        private System.Windows.Forms.Label lblErroIdade;
        private System.Windows.Forms.TextBox txtIdade;
    }
}