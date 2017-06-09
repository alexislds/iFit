namespace WindowsFormsApplication1
{
    partial class Form2
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
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle2 = new System.Windows.Forms.DataGridViewCellStyle();
            this.dgListarUsuario = new System.Windows.Forms.DataGridView();
            this.nome = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.idade = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.sexo = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.email = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.Academia = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.ID = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.btnLimparLista = new System.Windows.Forms.Button();
            this.btnExcluir = new System.Windows.Forms.Button();
            this.button1 = new System.Windows.Forms.Button();
            this.menuStrip1 = new System.Windows.Forms.MenuStrip();
            this.fichasToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.listarUsuariosToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.listarAlunosToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.listarProfessoresToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.adcionarUsuarioToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.lblLista = new System.Windows.Forms.Label();
            ((System.ComponentModel.ISupportInitialize)(this.dgListarUsuario)).BeginInit();
            this.menuStrip1.SuspendLayout();
            this.SuspendLayout();
            // 
            // dgListarUsuario
            // 
            this.dgListarUsuario.AccessibleName = "";
            this.dgListarUsuario.AccessibleRole = System.Windows.Forms.AccessibleRole.ScrollBar;
            dataGridViewCellStyle2.BackColor = System.Drawing.Color.White;
            dataGridViewCellStyle2.ForeColor = System.Drawing.SystemColors.ActiveCaptionText;
            this.dgListarUsuario.AlternatingRowsDefaultCellStyle = dataGridViewCellStyle2;
            this.dgListarUsuario.AutoSizeColumnsMode = System.Windows.Forms.DataGridViewAutoSizeColumnsMode.Fill;
            this.dgListarUsuario.AutoSizeRowsMode = System.Windows.Forms.DataGridViewAutoSizeRowsMode.AllHeaders;
            this.dgListarUsuario.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dgListarUsuario.Columns.AddRange(new System.Windows.Forms.DataGridViewColumn[] {
            this.nome,
            this.idade,
            this.sexo,
            this.email,
            this.Academia,
            this.ID});
            this.dgListarUsuario.GridColor = System.Drawing.Color.AliceBlue;
            this.dgListarUsuario.Location = new System.Drawing.Point(12, 41);
            this.dgListarUsuario.Name = "dgListarUsuario";
            this.dgListarUsuario.Size = new System.Drawing.Size(903, 322);
            this.dgListarUsuario.TabIndex = 1;
            this.dgListarUsuario.CellContentClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.dgListarUsuario_CellContentClick);
            this.dgListarUsuario.SelectionChanged += new System.EventHandler(this.dgListarUsuario_SelectionChanged);
            // 
            // nome
            // 
            this.nome.HeaderText = "Nome";
            this.nome.Name = "nome";
            // 
            // idade
            // 
            this.idade.HeaderText = "Idade";
            this.idade.Name = "idade";
            this.idade.ReadOnly = true;
            // 
            // sexo
            // 
            this.sexo.HeaderText = "Sexo";
            this.sexo.Name = "sexo";
            this.sexo.ReadOnly = true;
            // 
            // email
            // 
            this.email.HeaderText = "E-mail";
            this.email.Name = "email";
            // 
            // Academia
            // 
            this.Academia.HeaderText = "Academia";
            this.Academia.Name = "Academia";
            // 
            // ID
            // 
            this.ID.HeaderText = "Codigo";
            this.ID.Name = "ID";
            this.ID.Visible = false;
            // 
            // btnLimparLista
            // 
            this.btnLimparLista.Location = new System.Drawing.Point(795, 369);
            this.btnLimparLista.Name = "btnLimparLista";
            this.btnLimparLista.Size = new System.Drawing.Size(120, 41);
            this.btnLimparLista.TabIndex = 3;
            this.btnLimparLista.Text = "Limpar";
            this.btnLimparLista.UseVisualStyleBackColor = true;
            this.btnLimparLista.Click += new System.EventHandler(this.btnLimparLista_Click);
            // 
            // btnExcluir
            // 
            this.btnExcluir.Location = new System.Drawing.Point(12, 369);
            this.btnExcluir.Name = "btnExcluir";
            this.btnExcluir.Size = new System.Drawing.Size(114, 45);
            this.btnExcluir.TabIndex = 4;
            this.btnExcluir.Text = "Excluir";
            this.btnExcluir.UseVisualStyleBackColor = true;
            this.btnExcluir.Click += new System.EventHandler(this.btnExcluir_Click);
            // 
            // button1
            // 
            this.button1.Location = new System.Drawing.Point(145, 369);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(115, 45);
            this.button1.TabIndex = 5;
            this.button1.Text = "Salvar ";
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.button1_Click_1);
            // 
            // menuStrip1
            // 
            this.menuStrip1.Items.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.fichasToolStripMenuItem});
            this.menuStrip1.Location = new System.Drawing.Point(0, 0);
            this.menuStrip1.Name = "menuStrip1";
            this.menuStrip1.Size = new System.Drawing.Size(927, 24);
            this.menuStrip1.TabIndex = 6;
            this.menuStrip1.Text = "menuStrip1";
            // 
            // fichasToolStripMenuItem
            // 
            this.fichasToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.listarUsuariosToolStripMenuItem,
            this.listarAlunosToolStripMenuItem,
            this.listarProfessoresToolStripMenuItem,
            this.adcionarUsuarioToolStripMenuItem});
            this.fichasToolStripMenuItem.Name = "fichasToolStripMenuItem";
            this.fichasToolStripMenuItem.Size = new System.Drawing.Size(50, 20);
            this.fichasToolStripMenuItem.Text = "Menu";
            this.fichasToolStripMenuItem.Click += new System.EventHandler(this.fichasToolStripMenuItem_Click);
            // 
            // listarUsuariosToolStripMenuItem
            // 
            this.listarUsuariosToolStripMenuItem.Name = "listarUsuariosToolStripMenuItem";
            this.listarUsuariosToolStripMenuItem.Size = new System.Drawing.Size(165, 22);
            this.listarUsuariosToolStripMenuItem.Text = "Listar Usuarios";
            this.listarUsuariosToolStripMenuItem.Click += new System.EventHandler(this.listarUsuariosToolStripMenuItem_Click);
            // 
            // listarAlunosToolStripMenuItem
            // 
            this.listarAlunosToolStripMenuItem.Name = "listarAlunosToolStripMenuItem";
            this.listarAlunosToolStripMenuItem.Size = new System.Drawing.Size(165, 22);
            this.listarAlunosToolStripMenuItem.Text = "Listar Alunos";
            this.listarAlunosToolStripMenuItem.Click += new System.EventHandler(this.listarAlunosToolStripMenuItem_Click);
            // 
            // listarProfessoresToolStripMenuItem
            // 
            this.listarProfessoresToolStripMenuItem.Name = "listarProfessoresToolStripMenuItem";
            this.listarProfessoresToolStripMenuItem.Size = new System.Drawing.Size(165, 22);
            this.listarProfessoresToolStripMenuItem.Text = "Listar Professores";
            this.listarProfessoresToolStripMenuItem.Click += new System.EventHandler(this.listarProfessoresToolStripMenuItem_Click);
            // 
            // adcionarUsuarioToolStripMenuItem
            // 
            this.adcionarUsuarioToolStripMenuItem.Name = "adcionarUsuarioToolStripMenuItem";
            this.adcionarUsuarioToolStripMenuItem.Size = new System.Drawing.Size(165, 22);
            this.adcionarUsuarioToolStripMenuItem.Text = "Adcionar usuario";
            this.adcionarUsuarioToolStripMenuItem.Click += new System.EventHandler(this.adcionarUsuarioToolStripMenuItem_Click);
            // 
            // lblLista
            // 
            this.lblLista.AutoSize = true;
            this.lblLista.Location = new System.Drawing.Point(412, 24);
            this.lblLista.Name = "lblLista";
            this.lblLista.Size = new System.Drawing.Size(0, 13);
            this.lblLista.TabIndex = 7;
            // 
            // Form2
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(927, 422);
            this.Controls.Add(this.lblLista);
            this.Controls.Add(this.button1);
            this.Controls.Add(this.btnExcluir);
            this.Controls.Add(this.btnLimparLista);
            this.Controls.Add(this.dgListarUsuario);
            this.Controls.Add(this.menuStrip1);
            this.MainMenuStrip = this.menuStrip1;
            this.MaximizeBox = false;
            this.MaximumSize = new System.Drawing.Size(943, 461);
            this.Name = "Form2";
            this.Text = "Ifit";
            this.Load += new System.EventHandler(this.Form2_Load);
            ((System.ComponentModel.ISupportInitialize)(this.dgListarUsuario)).EndInit();
            this.menuStrip1.ResumeLayout(false);
            this.menuStrip1.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion
        private System.Windows.Forms.DataGridView dgListarUsuario;
        private System.Windows.Forms.Button btnLimparLista;
        private System.Windows.Forms.Button btnExcluir;
        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.DataGridViewTextBoxColumn nome;
        private System.Windows.Forms.DataGridViewTextBoxColumn idade;
        private System.Windows.Forms.DataGridViewTextBoxColumn sexo;
        private System.Windows.Forms.DataGridViewTextBoxColumn email;
        private System.Windows.Forms.DataGridViewTextBoxColumn Academia;
        private System.Windows.Forms.DataGridViewTextBoxColumn ID;
        private System.Windows.Forms.MenuStrip menuStrip1;
        private System.Windows.Forms.ToolStripMenuItem fichasToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem listarUsuariosToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem listarAlunosToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem listarProfessoresToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem adcionarUsuarioToolStripMenuItem;
        private System.Windows.Forms.Label lblLista;
    }
}